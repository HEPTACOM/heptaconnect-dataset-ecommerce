<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Product;

use Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract;
use Heptacom\HeptaConnect\Dataset\Base\Translatable\TranslatableString;

class Manufacturer extends DatasetEntityContract
{
    protected TranslatableString $name;

    public function __construct()
    {
        parent::__construct();

        $this->name = new TranslatableString();
    }

    public function getName(): TranslatableString
    {
        return $this->name;
    }

    public function setName(TranslatableString $name): Manufacturer
    {
        $this->name = $name;

        return $this;
    }
}
