@extends('layouts.adminlayouts')
@section('content')
    <div id="content">
        <div class="inner" style="min-height:700px;">
            <div class='col-lg-12'>
                <div class="row">
                    <h1>نمایش و مدیریت کتاب ها سایت <a href="<?= Url('admin/books/create') ?>"
                            class="btn btn-primary btn-sm btn-line"> افزودن کتاب جدید</a> </h1>
                </div>
            </div>
            <hr>
            <div class="row" style="margin-top: 30px">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>تمامی کتاب ها سایت</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr dir="rtl">
                                            <th>نام کتاب</th>
                                            <th> تعداد موجودی </th>
                                            <th>قیمت کتاب</th>
                                            <th>کاربر ثبت کننده</th>
                                            <th>تصویر کتاب</th>
                                            <th>وضعیت کتاب</th>
                                            <th>تعداد بازدید</th>
                                            <th>عملیات مورد نظر</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($books as $book)
                                            <tr class="gradeC">
                                                <td>{{ $book->name_book }}</td>
                                                <td>{{ $book->count_book }}</td>
                                                <td>{!! number_format($book->price_book) !!} </td>
                                                <td>{!! getusername($book->id_users) !!}</td>
                                                <td> <img src="<?= Url('assets/img/imagebook/' . $book->img_book) ?>"
                                                        alt="{{ $book->name_book }}" width="60" height="60"
                                                        title="{{ $book->name_book }}">
                                                </td>
                                                @if ($book->state_book == '0')
                                                    <td style="color: black;background:rgb(217, 89, 8);">در انبار موجود هست . </td>
                                                @elseif($book->state_book == '1')
                                                    <td style="color: black;background:rgb(136, 20, 20)">در انبار موجود نیست
                                                        . </td>
                                                @elseif($book->state_book == '2')
                                                    <td style="color: black;background:rgb(232, 12, 12);">کاربران اجازه
                                                        خریده ندارند </td>
                                                @elseif($book->state_book == '3')
                                                    <td style="color: black;background:rgb(9, 179, 51);;">کتاب در فروش ویژه
                                                        قرار گرفته </td>
                                                @else
                                                    <td style="color: black;background:rgb(59, 3, 3);">نامعلوم</td>
                                                @endif
                                                <td style="width: ">{{ $book->view_book }}</td>
                                                <td>
                                                    <a href="<?= Url('admin/books/' . $book->id . '/edit') ?>"
                                                        class="btn btn-primary btn-sm btn-line mb-1" style="margin-bottom: 10px; width:50px ; margin-right: 10px;"> ویرایش</a>
                                                    <a href="#" class="btn btn-danger btn-sm btn-line m" style="width: 50px ; margin-right: 10px;" data-toggle="modal"
                                                        data-target="#delete{{ $book->id }}"> حذف
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12" style="margin-right: ">
                                    @foreach ($books as $book)
                                        <div class='modal fade' id="delete{{ $book->id }}" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title" id="H2">آیا از حذف کردن کتاب 
                                                            {{ $book->name_book }}اطمینان دارید؟ </h4>
                                                    </div>
                                                    <div class="modal-baby">
                                                        <img src="<?= Url('assets/img/imagebook/' . $book->img_book) ?>"
                                                            alt="{{ $book->name_book }}" width="200" height="200"
                                                            title="{{ $book->name_book }}">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form method="POST" action="<?= Url('admin/books/' . $book->id) ?>">
                                                            <input type="hidden" name="_token"
                                                                value="{{ csrf_token() }}">
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
                        <span style="text-align: center;">{!! $books->render() !!}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<?php
use App\User;
function getusername($id)
{
    $username = User::find($id)->first()['name'];
    return $username;
}
?>
