<?php

namespace KatalinKS\Order\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPayment extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'method',
        'status',
        'paid_at',

    ];
}
