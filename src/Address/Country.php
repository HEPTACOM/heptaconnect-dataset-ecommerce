<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Address;

use Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract;

class Country extends DatasetEntityContract
{
    protected string $iso = '';

    protected string $iso3 = '';

    protected bool $active = false;

    protected bool $taxFree = false;

    public function getIso(): string
    {
        return $this->iso;
    }

    public function setIso(string $iso): self
    {
        $this->iso = $iso;

        return $this;
    }

    public function getIso3(): string
    {
        return $this->iso3;
    }

    public function setIso3(string $iso3): self
    {
        $this->iso3 = $iso3;

        return $this;
    }

    public function isActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function isTaxFree(): bool
    {
        return $this->taxFree;
    }

    public function setTaxFree(bool $taxFree): self
    {
        $this->taxFree = $taxFree;

        return $this;
    }
}
