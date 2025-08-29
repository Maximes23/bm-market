<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItem extends Model
{
    use HasFactory;

    /**
     * Une ligne de commande appartient à une commande.
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Une ligne de commande correspond à un produit.
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}