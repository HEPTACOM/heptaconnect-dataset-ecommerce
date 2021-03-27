<?php
declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Customer;

use Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract;
use Heptacom\HeptaConnect\Dataset\Base\ScalarCollection\StringCollection;
use Heptacom\HeptaConnect\Dataset\Ecommerce\Address\Address;
use Heptacom\HeptaConnect\Dataset\Ecommerce\Address\AddressCollection;
use Heptacom\HeptaConnect\Dataset\Ecommerce\Address\Salutation;
use Heptacom\HeptaConnect\Dataset\Ecommerce\SalesChannel\Language;

class Customer extends DatasetEntityContract
{
    protected string $number = '';

    protected string $email = '';

    protected bool $active = false;

    protected bool $guest = false;

    protected StringCollection $names;

    protected string $company = '';

    protected string $title = '';

    protected ?Salutation $salutation = null;

    protected AddressCollection $addresses;

    protected ?Address $defaultBillingAddress = null;

    protected ?Address $defaultShippingAddress = null;

    protected ?CustomerGroup $customerGroup = null;

    protected ?CustomerPriceGroup $customerPriceGroup = null;

    protected ?CustomerDiscountGroup $customerDiscountGroup = null;

    protected ?\DateTimeInterface $birthday = null;

    protected Language $language;

    public function __construct()
    {
        parent::__construct();

        $this->names = new StringCollection();
        $this->addresses = new AddressCollection();
        $this->language = new Language();
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function isActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function isGuest(): bool
    {
        return $this->guest;
    }

    public function setGuest(bool $guest): self
    {
        $this->guest = $guest;

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

    public function getCompany(): string
    {
        return $this->company;
    }

    public function setCompany(string $company): self
    {
        $this->company = $company;

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

    public function getSalutation(): Salutation
    {
        return $this->salutation;
    }

    public function setSalutation(Salutation $salutation): self
    {
        $this->salutation = $salutation;

        return $this;
    }

    public function getAddresses(): AddressCollection
    {
        return $this->addresses;
    }

    public function setAddresses(AddressCollection $addresses): self
    {
        $this->addresses = $addresses;

        return $this;
    }

    public function getDefaultBillingAddress(): ?Address
    {
        return $this->defaultBillingAddress;
    }

    public function setDefaultBillingAddress(?Address $defaultBillingAddress): self
    {
        $this->defaultBillingAddress = $defaultBillingAddress;

        return $this;
    }

    public function getDefaultShippingAddress(): ?Address
    {
        return $this->defaultShippingAddress;
    }

    public function setDefaultShippingAddress(?Address $defaultShippingAddress): self
    {
        $this->defaultShippingAddress = $defaultShippingAddress;

        return $this;
    }

    public function getCustomerGroup(): ?CustomerGroup
    {
        return $this->customerGroup;
    }

    public function setCustomerGroup(?CustomerGroup $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
    }

    public function getCustomerPriceGroup(): ?CustomerPriceGroup
    {
        return $this->customerPriceGroup;
    }

    public function setCustomerPriceGroup(?CustomerPriceGroup $customerPriceGroup): self
    {
        $this->customerPriceGroup = $customerPriceGroup;

        return $this;
    }

    public function getCustomerDiscountGroup(): ?CustomerDiscountGroup
    {
        return $this->customerDiscountGroup;
    }

    public function setCustomerDiscountGroup(?CustomerDiscountGroup $customerDiscountGroup): self
    {
        $this->customerDiscountGroup = $customerDiscountGroup;

        return $this;
    }

    public function getBirthday(): ?\DateTimeInterface
    {
        return $this->birthday;
    }

    public function setBirthday(?\DateTimeInterface $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getLanguage(): Language
    {
        return $this->language;
    }

    public function setLanguage(Language $language): self
    {
        $this->language = $language;

        return $this;
    }
}
