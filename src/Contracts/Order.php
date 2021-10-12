<?php

namespace KatalinKS\Order\Contracts;

use KatalinKS\CompanyPlaces\Interfaces\CompanyPlace;

interface Order
{
    public function setPriceId(int $priceId): self;

    public function setProcessingOfficeId(int $officeId): self;

    public function setStatus(string $status): self;

    public function setBrowserId(string $browserId): self;

    public function toArray();

    public function getId(): int;

    public function getBuyer(): OrderBuyer;

    public function setDelivery(OrderDelivery $delivery): self;

    public function setAdditional(OrderAdditional $additional): self;

    public function setPayment(OrderPayment $payment): self;

    /**
     * Возвращает головной офис
     * @return CompanyPlace
     */
    public function getOffice(): CompanyPlace;

    /**
     * Возвращает офис самовывоза (в случае если доставка - вернет null)
     * @return CompanyPlace|null
     */
    public function getPickUpOffice(): ?CompanyPlace;
}
