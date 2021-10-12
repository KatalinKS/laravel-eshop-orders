<?php

namespace KatalinKS\Order\Builder;

use KatalinKS\Order\Contracts\Builder\OrderAdditionalBuilder as OrderAdditionalBuilderContract;
use KatalinKS\Order\Contracts\OrderAdditional;

class OrderAdditionalBuilder extends Builder implements OrderAdditionalBuilderContract
{
    protected $type = OrderAdditionalBuilder::class;

    public function setComment(string $status): self
    {
        $this->get()->setComment($status);
    }

    public function attachFiles(array $files): self
    {
        foreach ($files as $file) {
            $this->get()->attachFile($file);
        }

        return $this;
    }

    public function get(): OrderAdditional
    {
        return $this->instance;
    }

    public function isNeedLogo(bool $logo): self
    {
        $this->get()->isNeedLogo($logo);
    }
}
