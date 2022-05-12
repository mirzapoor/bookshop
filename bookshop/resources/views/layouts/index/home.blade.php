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
    <link rel="stylesheet" href="<?= Url('index/css/style.css') ?>" />
</head>

<body>
    <!-- header section starts  -->

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
                {{-- @if(Route::has('login'))

                @auth
                    <a href="{{ url('/') }}"></a>
                @else --}}
                 <a href="{{ route('login') }}"><div id="" class="fas fa-user"></div></a>
                  {{--  @if (Route::has('register'))
                <a href="{{ route('register') }}"><div  class="fas fa-user-plus"></a>
                    
                @endif
                @endauth
                @endif --}}

                

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

        @yield('login')
    </div>
    <!-- home section starts  -->
    <section class="home " id="home">
        <div class="row">
            <div class="content">
                <h3>تا 50٪ تخفیف</h3>
                <p>در 1401 کتاب خوندان خودمون به چالش بکشیم!</p>
                <a href="#" class="btn">اکنون خرید کنید</a>
            </div>
            <div class="swiper books-slider">

                <div class="swiper-wrapper">
                    @yield('slideshow')
                </div>
                <img src="<?= Url('index/image/stand.png'); ?>" class="stand mt-1" alt="" />
            </div>
        </div>
    </section>
    <section class="icons-container">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 mb-5">
                    <i class="fas fa-shipping-fast fa-10x text-success"></i>
                    <div class="content mt-5">
                        <h3 class="mb-4 text-secondary">ارسال رایگان</h3>
                        <p class="text-muted">سفارش بالای 100 هزار تومان</p>
                    </div>
                </div>
                <div class="col-md-3 mb-5">
                    <i class="fas fa-lock fa-10x text-success"></i>
                    <div class="content mt-5">
                        <h3 class="mb-4 text-secondary">پرداخت امن</h3>
                        <p class="text-muted">100 پرداخت مطمئن</p>
                    </div>
                </div>
                <div class="col-md-3 mb-5">
                    <i class="fas fa-redo-alt fa-10x text-success"></i>
                    <div class="content mt-5">
                        <h3 class="mb-4 text-secondary">بازگشت آسان</h3>
                        <p class="text-muted">10 روز مهلت بازگشت</p>
                    </div>
                </div>
                <div class="col-md-3 mb-5">
                    <i class="fas fa-headset fa-10x text-success"></i>
                    <div class="content mt-5">
                        <h3 class="mb-4 text-secondary">پشتیبانی 7/24</h3>
                        <p class="text-muted">در هر زمان با ما تماس بگیرید</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- icons section ends -->
    <!-- featured section starts  -->
    <section class="featured" id="featured">
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
    <section class="newsletter">
        <form action="">
            <h3>اگر هنوز به جمع ما نیومدی بهتر همین الان به فکر بشی</h3>
            <input type="email" name="" placeholder="ایمیل خود را وارد کنید" id="" class="box" />
            <input type="submit" value="عضویت" class="btn" />
        </form>
    </section>
    <!-- newsletter section ends -->
    <!-- arrivals section starts  -->
    <section class="arrivals" id="arrivals">
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

    <section class="deal">
        <div class="content">
            <h3>معامله روز</h3>
            <h1>تا 50٪ تخفیف</h1>
            <p>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و
                سطرآنچنان که لازم است
            </p>
            <a href="#" class="btn">اکنون خرید کنید</a>
        </div>

        <div class="image">
            <img src="<?= Url('index/image/deal-img.jpg') ?>" alt="" />
        </div>
    </section>

    <!-- deal section ends -->



    <section class="featured" id="featured">
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

    <section class="reviews" id="reviews">
        <h1 class="heading"><span> آخرین دیدگاه ها</span></h1>

        <div class="swiper reviews-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="<?= Url('index/image/pic-1.png') ?>" alt="" />
                    <h3>نام مشتری</h3>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                        استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در
                        ستون و سطرآنچنان که لازم است
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="<?= Url('index/image/pic-2.png') ?>" alt="" />
                    <h3>نام مشتری</h3>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                        استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در
                        ستون و سطرآنچنان که لازم است
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="<?= Url('index/image/pic-3.png') ?>" alt="" />
                    <h3>نام مشتری</h3>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                        استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در
                        ستون و سطرآنچنان که لازم است
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="<?= Url('index/image/pic-4.png') ?>" alt="" />
                    <h3>نام مشتری</h3>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                        استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در
                        ستون و سطرآنچنان که لازم است
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="<?= Url('index/image/pic-5.png') ?>" alt="" />
                    <h3>نام مشتری</h3>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                        استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در
                        ستون و سطرآنچنان که لازم است
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="<?= Url('index/image/pic-6.png') ?>" alt="" />
                    <h3>نام مشتری</h3>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                        استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در
                        ستون و سطرآنچنان که لازم است
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer section starts  -->

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