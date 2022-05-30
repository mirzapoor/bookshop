<!DOCTYPE html>
<html dir="rtl" lang="fa">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>فروشگاه کتاب </title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
    <script type="text/javascript" src="<?= Url('index/js/') ?>"></script>
    @yield('head')
    <link rel="stylesheet" href="<?= Url('index/css/style.css') ?>" />
</head>

<body>
    <!-- header section starts  -->

    <header class="header">
        <div class="row">
            <div class="col-md-12">
                <div class="header-1" style="padding: 0px 5px">
                    <a href="/shop" class="logo"> <i class="fas fa-book"></i> کتابخانه </a>

                    <form action="<?= Url('/search') ?>" class="search-form" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="text" class="span1" name="search" id="navSearchInput">
                        <input type="search" name="search"placeholder="جستجو کنید" id="search-box" />
                        <button for="search-box" class="fas fa-search" style="background-color: white ; coloer:black"></button>
                       
                    </form>

                    <div class="icons">
                        <div id="search-btn" class="fas fa-search"></div>
                        <div id="login-btn" class="fas fa-user"><a href="{{ route('login') }}"></a></div>
                        <div class="headerLeft" id="addCart">

                            @yield('addCart')
                        </div>
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

        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            <h3>ورود</h3>
            {{ csrf_field() }}

            <span class="text-right">نام کاربری</span>
            <div>
                <input id="email" type="email" class="form-control box mt-4 " name="email" value="{{ old('email') }}"
                    placeholder="ایمیل خود را وارد کنید" />
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <span for="password" class="col-md-4 control-label text-right h4 ">رمز عبور</span>

                <div>
                    <input id="password" type="password" class="form-control box mt-4 " name="password"
                        placeholder="رمز عبور خود را وارد کنید">

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <div class="checkbox">
                        <label type="checkbox" for="remember-me">
                            <input type="checkbox" name="remember" id="remember-me"> مرا به خاطر
                            بسپار
                        </label>
                    </div>
                </div>
            </div>
            <a type="submit" href="<?= Url('/') ?>" class="btn">ورود</a>
            <p class="text-center"><a href="{{ url('/password/reset') }}"> رمز خود را فراموش کرده اید ؟ </a></p>
            <p class="text-right text-dark">عضو جدید:
            </p>
            <a href="{{ url('/register') }}" class="btn btn-success">ساخت حساب</a>
        </form>
    </div>

    <!-- home section starts  -->

    <section class="home " id="home">
        <div class="row">
            <div class="content">
                <h3>تا 50٪ تخفیف</h3>
                <p>در 1401 کتاب خوندان خودمون به چالش بکشیم!</p>
                <a href="<?= Url('/shop') ?>" class="btn">اکنون خرید کنید</a>
            </div>
            <div class="swiper books-slider">

                <div class="swiper-wrapper">
                    @yield('slideshow')
                </div>
                <img src="<?= Url('index/image/stand.png') ?>" class="stand mt-1" alt="" />
            </div>
        </div>
    </section>
    <section class="icons-container" style="padding: 20px 5px">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 mb-5">
                    <i class="fas fa-shipping-fast fa-10x text-success"></i>
                    <div class="content mt-5">
                        <h3 class="mb-4 text-secondary">ارسال رایگان</h3>
                        <p class="text-muted text-center">سفارش بالای 100 هزار تومان</p>
                    </div>
                </div>

                <div class="col-md-3 mb-5">
                    <i class="fas fa-lock fa-10x text-success"></i>
                    <div class="content mt-5">
                        <h3 class="mb-4 text-secondary">پرداخت امن</h3>
                        <p class="text-muted text-center">100 پرداخت مطمئن</p>
                    </div>
                </div>
                <div class="col-md-3 mb-5">
                    <i class="fas fa-redo-alt fa-10x text-success"></i>
                    <div class="content mt-5">
                        <h3 class="mb-4 text-secondary">بازگشت آسان</h3>
                        <p class="text-muted text-center">10 روز مهلت بازگشت</p>
                    </div>
                </div>
                <div class="col-md-3 mb-5">
                    <i class="fas fa-headset fa-10x text-success"></i>
                    <div class="content mt-5">
                        <h3 class="mb-4 text-secondary">پشتیبانی 7/24</h3>
                        <p class="text-muted text-center">در هر زمان با ما تماس بگیرید</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- icons section ends -->

    <!-- featured section starts  -->

    <section class="featured" id="featured" style="padding:20px 0px">
        <h1 class="heading"><span>کتابهای ویژه</span></h1>

        <div class="swiper featured-slider">
            <div class="swiper-wrapper">

                @yield('contentstar')

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </section>

    <!-- featured section ends -->

    <!-- newsletter section starts -->

    <section class="newsletter" style="padding:20px 0px">
        <form action="">
            <h3>اگر هنوز به جمع ما نیومدی بهتر همین الان به فکر بشی</h3>
            <input type="email" name="" placeholder="ایمیل خود را وارد کنید" id="" class="box" />
            <a type="submit" class="btn" href="<?= Url('/register') ?>">عضویت</a>
        </form>
    </section>

    <!-- newsletter section ends -->

    <!-- arrivals section starts  -->

    <section class="arrivals" id="arrivals" style="padding:30px 0px">
        <h1 class="heading"><span>کتابهای جدید</span></h1>
        <div class="swiper arrivals-slider">
            @yield('newcontent1')

        </div>
        <div class="swiper arrivals-slider">
            @yield('newcontent2')


        </div>
    </section>

    <!-- arrivals section ends -->

    <!-- deal section starts  -->

    <section class="deal" style="padding:20px 0px">
        <div class="content">
            <h3>معامله روز</h3>
            <h1>تا 50٪ تخفیف</h1>
            <p>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و
                سطرآنچنان که لازم است
            </p>
            <a href="<?= url('/shop') ?>" class="btn">اکنون خرید کنید</a>
        </div>

        <div class="image">
            <img src="<?= Url('index/image/deal-img.jpg') ?>" alt="" />
        </div>
    </section>

    <!-- deal section ends -->



    <section class="featured" id="featured" style="padding: 30px 0px">
        <h1 class="heading"><span>محبوب ترین کتاب ها</span></h1>
        <div class="swiper featured-slider">
            <div class="swiper-wrapper">
                @yield('favoriteBook')
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    </section>

    <section class="reviews" id="reviews" style="padding: 20px 0px">
        <h1 class="heading"><span> آخرین دیدگاه ها</span></h1>

        <div class="swiper reviews-slider">
            <div class="swiper-wrapper">
                @yield('comments')

            </div>
        </div>
    </section>
    <!-- footer section starts  -->

    <section class="footer text-center" style="padding: 0%">
        <hr>
        <div class="box-container">
            <div class="box text-right mr-5">
                <h3> لینک ها سریع</h3>
                <a href="/"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-house-door" viewBox="0 0 16 16">
                        <path
                            d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
                    </svg> خانه </a>
                <a href="/shop"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-shop-window" viewBox="0 0 16 16">
                        <path
                            d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zm2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5z" />
                    </svg> فروشگاه </a>
            </div>

            <div class="box text-right mr-5">
                <h3>حساب کاربری</h3>
                <a href="/login"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-person" viewBox="0 0 16 16">
                        <path
                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                    </svg> ورود</a>
                <a href="/register"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-person-plus" viewBox="0 0 16 16">
                        <path
                            d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                        <path fill-rule="evenodd"
                            d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                    </svg> ثبت نام</a>
                <a href="#">
                    <i class="fas fa-arrow-right"></i> اقلام سفارش داده شده
                </a>
            </div>
            <div class="box text-right mr-5">
                <h3> تماس با ما</h3>
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path
                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg> تهران </a>
                <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-telephone" viewBox="0 0 16 16">
                        <path
                            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                    </svg> پشتیبانی:25525825-021 </a>
                <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-phone" viewBox="0 0 16 16">
                        <path
                            d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                    </svg> 09192584715 </a>
                <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-envelope" viewBox="0 0 16 16">
                        <path
                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                    </svg>
                    bookshop@gmail.com </a>

            </div>

        </div>
        <hr>
        <div class="share" style="padding: 0%">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>


    </section>

    <!-- footer section ends -->

    <!-- loader  -->

    <div class="loader-container">
        <img src="<?= Url('index/image/loader-img.gif') ?>" alt="">
    </div>
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
    <script src="<?= Url('index/js/script.js') ?>"></script>

    @yield('footer')
    <!-- custom js file link  -->
</body>

</html>
