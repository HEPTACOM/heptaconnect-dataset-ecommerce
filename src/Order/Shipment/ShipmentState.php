<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Shipment;

class ShipmentState
{
    public const STATE_UNKNOWN = '00000000-0000-0000-0000-000000000000';

    public const STATE_OPEN = 'a2f5e301-6d81-4fe6-a2b6-b29b4387ce6b';

    public const STATE_CANCELLED = 'd9e1be9c-9713-4699-8a1b-de2c291f4c3f';

    public const STATE_RETURNED = 'ed0b3c9f-8246-4adc-a9d3-b3077eea3545';

    public const STATE_SHIPPED = '659cec14-9f11-4d2d-b118-65a90d30e5dc';

    protected string $state = self::STATE_UNKNOWN;

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): void
    {
        $this->state = $state;
    }
}
