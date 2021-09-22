<?php

namespace KatalinKS\Order\Contracts\Repository;

use KatalinKS\Order\Contracts\OrderLegalRequisites;

interface OrderLegalRequisitesRepository
{
    public function get(int $id): OrderLegalRequisites;

    public function create(OrderLegalRequisites $order): OrderLegalRequisites;

    public function update(OrderLegalRequisites $order): void;

    public function delete(OrderLegalRequisites $order): void;
}
