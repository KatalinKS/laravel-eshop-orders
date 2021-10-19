<?php

namespace KatalinKS\Order\Contracts;

use KatalinKS\CompanyPlaces\Models\CompanyPlace;

interface OrderDelivery
{
    public function getId(): int;

    public function toArray(): array;

    /**
     * Устанавливает грузополучателя
     * @param OrderConsignee $consignee
     * @return $this
     */
    public function setConsignee(OrderConsignee $consignee): self;

    /**
     * Устанавливает адрес доставки
     * @param OrderDeliveryAddress $address
     * @return $this
     */
    public function setAddress(OrderDeliveryAddress $address): self;

    /**
     * Возвращает офис самовывоза
     * @return CompanyPlace
     */
    public function getPickUpOffice(): CompanyPlace;
}
