<?php


namespace KatalinKS\Order\Factories;

use KatalinKS\Order\Contracts\Builder\OrderLegalRequisitesBuilder as Builder;
use KatalinKS\Order\Contracts\Factory\OrderBuyerContactFactory;
use KatalinKS\Order\Contracts\OrderBuyerContact;
use KatalinKS\Order\Contracts\Repository\OrderLegalRequisitesRepository as Repository;

class OrderBuyerBuyerContactFactory implements OrderBuyerContactFactory
{
    public function __construct(
        private Builder $builder,
        private Repository $repository,
    )
    {
    }

    public function create(array $contact): OrderBuyerContact
    {
        $contacts = $this->build($contact);

        return  $this->save($contacts);
    }

    public function build(array $contact): OrderBuyerContact
    {
        return $this->builder
            ->fill($contact)
            ->get();
    }

    public function save(OrderBuyerContact $contact): OrderBuyerContact
    {
        return $this->repository->create($contact);
    }
}
