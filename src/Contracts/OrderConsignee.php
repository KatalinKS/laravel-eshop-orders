<?php

namespace KatalinKS\Order\Contracts;

interface OrderConsignee
{
    public function getId(): int;

    public function toArray();
}
