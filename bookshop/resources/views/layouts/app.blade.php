<!doctype html>
<html dir="rtl"  lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>فرم ورود و ثبت نام</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="<?= Url('index/css/main.css') ?>">
    <link rel="stylesheet" href="<?= Url('index/css/style_cart.css') ?>">
    <link rel="stylesheet" href="<?= Url('index/css/styles.css') ?>">
    <link rel="stylesheet" href="<?= Url('index/css/style_shop.css') ?>">
    <!-- Styles -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>فروشگاه کتاب </title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
    @yield('head')
    <link rel="stylesheet" href="<?= Url('index/css/style.css') ?>" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<header class="header">
    <div class="header-1">
        <a href="#" class="logo"> <i class="fas fa-book"></i> کتابخانه </a>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="جستجو کنید" id="search-box" />
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>

            <a href="#"><i class="fas fa-shopping-cart"></i></a>

            @yield('cart')

            <a href="{{ route('login') }}">
                <div id="" class="fas fa-user"></div>
            </a>
        </div>
    </div>

    <nav class="header-2 navbar navbar-expand-md h1">
        <div id="my-nav" class="collapse navbar-collapse justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link h2 ml-5 text-white" href="<?= Url('/') ?>">خانه</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link h2 ml-5 text-white" href="<?= Url('/shop') ?>">فروشگاه</a>
                </li>
                   
        
                <li class="nav-item">
                    <a class="nav-link h2 ml-5 text-white" href="#">درباره ما</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link h2 ml-5 text-white" href="#">تماس با ما</a>
                </li>
                @if (Auth::guest())
                <li class="nav-item">
                    <a class="nav-link h2 ml-5 text-white" href="{{ url('/login') }}">ورود</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link h2 ml-5 text-white" href="{{ url('/register') }}">ثبت نام</a>
                </li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li class="nav-item">
                            <a class="nav-link h2 ml-5 text-white" href="{{ url('/logout') }}"> <i class="fa fa-btn fa-sign-out"></i>خروج</a>
                        </li>
                        <li><a href="{{ url('/logout') }}"></a></li>
                    </ul>
                </li>
            @endif
               
           
            </div>
        </div>
    </nav>
</header>
<!-- header section ends -->
<!-- bottom navbar  -->
<nav class="bottom-navbar">
    <a href="#home" class="fas fa-home"></a>
    <a href="#featured" class="fas fa-list"></a>
    <a href="#arrivals" class="fas fa-tags"></a>
    <a href="#reviews" class="fas fa-comments"></a>
    <a href="#blogs" class="fas fa-blog"></a>
</nav>

<body>
    <div id="app-layout" style="direction: rtl;">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Branding Image -->
                </div>

            </div>
        </nav>

        @yield('content')

    </div>
    <section class="footer">
        <hr>
        <div class="box-container">

            <div class="box">
                <h3>دیگر شعبه ها</h3>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> تهران </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> مشهد </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> اصفهان </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> شیراز </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> تبریز </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> یزد </a>
            </div>

            <div class="box">
                <h3> لینک ها سریع</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> خانه </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> ویژه </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> محبوب ها </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> نظرات </a>
            </div>

            <div class="box">
                <h3>لینک</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> حساب کاربری </a>
                <a href="#">
                    <i class="fas fa-arrow-right"></i> اقلام سفارش داده شده
                </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> قوانین </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> روش پرداخت </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> دیگر سرویس ها </a>
            </div>


        </div>
        <hr>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>


    </section>

    <!-- footer section ends -->

    <!-- loader  -->

    {{-- <div class="loader-container">
        <img src="'index/image/loader-img.gif') ?>" alt="">
    </div> --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="<?= Url('index/js/script.js') ?>"></script>
</body>

</html>
