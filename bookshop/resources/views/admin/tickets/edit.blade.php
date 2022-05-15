@extends('layouts.adminLayouts')

@section('content')
    <div id="content">
        <div class="inner" style="min-height:700px;">
            <div class="col-lg-12">
                <div class="row">
                    <h1> پاسخ و تایید تیکت </h1>
                </div>
            </div>
            <hr />

            <div class="row" style="margin-top: 30px ;">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            پاسخ و تایید تیکت
                        </div>
                        <div class="panel-body">

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <tbody>
                                        <tr>

                                            <td> {{ $tick->id }} </td>
                                            <td> {{ $tick->fname }} </td>
                                            <td> {{ $tick->lname }} </td>
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

                                        </tr>

                                    </tbody>
                                </table>


                                <div style="margin-top: 90px;">
                                    {!! Form::open(['url' => 'admin/ticket/ansewer', 'class' => 'form-horizontal']) !!}
                                    <div class="form-group">
                                        {{ Form::label('answer', 'متن پاسخ', ['class' => 'control-label col-lg-3']) }}
                                        <div class="col-lg-7">
                                            {{ Form::textarea('answer', null, ['class' => 'form-control', 'placeholder' => 'پاسخ خود را برای این تیکت وارد نمایید.']) }}
                                        </div>
                                    </div>

                                    <input type="hidden" name="id_ticket" value="{{ $tick->id }}">


                                    <div class="form-actions" style="text-align:center;">
                                        {{ Form::submit('ثبت پاسخ', ['class' => 'btn btn-primary btn-lg']) }}
                                    </div>
                                    {!! Form::close() !!}
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
