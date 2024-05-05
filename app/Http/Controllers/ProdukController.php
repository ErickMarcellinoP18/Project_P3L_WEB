<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Models\Produk;
use App\Models\Penitip;
use App\Models\Hampers;
use App\Models\Resep;


class ProdukController extends Controller
{

    public function index()
    {
        $produk = Produk::all();
        return view('admin.produk.index', compact('produk'));
    }

    public function create()
    {
        $hampers = Hampers::all();
        $resep = Resep::all();
        return view('admin.produk.create', compact('hampers', 'resep'));
    }

    public function createTitipan()
    {
        $penitip = Penitip::all();
        return view('admin.produk.createTitipan', compact('penitip'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'jumlah_stok' => 'required',
            'tipe_produk' => 'required'
        ]);

        try {
            Produk::create($request->all());
            return redirect()->route('produk.index')->with('success', 'Data berhasil ditambahkan');
        } catch (Exception $e) {
            return redirect()->route('produk.index')->with('error', 'Data gagal ditambahkan');
        }
    }

    public function edit($id)
    {
        $produk = Produk::find($id);
        $penitip = Penitip::all();
        $hampers = Hampers::all();
        $resep = Resep::all();
        return view('admin.produk.edit', compact('produk', 'penitip', 'hampers', 'resep'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'jumlah_stok' => 'required',
            'tipe_produk' => 'required'
        ]);

        try {
            $produk = Produk::find($id);
            $produk->update($request->all());

            $produk->resep->kuota_harian = $request->kuota_harian;
            $produk->resep->save();

            return redirect()->route('produk.index')->with('success', 'Data berhasil diubah');
        } catch (Exception $e) {
            return redirect()->route('produk.index')->with('error', 'Data gagal diubah');
        }
    }

    public function destroy($id)
    {
        try {
            Produk::find($id)->delete();
            return redirect()->route('produk.index')->with('success', 'Data berhasil dihapus');
        } catch (Exception $e) {
            return redirect()->route('produk.index')->with('error', 'Data gagal dihapus');
        }
    }
}
