<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Property;

use Heptacom\HeptaConnect\Dataset\Base\DatasetEntityCollection;

/**
 * @extends \Heptacom\HeptaConnect\Dataset\Base\DatasetEntityCollection<\Heptacom\HeptaConnect\Dataset\Ecommerce\Property\PropertyGroup>
 */
class PropertyGroupCollection extends DatasetEntityCollection
{
    protected function getT(): string
    {
        return PropertyGroup::class;
    }
}
