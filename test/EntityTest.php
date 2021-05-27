<?php
declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Test;

use Heptacom\HeptaConnect\Dataset\Base\Contract\CollectionInterface;
use Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract;
use Heptacom\HeptaConnect\Dataset\Ecommerce;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Address\Address
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Address\Country
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Address\CountryState
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Address\Salutation
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Currency\Currency
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Customer\Customer
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Customer\CustomerDiscountGroup
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Customer\CustomerGroup
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Customer\CustomerPriceGroup
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Media\Media
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Order\LineItem
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Order\LineItem\Discount
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Order\LineItem\Product
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Order\LineItem\Shipping
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Order\LineItem\Text
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Order\LineItem\Voucher
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Order
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Order\OrderState
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Order\PaymentState
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\PaymentMethod\PaymentMethod
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Price\Condition\CustomerDiscountGroupCondition
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Price\Condition\CustomerPriceGroupCondition
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Price\Condition\ShippingCountryCondition
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Price\Condition\ValidityPeriodCondition
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Price\Price
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Product\Category
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Product\Manufacturer
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Product\Product
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Product\Unit
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Property\PropertyGroup
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Property\PropertyValue
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\SalesChannel\Language
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\SalesChannel\SalesChannel
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\ShippingMethod\ShippingMethod
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Tax\TaxGroupRuleCondition\CountryCondition
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Tax\TaxGroup
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Tax\TaxGroupRule
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Tax\TaxGroupRuleCondition
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Tax\TaxRule
 */
class EntityTest extends TestCase
{
    public function testAddressAddress(): void
    {
        $AddressAddress = new Ecommerce\Address\Address();

        // TODO test setting all properties

        $this->entity($AddressAddress);

        // TODO test collection
    }

    public function testAddressCountry(): void
    {
        $AddressCountry = new Ecommerce\Address\Country();

        // TODO test setting all properties

        $this->entity($AddressCountry);

        // TODO test collection
    }

    public function testAddressCountryState(): void
    {
        $AddressCountryState = new Ecommerce\Address\CountryState();

        // TODO test setting all properties

        $this->entity($AddressCountryState);

        // TODO test collection
    }

    public function testAddressSalutation(): void
    {
        $AddressSalutation = new Ecommerce\Address\Salutation();

        // TODO test setting all properties

        $this->entity($AddressSalutation);

        // TODO test collection
    }

    public function testCurrencyCurrency(): void
    {
        $CurrencyCurrency = new Ecommerce\Currency\Currency();

        // TODO test setting all properties

        $this->entity($CurrencyCurrency);

        // TODO test collection
    }

    public function testCustomerCustomer(): void
    {
        $CustomerCustomer = new Ecommerce\Customer\Customer();

        // TODO test setting all properties

        $this->entity($CustomerCustomer);

        // TODO test collection
    }

    public function testCustomerCustomerDiscountGroup(): void
    {
        $CustomerCustomerDiscountGroup = new Ecommerce\Customer\CustomerDiscountGroup();

        // TODO test setting all properties

        $this->entity($CustomerCustomerDiscountGroup);

        // TODO test collection
    }

    public function testCustomerCustomerGroup(): void
    {
        $CustomerCustomerGroup = new Ecommerce\Customer\CustomerGroup();

        // TODO test setting all properties

        $this->entity($CustomerCustomerGroup);

        // TODO test collection
    }

    public function testCustomerCustomerPriceGroup(): void
    {
        $CustomerCustomerPriceGroup = new Ecommerce\Customer\CustomerPriceGroup();

        // TODO test setting all properties

        $this->entity($CustomerCustomerPriceGroup);

        // TODO test collection
    }

    public function testMediaMedia(): void
    {
        $MediaMedia = new Ecommerce\Media\Media();

        // TODO test setting all properties

        $this->entity($MediaMedia);

        // TODO test collection
    }

    public function testOrderLineItemDiscount(): void
    {
        $OrderLineItemDiscount = new Ecommerce\Order\LineItem\Discount();

        // TODO test setting all properties

        $this->entity($OrderLineItemDiscount);

        // TODO test collection
    }

    public function testOrderLineItemProduct(): void
    {
        $OrderLineItemProduct = new Ecommerce\Order\LineItem\Product();

        // TODO test setting all properties

        $this->entity($OrderLineItemProduct);

        // TODO test collection
    }

    public function testOrderLineItemShipping(): void
    {
        $OrderLineItemShipping = new Ecommerce\Order\LineItem\Shipping();

        // TODO test setting all properties

        $this->entity($OrderLineItemShipping);

        // TODO test collection
    }

    public function testOrderLineItemText(): void
    {
        $OrderLineItemText = new Ecommerce\Order\LineItem\Text();

        // TODO test setting all properties

        $this->entity($OrderLineItemText);

        // TODO test collection
    }

    public function testOrderLineItemVoucher(): void
    {
        $OrderLineItemVoucher = new Ecommerce\Order\LineItem\Voucher();

        // TODO test setting all properties

        $this->entity($OrderLineItemVoucher);

        // TODO test collection
    }

    public function testOrderOrder(): void
    {
        $OrderOrder = new Ecommerce\Order\Order();

        // TODO test setting all properties

        $this->entity($OrderOrder);

        // TODO test collection
    }

    public function testOrderOrderState(): void
    {
        $OrderOrderState = new Ecommerce\Order\OrderState();

        // TODO test setting all properties

        $this->entity($OrderOrderState);

        // TODO test collection
    }

    public function testOrderPaymentState(): void
    {
        $OrderPaymentState = new Ecommerce\Order\PaymentState();

        // TODO test setting all properties

        $this->entity($OrderPaymentState);

        // TODO test collection
    }

    public function testPaymentMethodPaymentMethod(): void
    {
        $PaymentMethodPaymentMethod = new Ecommerce\PaymentMethod\PaymentMethod();

        // TODO test setting all properties

        $this->entity($PaymentMethodPaymentMethod);

        // TODO test collection
    }

    public function testPriceConditionCustomerDiscountGroupCondition(): void
    {
        $PriceConditionCustomerDiscountGroupCondition = new Ecommerce\Price\Condition\CustomerDiscountGroupCondition();

        // TODO test setting all properties

        $this->entity($PriceConditionCustomerDiscountGroupCondition);

        // TODO test collection
    }

    public function testPriceConditionCustomerPriceGroupCondition(): void
    {
        $PriceConditionCustomerPriceGroupCondition = new Ecommerce\Price\Condition\CustomerPriceGroupCondition();

        // TODO test setting all properties

        $this->entity($PriceConditionCustomerPriceGroupCondition);

        // TODO test collection
    }

    public function testPriceConditionShippingCountryCondition(): void
    {
        $PriceConditionShippingCountryCondition = new Ecommerce\Price\Condition\ShippingCountryCondition();

        // TODO test setting all properties

        $this->entity($PriceConditionShippingCountryCondition);

        // TODO test collection
    }

    public function testPriceConditionValidityPeriodCondition(): void
    {
        $PriceConditionValidityPeriodCondition = new Ecommerce\Price\Condition\ValidityPeriodCondition();

        // TODO test setting all properties

        $this->entity($PriceConditionValidityPeriodCondition);

        // TODO test collection
    }

    public function testPricePrice(): void
    {
        $PricePrice = new Ecommerce\Price\Price();

        // TODO test setting all properties

        $this->entity($PricePrice);

        // TODO test collection
    }

    public function testProductCategory(): void
    {
        $ProductCategory = new Ecommerce\Product\Category();

        // TODO test setting all properties

        $this->entity($ProductCategory);

        // TODO test collection
    }

    public function testProductManufacturer(): void
    {
        $ProductManufacturer = new Ecommerce\Product\Manufacturer();

        // TODO test setting all properties

        $this->entity($ProductManufacturer);

        // TODO test collection
    }

    public function testProductProduct(): void
    {
        $ProductProduct = new Ecommerce\Product\Product();

        // TODO test setting all properties

        $this->entity($ProductProduct);

        // TODO test collection
    }

    public function testProductUnit(): void
    {
        $ProductUnit = new Ecommerce\Product\Unit();

        // TODO test setting all properties

        $this->entity($ProductUnit);

        // TODO test collection
    }

    public function testProductPropertyGroup(): void
    {
        $PropertyGroup = new Ecommerce\Property\PropertyGroup();

        // TODO test setting all properties

        $this->entity($PropertyGroup);

        // TODO test collection
    }

    public function testProductPropertyValue(): void
    {
        $PropertyValue = new Ecommerce\Property\PropertyValue();

        // TODO test setting all properties

        $this->entity($PropertyValue);

        // TODO test collection
    }

    public function testSalesChannelLanguage(): void
    {
        $SalesChannelLanguage = new Ecommerce\SalesChannel\Language();

        // TODO test setting all properties

        $this->entity($SalesChannelLanguage);

        // TODO test collection
    }

    public function testSalesChannelSalesChannel(): void
    {
        $SalesChannelSalesChannel = new Ecommerce\SalesChannel\SalesChannel();

        // TODO test setting all properties

        $this->entity($SalesChannelSalesChannel);

        // TODO test collection
    }

    public function testShippingMethodShippingMethod(): void
    {
        $ShippingMethodShippingMethod = new Ecommerce\ShippingMethod\ShippingMethod();

        // TODO test setting all properties

        $this->entity($ShippingMethodShippingMethod);

        // TODO test collection
    }

    public function testTaxTaxGroupRuleConditionCountryCondition(): void
    {
        $TaxTaxGroupRuleConditionCountryCondition = new Ecommerce\Tax\TaxGroupRuleCondition\CountryCondition();

        // TODO test setting all properties

        $this->entity($TaxTaxGroupRuleConditionCountryCondition);

        // TODO test collection
    }

    public function testTaxTaxGroup(): void
    {
        $TaxTaxGroup = new Ecommerce\Tax\TaxGroup();

        // TODO test setting all properties

        $this->entity($TaxTaxGroup);

        // TODO test collection
    }

    public function testTaxTaxGroupRule(): void
    {
        $TaxTaxGroupRule = new Ecommerce\Tax\TaxGroupRule();

        // TODO test setting all properties

        $this->entity($TaxTaxGroupRule);

        // TODO test collection
    }

    public function testTaxTaxRule(): void
    {
        $TaxTaxRule = new Ecommerce\Tax\TaxRule();

        // TODO test setting all properties

        $this->entity($TaxTaxRule);

        // TODO test collection
    }

    private function entity(DatasetEntityContract $entity): void
    {
        $entity->setPrimaryKey($entity->getPrimaryKey());

        $this->collection($entity->getDependencies());
        $this->string($entity->getPrimaryKey());
    }

    /**
     * @param CollectionInterface<mixed> $collection
     */
    private function collection(CollectionInterface $collection): void
    {
        static::assertCount(0, $collection);
    }

    private function string(?string $string): void
    {
        static::assertEmpty($string);
    }
}
