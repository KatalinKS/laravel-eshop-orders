<?php

namespace KatalinKS\Order\Builder;

use KatalinKS\CompanyPlaces\Models\CompanyPlace;
use KatalinKS\Order\Contracts\Dictionary\OrderStatus;
use KatalinKS\Order\Contracts\Order;

class OrderBuilder
{
    private Order $order;

    public function fresh(): self
    {
        $this->order = $this->init();

        return  $this;
    }

    public function init(): Order
    {
        return app(Order::class);
    }

    public function setPriceId(int $priceId): self
    {
        $this->order->setPriceId($priceId);

        return $this;
    }

    public function setProcessingOfficeId(int $officeId): self
    {
        $this->order->setProcessingOfficeId($officeId);

        return $this;
    }

    public function setProcessingOffice(CompanyPlace $place): self
    {
        $this->order->setProcessingOfficeId($place->getId());

        return $this;
    }

    public function get(): Order
    {
        return $this->order;
    }

    public  function setStatus(OrderStatus $orderStatus): self
    {
        $this->order->setStatus($orderStatus->getName());

        return $this;
    }
}
