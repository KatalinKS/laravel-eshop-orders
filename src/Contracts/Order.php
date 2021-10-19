<?php

namespace KatalinKS\Order\Contracts;

use KatalinKS\CompanyPlaces\Interfaces\CompanyPlace;
use KatalinKS\PriceList\Interfaces\Objects\PriceListObj;

interface Order
{
    /**
     * Устанавливает айдишник прайс листа
     * @param int $priceId
     * @return $this
     */
    public function setPriceId(int $priceId): self;

    /**
     * Устанавливает айдишник офиса обработки
     * @param int $officeId
     * @return $this
     */
    public function setProcessingOfficeId(int $officeId): self;

    /**
     * Устанавливает статус заказа
     * @param string $status
     * @return $this
     */
    public function setStatus(string $status): self;

    /**
     * Устанавливает айдишник браузера
     * @param string $browserId
     * @return $this
     */
    public function setBrowserId(string $browserId): self;

    public function toArray();

    /**
     * Возвращает айдишник заказ
     * @return int
     */
    public function getId(): int;

    /**
     * Возвращает покупателя
     * @return OrderBuyer
     */
    public function getBuyer(): OrderBuyer;

    /**
     * Устанавливает обьект содержащий информацию по доставкке
     * @param OrderDelivery $delivery
     * @return $this
     */
    public function setDelivery(OrderDelivery $delivery): self;

    /**
     * Устанавливает обьект содержащий дополнительную информацию
     * @param OrderAdditional $additional
     * @return $this
     */
    public function setAdditional(OrderAdditional $additional): self;

    /**
     * Устсанавливает обьект содержащий информацию по оплате
     * @param OrderPayment $payment
     * @return $this
     */
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

    /**
     * Возвращает прайс лист на основе которого делался заказ
     * @return PriceListObj
     */
    public function getPriceList(): PriceListObj;

    /**
     * Возвращает обьект содержащий информацию по доставке
     * @return OrderDelivery
     */
    public function getDelivery(): OrderDelivery;
}
