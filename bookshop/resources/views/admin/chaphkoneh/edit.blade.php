@extends('layouts.adminlayouts')
@section('content')
    <div id="content">
        <div class="inner" style="min-height:700px;">
            <div class='class-lg-12'>
                <div class="row">
                    <h1>ویرایش اطلاعات چاپخانه <span style=" color:red; font-size:40px;">{{ $record->name_chapkhonehs }}
                             </span>
                    </h1>
                </div>
            </div>
            <hr>
            @if ($errors->has('name_chapkhonehs'))
            <div class="panel-body">
                <div class="alert alert-danger alert-dismissable ">
                    <button type="button" class="close" data-dismiss="alert" aria-label="close" 
                    date-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ $errors->first('name_chapkhonehs') }}
                </div>
            </div>
        @endif
       
        @if ($errors->has('year_chapkhonehs'))
            <div class="panel-body">
                <div class="alert alert-danger alert-dismissable ">
                    <button type="button" class="close" data-dismiss="alert" aria-label="close" 
                    date-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ $errors->first('year_chapkhonehs') }}
                </div>
            </div>
        @endif
        @if ($errors->has('email_chapkhonehs'))
            <div class="panel-body">
                <div class="alert alert-danger alert-dismissable ">
                    <button type="button" class="close" data-dismiss="alert" 
                    aria-label="close" date-dismiss="alert"
                        aria-hidden="true">&times;</button>
                    {{ $errors->first('email_chapkhonehs') }}
                </div>
            </div>
        @endif
        @if ($errors->has('website_chapkhonehs'))
            <div class="panel-body">
                <div class="alert alert-danger alert-dismissable ">
                    <button type="button" class="close" data-dismiss="alert" 
                    aria-label="close" date-dismiss="alert"
                        aria-hidden="true">&times;</button>
                    {{ $errors->first('website_chapkhonehs') }}
                </div>
            </div>
        @endif
       
        @if ($errors->has('phone_chapkhonehs'))
            <div class="panel-body">
                <div class="alert alert-danger alert-dismissable ">
                    <button type="button" class="close" data-dismiss="alert" 
                    aria-label="close" date-dismiss="alert"
                        aria-hidden="true">&times;</button>
                    {{ $errors->first('phone_chapkhonehs') }}
                </div>
            </div>
        @endif
       
        @if ($errors->has('address_chapkhonehs'))
        <div class="panel-body">
            <div class="alert alert-danger alert-dismissable ">
                <button type="button" class="close" data-dismiss="alert" 
                aria-label="close" date-dismiss="alert"
                    aria-hidden="true">&times;</button>
                {{ $errors->first('address_chapkhonehs') }}
            </div>
        </div>
    @endif
        @if ($errors->has('details_chapkhonehs'))
        <div class="panel-body">
            <div class="alert alert-danger alert-dismissable ">
                <button type="button" class="close" data-dismiss="alert" 
                aria-label="close" date-dismiss="alert"
                    aria-hidden="true">&times;</button>
                {{ $errors->first('details_chapkhonehs') }}
            </div>
        </div>
    @endif
            <div class="row">
                <div class="col-lg-12 marginrl">
                    {!! Form::model($record, ['method' => 'PATCH', 'route' => ['chaphkoneh.update', $record->id], 'files' => true]) !!}

                    <div class="form-group">
                        {{ Form::label('name_chapkhonehs', 'نام چاخانه', ['class' => 'control-label cal-lg-3']) }}
                        <div class="col-lg-7">
                            {!! Form::text('name_chapkhonehs', null, ['class' => 'form-control', 'placeholder' => 'نام چاپخانه را وارد کنید.']) !!}
                        </div>
                    </div>
                   
                    <div class="form-group ">
                        {{ Form::label('year_chapkhonehs', 'سال تاسیس چاپخانه', ['class' => 'control-label cal-lg-3']) }}
                        <div class="col-lg-7">
                            {!! Form::text('year_chapkhonehs', null, ['class' => 'form-control', 'placeholder' => 'سال تاسیس چاپخانه را وارد کنید.']) !!}
                        </div>
                    </div>
                   
                    <div class="form-group" style="margin-left: 30px">
                        {{ Form::label('email_chapkhonehs', 'ایمیل چاپخانه ', ['class' => 'control-label cal-lg-3']) }}
                    </div>
                    <div class="form-group input-group col-lg-7">
                        <span class="input-group-addon ">@</span>
                        {!! Form::text('email_chapkhonehs', null, ['class' => 'form-control', 'placeholder' => ' ایمیل چاپخانه را وارد کنید.']) !!}
                    </div>
                    <div class="form-group " style="margin-left: 50px">
                        {{ Form::label('website_chapkhonehs', 'نشانی وب سایت چاپخانه  ', ['class' => 'control-label cal-lg-3']) }}
                    </div>
                    <div class="form-group input-group col-lg-7">
                        {!! Form::text('website_chapkhonehs', null, ['class' => 'form-control', 'placeholder' => ' نشانی وب سایت چاپخانه را وارد کنید.']) !!}
                        <span class="input-group-addon">http://www</span>

                    </div>
                    <div class="form-group ">
                        {{ Form::label('phone_chapkhonehs', 'تلفن چاپخانه ', ['class' => 'control-label cal-lg-3']) }}
                        <div class="col-lg-7">
                            {!! Form::text('phone_chapkhonehs', null, ['class' => 'form-control', 'placeholder' => 'تلفن  چاپخانه را وارد کنید.']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('address_chapkhonehs', ' آدرس چاپخانه', ['class' => 'control-label cal-lg-3']) }}
                    <div class="col-lg-7">
                        {!! Form::textarea('address_chapkhonehs', null, ['class' => 'form-control', 'placeholder' => '  آدرس چاپخانه  را وارد کنید.']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('details_chapkhonehs', 'توضیحات چاپخانه', ['class' => 'control-label cal-lg-3']) }}
                    <div class="col-lg-7">
                        {!! Form::textarea('details_chapkhonehs', null, ['class' => 'form-control', 'placeholder' => '  توضیحان چاپخانه را وارد کنید.']) !!}
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
