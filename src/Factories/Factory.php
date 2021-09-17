<?php


namespace KatalinKS\Order\Factories;

use \KatalinKS\Order\Contracts\Factory\Factory as FactoryContract;
use \KatalinKS\Order\Contracts\Factory\OrderFactory as OrderFactoryContract;
use \KatalinKS\Order\Contracts\Order;
use \KatalinKS\Order\Contracts\Factory\OrderItemFactory as OrderItemFactoryContract;
use KatalinKS\Order\Contracts\OrderItem;

class Factory implements FactoryContract
{
    public function __construct(
        private OrderFactoryContract $orderFactory,
        private OrderItemFactoryContract $orderItemFactory,
    )
    {
    }

    public function createOrder(array $orderData): Order
    {
        return $this->orderFactory->create($orderData);
    }

    public function createOrderItem(array $orderItemData, Order $order): OrderItem
    {
        return $this->orderItemFactory->create($orderItemData, $order);
    }
}
