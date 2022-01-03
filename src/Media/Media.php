<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Media;

use Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract;
use Heptacom\HeptaConnect\Dataset\Base\Translatable\TranslatableString;

class Media extends DatasetEntityContract
{
    protected string $normalizedStream = '';

    protected string $mimeType = '';

    protected string $filename = '';

    protected TranslatableString $title;

    public function __construct()
    {
        parent::__construct();
        $this->title = new TranslatableString();
    }

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

    public function getFilename(): string
    {
        return $this->filename;
    }

    public function setFilename(string $filename): self
    {
        $this->filename = $filename;

        return $this;
    }

    public function getTitle(): TranslatableString
    {
        return $this->title;
    }

    public function setTitle(TranslatableString $title): self
    {
        $this->title = $title;

        return $this;
    }
}
