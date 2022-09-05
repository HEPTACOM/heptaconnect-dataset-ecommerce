<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Shipment;

use Heptacom\HeptaConnect\Dataset\Base\DatasetEntityCollection;

/**
 * @extends \Heptacom\HeptaConnect\Dataset\Base\DatasetEntityCollection<\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Shipment\Shipment>
 */
class ShipmentCollection extends DatasetEntityCollection
{
    protected function getT(): string
    {
        return Shipment::class;
    }
}
