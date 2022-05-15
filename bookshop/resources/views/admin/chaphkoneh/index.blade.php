@extends('layouts.adminlayouts')
@section('content')
    <div id="content">
        <div class="inner" style="min-height:700px;">
            <div class='col-lg-6'>
                <div class="row">
                    <h1> تمامی چاپخانه ها ثبت شده</h1>
                </div>
            </div>
            <hr>
            <div class="row " style="margin-top: 30px">
                @foreach ($chaphkoneh as $chapkhoneh1)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                {{ $chapkhoneh1->name_chapkhonehs }}

                            </div>
                            <div class="panel-body">
                                <p>
                                    تلفن : {{ $chapkhoneh1->phone_chapkhonehs }} <br>
                                    ایمیل : {{ $chapkhoneh1->email_chapkhonehs }} <br>

                                    نشانی وب سایت : <a href="http://www.{{ $chapkhoneh1->website_chapkhonehs }}"
                                        target="_balck">{{ $chapkhoneh1->website_chapkhonehs }}</a> </p>
                            </div>
                            <div class="panel-footer">
                                <button type="button" title="نمایش" class="btn btn-primary btn-circle btn-lg"
                                    data-toggle="modal" data-target="#{{ $chapkhoneh1->id }}">
                                    <i class="icon-list"></i></button>

                                <a href="<?= url('admin/chaphkoneh/'. $chapkhoneh1->id .'/edit') ?>" title="ویرایش"
                                    class="btn btn-success btn-circle btn-lg"> <i class="icon-link"></i></a>

                                <button type="button" title="حذف" class="btn btn-danger btn-circle btn-lg"
                                    data-toggle="modal" data-target="#delete{{ $chapkhoneh1->id }}">
                                    <i class="icon-bitbucket"></i></button>

                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="row">
                    <div class="col-lg-12">
                        @foreach ($chaphkoneh as $chapkhoneh2)
                            <div class="modal fade" id="{{ $chapkhoneh2->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" date-dismiss="modal"
                                                aria-hidden="true">&times; </button>
                                            <h4 class="modal-title" id="myModalLabe">
                                                {{ $chapkhoneh2->name_chapkhonehs }} 
                                            </h4>
                                        </div>
                                        <div class="modal-boby" style="margin-right: 10px">
                                            <p> سال تاسیس چاپخانه : {{ $chapkhoneh2->year_chapkhonehs }} </p>
                                            <p> تلفن : {{ $chapkhoneh2->phone_chapkhonehs }} </p>

                                            <p> ایمیل : {{ $chapkhoneh2->email_chapkhonehs }} </p>
                                            <p> نشانی وب سایت : <a
                                                    href="http://www.{{ $chapkhoneh2->website_chapkhonehs }}"
                                                    target="_balck">{{ $chapkhoneh2->website_chapkhonehs }}</a> </p>
                                            <p>آدرس : {{ $chapkhoneh2->address_chapkhonehs }}
                                            </p>
                                            <p>توضیحات : {{ $chapkhoneh2->details_chapkhonehs }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-lg-12">
                            @foreach ($chaphkoneh as $chapkhoneh3)
                                <div class='modal fade' id="delete{{ $chapkhoneh3->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="H2">آیا از حذف کردن
                                                    {{ $chapkhoneh3->name_chapkhonehs }} اطمینان دارید؟</h4>
                                            </div>
                                            <div class="modal-baby">
                                                <P> {{ $chapkhoneh3->details_chapkhonehs }}</P>
                                            </div>
                                            <div class="modal-footer">
                                                <form method="POST"
                                                    action="<?= Url('admin/chaphkoneh/'. $chapkhoneh3->id) ?>">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="submit" name="btndelete" value="حذف کردن"
                                                        class="btn btn-danger">
                                                </form>
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">انصراف</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <span style="text-align: center;">{!! $chaphkoneh->render() !!}</span>

                </div>
            </div>
        </div>
    </div>
@endsection
