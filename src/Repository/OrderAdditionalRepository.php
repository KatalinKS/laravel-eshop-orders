<?php

namespace KatalinKS\Order\Repository;

use KatalinKS\Order\Contracts\OrderAdditional;
use KatalinKS\Order\Contracts\Repository\OrderAdditionalRepository as OrderAdditionalRepositoryContract;
use KatalinKS\Order\Models\OrderConsignee as Model;

class OrderAdditionalRepository implements OrderAdditionalRepositoryContract
{
    public function __construct(private Model $model)
    {
    }

    public function get(int $id): OrderAdditional
    {
        return $this->model->find($id);
    }

    public function create(OrderAdditional $additional): OrderAdditional
    {
        return $this->model->create($additional->toArray());
    }

    public function update(OrderAdditional $additional): void
    {
        $this->model
            ->whereId($additional->getId())
            ->update($additional->toArray());
    }

    public function delete(OrderAdditional $additional): void
    {
        $this->model
            ->whereId($additional->getId())
            ->delete();
    }
}
