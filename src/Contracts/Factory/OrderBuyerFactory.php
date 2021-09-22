<?php

namespace KatalinKS\Order\Contracts\Factory;

use KatalinKS\Order\Contracts\OrderBuyer;

interface OrderBuyerFactory
{
    public function createLegalBuyerEntity(array $contact, array $requisites, int $personType): OrderBuyer;

    public function creteNaturalPersonBuyer(array $contact, int $personTypeId): OrderBuyer;
}
