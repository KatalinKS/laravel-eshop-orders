<?php


namespace KatalinKS\Order\Directors;


use KatalinKS\Order\Contracts\Builder\OrderBuyerBuilder;
use \KatalinKS\Order\Contracts\Director\OrderBuyerDirector as OrderBuyerDirectorContract;
use KatalinKS\Order\Contracts\OrderBuyer;

class OrderBuyerDirector implements OrderBuyerDirectorContract
{
    public function __construct(
        private OrderBuyerBuilder $builder
    )
    {

    }

    public function createLegalBuyerEntity(array $contactData, array $legalEntityData): OrderBuyer
    {
        return $this->builder
            ->entity('legal')
            ->legalEntity($legalEntityData)
            ->buyerContact($contactData)
            ->get();
    }

    public function creteNaturalPersonBuyer(array $contactData): OrderBuyer
    {
        return $this->builder
            ->entity('natural')
            ->buyerContact($contactData)
            ->get();
    }
}
