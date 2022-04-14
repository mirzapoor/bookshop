@extends('layouts.adminlayouts')
@section('content')
    <div id="content">
        <div class="inner" style="min-height:1000px;">
            <div class='col-lg-12'>
                <div class="row">
                    <h1> تمامی مترجمین ثبت شده</h1>
                </div>
            </div>
            <hr>
            <div class="row " style="margin-top: 30px  ">

                @foreach ($translator as $translator1)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">


                            <div class="panel panel-primary ">
                                <div class="panel-heading ">
                                    {{ $translator1->name_motarjems }}
                                    {{ $translator1->lname_motarjems }}

                                </div>
                                <div class="panel-body">
                                    <p>
                                        تلفن : {{ $translator1->phone_motarjems }} <br>
                                        ایمیل : {{ $translator1->email_motarjems }} <br>

                                        نشانی وب سایت : <a href="http://www.{{ $translator1->website_motarjems }}"
                                            target="_balck">{{ $translator1->website_motarjems }}</a> </p>
                                </div>
                                <div class="panel-footer ">
                                    <button type="button" title="نمایش" class="btn btn-primary btn-circle btn-lg"
                                        data-toggle="modal" data-target="#{{ $translator1->id }}">
                                        <i class="icon-list"></i></button>

                                    <a href="<?= url('admin/translator/' . $translator1->id . '/edit') ?>" title="ویرایش"
                                        class="btn btn-success btn-circle btn-lg"> <i class="icon-link"></i></a>

                                    <button type="button" title="حذف" class="btn btn-danger btn-circle btn-lg"
                                        data-toggle="modal" data-target="#delete{{ $translator1->id }}">
                                        <i class="icon-bitbucket"></i></button>

                                </div>
                            </div>
                        </div>
                        @endforeach

                <div class="row">
                    <div class="col-lg-12">
                        @foreach ($translator as $translator2)
                            <div class="modal fade" id="{{ $translator2->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" date-dismiss="modal"
                                                aria-hidden="true">&times; </button>
                                            <h4 class="modal-title" id="myModalLabe">
                                                {{ $translator2->name_motarjems }} {{ $translator2->lname_motarjems }}
                                            </h4>
                                        </div>
                                        <div class="modal-boby" style="margin-right: 10px">
                                            <p> سن : {{ $translator2->age_motarjems }} </p>
                                            <p> مقطع تحصیلی : {{ $translator2->maghtah_motarjems }} </p>
                                            <p> رشته تحصیلی : {{ $translator2->reshtah_motarjems }} </p>
                                            <p> تلفن : {{ $translator2->phone_motarjems }} </p>

                                            <p> ایمیل : {{ $translator2->email_motarjems }} </p>
                                            <p> نشانی وب سایت : <a
                                                    href="http://www.{{ $translator2->website_motarjems }}"
                                                    target="_balck">{{ $translator2->website_motarjems }}</a> </p>

                                            <p>توضیحات : {{ $translator2->details_motarjems }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-lg-12">
                            @foreach ($translator as $translator3)
                                <div class='modal fade' id="delete{{ $translator3->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="H2">آیا از حذف کردن
                                                    {{ $translator3->name_motarjems }}
                                                    {{ $translator3->lname_motarjems }}اطمینان دارید؟</h4>
                                            </div>
                                            <div class="modal-baby">
                                                <P> {{ $translator3->details_motarjems }}</P>
                                            </div>
                                            <div class="modal-footer">
                                                <form method="POST"
                                                    action="<?= Url('admin/translator/' . $translator3->id) ?>">
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
                    <span style="text-align: center;">{!! $translator->render() !!}</span>

                </div>
            </div>
        </div>
    </div>
@endsection
