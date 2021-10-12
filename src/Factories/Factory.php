<?php

namespace KatalinKS\Order\Factories;

use KatalinKS\Order\Contracts\Factory\Factory as FactoryContract;
use KatalinKS\Order\Contracts\Factory\OrderAdditionalFactory as OrderAdditionalFactoryContract;
use KatalinKS\Order\Contracts\Factory\OrderBuyerContactFactory as OrderContactFactoryContact;
use KatalinKS\Order\Contracts\Factory\OrderBuyerFactory as OrderBuyerFactoryContract;
use KatalinKS\Order\Contracts\Factory\OrderConsigneeFactory as OrderConsigneeFactoryContract;
use KatalinKS\Order\Contracts\Factory\OrderDeliveryAddressFactory as OrderDeliveryAddressFactoryContract;
use KatalinKS\Order\Contracts\Factory\OrderDeliveryFactory as OrderDeliveryFactoryContract;
use KatalinKS\Order\Contracts\Factory\OrderFactory as OrderFactoryContract;
use KatalinKS\Order\Contracts\Factory\OrderItemFactory as OrderItemFactoryContract;
use KatalinKS\Order\Contracts\Factory\OrderLegalRequisitesFactory as OrderLegalRequisitesFactoryContract;
use KatalinKS\Order\Contracts\Factory\OrderPaymentFactory as OrderPaymentFactoryContract;
use KatalinKS\Order\Contracts\Order;
use KatalinKS\Order\Contracts\OrderAdditional;
use KatalinKS\Order\Contracts\OrderBuyer as OrderBuyerContract;
use KatalinKS\Order\Contracts\OrderBuyerContact;
use KatalinKS\Order\Contracts\OrderConsignee;
use KatalinKS\Order\Contracts\OrderDelivery;
use KatalinKS\Order\Contracts\OrderDeliveryAddress;
use KatalinKS\Order\Contracts\OrderItem;
use KatalinKS\Order\Contracts\OrderLegalRequisites;
use KatalinKS\Order\Contracts\OrderPayment;
use KatalinKS\PersonType\PersonTypeFacade;

class Factory implements FactoryContract
{
    public function __construct(
        private OrderFactoryContract $orderFactory,
        private OrderItemFactoryContract $orderItemFactory,
        private OrderBuyerFactoryContract $orderBuyerFactory,
        private OrderLegalRequisitesFactoryContract $orderLegalRequisitesFactory,
        private OrderContactFactoryContact $orderContactFactory,
        private OrderDeliveryFactoryContract $orderDeliveryFactory,
        private OrderDeliveryAddressFactoryContract $orderDeliveryAddressFactory,
        private OrderConsigneeFactoryContract $orderConsigneeFactory,
        private OrderAdditionalFactoryContract $orderAdditionalFactory,
        private OrderPaymentFactoryContract $orderPaymentFactory
    ) {
    }

    public function createOrder(array $orderData): Order
    {
        return $this->orderFactory->create($orderData);
    }

    public function createOrderItem(array $orderItemData): OrderItem
    {
        return $this->orderItemFactory->create($orderItemData);
    }

    public function createOrderBuyer(array $orderBuyer, array $contact, array $requisites = null): OrderBuyerContract
    {
        $contact = $this->createBuyerContact($orderBuyer['contact']);

        if (PersonTypeFacade::getType($orderBuyer['person_type_id']) == 'legal') {
            return $this->orderBuyerFactory->createLegalBuyerEntity($contact, $requisites, $orderBuyer['person_type_id']);
        } else {
            return $this->orderBuyerFactory->creteNaturalPersonBuyer($contact, $orderBuyer['person_type_id']);
        }
    }

    public function createLegalRequisites(array $requisites): OrderLegalRequisites
    {
        return $this->orderLegalRequisitesFactory
            ->create($requisites);
    }

    public function createBuyerContact(array $contact): OrderBuyerContact
    {
        return $this->orderContactFactory
            ->create($contact);
    }

    public function createDelivery(array $address, array $consignee, Order $order): OrderDelivery
    {
        if ($order->getBuyer()->getPersonType() == 'legal') {
            $delivery = $this->orderDeliveryFactory->creteWithConsignee($address, $consignee);
        } else {
            $delivery = $this->orderDeliveryFactory->create($address);
        }

        return $delivery;
    }

    public function createDeliveryAddress(array $address): OrderDeliveryAddress
    {
        return $this->orderDeliveryAddressFactory->create($address);
    }

    public function createConsignee(array $consignee): OrderConsignee
    {
        return $this->orderConsigneeFactory->create($consignee);
    }

    public function createAdditional(bool $logo, ?string $comment = null, ?array $files = null): OrderAdditional
    {
        return $this->orderAdditionalFactory->create($logo, $comment, $files);
    }

    public function createPayment(array $payment): OrderPayment
    {
        return $this->orderPaymentFactory->create($payment);
    }
}
