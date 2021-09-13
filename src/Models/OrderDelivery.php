<?php

namespace KatalinKS\Order\Models;

use App\Models\Company\CompanyPlace;
use App\Models\Dictionary\DeliveryMethod;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderDelivery extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'consignee_id',
        'delivery_address_id',
        'delivery_method_id',
        'branch_place_id',
    ];

    public function consignee(): BelongsTo
    {
        return $this->belongsTo(OrderConsignee::class);
    }

    public function address(): BelongsTo    {
        return $this->belongsTo(OrderDeliveryAddress::class);
    }

    public function deliveryMethod(): BelongsTo
    {
        return $this->belongsTo(DeliveryMethod::class);
    }

    public function pickupPlace()
    {
        return $this->belongsTo(CompanyPlace::class);
    }
}
