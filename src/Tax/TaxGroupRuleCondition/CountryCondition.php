<?php
declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Tax\TaxGroupRuleCondition;

use Heptacom\HeptaConnect\Dataset\Ecommerce\Address\Country;
use Heptacom\HeptaConnect\Dataset\Ecommerce\Tax\TaxGroupRuleCondition;

class CountryCondition extends TaxGroupRuleCondition
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

    public function setCountry(Country $country): self
    {
        $this->country = $country;

        return $this;
    }
}
