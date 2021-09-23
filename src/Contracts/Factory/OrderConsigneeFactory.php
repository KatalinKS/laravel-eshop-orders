<?php

namespace KatalinKS\Order\Contracts\Factory;

use KatalinKS\Order\Contracts\OrderConsignee;

interface OrderConsigneeFactory
{
    public function create(array $consignee): OrderConsignee;
}
