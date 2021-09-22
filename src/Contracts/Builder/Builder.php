<?php

namespace KatalinKS\Order\Contracts\Builder;

interface Builder
{
    public function fresh(): self;

    public function init();

    public function fill(array $data): self;
}
