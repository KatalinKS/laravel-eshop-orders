<?php

namespace KatalinKS\Order\Contracts\Builder;

use KatalinKS\Order\Contracts\OrderBuyer;

interface OrderBuyerBuilder
{
    public function get(): OrderBuyer;

    public function setContact(array $contactData): self;

    public function entity(string $entity): self;

    public function setRequisites(array $legalEntityData): self;
}
