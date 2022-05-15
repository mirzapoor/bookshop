@extends('layouts.adminlayouts')
@section('head')
    <link rel="stylesheet" href="<?= Url('assets/css/bootstrap-fileupload.min.css') ?>">
@endsection
@section('content')
    <div id="content">
        <div class="inner" style="min-height:700px;">
            <div class='col-lg-12'>
                <div class="row">

                    <h1>ویرایش کاربر <span style="color: red;">{{ $record->fname }} {{ $record->lname }}</span></h1>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12 marginrl">
                    {!! Form::model($record, ['method' => 'PATCH', 'route' => ['users.update', $record->id], 'files' => true, 'class' => 'form-horizontal']) !!}
                    <div class="form-group">
                        {{ Form::label('fname', 'نام', ['class' => 'control-label cal-lg-3']) }}
                        <div class="col-lg-7">
                            {!! Form::text('fname', null, ['class' => 'form-control', 'placeholder' => 'نام کاربر را وارد کنید.']) !!}
                        </div>
                    </div>
                    <div class="form-group ">
                        {{ Form::label('lname', 'نام خانوادگی', ['class' => 'control-label cal-lg-3']) }}
                        <div class="col-lg-7">
                            {!! Form::text('lname', null, ['class' => 'form-control', 'placeholder' => '  نام خانوادگی کاربر را وارد کنید.']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('name', 'نام کاربری', ['class' => 'control-label cal-lg-3']) }}
                        <div class="col-lg-7">
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'نام کاربری را وارد کنید.']) !!}
                        </div>
                    </div>
                    <div class="form-group" style="margin-left: 30px">
                        {{ Form::label('email', 'ایمیل کاربر ', ['class' => 'control-label cal-lg-3']) }}
                    </div>
                    <div class="form-group input-group col-lg-7">
                        <span class="input-group-addon ">@</span>
                        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => ' ایمیل کاربر را وارد کنید.']) !!}
                    </div>
                    <div class="form-group">
                        {{ Form::label('password2', 'رمز عبور', ['class' => 'control-label cal-lg-3']) }}
                        <div class="col-lg-7">
                            {!! Form::password('password2', null, ['class' => 'form-control', 'placeholder' => 'رمز عبور کاربر را وارد کنید.']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('mobile', 'تلفن همراه  کاربر', ['class' => 'control-label cal-lg-3']) }}
                        <div class="col-lg-7">
                            {!! Form::text('mobile', null, ['class' => 'form-control', 'placeholder' => 'تلفن همراه  کاربر را وارد کنید.']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('phone', 'تلفن ثابت کاربر', ['class' => 'control-label cal-lg-3']) }}
                        <div class="col-lg-7">
                            {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'تلفن ثابت کاربر را وارد کنید.']) !!}
                        </div>
                    </div>
                    <div class="form-group ">
                        {{ Form::label('code', 'کد پستی کاربر', ['class' => 'control-label cal-lg-3']) }}
                        <div class="col-lg-7">
                            {!! Form::text('code', null, ['class' => 'form-control', 'placeholder' => 'کد پستی کاربر را وارد کنید.']) !!}
                        </div>
                    </div>
                    <div class="form-group ">
                        {{ Form::label('role', 'انتخاب نقش کاربر', ['class' => 'control-label cal-lg-3']) }}
                        <div class="col-lg-7">
                            {!! Form::select('role', $roles, null, ['class' => 'form-control']) !!}
                        </div>
                    </div>


                    <div class="form-group ">
                        <label class="control-label col-lg-4">آپلود عکس</label>
                        <div class="col-lg-8">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-preview thumbnail" style="width: 200px ; height:150px ;"></div>
                                <div>
                                    <span class="btn btn-file btn-success">
                                        <span class="fileupload-new">انتخاب عکس</span>
                                        <span class="fileupload-exists">تغییر</span>

                                        <input type="file" name="imguser">
                                    </span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">حذف</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('address', 'آدرس کاربر', ['class' => 'control-label cal-lg-3']) }}
                        <div class="col-lg-7">
                            {!! Form::textarea('address', null, ['class' => 'form-control', 'id' => 'cleditor', 'placeholder' => 'آدرس کاربر را وارد کنید.']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('details', 'توضیحات', ['class' => 'control-label cal-lg-3']) }}
                        <div class="col-lg-7">
                            {!! Form::textarea('details', null, ['class' => 'form-control', 'id' => 'cleditor', 'placeholder' => 'توضیحات مربوط به  کاربر را وارد کنید .']) !!}
                        </div>
                    </div>
                    <div class="form-acions" style="text-align:center;margin-botton:80px ;">
                        {{ Form::submit('ثبت اطلاعات ویرایش شده', ['class' => 'btn btn-primary btn-lg']) }}
                    </div><br>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="<?= Url('assets/plugins/jasny/js/bootstrap-fileupload.js') ?>"></script>
@endsection
