<?php
declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Media;

use Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract;

class Media extends DatasetEntityContract
{
    protected string $normalizedStream = '';

    protected string $mimeType = '';

    public function getNormalizedStream(): ?string
    {
        return $this->normalizedStream;
    }

    public function setNormalizedStream(string $normalizedStream): Media
    {
        $this->normalizedStream = $normalizedStream;

        return $this;
    }

    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    public function setMimeType(string $mimeType): Media
    {
        $this->mimeType = $mimeType;

        return $this;
    }
}
