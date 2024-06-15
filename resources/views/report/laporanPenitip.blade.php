<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atma Kitchen - Laporan Rekap Transaksi Penitip</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h2, h3, p {
            margin: 0;
        }
        p {
            margin-bottom: 10px;
        }
        h3 {
            text-decoration: underline;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Atma Kitchen</h2>
        <p>Jl. Centralpark No. 10 Yogyakarta</p>
        <h3>LAPORAN REKAP TRANSAKSI PENITIP</h3>
        <p>Tanggal cetak: {{ $date }}</p>
        <p>Nama Penitip: {{$bulan}}</p>
        
        <table>
            <thead>
                <tr>
                    <th>Nama Penitip</th>
                    <th>ID Penitip</th>
                    <th>Tanggal</th>
                    <th>Produk</th>
                    <th>Qty</th>
                    <th>Harga Produk</th>
                    <th>Total</th>
                    <th>Komisi</th>
                    <th>Yang Diterima</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($penitip as $item)
                    <tr>
                        <td>{{ $item->produk->penitip->nama_penitip }}</td>
                        <td>{{ $item->produk->penitip->id_penitip }}</td>
                        <td>{{ $item->pesanan->tanggal_lunas }}</td>
                        <td>{{ $item->produk->nama_produk }}</td>
                        <td>{{ $item->kuantitas }}</td>
                        <td class="text-right">{{ number_format($item->harga_produk, 0, ',', '.') }}</td>
                        <td class="text-right">{{ number_format($item->pembayaran, 0, ',', '.') }}</td>
                        <td class="text-right">{{ number_format($item->pembayaran * 0.2, 0, ',', '.') }}</td>
                        <td class="text-right">{{ number_format($item->pembayaran * 0.8, 0, ',', '.') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="alert alert-danger">Data tidak ditemukan</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
