@extends('layouts.adminlayouts')
@section('content')
    <div id="content">
        <div class="inner" style="min-height:700px;">
            <div class='class-lg-12'>
                <div class="row">
                    <h1>اضافه کردن نویسنده جدید</h1>
                </div>
            </div>
            <hr>
            @if ($errors->has('name_writers'))
                <div class="panel-body">
                    <div class="alert alert-danger alert-dismissable ">
                        <button type="button" class="close" data-dismiss="alert" aria-label="close" 
                        date-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ $errors->first('name_writers') }}
                    </div>
                </div>
            @endif
            @if ($errors->has('lname_writers'))
                <div class="panel-body">
                    <div class="alert alert-danger alert-dismissable ">
                        <button type="button" class="close" data-dismiss="alert" aria-label="close" 
                        date-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ $errors->first('lname_writers') }}
                    </div>
                </div>
            @endif
            @if ($errors->has('website_writers'))
                <div class="panel-body">
                    <div class="alert alert-danger alert-dismissable ">
                        <button type="button" class="close" data-dismiss="alert" aria-label="close" 
                        date-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ $errors->first('website_writers') }}
                    </div>
                </div>
            @endif
            @if ($errors->has('phone_writers'))
                <div class="panel-body">
                    <div class="alert alert-danger alert-dismissable ">
                        <button type="button" class="close" data-dismiss="alert" aria-label="close" 
                        date-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ $errors->first('phone_writers') }}
                    </div>
                </div>
            @endif
            @if ($errors->has('address_writers'))
                <div class="panel-body">
                    <div class="alert alert-danger alert-dismissable ">
                        <button type="button" class="close" data-dismiss="alert" aria-label="close" 
                        date-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ $errors->first('address_writers') }}
                    </div>
                </div>
            @endif
            @if ($errors->has('details_writers'))
                <div class="panel-body">
                    <div class="alert alert-danger alert-dismissable ">
                        <button type="button" class="close" data-dismiss="alert" 
                        aria-label="close" date-dismiss="alert"
                            aria-hidden="true">&times;</button>
                        {{ $errors->first('details_writers') }}
                    </div>
                </div>
            @endif
           


            <div class="row">
                <div class="col-lg-12 marginrl">
                    {!! Form::open(['url' => '/admin/writer', 'class' => 'form-horizontal']) !!}
                    <div class="form-group">
                        {{ Form::label('name_writers', 'نام نویسنده', ['class' => 'control-label cal-lg-3']) }}
                        <div class="col-lg-7">
                            {!! Form::text('name_writers', null, ['class' => 'form-control', 'placeholder' => 'نام نویسنده را وارد کنید.']) !!}
                        </div>
                    </div>
                    <div class="form-group ">
                        {{ Form::label('lname_writers', 'نام خانوادگی نویسنده', ['class' => 'control-label cal-lg-3']) }}
                        <div class="col-lg-7">
                            {!! Form::text('lname_writers', null, ['class' => 'form-control', 'placeholder' => '  نام خانوادگی نویسنده را وارد کنید.']) !!}
                        </div>
                    </div>
                  
                    <div class="form-group " style="margin-left: 50px" >
                        {{ Form::label('website_writers', 'نشانی وب نویسنده  ', ['class' => 'control-label cal-lg-3']) }}
                    </div>
                    <div class="form-group input-group col-lg-7">
                        {!! Form::text('website_writers', null, ['class' => 'form-control', 'placeholder' => ' نشانی وب نویسنده را وارد کنید.']) !!}
                        <span class="input-group-addon">http://www</span>

                    </div>
                    <div class="form-group ">
                        {{ Form::label('phone_writers', 'تلفن نویسینده ', ['class' => 'control-label cal-lg-3']) }}
                        <div class="col-lg-7">
                            {!! Form::text('phone_writers', null, ['class' => 'form-control', 'placeholder' => 'تلفن  نویسنده را وارد کنید.']) !!}
                        </div>
                    </div>
                   
                <div class="form-group">
                    {{ Form::label('address_writers', 'آدرس  نویسنده', ['class' => 'control-label cal-lg-3']) }}
                    <div class="col-lg-7">
                        {!! Form::textarea('address_writers', null, ['class' => 'form-control', 'placeholder' => 'آدرس  نویسنده را وارد کنید.']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('details_writers', 'توضیحات', ['class' => 'control-label cal-lg-3']) }}
                    <div class="col-lg-7">
                        {!! Form::textarea('details_writers', null, ['class' => 'form-control', 'id' => 'cleditor', 'placeholder' => 'توضیحات مربوط به  نویسنده را وارد کنید .']) !!}
                    </div>
                </div>
                <div class="form-acions" style="text-align:center;margin-botton:80px ;">
                    {{ Form::submit('ثبت اطلاعات', ['class' => 'btn btn-primary btn-lg']) }}
                </div><br>
                {!! Form::close() !!}
            </div>
        </div>
    </div>    </div>

@endsection
