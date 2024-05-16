<?php

namespace App\Http\Controllers;

use App\Models\Hampers;
use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukHomeController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        $hampers = Hampers::all();

        return view('produkPage', compact('produk', 'hampers'));
    }
}
