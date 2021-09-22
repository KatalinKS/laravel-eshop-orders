<?php

namespace KatalinKS\Order\Repository;

use KatalinKS\Order\Contracts\OrderLegalRequisites as OrderLegalRequisitesContact;
use KatalinKS\Order\Contracts\Repository\OrderLegalRequisitesRepository as OrderLegalRequisitesRepositoryContract;
use KatalinKS\Order\Models\OrderLegalRequisites as Model;

class OrderLegalRequisitesRepository implements OrderLegalRequisitesRepositoryContract
{
    public function __construct(private Model $model)
    {
    }

    public function get(int $id): OrderLegalRequisitesContact
    {
        return $this->model->find($id);
    }

    public function create(OrderLegalRequisitesContact $requisites): OrderLegalRequisitesContact
    {
        return $this->model->create($requisites->toArray());
    }

    public function update(OrderLegalRequisitesContact $requisites): void
    {
        $this->model
            ->whereId($requisites->getId())
            ->update($requisites->toArray());
    }

    public function delete(OrderLegalRequisitesContact $requisites): void
    {
        $this->model
            ->whereId($requisites->getId())
            ->delete();
    }
}
