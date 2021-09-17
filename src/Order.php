<?php

namespace KatalinKS\Order;

use App\Services\Eshop\Cart\Interfaces\CartObj;
use KatalinKS\CompanyPlaces\Interfaces\CompanyPlaces;
use KatalinKS\Order\Builder\OrderItemBuilder;
use KatalinKS\Order\Contracts\Factory\Factory;
use KatalinKS\Order\Handlers\DataPreparing;
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
        $orderData = DataPreparing::orderData($priceList, $browserId);

        $order = $this->factory->createOrder($orderData);

        foreach ($cart->getItems() as $item) {
            $itemData = DataPreparing::orderItemData($item, $order);

            $this->factory->createOrderItem($itemData);
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
