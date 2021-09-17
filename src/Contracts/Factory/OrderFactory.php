<?php

namespace KatalinKS\Order\Contracts\Factory;

use KatalinKS\Order\Contracts\Order;

interface OrderFactory
{
    public function create(array $orderData): Order;
}
