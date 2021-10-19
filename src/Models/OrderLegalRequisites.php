<?php

namespace KatalinKS\Order\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \KatalinKS\Order\Contracts\OrderLegalRequisites as OrderLegalRequisitesContract;

class OrderLegalRequisites extends Model implements OrderLegalRequisitesContract
{
    use HasFactory;

    protected $fillable = [
        'name',
        'inn',
        'kpp',
        'ceo',
        'email',
        'phone',
        'fax',
    ];

    public function getId(): int
    {
        return $this->id;
    }
}
