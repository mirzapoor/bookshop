@extends('layouts.index.home')

@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="stylesheet" href="<?= Url('index/css/main.css') ?>">

    <link rel="stylesheet" href="<?= Url('index/css/style_cart.css') ?>">
    <link rel="stylesheet" href="<?= Url('index/css/style_shop.css') ?>">
@endsection
@section('addCart')
    @include('index.cart')
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
            <a class="nav-link h2 ml-5 text-white" href="/about">درباره ما</a>
        </li>


    </ul>
@endsection



{{-- slideshow --}}
@section('slideshow')
    @foreach (getbookstar() as $bookstar)
        <a href="<?= Url('book/' . $bookstar->url_book) ?>" class="swiper-slide mr-5 ml-4"><img
                src="<?= Url('assets/img/imagebook/' . $bookstar->img_book) ?>" alt="" /></a>
    @endforeach
@endsection


@section('contentstar')
    @foreach (getbookstar() as $bookstar)
        <div class="swiper-slide box">
            <div class="icons">
                <a href="#" class="fas fa-search"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <a href="<?= Url('book/' . $bookstar->url_book) ?>"> <img
                        src=" <?= Url('assets/img/imagebook/' . $bookstar->img_book) ?>" alt="{{ $bookstar->name_book }}"
                        title="{{ $bookstar->name_book }}" /></a>

            </div>
            <div class="content">
                <h4>{{ $bookstar->name_book }}</h4>
                <div class="price">هزارتومن{{ $bookstar->price_book }} <span> </span></div>
                <div onclick="add_cart('{{ $bookstar->id }}')" class="btn site-btn"> افزودن به سبد خرید</div>
            </div>
        </div>
    @endforeach
@endsection

@section('newcontent1')
    <div class="swiper-wrapper">

        @foreach ($newcontent as $new)
            <a href="<?= Url('book/' . $new->url_book) ?>" class="swiper-slide box">
                <div class="image">
                    <img src="<?= Url('assets/img/imagebook/' . $new->img_book) ?>" alt="{{ $new->name_book }}"
                        title="{{ $new->name_book }}" />
                </div>
                <div class="content">
                    <h3 class="mb-5">{{ $new->name_book }} </h3>
                    <div class="price">
                        هزارتومن{{ $new->price_book }} <span></span></div>

                    @if ($new->state_book == '1' || $new->state_book == '2')
                        <h1 style="color: red"> (ناموجود)
                        </h1>
                    @else
                        {{-- <h1 style="color: green"> (موجود) --}}
                    @endif
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection

@section('newcontent2')
    <div class="swiper-wrapper">

        @foreach ($newcontent2 as $new2)
            <a href="<?= Url('book/' . $new2->url_book) ?>" class="swiper-slide box">
                <div class="image">
                    <img src="<?= Url('assets/img/imagebook/' . $new2->img_book) ?>" alt="{{ $new2->name_book }}"
                        title="{{ $new2->name_book }}" />
                </div>
                <div class="content">
                    <h3 class="mb-5">{{ $new2->name_book }} </h3>
                    <div class="price">هزارتومن{{ $new2->price_book }} <span></span></div>
                    @if ($new2->state_book == '1' || $new2->state_book == '2')
                        <h1 style="color: red"> (ناموجود)
                        </h1>
                    @else
                        {{-- <h1 style="color: green"> (موجود) --}}
                    @endif

                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection


@section('favoriteBook')
    @foreach ($favoriteBook as $favorit)
        <div class="swiper-slide box">
            <div class="icons">
                <a href="#" class="fas fa-search"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <a href="<?= Url('book/' . $favorit->url_book) ?>"><img
                        src=" <?= Url('assets/img/imagebook/' . $favorit->img_book) ?>" alt="{{ $favorit->name_book }}"
                        title="{{ $favorit->name_book }}" /></a>

            </div>
            <div class="content">
                <h4>{{ $favorit->name_book }}</h4>
                <div class="price">هزارتومن{{ $favorit->price_book }} <span> </span></div>
                @if ($favorit->state_book == '1' || $favorit->state_book == '2')
                    <a href="#" class="btn btn-hover disabled" style="background-color: red">ناموجود</a>
                @else
                    <div onclick="add_cart('{{ $favorit->id }}')" class="btn site-btn">اضافه کردن به سبد خرید</div>
                @endif
            </div>
        </div>
    @endforeach
@endsection

@section('comments')
    @foreach ($comment as $comments)
        <div class="swiper-slide box">

            <img src="<?= Url('index/image/pic-2.png') ?>" alt="" />
            <h3>{{ $comments->name_comments }} {{ $comments->lname_comments }}</h3>
            <p>
                {{ $comments->content_comments }}
            </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
    @endforeach
@endsection

@section('footer')
    <?php $url = Url('/add'); ?>
    <script type="text/javascript">
        add_cart = function(id) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: '<?= $url ?>',
                type: "POST",
                data: 'id_book=' + id,
                success: function(data) {
                    $('#addCart').html(data);
                }
            });
        }
    </script>
    <?php $url10 = Url('/remove'); ?>
    <script type="text/javascript">
        delete_cart = function(id) {
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
                    $('#addCart').html(data);
                }
            });
        }
    </script>
    <?php $url11 = Url('/empty'); ?>
    <script type="text/javascript">
        empty_cart = function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: '<?= $url11 ?>',
                type: "POST",
                success: function(data) {
                    $('#addCart').html(data);
                }
            });
        }
    </script>
    <script type="text/javascript" src="<?= Url('index/js/jQuery.js') ?>"></script>

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
