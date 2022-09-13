<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Order;

use Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract;
use Heptacom\HeptaConnect\Dataset\Ecommerce\PaymentMethod\PaymentMethod;

class Transaction extends DatasetEntityContract
{
    protected float $amountTotal = .0;

    protected float $amountNet = .0;

    protected float $totalTax = .0;

    protected string $transactionCode = '';

    protected PaymentState $paymentState;

    protected PaymentMethod $paymentMethod;

    private LineItemCollection $lineItems;

    public function __construct()
    {
        parent::__construct();

        $this->paymentState = new PaymentState();
        $this->paymentMethod = new PaymentMethod();
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

    public function getPaymentState(): PaymentState
    {
        return $this->paymentState;
    }

    public function setPaymentState(PaymentState $paymentState): self
    {
        $this->paymentState = $paymentState;

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

    public function getTransactionCode(): string
    {
        return $this->transactionCode;
    }

    public function setTransactionCode(string $transactionCode): self
    {
        $this->transactionCode = $transactionCode;

        return $this;
    }

    public function getPaymentMethod(): PaymentMethod
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod(PaymentMethod $paymentMethod): self
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }
}
