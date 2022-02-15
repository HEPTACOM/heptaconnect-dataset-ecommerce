<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Order;

class Refund extends DatasetEntityContract
{
    protected float $amountTotal = .0;

    protected float $amountNet = .0;

    protected float $totalTax = .0;

    private LineItemCollection $lineItems;

    public function getAmountTotal(): float
    {
        return $this->amountTotal;
    }

    public function setAmountTotal(float $amountTotal): Refund
    {
        $this->amountTotal = $amountTotal;

        return $this;
    }

    public function getAmountNet(): float
    {
        return $this->amountNet;
    }

    public function setAmountNet(float $amountNet): Refund
    {
        $this->amountNet = $amountNet;

        return $this;
    }

    public function getTotalTax(): float
    {
        return $this->totalTax;
    }

    public function setTotalTax(float $totalTax): Refund
    {
        $this->totalTax = $totalTax;

        return $this;
    }

    public function getLineItems(): LineItemCollection
    {
        return $this->lineItems;
    }

    public function setLineItems(LineItemCollection $lineItems): Refund
    {
        $this->lineItems = $lineItems;

        return $this;
    }
}
