<?php
declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Price;

use Heptacom\HeptaConnect\Dataset\Base\DatasetEntityCollection;

class ConditionCollection extends DatasetEntityCollection
{
    protected function getT(): string
    {
        return Condition::class;
    }
}
