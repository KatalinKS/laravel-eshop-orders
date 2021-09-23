<?php

namespace KatalinKS\Order\Contracts\Factory;

use KatalinKS\Order\Contracts\OrderDelivery;

interface OrderDeliveryFactory
{
    public function create(array $delivery, array $address): OrderDelivery;

    public function creteWithConsignee(array $delivery, array $address, array $consignee): OrderDelivery;
}
