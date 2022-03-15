@extends('layouts.adminlayouts')
@section('content')
    <div id="content">
        <div class="inner" style="min-height:700px;">
            <div class='class-lg-12'>
                <div class="row">
                    <h1>ویرایش اطلاعات مترجمین <span style=" color:red; font-size:40px;">{{ $record->name_motarjems }}
                            {{ $record->lname_motarjems }} </span>
                    </h1>
                </div>
            </div>
            <hr>
            @if ($errors->has('name_motarjems'))
            <div class="panel-body">
                <div class="alert alert-danger alert-dismissable ">
                    <button type="button" class="close" data-dismiss="alert" aria-label="close" 
                    date-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ $errors->first('name_motarjems') }}
                </div>
            </div>
        @endif
        @if ($errors->has('lname_motarjems'))
            <div class="panel-body">
                <div class="alert alert-danger alert-dismissable ">
                    <button type="button" class="close" data-dismiss="alert" aria-label="close" 
                    date-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ $errors->first('lname_motarjems') }}
                </div>
            </div>
        @endif
        @if ($errors->has('age_motarjems'))
            <div class="panel-body">
                <div class="alert alert-danger alert-dismissable ">
                    <button type="button" class="close" data-dismiss="alert" aria-label="close" 
                    date-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ $errors->first('age_motarjems') }}
                </div>
            </div>
        @endif
        @if ($errors->has('maghtah_motarjems'))
            <div class="panel-body">
                <div class="alert alert-danger alert-dismissable ">
                    <button type="button" class="close" data-dismiss="alert" aria-label="close" 
                    date-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ $errors->first('maghtah_motarjems') }}
                </div>
            </div>
        @endif
        @if ($errors->has('reshtah_motarjems'))
            <div class="panel-body">
                <div class="alert alert-danger alert-dismissable ">
                    <button type="button" class="close" data-dismiss="alert" aria-label="close" 
                    date-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ $errors->first('reshtah_motarjems') }}
                </div>
            </div>
        @endif
        @if ($errors->has('phone_motarjems'))
            <div class="panel-body">
                <div class="alert alert-danger alert-dismissable ">
                    <button type="button" class="close" data-dismiss="alert" 
                    aria-label="close" date-dismiss="alert"
                        aria-hidden="true">&times;</button>
                    {{ $errors->first('phone_motarjems') }}
                </div>
            </div>
        @endif
        @if ($errors->has('email_motarjems'))
            <div class="panel-body">
                <div class="alert alert-danger alert-dismissable ">
                    <button type="button" class="close" data-dismiss="alert" 
                    aria-label="close" date-dismiss="alert"
                        aria-hidden="true">&times;</button>
                    {{ $errors->first('email_motarjems') }}
                </div>
            </div>
        @endif
        @if ($errors->has('website_motarjems'))
            <div class="panel-body">
                <div class="alert alert-danger alert-dismissable ">
                    <button type="button" class="close" data-dismiss="alert" 
                    aria-label="close" date-dismiss="alert"
                        aria-hidden="true">&times;</button>
                    {{ $errors->first('website_motarjems') }}
                </div>
            </div>
        @endif
        @if ($errors->has('details_motarjems'))
        <div class="panel-body">
            <div class="alert alert-danger alert-dismissable ">
                <button type="button" class="close" data-dismiss="alert" 
                aria-label="close" date-dismiss="alert"
                    aria-hidden="true">&times;</button>
                {{ $errors->first('details_motarjems') }}
            </div>
        </div>
    @endif
            <div class="row">
                <div class="col-lg-12 marginrl">
                    {!! Form::model($record, ['method' => 'PATCH', 'route' => ['translator.update', $record->id], 'files' => true]) !!}

                    <div class="form-group">
                        {{ Form::label('name_motarjems', 'نام مترجم', ['class' => 'control-label cal-lg-3']) }}
                        <div class="col-lg-7">
                            {!! Form::text('name_motarjems', null, ['class' => 'form-control', 'placeholder' => 'نام مترجم را وارد کنید.']) !!}
                        </div>
                    </div>
                    <div class="form-group ">
                        {{ Form::label('lname_motarjems', 'نام خانوادگی مترجم  ', ['class' => 'control-label cal-lg-3']) }}
                        <div class="col-lg-7">
                            {!! Form::text('lname_motarjems', null, ['class' => 'form-control', 'placeholder' => '  نام خانوادگی مترجم را وارد کنید.']) !!}
                        </div>
                    </div>
                    <div class="form-group ">
                        {{ Form::label('age_motarjems', 'سن مترجم', ['class' => 'control-label cal-lg-3']) }}
                        <div class="col-lg-7">
                            {!! Form::text('age_motarjems', null, ['class' => 'form-control', 'placeholder' => 'سن مترجم را وارد کنید.']) !!}
                        </div>
                    </div>
                    <div class="form-group ">
                        {{ Form::label('maghtah_motarjems', 'مقطع تحصیلی مترجم', ['class' => 'control-label cal-lg-3']) }}
                        <div class="col-lg-7">
                            {!! Form::text('maghtah_motarjems', null, ['class' => 'form-control', 'placeholder' => 'مقطع تحصیلی مترجم را وارد کنید.']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('reshtah_motarjems', 'رشته تحصیلی مترجم', ['class' => 'control-label cal-lg-3']) }}
                        <div class="col-lg-7">
                            {!! Form::text('reshtah_motarjems', null, ['class' => 'form-control', 'placeholder' => 'رشته تحصیلی مترجم را وارد کنید.']) !!}
                        </div>
                    </div>
                    <div class="form-group" style="margin-left: 30px">
                        {{ Form::label('email_motarjems', 'ایمیل مترجم ', ['class' => 'control-label cal-lg-3']) }}
                    </div>
                    <div class="form-group input-group col-lg-7">
                        <span class="input-group-addon ">@</span>
                        {!! Form::text('email_motarjems', null, ['class' => 'form-control', 'placeholder' => ' ایمیل مترجم را وارد کنید.']) !!}
                    </div>
                    <div class="form-group " style="margin-left: 50px">
                        {{ Form::label('website_motarjems', 'نشانی وب سایت مترجم  ', ['class' => 'control-label cal-lg-3']) }}
                    </div>
                    <div class="form-group input-group col-lg-7">
                        {!! Form::text('website_motarjems', null, ['class' => 'form-control', 'placeholder' => ' نشانی وب سایت مترجم را وارد کنید.']) !!}
                        <span class="input-group-addon">http://www</span>

                    </div>
                    <div class="form-group ">
                        {{ Form::label('phone_motarjems', 'تلفن مترجم ', ['class' => 'control-label cal-lg-3']) }}
                        <div class="col-lg-7">
                            {!! Form::text('phone_motarjems', null, ['class' => 'form-control', 'placeholder' => 'تلفن  مترجم را وارد کنید.']) !!}
                        </div>
                    </div>
                </div>
               
                <div class="form-group">
                    {{ Form::label('details_motarjems', 'توضیحات مترجم', ['class' => 'control-label cal-lg-3']) }}
                    <div class="col-lg-7">
                        {!! Form::textarea('details_motarjems', null, ['class' => 'form-control', 'placeholder' => '  توضیحان مترجم را وارد کنید.']) !!}
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
