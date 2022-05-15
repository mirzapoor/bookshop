@extends('layouts.adminlayouts')
@section('content')
    <div id="content">
        <div class="inner" style="min-height:700px;">
            <div class='col-lg-12'>
                <div class="row">

                    <h1>نمایش و مدیریت تمامی موضوعات ثبت شده</h1>
                </div>
            </div>
            <hr>
            <div class="row" style="margin-top: 30px">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>تمامی موضوعات ثبت شده</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>کد موضوع</th>
                                            <th> نام موضوع</th>
                                            <th> توضیحات موضوع</th>
                                            <th> دسته ای از </th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categorys as $catego)
                                            <tr class="gradeC">
                                                <td>{{ $catego->id }}</td>
                                                <td>{{ $catego->name_subjects }}</td>
                                                <td>{{ $catego->details_subjects }} </td>
                                                <td class="center">{!! catname($catego->replay_subjects) !!}</td>
                                                <td>
                                                    <a href="<?= Url('admin/category/' . $catego->id . '/edit') ?>"
                                                        class="btn btn-primary btn-sm btn-line"> ویرایش</a>
                                                    <a href="#" class="btn btn-danger btn-sm btn-line" data-toggle="modal"
                                                        data-target="#delete{{ $catego->id }}"> حذف
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    @foreach ($categorys as $catego)
                                        <div class='modal fade' id="delete{{ $catego->id }}" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title" id="H2"> آیا از حذف کردن موضوع
                                                            {{ $catego->name_subjects }} اطمینان دارید؟ </h4>
                                                    </div>
                                                    <div class="modal-baby">
                                                        <P> {{ $catego->details_subjects }}</P>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form method="POST"
                                                            action="<?= Url('admin/category/' . $catego->id) ?>">
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
                        </div>
                        <span style="text-align: center;">{!! $categorys->render() !!}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<?php
use App\SubjectsModel;

function catname($id)
{
    if ($id == '-') {
        return 'دسته مادر';
    } else {
        $name = SubjectsModel::where('id', $id)->first()['name_subjects'];
        return $name;
    }
}
?>
