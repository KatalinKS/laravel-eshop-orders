<?php


namespace KatalinKS\Order\Contracts;


interface OrderAdditional
{
    public function setComment(string $status): self;

    public function attachFile($file): self;

    public function isNeedLogo(bool $logo): self;
}
