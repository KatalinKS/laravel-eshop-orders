<?php

namespace KatalinKS\Order\Contracts;

interface OrderBuyer
{
    /**
     * Возвращает айдишник пользователя
     * @return int
     */
    public function getId(): int;

    public function toArray();

    /**
     * Устанавливает обьект содержащий контактную информацию пользователя
     * @param OrderBuyerContact $contact
     * @return $this
     */
    public function setContact(OrderBuyerContact $contact): self;

    /**
     * В случае если тип пользователя юр. лицо можно установить реквизиты покупателя
     * @param OrderLegalRequisites $requisites
     * @return $this
     */
    public function setLegalRequisites(OrderLegalRequisites $requisites): self;

    /**
     * Устанавливает обьект типа пользователя (юр. лицо, физическое)
     * @return string
     */
    public function getPersonType(): string;

    /**
     * Возвращает email покупателя
     * @return string
     */
    public function getEmail(): string;

    /**
     * Возвращает обьект содержащий контактные данные
     * @return OrderBuyerContact
     */
    public function getContact(): OrderBuyerContact;
}
