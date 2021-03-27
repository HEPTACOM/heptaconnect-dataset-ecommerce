<?php
declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Tax;

use Heptacom\HeptaConnect\Dataset\Base\DatasetEntityCollection;

/**
 * @extends \Heptacom\HeptaConnect\Dataset\Base\DatasetEntityCollection<\Heptacom\HeptaConnect\Dataset\Ecommerce\Tax\TaxGroup>
 */
class TaxGroupCollection extends DatasetEntityCollection
{
    public function getT(): string
    {
        return TaxGroup::class;
    }
}
