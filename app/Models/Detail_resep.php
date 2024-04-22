<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_resep extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_resep',
        'id_bahan',
        'takaran',
    ];

    public function resep()
    {
        return $this->belongsTo(Resep::class, 'id_resep');
    }

    public function bahan()
    {
        return $this->belongsTo(Bahan::class, 'id_bahan');
    }
}
