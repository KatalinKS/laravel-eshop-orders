<?php

namespace KatalinKS\Order\Builder;

use KatalinKS\Order\Contracts\Builder\OrderBuyerContactBuilder as OrderBuyerContactBuilderContract;
use KatalinKS\Order\Contracts\OrderBuyerContact;

class OrderBuyerContactBuilder extends Builder implements OrderBuyerContactBuilderContract
{
    protected $type = OrderBuyerContact::class;

    public function get(): OrderBuyerContact
    {
        return $this->instance;
    }
}
