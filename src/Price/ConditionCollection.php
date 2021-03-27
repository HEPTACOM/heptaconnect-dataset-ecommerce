<?php
declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Price;

use Heptacom\HeptaConnect\Dataset\Base\DatasetEntityCollection;

/**
 * @extends \Heptacom\HeptaConnect\Dataset\Base\DatasetEntityCollection<\Heptacom\HeptaConnect\Dataset\Ecommerce\Price\Condition>
 */
class ConditionCollection extends DatasetEntityCollection
{
    protected function getT(): string
    {
        return Condition::class;
    }
}
