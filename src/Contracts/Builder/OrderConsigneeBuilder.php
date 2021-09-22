<?php


namespace KatalinKS\Order\Contracts\Builder;


use KatalinKS\Order\Contracts\OrderConsignee;

interface OrderConsigneeBuilder
{
    public function get(): OrderConsignee;

    public function fill(array $data): self;
}
