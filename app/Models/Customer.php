<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = "customer";
    protected $primaryKey = "id_customer";


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_customer',
        'password',
        'email',
        'ulang_tahun',
        'saldo',
        'jumlah_poin'
    ];
}
