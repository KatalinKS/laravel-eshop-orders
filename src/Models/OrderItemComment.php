<?php

namespace KatalinKS\Order\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItemComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment',
        'order_item_id',
    ];

}
