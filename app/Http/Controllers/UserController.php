<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Models\User;
use App\Models\Pesanan;

class UserController extends Controller
{
    public function adminindex()
    {
        
        $pesanan = Pesanan::join('users', 'users.id', '=', 'pesanan.user_id')
            ->select('users.*', 'pesanan.*')
            ->get();
        
        return view('admin.user.index', compact('pesanan'));
    }

    // public function create()
    // {
    //     return view('admin.user.create');
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'password' => 'required',
    //         'email' => 'required',
    //         'saldo' => 'required',
    //         'verify_key' => 'required'
    //     ]);

    //     try {
    //         User::create($request->all());
    //         return redirect()->route('user.index')->with('success', 'Data berhasil ditambahkan');
    //     } catch (Exception $e) {
    //         return redirect()->route('user.index')->with('error', 'Data gagal ditambahkan');
    //     }
    // }

    public function adminsearch($tekscari)
    {
        $user = User::where('name', 'like', "%$tekscari%")->get();
        return view('admin.user.index', compact('user'));
    }
    

    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'password' => 'required',
    //         'email' => 'required',
    //         'saldo' => 'required',
    //         'verify_key' => 'required'
    //     ]);

    //     try {
    //         User::find($id)->update($request->all());
    //         return redirect()->route('user.index')->with('success', 'Data berhasil diubah');
    //     } catch (Exception $e) {
    //         return redirect()->route('user.index')->with('error', 'Data gagal diubah');
    //     }
    // }

    // public function destroy($id)
    // {
    //     try {
    //         User::find($id)->delete();
    //         return redirect()->route('user.index')->with('success', 'Data berhasil dihapus');
    //     } catch (Exception $e) {
    //         return redirect()->route('user.index')->with('error', 'Data gagal dihapus');
    //     }
    // }
}
