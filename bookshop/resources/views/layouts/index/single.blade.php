<!DOCTYPE html>
<html dir="rtl" lang="fa">

<head>
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
    <link rel="stylesheet" href="<?= Url('index/css/bootstrap.rtl.min.css') ?>">
    <link rel="stylesheet" href="<?= Url('index/css/bootstrap-icons.css') ?>">
    <link rel="stylesheet" href="<?= Url('index/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= Url('index/css/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="<?= Url('index/css/jquery.fancybox.min.css') ?>">
    <link rel="stylesheet" href="<?= Url('index/css/main.css') ?>">
    <link rel="stylesheet" href="<?= Url('index/css/style_cart.css') ?>">
    <link rel="stylesheet" href="<?= Url('index/style.css') ?>">
    <link rel="stylesheet" href="<?= Url('index/css/style_shop.css') ?>">
    <link rel="stylesheet" href="<?= Url('index/css/styles.css') ?>">
    <link rel="stylesheet" href="<?= Url('index/css/style_rtl.css') ?>">
    <link rel="stylesheet" href="<?= Url('index/css/style.css') ?>" />
    <script type="text/javascript" src="<?= Url('index/js/jquery-3.6.0.min.js') ?>"></script>
</head>

<body>
    <!-- header section starts  -->

    <header class="header">
        <div class="header-1">
            <a href="#" class="logo"> <i class="fas fa-book"></i> کتابخانه </a>

            <form action="" class="search-form">
                <input style="margin-top: 6%" type="search" name="" placeholder="جستجو کنید" id="search-box" />
                <label style="margin-top: 10%" for="search-box" class="fas fa-search"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                {{-- <a href="#"><i class="fas fa-heart"></i></a> --}}

                @yield('cart')
            </div>
        </div>

        <nav class="header-2 navbar navbar-expand-md h1">
            <div id="my-nav" class="collapse navbar-collapse justify-content-center">
                @yield('menunavbar')
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




    <!-- login form  -->

    <div class="login-form-container">
        <div id="close-login-btn" class="fas fa-times"></div>

        <form action="">
            <h3>ورود</h3>
            <span class="text-right">نام کاربری</span>
            <input type="email" name="" class="box" placeholder="ایمیل خود را وارد کنید" id="" />
            <span class="text-right">رمز عبور</span>
            <input type="password" name="" class="box" placeholder="رمز عبور خود را وارد کنید" id="" />
            <div class="checkbox">
                <input type="checkbox" name="" id="remember-me" />
                <label for="remember-me"> به خاطر سپردن</label>
            </div>
            <button type="submit" href="<?= Url('/login') ?>" class="btn">ورود</button>
            <p class="text-center"><a href="#"> رمز خود را فراموش کرده اید ؟ </a></p>
            <p class="text-right text-dark">عضو جدید:
            </p>
            <button href="<?= Url('/register') ?>" class="btn btn-success">ساخت حساب</button>
        </form>
    </div>
    <div class="single-product-content my-4">
        <div class="container-xl">
            @yield('single')
        </div>
    </div>
    <section class="featured" id="featured">
        <h1 class="heading"><span>کتابهای ویژه</span></h1>

      

                @yield('contentbook')

            
    </section>
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
    <script src="<?= Url('index/js/jQuery.js') ?>"></script>
    <script src="<?= Url('index/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= Url('index/js/owl.carousel.min.js') ?>"></script>
    <script src="<?= Url('index/js/jquery.simple.timer.js') ?>"></script>
    <script src="<?= Url('index/js/jquery.elevatezoom.js') ?>"></script>
    <script src="<?= Url('index/js/jquery.fancybox.min.js') ?>"></script>
    <script src="<?= Url('index/js/index.js') ?>"></script>
    <!-- custom js file link  -->
    <script type="text/javascript" src="<?= Url('index/js/script.js') ?>"></script>
</body>

</html>
