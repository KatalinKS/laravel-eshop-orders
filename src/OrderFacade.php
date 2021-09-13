<?php

namespace KatalinKS\Order;

use Illuminate\Support\Facades\Facade;

/**
 * @see \KatalinKS\Order\Order
 */
class OrderFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-eshop-orders';
    }
}
