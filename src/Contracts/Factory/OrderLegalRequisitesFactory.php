<?php


namespace KatalinKS\Order\Contracts\Factory;


use KatalinKS\Order\Contracts\OrderLegalRequisites;

interface OrderLegalRequisitesFactory
{
    public function create(array $requisite): OrderLegalRequisites;
}
