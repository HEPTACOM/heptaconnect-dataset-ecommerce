<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Product;

use Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract;
use Heptacom\HeptaConnect\Dataset\Base\Translatable\TranslatableString;

class Category extends DatasetEntityContract
{
    protected TranslatableString $name;

    protected ?Category $parent = null;

    public function __construct()
    {
        parent::__construct();

        $this->name = new TranslatableString();
    }

    public function getName(): TranslatableString
    {
        return $this->name;
    }

    public function setName(TranslatableString $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getParent(): ?Category
    {
        return $this->parent;
    }

    public function setParent(?Category $parent): Category
    {
        $this->parent = $parent;

        return $this;
    }
}
