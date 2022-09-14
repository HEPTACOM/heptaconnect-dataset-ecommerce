<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Shipment;

interface ShipmentAwareInterface
{
    public function getShipment(): ?Shipment;

    public function setShipment(?Shipment $shipment): self;
}
