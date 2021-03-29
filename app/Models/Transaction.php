<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /**
     * Yang sekiranya bisa diisi oleh user
     */
    protected $fillable = [
        'order_id',
        'user_id',
        'status_order',
        'cart_id',
    ];

    /**
     * satu transaksi hanya boleh ada satu cart yang berisi semua produk yang dia beli
     * transaksi()->cart()
     */
    public function cart()
    {
        return $this->hasMany(Cart::class, 'cart_id', 'cart_id');
    }
}
