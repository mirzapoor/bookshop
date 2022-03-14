@extends('layouts.adminlayouts')
@section('content')
    <div id="content">
        <div class="inner" style="min-height:700px;">
            <div class='class-lg-12'>
                <div class="row">
                    <h1>اضافه کردن مرکز پخش جدید</h1>
                </div>
            </div>
            <hr>
            @if ($errors->has('name_pakhsh'))
                <div class="panel-body">
                    <div class="alert alert-danger alert-dismissable ">
                        <button type="button" class="close" data-dismiss="alert" aria-label="close" 
                        date-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ $errors->first('name_pakhsh') }}
                    </div>
                </div>
            @endif
            @if ($errors->has('phone_pakhsh'))
                <div class="panel-body">
                    <div class="alert alert-danger alert-dismissable ">
                        <button type="button" class="close" data-dismiss="alert" aria-label="close" 
                        date-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ $errors->first('phone_pakhsh') }}
                    </div>
                </div>
            @endif
            @if ($errors->has('fax_pakhsh'))
                <div class="panel-body">
                    <div class="alert alert-danger alert-dismissable ">
                        <button type="button" class="close" data-dismiss="alert" aria-label="close" 
                        date-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ $errors->first('fax_pakhsh') }}
                    </div>
                </div>
            @endif
            @if ($errors->has('email_pakhsh'))
                <div class="panel-body">
                    <div class="alert alert-danger alert-dismissable ">
                        <button type="button" class="close" data-dismiss="alert" aria-label="close" 
                        date-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ $errors->first('email_pakhsh') }}
                    </div>
                </div>
            @endif
            @if ($errors->has('website_pakhsh'))
                <div class="panel-body">
                    <div class="alert alert-danger alert-dismissable ">
                        <button type="button" class="close" data-dismiss="alert" aria-label="close" 
                        date-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ $errors->first('website_pakhsh') }}
                    </div>
                </div>
            @endif
            @if ($errors->has('address_pakhsh'))
                <div class="panel-body">
                    <div class="alert alert-danger alert-dismissable ">
                        <button type="button" class="close" data-dismiss="alert" 
                        aria-label="close" date-dismiss="alert"
                            aria-hidden="true">&times;</button>
                        {{ $errors->first('address_pakhsh') }}
                    </div>
                </div>
            @endif
            @if ($errors->has('details_pakhsh'))
                <div class="panel-body">
                    <div class="alert alert-danger alert-dismissable ">
                        <button type="button" class="close" data-dismiss="alert" aria-label="close" 
                        date-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ $errors->first('details_pakhsh') }}
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12 marginrl">
                    {!! Form::open(['url' => '/admin/pakhsh', 'class' => 'form-horizontal']) !!}
                    <div class="form-group">
                        {{ Form::label('name_pakhsh', 'نام مرکز پخش', ['class' => 'control-label cal-lg-3']) }}
                        <div class="col-lg-7">
                            {!! Form::text('name_pakhsh', null, ['class' => 'form-control', 'placeholder' => 'نام مرکز پخش را وارد کنید.']) !!}
                        </div>
                    </div>
                    <div class="form-group ">
                        {{ Form::label('phone_pakhsh', 'تلفن مرکز پخش', ['class' => 'control-label cal-lg-3']) }}
                        <div class="col-lg-7">
                            {!! Form::text('phone_pakhsh', null, ['class' => 'form-control', 'placeholder' => 'تلفن مرکز پخش را وارد کنید.']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('fax_pakhsh', 'فکس مرکز پخش', ['class' => 'control-label cal-lg-3']) }}
                        <div class="col-lg-7">
                            {!! Form::text('fax_pakhsh', null, ['class' => 'form-control', 'placeholder' => 'فکس مرکز پخش را وارد کنید.']) !!}
                        </div>
                    </div>
                    <div style="margin-left: 30px">
                        {{ Form::label('email_pakhsh', 'ایمیل مرکز پخش', ['class' => 'control-label cal-lg-3']) }}
                    </div>
                    <div class="form-group input-group col-lg-7">
                        <span class="input-group-addon ">@</span>
                        {!! Form::text('email_pakhsh', null, ['class' => 'form-control', 'placeholder' => ' ایمیل مرکز پخش را وارد کنید.']) !!}
                        {{-- </div> --}}
                    </div>
                    {{ Form::label('website_pakhsh', 'نشانی وب', ['class' => 'control-label cal-lg-3 marginrl']) }}
                    <div class="form-group input-group col-lg-7 marginrl">
                        {!! Form::text('website_pakhsh', null, ['class' => 'form-control', 'placeholder' => 'نشانی وب مرکز پخش را وارد کنید.']) !!}
                        <span class="input-group-addon">http://www</span>
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('address_pakhsh', 'آدرس مرکز پخش', ['class' => 'control-label cal-lg-3']) }}
                    <div class="col-lg-7">
                        {!! Form::textarea('address_pakhsh', null, ['class' => 'form-control', 'placeholder' => 'آدرس مرکز پخش را وارد کنید.']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('details_pakhsh', 'توضیحات', ['class' => 'control-label cal-lg-3']) }}
                    <div class="col-lg-7">
                        {!! Form::textarea('details_pakhsh', null, ['class' => 'form-control', 'id' => 'cleditor', 'placeholder' => 'توضیحات مربوط به مرکز پخش را وارد کنید .']) !!}
                    </div>
                </div>
                <div class="form-acions" style="text-align:center;margin-botton:80px ;">
                    {{ Form::submit('ثبت اطلاعات', ['class' => 'btn btn-primary btn-lg']) }}
                </div><br>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
