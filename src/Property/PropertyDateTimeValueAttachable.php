<?php
declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Property;

use Heptacom\HeptaConnect\Dataset\Base\Contract\AttachableInterface;

class PropertyDateTimeValueAttachable implements AttachableInterface
{
    protected \DateTimeInterface $value;

    public function __construct()
    {
        $this->value = new \DateTime();
    }

    public function getValue(): \DateTimeInterface
    {
        return $this->value;
    }

    public function setValue(\DateTimeInterface $value): self
    {
        $this->value = $value;

        return $this;
    }
}
