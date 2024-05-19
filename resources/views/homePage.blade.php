<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atma Kithen</title>
    <link rel="icon" type="image/x-icon" href="images/logoP3L.png">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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

    <!-- home -->

    <section class="home" id="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background: url(images/slider1.jpg) no-repeat;">
                    <div class="content">
                        <h3>we bake the world a better place</h3>
                        <a href="#" class="btn"> get started </a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(images/slider2.jpg) no-repeat;">
                    <div class="content">
                        <h3>we bake the world a better place</h3>
                        <a href="#" class="btn"> get started </a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>

    <!-- home section ends -->

    <!-- banner -->

    <section class="banner">
        <img src="images/banner.png" alt="">
    </section>


    <!-- banner end-->

    <!-- about us -->

    <section class="about" id="about">

        <h1 class="heading"> <span>about</span> us </h1>

        <div class="row">

            <div class="image">
                <img src="images/about.png" alt="">
            </div>

            <div class="content">
                <h3>good things come to those <span>who bake </span> for others</h3>
                <p>Memakan kue adalah sebuah perjalanan rasa yang memanjakan lidah, Setiap gigitan membawa ke dalam dunia fantasi, Dimana rasa manis, gurih, dan lembut berdansa bersama.

Ketika kue menyentuh lidah, detik itu juga, Semesta seakan berhenti, dan waktu menjadi abadi, Rasa coklat yang lembut, krim yang manis, Semuanya berpadu sempurna, menciptakan simfoni di mulut.

Setiap lapisan kue membawa cerita, Cerita tentang cinta, kasih sayang, dan kebahagiaan, Oh, betapa indahnya kenikmatan memakan kue, Sebuah pengalaman yang selalu membuat kita ingin kembali lagi dan lagi.</p>
                <p>cake is a special food for us to enjoy life and make our life sweeter!</p>
                <a href="#" class="btn">read more</a>
            </div>

        </div>

    </section>


    <!-- about us end-->

    <!-- gallery -->

    <section class="gallery" id="gallery">

        <h1 class="heading">our <span> gallery</span></h1>

        <div class="gallery-container">

            <a href="images/gallery1.jpg" class="box">
                <img src="images/gallery1.jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

            <a href="images/gallery2.jpg" class="box">
                <img src="images/gallery2.jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

            <a href="images/gallery3.jpg" class="box">
                <img src="images/gallery3.jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

            <a href="images/gallery4.jpg" class="box">
                <img src="images/gallery4.jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

            <a href="images/gallery5.jpg" class="box">
                <img src="images/gallery5.jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

            <a href="images/gallery6.jpg" class="box">
                <img src="images/gallery6.jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

        </div>

    </section>

    <!-- gallery end -->

    <!-- weekly promotions -->

    <section class="promotion">

        <h1 class="heading">weekly <span>promotions</span></h1>

        <div class="box-container">

            <div class="box">
                <div class="content">
                    <h3>chocolate cake</h3>
                    <p>Bagai permata hitam yang berkilau, Dibungkus dalam balutan cinta dan kasih sayang, Membawa kebahagiaan di setiap gigitan.</p>
                </div>

                <img src="images/promotion1.png" alt="">
            </div>

            <div class="box">
                <img src="images/promotion2.png" alt="">
                <div class="content">
                    <h3>nut cake</h3>
                    <p>Sebuah simfoni rasa yang tak terlupakan, Coklat lembutmu berpadu dengan kacang yang renyah, Menciptakan harmoni dalam setiap gigitan.</p>
                </div>

            </div>

        </div>

    </section>

    <!-- weekly promotions ends -->

    <!-- parallax -->

    <section class="parallax" id="parallax">

        <h1 class="heading">range of <span>products</span></h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/parallax-1.png" alt="">
                </div>
                <div class="content">
                    <h3>bread</h3>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/parallax-2.png" alt="">
                </div>
                <div class="content">
                    <h3>cakes</h3>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/parallax-3.png" alt="">
                </div>
                <div class="content">
                    <h3>donuts</h3>
                </div>
            </div>

        </div>

    </section>

    <!-- parallax -->


    <!-- footer -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>alamat</h3>
                <p>Jl. Centralpark No. 10 Yogyakarta</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <h3>E-mail</h3>
                <a href="#" class="link">resibebekeke5@gmail.com</a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="homeScript.js"></script>

    <script>
        lightGallery(document.querySelector('.gallery .gallery-container'));
    </script>


</body>

</html>
