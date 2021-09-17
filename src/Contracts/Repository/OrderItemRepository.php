<?php


namespace KatalinKS\Order\Contracts\Repository;

use KatalinKS\Order\Contracts\OrderItem;

interface OrderItemRepository
{
    public function get(int $id): OrderItem;

    public function create(OrderItem $orderItem): OrderItem;

    public function update(OrderItem $orderItem): void;

    public function delete(OrderItem $orderItem): void;
}
