@extends('layouts.adminlayouts')
@section('content')
    <div id="content">
        <div class="inner" style="min-height:700px;">
            <div class='class-lg-6'>
                <div class="row">
                    <h1> تمامی  ناشران ثبت شده</h1>
                </div>
            </div>
            <hr>
            <div class="row " style="margin-top: 30px">
                @foreach ($writer as $writer1)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                {{ $writer1->name_writers }}
                                {{ $writer1->lname_writers }}

                            </div>
                            <div class="panel-body">
                                <p>
                                    تلفن : {{ $writer1->phone_writers }} <br>
                                    آدرس : {{ $writer1->address_writers }} <br>

                                </p>
                                <p>
                                    نشانی وب سایت : <a href="http://www.{{ $writer1->website_writers }}"
                                        target="_balck">{{ $writer1->website_writers }}</a> </p>
                            </div>
                            <div class="panel-footer">
                                <button type="button" title="نمایش" class="btn btn-primary btn-circle btn-lg"
                                    data-toggle="modal" data-target="#{{ $writer1->id }}">
                                    <i class="icon-list"></i></button>

                                <a href="<?= url('admin/writer/' . $writer1->id . '/edit') ?>" title="ویرایش"
                                    class="btn btn-success btn-circle btn-lg"> <i class="icon-link"></i></a>

                                <button type="button" title="حذف" class="btn btn-danger btn-circle btn-lg"
                                    data-toggle="modal" data-target="#delete{{ $writer1->id }}">
                                    <i class="icon-bitbucket"></i></button>

                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="row">
                    <div class="col-lg-12">
                        @foreach ($writer as $writer2)
                            <div class="modal fade" id="{{ $writer2->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" date-dismiss="modal"
                                                aria-hidden="true">&times; </button>
                                            <h4 class="modal-title" id="myModalLabe"> {{ $writer2->name_writers }}
                                                {{ $writer2->lname_writers }}</h4>
                                        </div>
                                        <div class="modal-boby" style="margin-right: 10px">
                                            <p>
                                                تلفن : {{ $writer2->phone_writers }} </p>
                                            <p> آدرس : {{ $writer2->address_writers }} </p>
                                            <p> نشانی وب سایت : <a href="http://www.{{ $writer2->website_writers }}"
                                                    target="_balck">{{ $writer2->website_writers }}</a> </p>
                                            <p> آدرس : {{ $writer2->address_writers }} <br>
                                            </p>
                                            <p>
                                                توضیحات : {{ $writer2->website_writers }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-lg-12">
                            @foreach ($writer as $writer3)
                                <div class='modal fade' id="delete{{ $writer3->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="H2">آیا از حذف کردن
                                                    {{ $writer3->name_writers }}اطمینان دارید؟</h4>
                                            </div>
                                            <div class="modal-baby">
                                                <P> {{ $writer3->details_writers }}</P>
                                            </div>
                                            <div class="modal-footer">
                                                <form method="POST" action="<?= Url('admin/writer/' . $writer3->id) ?>">
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
                    <span style="text-align: center;">{!! $writer->render() !!}</span>
                </div>
            </div>
        </div>
    </div>
@endsection
