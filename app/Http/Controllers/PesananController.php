<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Models\Pesanan;

class PesananController extends Controller
{
    
    
    public function index()
    {
        $pesanan = Pesanan::all();
        return view('pesanan.index', compact('pesanan'));
    }

    public function create()
    {
        return view('pesanan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_hampers' => 'required',
            'id_customer' => 'required',
            'id_penitip' => 'required',
            'id_alamat' => 'required',
            'jumlah' => 'required',
            'total_harga' => 'required',
            'status' => 'required',
        ]);

        try {
            Pesanan::create($request->all());
            return redirect()->route('pesanan.index')->with('success', 'Data berhasil ditambahkan');
        } catch (Exception $e) {
            return redirect()->route('pesanan.index')->with('error', 'Data gagal ditambahkan');
        }
    }

    public function edit($id)
    {
        $pesanan = Pesanan::find($id);
        return view('pesanan.edit', compact('pesanan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_hampers' => 'required',
            'id_customer' => 'required',
            'id_penitip' => 'required',
            'id_alamat' => 'required',
            'jumlah' => 'required',
            'total_harga' => 'required',
            'status' => 'required',
        ]);

        try {
            Pesanan::find($id)->update($request->all());
            return redirect()->route('pesanan.index')->with('success', 'Data berhasil diubah');
        } catch (Exception $e) {
            return redirect()->route('pesanan.index')->with('error', 'Data gagal diubah');
        }
        
    }




}
