<?php

namespace KatalinKS\Order\Models;

use App\Models\Dictionary\Entity;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \KatalinKS\Order\Contracts\OrderBuyer as OrderBuyerContract;

class OrderBuyer extends Model implements OrderBuyerContract
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'entity_id',
        'legal_id',
    ];

    protected $appends = [
        'entity',
        'legal',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function entity()
    {
        return $this->belongsTo(Entity::class);
    }

    public function legal()
    {
        return $this->belongsTo(OrderLegalEntity::class);
    }

    public function getEntityAttribute()
    {
        return $this->getRelation('entity');
    }

    public function getLegalAttribute()
    {
        return $this->getRelation('legal');
    }
}
