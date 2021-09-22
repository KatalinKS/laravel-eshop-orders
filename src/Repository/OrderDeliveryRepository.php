<?php

namespace KatalinKS\Order\Repository;

use KatalinKS\Order\Contracts\OrderDelivery;
use KatalinKS\Order\Contracts\Repository\OrderDeliveryRepository as OrderDeliveryRepositoryContract;
use KatalinKS\Order\Models\OrderDelivery as Model;

class OrderDeliveryRepository implements OrderDeliveryRepositoryContract
{
    public function __construct(private Model $model)
    {
    }

    public function get(int $id): OrderDelivery
    {
        return $this->model->find($id);
    }

    public function create(OrderDelivery $delivery): OrderDelivery
    {
        return $this->model->create($delivery->toArray());
    }

    public function update(OrderDelivery $delivery): void
    {
        $this->model
            ->whereId($delivery->getId())
            ->update($delivery->toArray());
    }

    public function delete(OrderDelivery $delivery): void
    {
        $this->model
            ->whereId($delivery->getId())
            ->delete();
    }
}
