<?php


namespace KatalinKS\Order\Contracts\Builder;


use KatalinKS\Order\Contracts\OrderAdditional;

interface OrderPaymentBuilder
{
    public function get(): OrderPaymentBuilder;
}
