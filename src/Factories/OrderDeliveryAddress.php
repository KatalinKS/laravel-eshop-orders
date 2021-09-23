<?php

namespace KatalinKS\Order\Factories;

use KatalinKS\Order\Contracts\Builder\OrderDeliveryAddressBuilder as Builder;
use KatalinKS\Order\Contracts\Factory\OrderDeliveryAddressFactory as OrderDeliveryAddressFactoryContract;
use KatalinKS\Order\Contracts\OrderDeliveryAddress as OrderDeliveryAddressContract;
use KatalinKS\Order\Contracts\Repository\OrderDeliveryRepository as Repository;

class OrderDeliveryAddress implements OrderDeliveryAddressFactoryContract
{
    public function __construct(
        private Builder $builder,
        private Repository $repository,
    ) {
    }

    public function create(array $address): OrderDeliveryAddressContract
    {
        $address = $this->build($address);

        return  $this->save($address);
    }

    public function build(array $address): OrderDeliveryAddressContract
    {
        return $this->builder
            ->fill($address)
            ->get();
    }

    public function save(OrderDelivery $address): OrderDeliveryAddressContract
    {
        return $this->repository->create($address);
    }
}
