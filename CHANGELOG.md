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

### Changed

### Deprecated

### Removed

### Fixed

### Security

## [0.9.2.0] - 2023-03-24

### Added

- Add `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Shipment\ShipmentState::STATE_PARTIALLY_SHIPPED`
- Add `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Shipment\ShipmentState::STATE_PARTIALLY_RETURNED`

## [0.9.1.0] - 2022-09-21

### Added

- Add `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Shipment\ShipmentState` with the states unknown, open, cancelled, returned and shipped
- Add `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Shipment\Shipment` entity with `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Shipment\ShipmentCollection` to group shipment related information like address, tracking code, state and method
- Add `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Shipment\ShipmentAwareInterface` to describe entities related to shipments
- Add `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Shipment\ShipmentAwareTrait` as supporting implementation for every entity implementing `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Shipment\ShipmentAwareInterface`
- Make `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\LineItem\Shipping` and `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\LineItem\Product` aware of their related shipments by implementing `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Shipment\ShipmentAwareInterface`
- Add `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Order::aggregateShipments` to collect shipment information from all line items
- Add `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Transaction` entity with `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\TransactionCollection` to hold payment transaction related data with optional relation to line items to allow payments without context
- Add `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Credit` entity based on `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Transaction`
- Add `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Payment` entity based on `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Transaction`
- Add property `manufacturerNumber` to `\Heptacom\HeptaConnect\Dataset\Ecommerce\Product\Product` to store manufacturer numbers

### Changed

- Extract `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Transaction` entity from `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Refund` to represent any type of payment

### Deprecated

- Add deprecation warnings to usage of `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Order::$deliveryTrackingCode` in `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Order::getDeliveryTrackingCode` and `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Order::setDeliveryTrackingCode`. Use `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Order::aggregateShipments` with `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Shipment\Shipment` and implementations of `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Shipment\ShipmentAwareInterface` instead
- Add deprecation warnings to usage of the payment related properties `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Order::$paymentState`, `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Order::$paymentTransactionCode`, `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Order::$paymentMethod` and `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Order::$refund` in `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Order::getPaymentState`, `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Order::setPaymentState`, `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Order::getPaymentTransactionCode`, `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Order::setPaymentTransactionCode`, `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Order::getPaymentMethod`, `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Order::setPaymentMethod`, `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Order::isRefunded`, `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Order::getRefund` and `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Order::setRefund`. Use `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Order::getTransactions` with implementations of `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Transaction` instead

## [0.9.0.0] - 2022-04-02

### Added

- Add property medias to `\Heptacom\HeptaConnect\Dataset\Ecommerce\Product\Product` as `\Heptacom\HeptaConnect\Dataset\Ecommerce\Media\MediaCollection`
- Use `\Heptacom\HeptaConnect\Dataset\Base\File\FileReferenceContract` in `\Heptacom\HeptaConnect\Dataset\Ecommerce\Media\Media` to normalize file usage in media transfer

### Removed

- Replace `\Heptacom\HeptaConnect\Dataset\Ecommerce\Media\Media::getNormalizedStream` and `\Heptacom\HeptaConnect\Dataset\Ecommerce\Media\Media::setNormalizedStream` with `\Heptacom\HeptaConnect\Dataset\Ecommerce\Media\Media::getFile` and `\Heptacom\HeptaConnect\Dataset\Ecommerce\Media\Media::setFile`. To migrate stop job dispatching processes and process all jobs to prevent deserialization issue

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
