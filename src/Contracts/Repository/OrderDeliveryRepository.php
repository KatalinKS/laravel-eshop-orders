<?php

namespace KatalinKS\Order\Contracts\Repository;

use KatalinKS\Order\Contracts\OrderDelivery;

interface OrderDeliveryRepository
{
    public function get(int $id): OrderDelivery;

    public function create(OrderDelivery  $consignee): OrderDelivery;

    public function update(OrderDelivery  $consignee): void;

    public function delete(OrderDelivery  $consignee): void;
}
