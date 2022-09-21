<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Shipment;

/**
 * Describe entities, that are aware of being assigned to a shipment.
 */
interface ShipmentAwareInterface
{
    /**
     * Gets the related shipment.
     */
    public function getShipment(): ?Shipment;

    /**
     * Sets the related shipment.
     *
     * @return static
     */
    public function setShipment(?Shipment $shipment): self;
}
