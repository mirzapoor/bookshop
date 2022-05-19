<?php
use Hekmatinasser\Verta\Verta;
$v = Verta::now(); //1396-02-02 15:32:08

?>

@extends('layouts.index.single')
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
            <a class="nav-link h2 ml-5 text-white" href="about">درباره ما</a>
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

@section('single')
    <section class="featured" id="featured">
        <h1 class="heading"><span>جزئیات محصول</span></h1>

        <div class="row align-items-center">
            <div class="col-md-5">
                <div class="excerpt py-4">

                    <h1>{{ $record->name_book }}</h1>
                    <span style="margin-bottom: 60% ;" class=" d-block text-right">{{ $record->price_book }} تومان</span>
                    <hr>
                    <p class="lh-lg fs-10">{{ $record->details_book }}
                    </p>
                    <div>
                        <form action="">
                            <div class="d-flex  border-bottom">
                                <div class="col-4 px-2">
                                    <div>
                                        <input type="number" value="1" min="1" max="5">
                                    </div>
                                </div>
                                <div class="col-8 px-2">
                                    <div class="single-product-add-to-cart ">
                                        <button type="submit" style="background-color: green ;">افزودن به سبد خرید <i
                                                class="fas fa-cart-plus"></i></button>
                                    </div>
                                </div>
                            </div>


                        </form>
                    </div>
                    <div class="text-right">
                        <li class="fs-10 my-2"><span class="d-inline-block text-dark opacity-75">شابک : </span>
                            {{ $record->shabook_book }}
                        </li>
                        <li class="fs-10 my-2"><span class="d-inline-block text-dark opacity-75">دسته : </span>
                            {!! namecategory($record->id_subjects) !!}
                        </li>

                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="gallery">
                    <figure class="m-0 p-1 w-100 border">
                        <img src="<?= Url('assets/img/imagebook/' . $record->img_book) ?>" alt="{{ $record->name_book }}"
                            class="mx-auto d-table" width="300" height="500">
                    </figure>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="single-product-main-content mt-4  ">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">توضیحات</button>
                            <button class="nav-link" id="nav-product-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-product" type="button" role="tab" aria-controls="nav-product"
                                aria-selected="false">جزئیات</button>
                            <button class="nav-link" id="nav-product-review-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-product-review" type="button" role="tab"
                                aria-controls="nav-product-review" aria-selected="false">دیدگاه ها</button>
                        </div>
                    </nav>
                    <div class="tab-content py-4 px-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                            {{ $record->details_book }}
                            <div class="accordion-group accordion-style-2">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" href="#collapse6">
                                        <span class="bg-for-icon"><i class="icon-minus"></i><i
                                                class="icon-plus"></i></span>
                                        این کتاب در چه چاپ خانه ای به چاپ رسیده است؟
                                    </a>
                                </div>
                                <div id="collapse6" class="accordion-body collapse">
                                    <div class="accordion-inner">

                                        <?php
                                        $chap = chap($record->id_chapkhonehs);
                                        ?>
                                        <h4><span class="light"> {{ $chap->name_chapkhonehs }} </span></h4>

                                        <p>
                                            {{ $chap->details_chapkhonehs }}
                                        </p>

                                        <hr />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-product" role="tabpanel" aria-labelledby="nav-product-tab">
                            <div class="accordion-group accordion-style-2">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" href="#collapseTwo">
                                        <span class="bg-for-icon"><i class="icon-minus"></i><i
                                                class="icon-plus"></i></span>
                                        نمایش نویسندگان کتاب
                                    </a>
                                </div>
                                <div id="collapseTwo" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <table class="table table-theme table-striped">
                                            <thead>
                                                <tr>
                                                    <th style="color: black">نام نویسنده</th>
                                                    <th style="color: black">نام خانوادگی نویسنده</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($moalefs as $moalef)
                                                    <tr>
                                                        <td>{!! namemoalef($moalef->id_moalef) !!}</td>
                                                        <td>{!! lnamemoalef($moalef->id_moalef) !!}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-group accordion-style-2">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" href="#collapseThree">
                                        <span class="bg-for-icon"><i class="icon-minus"></i><i
                                                class="icon-plus"></i></span>
                                        نمایش مترجمین کتاب
                                    </a>
                                </div>
                                <div id="collapseThree" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <table class="table table-theme table-striped">
                                            <thead>
                                                <tr>
                                                    <th style="color: black">نام مترجم</th>
                                                    <th style="color: black">نام خانوادگی مترجم</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($motarjems as $motarjem)
                                                    <tr>
                                                        <td>{!! namemotarjem($motarjem->id_motarjems) !!}</td>
                                                        <td>{!! lnamemotarjem($motarjem->id_motarjems) !!}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-group accordion-style-2">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" href="#collapse4">
                                        <span class="bg-for-icon"><i class="icon-minus"></i><i
                                                class="icon-plus"></i></span>
                                        نمایش مراکز پخش کتاب
                                    </a>
                                </div>
                                <div id="collapse4" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <table class="table table-theme table-striped">
                                            <thead>
                                                <tr>
                                                    <th style="color: black">نام مرکز پخش</th>
                                                    <th style="color: black">تلفن مرکز پخش</th>
                                                    <th style="color: black"> آدرس مرکز پخش </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($pakhshs as $pakhsh)
                                                    <tr>
                                                        <td>{!! namepakhsh($pakhsh->id_pakhsh) !!}</td>
                                                        <td>{!! phonepakhsh($pakhsh->id_pakhsh) !!}</td>
                                                        <td>{!! addresspakhsh($pakhsh->id_pakhsh) !!}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-group accordion-style-2">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" href="#collapse8">
                                        <span class="bg-for-icon"><i class="icon-minus"></i><i
                                                class="icon-plus"></i></span>
                                        مشخصات نوبت چاپ
                                    </a>
                                </div>
                                <div id="collapse8" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <table class="table table-theme table-striped">
                                            <thead>
                                                <tr>
                                                    <th>نوبت چاپ</th>
                                                    <th>فصل چاپ</th>
                                                    <th>سال چاپ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> {{ $countprint->count_countprints }} </td>
                                                    <td> {{ $countprint->fasle_countprints }} </td>
                                                    <td> {{ $countprint->year_countprints }} </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <br />

                        </div>
                        <div class="tab-pane fade" id="nav-product-review" role="tabpanel"
                            aria-labelledby="nav-product-review-tab">
                            <h4 class="fs-12 m-0 p-0 mb-3">نظرات کاربران</h4>
                            <span class="d-inline-block border px-3 py-2 fs-10">
                                <i class="bi bi-chat-right"></i>&nbsp;دیدگاه و امتیاز شما چیست ؟
                            </span>
                            <span class="d-inline-block px-2 py-2 fs-10">
                                <h3 class="push-down-25"><span class="light">{!! countcomment($record->id) !!}</span> نظر
                                </h3>
                            </span>
                            <span class="d-inline-block px-2 py-2 fs-10 border-start"> 4.5 امتیاز</span>

                            <div class="review-form">
                                <form id="commentform" method="post" action="<?= Url('/comment') ?>"
                                    class="form form-inline form-comments">

                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="id_books" value="{{ $record->id }}">
                                    {{-- <div class="rating-box">
                                        <input type="radio" name="rate" id="1" value="1">
                                        <label for="1"></label>
                                        <input type="radio" name="rate" id="2" value="2">
                                        <label for="2"></label>
                                        <input type="radio" name="rate" id="3" value="3">
                                        <label for="3"></label>
                                        <input type="radio" name="rate" id="4" value="4">
                                        <label for="4"></label>
                                        <input type="radio" name="rate" id="5" value="5">
                                        <label for="5"></label>
                                    </div> --}}
                                    <div class="row">
                                        <div class="col-sm-6 col-12 pe-sm-0">
                                            <div>
                                                <label for="name_comments">نام<span class="red-clr bold">*</span></label>
                                                <input type="text" aria-required="true" tabindex="1" size="30"
                                                    id="name_comments" name="name_comments" required>

                                                <label for="lname_comments">نام خانوادگی</label>
                                                <input type="text" tabindex="2" size="30" id="lname_comments"
                                                    name="lname_comments">

                                                <label for="email_comments">ایمیل<span
                                                        class="red-clr bold">*</span></label>
                                                <input type="email" aria-required="true" tabindex="3" size="30"
                                                    id="email_comments" name="email_comments" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12 ps-sm-2">
                                            <div>
                                                <textarea class="input-block-level" tabindex="4" rows="7" cols="70" id="content_comments" name="content_comments"
                                                    placeholder="نظرتان را در اینجا بنویسید ..." required></textarea>
                                                <div class="text-end">
                                                    <button type="submit">اشتراک دیدگاه</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            @foreach ($comments as $comment)
                                <div class="child-item ms-0 ms-md-4 border p-3 mb-3 position-relative">
                                    <div class="meta d-flex align-items-center">
                                        <div class="me-3">
                                            <img src="" alt="">
                                        </div>
                                        <div>
                                            <span class="d-block fs-12 mb-3">{{ $comment->name_comments }}</span>
                                            <span class="d-block fs-10"><a href="#"
                                                    class="text-info border-start ps-3 ms-3"><svg
                                                        style="font-size: 16px;color: black;"
                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                                    </svg>
                                                    <?php echo $v; ?></a></span>
                                        </div>
                                    </div>
                                    <p class="m-0 mt-3 lh-lg fs-12"> {{ $comment->content_comments }}

                                    </p>
                                </div>
                                @foreach ($recomments as $recomment)
                                    <div class="child-item ms-0 ms-md-4 border p-3 mb-3 position-relative">
                                        <div class="rating-numer position-absolute end-0 top-0 px-2 pt-3 fs-12">
                                            {{ $recomment->name_comments }}<i
                                                class="bi bi-star text-warning"></i>&nbsp;4
                                        </div>
                                        <div class="meta d-flex align-items-center">
                                            <div class="me-3">
                                                <img src="" alt="">
                                            </div>
                                        </div>
                                        <p class="m-0 mt-3 lh-lg fs-12">
                                            {{ $recomment->content_comments }}
                                        </p>
                                    </div>
                                @endforeach
                                <!--  ==========  -->
                                <!--  = Single Nested Comment - one level =  -->
                                <!--  ==========  -->
                            @endforeach
                            <hr />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('contentbook')
    <div class="swiper featured-slider">
        <div class="swiper-wrapper">
            @foreach (getbookstar() as $bookstar)
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src=" <?= Url('assets/img/imagebook/' . $bookstar->img_book) ?>"
                            alt="{{ $bookstar->name_book }}" title="{{ $bookstar->name_book }}" />
                    </div>
                    <div class="content">
                        <h4 style=" ">{{ $bookstar->name_book }}</h4>
                        <div class="price">هزارتومن{{ $bookstar->price_book }} <span> </span></div>
                        <div onclick="add_cart('{{ $bookstar->id }}')" class="btn border-success size-lg text-center " > افزودن به سبد
                            خرید</div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
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
    <script src="<?= Url('index/js/app.js') ?>"></script>
    <script src="<?= Url('index/js/index.js') ?>"></script>
    <script src="<?= Url('index/js/scripts.js') ?>"></script>

    <script src="<?= Url('index/js/script_shop.js') ?>"></script>
@endsection

<?php
use App\SubjectsModel;
use App\BooksModel;
use App\ChaphkonehsModel;
use App\WritersModel;
use App\CommentsModel;
use App\MotarjemsModel;
use App\PakhshModel;

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

// function replaycomments($id)
// {
//     $recomments = CommentsModel::where(['replaye_comments' => $id, 'state' => 1])->get();
//     return $recomments;
// }

function namepakhsh($id)
{
    $name = PakhshModel::where('id', $id)->first()['name_pakhsh'];
    return $name;
}

function phonepakhsh($id)
{
    $name = PakhshModel::where('id', $id)->first()['phone_pakhsh'];
    return $name;
}

function addresspakhsh($id)
{
    $name = PakhshModel::where('id', $id)->first()['address_pakhsh'];
    return $name;
}

function namemoalef($id)
{
    $name = WritersModel::where('id', $id)->first()['name_writers'];
    return $name;
}

function lnamemoalef($id)
{
    $name = WritersModel::where('id', $id)->first()['lname_writers'];
    return $name;
}

function namemotarjem($id)
{
    $name = MotarjemsModel::where('id', $id)->first()['name_motarjems'];
    return $name;
}

function lnamemotarjem($id)
{
    $name = MotarjemsModel::where('id', $id)->first()['lname_motarjems'];
    return $name;
}

function countcomment($id)
{
    $count = CommentsModel::where(['id_books' => $id, 'state' => 1])->count();
    return $count;
}
function nameuser($id)
{
    $name = User::where('id', $id)->first()['fname'];
    return $name;
}

function namecategory($id)
{
    $name = SubjectsModel::where('id', $id)->first()['name_subjects'];
    return $name;
}

function chap($id)
{
    $name = ChaphkonehsModel::find($id);
    return $name;
}

?>
