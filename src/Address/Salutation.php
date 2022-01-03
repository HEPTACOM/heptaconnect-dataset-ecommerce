<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Address;

use Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract;

class Salutation extends DatasetEntityContract
{
    protected string $slug = '';

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }
}
