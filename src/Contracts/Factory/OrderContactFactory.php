<?php

namespace KatalinKS\Order\Contracts\Factory;

use KatalinKS\Order\Contracts\OrderBuyerContact;

interface OrderContactFactory
{
    public function create(array $contact): OrderBuyerContact;
}
