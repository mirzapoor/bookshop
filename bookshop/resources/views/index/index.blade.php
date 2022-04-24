@extends('layouts.index.home')

@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="<?= Url('index/css/main.css') ?>">
    <link rel="stylesheet" href="<?= Url('index/css/style_cart.css') ?>">
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
        <li class="nav-item">
            <a class="nav-link h2 ml-5 text-white" href="#">تماس با ما</a>
        </li>
    </ul>
@endsection

@section('cart')
<?php
$count = sizeof([Session::get('cart')]); ?>
<a href="/cart" class="cart-btn nav-icon "><i class="fas fa-cart-plus">
        <div class="cart-items">{{ $count }}</div> </i></a>
    @include('index.cart')
@endsection 
{{-- slideshow --}}
@section('slideshow')
    @foreach (getbookstar() as $bookstar)
        <a href="#" class="swiper-slide mr-5 ml-4"><img src="<?= Url('assets/img/imagebook/' . $bookstar->img_book) ?>"
                alt="" /></a>
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
                <img src=" <?= Url('assets/img/imagebook/' . $bookstar->img_book) ?>" alt="{{ $bookstar->name_book }}"
                    title="{{ $bookstar->name_book }}" />
            </div>
            <div class="content">
                <h4>{{ $bookstar->name_book }}</h4>
                <div class="price">هزارتومن{{ $bookstar->price_book }} <span> </span></div>
                <div onclick="add_cart('{{ $bookstar->id }}')" class="btn"> افزودن به سبد خرید</div>
            </div>
        </div>
    @endforeach
@endsection

@section('newcontent1')
    <div class="swiper-wrapper">

        @foreach ($newcontent as $new)
            <a href="#" class="swiper-slide box">
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
            <a href="#" class="swiper-slide box">
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
                <img src=" <?= Url('assets/img/imagebook/' . $favorit->img_book) ?>" alt="{{ $favorit->name_book }}"
                    title="{{ $favorit->name_book }}" />
            </div>
            <div class="content">
                <h4>{{ $favorit->name_book }}</h4>
                <div class="price">هزارتومن{{ $favorit->price_book }} <span> </span></div>
                @if ($favorit->state_book == '1' || $favorit->state_book == '2')
                    <a href="#" class="btn btn-hover disabled" style="background-color: red">ناموجود</a>
                @else
                    <div onclick="add_cart('{{ $bookstar->id }}')" class="btn">اضافه کردن به سبد خرید</div>
                @endif
            </div>
        </div>
    @endforeach
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
