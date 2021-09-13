<?php


namespace KatalinKS\Order\Builder;


use KatalinKS\Order\Models\Order;
use KatalinKS\Order\Models\OrderItem;
use App\Services\Eshop\Cart\Interfaces\Item\CartItemObj;

class OrderItemBuilder
{
    public function build(CartItemObj $item)
    {
        return OrderItem::createFromCartItem($item);
    }
}
