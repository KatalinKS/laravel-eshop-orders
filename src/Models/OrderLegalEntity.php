<?php

namespace KatalinKS\Order\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderLegalEntity extends Model
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
}
