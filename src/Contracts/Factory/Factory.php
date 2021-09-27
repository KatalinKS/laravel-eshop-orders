<?php

namespace KatalinKS\Order\Contracts\Factory;

use KatalinKS\Order\Contracts\Order as OrderContract;
use KatalinKS\Order\Contracts\OrderBuyer as OrderBuyerContract;
use KatalinKS\Order\Contracts\OrderBuyerContact;
use KatalinKS\Order\Contracts\OrderConsignee;
use KatalinKS\Order\Contracts\OrderDelivery;
use KatalinKS\Order\Contracts\OrderDeliveryAddress;
use KatalinKS\Order\Contracts\OrderItem;
use KatalinKS\Order\Contracts\OrderLegalRequisites;

interface Factory
{
    public function createOrder(array $orderData): OrderContract;

    public function createOrderItem(array $orderItemData): OrderItem;

    public function createOrderBuyer(array $orderBuyer, array $contact, ?array $requisites = null): OrderBuyerContract;

    public function createBuyerContact(array $contact): OrderBuyerContact;

    public function createLegalRequisites(array $requisites): OrderLegalRequisites;

    public function createDelivery(array $address, array $consignee, OrderContract $order): OrderDelivery;

    public function createDeliveryAddress(array $address): OrderDeliveryAddress;

    public function createConsignee(array $consignee): OrderConsignee;
}
