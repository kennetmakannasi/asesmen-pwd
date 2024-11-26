<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'nama',
        'harga',
        'kategori',
        'deskripsi',
        'foto',
    ];

}