<?php

namespace KatalinKS\Order\Contracts\Repository;

use KatalinKS\Order\Contracts\OrderDeliveryAddress;

interface OrderDeliveryAddressRepository
{
    public function get(int $id): OrderDeliveryAddress;

    public function create(OrderDeliveryAddress  $consignee): OrderDeliveryAddress;

    public function update(OrderDeliveryAddress  $consignee): void;

    public function delete(OrderDeliveryAddress  $consignee): void;
}
