<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Order;

class Refund extends Transaction
{
    protected bool $isFullRefund = true;

    public function __construct()
    {
        parent::__construct();
    }

    public function isFullRefund(): bool
    {
        return $this->isFullRefund;
    }

    public function setIsFullRefund(bool $isFullRefund): self
    {
        $this->isFullRefund = $isFullRefund;

        return $this;
    }
}
