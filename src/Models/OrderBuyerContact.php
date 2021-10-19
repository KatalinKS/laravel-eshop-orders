<?php

namespace KatalinKS\Order\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use KatalinKS\Order\Contracts\OrderBuyerContact as OrderBuyerContactContract;

class OrderBuyerContact extends Model implements OrderBuyerContactContract
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'phone',
        'email',
    ];

    public $timestamps = false;

    public function getEmail(): string
    {
        return $this->email;
    }
}
