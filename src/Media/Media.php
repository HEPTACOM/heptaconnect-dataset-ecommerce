<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Media;

use Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract;
use Heptacom\HeptaConnect\Dataset\Base\File\FileReferenceContract;
use Heptacom\HeptaConnect\Dataset\Base\Translatable\TranslatableString;

class Media extends DatasetEntityContract
{
    protected string $mimeType = '';

    protected string $filename = '';

    protected TranslatableString $title;

    protected ?FileReferenceContract $file = null;

    public function __construct()
    {
        parent::__construct();
        $this->title = new TranslatableString();
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

    public function getFile(): ?FileReferenceContract
    {
        return $this->file;
    }

    public function setFile(?FileReferenceContract $file): self
    {
        $this->file = $file;

        return $this;
    }
}
