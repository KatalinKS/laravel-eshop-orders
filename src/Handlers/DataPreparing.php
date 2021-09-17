<?php


namespace KatalinKS\Order\Handlers;


use KatalinKS\Order\Contracts\Order;
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
            'order_id' => $order->getId()
        ];
    }
}
