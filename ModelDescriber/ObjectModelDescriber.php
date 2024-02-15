<?php

/*
 * This file is part of the NelmioApiDocBundle package.
 *
 * (c) Nelmio
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nelmio\ApiDocBundle\ModelDescriber;

use Doctrine\Common\Annotations\Reader;
use Nelmio\ApiDocBundle\Describer\ModelRegistryAwareInterface;
use Nelmio\ApiDocBundle\Describer\ModelRegistryAwareTrait;
use Nelmio\ApiDocBundle\Model\Model;
use Nelmio\ApiDocBundle\ModelDescriber\Annotations\AnnotationsReader;
use Nelmio\ApiDocBundle\OpenApiPhp\Util;
use Nelmio\ApiDocBundle\PropertyDescriber\PropertyDescriberInterface;
use OpenApi\Annotations as OA;
use OpenApi\Generator;
use Symfony\Component\PropertyInfo\PropertyInfoExtractorInterface;
use Symfony\Component\PropertyInfo\Type;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactoryInterface;
use Symfony\Component\Serializer\NameConverter\NameConverterInterface;

class ObjectModelDescriber implements ModelDescriberInterface, ModelRegistryAwareInterface
{
    use ModelRegistryAwareTrait;
    use ApplyOpenApiDiscriminatorTrait;
    /** @var PropertyDescriberInterface|PropertyDescriberInterface[] */
    private $propertyDescriber;

    /**
     * @param PropertyDescriberInterface|PropertyDescriberInterface[] $propertyDescribers
     */
    public function __construct(
        private PropertyInfoExtractorInterface $propertyInfo,
        private ?Reader $doctrineReader,
        $propertyDescribers,
        /** @var string[] */
        private array $mediaTypes,
        private ?\Symfony\Component\Serializer\NameConverter\NameConverterInterface $nameConverter = null,
        private bool $useValidationGroups = false,
        private ?\Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactoryInterface $classMetadataFactory = null
    ) {
        if (is_array($propertyDescribers)) {
            trigger_deprecation('nelmio/api-doc-bundle', '4.17', 'Passing an array of PropertyDescriberInterface to %s() is deprecated. Pass a single PropertyDescriberInterface instead.', __METHOD__);
        } else {
            if (!$propertyDescribers instanceof PropertyDescriberInterface) {
                throw new \InvalidArgumentException(sprintf('Argument 3 passed to %s() must be an array of %s or a single %s.', __METHOD__, PropertyDescriberInterface::class, PropertyDescriberInterface::class));
            }
        }
        $this->propertyDescriber = $propertyDescribers;
    }

    public function describe(Model $model, OA\Schema $schema): void
    {
        $class = $model->getType()->getClassName();
        $schema->_context->class = $class;

        $context = ['serializer_groups' => null];
        if (null !== $model->getGroups()) {
            $context['serializer_groups'] = array_filter($model->getGroups(), 'is_string');
        }

        $reflClass = new \ReflectionClass($class);
        $annotationsReader = new AnnotationsReader(
            $this->doctrineReader,
            $this->modelRegistry,
            $this->mediaTypes,
            $this->useValidationGroups
        );
        $classResult = $annotationsReader->updateDefinition($reflClass, $schema);

        if (!$classResult->shouldDescribeModelProperties()) {
            return;
        }

        $schema->type = 'object';

        $mapping = false;
        if (null !== $this->classMetadataFactory) {
            $mapping = $this->classMetadataFactory
                ->getMetadataFor($class)
                ->getClassDiscriminatorMapping();
        }

        if ($mapping && Generator::UNDEFINED === $schema->discriminator) {
            $this->applyOpenApiDiscriminator(
                $model,
                $schema,
                $this->modelRegistry,
                $mapping->getTypeProperty(),
                $mapping->getTypesMapping()
            );
        }

        $propertyInfoProperties = $this->propertyInfo->getProperties($class, $context);

        if (null === $propertyInfoProperties) {
            return;
        }

        // Fix for https://github.com/nelmio/NelmioApiDocBundle/issues/1756
        // The SerializerExtractor does expose private/protected properties for some reason, so we eliminate them here
        $propertyInfoProperties = array_intersect($propertyInfoProperties, $this->propertyInfo->getProperties($class, []) ?? []);

        $defaultValues = array_filter($reflClass->getDefaultProperties(), static fn($value) => null !== $value);

        foreach ($propertyInfoProperties as $propertyName) {
            $serializedName = null !== $this->nameConverter ? $this->nameConverter->normalize($propertyName, $class, null, $model->getSerializationContext()) : $propertyName;

            $reflections = $this->getReflections($reflClass, $propertyName);

            // Check if a custom name is set
            foreach ($reflections as $reflection) {
                $serializedName = $annotationsReader->getPropertyName($reflection, $serializedName);
            }

            $property = Util::getProperty($schema, $serializedName);

            // Interpret additional options
            $groups = $model->getGroups();
            if (isset($groups[$propertyName]) && is_array($groups[$propertyName])) {
                $groups = $model->getGroups()[$propertyName];
            }
            foreach ($reflections as $reflection) {
                $annotationsReader->updateProperty($reflection, $property, $groups);
            }

            // If type manually defined
            if (Generator::UNDEFINED !== $property->type || Generator::UNDEFINED !== $property->ref) {
                continue;
            }

            if (Generator::UNDEFINED === $property->default && array_key_exists($propertyName, $defaultValues)) {
                $property->default = $defaultValues[$propertyName];
            }

            $types = $this->propertyInfo->getTypes($class, $propertyName);
            if (null === $types || 0 === count($types)) {
                throw new \LogicException(sprintf('The PropertyInfo component was not able to guess the type of %s::$%s. You may need to add a `@var` annotation or use `@OA\Property(type="")` to make its type explicit.', $class, $propertyName));
            }

            $this->describeProperty($types, $model, $property, $propertyName, $schema);
        }
    }

    /**
     * @return \ReflectionProperty[]|\ReflectionMethod[]
     */
    private function getReflections(\ReflectionClass $reflClass, string $propertyName): array
    {
        $reflections = [];
        if ($reflClass->hasProperty($propertyName)) {
            $reflections[] = $reflClass->getProperty($propertyName);
        }

        $camelProp = $this->camelize($propertyName);
        foreach (['', 'get', 'is', 'has', 'can', 'add', 'remove', 'set'] as $prefix) {
            if ($reflClass->hasMethod($prefix.$camelProp)) {
                $reflections[] = $reflClass->getMethod($prefix.$camelProp);
            }
        }

        return $reflections;
    }

    /**
     * Camelizes a given string.
     */
    private function camelize(string $string): string
    {
        return str_replace(' ', '', ucwords(str_replace('_', ' ', $string)));
    }

    /**
     * @param Type[] $types
     */
    private function describeProperty(array $types, Model $model, OA\Schema $property, string $propertyName, OA\Schema $schema): void
    {
        $propertyDescribers = is_array($this->propertyDescriber) ? $this->propertyDescriber : [$this->propertyDescriber];

        foreach ($propertyDescribers as $propertyDescriber) {
            if ($propertyDescriber instanceof ModelRegistryAwareInterface) {
                $propertyDescriber->setModelRegistry($this->modelRegistry);
            }
            if ($propertyDescriber->supports($types)) {
                $propertyDescriber->describe($types, $property, $model->getGroups(), $schema, $model->getSerializationContext());

                return;
            }
        }

        throw new \Exception(sprintf('Type "%s" is not supported in %s::$%s. You may use the `@OA\Property(type="")` annotation to specify it manually.', $types[0]->getBuiltinType(), $model->getType()->getClassName(), $propertyName));
    }

    public function supports(Model $model): bool
    {
        return Type::BUILTIN_TYPE_OBJECT === $model->getType()->getBuiltinType()
            && (class_exists($model->getType()->getClassName()) || interface_exists($model->getType()->getClassName()));
    }
}
