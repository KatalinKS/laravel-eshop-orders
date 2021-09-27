<?php

namespace KatalinKS\Order\Contracts;

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
}
