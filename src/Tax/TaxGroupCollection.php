<?php
declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Tax;

use Heptacom\HeptaConnect\Dataset\Base\DatasetEntityCollection;

class TaxGroupCollection extends DatasetEntityCollection
{
    public function getT(): string
    {
        return TaxGroup::class;
    }
}
