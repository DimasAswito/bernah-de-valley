<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wahana extends Model
{
    use HasFactory;

    protected $table = 'wahana';
    protected $fillable = [
        'nama',
        'slug',
        'deskripsi',
        'gambar',
        'harga_tiket',
        'jam_buka',
        'jam_tutup',
        'kapasitas',
        'status',
    ];
}
