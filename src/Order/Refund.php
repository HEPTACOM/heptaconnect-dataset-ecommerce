<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Order;

use Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract;

class Refund extends DatasetEntityContract
{
    protected float $amountTotal = .0;

    protected float $amountNet = .0;

    protected float $totalTax = .0;

    protected bool $isFullRefund = true;

    private LineItemCollection $lineItems;

    public function __construct()
    {
        parent::__construct();

        $this->lineItems = new LineItemCollection();
    }

    public function getAmountTotal(): float
    {
        return $this->amountTotal;
    }

    public function setAmountTotal(float $amountTotal): self
    {
        $this->amountTotal = $amountTotal;

        return $this;
    }

    public function getAmountNet(): float
    {
        return $this->amountNet;
    }

    public function setAmountNet(float $amountNet): self
    {
        $this->amountNet = $amountNet;

        return $this;
    }

    public function getTotalTax(): float
    {
        return $this->totalTax;
    }

    public function setTotalTax(float $totalTax): self
    {
        $this->totalTax = $totalTax;

        return $this;
    }

    public function getLineItems(): LineItemCollection
    {
        return $this->lineItems;
    }

    public function setLineItems(LineItemCollection $lineItems): self
    {
        $this->lineItems = $lineItems;

        return $this;
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
