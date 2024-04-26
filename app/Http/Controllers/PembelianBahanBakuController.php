<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Models\Pembelian_bahan_baku;
use App\Models\Bahan_baku;

class PembelianBahanBakuController extends Controller
{

    public function index()
    {
        $pembelian_bahan_baku = Pembelian_bahan_baku::all();
        return view('admin.beliBahan.index', compact('pembelian_bahan_baku'));
    }

    public function create()
    {
        $bahan_baku = Bahan_baku::all();
        return view('admin.beliBahan.create', compact('bahan_baku'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_bahan_baku' => 'required',
            'harga_bahan_baku' => 'required',
            'kuantitas' => 'required',
            'tanggal_pengeluaran' => 'required'
        ]);

        try {
            Pembelian_bahan_baku::create($request->all());
            return redirect()->route('beliBahan.index')->with('success', 'Data berhasil ditambahkan');
        } catch (Exception $e) {
            return redirect()->route('beliBahan.index')->with('error', 'Data gagal ditambahkan');
        }
    }

    public function edit($id)
    {
        $pembelian_bahan_baku = Pembelian_bahan_baku::find($id);
        $bahan_baku = Bahan_baku::all();
        return view('admin.beliBahan.edit', compact('pembelian_bahan_baku', 'bahan_baku'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_bahan_baku' => 'required',
            'harga_bahan_baku' => 'required',
            'kuantitas' => 'required',
            'tanggal_pengeluaran' => 'required'
        ]);

        try {
            Pembelian_bahan_baku::find($id)->update($request->all());
            return redirect()->route('beliBahan.index')->with('success', 'Data berhasil diubah');
        } catch (Exception $e) {
            return redirect()->route('beliBahan.index')->with('error', 'Data gagal diubah');
        }
    }


    public function destroy($id)
    {
        try {
            Pembelian_bahan_baku::find($id)->delete();
            return redirect()->route('beliBahan.index')->with('success', 'Data berhasil dihapus');
        } catch (Exception $e) {
            return redirect()->route('beliBahan.index')->with('error', 'Data gagal dihapus');
        }
    }
}
