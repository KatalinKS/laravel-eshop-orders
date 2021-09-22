<?php

namespace KatalinKS\Order\Factories;

use KatalinKS\Order\Contracts\Builder\OrderBuyerBuilder;
use KatalinKS\Order\Contracts\Factory\Factory as FactoryContract;
use KatalinKS\Order\Contracts\Factory\OrderBuyerFactory as OrderBuyerFactoryContract;
use KatalinKS\Order\Contracts\OrderBuyer;
use KatalinKS\Order\Contracts\Repository\OrderBuyerRepository;

class OrderBuyerFactory implements OrderBuyerFactoryContract
{
    public function __construct(
        private OrderBuyerBuilder $builder,
        private FactoryContract $factory,
        private OrderBuyerRepository $repository
    ) {
    }

    public function createLegalBuyerEntity(array $contact, array $requisites, int $personType): OrderBuyer
    {
        $buyer = $this->builder
            ->fill(['person_type_id' => $personType])
            ->setContact($this->factory->createBuyerContact($contact))
            ->setRequisites($this->factory->createLegalRequisites($requisites))
            ->get();

        return $this->repository->create($buyer);
    }

    public function creteNaturalPersonBuyer(array $contact, int $personTypeId): OrderBuyer
    {
        $buyer = $this->builder
            ->fill(['person_type_id' => $personTypeId])
            ->setContact($this->factory->createBuyerContact($contact))
            ->get();

        return $this->repository->create($buyer);
    }
}
