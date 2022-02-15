<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Order;

use Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract;
use Heptacom\HeptaConnect\Dataset\Ecommerce\Address\Address;
use Heptacom\HeptaConnect\Dataset\Ecommerce\Currency\Currency;
use Heptacom\HeptaConnect\Dataset\Ecommerce\Customer\Customer;
use Heptacom\HeptaConnect\Dataset\Ecommerce\PaymentMethod\PaymentMethod;
use Heptacom\HeptaConnect\Dataset\Ecommerce\SalesChannel\Language;

class Order extends DatasetEntityContract
{
    protected string $number = '';

    protected bool $isGross = true;

    protected float $amountTotal = .0;

    protected float $amountNet = .0;

    protected float $totalTax = .0;

    protected float $shippingTotal = .0;

    protected Customer $customer;

    protected Currency $currency;

    protected LineItemCollection $lineItems;

    protected \DateTimeInterface $orderTime;

    protected Address $billingAddress;

    protected Address $shippingAddress;

    protected Language $language;

    protected OrderState $orderState;

    protected PaymentState $paymentState;

    protected ?string $deliveryTrackingCode = null;

    protected ?string $paymentTransactionCode = null;

    protected ?PaymentMethod $paymentMethod = null;

    protected ?Refund $refund = null;

    public function __construct()
    {
        parent::__construct();

        $this->customer = new Customer();
        $this->currency = new Currency();
        $this->lineItems = new LineItemCollection();
        $this->orderTime = new \DateTime();
        $this->billingAddress = new Address();
        $this->shippingAddress = new Address();
        $this->language = new Language();
        $this->orderState = new OrderState();
        $this->paymentState = new PaymentState();
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function isGross(): bool
    {
        return $this->isGross;
    }

    public function setIsGross(bool $isGross): self
    {
        $this->isGross = $isGross;

        return $this;
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

    public function getShippingTotal(): float
    {
        return $this->shippingTotal;
    }

    public function setShippingTotal(float $shippingTotal): self
    {
        $this->shippingTotal = $shippingTotal;

        return $this;
    }

    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    public function setCustomer(Customer $customer): self
    {
        $this->customer = $customer;

        return $this;
    }

    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    public function setCurrency(Currency $currency): self
    {
        $this->currency = $currency;

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

    public function getOrderTime(): \DateTimeInterface
    {
        return $this->orderTime;
    }

    public function setOrderTime(\DateTimeInterface $orderTime): self
    {
        $this->orderTime = $orderTime;

        return $this;
    }

    public function getBillingAddress(): Address
    {
        return $this->billingAddress;
    }

    public function setBillingAddress(Address $billingAddress): self
    {
        $this->billingAddress = $billingAddress;

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

    public function getLanguage(): Language
    {
        return $this->language;
    }

    public function setLanguage(Language $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getOrderState(): OrderState
    {
        return $this->orderState;
    }

    public function setOrderState(OrderState $orderState): self
    {
        $this->orderState = $orderState;

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

    public function getDeliveryTrackingCode(): ?string
    {
        return $this->deliveryTrackingCode;
    }

    public function setDeliveryTrackingCode(?string $deliveryTrackingCode): self
    {
        $this->deliveryTrackingCode = $deliveryTrackingCode;

        return $this;
    }

    public function getPaymentTransactionCode(): ?string
    {
        return $this->paymentTransactionCode;
    }

    public function setPaymentTransactionCode(?string $paymentTransactionCode): self
    {
        $this->paymentTransactionCode = $paymentTransactionCode;

        return $this;
    }

    public function getPaymentMethod(): ?PaymentMethod
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod(?PaymentMethod $paymentMethod): self
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    public function isRefunded(): bool
    {
        return $this->refund instanceof Refund;
    }

    public function getRefund(): ?Refund
    {
        return $this->refund;
    }

    public function setRefund(?Refund $refund): self
    {
        $this->refund = $refund;

        return $this;
    }
}
