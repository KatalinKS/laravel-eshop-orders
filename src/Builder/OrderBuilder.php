<?php

namespace KatalinKS\Order\Builder;

use KatalinKS\Order\Models\Order;

class OrderBuilder
{
    private Order $order;

    public function build(): Order
    {
        return Order::create();
    }

    public function fresh(): self
    {
        $this->order = $this->init();

        return  $this;
    }

    public function init(): Order
    {
        return new Order();
    }

    public function setPriceId(int $priceId): self
    {
        $this->order->setPriceId($priceId);

        return $this;
    }

    public function get(): Order
    {
        return $this->order;
    }
}
