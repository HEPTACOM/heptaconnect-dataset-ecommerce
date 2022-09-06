<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Transaction;

use Heptacom\HeptaConnect\Dataset\Base\DatasetEntityCollection;

/**
 * @extends \Heptacom\HeptaConnect\Dataset\Base\DatasetEntityCollection<\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Transaction\Transaction>
 */
class TransactionCollection extends DatasetEntityCollection
{
    protected function getT(): string
    {
        return Transaction::class;
    }
}
