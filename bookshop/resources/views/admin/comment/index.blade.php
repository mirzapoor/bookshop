@extends('layouts.adminLayouts')
@section('content')
    <div id="content">
        <div class="inner" style="min-height:500px;">
            <div class='col-lg-12'>
                <div class="row">
                    <h1> نمایش و مدیریت دیدگاه ها </h1>
                </div>
            </div>
            <hr>
            <div class="row" style="margin-top: 5px ; " >
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            تمامی دیدگاه های موجود </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>کد دیدگاه</th>
                                            <th>نام </th>
                                            <th>نام خانوادگی</th>
                                            <th>ایمیل</th>
                                            <th> محتویات </th>
                                            <th> در پاسخ به دیدگاه </th>
                                            <th> وضعیت دیدگاه </th>
                                            <th> برای کتاب </th>
                                            <th> عملیات </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($comments as $comment)
                                            <tr class="gradeC">
                                                <td>{{ $comment->id }}</td>
                                                <td>{{ $comment->name_comments }}</td>
                                                <td>{{ $comment->lname_comments }} </td>
                                                <td>{{ $comment->email_comments }}</td>
                                                <td>{{ $comment->content_comments }}</td>
                                                <td > {!! contentcomment($comment->replaye_comments) !!} </td>

                                                @if ($comment->state == '0')
                                                    <td style="background-color: red;"> بررسی و تایید نشده </td>
                                                @else
                                                    <td style="background-color: green;color:#fff;"> تایید شده است </td>
                                                @endif


                                                <td>
                                                    <?php $book = book($comment->id_books); ?>

                                                    <img src="<?= Url('assets/img/imagebook/' . $book->img_book) ?>"
                                                        alt="{{ $book->name_book }}" width="60" height="60"
                                                        title="{{ $book->name_book }}">
                                                </td>
                                                <td>
                                                    <a href="<?= Url('admin/comments/' . $comment->id . '/edit') ?>"
                                                        class="btn btn-primary btn-sm btn-line"
                                                        style="margin-bottom: 10px; width:80px ; margin-right: 10px;"> پاسخ
                                                        دادن</a>
                                                    <a href="#" class="btn btn-danger btn-sm btn-line" data-toggle="modal"
                                                        data-target="#delete{{ $comment->id }}"
                                                        style="margin-bottom: 10px; width:80px ; margin-right: 10px;">
                                                        حذف</a>
                                                    <a href="<?= Url('admin/comments/success/' . $comment->id) ?>"
                                                        class="btn btn-success btn-sm btn-line" 
                                                        style="margin-bottom: 10px; width:80px ; margin-right: 10px;">تایید دیدگاه</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <span style="text-align: center;">{!! $comments->render() !!}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



<?php

use App\CommentsModel;
use App\BooksModel;

function contentcomment($id)
{
    $name = CommentsModel::where('id', $id)->first(['content_comments']);
    return $name;
}

function book($id)
{
    $book = BooksModel::find($id);
    return $book;
}

?>
