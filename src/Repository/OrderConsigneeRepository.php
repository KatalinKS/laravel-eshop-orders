<?php

namespace KatalinKS\Order\Repository;

use KatalinKS\Order\Contracts\OrderConsignee;
use KatalinKS\Order\Contracts\Repository\OrderConsigneeRepository as OrderConsigneeRepositoryContract;
use KatalinKS\Order\Models\OrderConsignee as Model;

class OrderConsigneeRepository implements OrderConsigneeRepositoryContract
{
    public function __construct(private Model $model)
    {
    }

    public function get(int $id): OrderConsignee
    {
        return $this->model->find($id);
    }

    public function create(OrderConsignee $consignee): OrderConsignee
    {
        return $this->model->create($consignee->toArray());
    }

    public function update(OrderConsignee $consignee): void
    {
        $this->model
            ->whereId($consignee->getId())
            ->update($consignee->toArray());
    }

    public function delete(OrderConsignee $consignee): void
    {
        $this->model
            ->whereId($consignee->getId())
            ->delete();
    }
}
