@extends('layouts.adminlayouts')
@section('content')
    <div id="content" >
        <div class="inner" style="min-height:700px;">
            <div class='class-lg-6'>
                <div class="row">
                    <h1> تمامی مراکز پخش ثبت شده</h1>
                </div>
            </div>
            <hr>
            <div class="row" style="margin-top: 30px">
                @foreach ($pakhsh as $pakhsh1)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 container ">
                        <div class="panel panel-primary box ">
                            <div class="panel-heading ">
                                {{ $pakhsh1->name_pakhsh }}
                            </div>
                            <div class="panel-body">
                                <p>
                                    تلفن : {{ $pakhsh1->phone_pakhsh }} <br>
                                    آدرس : {{ $pakhsh1->address_pakhsh }} <br>
                               
                               نشانی وب سایت : <a href="http://www.{{ $pakhsh1->website_pakhsh }}"
                                    target="_balck">{{ $pakhsh1->website_pakhsh }}</p></a> 
                            </div>
                            <div class="panel-footer">
                                <button type="button" title="نمایش" class="btn btn-primary btn-circle btn-lg"
                                    data-toggle="modal" data-target="#{{ $pakhsh1->id }}">
                                    <i class="icon-list"></i></button>

                                <a href="<?= url('admin/pakhsh/'.$pakhsh1->id.'/edit') ?>" title="ویرایش"
                                    class="btn btn-success btn-circle btn-lg"> <i class="icon-link"></i></a>

                                <button type="button" title="حذف" class="btn btn-danger btn-circle btn-lg"
                                    data-toggle="modal" data-target="#delete{{ $pakhsh1->id }}">
                                    <i class="icon-bitbucket"></i></button>

                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="row">
                    <div class="col-lg-12">
                        @foreach ($pakhsh as $pakhsh2)
                            <div class="modal fade" id="{{ $pakhsh2->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" date-dismiss="modal"
                                                aria-hidden="true">&times; </button>
                                            <h4 class="modal-title" id="myModalLabe"> {{ $pakhsh2->name_pakhsh }}</h4>
                                        </div>
                                        <div class="modal-boby" style="margin-right: 10px">
                                            <p>
                                                تلفن : {{ $pakhsh2->phone_pakhsh }} </p>
                                            <p> آدرس : {{ $pakhsh2->address_pakhsh }} </p>
                                            <p> فکس : {{ $pakhsh2->fax_pakhsh }} </p>
                                            <p> ایمیل : {{ $pakhsh2->email_pakhsh }} </p>
                                            <p> نشانی وب سایت : <a href="http://www.{{ $pakhsh2->website_pakhsh }}"
                                                    target="_balck">{{ $pakhsh2->website_pakhsh }}</a> </p>
                                            <p> آدرس : {{ $pakhsh2->address_pakhsh }} <br>
                                            </p>
                                            <p>
                                                توضیحات : {{ $pakhsh2->details_pakhsh }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-lg-12">
                            @foreach ($pakhsh as $pakhsh3)
                                <div class='modal fade' id="delete{{ $pakhsh3->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="H2">آیا از حذف کردن
                                                    {{ $pakhsh3->name_pakhsh }}اطمینان دارید؟</h4>
                                            </div>
                                            <div class="modal-baby">
                                                <P> {{ $pakhsh3->details_pakhsh }}</P>
                                            </div>
                                            <div class="modal-footer">
                                                <form method="POST" action="<?= Url('admin/pakhsh/'. $pakhsh3->id) ?>">
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
                    <span style="text-align: center;">{!! $pakhsh->render() !!}</span>

                </div>
            </div>
        </div>
    </div>
@endsection
