<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * Yang sekiranya bisa diisi oleh user
     */
    protected $fillable = [
        'name',
        'manufacture',
        'price',
        'description',
        'quantity',
        'is_recommended',
    ];

    /**
     * Produk bisa punya banyak media (gambar)
     */
    public function images()
    {
        return $this->hasMany(Media::class);
    }
}
