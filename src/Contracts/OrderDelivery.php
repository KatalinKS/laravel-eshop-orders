<?php

namespace KatalinKS\Order\Contracts;

interface OrderDelivery
{
    public function getId(): int;

    public function toArray(): array;

    public function setConsignee(OrderConsignee $consignee): self;

    public function setAddress(OrderDeliveryAddress $address): self;
}
