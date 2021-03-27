<?php
declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Order;

use Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract;
use Heptacom\HeptaConnect\Dataset\Base\Translatable\TranslatableString;

abstract class LineItem extends DatasetEntityContract
{
    protected ?string $number = null;

    protected TranslatableString $label;

    protected TranslatableString $description;

    protected int $position = 0;

    protected int $quantity = 0;

    protected float $unitPrice = .0;

    protected float $unitPriceNet = .0;

    protected float $totalPrice = .0;

    protected float $totalPriceNet = .0;

    protected float $unitTaxAmount = .0;

    protected float $totalTaxAmount = .0;

    protected float $taxRate = 1.;

    public function __construct()
    {
        parent::__construct();

        $this->label = new TranslatableString();
        $this->description = new TranslatableString();
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getLabel(): TranslatableString
    {
        return $this->label;
    }

    public function setLabel(TranslatableString $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getDescription(): TranslatableString
    {
        return $this->description;
    }

    public function setDescription(TranslatableString $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getUnitPrice(): float
    {
        return $this->unitPrice;
    }

    public function setUnitPrice(float $unitPrice): self
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    public function getUnitPriceNet(): float
    {
        return $this->unitPriceNet;
    }

    public function setUnitPriceNet(float $unitPriceNet): self
    {
        $this->unitPriceNet = $unitPriceNet;

        return $this;
    }

    public function getTotalPrice(): float
    {
        return $this->totalPrice;
    }

    public function setTotalPrice(float $totalPrice): self
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    public function getTotalPriceNet(): float
    {
        return $this->totalPriceNet;
    }

    public function setTotalPriceNet(float $totalPriceNet): self
    {
        $this->totalPriceNet = $totalPriceNet;

        return $this;
    }

    public function getUnitTaxAmount(): float
    {
        return $this->unitTaxAmount;
    }

    public function setUnitTaxAmount(float $unitTaxAmount): self
    {
        $this->unitTaxAmount = $unitTaxAmount;

        return $this;
    }

    public function getTotalTaxAmount(): float
    {
        return $this->totalTaxAmount;
    }

    public function setTotalTaxAmount(float $totalTaxAmount): self
    {
        $this->totalTaxAmount = $totalTaxAmount;

        return $this;
    }

    public function getTaxRate(): float
    {
        return $this->taxRate;
    }

    public function setTaxRate(float $taxRate): self
    {
        $this->taxRate = $taxRate;

        return $this;
    }
}
