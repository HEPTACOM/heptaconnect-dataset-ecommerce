<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Shipment;

use Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract;
use Heptacom\HeptaConnect\Dataset\Ecommerce\Address\Address;
use Heptacom\HeptaConnect\Dataset\Ecommerce\ShippingMethod\ShippingMethod;

class Shipment extends DatasetEntityContract
{
    protected string $trackingCode = '';

    protected Address $shippingAddress;

    protected ShipmentState $shipmentState;

    protected ShippingMethod $shippingMethod;

    public function __construct()
    {
        parent::__construct();

        $this->shippingAddress = new Address();
        $this->shipmentState = new ShipmentState();
        $this->shippingMethod = new ShippingMethod();
    }

    public function getTrackingCode(): string
    {
        return $this->trackingCode;
    }

    public function setTrackingCode(string $trackingCode): self
    {
        $this->trackingCode = $trackingCode;

        return $this;
    }

    public function getShippingAddress(): Address
    {
        return $this->shippingAddress;
    }

    public function setShippingAddress(Address $shippingAddress): self
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    public function getShipmentState(): ShipmentState
    {
        return $this->shipmentState;
    }

    public function setShipmentState(ShipmentState $shipmentState): self
    {
        $this->shipmentState = $shipmentState;

        return $this;
    }

    public function getShippingMethod(): ShippingMethod
    {
        return $this->shippingMethod;
    }

    public function setShippingMethod(ShippingMethod $shippingMethod): self
    {
        $this->shippingMethod = $shippingMethod;

        return $this;
    }
}
