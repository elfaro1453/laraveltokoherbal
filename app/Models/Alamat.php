<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    /**
     * Yang sekiranya bisa diisi oleh user
     */
    protected $fillable = [
        'user_id',
        'alamat',
        'provinsi',
        'kota',
        'kecamatan',
        'desa',
        'kodepos',
    ];
}
