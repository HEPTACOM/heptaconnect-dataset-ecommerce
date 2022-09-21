<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Test;

use Heptacom\HeptaConnect\Dataset\Ecommerce\Order\LineItem\Product as LineItemProduct;
use Heptacom\HeptaConnect\Dataset\Ecommerce\Order\LineItem\Shipping as LineItemShipping;
use Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Order;
use Heptacom\HeptaConnect\Dataset\Ecommerce\Test\Fixture\StaticPayloads;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Order
 */
class OrderLineItemTest extends TestCase
{
    public function testOrderLineItemGettersAfterDeserializationFromOrderV0900(): void
    {
        $serializedOrder = StaticPayloads::SERIALIZED_ORDER_V0_9_0_0_WITH_SHIPMENT_AWARE_LINE_ITEMS;
        /** @var Order $deserializedOrder */
        $deserializedOrder = \unserialize($serializedOrder);
        $deserializedLineItems = $deserializedOrder->getLineItems();

        $lineItemProduct = $deserializedLineItems->offsetGet(0);
        $lineItemShipping = $deserializedLineItems->offsetGet(1);

        static::assertInstanceOf(LineItemProduct::class, $lineItemProduct);
        static::assertInstanceOf(LineItemShipping::class, $lineItemShipping);

        foreach ($deserializedLineItems as $deserializedLineItem) {
            foreach (\get_class_methods($deserializedLineItem) as $method) {
                if (\substr($method, 0, 3) === 'get') {
                    if ($method !== 'getAttachment') {
                        $deserializedLineItem->$method();
                    }
                }
            }
        }
    }
}
