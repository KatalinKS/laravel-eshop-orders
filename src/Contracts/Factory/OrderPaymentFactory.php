<?php

namespace KatalinKS\Order\Contracts\Factory;

use KatalinKS\Order\Contracts\OrderPayment;

interface OrderPaymentFactory
{
    public function create(array $payment): OrderPayment;
}
