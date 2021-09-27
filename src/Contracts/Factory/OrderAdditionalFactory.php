<?php


namespace KatalinKS\Order\Contracts\Factory;


use KatalinKS\Order\Contracts\OrderAdditional;

interface OrderAdditionalFactory
{
    public function create(bool $logo, string $comment, ?array $files = null): OrderAdditional;
}
