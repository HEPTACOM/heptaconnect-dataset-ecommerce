<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Order\LineItem;

use Heptacom\HeptaConnect\Dataset\Ecommerce\Order\LineItem;
use Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Shipment\ShipmentAwareInterface;
use Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Shipment\ShipmentAwareTrait;

class Shipping extends LineItem implements ShipmentAwareInterface
{
    use ShipmentAwareTrait;
}
