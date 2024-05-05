<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Models\Karyawan;



class KaryawanController extends Controller
{
    //
    public function index()
    {
        $karyawan = Karyawan::all();
        return view('mo.karyawan.index', compact('karyawan'));
    }

    public function create()
    {   
        return view('mo.karyawan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_karyawan' => 'required',
            'password' => 'required',
            'honor_harian' => 'required',
            'jabatan' => 'required'
        ]);
        

        
            Karyawan::create($request->all());
            return redirect()->route('karyawan.index')->with('success', 'Data berhasil ditambahkan');
       
    }

    

    public function edit($id)
    {
        $karyawan = Karyawan::find($id);
        return view('mo.karyawan.edit', compact('karyawan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_karyawan' => 'required',
            'password' => 'required',
            'honor_harian' => 'required',
            'jabatan' => 'required',
        ]);

        try {
            Karyawan::find($id)->update($request->all());
            return redirect()->route('karyawan.index')->with('success', 'Data berhasil diubah');
        } catch (Exception $e) {
            return redirect()->route('karyawan.index')->with('error', 'Data gagal diubah');
        }
    }

    public function destroy($id)
    {
        try {
            Karyawan::find($id)->delete();
            return redirect()->route('karyawan.index')->with('success', 'Data berhasil dihapus');
        } catch (Exception $e) {
            return redirect()->route('karyawan.index')->with('error', 'Data gagal dihapus');
        }
    }
}
