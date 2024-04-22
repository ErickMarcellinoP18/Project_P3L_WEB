<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Models\Jabatan;

class JabatanController extends Controller
{
    public function index()
    {
        $jabatan = Jabatan::all();
        return view('jabatan.index', compact('jabatan'));
    }

    public function create()
    {
        return view('jabatan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_jabatan' => 'required',
        ]);

        try {
            Jabatan::create($request->all());
            return redirect()->route('jabatan.index')->with('success', 'Data berhasil ditambahkan');
        } catch (Exception $e) {
            return redirect()->route('jabatan.index')->with('error', 'Data gagal ditambahkan');
        }
    }

    public function edit($id)
    {
        $jabatan = Jabatan::find($id);
        return view('jabatan.edit', compact('jabatan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_jabatan' => 'required',
        ]);

        try {
            Jabatan::find($id)->update($request->all());
            return redirect()->route('jabatan.index')->with('success', 'Data berhasil diubah');
        } catch (Exception $e) {
            return redirect()->route('jabatan.index')->with('error', 'Data gagal diubah');
        }
    }

    public function delete($id)
    {
        try {
            Jabatan::find($id)->delete();
            return redirect()->route('jabatan.index')->with('success', 'Data berhasil dihapus');
        } catch (Exception $e) {
            return redirect()->route('jabatan.index')->with('error', 'Data gagal dihapus');
        }
    }
}
