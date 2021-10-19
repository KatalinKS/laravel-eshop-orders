<?php

namespace KatalinKS\Order\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use KatalinKS\Order\Contracts\OrderPayment as OrderPaymentContact;

class OrderPayment extends Model implements OrderPaymentContact
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'method',
        'status',
        'paid_at',

    ];
}
