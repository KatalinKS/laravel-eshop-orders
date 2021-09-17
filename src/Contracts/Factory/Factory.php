<?php

namespace KatalinKS\Order\Contracts\Factory;

use KatalinKS\Order\Contracts\Order;
use KatalinKS\Order\Contracts\Order as OrderContract;
use KatalinKS\Order\Contracts\OrderItem;

interface Factory
{
    public function createOrder(array $orderData): OrderContract;

    public function createOrderItem(array $orderItemData, Order $order): OrderItem;
}
