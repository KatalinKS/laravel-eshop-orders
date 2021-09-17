<?php

namespace KatalinKS\Order\Contracts;

interface OrderItem
{
    public function getId(): int;

    public function toArray();
}
