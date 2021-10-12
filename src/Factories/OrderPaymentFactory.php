<?php

namespace KatalinKS\Order\Factories;

use KatalinKS\Order\Contracts\Builder\OrderPaymentBuilder as Builder;
use KatalinKS\Order\Contracts\Factory\OrderPaymentFactor as Contract;
use KatalinKS\Order\Contracts\OrderPayment;
use KatalinKS\Order\Contracts\Repository\OrderAdditionalRepository as Repository;

class OrderPaymentFactory implements Contract
{
    public function __construct(
        private Builder $builder,
        private Repository $repository,
    ) {
    }

    public function create(array $payment): OrderPayment
    {
        $additional = $this->build($payment);

        return  $this->save($additional);
    }

    public function build(array $payment): OrderPayment
    {
        return $this->builder
            ->fill($payment)
            ->get();
    }

    public function save(OrderPayment $payment): OrderPayment
    {
        return $this->repository->create($payment);
    }
}
