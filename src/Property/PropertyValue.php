<?php
declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Property;

use Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract;
use Heptacom\HeptaConnect\Dataset\Base\Translatable\TranslatableString;

class PropertyValue extends DatasetEntityContract
{
    protected TranslatableString $name;

    protected PropertyGroup $group;

    public function __construct()
    {
        parent::__construct();

        $this->name = new TranslatableString();
        $this->group = new PropertyGroup();
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

    public function getGroup(): PropertyGroup
    {
        return $this->group;
    }

    public function setGroup(PropertyGroup $group): self
    {
        $this->group = $group;

        return $this;
    }
}
