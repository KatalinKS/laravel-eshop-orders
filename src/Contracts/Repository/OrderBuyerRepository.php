<?php

namespace KatalinKS\Order\Contracts\Repository;

use KatalinKS\Order\Contracts\OrderBuyer;

interface OrderBuyerRepository
{
    public function get(int $id): OrderBuyer;

    public function create(OrderBuyer $orderBuyer): OrderBuyer;

    public function update(OrderBuyer $orderBuyer): void;

    public function delete(OrderBuyer $orderBuyer): void;
}
