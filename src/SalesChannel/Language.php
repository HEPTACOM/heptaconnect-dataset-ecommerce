<?php
declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\SalesChannel;

use Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract;

class Language extends DatasetEntityContract
{
    protected string $localeCode = '';

    public function getLocaleCode(): string
    {
        return $this->localeCode;
    }

    public function setLocaleCode(string $localeCode): self
    {
        $this->localeCode = $localeCode;

        return $this;
    }
}
