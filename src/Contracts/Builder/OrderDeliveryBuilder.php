<?php

namespace KatalinKS\Order\Contracts\Builder;

use KatalinKS\Order\Contracts\OrderConsignee;
use KatalinKS\Order\Contracts\OrderDelivery;
use KatalinKS\Order\Contracts\OrderDeliveryAddress;

interface OrderDeliveryBuilder
{
    public function get(): OrderDelivery;

    public function setAddress(OrderDeliveryAddress $address): self;

    public function setConsignee(OrderConsignee $consignee): self;
}
