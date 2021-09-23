<?php

namespace KatalinKS\Order\Factories;

use KatalinKS\Order\Contracts\Builder\OrderConsigneeBuilder as Builder;
use KatalinKS\Order\Contracts\Factory\OrderConsigneeFactory as OrderConsigneeFactoryContract;
use KatalinKS\Order\Contracts\OrderConsignee as OrderConsigneeContract;
use KatalinKS\Order\Contracts\Repository\OrderConsigneeRepository as Repository;

class OrderConsigneeFactory implements OrderConsigneeFactoryContract
{
    public function __construct(
        private Builder $builder,
        private Repository $repository,
    ) {
    }

    public function create(array $address): OrderConsigneeContract
    {
        $address = $this->build($address);

        return  $this->save($address);
    }

    public function build(array $address): OrderConsigneeContract
    {
        return $this->builder
            ->fill($address)
            ->get();
    }

    public function save(OrderConsigneeContract $address): OrderConsigneeContract
    {
        return $this->repository->create($address);
    }
}
