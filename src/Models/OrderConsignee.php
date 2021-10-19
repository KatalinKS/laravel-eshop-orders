<?php

namespace KatalinKS\Order\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \KatalinKS\Order\Contracts\OrderConsignee as OrderConsigneeContract;

class OrderConsignee extends Model implements OrderConsigneeContract
{
    use HasFactory;
    protected $fillable = [
        'name',
        'inn',
        'kpp',
    ];

    public function getId(): int
    {
        return $this->id;
    }
}
