<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Property;

use Heptacom\HeptaConnect\Dataset\Base\DatasetEntityCollection;

/**
 * @extends \Heptacom\HeptaConnect\Dataset\Base\DatasetEntityCollection<\Heptacom\HeptaConnect\Dataset\Ecommerce\Property\PropertyValue>
 */
class PropertyValueCollection extends DatasetEntityCollection
{
    protected function getT(): string
    {
        return PropertyValue::class;
    }
}
