<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use Exception;


class KonfirmasiController extends Controller
{
    public function index()
    {
        $pesanan = Pesanan::all();
        return view('mo.konfirmasiPesanan.index', compact('pesanan'));
    }

    public function update($id)
    {
        $pesanan = Pesanan::find($id);
        return view('mo.konfirmasiPesanan.update', compact('pesanan'));
    }


public function updateStatus($id)
{
   
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->status = 'Pesanan Diterima';
        $pesanan->save();

        return redirect()->route('terimaPesanan.index', $id)->with('success', 'Status pesanan berhasil diupdate menjadi Pesanan Diterima.');
    
}
public function updateStatusN($id)
{
   
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->status = 'Pesanan Ditolak';
        $pesanan->save();

        return redirect()->route('terimaPesanan.index', $id)->with('success', 'Status pesanan berhasil diupdate menjadi Pesanan Diterima.');
    
}

}
