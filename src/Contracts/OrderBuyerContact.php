<?php

namespace KatalinKS\Order\Contracts;

interface OrderBuyerContact
{
    /**
     * Возвращает email
     * @return string
     */
    public function getEmail(): string;
}
