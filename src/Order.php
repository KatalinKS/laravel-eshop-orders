<?php

namespace KatalinKS\Order;

use App\Services\Eshop\Cart\Interfaces\CartObj;
use KatalinKS\Order\Builder\OrderBuilder;
use KatalinKS\Order\Builder\OrderItemBuilder;

class Order
{
    public function __construct(
        private OrderBuilder $orderBuilder,
        private OrderItemBuilder $itemBuilder
    )
    {
    }

    public function create(CartObj $cart)
    {
        dd('Order');
        $order = $this->orderBuilder->build();

        foreach ($cart->getItems() as $item)
        {
            $order->items()->save($this->itemBuilder->build($item));
        }
    }
}
