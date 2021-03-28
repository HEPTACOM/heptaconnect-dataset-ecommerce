<?php
declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Price;

use Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract;
use Heptacom\HeptaConnect\Dataset\Ecommerce\Currency\Currency;
use Heptacom\HeptaConnect\Dataset\Ecommerce\Tax\TaxRuleCollection;

class Price extends DatasetEntityContract
{
    public const TAX_STATUS_NET = 'net';

    public const TAX_STATUS_GROSS = 'gross';

    protected float $net = .0;

    protected float $gross = .0;

    protected int $quantityStart = 0;

    protected string $taxStatus = self::TAX_STATUS_NET;

    protected TaxRuleCollection $taxRules;

    protected ConditionCollection $conditions;

    protected ?Currency $currency = null;

    public function __construct()
    {
        parent::__construct();

        $this->taxRules = new TaxRuleCollection();
        $this->conditions = new ConditionCollection();
    }

    public function getNet(): float
    {
        return $this->net;
    }

    public function setNet(float $net): Price
    {
        $this->net = $net;

        return $this;
    }

    public function getGross(): float
    {
        return $this->gross;
    }

    public function setGross(float $gross): Price
    {
        $this->gross = $gross;

        return $this;
    }

    public function getQuantityStart(): int
    {
        return $this->quantityStart;
    }

    public function setQuantityStart(int $quantityStart): Price
    {
        $this->quantityStart = $quantityStart;

        return $this;
    }

    public function getTaxStatus(): string
    {
        return $this->taxStatus;
    }

    public function setTaxStatus(string $taxStatus): Price
    {
        $this->taxStatus = $taxStatus;

        return $this;
    }

    public function getTaxRules(): TaxRuleCollection
    {
        return $this->taxRules;
    }

    public function setTaxRules(TaxRuleCollection $taxRules): self
    {
        $this->taxRules = $taxRules;

        return $this;
    }

    public function getConditions(): ConditionCollection
    {
        return $this->conditions;
    }

    public function setConditions(ConditionCollection $conditions): self
    {
        $this->conditions = $conditions;

        return $this;
    }

    public function getCurrency(): ?Currency
    {
        return $this->currency;
    }

    public function setCurrency(?Currency $currency): self
    {
        $this->currency = $currency;

        return $this;
    }
}
