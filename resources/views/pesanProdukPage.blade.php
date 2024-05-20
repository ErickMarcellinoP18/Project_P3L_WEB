<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produk</title>
    <link rel="icon" type="image/x-icon" href="images/logoP3L.png">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <link href="{{ asset('homeStyle.css') }}" rel="stylesheet">
</head>

<body>

    <!-- product -->
    <section class="product" id="product">
        <div class="section-padding"></div>
        <h1 class="heading">our <span>products</span></h1>
        <div class="box-container">
            @foreach ($produk as $item)
                @if ($item->tipe_produk === 'Asli')
                    <div class="box">
                        <div class="image">
                            <img src="{{ $item->gambar_produk }}" alt="Image of {{ $item->nama_produk }}" />
                        </div>
                        <div class="content">
                            <h3>{{ $item->nama_produk }}</h3>
                            @if (isset($item->resep))
                                <span class="quota" style="font-size: larger;">Kuota Harian: {{ $item->kuota }}</span>
                            @endif
                            <span class="stock" style="font-size: larger;">Stok Produk: {{ $item->jumlah_stok }}</span>
                            <br>
                            <span class="price">Rp. {{ $item->harga }}</span>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="section-padding"></div>
        <h1 class="heading">our <span>hampers</span></h1>
        <div class="box-container">
            @foreach ($hampers as $item)
                <div class="box">
                    <div class="image">
                        <img src="{{ $item->gambar_hampers }}" alt="Hampers" />
                    </div>
                    <div class="content">
                        <h3>{{ $item->nama_hampers }}</h3>
                        @foreach ($produk as $pro)
                            @if ($pro->id_hampers === $item->id_hampers)
                                <span class="produk" style="font-size: larger;">{{ $pro->nama_produk }}</span>
                            @endif
                        @endforeach
                        <br>
                        <span class="price">Rp. {{ $item->harga_hampers }}</span>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="section-padding"></div>
        <h1 class="heading">lain <span>- lain</span></h1>
        <div class="box-container">
            @foreach ($produk as $item)
                @if ($item->tipe_produk === 'Titipan')
                    @include('partials.productBox', ['item' => $item])
                @endif
            @endforeach
        </div>
    </section>

    <!-- footer -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>alamat</h3>
                <p>Jl. Centralpark No. 10 Yogyakarta</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f" aria-label="Facebook"></a>
                    <a href="#" class="fab fa-twitter" aria-label="Twitter"></a>
                    <a href="#" class="fab fa-instagram" aria-label="Instagram"></a>
                    <a href="#" class="fab fa-linkedin" aria-label="LinkedIn"></a>
                </div>
            </div>
            <div class="box">
                <h3>E-mail</h3>
                <a href="mailto:taidiklasik@gmail.com" class="link">taidiklasik@gmail.com</a>
                <a href="mailto:elluygabrielp@gmail.com" class="link">elluygabrielp@gmail.com</a>
            </div>
            <div class="box">
                <h3>call us</h3>
                <a href="tel:+6285171703304" class="link">+62 851 7170 3304</a>
                <a href="tel:+6281228332396" class="link">+62 812 2833 2396</a>
                <a href="tel:+6281240805617" class="link">+62 812 4080 5617</a>
            </div>
            <div class="box">
                <h3>opening hours</h3>
                <p>Senin - Jumat: 9:00 - 23:00 <br> Sabtu: 8:00 - 24:00</p>
            </div>
        </div>
        <div class="credit">created by <span>Atma Kitchen</span> all rights reserved!</div>
    </section>

    <!-- Scripts -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
    <script defer src="homeScript.js"></script>
    <script>
        lightGallery(document.querySelector('.gallery .gallery-container'));
    </script>
</body>

</html>
