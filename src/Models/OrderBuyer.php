<?php

namespace KatalinKS\Order\Models;

use App\Models\Dictionary\Entity;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use KatalinKS\Order\Contracts\OrderBuyer as OrderBuyerContract;
use KatalinKS\Order\Contracts\OrderBuyerContact;
use KatalinKS\Order\Contracts\OrderLegalRequisites;

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

    public function requisites(): BelongsTo
    {
        return $this->belongsTo(OrderLegalRequisites::class);
    }

    public function contact(): BelongsTo
    {
        return $this->belongsTo(OrderBuyerContact::class);
    }

    public function getEntityAttribute()
    {
        return $this->getRelation('entity');
    }

    public function getLegalAttribute()
    {
        return $this->getRelation('legal');
    }

    public function getId(): int
    {
        return $this->getOriginal('id');
    }

    public function setContact(OrderBuyerContact $contact): self
    {
        return $this->contact()->associate($contact);
    }

    public function setLegalRequisites(OrderLegalRequisites $requisites): self
    {
        return $this->requisites()->associate($requisites);
    }
}
