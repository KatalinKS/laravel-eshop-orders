<?php

namespace KatalinKS\Order\Contracts\Repository;

use KatalinKS\Order\Contracts\OrderAdditional;

interface OrderAdditionalRepository
{
    public function get(int $id): OrderAdditional;

    public function create(OrderAdditional  $additional): OrderAdditional;

    public function update(OrderAdditional  $additional): void;

    public function delete(OrderAdditional  $additional): void;
}
