<?php

namespace KatalinKS\Order\Factories;

use KatalinKS\Order\Contracts\Builder\OrderDeliveryBuilder as Builder;
use KatalinKS\Order\Contracts\Factory\Factory as FactoryContract;
use KatalinKS\Order\Contracts\Factory\OrderDeliveryFactory as OrderDeliveryFactoryContract;
use KatalinKS\Order\Contracts\OrderDelivery;
use KatalinKS\Order\Contracts\Repository\OrderDeliveryRepository as Repository;

class OrderDeliveryFactory implements OrderDeliveryFactoryContract
{
    public function __construct(
        private Builder $builder,
        private FactoryContract $factory,
        private Repository $repository
    ) {
    }

    public function create(array $delivery, array $address): OrderDelivery
    {
        $delivery = $this->builder
            ->fill($delivery)
            ->setAddress($this->factory->createDeliveryAddress($address))
            ->get();

        return $this->repository->create($delivery);
    }

    public function creteWithConsignee(array $delivery, array $address, array $consignee): OrderDelivery
    {
        $delivery = $this->builder
            ->fill($delivery)
            ->setAddress($this->factory->createDeliveryAddress($address))
            ->setConsignee($this->factory->createConsignee($consignee))
            ->get();

        return $this->repository->create($delivery);
    }
}
