@extends('layouts.adminlayouts')

@section('content')
    <div id="content">
        <div class="inner" style="min-height:700px;">
            <div class="col-lg-12">
                <div class="row">
                    <h1> نمایش و مدیریت تیکت های کاربران </h1>
                </div>
            </div>
            <hr />

            <div class="row" style="margin-top: 30px ;">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            تیکت ها
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>کد تیکت</th>
                                            <th>محتوی تیکت</th>
                                            <th>وضعیت تیکت</th>
                                            <th>اولویت</th>
                                            <th> پاسخ تیکت </th>
                                            <th> عملیات </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($ticket as $tick)
                                            <tr>
                                                <td> {{ $tick->id }} </td>
                                                <td> {{ $tick->content }} </td>

                                                @if ($tick->state == 0)
                                                    <td style="background-color: orange;"> بررسی نشده است </td>
                                                @else
                                                    <td style="background-color: green;"> توسط مدیر بررسی شد </td>
                                                @endif

                                                <td>
                                                    <?php
                                                    if ($tick->olaviyat == 1) {
                                                        echo 'اولویت کم';
                                                    } elseif ($tick->olaviyat == 2) {
                                                        echo 'اولویت متوسط';
                                                    } elseif ($tick->olaviyat == 3) {
                                                        echo 'اولویت زیاد';
                                                    }
                                                    ?>
                                                </td>

                                                @if ($tick->ansewer == '-')
                                                    <td style="color: red;"> پاسخی داده نشده است </td>
                                                @else
                                                    <td> {{ $tick->ansewer }} </td>
                                                @endif

                                                <td>
                                                    <a href="<?= Url('admin/ticket/ansewer/' . $tick->id) ?>"
                                                        class="btn btn-primary btn-sm btn-line">پاسخ دادن</a>
                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <span style="text-align: center;">{!! $ticket->render() !!}</span>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
