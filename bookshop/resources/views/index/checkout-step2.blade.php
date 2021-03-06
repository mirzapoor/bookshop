@extends('layouts.index.header')
@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="<?= Url('index/css/main.css') ?>">
    <link rel="stylesheet" href="<?= Url('index/css/style_cart.css') ?>">
    <link rel="stylesheet" href="<?= Url('index/css/styles.css') ?>">
    <link rel="stylesheet" href="<?= Url('index/css/bootstrap.rtl.min.css') ?>">
    <link rel="stylesheet" href="<?= Url('index/css/bootstrap-icons.css') ?>">

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
    <section class="featured" id="featured">
        <h1 class="heading"><span>اطلاعات خرید</span></h1>
        <form action="<?= Url('/checkout') ?>" method="post" class="form-horizontal form-checkout text-right">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="row my-5 align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="purchase-box border py-3 px-3 px-md-5">
                        <span class="d-block pb-3 fs-12 mb-3 border-bottom"><i
                                class="bi bi-layout-sidebar-inset-reverse"></i>&nbsp;اطلاعات کلی خرید</span>
                        <label for="name_sefareshats">نام شما ... *</label>
                        <input type="text" id="name_sefareshats" name="name_sefareshats">
                        <label for="lname_sefareshats">نام خانوادگی شما ... *</label>
                        <input type="text" id="lname_sefareshats" name="lname_sefareshats">
                        <label for="email_sefareshats">ایمیل ... *</label>
                        <input type="email" id="email_sefareshats" name="email_sefareshats">

                        <div class="d-flex">
                            <div class="col">
                                <label for="mobile_sefareshats">شماره همراه ... *</label>
                                <input type="tel" id="mobile_sefareshats" name="mobile_sefareshats"  placeholder="09155845714">
                            </div>
                            <div class="col">
                                <label for="phone_sefareshats">کد پستی ... *</label>
                                <input type="text" id="phone_sefareshats" name="phone_sefareshats"
                                    placeholder="الگو : 12345-67890">
                            </div>
                        </div>
                        <label for="address_sefareshats">آدرس ... *</label>
                        <textarea id="address_sefareshats" name="address_sefareshats"></textarea>
                    </div>
                </div>
                <div class="col-md-6 mb-5 mb-md-0">
                    <div class="purchase-box border py-3 px-3 px-md-5">
                        {{-- <span class="d-block pb-3 fs-12 mb-3 border-bottom"><i
                            class="bi bi-layout-sidebar-inset"></i>&nbsp;پرداخت نهایی</span>
                    <label for="textarea_2">توضیحات سفارش ... </label>
                    <textarea id="textarea_2"></textarea>
                    <table class="table table-bordered mb-2">
                        <tr class="align-middle text-center">
                            <td>
                                <div class="form-check">
                                    <input type="radio" name="purchase_radio" id="purchase_radio_1"
                                        class="form-check-input">
                                    <label for="purchase_radio_1" class="form-check-label"><i
                                            class="bi bi-credit-card-2-front"></i>&nbsp;پرداخت آنلاین</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input type="radio" name="purchase_radio" id="purchase_radio_2"
                                        class="form-check-input">
                                    <label for="purchase_radio_2" class="form-check-label"><i
                                            class="bi bi-truck"></i>&nbsp;پرداخت محل</label>
                                </div>
                            </td>
                            <td>مجموع : 2.370.000 تومان</td>
                        </tr>
                    </table> --}}
                        <div class="bg-light p-2">
                            <p class="p-0 m-0 fs-10 lh-lg" style="text-align: justify;">
                                قوانین عمومی:
کلیه اصول و رویه‏‌های این وبسایت  منطبق با قوانین جمهوری اسلامی ایران، قانون تجارت الکترونیک و قانون حمایت از حقوق مصرف کننده است و متعاقبا کاربر نیز موظف به رعایت قوانین مرتبط با کاربر است. در صورتی که در قوانین مندرج، رویه‏‌ها و خدمات وبسایت تغییراتی ایجاد شود، در همین صفحه منتشر و به روز رسانی خواهد شد و شما توافق می‏‌کنید که استفاده مستمر شما از سایت به معنی پذیرش هرگونه تغییر است.

تعریف مشتری یا کاربر:
مشتری یا کاربر به شخصی گفته می‌شود که با اطلاعات کاربری خود که در فرم ثبت نام درج کرده است، به ثبت سفارش یا هرگونه استفاده از خدمات وبسایت   -که به صورت خاص تهیه کتاب و محتوای علمی آموزشی این موسسه فرهنگی است- اقدام نماید.
                            </p>
                            <div class="form-check">
                                <input type="checkbox" id="purchase_checkbox" class="form-check-input">
                                <label for="purchase_checkbox" class="form-check-label">&nbsp;قبول قوانین</label>
                            </div>
                        </div>
                        <div class="text-end mt-1">
                            <button type="submit" name="BtnSave" class="btn site-btn" style="height: 50px">پرداخت آنلاین</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
use App\BooksModel;

function getUnderTheMenu($id)
{
    $undermenu = SubjectsModel::where('replay_subjects', $id)->get();
    return $undermenu;
}
?>
