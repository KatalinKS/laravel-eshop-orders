<?php

namespace KatalinKS\Order\Contracts;

interface Order
{
    public function setPriceId(int $priceId): self;

    public function setProcessingOfficeId(int $officeId): self;

    public function setStatus(string $status): self;
}
