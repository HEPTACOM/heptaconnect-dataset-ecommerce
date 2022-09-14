<?php

declare(strict_types=1);

namespace Heptacom\HeptaConnect\Dataset\Ecommerce\Test\Fixture;

class StaticPayloads
{
    /**
     * Contains a serialized Order object of version 0.9.0.0
     * with a LineItem\Product and a LineItem\Shipping as LineItems
     */
    public const SERIALIZED_ORDER_V0_9_0_0_WITH_SHIPMENT_AWARE_LINE_ITEMS = 'O:51:"Heptacom\HeptaConnect\Dataset\Ecommerce\Order\Order":23:{s:9:" * number";s:0:"";s:10:" * isGross";b:1;s:14:" * amountTotal";d:0;s:12:" * amountNet";d:0;s:11:" * totalTax";d:0;s:16:" * shippingTotal";d:0;s:11:" * customer";O:57:"Heptacom\HeptaConnect\Dataset\Ecommerce\Customer\Customer":20:{s:9:" * number";s:0:"";s:8:" * email";s:0:"";s:9:" * active";b:0;s:8:" * guest";b:0;s:8:" * names";O:68:"Heptacom\HeptaConnect\Dataset\Base\ScalarCollection\StringCollection":1:{s:8:" * items";a:0:{}}s:10:" * company";s:0:"";s:8:" * title";s:0:"";s:13:" * salutation";N;s:12:" * addresses";O:65:"Heptacom\HeptaConnect\Dataset\Ecommerce\Address\AddressCollection":1:{s:8:" * items";a:0:{}}s:24:" * defaultBillingAddress";N;s:25:" * defaultShippingAddress";N;s:16:" * customerGroup";N;s:21:" * customerPriceGroup";N;s:24:" * customerDiscountGroup";N;s:11:" * birthday";N;s:11:" * language";O:61:"Heptacom\HeptaConnect\Dataset\Ecommerce\SalesChannel\Language":5:{s:13:" * localeCode";s:0:"";s:14:" * attachments";O:55:"Heptacom\HeptaConnect\Dataset\Base\AttachmentCollection":1:{s:8:" * items";a:0:{}}s:76:" Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract deferrals";a:0:{}s:15:" * dependencies";O:55:"Heptacom\HeptaConnect\Dataset\Base\DependencyCollection":3:{s:8:" * items";a:0:{}s:21:" * datasetEntityClass";s:65:"Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract";s:13:" * primaryKey";N;}s:13:" * primaryKey";N;}s:14:" * attachments";O:55:"Heptacom\HeptaConnect\Dataset\Base\AttachmentCollection":1:{s:8:" * items";a:0:{}}s:76:" Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract deferrals";a:0:{}s:15:" * dependencies";O:55:"Heptacom\HeptaConnect\Dataset\Base\DependencyCollection":3:{s:8:" * items";a:0:{}s:21:" * datasetEntityClass";s:65:"Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract";s:13:" * primaryKey";N;}s:13:" * primaryKey";N;}s:11:" * currency";O:57:"Heptacom\HeptaConnect\Dataset\Ecommerce\Currency\Currency":6:{s:7:" * name";O:66:"Heptacom\HeptaConnect\Dataset\Base\Translatable\TranslatableString":1:{s:15:" * translations";a:0:{}}s:6:" * iso";s:0:"";s:14:" * attachments";O:55:"Heptacom\HeptaConnect\Dataset\Base\AttachmentCollection":1:{s:8:" * items";a:0:{}}s:76:" Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract deferrals";a:0:{}s:15:" * dependencies";O:55:"Heptacom\HeptaConnect\Dataset\Base\DependencyCollection":3:{s:8:" * items";a:0:{}s:21:" * datasetEntityClass";s:65:"Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract";s:13:" * primaryKey";N;}s:13:" * primaryKey";N;}s:12:" * lineItems";O:64:"Heptacom\HeptaConnect\Dataset\Ecommerce\Order\LineItemCollection":1:{s:8:" * items";a:2:{i:0;O:62:"Heptacom\HeptaConnect\Dataset\Ecommerce\Order\LineItem\Product":17:{s:10:" * product";O:55:"Heptacom\HeptaConnect\Dataset\Ecommerce\Product\Product":20:{s:9:" * number";s:0:"";s:7:" * name";O:66:"Heptacom\HeptaConnect\Dataset\Base\Translatable\TranslatableString":1:{s:15:" * translations";a:0:{}}s:19:" * shortDescription";O:66:"Heptacom\HeptaConnect\Dataset\Base\Translatable\TranslatableString":1:{s:15:" * translations";a:0:{}}s:14:" * description";O:66:"Heptacom\HeptaConnect\Dataset\Base\Translatable\TranslatableString":1:{s:15:" * translations";a:0:{}}s:9:" * active";b:0;s:7:" * gtin";s:0:"";s:12:" * inventory";d:0;s:7:" * unit";N;s:19:" * purchaseQuantity";d:0;s:13:" * categories";O:66:"Heptacom\HeptaConnect\Dataset\Ecommerce\Product\CategoryCollection":1:{s:8:" * items";a:0:{}}s:9:" * prices";O:61:"Heptacom\HeptaConnect\Dataset\Ecommerce\Price\PriceCollection":1:{s:8:" * items";a:0:{}}s:11:" * taxGroup";O:52:"Heptacom\HeptaConnect\Dataset\Ecommerce\Tax\TaxGroup":7:{s:7:" * name";O:66:"Heptacom\HeptaConnect\Dataset\Base\Translatable\TranslatableString":1:{s:15:" * translations";a:0:{}}s:7:" * slug";s:0:"";s:8:" * rules";O:66:"Heptacom\HeptaConnect\Dataset\Ecommerce\Tax\TaxGroupRuleCollection":1:{s:8:" * items";a:0:{}}s:14:" * attachments";O:55:"Heptacom\HeptaConnect\Dataset\Base\AttachmentCollection":1:{s:8:" * items";a:0:{}}s:76:" Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract deferrals";a:0:{}s:15:" * dependencies";O:55:"Heptacom\HeptaConnect\Dataset\Base\DependencyCollection":3:{s:8:" * items";a:0:{}s:21:" * datasetEntityClass";s:65:"Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract";s:13:" * primaryKey";N;}s:13:" * primaryKey";N;}s:14:" * releaseDate";N;s:15:" * manufacturer";N;s:13:" * properties";O:72:"Heptacom\HeptaConnect\Dataset\Ecommerce\Property\PropertyValueCollection":1:{s:8:" * items";a:0:{}}s:9:" * medias";O:61:"Heptacom\HeptaConnect\Dataset\Ecommerce\Media\MediaCollection":1:{s:8:" * items";a:0:{}}s:14:" * attachments";O:55:"Heptacom\HeptaConnect\Dataset\Base\AttachmentCollection":1:{s:8:" * items";a:0:{}}s:76:" Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract deferrals";a:0:{}s:15:" * dependencies";O:55:"Heptacom\HeptaConnect\Dataset\Base\DependencyCollection":3:{s:8:" * items";a:0:{}s:21:" * datasetEntityClass";s:65:"Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract";s:13:" * primaryKey";N;}s:13:" * primaryKey";N;}s:9:" * number";N;s:8:" * label";O:66:"Heptacom\HeptaConnect\Dataset\Base\Translatable\TranslatableString":1:{s:15:" * translations";a:0:{}}s:14:" * description";O:66:"Heptacom\HeptaConnect\Dataset\Base\Translatable\TranslatableString":1:{s:15:" * translations";a:0:{}}s:11:" * position";i:0;s:11:" * quantity";i:0;s:12:" * unitPrice";d:0;s:15:" * unitPriceNet";d:0;s:13:" * totalPrice";d:0;s:16:" * totalPriceNet";d:0;s:16:" * unitTaxAmount";d:0;s:17:" * totalTaxAmount";d:0;s:10:" * taxRate";d:1;s:14:" * attachments";O:55:"Heptacom\HeptaConnect\Dataset\Base\AttachmentCollection":1:{s:8:" * items";a:0:{}}s:76:" Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract deferrals";a:0:{}s:15:" * dependencies";O:55:"Heptacom\HeptaConnect\Dataset\Base\DependencyCollection":3:{s:8:" * items";a:0:{}s:21:" * datasetEntityClass";s:65:"Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract";s:13:" * primaryKey";N;}s:13:" * primaryKey";N;}i:1;O:63:"Heptacom\HeptaConnect\Dataset\Ecommerce\Order\LineItem\Shipping":16:{s:9:" * number";N;s:8:" * label";O:66:"Heptacom\HeptaConnect\Dataset\Base\Translatable\TranslatableString":1:{s:15:" * translations";a:0:{}}s:14:" * description";O:66:"Heptacom\HeptaConnect\Dataset\Base\Translatable\TranslatableString":1:{s:15:" * translations";a:0:{}}s:11:" * position";i:0;s:11:" * quantity";i:0;s:12:" * unitPrice";d:0;s:15:" * unitPriceNet";d:0;s:13:" * totalPrice";d:0;s:16:" * totalPriceNet";d:0;s:16:" * unitTaxAmount";d:0;s:17:" * totalTaxAmount";d:0;s:10:" * taxRate";d:1;s:14:" * attachments";O:55:"Heptacom\HeptaConnect\Dataset\Base\AttachmentCollection":1:{s:8:" * items";a:0:{}}s:76:" Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract deferrals";a:0:{}s:15:" * dependencies";O:55:"Heptacom\HeptaConnect\Dataset\Base\DependencyCollection":3:{s:8:" * items";a:0:{}s:21:" * datasetEntityClass";s:65:"Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract";s:13:" * primaryKey";N;}s:13:" * primaryKey";N;}}}s:12:" * orderTime";O:8:"DateTime":3:{s:4:"date";s:26:"2022-09-14 07:55:54.948057";s:13:"timezone_type";i:3;s:8:"timezone";s:3:"UTC";}s:17:" * billingAddress";O:55:"Heptacom\HeptaConnect\Dataset\Ecommerce\Address\Address":19:{s:10:" * company";s:0:"";s:13:" * department";s:0:"";s:8:" * title";s:0:"";s:8:" * names";O:68:"Heptacom\HeptaConnect\Dataset\Base\ScalarCollection\StringCollection":1:{s:8:" * items";a:0:{}}s:9:" * street";s:0:"";s:10:" * houseNo";N;s:10:" * zipcode";s:0:"";s:7:" * city";s:0:"";s:8:" * vatId";s:0:"";s:14:" * phoneNumber";s:0:"";s:8:" * faxNo";s:0:"";s:18:" * additionalLines";O:68:"Heptacom\HeptaConnect\Dataset\Base\ScalarCollection\StringCollection":1:{s:8:" * items";a:0:{}}s:10:" * country";O:55:"Heptacom\HeptaConnect\Dataset\Ecommerce\Address\Country":8:{s:6:" * iso";s:0:"";s:7:" * iso3";s:0:"";s:9:" * active";b:0;s:10:" * taxFree";b:0;s:14:" * attachments";O:55:"Heptacom\HeptaConnect\Dataset\Base\AttachmentCollection":1:{s:8:" * items";a:0:{}}s:76:" Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract deferrals";a:0:{}s:15:" * dependencies";O:55:"Heptacom\HeptaConnect\Dataset\Base\DependencyCollection":3:{s:8:" * items";a:0:{}s:21:" * datasetEntityClass";s:65:"Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract";s:13:" * primaryKey";N;}s:13:" * primaryKey";N;}s:15:" * countryState";N;s:13:" * salutation";N;s:14:" * attachments";O:55:"Heptacom\HeptaConnect\Dataset\Base\AttachmentCollection":1:{s:8:" * items";a:0:{}}s:76:" Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract deferrals";a:0:{}s:15:" * dependencies";O:55:"Heptacom\HeptaConnect\Dataset\Base\DependencyCollection":3:{s:8:" * items";a:0:{}s:21:" * datasetEntityClass";s:65:"Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract";s:13:" * primaryKey";N;}s:13:" * primaryKey";N;}s:18:" * shippingAddress";O:55:"Heptacom\HeptaConnect\Dataset\Ecommerce\Address\Address":19:{s:10:" * company";s:0:"";s:13:" * department";s:0:"";s:8:" * title";s:0:"";s:8:" * names";O:68:"Heptacom\HeptaConnect\Dataset\Base\ScalarCollection\StringCollection":1:{s:8:" * items";a:0:{}}s:9:" * street";s:0:"";s:10:" * houseNo";N;s:10:" * zipcode";s:0:"";s:7:" * city";s:0:"";s:8:" * vatId";s:0:"";s:14:" * phoneNumber";s:0:"";s:8:" * faxNo";s:0:"";s:18:" * additionalLines";O:68:"Heptacom\HeptaConnect\Dataset\Base\ScalarCollection\StringCollection":1:{s:8:" * items";a:0:{}}s:10:" * country";O:55:"Heptacom\HeptaConnect\Dataset\Ecommerce\Address\Country":8:{s:6:" * iso";s:0:"";s:7:" * iso3";s:0:"";s:9:" * active";b:0;s:10:" * taxFree";b:0;s:14:" * attachments";O:55:"Heptacom\HeptaConnect\Dataset\Base\AttachmentCollection":1:{s:8:" * items";a:0:{}}s:76:" Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract deferrals";a:0:{}s:15:" * dependencies";O:55:"Heptacom\HeptaConnect\Dataset\Base\DependencyCollection":3:{s:8:" * items";a:0:{}s:21:" * datasetEntityClass";s:65:"Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract";s:13:" * primaryKey";N;}s:13:" * primaryKey";N;}s:15:" * countryState";N;s:13:" * salutation";N;s:14:" * attachments";O:55:"Heptacom\HeptaConnect\Dataset\Base\AttachmentCollection":1:{s:8:" * items";a:0:{}}s:76:" Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract deferrals";a:0:{}s:15:" * dependencies";O:55:"Heptacom\HeptaConnect\Dataset\Base\DependencyCollection":3:{s:8:" * items";a:0:{}s:21:" * datasetEntityClass";s:65:"Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract";s:13:" * primaryKey";N;}s:13:" * primaryKey";N;}s:11:" * language";O:61:"Heptacom\HeptaConnect\Dataset\Ecommerce\SalesChannel\Language":5:{s:13:" * localeCode";s:0:"";s:14:" * attachments";O:55:"Heptacom\HeptaConnect\Dataset\Base\AttachmentCollection":1:{s:8:" * items";a:0:{}}s:76:" Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract deferrals";a:0:{}s:15:" * dependencies";O:55:"Heptacom\HeptaConnect\Dataset\Base\DependencyCollection":3:{s:8:" * items";a:0:{}s:21:" * datasetEntityClass";s:65:"Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract";s:13:" * primaryKey";N;}s:13:" * primaryKey";N;}s:13:" * orderState";O:56:"Heptacom\HeptaConnect\Dataset\Ecommerce\Order\OrderState":5:{s:8:" * state";s:36:"00000000-0000-0000-0000-000000000000";s:14:" * attachments";O:55:"Heptacom\HeptaConnect\Dataset\Base\AttachmentCollection":1:{s:8:" * items";a:0:{}}s:76:" Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract deferrals";a:0:{}s:15:" * dependencies";O:55:"Heptacom\HeptaConnect\Dataset\Base\DependencyCollection":3:{s:8:" * items";a:0:{}s:21:" * datasetEntityClass";s:65:"Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract";s:13:" * primaryKey";N;}s:13:" * primaryKey";N;}s:15:" * paymentState";O:58:"Heptacom\HeptaConnect\Dataset\Ecommerce\Order\PaymentState":5:{s:8:" * state";s:36:"00000000-0000-0000-0000-000000000000";s:14:" * attachments";O:55:"Heptacom\HeptaConnect\Dataset\Base\AttachmentCollection":1:{s:8:" * items";a:0:{}}s:76:" Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract deferrals";a:0:{}s:15:" * dependencies";O:55:"Heptacom\HeptaConnect\Dataset\Base\DependencyCollection":3:{s:8:" * items";a:0:{}s:21:" * datasetEntityClass";s:65:"Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract";s:13:" * primaryKey";N;}s:13:" * primaryKey";N;}s:23:" * deliveryTrackingCode";N;s:25:" * paymentTransactionCode";N;s:16:" * paymentMethod";N;s:9:" * refund";N;s:14:" * attachments";O:55:"Heptacom\HeptaConnect\Dataset\Base\AttachmentCollection":1:{s:8:" * items";a:0:{}}s:76:" Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract deferrals";a:0:{}s:15:" * dependencies";O:55:"Heptacom\HeptaConnect\Dataset\Base\DependencyCollection":3:{s:8:" * items";a:0:{}s:21:" * datasetEntityClass";s:65:"Heptacom\HeptaConnect\Dataset\Base\Contract\DatasetEntityContract";s:13:" * primaryKey";N;}s:13:" * primaryKey";N;}';
}
