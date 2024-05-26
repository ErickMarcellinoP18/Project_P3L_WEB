<?php

namespace App\Http\Controllers;

use App\Models\Bahan_baku;
use App\Models\Detil_pesanan;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class LaporanController extends Controller
{
    public function stokBahan()
    {
        // Set locale to Indonesian
        Carbon::setLocale('id');

        // Prepare data for the view
        $data = [
            'title' => 'Laporan Stok Bahan Baku',
            'date' => Carbon::now()->translatedFormat('j F Y'), // Use translated format for date
            'bahan' => Bahan_baku::all()
        ];

        // Generate PDF
        $pdf = Pdf::loadView('report.laporanStokBahan', $data);

        // Return PDF stream
        return $pdf->stream('Laporan Stok Bahan Baku.pdf');
    }

    public function penjualanProduk(Request $request)
    {
        // Set locale to Indonesian
        Carbon::setLocale('id');

        // Get the month from the request
        $bulan = $request->input('bulan');

        // Convert the month to a more usable format
        $monthYear = Carbon::parse($bulan)->format('Y-m');

        // Fetch data based on the selected month
        $detail_pesanan = Detil_pesanan::whereHas('pesanan', function ($query) use ($monthYear) {
            $query->whereYear('tanggal_lunas', Carbon::parse($monthYear)->year)
                ->whereMonth('tanggal_lunas', Carbon::parse($monthYear)->month)
                ->where('status', 'Pesanan Diterima');
        })->get();

        // Calculate total sales
        $total = $detail_pesanan->sum(function ($item) {
            return $item->kuantitas * $item->harga_produk;
        });

        // Prepare data for the view
        $data = [
            'title' => 'Laporan Penjualan Produk',
            'date' => Carbon::now()->translatedFormat('j F Y'), // Use translated format for date
            'bulan' => Carbon::parse($bulan)->translatedFormat('F'), // Translate month name
            'tahun' => Carbon::parse($bulan)->year,
            'detail_pesanan' => $detail_pesanan,
            'total' => $total
        ];

        // Generate PDF
        $pdf = Pdf::loadView('report.laporanPenjualanProduk', $data);

        // Return PDF stream
        return $pdf->stream('Laporan Penjualan Produk.pdf');
    }
}
