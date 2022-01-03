<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Tax;

use Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract;

class TaxGroupRule extends DatasetEntityContract
{
    protected float $rate = 0.;

    protected TaxGroupRuleConditionCollection $conditions;

    public function __construct()
    {
        parent::__construct();
        $this->conditions = new TaxGroupRuleConditionCollection();
    }

    public function getRate(): float
    {
        return $this->rate;
    }

    public function setRate(float $rate): self
    {
        $this->rate = $rate;

        return $this;
    }

    public function getConditions(): TaxGroupRuleConditionCollection
    {
        return $this->conditions;
    }

    public function setConditions(TaxGroupRuleConditionCollection $conditions): self
    {
        $this->conditions = $conditions;

        return $this;
    }
}
