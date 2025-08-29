<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    /**
     * Une commande appartient à un utilisateur.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Une commande contient plusieurs lignes de commande (items).
     */
    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
}