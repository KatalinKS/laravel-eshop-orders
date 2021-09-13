<?php

namespace KatalinKS\Order\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDeliveryAddress extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'country',
        'zip',
        'region',
        'city',
        'street',
        'house',
        'building',
        'structure',
        'office',
    ];
}
