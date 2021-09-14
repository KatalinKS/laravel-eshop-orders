<?php

namespace KatalinKS\Order\Models\Dictionary;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use KatalinKS\Order\Contracts\Dictionary\OrderItemStatus as OrderItemStatusContract;

class OrderItemStatus extends Model implements OrderItemStatusContract
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'alias',
    ];
}
