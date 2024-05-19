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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="homeStyle.css">
    <style>
        .product {
            padding: 20px;
        }

        .box:hover {
            transform: translateY(-10px);
        }

        .box img {
            width: 100%;
            object-fit: cover;
        }

        .box .content {
            padding: 15px;
            text-align: center;
        }

        .box .content h3 {
            margin: 10px 0;
        }

        .box .content .price {
            color: #e74c3c;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <!-- header -->
    <header class="header">
        <img class="logo" src="{{ asset('images/logoP3L.png') }}" alt="Logo P3L">
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
                <div id="logout-btn" onclick="window.location.href='{{ route('actionLogout') }}'"
                    class="fas fa-sign-out-alt"></div>
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
                <div class="price">Rp.150.000/-</div>
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
    <!-- shopping cart end -->

    <!-- product -->
    <section class="product" id="product">
        <div style="margin-top: 90px;"></div>
        <h1 class="heading">our <span>products</span></h1>
        <div class="box-container">
            @foreach ($produk as $item)
                @if ($item->tipe_produk === 'Asli')
                    <a href="{{ route('produkHome.show', $item->id_produk) }}" class="text-decoration-none">
                        @include('partials.productBox', ['item' => $item])
                    </a>
                @endif
            @endforeach
        </div>
        <div style="margin-top: 90px;"></div>
        <h1 class="heading">our <span>hampers</span></h1>
        <div class="box-container">
            @foreach ($hampers as $item)
                <div class="box">
                    <a href="{{ route('produkHome.edit', $item->id_hampers) }}" class="text-decoration-none">
                        <div class="image">
                            <img src="{{ $item->gambar_hampers }}" alt="Hampers" />
                        </div>
                        <div class="content">
                            <h3>{{ $item->nama_hampers }}</h3>
                            @foreach ($produk as $pro)
                                @if ($pro->id_hampers === $item->id_hampers)
                                    <span class="stars" style="font-size: larger;">{{ $pro->nama_produk }}, </span>
                                @endif
                            @endforeach
                            <br>
                            <span class="price">Rp. {{ $item->harga_hampers }},-</span>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div style="margin-top: 90px;"></div>
        <h1 class="heading">lain <span>- lain</span></h1>
        <div class="box-container">
            @foreach ($produk as $item)
                @if ($item->tipe_produk === 'Titipan')
                    <a href="{{ route('produkHome.show', $item->id_produk) }}" class="text-decoration-none">
                        @include('partials.productBox', ['item' => $item])
                    </a>
                @endif
            @endforeach
        </div>
    </section>
    <!-- product end -->

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script defer src="homeScript.js"></script>
    <script>
        lightGallery(document.querySelector('.gallery .gallery-container'));
    </script>
</body>

</html>
