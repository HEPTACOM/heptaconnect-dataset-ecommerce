<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Tax;

use Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract;
use Heptacom\HeptaConnect\Dataset\Base\Translatable\TranslatableString;

class TaxGroup extends DatasetEntityContract
{
    protected TranslatableString $name;

    protected string $slug = '';

    protected TaxGroupRuleCollection $rules;

    public function __construct()
    {
        parent::__construct();

        $this->name = new TranslatableString();
        $this->rules = new TaxGroupRuleCollection();
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

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getRules(): TaxGroupRuleCollection
    {
        return $this->rules;
    }

    public function setRules(TaxGroupRuleCollection $rules): self
    {
        $this->rules = $rules;

        return $this;
    }
}
