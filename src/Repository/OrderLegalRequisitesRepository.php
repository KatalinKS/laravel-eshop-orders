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

    public function create(OrderLegalRequisitesContact $requisite): OrderLegalRequisitesContact
    {
        return $this->model->create($requisite->toArray());
    }

    public function update(OrderLegalRequisitesContact $requisite): void
    {
        $this->model
            ->whereId($requisite->getId())
            ->update($requisite->toArray());
    }

    public function delete(OrderLegalRequisitesContact $requisite): void
    {
        $this->model
            ->whereId($requisite->getId())
            ->delete();
    }
}
