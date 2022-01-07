<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Order\LineItem;

use Heptacom\HeptaConnect\Dataset\Ecommerce\Order\LineItem;
use Heptacom\HeptaConnect\Dataset\Ecommerce\Order\LineItemCollection;

class Discount extends LineItem
{
    /**
     * This value represents the percentage of the discount.
     * If this value is null, it is implied that the discount is an absolute price.
     */
    protected ?float $percentage = null;

    /**
     * This collection holds references to all line-items that are affected by the discount.
     * If this collection is null, it is implied that the discount affects all line-items.
     */
    protected ?LineItemCollection $relatedLineItems = null;

    public function isAbsolute(): bool
    {
        return $this->percentage === null;
    }

    public function getPercentage(): ?float
    {
        return $this->percentage;
    }

    public function setPercentage(?float $percentage): self
    {
        $this->percentage = $percentage;

        return $this;
    }

    public function getRelatedLineItems(): ?LineItemCollection
    {
        return $this->relatedLineItems;
    }

    public function setRelatedLineItems(?LineItemCollection $relatedLineItems): self
    {
        $this->relatedLineItems = $relatedLineItems;

        return $this;
    }
}
