<?php


namespace KatalinKS\Order\Contracts\Builder;

use KatalinKS\Order\Contracts\OrderConsignee;
use KatalinKS\Order\Contracts\OrderDeliveryAddress;

interface OrderDeliveryBuilder
{
    public function get(): OrderDeliveryAddress;

    public function fill(array $data): self;

    public function setAddress(OrderDeliveryAddress $address): self;
    public function setConsignee(OrderConsignee $consignee): self;
}
