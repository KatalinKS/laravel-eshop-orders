<?php

namespace KatalinKS\Order\Contracts\Repository;

use KatalinKS\Order\Contracts\OrderDeliveryAddress;

interface OrderDeliveryAddressRepository
{
    public function get(int $id): OrderDeliveryAddress;

    public function create(OrderDeliveryAddress  $address): OrderDeliveryAddress;

    public function update(OrderDeliveryAddress  $address): void;

    public function delete(OrderDeliveryAddress  $address): void;
}
