<?php


namespace KatalinKS\Order\Repository;

use KatalinKS\Order\Contracts\OrderItem;
use KatalinKS\Order\Contracts\Repository\Order;
use \KatalinKS\Order\Contracts\Repository\OrderItemRepository as OrderItemRepositoryContract;
use KatalinKS\Order\Models\OrderItem as OrderItemModel;


class OrderItemRepository implements OrderItemRepositoryContract
{
    public function __construct(private OrderItemModel $model)
    {
    }

    public function get(int $id): OrderItem
    {
        return $this->find($id);
    }

    public function create(OrderItem $orderItem): OrderItem
    {
        return $this->create($orderItem);
    }

    public function update(OrderItem $orderItem): void
    {
        $this->model
            ->whereId($orderItem->getId())
            ->update($orderItem->toArray());
    }

    public function delete(OrderItem $orderItem): void
    {
        $this->model
            ->whereId($orderItem->getId())
            ->delete();
    }
}
