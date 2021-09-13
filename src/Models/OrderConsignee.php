<?php

namespace KatalinKS\Order\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderConsignee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'inn',
        'kpp',
    ];
}
