<?php

namespace KatalinKS\Order\Factories;

use KatalinKS\Order\Contracts\Builder\OrderBuyerBuilder;
use  KatalinKS\Order\Contracts\Factory\OrderFactory as OrderFactoryContract;
use KatalinKS\Order\Contracts\Order;
use KatalinKS\Order\Contracts\Repository\OrderRepository;

class OrderFactory implements OrderFactoryContract
{
    public function __construct(
        private OrderBuyerBuilder $builder,
        private OrderRepository $repository
    ) {
    }

    public function create(array $orderData): Order
    {
        $order = $this->orderBuilder
            ->fresh()
            ->setPriceId($orderData['price_list_id']->getId())
            ->setProcessingOffice('processing_office_id')
            ->setStatus('not-confirmed')
            ->setBrowserId($orderData['browser_id'])
            ->get();

        return $this->repository->create($order);
    }
}
