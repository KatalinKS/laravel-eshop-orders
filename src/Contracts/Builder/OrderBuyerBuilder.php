<?php


namespace KatalinKS\Order\Contracts\Builder;


use KatalinKS\Order\Contracts\OrderBuyer;

interface OrderBuyerBuilder
{
    public function get(): OrderBuyer;

    public function buyerContact(array $contactData): self;

    public function entity(string $entity): self;

    public function legalEntity(array $legalEntityData): self;
}
