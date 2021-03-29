<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    /**
     * Yang sekiranya bisa diisi oleh user
     */
    protected $fillable = [
        'user_id',
        'product_id',
    ];
}
