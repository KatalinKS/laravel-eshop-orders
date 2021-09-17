<?php

namespace KatalinKS\Order;

use App\Services\Eshop\Cart\Interfaces\CartObj;
use KatalinKS\CompanyPlaces\Interfaces\CompanyPlaces;
use KatalinKS\Order\Builder\OrderItemBuilder;
use KatalinKS\Order\Contracts\Factory\Factory;
use KatalinKS\PriceList\Interfaces\Objects\PriceListObj;

class Order
{
    public function __construct(
        private Factory $factory,
        private OrderItemBuilder $itemBuilder,
        private CompanyPlaces $companyPlaces,
    ) {
    }

    public function create(CartObj $cart, PriceListObj $priceList, string $browserId)
    {
        $orderData = [
            'price_list_id' => $priceList->getId(),
            'browser_id' => $browserId,
        ];

        $order = $this->factory->createOrder($orderData);

        foreach ($cart->getItems() as $item) {
            $itemData = [
                'sku' => $item->getUnit()->getProduct()->getSKU(),
                'name' => $item->getUnit()->getProduct()->getName(),
                'size' => $item->getUnit()->getSize()->getSizeName(),
                'height' => $item->getUnit()->getHeight()->getHeightName(),
                'price' => $item->getUnit()->getProduct()->getPrice(),
                'count' => $item->getCount(),
                'status_id' => OrderStatus::getByAlias('created'),
                'shipped' => 0,
                'product_unit_id' => $item->getUnit()->getId(),
            ];

            $this->factory->createOrderItem($itemData, $order);
        }

        return $order;
    }

    public function getCurrent(string $browserId)
    {
        return $this->orderRepository->getByBrowserId($browserId)
            ->where('status', '=', 'not-confirmed')
            ->first();
    }

    public function updateBuyer(array $buyerData, string $browserId)
    {
    }
}
