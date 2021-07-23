<?php
declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Price\Condition;

use Heptacom\HeptaConnect\Dataset\Ecommerce\Price\Condition;
use Heptacom\HeptaConnect\Dataset\Ecommerce\SalesChannel\SalesChannel;

class SalesChannelCondition extends Condition
{
    protected SalesChannel $salesChannel;

    public function __construct()
    {
        parent::__construct();

        $this->salesChannel = new SalesChannel();
    }

    public function getSalesChannel(): SalesChannel
    {
        return $this->salesChannel;
    }

    public function setSalesChannel(SalesChannel $salesChannel): self
    {
        $this->salesChannel = $salesChannel;

        return $this;
    }
}
