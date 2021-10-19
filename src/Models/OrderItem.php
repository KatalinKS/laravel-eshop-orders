<?php

namespace KatalinKS\Order\Models;

use App\Models\Dictionary\OrderStatus;
use App\Services\Eshop\Cart\Interfaces\Item\CartItemObj;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use KatalinKS\Order\Contracts\OrderItem as OrderItemContract;

class OrderItem extends Model implements OrderItemContract
{
    use HasFactory;

    protected $fillable = [
        'sku',
        'name',
        'size',
        'height',
        'price',
        'count',
        'status_id',
        'shipped',
        'product_unit_id',
    ];

    public function createFromCartItem(CartItemObj $item): OrderItem
    {
        $data = [
            'sku' => $item->getUnit()->getProduct()->getSKU(),
            'name' => $item->getUnit()->getProduct()->getName(),
            'size' => $item->getUnit()->getSize()->getSizeName(),
            'height' => $item->getUnit()->getHeight()->getHeightName(),
            'price' => $item->getUnit()->getProduct()->getPrice(),
            'count' => $item->getCount(),
            'status_id' => OrderStatus::getByAlias('created'),
            'shipped' => 0,
            'product_unit_id' => $item->getUnit()->getId(),
        ];

        return new self($data);
    }

    public function getId(): int
    {
        return $this->id;
    }
}
