<?php

namespace KatalinKS\Order\Builder;

use KatalinKS\Order\Contracts\Builder\OrderBuyerBuilder as OrderBuyerBuilderContract;
use KatalinKS\Order\Contracts\OrderBuyer;

class OrderBuyerBuilder extends Builder implements OrderBuyerBuilderContract
{
    protected $type = OrderBuyer::class;

    public function get(): OrderBuyer
    {
        return $this->instance;
    }

    public function entity(string $entity): self
    {
        return $this;
    }

    public function legalEntity(array $legalEntityData): self
    {
        return $this;
    }

    public function setContact(array $contactData): self
    {
        $this->get()->setContact($contactData);

        return $this;
    }

    public function setRequisites(array $legalEntityData): self
    {
        $this->get()->setLegalRequisites($legalEntityData);

        return $this;
    }
}
