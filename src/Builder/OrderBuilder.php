<?php


namespace KatalinKS\Order\Builder;


use KatalinKS\Order\Models\Order;

class OrderBuilder
{
    public function build(): Order
    {
        return new Order();
    }
}
