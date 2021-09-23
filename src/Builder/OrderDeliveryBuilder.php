<?php

namespace KatalinKS\Order\Builder;

use KatalinKS\Order\Contracts\Builder\OrderDeliveryBuilder as OrderDeliveryBuilderContract;
use KatalinKS\Order\Contracts\OrderConsignee;
use KatalinKS\Order\Contracts\OrderDelivery;
use KatalinKS\Order\Contracts\OrderDeliveryAddress;

class OrderDeliveryBuilder extends Builder implements OrderDeliveryBuilderContract
{
    protected $type = OrderDeliveryAddressBuilder::class;

    public function get(): OrderDelivery
    {
        return $this->instance;
    }

    public function setAddress(OrderDeliveryAddress $address): self
    {
        $this->get()->setAddress($address);

        return $this;
    }

    public function setConsignee(OrderConsignee $consignee): self
    {
        $this->get()->setConsignee($consignee);

        return $this;
    }
}
