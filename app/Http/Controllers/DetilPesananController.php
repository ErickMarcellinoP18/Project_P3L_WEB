<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Models\Detil_pesanan;


class DetilPesananController extends Controller
{
    
    public function index()
    {
        $detil_pesanan = Detil_pesanan::all();
        return view('detil_pesanan.index', compact('detil_pesanan'));
    }

    public function create()
    {
        return view('detil_pesanan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pesanan' => 'required',
            'id_produk' => 'required',
            'jumlah' => 'required',
            'subtotal' => 'required',
        ]);

        try {
            Detil_pesanan::create($request->all());
            return redirect()->route('detil_pesanan.index')->with('success', 'Data berhasil ditambahkan');
        } catch (Exception $e) {
            return redirect()->route('detil_pesanan.index')->with('error', 'Data gagal ditambahkan');
        }
    }

    public function edit($id)
    {
        $detil_pesanan = Detil_pesanan::find($id);
        return view('detil_pesanan.edit', compact('detil_pesanan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_pesanan' => 'required',
            'id_produk' => 'required',
            'jumlah' => 'required',
            'subtotal' => 'required',
        ]);

        try {
            Detil_pesanan::find($id)->update($request->all());
            return redirect()->route('detil_pesanan.index')->with('success', 'Data berhasil diubah');
        } catch (Exception $e) {
            return redirect()->route('detil_pesanan.index')->with('error', 'Data gagal diubah');
        }
    }

}
