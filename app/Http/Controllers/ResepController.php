<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Models\Resep;

class ResepController extends Controller
{
    public function index()
    {
        $resep = Resep::all();
        return view('resep.index', compact('resep'));
    }

    public function create()
    {
        return view('resep.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_menu' => 'required',
            'id_bahan_baku' => 'required',
            'jumlah' => 'required',
        ]);

        try {
            Resep::create($request->all());
            return redirect()->route('resep.index')->with('success', 'Data berhasil ditambahkan');
        } catch (Exception $e) {
            return redirect()->route('resep.index')->with('error', 'Data gagal ditambahkan');
        }
    }

    public function edit($id)
    {
        $resep = Resep::find($id);
        return view('resep.edit', compact('resep'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_menu' => 'required',
            'id_bahan_baku' => 'required',
            'jumlah' => 'required',
        ]);

        try {
            Resep::find($id)->update($request->all());
            return redirect()->route('resep.index')->with('success', 'Data berhasil diubah');
        } catch (Exception $e) {
            return redirect()->route('resep.index')->with('error', 'Data gagal diubah');
        }
    }

    public function delete($id)
    {
        try {
            Resep::find($id)->delete();
            return redirect()->route('resep.index')->with('success', 'Data berhasil dihapus');
        } catch (Exception $e) {
            return redirect()->route('resep.index')->with('error', 'Data gagal dihapus');
        }
    }
}
