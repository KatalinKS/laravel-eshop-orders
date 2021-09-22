<?php

namespace KatalinKS\Order\Contracts;

interface OrderDelivery
{
    public function getId():int;
    public function toArray(): array;
}
