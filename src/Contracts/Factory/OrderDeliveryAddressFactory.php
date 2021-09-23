<?php

namespace KatalinKS\Order\Contracts\Factory;

use KatalinKS\Order\Contracts\OrderDeliveryAddress;

interface OrderDeliveryAddressFactory
{
    public function create(array $address): OrderDeliveryAddress;
}
