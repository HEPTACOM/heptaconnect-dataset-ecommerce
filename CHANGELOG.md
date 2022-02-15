# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Added

- Add new entity `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Refund` to hold refund information
- Add new property for refunds to `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Order`. New methods: `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Order::isRefunded`, `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Order::getRefund`, `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Order::setRefund` 

## [0.8.1] - 2022-01-08

### Added

- Add new property for percentage information to discount line-item. New methods: `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\LineItem\Discount::isAbsolute`, `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\LineItem\Discount::getPercentage`, `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\LineItem\Discount::setPercentage`
- Add new property for relation to affected line-items to discount line-item. New methods: `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\LineItem\Discount::getRelatedLineItems`, `\Heptacom\HeptaConnect\Dataset\Ecommerce\Order\LineItem\Discount::setRelatedLineItems` 

## [0.8.0] - 2021-11-22

## [0.7.0] - 2021-09-25
