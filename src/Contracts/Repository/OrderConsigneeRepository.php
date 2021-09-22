<?php

namespace KatalinKS\Order\Contracts\Repository;


use KatalinKS\Order\Contracts\OrderConsignee;

interface OrderConsigneeRepository
{
    public function get(int $id): OrderConsignee;

    public function create(OrderConsignee  $consignee): OrderConsignee;

    public function update(OrderConsignee  $consignee): void;

    public function delete(OrderConsignee  $consignee): void;
}
