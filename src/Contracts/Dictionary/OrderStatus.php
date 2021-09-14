<?php

namespace KatalinKS\Order\Contracts\Dictionary;

interface OrderStatus
{
    public function getName(): string;

    public function findByAlias(string $alias): self;
}
