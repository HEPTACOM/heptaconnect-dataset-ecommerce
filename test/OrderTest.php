<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Test;

use Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Order;
use Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Payment;
use Heptacom\HeptaConnect\Dataset\Ecommerce\Order\TransactionCollection;
use Heptacom\HeptaConnect\Dataset\Ecommerce\Test\Fixture\StaticPayloads;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Order
 */
class OrderTest extends TestCase
{
    public function testOrderGettersAfterDeserializationFromOrderV0900(): void
    {
        $serializedOrder = StaticPayloads::SERIALIZED_DEFAULT_ORDER_V0_9_0_0;
        $deserializedOrder = \unserialize($serializedOrder);

        static::assertEquals(Order::class, \get_class($deserializedOrder));

        foreach (\get_class_methods($deserializedOrder) as $method) {
            if (\str_starts_with($method, 'get')) {
                if ($method !== 'getAttachment') {
                    $deserializedOrder->$method();
                }
            }
        }
    }

    public function testNoOverwriteOnOrderTransactionsAfterDeserializationFromOrderV0900(): void
    {
        $serializedOrder = StaticPayloads::SERIALIZED_DEFAULT_ORDER_V0_9_0_0;
        /** @var Order $deserializedOrder */
        $deserializedOrder = \unserialize($serializedOrder);
        $transactionCollection = new TransactionCollection();
        $transactionCollection->push([new Payment(), new Payment()]);
        $deserializedOrder->setTransactions($transactionCollection);
        /** @var Order $order */
        $order = \unserialize(\serialize($deserializedOrder));

        static::assertEquals(2, $order->getTransactions()->count());
    }
}
