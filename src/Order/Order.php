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

    /**
     * @deprecated Create a "Transaction" instead and it to the "TransactionCollection" of the ”Order"
     */
    protected PaymentState $paymentState;

    protected ?string $deliveryTrackingCode = null;

    /**
     * @deprecated This value is part of individual Transactions in the TransactionCollection going forward
     */
    protected ?string $paymentTransactionCode = null;

    /**
     * @deprecated This value is part of individual Transactions in the TransactionCollection going forward
     */
    protected ?PaymentMethod $paymentMethod = null;

    /**
     * @deprecated This value is part of individual Transactions in the TransactionCollection going forward
     */
    protected ?Refund $refund = null;

    protected TransactionCollection $transactions;

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
        $this->transactions = new TransactionCollection();
        $this->paymentState = new PaymentState();
    }

    public function __wakeup(): void
    {
        if (!isset($this->transactions)) {
            $this->transactions = new TransactionCollection();
        }
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

    public function getDeliveryTrackingCode(): ?string
    {
        return $this->deliveryTrackingCode;
    }

    public function setDeliveryTrackingCode(?string $deliveryTrackingCode): self
    {
        $this->deliveryTrackingCode = $deliveryTrackingCode;

        return $this;
    }

    /**
     * @deprecated This value is part of individual Transactions in the TransactionCollection going forward
     */
    public function getPaymentState(): PaymentState
    {
        @trigger_error('heptacom/heptaconnect-dataset-ecommerce:0.9.0.0 Using "getPaymentState()" on Orders is deprecated. Transactions and their states are handled by "Transaction" in the "TransactionCollection" going forward.', \E_USER_DEPRECATED);

        return $this->paymentState;
    }

    /**
     * @deprecated This value is part of individual Transactions in the TransactionCollection going forward
     */
    public function setPaymentState(PaymentState $paymentState): self
    {
        @trigger_error('heptacom/heptaconnect-dataset-ecommerce:0.9.0.0 Using "setPaymentState()" on Orders is deprecated. Transactions and their states are handled by "Transaction" in the "TransactionCollection" going forward.', \E_USER_DEPRECATED);
        $this->paymentState = $paymentState;

        return $this;
    }

    /**
     * @deprecated This value is part of individual Transactions in the TransactionCollection going forward
     */
    public function getPaymentTransactionCode(): ?string
    {
        @trigger_error('heptacom/heptaconnect-dataset-ecommerce:0.9.0.0 Using "getPaymentTransactionCode()" on Orders is deprecated. Transactions and their trackingCodes are handled by "Transaction" in the "TransactionCollection" going forward.', \E_USER_DEPRECATED);

        return $this->paymentTransactionCode;
    }

    /**
     * @deprecated This value is part of individual Transactions in the TransactionCollection going forward
     */
    public function setPaymentTransactionCode(?string $paymentTransactionCode): self
    {
        @trigger_error('heptacom/heptaconnect-dataset-ecommerce:0.9.0.0 Using "setPaymentTransactionCode()" on Orders is deprecated. Transactions and their trackingCodes are handled by "Transaction" in the "TransactionCollection" going forward.', \E_USER_DEPRECATED);
        $this->paymentTransactionCode = $paymentTransactionCode;

        return $this;
    }

    /**
     * @deprecated This value is part of individual Transactions in the TransactionCollection going forward
     */
    public function getPaymentMethod(): ?PaymentMethod
    {
        @trigger_error('heptacom/heptaconnect-dataset-ecommerce:0.9.0.0 Using "getPaymentMethod()" on Orders is deprecated. Transactions and their paymentMethods are handled by "Transaction" in the "TransactionCollection" going forward.', \E_USER_DEPRECATED);

        return $this->paymentMethod;
    }

    /**
     * @deprecated This value is part of individual Transactions in the TransactionCollection going forward
     */
    public function setPaymentMethod(?PaymentMethod $paymentMethod): self
    {
        @trigger_error('heptacom/heptaconnect-dataset-ecommerce:0.9.0.0 Using "setPaymentMethod()" on Orders is deprecated. Transactions and their paymentMethods are handled by "Transaction" in the "TransactionCollection" going forward.', \E_USER_DEPRECATED);
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * @deprecated This value is part of individual Transactions in the TransactionCollection going forward
     */
    public function isRefunded(): bool
    {
        @trigger_error('heptacom/heptaconnect-dataset-ecommerce:0.9.0.0 Using "isRefunded()" on Orders is deprecated. Refunds are handled as "Transaction" in the "TransactionCollection" going forward.', \E_USER_DEPRECATED);

        return $this->refund instanceof Refund;
    }

    /**
     * @deprecated This value is part of individual Transactions in the TransactionCollection going forward
     */
    public function getRefund(): ?Refund
    {
        @trigger_error('heptacom/heptaconnect-dataset-ecommerce:0.9.0.0 Using "getRefund()" on Orders is deprecated. Refunds are handled as "Transaction" in the "TransactionCollection" going forward.', \E_USER_DEPRECATED);

        return $this->refund;
    }

    /**
     * @deprecated This value is part of individual Transactions in the TransactionCollection going forward
     */
    public function setRefund(?Refund $refund): self
    {
        @trigger_error('heptacom/heptaconnect-dataset-ecommerce:0.9.0.0 Using "setRefund()" on Orders is deprecated. Refunds are handled as "Transaction" in the "TransactionCollection" going forward.', \E_USER_DEPRECATED);
        $this->refund = $refund;

        return $this;
    }

    public function getTransactions(): TransactionCollection
    {
        return $this->transactions;
    }

    public function setTransactions(TransactionCollection $transactions): self
    {
        $this->transactions = $transactions;

        return $this;
    }
}
