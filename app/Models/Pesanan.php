<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $fillable = [
        'nama_pemesan',
        'pesanan',
        'total_harga',
    ];
}
