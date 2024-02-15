<?php

declare(strict_types=1);

namespace Nelmio\ApiDocBundle\Tests\Functional\ModelDescriber;

use Symfony\Component\Serializer\NameConverter\AdvancedNameConverterInterface;
use Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter;

class NameConverter implements AdvancedNameConverterInterface
{
    public function __construct(private readonly MetadataAwareNameConverter $inner)
    {
    }

    public function normalize(string $propertyName, string $class = null, string $format = null, array $context = []): string
    {
        if (!isset($context['secret_name_converter_value'])) {
            return $this->inner->normalize($propertyName, $class, $format, $context);
        }

        return 'name_converter_context_'.$propertyName;
    }

    public function denormalize(string $propertyName, string $class = null, string $format = null, array $context = []): string
    {
        throw new \RuntimeException('Was not expected to be called');
    }
}
