<?php

namespace KatalinKS\Order\Builder;

use KatalinKS\Order\Contracts\Builder\OrderDeliveryAddressBuilder as OrderDeliveryAddressBuilderContract;
use KatalinKS\Order\Contracts\OrderDeliveryAddress;

class OrderDeliveryAddressBuilder extends Builder implements OrderDeliveryAddressBuilderContract
{
    protected $type = OrderDeliveryAddressBuilder::class;

    public function get(): OrderDeliveryAddress
    {
        return $this->instance;
    }
}
