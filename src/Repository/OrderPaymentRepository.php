<?php

namespace KatalinKS\Order\Repository;

use KatalinKS\Order\Contracts\OrderAdditional;
use KatalinKS\Order\Contracts\OrderPayment;
use KatalinKS\Order\Contracts\Repository\OrderPaymentRepository as Contract;
use KatalinKS\Order\Models\OrderConsignee as Model;

class OrderPaymentRepository implements Contract
{
    public function __construct(private Model $model)
    {
    }

    public function get(int $id): OrderAdditional
    {
        return $this->model->find($id);
    }

    public function create(OrderPayment $payment): OrderPayment
    {
        return $this->model->create($payment->toArray());
    }

    public function update(OrderPayment $payment): void
    {
        $this->model
            ->whereId($payment->getId())
            ->update($payment->toArray());
    }

    public function delete(OrderPayment $payment): void
    {
        $this->model
            ->whereId($payment->getId())
            ->delete();
    }
}
