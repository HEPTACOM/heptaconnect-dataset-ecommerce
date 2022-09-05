<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Shipment;

trait ShipmentAwareTrait
{
    protected ?Shipment $shipment = null;

    public function setShipment(?Shipment $shipment): self
    {
        $this->shipment = $shipment;

        return $this;
    }

    public function getShipment(): Shipment
    {
        return $this->shipment;
    }
}
