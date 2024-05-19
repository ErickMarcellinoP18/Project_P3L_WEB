<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\User;
use Exception;


class KonfirmasiController extends Controller
{
    public function index()
    {
        $pesanan = Pesanan::where('status', 'sudah dibayar')->get();
        
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

        $user = User::find($pesanan->id_customer);
        $user->poin += $pesanan->poin_didapat; // Assuming 'poin_didapatkan' is the field where the points to be added are stored
        $user->save();

        return redirect()->route('terimaPesanan.index', $id)->with('success', 'Pesanan Diterima.');
}
public function updateStatusN($id)
{
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->status = 'Pesanan Ditolak';
        $pesanan->save();

        $user = User::find($pesanan->id_customer);
        $user->saldo += $pesanan->pembayaran;
        $user->save();

        return redirect()->route('terimaPesanan.index', $id)->with('danger', 'Pesanan Ditolak.');
}

}
