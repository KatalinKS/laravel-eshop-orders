<?php

namespace KatalinKS\Order\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \KatalinKS\Order\Contracts\OrderDeliveryAddress as OrderDeliveryAddressContract;

class OrderDeliveryAddress extends Model implements OrderDeliveryAddressContract
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

    public function getId(): int
    {
        return $this->id;
    }
}
