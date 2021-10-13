<?php

namespace KatalinKS\Order\Contracts;

interface OrderBuyer
{
    public function getId(): int;

    public function toArray();

    public function setContact(OrderBuyerContact $contact): self;

    public function setLegalRequisites(OrderLegalRequisites $requisites): self;

    public function getPersonType(): string;

    public function getEmail(): string;
}
