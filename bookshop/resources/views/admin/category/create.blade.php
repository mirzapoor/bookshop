@extends('layouts.adminlayouts')
@section('content')
    <div id="content">
        <div class="inner" style="min-height:700px;">
            <div class='col-lg-12'>
                <div class="row">
                    <h1>اضافه کردن موضوع جدید</h1>
                </div>
            </div>
            <hr>
            @if ($errors->has('name_subjects'))
                <div class="panel-body">
                    <div class="alert alert-danger alert-dismissable ">
                        <button type="button" class="close" data-dismiss="alert" aria-label="close"
                            date-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ $errors->first('name_subjects') }}
                    </div>
                </div>
            @endif
            @if ($errors->has('details_subjects'))
                <div class="panel-body">
                    <div class="alert alert-danger alert-dismissable ">
                        <button type="button" class="close" data-dismiss="alert" aria-label="close"
                            date-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ $errors->first('details_subjects') }}
                    </div>
                </div>
            @endif


            <div class="row">
                <div class="col-lg-12 marginrl">
                    {!! Form::open(['url' => '/admin/category', 'class' => 'form-horizontal']) !!}
                    <div class="form-group">
                        {{ Form::label('name_subjects', 'نام موضوع ', ['class' => 'control-label cal-lg-3']) }}
                        <div class="col-lg-7">
                            {!! Form::text('name_subjects', null, ['class' => 'form-control',
                             'placeholder' => 'نام موضوع را وارد کنید.']) !!}
                        </div>
                    </div>
                    <div class="form-group ">
                        {{ Form::label('details_subjects', 'توضیحات ', ['class' => 'control-label cal-lg-3']) }}
                        <div class="col-lg-7">
                            {!! Form::textarea('details_subjects', null, ['class' => 'form-control', 'placeholder' => '  توضیحات موضوع را وارد کنید.']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('replay_subjects', 'انتخاب دسته مادر', ['class' => 'control-label cal-lg-3']) }}
                        <div class="col-lg-7">
                            {!! Form::select('replay_subjects', $category, null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-acions" style="text-align:center;margin-botton:80px ;">
                        {{ Form::submit('ثبت اطلاعات', ['class' => 'btn btn-primary btn-lg']) }}
                    </div><br>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
