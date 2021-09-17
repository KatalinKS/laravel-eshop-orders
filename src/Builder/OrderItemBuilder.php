<?php

namespace KatalinKS\Order\Builder;

use KatalinKS\Order\Contracts\OrderItem;

class OrderItemBuilder extends Builder
{
    protected $type = OrderItem::class;

    public function get(): OrderItem
    {
        return $this->instance;
    }
}
