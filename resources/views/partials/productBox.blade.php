<!-- resources/views/partials/productBox.blade.php -->
<div class="box">
    <div class="image">
        <img src="{{ $item->gambar_produk }}" alt="Image of {{ $item->nama_produk }}" />
    </div>
    <div class="content">
        <h3>{{ $item->nama_produk }}</h3>
        @if (isset($item->resep))
            <span class="quota" style="font-size: larger;">Kuota Harian: {{ $item->resep->kuota_harian }}</span>
        @endif
        <span class="stock" style="font-size: larger;">Stok Produk: {{ $item->jumlah_stok }}</span>
        <br>
        <span class="price">Rp. {{ $item->harga }}</span>
    </div>
</div>
