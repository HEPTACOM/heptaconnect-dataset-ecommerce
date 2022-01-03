<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Property;

use Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract;
use Heptacom\HeptaConnect\Dataset\Base\Translatable\TranslatableString;

class PropertyGroup extends DatasetEntityContract
{
    protected TranslatableString $name;

    protected PropertyValueCollection $values;

    public function __construct()
    {
        parent::__construct();

        $this->name = new TranslatableString();
        $this->values = new PropertyValueCollection();
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

    public function getValues(): PropertyValueCollection
    {
        return $this->values;
    }

    public function setValues(PropertyValueCollection $values): self
    {
        $this->values = $values;

        return $this;
    }
}
