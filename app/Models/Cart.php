<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    /**
     * Yang sekiranya bisa diisi oleh user
     */
    protected $fillable = [
        'user_id',
        'cart_id',
        'quantity',
        'product_id',
        'is_checkout',
    ];
}
