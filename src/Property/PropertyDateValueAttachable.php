<?php
declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Property;

use Heptacom\HeptaConnect\Dataset\Base\Contract\AttachableInterface;
use Heptacom\HeptaConnect\Dataset\Base\Date;

class PropertyDateValueAttachable implements AttachableInterface
{
    protected Date $value;

    public function __construct()
    {
        $this->value = new Date();
    }

    public function getValue(): Date
    {
        return $this->value;
    }

    public function setValue(Date $value): self
    {
        $this->value = $value;

        return $this;
    }
}
