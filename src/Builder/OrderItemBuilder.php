<?php

namespace KatalinKS\Order\Builder;

use App\Services\Eshop\Cart\Interfaces\Item\CartItemObj;
use KatalinKS\Order\Models\OrderItem;

class OrderItemBuilder
{
    public function build(CartItemObj $item)
    {
        return OrderItem::createFromCartItem($item);
    }
}
