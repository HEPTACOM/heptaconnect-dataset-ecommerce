<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Tax;

use Heptacom\HeptaConnect\Dataset\Base\DatasetEntityCollection;

/**
 * @extends \Heptacom\HeptaConnect\Dataset\Base\DatasetEntityCollection<\Heptacom\HeptaConnect\Dataset\Ecommerce\Tax\TaxGroupRuleCondition>
 */
class TaxGroupRuleConditionCollection extends DatasetEntityCollection
{
    protected function getT(): string
    {
        return TaxGroupRuleCondition::class;
    }
}
