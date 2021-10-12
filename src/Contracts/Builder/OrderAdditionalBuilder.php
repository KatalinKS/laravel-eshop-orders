<?php

namespace KatalinKS\Order\Contracts\Builder;

use KatalinKS\Order\Contracts\OrderAdditional;

interface OrderAdditionalBuilder
{
    public function get(): OrderAdditional;

    public function setComment(string $status): self;

    public function attachFiles(array $files): self;

    public function isNeedLogo(bool $logo): self;
}
