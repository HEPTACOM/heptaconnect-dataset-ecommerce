<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Price\Condition;

use Heptacom\HeptaConnect\Dataset\Ecommerce\Price\Condition;

class ValidityPeriodCondition extends Condition
{
    protected ?\DateTimeInterface $begin = null;

    protected ?\DateTimeInterface $end = null;

    public function getBegin(): ?\DateTimeInterface
    {
        return $this->begin;
    }

    public function setBegin(?\DateTimeInterface $begin): self
    {
        $this->begin = $begin;

        return $this;
    }

    public function getEnd(): ?\DateTimeInterface
    {
        return $this->end;
    }

    public function setEnd(?\DateTimeInterface $end): self
    {
        $this->end = $end;

        return $this;
    }
}
