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
        return view('produk.index', compact('produk'));
    }

    public function create()
    {
        return view('produk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'stok' => 'required',
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
        return view('produk.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);

        try {
            Produk::find($id)->update($request->all());
            return redirect()->route('produk.index')->with('success', 'Data berhasil diubah');
        } catch (Exception $e) {
            return redirect()->route('produk.index')->with('error', 'Data gagal diubah');
        }
    }

    public function delete($id)
    {
        try {
            Produk::find($id)->delete();
            return redirect()->route('produk.index')->with('success', 'Data berhasil dihapus');
        } catch (Exception $e) {
            return redirect()->route('produk.index')->with('error', 'Data gagal dihapus');
        }
    }

}
