<?php

namespace KatalinKS\Order\Contracts\Factory;

use KatalinKS\Order\Contracts\OrderItem;

interface OrderItemFactory
{
    public function create(array $itemData): OrderItem;
}
