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
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

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

        $user = Auth::user();
        $userPoints = $user->poin;

        if ($request->poin_digunakan > $userPoints) {
            return redirect()->back()->with('error', 'Poin yang digunakan melebihi poin yang Anda miliki.');
        }

        // Example products data (you should replace it with your actual data)
        $products = [
            [
                'id_produk' => 1,
                'kuantitas' => 2,
            ],
            // Add more products as needed
        ];

        // Begin transaction
        DB::beginTransaction();

        try {
            $pesanan = Pesanan::create([
                'id_customer' => Auth::id(),
                'status' => 'Panding',
                'tanggal_pesan' => now(),
                'alamat' => $request->alamat,
                'tanggal_ambil' => $request->tanggal_ambil,
                'jenis_delivery' => $request->jenis_delivery,
                'poin_digunakan' => $request->poin_digunakan,
            ]);

            foreach ($products as $productData) {
                $product = Produk::find($productData['id_produk']);
                $quantityNeeded = $productData['kuantitas'];

                if ($product->jumlah_stok >= $quantityNeeded) {
                    // Reduce stock if sufficient
                    $product->jumlah_stok -= $quantityNeeded;
                    $quantityNeeded = 0;
                } else {
                    // Reduce stock by available amount and calculate remaining quantity needed
                    $quantityNeeded -= $product->jumlah_stok;
                    $product->jumlah_stok = 0;
                }

                if ($quantityNeeded > 0) {
                    // Reduce quota by the remaining quantity needed
                    $product->kuota -= $quantityNeeded;
                }

                $product->save();

                Detil_pesanan::create([
                    'id_pesanan' => $pesanan->id_pesanan,
                    'id_produk' => $productData['id_produk'],
                    'kuantitas' => $productData['kuantitas'],
                    'harga_produk' => $product->harga,
                    'subtotal' => $product->harga * $productData['kuantitas'],
                ]);
            }

            // Calculate points
            $this->calculatePoints($pesanan->id_pesanan);

            DB::commit();

            return redirect()->route('pesanan.pesanProduk', $pesanan->id_pesanan)->with('success', 'Data berhasil ditambahkan');
        } catch (Exception $e) {
            DB::rollBack();
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
            return redirect()->route('pesanan.pesanProduk', $pesanan->id_pesanan)->with('error', 'Poin gagal ditambahkan');
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

    public function toInputJarakIndex()
    {

        $pesanan = Pesanan::join('customer', 'pesanan.id_customer', '=', 'customer.id_customer')
            ->select('pesanan.*', 'customer.nama_customer')
            ->where('pesanan.status', 'menunggu konfirmasi')
            ->where('pesanan.jarak', 0)
            ->where('pesanan.jenis_delivery', 'Antar')
            ->get();

        return view('admin.inputJarakPesanan.index', compact('pesanan'));
    }

    public function editjarak($id)
    {
        $pesanan = Pesanan::find($id);
        return view('admin.inputJarakPesanan.edit', compact('pesanan'));
    }

    public function updateJarak($id, Request $request)
    {
        $request->validate([
            'jarak' => 'required'
        ]);

        try {
            $pesanan = Pesanan::find($id);

            $pesanan->jarak = $request->jarak;

            if ($request->jarak <= 5) {
                $pesanan->total_biaya += 10000;
                $pesanan->ongkir = 10000;
            } else if ($request->jarak > 5 && $request->jarak <= 10) {
                $pesanan->total_biaya += 15000;
                $pesanan->ongkir = 15000;
            } else if ($request->jarak > 10 && $request->jarak <= 15) {
                $pesanan->total_biaya += 20000;
                $pesanan->ongkir = 20000;
            } else if ($request->jarak > 15) {
                $pesanan->total_biaya += 25000;
                $pesanan->ongkir = 25000;
            }

            $pesanan->save();


            return redirect()->route('inputJarakPesanan.index')->with('success', ['Biaya Pesanan' => $pesanan->total_biaya, 'Ongkir' => $pesanan->ongkir]);
        } catch (Exception $e) {
            return redirect()->route('inputJarakPesanan.index')->with('error', 'Data gagal diubah');
        }
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
