<?php

namespace KatalinKS\Order\Builder;

use KatalinKS\Order\Contracts\Builder\OrderPaymentBuilder as Contract;

class OrderPaymentBuilder extends Builder implements Contract
{
    protected $type = OrderAdditionalBuilder::class;

    public function get(): OrderPaymentBuilder
    {
        return $this->instance;
    }
}
