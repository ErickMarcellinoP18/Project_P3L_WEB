<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran_lain extends Model
{
    use HasFactory;

    protected $fillable = [
        'total_pengeluaran',
        'jenis',
        'tanggal_pengeluaran'
    ];
}
