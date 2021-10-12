<?php

namespace KatalinKS\Order\Factories;

use KatalinKS\Order\Contracts\Builder\OrderAdditionalBuilder as Builder;
use KatalinKS\Order\Contracts\Factory\OrderAdditionalFactory as OrderAdditionalFactoryContract;
use KatalinKS\Order\Contracts\OrderAdditional;
use KatalinKS\Order\Contracts\OrderLegalRequisites;
use KatalinKS\Order\Contracts\Repository\OrderAdditionalRepository as Repository;

class OrderAdditionalFactory implements OrderAdditionalFactoryContract
{
    public function __construct(
        private Builder $builder,
        private Repository $repository,
    ) {
    }

    public function create(bool $logo, string $comment, ?array $files = null): OrderAdditional
    {
        $additional = $this->build($logo, $comment, $files);

        return  $this->save($additional);
    }

    public function build(bool $logo, string $comment, ?array $files = null): OrderAdditional
    {
        return $this->builder
            ->setComment($comment)
            ->isNeedLogo($logo)
            ->attachFiles($files)
            ->get();
    }

    public function save(OrderLegalRequisites $requisite): OrderAdditional
    {
        return $this->repository->create($requisite);
    }
}
