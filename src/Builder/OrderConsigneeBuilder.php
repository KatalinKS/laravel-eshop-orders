<?php

namespace KatalinKS\Order\Builder;

use KatalinKS\Order\Contracts\Builder\OrderConsigneeBuilder as OrderConsigneeBuilderContract;
use KatalinKS\Order\Contracts\OrderConsignee;

class OrderConsigneeBuilder extends Builder implements OrderConsigneeBuilderContract
{
    protected $type = OrderConsignee::class;

    public function get(): OrderConsignee
    {
        return $this->instance;
    }
}
