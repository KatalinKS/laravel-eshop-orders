<?php

namespace KatalinKS\Order\Contracts\Builder;

use KatalinKS\Order\Contracts\OrderLegalRequisites;

interface OrderLegalRequisitesBuilder
{
    public function get(): OrderLegalRequisites;
}
