<?php

namespace KatalinKS\Order\Contracts\Repository;

use KatalinKS\Order\Contracts\OrderLegalRequisites;

interface OrderLegalRequisitesRepository
{
    public function get(int $id): OrderLegalRequisites;

    public function create(OrderLegalRequisites  $requisite): OrderLegalRequisites;

    public function update(OrderLegalRequisites  $requisite): void;

    public function delete(OrderLegalRequisites  $requisite): void;
}
