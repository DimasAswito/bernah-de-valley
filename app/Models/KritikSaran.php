<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KritikSaran extends Model
{
    use HasFactory;

    protected $table = 'kritik_saran';
    protected $fillable = [
        'nama',
        'email',
        'isi',
        'rating',
        'kategori',
        'wahana_id',
        'status',
        'balasan',
    ];

    public function wahana()
    {
        return $this->belongsTo(Wahana::class);
    }
}
