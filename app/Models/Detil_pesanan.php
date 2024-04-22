<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detil_pesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_nota',
        'id_produk',
        'kuantitas',
        'subtotal',
        'harga_produk',
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk');
    }

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'no_nota');
    }
    
}
