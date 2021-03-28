<?php
declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Price\Condition;

use Heptacom\HeptaConnect\Dataset\Ecommerce\Price\Condition;

class CustomerPriceGroupCondition extends Condition
{
    protected string $code = '';

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }
}
