<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hampers extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_hampers',
        'harga_hampers',
        'tgl_mulai_promo',
        'tgl_akhir_promo',
    ];
}
