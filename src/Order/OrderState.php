<?php
declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Order;

use Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract;

class OrderState extends DatasetEntityContract
{
    public const STATE_UNKNOWN = '00000000-0000-0000-0000-000000000000';

    public const STATE_OPEN = '0b7c79dd-e515-40e6-bd11-769ad8371145';

    public const STATE_PROGRESS = '2c832778-16d2-477d-afae-8670345659c9';

    public const STATE_COMPLETE = '768b3977-d00b-4adb-b349-312e73847c4b';

    public const STATE_CANCELLED = 'eeaba170-008f-4660-97e0-5b8df1414551';

    protected string $state = self::STATE_UNKNOWN;

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): OrderState
    {
        $this->state = $state;

        return $this;
    }
}
