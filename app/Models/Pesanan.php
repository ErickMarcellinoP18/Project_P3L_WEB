<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    public $timestamps = "false";
    public $table = "pesanan";
    protected $primaryKey = "no_nota";
    protected $fillable = [
        'no_nota',
        'id_customer',
        'tanggal_ambil',
        'tanggal_pesan',
        'status',
        'jenis_delivery',
        'tanggal_lunas',
        'alamat',
        'poin_digunakan',
        'pembayaran',
        'poin_didapatkan'
    ];

    public function customer()
    {
        return $this->belongsTo(User::class, 'id_customer');
    }
}
