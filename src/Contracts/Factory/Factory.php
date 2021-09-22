<?php

namespace KatalinKS\Order\Contracts\Factory;

use KatalinKS\Order\Contracts\Order as OrderContract;
use KatalinKS\Order\Contracts\OrderBuyer as OrderBuyerContract;
use KatalinKS\Order\Contracts\OrderBuyerContact;
use KatalinKS\Order\Contracts\OrderItem;
use KatalinKS\Order\Contracts\OrderLegalRequisites;

interface Factory
{
    public function createOrder(array $orderData): OrderContract;

    public function createOrderItem(array $orderItemData): OrderItem;

    public function createOrderBuyer(array $orderBuyer, array $contact, ?array $requisites = null): OrderBuyerContract;

    public function createBuyerContact(array $contact): OrderBuyerContact;

    public function createLegalRequisites(array $requisites): OrderLegalRequisites;
}
