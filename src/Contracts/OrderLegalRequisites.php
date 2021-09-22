<?php


namespace KatalinKS\Order\Contracts;


interface OrderLegalRequisites
{
    public function toArray();

    public function getId():int;
}
