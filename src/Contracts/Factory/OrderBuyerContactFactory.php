<?php

namespace KatalinKS\Order\Contracts\Factory;

use KatalinKS\Order\Contracts\OrderBuyerContact;

interface OrderBuyerContactFactory
{
    public function create(array $contact): OrderBuyerContact;
}
