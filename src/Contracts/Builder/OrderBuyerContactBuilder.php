<?php


namespace KatalinKS\Order\Contracts\Builder;

use KatalinKS\Order\Contracts\OrderBuyerContact;

interface OrderBuyerContactBuilder
{
    public function get(): OrderBuyerContact;
}
