<?php

namespace KatalinKS\Order\Builder;

use KatalinKS\Order\Contracts\Builder\OrderBuyerBuilder as OrderBuyerBuilderContract;
use KatalinKS\Order\Contracts\OrderBuyer;

class OrderBuyerBuilder extends Builder implements OrderBuyerBuilderContract
{
    protected $instance = OrderBuyer::class;

    public function get(): OrderBuyer
    {
        return $this->instance;
    }

    public function buyerContact(array $contactData): self
    {
        app();

        return $this;
    }

    public function entity(string $entity): self
    {
        return $this;
    }

    public function legalEntity(array $legalEntityData): self
    {
        return $this;
    }
}
