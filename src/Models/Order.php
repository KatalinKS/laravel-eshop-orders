<?php

namespace KatalinKS\Order\Models;

use App\Models\Company\CompanyPlace;
use App\Models\Company\Manager;
use App\Models\EShop\PriceList;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'price_id',
        'processing_office_id',
        'promocode',
        'status',
        'additional_id',
        'manager_id',
        'buyer_id',
        'payment_id',
        'delivery_id',
    ];

    protected $appends = [
        'processingOffice',
        'additional',
        'manager',
        'buyer',
        'payment',
        'delivery',
    ];

    public function getProcessingOfficeAttribute()
    {
        return $this->getRelationValue('processingOffice');
    }

    public function getManagerAttribute()
    {
        return $this->getRelationValue('manager');
    }

    public function getAdditionalAttribute()
    {
        return $this->getRelationValue('additional');
    }

    public function getBuyerAttribute()
    {
        return $this->getRelationValue('buyer');
    }

    public function getPaymentAttribute()
    {
        return $this->getRelationValue('payment');
    }

    public function getDeliveryAttribute()
    {
        return $this->getRelationValue('delivery');
    }

    public function price(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(PriceList::class, 'price_id');
    }

    public function processingOffice(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(CompanyPlace::class, 'processing_office_id');
    }

    public function additional(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(OrderAdditional::class, 'additional_id');
    }

    public function manager(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Manager::class);
    }

    public function buyer()
    {
        return $this->belongsTo(OrderBuyer::class, 'buyer_id');
    }

    public function payment(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(OrderPayment::class, 'payment_id');
    }

    public function delivery()
    {
        return $this->belongsTo(OrderDelivery::class, 'delivery_id');
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
