<?php

namespace KatalinKS\Order\Contracts\Factory;

use KatalinKS\Order\Contracts\Order;
use KatalinKS\Order\Contracts\OrderItem;

interface OrderItemFactory
{
    public function create(array $itemData, Order $order): OrderItem;
}
