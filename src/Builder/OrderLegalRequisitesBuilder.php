<?php

namespace KatalinKS\Order\Builder;

use KatalinKS\Order\Contracts\Builder\OrderLegalRequisitesBuilder as OrderLegalRequisitesBuilderContract;
use KatalinKS\Order\Contracts\OrderLegalRequisites;

class OrderLegalRequisitesBuilder extends Builder implements OrderLegalRequisitesBuilderContract
{
    protected $type = OrderLegalRequisites::class;

    public function get(): OrderLegalRequisites
    {
        return $this->instance;
    }
}
