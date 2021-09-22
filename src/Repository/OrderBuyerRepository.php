<?php

namespace KatalinKS\Order\Repository;

use KatalinKS\Order\Contracts\OrderBuyer;
use KatalinKS\Order\Contracts\Repository\OrderBuyerRepository as OrderBuyerRepositoryContract;
use KatalinKS\Order\Models\OrderLegalRequisites as Model;

class OrderBuyerRepository implements OrderBuyerRepositoryContract
{
    public function __construct(private Model $model)
    {
    }

    public function get(int $id): OrderBuyer
    {
        return $this->model->find($id);
    }

    public function create(OrderBuyer $orderBuyer): OrderBuyer
    {
        return $this->model->create($orderBuyer->toArray());
    }

    public function update(OrderBuyer $orderBuyer): void
    {
        $this->model
            ->whereId($orderBuyer->getId())
            ->update($orderBuyer->toArray());
    }

    public function delete(OrderBuyer $orderBuyer): void
    {
        $this->model
            ->whereId($orderBuyer->getId())
            ->delete();
    }
}
