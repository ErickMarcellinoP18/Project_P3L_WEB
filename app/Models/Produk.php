<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_produk',
        'harga',
        'jumlah_stok',
        'tipe_produk',
        'porsi',
        'id_hampers',
        'id_resep',
        'id_penitip',
    ];

    public function hampers()
    {
        return $this->belongsTo(Hampers::class, 'id_hampers');
    }

    public function resep()
    {
        return $this->belongsTo(Resep::class, 'id_resep');
    }

    public function penitip()
    {
        return $this->belongsTo(Penitip::class, 'id_penitip');
    }
}
