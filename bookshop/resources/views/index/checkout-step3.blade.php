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

<!--  ==========  -->
<!--  = Header =  -->
<!--  ==========  -->
<header>
    <div class="row">
       
        <div class="span6">
            <div class="center-align">
                <h1><span class="light">تایید</span> نهایی</h1>
            </div>
        </div>
        <div class="span2">
            <div class="right-align">
                <img src="<?= Url('themes/1/images/buttons/security.jpg'); ?>" alt="امنیت خرید" width="92" height="65" />
            </div>
        </div>
    </div>
</header>

<!--  ==========  -->
<!--  = Steps =  -->
<!--  ==========  -->
<!--  ==========  -->

<div class="checkout-steps">
    <div class="clearfix">
        <div class="step done">
            <div class="step-badge"><i class="icon-ok"></i></div>
            <a href="<?= Url('checkout'); ?>">سبد خريد</a>
        </div>
        <div class="step done">
            <div class="step-badge"><i class="icon-ok"></i></div>
            <a href="<?= Url('checkout-step2'); ?>">آدرس ارسال</a>
        </div>

        <div class="step active">
            <div class="step-badge">4</div>
            تایید نهایی
        </div>
    </div>
</div> <!-- /steps -->

<!--  ==========  -->
<!--  = Selected Items =  -->
<!--  ==========  -->
<table class="table table-items">
    <tbody>
        <tr>
            <td>کد سفارش</td>
            <td> {{ $sef->codesefsresh_sefareshats }} </td>
        </tr>
        <tr>
            <td>کد پیگیری سفارش</td>
            <td> {{ $sef->codepaygiry_sefareshats }} </td>
        </tr>
        <tr>
            <td>آدرس ارسالی</td>
            <td>{{ $sef->address_sefareshats }}</td>
        </tr>
    </tbody>
</table> 

<p class="right-align">
    <a href="<?= Url('/success/sefaresh/'.$sef->id); ?>" class="btn btn-primary higher bold">تاييد نهایی و پرداخت </a>
</p>

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
