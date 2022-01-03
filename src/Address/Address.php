<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Address;

use Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract;
use Heptacom\HeptaConnect\Dataset\Base\ScalarCollection\StringCollection;

class Address extends DatasetEntityContract
{
    protected string $company = '';

    protected string $department = '';

    protected string $title = '';

    protected StringCollection $names;

    protected string $street = '';

    protected ?string $houseNo = null;

    protected string $zipcode = '';

    protected string $city = '';

    protected string $vatId = '';

    protected string $phoneNumber = '';

    protected string $faxNo = '';

    protected StringCollection $additionalLines;

    protected Country $country;

    protected ?CountryState $countryState = null;

    protected ?Salutation $salutation = null;

    public function __construct()
    {
        parent::__construct();

        $this->additionalLines = new StringCollection();
        $this->names = new StringCollection();
        $this->country = new Country();
    }

    public function getCompany(): string
    {
        return $this->company;
    }

    public function setCompany(string $company): self
    {
        $this->company = $company;

        return $this;
    }

    public function getDepartment(): string
    {
        return $this->department;
    }

    public function setDepartment(string $department): self
    {
        $this->department = $department;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getNames(): StringCollection
    {
        return $this->names;
    }

    public function setNames(StringCollection $names): self
    {
        $this->names = $names;

        return $this;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function setStreet(string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getHouseNo(): ?string
    {
        return $this->houseNo;
    }

    public function setHouseNo(?string $houseNo): self
    {
        $this->houseNo = $houseNo;

        return $this;
    }

    public function getZipcode(): string
    {
        return $this->zipcode;
    }

    public function setZipcode(string $zipcode): self
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getVatId(): string
    {
        return $this->vatId;
    }

    public function setVatId(string $vatId): self
    {
        $this->vatId = $vatId;

        return $this;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getFaxNo(): string
    {
        return $this->faxNo;
    }

    public function setFaxNo(string $faxNo): self
    {
        $this->faxNo = $faxNo;

        return $this;
    }

    public function getAdditionalLines(): StringCollection
    {
        return $this->additionalLines;
    }

    public function setAdditionalLines(StringCollection $additionalLines): self
    {
        $this->additionalLines = $additionalLines;

        return $this;
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

    public function getCountryState(): ?CountryState
    {
        return $this->countryState;
    }

    public function setCountryState(?CountryState $countryState): self
    {
        $this->countryState = $countryState;

        return $this;
    }

    public function getSalutation(): ?Salutation
    {
        return $this->salutation;
    }

    public function setSalutation(?Salutation $salutation): self
    {
        $this->salutation = $salutation;

        return $this;
    }
}
