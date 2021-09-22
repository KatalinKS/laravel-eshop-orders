<?php

namespace KatalinKS\Order\Handlers;

use JetBrains\PhpStorm\ArrayShape;
use KatalinKS\Order\Contracts\Order;
use KatalinKS\Order\Contracts\OrderBuyer;
use KatalinKS\PersonType\Contract\PersonalType;
use KatalinKS\PriceList\Interfaces\Objects\PriceListObj;

class DataPreparing
{
    public static function orderData(PriceListObj $priceList, string $browserId): array
    {
        return [
            'price_list_id' => $priceList->getId(),
            'browser_id' => $browserId,
            ];
    }

    public static function orderItemData(CartItemObj $item, Order $order): array
    {
        return [
            'sku' => $item->getUnit()->getProduct()->getSKU(),
            'name' => $item->getUnit()->getProduct()->getName(),
            'size' => $item->getUnit()->getSize()->getSizeName(),
            'height' => $item->getUnit()->getHeight()->getHeightName(),
            'price' => $item->getUnit()->getProduct()->getPrice(),
            'count' => $item->getCount(),
            'status_id' => OrderStatus::getByAlias('created'),
            'shipped' => 0,
            'product_unit_id' => $item->getUnit()->getId(),
            'order_id' => $order->getId(),
        ];
    }

    #[ArrayShape(['person_type_id' => "int", 'order_id' => "int"])]
    public static function buyerData(PersonalType $personType, Order $order): array
    {
        return [
            'person_type_id' => $personType->getId(),
            'order_id' => $order->getId(),
        ];
    }

    #[ArrayShape(['firstname' => "mixed", 'lastname' => "mixed", 'phone' => "mixed", 'email' => "mixed"])]
    public static function contactData(array $contactData): array
    {
        return [
            'firstname' => $contactData['firstname'],
            'lastname' => $contactData['lastname'],
            'phone' => $contactData['phone'],
            'email' => $contactData['email'],
        ];
    }

    #[ArrayShape(['name' => "mixed", 'inn' => "mixed", 'kpp' => "mixed", 'ceo' => "mixed", 'email' => "mixed", 'phone' => "mixed", 'fax' => "mixed"])]
    public static function legalData(array $legalData): array
    {
        return [
            'name' => $legalData['name'],
            'inn' => $legalData['inn'],
            'kpp' => $legalData['kpp'],
            'ceo' => $legalData['ceo'],
            'email' => $legalData['email'],
            'phone' => $legalData['phone'],
            'fax' => $legalData['fax'],
        ];
    }
}
