<?php

namespace KatalinKS\Order\Factories;

use KatalinKS\Order\Builder\OrderItemBuilder;
use KatalinKS\Order\Contracts\Factory\OrderItemFactory as OrderItemFactoryContract;
use KatalinKS\Order\Contracts\OrderItem;
use KatalinKS\Order\Contracts\Repository\OrderItemRepository;

class OrderItemFactory implements OrderItemFactoryContract
{
    public function __construct(
        private OrderItemBuilder $builder,
        private OrderItemRepository $repository
    ) {
    }

    public function create(array $itemData): OrderItem
    {
        $item = $this->builder
            ->fill($itemData)
            ->get();

        return $this->repository->create($item);
    }
}
