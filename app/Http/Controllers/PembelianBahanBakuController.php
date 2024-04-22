<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Models\Pembelian_bahan_baku;

class PembelianBahanBakuController extends Controller
{
    
    public function index()
    {
        $pengeluaran_bahan_baku = Pembelian_bahan_baku::all();
        return view('pengeluaran_bahan_baku.index', compact('pengeluaran_bahan_baku'));
    }

    public function create()
    {
        return view('pengeluaran_bahan_baku.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_bahan_baku' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required',
        ]);

        try {
            Pembelian_bahan_baku::create($request->all());
            return redirect()->route('pengeluaran_bahan_baku.index')->with('success', 'Data berhasil ditambahkan');
        } catch (Exception $e) {
            return redirect()->route('pengeluaran_bahan_baku.index')->with('error', 'Data gagal ditambahkan');
        }
    }

    public function edit($id)
    {
        $pengeluaran_bahan_baku = Pembelian_bahan_baku::find($id);
        return view('pengeluaran_bahan_baku.edit', compact('pengeluaran_bahan_baku'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_bahan_baku' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required',
        ]);

        try {
            Pembelian_bahan_baku::find($id)->update($request->all());
            return redirect()->route('pengeluaran_bahan_baku.index')->with('success', 'Data berhasil diubah');
        } catch (Exception $e) {
            return redirect()->route('pengeluaran_bahan_baku.index')->with('error', 'Data gagal diubah');
        }
    }


    public function delete($id)
    {
        try {
            Pembelian_bahan_baku::find($id)->delete();
            return redirect()->route('pengeluaran_bahan_baku.index')->with('success', 'Data berhasil dihapus');
        } catch (Exception $e) {
            return redirect()->route('pengeluaran_bahan_baku.index')->with('error', 'Data gagal dihapus');
        }
    }

    

}
