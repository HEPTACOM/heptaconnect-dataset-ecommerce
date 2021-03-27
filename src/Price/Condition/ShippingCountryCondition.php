<?php
declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Price\Condition;

use Heptacom\HeptaConnect\Dataset\Ecommerce\Address\Country;
use Heptacom\HeptaConnect\Dataset\Ecommerce\Price\Condition;

class ShippingCountryCondition extends Condition
{
    protected Country $country;

    public function __construct()
    {
        parent::__construct();
        $this->country = new Country();
    }

    public function getCountry(): Country
    {
        return $this->country;
    }

    public function setCountry(Country $country): void
    {
        $this->country = $country;
    }
}
