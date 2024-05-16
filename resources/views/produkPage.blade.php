<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produk</title>
    <link rel="icon" type="image/x-icon" href="images/logoP3L.png">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

    <link rel="stylesheet" href="homeStyle.css">
</head>

<body>

    <!-- header -->

    <header class="header">
        <img class= "logo"src="{{ asset('images/logoP3L.png') }}" alt="Logo P3L" style="height: 50px; width: 50px;">

        <nav class="navbar">
            <a href="/#home" class="nav-link">home</a>
            <a href="/#about" class="nav-link">about</a>
            <a href="/produkHome" class="nav-link">produk</a>
            <a href="/#gallery" class="nav-link">foto</a>
            @if (Auth::check())
                <a href="{{ route('pesanan.create') }}" class="nav-link">order</a>
            @endif
        </nav>

        <div class="icons">

            @if (Auth::check())
                <div id="cart-btn" class="fas fa-shopping-cart"></div>
                <div id="profile-btn" onclick="window.location.href='{{ route('user.userProfile') }}'"
                    class="fas fa-user"></div>
            @endif
            @if (Auth::check())
                <div id="logout-btn" onclick="window.location.href='<?php echo route('actionLogout'); ?>'" class="fas fa-sign-out-alt">
                </div>
            @else
                <div id="login-btn" onclick="window.location.href='{{ url('login') }}'" class="fas fa-sign-in-alt">
                </div>
            @endif
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
    </header>

    <!-- header end -->

    <!-- shopping cart -->

    <div class="cart-items-container">

        <div id="close-form" class="fas fa-times"></div>
        <h3 class="title">checkout</h3>

        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-1.jpg" alt="">
            <div class="content">
                <h3>bakery item 1</h3>
                <div class="Harga">Rp.150.000/-</div>
            </div>
        </div>

        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-2.jpg" alt="">
            <div class="content">
                <h3>bakery item 2</h3>
                <div class="price">Rp.15.999/-</div>
            </div>
        </div>

        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-3.jpg" alt="">
            <div class="content">
                <h3>bakery item 3</h3>
                <div class="price">Rp.29.999/-</div>
            </div>
        </div>

        <a href="#" class="btn"> checkout </a>

    </div>

    <!-- shopping cart end-->

    <!-- product -->

    <section class="product" id="product">

        <div style="margin-top: 90px;"></div>
        <h1 class="heading">our <span> products</span></h1>

        <div class="box-container">

            @foreach ($produk as $item)
                @if ($item->tipe_produk === 'Asli')
                    <div class="box">
                        <div class="image">
                            <img src="{{ $item->gambar_produk }}" alt="Product" />
                        </div>
                        <div class="content">
                            <h3>{{ $item->nama_produk }}</h3>
                            <span class="quota" style="font-size: larger;">Kuota Harian:
                                {{ $item->resep->kuota_harian }}</span>
                            <span class="stock" style="font-size: larger;">Stok Produk: {{ $item->jumlah_stok }}</span>
                            <br>
                            <span class="price">Rp. {{ $item->harga }}</span>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <div style="margin-top: 90px;"></div>
        <h1 class="heading">our <span> hampers</span></h1>
        <div class="box-container">

            @foreach ($hampers as $item)
                <div class="box">
                    <div class="image">
                        <img src="{{ $item->gambar_hampers }}" alt="Hampers" />
                    </div>
                    <div class="content">
                        <h3>{{ $item->nama_hampers }}</h3>
                        <span class="price">Rp. {{ $item->harga_hampers }}</span>
                    </div>
                </div>
            @endforeach
        </div>

        <div style="margin-top: 90px;"></div>
        <h1 class="heading">lain <span>- lain</span></h1>
        <div class="box-container">

            @foreach ($produk as $item)
                @if ($item->tipe_produk === 'Titipan')
                    <div class="box">
                        <div class="image">
                            <img src="{{ $item->gambar_produk }}" alt="Product" />
                        </div>
                        <div class="content">
                            <h3>{{ $item->nama_produk }}</h3>
                            <span class="stock">Stok Produk: {{ $item->jumlah_stok }}</span>
                            <br>
                            <span class="price">Rp. {{ $item->harga }}</span>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

    </section>

    <!-- product end-->

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
                <a href="#" class="link">taidiklasik@gmail.com</a>
                <a href="#" class="link">elluygabrielp@gmail.com</a>
            </div>

            <div class="box">
                <h3>call us</h3>
                <p>+62 851 7170 3304</p>
                <p>+62 812 2833 2396</p>
                <p>+62 812 4080 5617</p>
            </div>

            <div class="box">
                <h3> opening hours</h3>
                <p>Senin - Jumat: 9:00 - 23:00 <br> Sabtu: 8:00 - 24:00 </p>
            </div>

        </div>

        <div class="credit">created by <span>Atma Kitchen</span> all rights reserved! </div>

    </section>

    <!-- footer ends -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

    <script src="homeScript.js"></script>

    <script>
        lightGallery(document.querySelector('.gallery .gallery-container'));
    </script>
</body>

</html>
