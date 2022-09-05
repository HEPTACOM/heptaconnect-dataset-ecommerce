<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Shipment;

use Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract;
use Heptacom\HeptaConnect\Dataset\Ecommerce\Address\Address;

class Shipment extends DatasetEntityContract
{
    protected string $shipmentNumber = '';

    protected string $trackingCode = '';

    protected Address $shippingAddress;

    protected ShipmentState $shipmentState;

    public function __construct()
    {
        parent::__construct();

        $this->shippingAddress = new Address();
        $this->shipmentState = new ShipmentState();
    }

    public function getShipmentNumber(): string
    {
        return $this->shipmentNumber;
    }

    public function setShipmentNumber(string $shipmentNumber): void
    {
        $this->shipmentNumber = $shipmentNumber;
    }

    public function getTrackingCode(): string
    {
        return $this->trackingCode;
    }

    public function setTrackingCode(string $trackingCode): void
    {
        $this->trackingCode = $trackingCode;
    }

    public function getShippingAddress(): Address
    {
        return $this->shippingAddress;
    }

    public function setShippingAddress(Address $shippingAddress): void
    {
        $this->shippingAddress = $shippingAddress;
    }

    public function getShipmentState(): ShipmentState
    {
        return $this->shipmentState;
    }

    public function setShipmentState(ShipmentState $shipmentState): void
    {
        $this->shipmentState = $shipmentState;
    }
}
