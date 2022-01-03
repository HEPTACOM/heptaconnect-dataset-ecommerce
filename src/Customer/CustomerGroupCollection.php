<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Customer;

use Heptacom\HeptaConnect\Dataset\Base\DatasetEntityCollection;

/**
 * @extends \Heptacom\HeptaConnect\Dataset\Base\DatasetEntityCollection<\Heptacom\HeptaConnect\Dataset\Ecommerce\Customer\CustomerGroup>
 */
class CustomerGroupCollection extends DatasetEntityCollection
{
    protected function getT(): string
    {
        return CustomerGroup::class;
    }
}
