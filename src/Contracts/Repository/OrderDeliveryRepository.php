<?php

namespace KatalinKS\Order\Contracts\Repository;

use KatalinKS\Order\Contracts\OrderDelivery;

interface OrderDeliveryRepository
{
    public function get(int $id): OrderDelivery;

    public function create(OrderDelivery  $delivery): OrderDelivery;

    public function update(OrderDelivery  $delivery): void;

    public function delete(OrderDelivery  $delivery): void;
}
