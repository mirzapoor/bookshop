@extends('layouts.adminLayouts')

@section('content')
    <div id="content">
        <div class="inner" style="min-height:700px;">
            <div class="col-lg-12">
                <div class="row">
                    <h1> نمایش و مدیریت سفارشات کاربران </h1>
                </div>
            </div>
            <hr />

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            تمامی سفارشات موجود
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>کد پیگیری</th>
                                            <th>کد سفارش </th>
                                            <th>نام</th>
                                            <th>نام خانوادگی</th>
                                            <th> قیمت </th>
                                            <th> وضعیت </th>
                                            <th> عملیات </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sefr as $f)
                                            <tr>
                                                <td>{{ $f->codepaygiry_sefareshats }}</td>
                                                <td>{{ $f->codesefsresh_sefareshats }}</td>
                                                <td>{{ $f->name_sefareshats }}</td>
                                                <td>{{ $f->lname_sefareshats }}</td>
                                                <td>{{ $f->price }}</td>


                                                @if ($f->state == 0)
                                                    <td style="background-color: red;"> ثبت نهایی نشده </td>
                                                @elseif($f->state == 1)
                                                    <td style="background-color: green;"> سفارش جدید </td>
                                                @elseif($f->state == 2)
                                                    <td style="background-color: yellow;"> در حال بررسی </td>
                                                @elseif($f->state == 3)
                                                    <td style="background-color: orange;"> در مرحله آماده سازی </td>
                                                @elseif($f->state == 4)
                                                    <td style="background-color: #5986;"> ارسال شد </td>
                                                @else
                                                    <td style="background-color: #546E7A;"> نامعلوم </td>
                                                @endif

                                                <td><a href="<?= Url('admin/sefareshs/' . $f->id) ?>"
                                                        class="btn btn-primary btn-sm btn-line">نمایش</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        {!! $sefr->render() !!}

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
