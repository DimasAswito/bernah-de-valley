<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;

    protected $table = 'galeri';

    protected $fillable = [
        'judul',
        'deskripsi',
        'kategori',
        'tipe_file',
        'file_path',
        'wahana_id',
        'is_active',
    ];

    public function wahana()
    {
        return $this->belongsTo(Wahana::class);
    }
}
