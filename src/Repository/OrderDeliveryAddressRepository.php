<?php

namespace KatalinKS\Order\Repository;

use KatalinKS\Order\Contracts\OrderDeliveryAddress;
use KatalinKS\Order\Contracts\Repository\OrderDeliveryAddressRepository as OrderDeliveryAddressRepositoryContract;
use KatalinKS\Order\Models\OrderDeliveryAddress as Model;

class OrderDeliveryAddressRepository implements OrderDeliveryAddressRepositoryContract
{
    public function __construct(private Model $model)
    {
    }

    public function get(int $id): OrderDeliveryAddress
    {
        return $this->model->find($id);
    }

    public function create(OrderDeliveryAddress $address): OrderDeliveryAddress
    {
        return $this->model->create($address->toArray());
    }

    public function update(OrderDeliveryAddress $address): void
    {
        $this->model
            ->whereId($address->getId())
            ->update($address->toArray());
    }

    public function delete(OrderDeliveryAddress $address): void
    {
        $this->model
            ->whereId($address->getId())
            ->delete();
    }
}
