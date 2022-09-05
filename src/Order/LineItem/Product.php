<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Order\LineItem;

use Heptacom\HeptaConnect\Dataset\Ecommerce\Order\LineItem;
use Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Shipment\ShipmentAwareTrait;
use Heptacom\HeptaConnect\Dataset\Ecommerce\Product\Product as ProductEntity;

class Product extends LineItem
{
    use ShipmentAwareTrait;

    protected ProductEntity $product;

    public function __construct()
    {
        parent::__construct();

        $this->product = new ProductEntity();
    }

    public function getProduct(): ProductEntity
    {
        return $this->product;
    }

    public function setProduct(ProductEntity $product): self
    {
        $this->product = $product;

        return $this;
    }
}
