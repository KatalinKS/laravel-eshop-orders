<?php

namespace KatalinKS\Order\Contracts\Builder;

use KatalinKS\Order\Contracts\OrderDeliveryAddress;

interface OrderDeliveryAddressBuilder
{
    public function get(): OrderDeliveryAddress;
}
