<?php


namespace KatalinKS\Order\Repository;

use Illuminate\Support\Collection;
use KatalinKS\Order\Contracts\Order;
use \KatalinKS\Order\Contracts\Repository\OrderRepository as OrderRepositoryContract;
use \KatalinKS\Order\Models\Order as OrderModel;

class OrderRepository implements OrderRepositoryContract
{
    public function __construct(private OrderModel $model)
    {
    }

    public function get(int $id): Order
    {
        return $this->model->find($id);
    }

    public function create(Order $order): Order
    {
        return $this->create($order);
    }

    public function update(Order $order): void
    {
        $this->model
            ->whereId($order->getId())
            ->update($order->toArray());
    }

    public function delete(Order $order): void
    {
        $this->model
            ->whereId($order->getId())
            ->delete();
    }

    public function getByBrowserId(string $browserId): Collection
    {
        return $this->model
            ->whereBrowserId()
            ->get();
    }
}
