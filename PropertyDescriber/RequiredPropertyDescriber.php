<?php

/*
 * This file is part of the NelmioApiDocBundle package.
 *
 * (c) Nelmio
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nelmio\ApiDocBundle\PropertyDescriber;

use OpenApi\Annotations as OA;
use OpenApi\Generator;

/**
 * Mark a property as required if it is not nullable.
 */
final class RequiredPropertyDescriber implements PropertyDescriberInterface, PropertyDescriberAwareInterface
{
    use PropertyDescriberAwareTrait;

    /**
     * @var bool
     */
    private $isCalled = false;

    public function describe(array $types, OA\Schema $property, array $groups = null, ?OA\Schema $schema = null, array $context = [])
    {
        $this->isCalled = true;
        $this->propertyDescriber->describe($types, $property, $groups, $schema, $context);
        $this->isCalled = false;

        if (!$property instanceof OA\Property) {
            return;
        }

        if (true !== $property->nullable) {
            $existingRequiredFields = Generator::UNDEFINED !== $schema->required ? $schema->required : [];
            $existingRequiredFields[] = $property->property;

            $schema->required = array_values(array_unique($existingRequiredFields));
        }
    }

    public function supports(array $types): bool
    {
        if ($this->isCalled) {
            return false;
        }

        return true;
    }
}
