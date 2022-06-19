@extends('layouts.index.shop')
@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="<?= Url('index/css/main.css') ?>">
    <link rel="stylesheet" href="<?= Url('index/css/style_cart.css') ?>">
    <link rel="stylesheet" href="<?= Url('index/css/styles.css') ?>">
    <link rel="stylesheet" href="<?= Url('index/css/style_shop.css') ?>">
@endsection

@section('menunavbar')
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link h2 ml-5 text-white" href="<?= Url('/') ?>">خانه</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link h2 ml-5 text-white" href="<?= Url('/shop') ?>">فروشگاه</a>
        </li>
        @foreach ($category as $categorys)
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle h2 ml-5 text-white" data-toggle="dropdown"
                    href="<?= Url('category/' . $categorys->name_subjects) ?>">{{ $categorys->name_subjects }}</a>
                <div class="dropdown-menu">
                    @foreach (getUnderTheMenu($categorys->id) as $undermenu)
                        <a class="dropdown-item h4"
                            href="<?= Url('categorys/' . $undermenu->name_subjects) ?>">{{ $undermenu->name_subjects }}</a>
                    @endforeach

            </li>
        @endforeach

        <li class="nav-item">
            <a class="nav-link h2 ml-5 text-white" href="#">درباره ما</a>
        </li>
      
    </ul>
@endsection

@section('addCart')
    @include('index.cart')
@endsection

@section('shop')
    <section class="featured" id="featured">
        <h1 class="heading"><span>درباره ما</span></h1>
        <div class="col-md-12">
            <div class="continer" style="background-color: rgb(246, 241, 241) ;border-radius:10px ">
                <div class="row">
                    <h1 class="mt-3 ml-5 mr-5" style="color: rgb(33, 32, 32)">درباره کتاب فروشی ما</h1>
                    <div class="m-5" style="color: rgb(33, 32, 32)">
                        <p>
                            وقتی وارد یک فروشگاه کتاب می‌شوی، حس خوبی به آدم دست می‌دهد. این ‌که کتاب را برمی‌داری و چند
                            برگی از
                            آن را ورق میزنی، شوق کتاب‌خوانی در وجودت اوج می گیرد. راستش، همین که بوی کتاب نو به مشام می‌رسد،
                            آدم
                            هوس کتاب می‌کند و دوست دارد بیشتر و بیشتر کتاب بخواند.

                            در فروشگاه‌های مجازی، این حس و حال کمتر به چشم می‌خورد و آدم آن نزدیکی واقعی با کتاب را ندارد.
                            اما
                            فروشگاه ما هم حرف‌هایی برای گفتن دارد. اگرچه در فروشگاه اینترنتی شهر کتاب، خبری از بوی کتاب
                            نیست،
                            اما جایی است که برای تجربه‌ی یک خرید خوب می‌شود روی آن حساب کرد.

                            در فرصت‌های اندک میان هیاهوی روزانه، زمانی که می‌شود استراحت کوتاهی کرد، یک فنجان چای نوشید و به
                            موسیقی دلخواه خود گوش کرد. زمانیست که می‌شود در فضای مجازی گشتی زد، اخبار روز را مرور کرد و بر
                            روی
                            عکس‌ها و حرف‌های دوستان نظر داد. زمانیست که می‌توان وارد این فروشگاه شد، کتابی سفارش داد و در
                            فاصله‌ای کوتاه آن را تحویل گرفت. حال دیگر این نوای موسیقی و عطر چای شماست که به فروشگاه کتاب ما
                            حال
                            و هوایی دیگر می‌دهد.
                        </p>
                        <p>بسیار خرسندیم که میزبان شما در کتاب فروشی آنلاین هستیم.
                        </p>
                        <p>کتاب فروشی آنلاین، تنها شعبه مجازی فروشگاه‌های زنجیره‌ای شهرکتاب است.</p>

                        <p> امکان خرید اینترنتی کالاهای فرهنگی از طریق سایت شهرکتاب آنلاین در طبقه بندی زیر فراهم است:</p>

                        <p><a href="/shop" style="color: rgb(33, 32, 32)"> کتاب</a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    <?php $url10 = Url('/cart'); ?>
    <script type="text/javascript">
        add_cart = function(id) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '<?= $url10 ?>',
                type: "POST",
                data: 'id_book=' + id,
                success: function(data) {
                    alert(data);
                }
            });
        }
    </script>
    <script src="<?= Url('index/js/scripts.js') ?>"></script>
@endsection


<?php
use App\SubjectsModel;
use App\BooksModel;

function getUnderTheMenu($id)
{
    $undermenu = SubjectsModel::where('replay_subjects', $id)->get();
    return $undermenu;
}

function getbookstar()
{
    $bookstar = BooksModel::where('state_book', '3')
        ->orderby('id', 'desc')
        ->take(8)
        ->get();
    return $bookstar;
}

?>
