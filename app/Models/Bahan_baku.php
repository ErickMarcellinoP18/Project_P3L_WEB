<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bahan_baku extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_bahan',
        'satuan',
        'stok_bahan',
    ];
}
