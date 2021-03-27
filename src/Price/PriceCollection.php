<?php
declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Price;

use Heptacom\HeptaConnect\Dataset\Base\DatasetEntityCollection;

class PriceCollection extends DatasetEntityCollection
{
    protected function getT(): string
    {
        return Price::class;
    }
}
