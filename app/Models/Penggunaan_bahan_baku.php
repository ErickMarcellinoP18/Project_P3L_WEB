<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penggunaan_bahan_baku extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_bahan_baku',
        'kuantitas',
        'tanggal_penggunaan'
    ];

    public function bahan_baku()
    {
        return $this->belongsTo(Bahan_baku::class, 'id_bahan_baku');
    }
}
