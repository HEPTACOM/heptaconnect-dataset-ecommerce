<?php
declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Property;

use Heptacom\HeptaConnect\Dataset\Base\Contract\AttachableInterface;

class PropertyIntegerValueAttachable implements AttachableInterface
{
    protected int $value = 0;

    public function getValue(): int
    {
        return $this->value;
    }

    public function setValue(int $value): self
    {
        $this->value = $value;

        return $this;
    }
}
