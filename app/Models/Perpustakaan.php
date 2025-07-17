<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perpustakaan extends Model
{
    protected $table = 'perpustakaan';

    protected $fillable = [
        'nama_perpustakaan',
        'alamat',
        'telepon',
        'kategori',
        'latitude',
        'longitude',
    ];
}