<?php


namespace KatalinKS\Order\Factories;

use KatalinKS\Order\Contracts\Builder\OrderLegalRequisitesBuilder;
use \KatalinKS\Order\Contracts\Factory\OrderLegalRequisitesFactory as OrderLegalRequisitesFactoryContract;
use KatalinKS\Order\Contracts\OrderLegalRequisites;
use KatalinKS\Order\Contracts\Repository\OrderLegalRequisitesRepository;

class OrderLegalRequisitesFactory implements OrderLegalRequisitesFactoryContract
{
    public function __construct(
        private OrderLegalRequisitesBuilder $builder,
        private OrderLegalRequisitesRepository $repository,
    )
    {
    }

    public function create(array $requisite): OrderLegalRequisites
    {
        $requisites = $this->build($requisite);

        return  $this->save($requisites);
    }

    public function build(array $requisite): OrderLegalRequisites
    {
        return $this->builder
            ->fill($requisite)
            ->get();
    }

    public function save(OrderLegalRequisites $requisite): OrderLegalRequisites
    {
        return $this->repository->create($requisite);
    }
}
