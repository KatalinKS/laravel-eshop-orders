<?php

namespace KatalinKS\Order;

use App\Services\Eshop\Cart\Interfaces\CartObj;
use KatalinKS\CompanyPlaces\Interfaces\CompanyPlaces;
use KatalinKS\Order\Builder\OrderBuilder;
use KatalinKS\Order\Builder\OrderItemBuilder;
use KatalinKS\Order\Repository\OrderRepository;
use KatalinKS\PriceList\Interfaces\Objects\PriceListObj;

class Order
{
    public function __construct(
        private OrderBuilder $orderBuilder,
        private OrderItemBuilder $itemBuilder,
        private CompanyPlaces $companyPlaces,
        private OrderRepository $orderRepository
    ) {
    }

    public function create(CartObj $cart, PriceListObj $priceList, string $browserId)
    {
        $order = $this->orderBuilder
            ->fresh()
            ->setPriceId($priceList->getId())
            ->setProcessingOffice($this->companyPlaces->getProcessingOffice())
            ->setStatus('not-confirmed')
            ->setBrowserId($browserId)
            ->get();

        $order->save();

        foreach ($cart->getItems() as $item) {
            $order->items()->save($this->itemBuilder->build($item));
        }
    }

    public function getCurrent(string $browserId)
    {
        return $this->orderRepository->getByBrowserId($browserId)
            ->whereStatus('not-confirmed')
            ->first();
    }
}
