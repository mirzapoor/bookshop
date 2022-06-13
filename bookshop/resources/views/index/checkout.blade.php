@extends('layouts.index.header')
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
            <a class="nav-link h2 ml-5 text-white" href="/about">درباره ما</a>
        </li>
    </ul>
@endsection
@section('addCart')
    @include('index.cart')
@endsection

@section('purchase')

    <?php
    use App\BooksModel;
    ?>
    <section class="featured" id="featured">
        <h1 class="heading"><span>سبد خرید</span></h1>
        <div class="cart-page">
            <div class="container-xl">
                <div class="row justify-content-center">
                    <br><br>

                    <div class="row">
                        <div class="col-md-12 mb-0 mb-md-5">
                            <div class="cart-content mb-4 mb-md-5">
                                <div class="table-responsive">
                                    <form action="">
                                        <table class="table table-bordered">
                                            <thead style="background-color: #219150">
                                                <tr class="align-middle  text-center">
                                                    <td>ردیف</td>
                                                    <td>نام محصول</td>
                                                    <td>تصویر</td>
                                                    <td style="width: 70px;">تعداد</td>
                                                    <td>قیمت</td>
                                                    <td>عملیات</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              
                                                @if (!empty(Session::get('cart')))
                                                   
                                               
                                                   
                    
                                                    <?php $price = 0; ?>
                                                    @foreach (Session::get('cart') as $key => $value)
                                                        <?php
                                                        $book = BooksModel::find($key);
                                                        ?>
                                                        <tr class="align-middle text-center">
                                                            <td colspan="1">{{ $key }}</td>
                                                            <td style="width: 50%">{{ $book->name_book }}</td>
                                                            <td><img src="<?= Url('assets/img/imagebook/' . $book->img_book) ?>"
                                                                    alt="{{ $book->name_book }}" class="mx-auto d-table"
                                                                    height="70"></td>
                                                            <td>{{ $value }}</td>
                                                            <td> {!! number_format($book->price_book * $value) !!}
                                                                <?php $price += $book->price_book * $value; ?></td>

                                                            <td>

                                                                <div onclick="delete_cart('{{ $book->id }}')"
                                                                    title="حذف یک کتاب از سبد خرید">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                        height="20" fill="currentColor"
                                                                        class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                                    </svg>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        @else
                                                        @endif
                                                <tr class="align-middle text-center">
                                                    <div class="position-relative">
                                                <tr class="align-middle h-40p border-bottom h3 text-center ">
                                                    <td colspan="10">جزئیات سبد شما</td>
                                                </tr>
                                                <tr class="align-middle h-40p text-center">
                                                    <td colspan="3">مجموع سبد</td>
                                                    <td colspan="3" class="fs-12 text-end">{!! number_format($price + 60000) !!} ریال</td>
                                                </tr>
                                                <tr class="align-middle h-40p text-center">
                                                    <td colspan="3">اقلام شما</td>
                                                    
                                                    <td colspan="3" class="fs-12 text-end">0</td>
                                                </tr>
                                                <tr class="align-middle h-40p text-center">
                                                    <td colspan="10"><a href="<?= Url('/checkout-step2') ?>"
                                                            class="btn site-btn  ">تسویه حساب</a>
                                                        <a href="/shop" class="btn site-btn">ادامه خرید</a>
                                                    </td>
                                                </tr>
                                </div>
                                </tr>
                                
                                </tbody>
                                </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
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

    <script src="<?= Url('index/js/scripts.js') ?>"></script>
    <script src="<?= Url('index/js/index.js') ?>"></script>
    <script src="<?= Url('index/js/script_shop.js') ?>"></script>
    <script type="text/javascript" src="<?= Url('index/js/jQuery.js') ?>"></script>
@endsection


<?php
use App\SubjectsModel;

function getUnderTheMenu($id)
{
    $undermenu = SubjectsModel::where('replay_subjects', $id)->get();
    return $undermenu;
}
?>
