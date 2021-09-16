<?php

namespace KatalinKS\Order\Contracts\Repository;

use Illuminate\Support\Collection;
use KatalinKS\Order\Contracts\Order;

interface OrderRepository
{
    public function get(int $id): Order;

    public function create(Order $order): Order;

    public function update(Order $order): void;

    public function delete(Order $order): void;

    public function getByBrowserId(string $browserId): Collection;
}
