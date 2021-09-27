<?php

namespace KatalinKS\Order\Contracts\Factory;

use KatalinKS\Order\Contracts\OrderDelivery;

interface OrderDeliveryFactory
{
    public function create(array $address): OrderDelivery;

    public function creteWithConsignee(array $address, array $consignee): OrderDelivery;
}
