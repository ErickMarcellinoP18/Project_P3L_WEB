<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bahan_baku;
use App\Models\Detail_resep;

class listBahanController extends Controller
{
    public function index()
    {
        $bahan_baku = Detail_resep::join('bahan_baku', 'resep.id_bahan_baku', '=', 'detail_resep.id_bahan_baku')
        ->where('stok_bahan', '<', 'takaran')
        ->get();
        return view('mo.listBahanBaku.listBahanBaku', compact('bahan_baku'));
    }
}
