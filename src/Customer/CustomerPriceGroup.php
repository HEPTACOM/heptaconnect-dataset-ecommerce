<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Customer;

use Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract;

class CustomerPriceGroup extends DatasetEntityContract
{
    protected string $name = '';

    protected string $code = '';

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

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
