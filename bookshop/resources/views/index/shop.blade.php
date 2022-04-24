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
        <li class="nav-item">
            <a class="nav-link h2 ml-5 text-white" href="#">تماس با ما</a>
        </li>
    </ul>
@endsection

@section('cart')
    <?php
    $count = sizeof([Session::get('cart')]); ?>
    <a href="/cart" class="cart-btn nav-icon "><i class="fas fa-cart-plus">
            <div class="cart-items">{{ $count }}</div>
        </i></a>
    @include('index.cart')
@endsection

@section('shop')
    <section class="featured" id="featured">
        <h1 class="heading"><span>فروشگاه</span></h1>
        <div class="col-md-12">
            <div class="shop-content mt-4">
                <div class="product-sort mb-4 d-flex w-100 align-items-center">
                    <div class="pe-3 border-end border-2 me-3">
                        <form action="">
                            <select name="" id="">
                                <option value="">مرتب سازی</option>

                                @if ($order_date)
                                    <option value="1">بر اساس تاریخ</option>
                                @endif
                                <option value="2">بر اساس بیشترین قیمت</option>
                                <option value="3">بر اساس کمترین قیمت</option>
                            </select>
                        </form>
                    </div>
                    <div class="set-product-show">
                        <span class="d-inline-block p-2"><i class="bi bi-grid-3x3-gap-fill"></i></span>
                        <span class="d-inline-block p-2"><i class="bi bi-grid-fill"></i></span>
                    </div>
                </div>
                <div class="row">
                    @foreach ($books as $book)
                        <div class="col-md-4 col-sm-6">
                            <div class="product-item bg-white mb-4 border p-1 position-relative">

                                <figure class="position-relative p-2 overflow-hidden mb-0 text-center">
                                    <img src="<?= Url('assets/img/imagebook/' . $book->img_book) ?>"
                                        alt="{{ $book->name_book }}" title="{{ $book->name_book }}">
                                    <figcaption class="access-figcaption position-absolute w-100 bottom-0 start-0 p-3">
                                        <ul class="p-0 m-0">
                                            <li><a href="#" class="mb-1" data-bs-toggle="tooltip"
                                                    data-bs-placement="right" title="مشاهده"><i
                                                        class="fas fa-search"></i></a></li>
                                            <li><a href="#" class="mb-1" data-bs-toggle="tooltip"
                                                    data-bs-placement="right" title="نشان کردن"><i
                                                        class="fas fa-heart"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="right"
                                                    title="مقایسه"><i class="fas fa-eye"></i></a></li>
                                        </ul>
                                    </figcaption>
                                </figure>
                                <div class="meta p-3">
                                    <h3 class="fs-12">{{ $book->name_book }}</h3>

                                    <div class="d-flex align-items-center">
                                        <div class="col">
                                            <span class="fs-12">{{ $book->price_book }} تومان</span>
                                        </div>
                                        <div class="col text-end">
                                            <div class="col text-end">
                                                <div class="stars fs-10 text-warning">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-to-cart position-relative w-100 pb-0 start-0 bottom-0 bg-white">
                                    <a href="<?= Url('book/' . $book->url_book) ?>"
                                        class="d-block w-100 py-2  text-center  fs-10 btn">مشاهده جزئیات <i
                                            class="bi bi-basket"></i></a>
                                    @if ($book->state_book == '1' || $book->state_book == '2')
                                        <div onclick="add_cart('{{ $book->id }}')"
                                            class="d-block w-100 py-2  text-center  fs-10 btn  disabled">ناموجود
                                        </div>
                                    @else
                                        <div onclick="add_cart('{{ $book->id }}')"
                                            class="d-block w-100 py-2  text-center  fs-10 btn">افزودن به سبد خرید</div>
                                    @endif


                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>

        </div>
    @section('numberpage')
        <div style="margin-right: 50%">
            {!! $books->render() !!}

        </div>
    @endsection

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
<script src="<?= Url('index/js/index.js') ?>"></script>
<script src="<?= Url('index/js/script_shop.js') ?>"></script>
@endsection


<?php
use App\SubjectsModel;
use App\BooksModel;

function getUnderTheMenu($id)
{
    $undermenu = SubjectsModel::where('replay_subjects', $id)->get();
    return $undermenu;
}
?>
