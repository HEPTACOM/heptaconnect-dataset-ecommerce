<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Order;

use Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract;

class PaymentState extends DatasetEntityContract
{
    public const STATE_UNKNOWN = '00000000-0000-0000-0000-000000000000';

    public const STATE_OPEN = '542c39f8-0455-497d-80fc-ee5cdde2adea';

    public const STATE_PAID = '064f1d60-3e9e-40d1-87ff-c6fb3e1f200a';

    public const STATE_REFUNDED = 'e824b95c-f419-4322-bc68-bbee2389253a';

    public const STATE_PARTIALLY_REFUNDED = 'aaa395f0-ba96-4fc3-8d0c-15eea84716a3';

    public const STATE_CANCELLED = 'dd77ecc7-b5be-45f4-85ee-27d6c2b68c9d';

    protected string $state = self::STATE_UNKNOWN;

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): PaymentState
    {
        $this->state = $state;

        return $this;
    }
}
