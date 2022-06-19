@extends('layouts.adminLayouts')

@section('head')
    <link rel="stylesheet" href="<?= Url('assets/plugins/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css') ?>" />
@endsection

@section('content')
    <div id="content">
        <div class="inner" style="min-height:700px;">
            <div class="row" style="margin-top: 40px;">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            مشاهده تمامی اطلاعات سفارش
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">اطلاعات خریدار</a>
                                </li>
                                <li><a href="#profile" data-toggle="tab">محتوی سفارش</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home">
                                    <h4>مشخصات کامل خریدار</h4>
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <tbody>
                                            <tr>
                                                <td>کد پیگیری خریدار</td>
                                                <td> {{ $sefaresh->codepaygiry_sefareshats }} </td>
                                            </tr>
                                            <tr>
                                                <td>کد سفارش خریدار</td>
                                                <td>{{ $sefaresh->codesefsresh_sefareshats }}</td>
                                            </tr>
                                            <tr>
                                                <td>نام خریدار</td>
                                                <td>{{ $sefaresh->name_sefareshats }}</td>
                                            </tr>
                                            <tr>
                                                <td>نام خانوادگی خریدار</td>
                                                <td>{{ $sefaresh->lname_sefareshats }}</td>
                                            </tr>
                                            <tr>
                                                <td>شماره موبایل خریدار</td>
                                                <td>{{ $sefaresh->mobile_sefareshats }}</td>
                                            </tr>
                                            <tr>
                                                <td>تلفن ثابت خریدار</td>
                                                <td>{{ $sefaresh->phone_sefareshats }}</td>
                                            </tr>
                                            <tr>
                                                <td>ایمیل خریدار</td>
                                                <td>{{ $sefaresh->email_sefareshats }}</td>
                                            </tr>
                                            <tr>
                                                <td>وضعیت سفارش خریدار</td>

                                                @if ($sefaresh->state == 0)
                                                    <td style="background-color: red;"> ثبت نهایی نشده </td>
                                                @elseif($sefaresh->state == 1)
                                                    <td style="background-color: rgb(7, 54, 165);"> سفارش جدید </td>
                                                @elseif($sefaresh->state == 2)
                                                    <td style="background-color: yellow;"> در حال بررسی </td>
                                                @elseif($sefaresh->state == 3)
                                                    <td style="background-color: orange;"> در مرحله آماده سازی </td>
                                                @elseif($sefaresh->state == 4)
                                                    <td style="background-color: rgb(16, 186, 21);"> ارسال شد </td>
                                                @else
                                                    <td style="background-color: #546E7A;"> نامعلوم </td>
                                                @endif

                                            </tr>
                                            <tr>
                                                <td>قیمت کل خریدار</td>
                                                <td>{!! number_format($sefaresh->price) !!}</td>
                                            </tr>
                                            <tr>
                                                <td>آدرس خریدار</td>
                                                <td>{{ $sefaresh->address_sefareshats }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <div class="row">

                                        <?php
                                        $books = books($sefaresh->id);
                                        ?>

                                        @foreach ($books as $book)
                                            <div class="col-lg-3">
                                                <p  style="text-align:center">
                                                    <a  id="example8"
                                                   
                                                        href="<?= Url('assets/img/imagebook/'. imgbook($book->id_books)) ?>"
                                                        title="<?= titlebook($book->id_books) ?>({{ $book->count }})"><img
                                                            src="<?= Url('assets/img/imagebook/'. imgbook($book->id_books)) ?>"
                                                            alt="<?= titlebook($book->id_books) ?>" width="100" height="150" /></a>
                                                </p>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            تغییر وضعبت سفارش
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div class="row">
                                    <a href="<?= Url('admin/state/sefaresh/' . $sefaresh->id . '/2') ?>"
                                        class="btn btn-warning btn-line">در حال بررسی</a>
                                    <a href="<?= Url('admin/state/sefaresh/' . $sefaresh->id . '/3') ?>"
                                        class="btn btn-info btn-line">در مرحله آماده سازی</a>
                                    <a href="<?= Url('admin/state/sefaresh/' . $sefaresh->id . '/4') ?>"
                                        class="btn btn-success btn-line">ارسال شد</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        @endsection


        @section('script')
            <script src="<?= Url('assets/plugins/jquery.fancybox-1.3.4/jquery-1.4.3.min.js') ?>"></script>
            <script src="<?= Url('assets/plugins/jquery.fancybox-1.3.4/fancybox/jquery.mousewheel-3.0.4.pack.js') ?>"></script>
            <script src="<?= Url('assets/plugins/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.js') ?>"></script>
            <script src="<?= Url('assets/js/image_gallery.js') ?>"></script>
        @endsection

        <?php
        
        use App\ContentSefareshsModel;
        use App\BooksModel;
        
        function books($id)
        {
            $books = ContentSefareshsModel::where('id_sefareshats', $id)->get();
            return $books;
        }
        
        function imgbook($id)
        {
            $img = BooksModel::where('id', $id)->first()['img_book'];
            return $img;
        }
        
        function titlebook($id)
        {
            $title = BooksModel::where('id', $id)->first()['name_book'];
            return $title;
        }
        
        ?>
