<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Product;

use Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract;
use Heptacom\HeptaConnect\Dataset\Base\Translatable\TranslatableString;
use Heptacom\HeptaConnect\Dataset\Ecommerce\Media\MediaCollection;
use Heptacom\HeptaConnect\Dataset\Ecommerce\Price\PriceCollection;
use Heptacom\HeptaConnect\Dataset\Ecommerce\Property\PropertyValueCollection;
use Heptacom\HeptaConnect\Dataset\Ecommerce\Tax\TaxGroup;

class Product extends DatasetEntityContract
{
    protected string $number = '';

    protected TranslatableString $name;

    protected TranslatableString $shortDescription;

    protected TranslatableString $description;

    protected bool $active = false;

    protected string $gtin = '';

    protected float $inventory = .0;

    protected ?Unit $unit = null;

    protected ?float $purchaseQuantity = .0;

    protected CategoryCollection $categories;

    protected PriceCollection $prices;

    protected TaxGroup $taxGroup;

    protected ?\DateTimeInterface $releaseDate = null;

    protected ?Manufacturer $manufacturer = null;

    protected PropertyValueCollection $properties;

    protected MediaCollection $medias;

    public function __construct()
    {
        parent::__construct();

        $this->name = new TranslatableString();
        $this->shortDescription = new TranslatableString();
        $this->description = new TranslatableString();
        $this->categories = new CategoryCollection();
        $this->prices = new PriceCollection();
        $this->taxGroup = new TaxGroup();
        $this->properties = new PropertyValueCollection();
        $this->medias = new MediaCollection();
    }

    public function __wakeup(): void
    {
        if (!isset($this->medias)) {
            $this->medias = new MediaCollection();
        }
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
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

    public function getShortDescription(): TranslatableString
    {
        return $this->shortDescription;
    }

    public function setShortDescription(TranslatableString $shortDescription): Product
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    public function getDescription(): TranslatableString
    {
        return $this->description;
    }

    public function setDescription(TranslatableString $description): Product
    {
        $this->description = $description;

        return $this;
    }

    public function isActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getGtin(): string
    {
        return $this->gtin;
    }

    public function setGtin(string $gtin): self
    {
        $this->gtin = $gtin;

        return $this;
    }

    public function getInventory(): float
    {
        return $this->inventory;
    }

    public function setInventory(float $inventory): self
    {
        $this->inventory = $inventory;

        return $this;
    }

    public function getUnit(): ?Unit
    {
        return $this->unit;
    }

    public function setUnit(?Unit $unit): self
    {
        $this->unit = $unit;

        return $this;
    }

    public function getPurchaseQuantity(): ?float
    {
        return $this->purchaseQuantity;
    }

    public function setPurchaseQuantity(?float $purchaseQuantity): self
    {
        $this->purchaseQuantity = $purchaseQuantity;

        return $this;
    }

    public function getCategories(): CategoryCollection
    {
        return $this->categories;
    }

    public function setCategories(CategoryCollection $categories): self
    {
        $this->categories = $categories;

        return $this;
    }

    public function getPrices(): PriceCollection
    {
        return $this->prices;
    }

    public function setPrices(PriceCollection $prices): self
    {
        $this->prices = $prices;

        return $this;
    }

    public function getTaxGroup(): TaxGroup
    {
        return $this->taxGroup;
    }

    public function setTaxGroup(TaxGroup $taxGroup): self
    {
        $this->taxGroup = $taxGroup;

        return $this;
    }

    public function getReleaseDate(): ?\DateTimeInterface
    {
        return $this->releaseDate;
    }

    public function setReleaseDate(?\DateTimeInterface $releaseDate): Product
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    public function getManufacturer(): ?Manufacturer
    {
        return $this->manufacturer;
    }

    public function setManufacturer(?Manufacturer $manufacturer): Product
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    public function getProperties(): PropertyValueCollection
    {
        return $this->properties;
    }

    public function setProperties(PropertyValueCollection $properties): self
    {
        $this->properties = $properties;

        return $this;
    }

    public function getMedias(): MediaCollection
    {
        return $this->medias;
    }

    public function setMedias(MediaCollection $medias): self
    {
        $this->medias = $medias;

        return $this;
    }
}
