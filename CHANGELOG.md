# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to a variation of [Semantic Versioning](https://semver.org/spec/v2.0.0.html).
The version numbers are structured like `GENERATION.MAJOR.MINOR.PATCH`:

* `GENERATION` version when concepts and APIs are abandoned, but brand and project name stay the same,
* `MAJOR` version when you make incompatible API changes and provide an upgrade path,
* `MINOR` version when you add functionality in a backwards compatible manner, and
* `PATCH` version when you make backwards compatible bug fixes.

## [Unreleased]

### Added

- Add property medias to `\Heptacom\HeptaConnect\Dataset\Ecommerce\Product\Product` as `\Heptacom\HeptaConnect\Dataset\Ecommerce\Media\MediaCollection`

### Changed

### Deprecated

### Removed

### Fixed

### Security

## [0.8.3] - 2022-02-16

### Added

- Add property to `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Refund` to flag refund as partial or full refund

### Fixed

- Add missing import of parent class for `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Refund`

## [0.8.2] - 2022-02-15

### Added

- Add new entity `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Refund` to hold refund information
- Add new property for refunds to `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Order`. New methods: `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Order::isRefunded`, `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Order::getRefund`, `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Order::setRefund` 

## [0.8.1] - 2022-01-08

### Added

- Add new property for percentage information to discount line-item. New methods: `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\LineItem\Discount::isAbsolute`, `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\LineItem\Discount::getPercentage`, `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\LineItem\Discount::setPercentage`
- Add new property for relation to affected line-items to discount line-item. New methods: `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\LineItem\Discount::getRelatedLineItems`, `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\LineItem\Discount::setRelatedLineItems` 

## [0.8.0] - 2021-11-22

## [0.7.0] - 2021-09-25
