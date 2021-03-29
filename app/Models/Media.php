<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    /**
     * Yang sekiranya bisa diisi oleh user
     */
    protected $fillable = [
        'product_id',
        'name',
        'url_path',
    ];
}
