<?php

namespace KatalinKS\Order\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use KatalinKS\Order\Contracts\Dictionary\OrderStatus as OrderStatusContract;

class OrderStatus extends Model implements OrderStatusContract
{
    use HasFactory;

    protected $fillable = [
        'name',
        'alias',
    ];

    public $timestamps = false;

    public static function getByAlias(string $name)
    {
        return self::whereAlias($name)->first();
    }

    public function getName(): string
    {
        return $this->getOriginal('name');
    }

    public function findByAlias(string $alias): OrderStatusContract
    {
        return $this->whereAlias($alias)->first();
    }
}
