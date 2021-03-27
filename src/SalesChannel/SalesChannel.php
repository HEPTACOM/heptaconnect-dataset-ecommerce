<?php
declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\SalesChannel;

use Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract;
use Heptacom\HeptaConnect\Dataset\Base\Translatable\TranslatableString;

class SalesChannel extends DatasetEntityContract
{
    protected TranslatableString $name;

    public function getName(): TranslatableString
    {
        return $this->name;
    }

    public function setName(TranslatableString $name): self
    {
        $this->name = $name;

        return $this;
    }
}
