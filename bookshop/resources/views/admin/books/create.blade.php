@extends('layouts.adminlayouts')
@section('head')
    <link rel="stylesheet" href="<?= Url('assets/css/bootstrap-fileupload.min.css') ?>">
@endsection
@section('content')
    <div id="content">
        <div class="inner" style="min-height:700px;">
            <div class='col-lg-12'>
                <div class="row">
                    <h1>افزودن کتاب جدید</h1>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12">
                    {!! Form::open(['url' => '/admin/books', 'class' => 'form-horizontal', 'files' => true]) !!}

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    مشخصات کتاب را وارد نمایید.
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive" style="margin-right:5px;">
                                        <div class="form-group">
                                            {{ Form::label('name_book', 'نام کتاب', ['class' => 'control-label cal-lg-3']) }}
                                            <div class="col-lg-7">
                                                {!! Form::text('name_book', null, ['class' => 'form-control', 'placeholder' => 'نام کتاب را وارد کنید.']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('count_book', 'تعداد کتاب', ['class' => 'control-label cal-lg-3']) }}
                                            <div class="col-lg-7">
                                                {!! Form::text('count_book', null, ['class' => 'form-control', 'placeholder' => 'تعداد کتاب موجود را وارد کنید.']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('price_book', 'قیمت کتاب', ['class' => 'control-label cal-lg-3']) }}
                                            <div class="col-lg-7">
                                                {!! Form::text('price_book', null, ['class' => 'form-control', 'placeholder' => 'قیمت کتاب را وارد کنید.']) !!}
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            {{ Form::label('shabook_book', 'شابک کتاب', ['class' => 'control-label cal-lg-3']) }}
                                            <div class="col-lg-7">
                                                {!! Form::text('shabook_book', null, ['class' => 'form-control', 'placeholder' => 'شابک کتاب را وارد کنید.']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('state_book', 'انتخاب وضعیت کتاب', ['class' => 'control-label cal-lg-3']) }}
                                            <div class="col-lg-7">
                                                {!! Form::select('state_book', $state, null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('details_book', 'مشخصات کتاب', ['class' => 'control-label cal-lg-3']) }}
                                            <div class="col-lg-7">
                                                {!! Form::textarea('details_book', null, ['class' => 'ckeditor', 'form-control', 'placeholder' => 'مشخصات کتاب را وارد کنید.']) !!}
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
                                    چاپ خانه ای که در آن کتاب چاپ شده است را انتخاب کنید.<a
                                        href="<?= Url('admin/chaphkoneh/create') ?>" target="_black"
                                        style="float: left; margin-left:-10px;margin-top:-10px;">
                                        <img src="<?= Url('assets/img/imagebook/add.png') ?>" width="40px" height="40px"
                                            title="افزودن چاپخانه جدید">
                                    </a>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <div class="form-group">
                                            {{ Form::label('id_chapkhonehs', 'انتخاب چاپخانه', ['class' => 'control-label cal-lg-3']) }}
                                            <div class="col-lg-7">
                                                {!! Form::select('id_chapkhonehs', $chaps, null, ['class' => 'form-control']) !!}
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
                                    موضوع کتاب را انتخاب کنید.<a href="<?= Url('admin/category/create') ?>" target="_black"
                                        style="float: left; margin-left:-10px;margin-top:-10px;">
                                        <img src="<?= Url('assets/img/imagebook/add.png') ?>" width="40px" height="40px"
                                            title="افزودن موضوع جدید">
                                    </a>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <div class="form-group">
                                            {{ Form::label('id_subjects', 'انتخاب موضوع کتاب', ['class' => 'control-label cal-lg-3']) }}
                                            <div class="col-lg-7">
                                                {!! Form::select('id_subjects', $subjects, null, ['class' => 'form-control']) !!}
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
                                    تصویری برای کتاب انتخاب کنید.
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <div class="form-group ">
                                            <label class="control-label col-lg-4">آپلود عکس</label>
                                            <div class="col-lg-8">
                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-preview thumbnail"
                                                        style="width: 350px ;
                                                                                                             height:250px ;">
                                                    </div>
                                                    <div>
                                                        <span class="btn btn-file btn-success">
                                                            <span class="fileupload-new">انتخاب عکس</span>
                                                            <span class="fileupload-exists">تغییر</span>
                                                            <input type="file" name="imgbook">
                                                        </span>
                                                        <a href="#" class="btn btn-danger fileupload-exists"
                                                            data-dismiss="fileupload">حذف</a>
                                                    </div>
                                                </div>
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
                                    نویسندگان کتاب خود را انتخاب کنید.<a href="<?= Url('admin/writer/create') ?>"
                                        target="_black" style="float: left; margin-left:-10px;margin-top:-10px;">
                                        <img src="<?= Url('assets/img/imagebook/add.png') ?>" width="40px" height="40px"
                                            title="افزودن نویسنده جدید">
                                    </a>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <div class="row">
                                            @foreach ($writers as $moalef)
                                                <div class="col-lg-4">
                                                    <div class="well">
                                                        <h4 style="color: red">{{ $moalef->name_writers }}
                                                            {{ $moalef->lname_writers }}
                                                            <input type="checkbox" name="writer[]"
                                                                value="{{ $moalef->id }}">
                                                        </h4>
                                                        <p>{{ $moalef->details_writers }}</p>
                                                    </div>
                                                </div>
                                            @endforeach
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
                                    مترجمان کتاب خود را انتخاب کنید.
                                    <a href="<?= Url('admin/translator/create') ?>" target="_black"
                                        style="float: left; margin-left:-10px;margin-top:-10px;">
                                        <img src="<?= Url('assets/img/imagebook/add.png') ?>" width="40px" height="40px"
                                            title="افزودن مترجم جدید">
                                    </a>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <div class="row">
                                            @foreach ($motarjems as $motarjem)
                                                <div class="col-lg-4">
                                                    <div class="well">
                                                        <h4 style="color: red">{{ $motarjem->name_motarjems }}
                                                            {{ $motarjem->lname_motarjems }}

                                                            <input type="checkbox" name="motarjem[]"
                                                                value="{{ $motarjem->id }}">
                                                        </h4>
                                                        <p>{{ $motarjem->details_motarjems }}</p>
                                                    </div>
                                                </div>
                                            @endforeach
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
                                    مراکزی که کتاب در آنها پخش شده است انتخاب نمایید.<a
                                        href="<?= Url('admin/pakhsh/create') ?>" target="_black"
                                        style="float: left; margin-left:-10px;margin-top:-10px;">
                                        <img src="<?= Url('assets/img/imagebook/add.png') ?>" width="40px" height="40px"
                                            title="افزودن مراکز پخش جدید">
                                    </a>

                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <div class="row">
                                            @foreach ($pakhsh as $pakhshs)
                                                <div class="col-lg-4">
                                                    <div class="well">
                                                        <h4 style="color: red">{{ $pakhshs->name_pakhsh }}
                                                            <input type="checkbox" name="pakhshselect[]"
                                                                value="{{ $pakhshs->id }}">



                                                        </h4>

                                                        <p>{{ $pakhshs->details_pakhsh }}</p>
                                                    </div>
                                                </div>
                                            @endforeach

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
                                    مشخصات چاپ کتاب
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive" style="margin-right:5px;">

                                        <div class="form-group">
                                            {{ Form::label('count_countprints', 'نوبت چاپ', ['class' => 'control-label cal-lg-3']) }}
                                            <div class="col-lg-7">
                                                {!! Form::text('count_countprints', null, ['class' => 'form-control', 'placeholder' => 'نوبت چاپ کتاب را وارد کنید.']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('fasle_countprints', 'فصل چاپ', ['class' => 'control-label cal-lg-3']) }}
                                            <div class="col-lg-7">
                                                {!! Form::text('fasle_countprints', null, ['class' => 'form-control', 'placeholder' => 'فصلی که کتاب به چاپ رسیده را وارد کنید.']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('year_countprints', 'سال چاپ', ['class' => 'control-label cal-lg-3']) }}
                                            <div class="col-lg-7">
                                                {!! Form::text('year_countprints', null, ['class' => 'form-control', 'placeholder' => 'سال که کتاب چاپ شده را وارد کنید.']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('moneth_countprints', 'ماه چاپ', ['class' => 'control-label cal-lg-3']) }}
                                            <div class="col-lg-7">
                                                {!! Form::text('moneth_countprints', null, ['class' => 'form-control', 'placeholder' => 'ماه که کتاب چاپ شده را وارد کنید.']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('countbook_countprints', 'تعداد نسخه', ['class' => 'control-label cal-lg-3']) }}
                                            <div class="col-lg-7">
                                                {!! Form::text('countbook_countprints', null, ['class' => 'form-control', 'placeholder' => ' تعداد نسخه کتاب را وارد کنید.']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('details_countprints', 'توضیحات اضافی', ['class' => 'control-label cal-lg-3']) }}
                                            <div class="col-lg-7">
                                                {!! Form::textarea('details_countprints', null, ['class' => 'form-control', 'placeholder' => 'توضیحات اضافی را وارد کنید.']) !!}
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-acions" style="text-align:center;margin-botton:80px ;">
                        {{ Form::submit('ثبت اطلاعات', ['class' => 'btn btn-primary btn-lg']) }}
                    </div>
                    <br>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="<?= Url('assets/plugins/jasny/js/bootstrap-fileupload.js') ?>"></script>
    <script src="<?= Url('assets/ckeditor/ckeditor.js') ?>"></script>
@endsection
