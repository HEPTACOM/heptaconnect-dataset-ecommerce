<?php
declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Tax;

use Heptacom\HeptaConnect\Dataset\Base\DatasetEntityCollection;

class TaxGroupRuleConditionCollection extends DatasetEntityCollection
{
    protected function getT(): string
    {
        return TaxGroupRuleCondition::class;
    }
}
