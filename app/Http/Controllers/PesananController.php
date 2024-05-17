<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Models\Pesanan;
use App\Models\Detil_pesanan;
use App\Models\Detil_poin;
use App\Models\User;
use App\Models\Hampers;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;

class PesananController extends Controller
{
    public function index()
    {
        $pesanan = Pesanan::all();
        return view('notaPage', compact('pesanan'));
    }
    public function show($id)
    {

        $pesanan = Pesanan::find($id);
        $detilPesanan = Detil_pesanan::where('id_pesanan', $id)->get();
        $detilPoin = Detil_poin::where('id_pesanan', $id)->get();
        return view('notaPage', compact('pesanan', 'detilPesanan', 'detilPoin'));
    }

    public function pesanProduk($id)
    {

        $produk = Produk::all();
        $hampers = Hampers::all();

        $pesanan = Pesanan::find($id);
        $detilPesanan = Detil_pesanan::where('id_pesanan', $id)->get();
        return view('pesanProdukPage', compact('produk', 'hampers', 'pesanan', 'detilPesanan'));
    }


    public function create()
    {
        $user = User::all();
        return view('pesananPage', compact('user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'alamat' => 'required',
            'tanggal_ambil' => 'required',
            'jenis_delivery' => 'required',
            'poin_digunakan' => 'required|integer|min:0',
        ]);

        /** @var \App\User $user */
        $user = Auth::User();
        $userPoints = $user->poin;

        if ($request->poin_digunakan > $userPoints) {
            return redirect()->back()->with('error', 'Poin yang digunakan melebihi poin yang Anda miliki.');
        }

        try {

            $pesanan = Pesanan::create([
                'id_customer' => Auth::id(), // Menggunakan id dari user yang sedang login
                'status' => 'Selesai', // Mengatur status default sebagai "Panding"
                'tanggal_pesan' => now(), // Mengatur tanggal pesan saat ini
                'alamat' => $request->alamat,
                'tanggal_ambil' => $request->tanggal_ambil,
                'jenis_delivery' => $request->jenis_delivery,
                'poin_digunakan' => $request->poin_digunakan
            ]);

            return redirect()->route('pesanan.pesanProduk', $pesanan->id_pesanan)->with('success', 'Data berhasil ditambahkan');
        } catch (Exception $e) {
            return redirect()->route('pesanan.pesanProduk', $pesanan->id_pesanan)->with('error', 'Data gagal ditambahkan');
        }
    }

    public function calculatePoints($id)
    {
        // Fetch pesanan and user details
        $pesanan = Pesanan::find($id);
        $user = User::find($pesanan->id_customer);
        $detilPesanan = Detil_pesanan::where('id_pesanan', $id)->get();

        $totalHarga = 0;

        foreach ($detilPesanan as $detil) {
            $totalHarga += $detil->subtotal; // Calculate the total
        }
        $pesananDate = $pesanan->tanggal_pesan;
        $customerBirthday = $user->ulang_tahun;
        $points = 0;

        // Calculate points based on totalHarga
        if ($totalHarga >= 1000000) {
            $points += floor($totalHarga / 1000000) * 200;
            $totalHarga %= 1000000;
        }
        if ($totalHarga >= 500000) {
            $points += floor($totalHarga / 500000) * 75;
            $totalHarga %= 500000;
        }
        if ($totalHarga >= 100000) {
            $points += floor($totalHarga / 100000) * 15;
            $totalHarga %= 100000;
        }
        if ($totalHarga >= 10000) {
            $points += floor($totalHarga / 10000);
            $totalHarga %= 10000;
        }

        // Check if the pesanan date is within 3 days before or after the customer's birthday
        if ($this->isCustomerBirthday($customerBirthday, $pesananDate)) {
            $points *= 2;
        }
        // Update user points
        $user->poin -= $pesanan->poin_digunakan;
        $user->poin += $points;
        $user->save();

        try {
            $pesanan->poin_didapat = $points;
            $pesanan->save();

            return redirect()->route('pesanan.show', $pesanan->id_pesanan)->with('success', 'Poin berhasil ditambahkan');
        } catch (Exception $e) {
            // Handle the error here
            return redirect()->route('pesanan.show', $pesanan->id_pesanan)->with('error', 'Poin gagal ditambahkan');
        }
    }


    private function isCustomerBirthday($customerBirthday, $pesananDate)
    {
        // Convert string dates to DateTime objects
        $customerBirthday = new \DateTime($customerBirthday);
        $pesananDate = new \DateTime($pesananDate);

        // Calculate the difference in days between customer's birthday and pesanan date
        $diff = $customerBirthday->diff($pesananDate)->days;

        // Check if the pesanan date is within 3 days before or after the customer's birthday
        return abs($diff) <= 3;
    }

    public function uploadPage($id)
    {
        $pesanan = Pesanan::find($id);
        return view('customer.pembayaran.buktiUpload', compact('pesanan'));
    }

    public function uploadBukti(Request $request, $id_pesanan)
    {
        $request->validate([
            'bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $pesanan = Pesanan::find($id_pesanan);
        if (!$pesanan) {
            return redirect()->back()->with('error', 'Pesanan tidak ditemukan.');
        }

        $file = $request->file('bukti_pembayaran');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/bukti_pembayaran'), $filename);

        $pesanan->bukti_pembayaran = $filename;
        $pesanan->save();

        return redirect()->route('pesanan.show', $id_pesanan)->with('success', 'Bukti pembayaran berhasil diupload.');
    }

    // public function edit($id)
    // {
    //     $pesanan = Pesanan::find($id);
    //     return view('pesanan.edit', compact('pesanan'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'id_hampers' => 'required',
    //         'id_customer' => 'required',
    //         'id_penitip' => 'required',
    //         'id_alamat' => 'required',
    //         'jumlah' => 'required',
    //         'total_harga' => 'required',
    //         'status' => 'required',
    //     ]);

    //     try {
    //         Pesanan::find($id)->update($request->all());
    //         return redirect()->route('notaPage')->with('success', 'Data berhasil diubah');
    //     } catch (Exception $e) {
    //         return redirect()->route('notaPage')->with('error', 'Data gagal diubah');
    //     }
    // }

    // public function destroy($id)
    // {
    //     try {
    //         Pesanan::find($id)->delete();
    //         return redirect()->route('notaPage')->with('success', 'Data berhasil dihapus');
    //     } catch (Exception $e) {
    //         return redirect()->route('notaPage')->with('error', 'Data gagal dihapus');
    //     }
    // }

}
