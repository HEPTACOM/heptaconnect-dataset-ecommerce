<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Tax;

use Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract;

class TaxRule extends DatasetEntityContract
{
    protected float $rate = 0;

    public function getRate(): float
    {
        return $this->rate;
    }

    public function setRate(float $rate): TaxRule
    {
        $this->rate = $rate;

        return $this;
    }
}
