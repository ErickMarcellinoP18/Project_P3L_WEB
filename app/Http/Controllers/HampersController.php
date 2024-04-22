<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Models\Hampers;

class HampersController extends Controller
{
    public function index()
    {
        $hampers = Hampers::all();
        return view('hampers.index', compact('hampers'));
    }

    public function create()
    {
        return view('hampers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);

        try {
            Hampers::create($request->all());
            return redirect()->route('hampers.index')->with('success', 'Data berhasil ditambahkan');
        } catch (Exception $e) {
            return redirect()->route('hampers.index')->with('error', 'Data gagal ditambahkan');
        }
    }

    public function edit($id)
    {
        $hampers = Hampers::find($id);
        return view('hampers.edit', compact('hampers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);

        try {
            Hampers::find($id)->update($request->all());
            return redirect()->route('hampers.index')->with('success', 'Data berhasil diubah');
        } catch (Exception $e) {
            return redirect()->route('hampers.index')->with('error', 'Data gagal diubah');
        }
    }

    public function delete($id)
    {
        try {
            Hampers::find($id)->delete();
            return redirect()->route('hampers.index')->with('success', 'Data berhasil dihapus');
        } catch (Exception $e) {
            return redirect()->route('hampers.index')->with('error', 'Data gagal dihapus');
        }
    }
}
