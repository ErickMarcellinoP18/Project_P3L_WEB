<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Models\Produk;


class ProdukController extends Controller
{

    public function index()
    {
        $produk = Produk::all();
        return view('admin.produk.index', compact('produk'));
    }

    public function create()
    {

        return view('admin.produk.create');
    }

    public function createTitipan()
    {
        return view('admin.produk.createTitipan');
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
        return view('admin.produk.edit', compact('produk'));
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
            Produk::find($id)->update($request->all());
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
