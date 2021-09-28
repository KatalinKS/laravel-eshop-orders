<?php

namespace KatalinKS\Order\Contracts\Repository;

use KatalinKS\Order\Contracts\OrderAdditional;
use KatalinKS\Order\Contracts\OrderPayment;

interface OrderPaymentRepository
{
    public function get(int $id): OrderAdditional;

    public function create(OrderPayment  $payment): OrderPayment;

    public function update(OrderPayment  $payment): void;

    public function delete(OrderPayment  $payment): void;
}
