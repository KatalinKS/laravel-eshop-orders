<?php

namespace KatalinKS\Order\Contracts;

interface OrderDeliveryAddress
{
    public function getId(): int;

    public function toArray();
}
