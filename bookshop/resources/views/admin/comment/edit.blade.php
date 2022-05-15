@extends('layouts.adminLayouts')


@section('content')
    <div id="content">
        <div class="inner" style="min-height:700px;">
            <div class='col-lg-12'>
                <div class="row">
                    <h1> پاسخ و تایید دیدگاه </h1>
                </div>
            </div>
            <hr>
            <div class="row" style="margin-top: 30px ">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            پاسخ و تایید دیدگاه
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <tbody>
                                        <tr>
                                            <td> {{ $comment->name_comments }} </td>
                                            <td> {{ $comment->lname_comments }} </td>
                                            <td> {{ $comment->email_comments }} </td>
                                            <td> {{ $comment->content_comments }} </td>
                                            <td> {{ $comment->replaye_comments }} </td>

                                            <td>
                                                <?php $book = book($comment->id_books); ?>
                                                <img src="<?= Url('assets/img/imagebook' . $book->img_book) ?>" width="60"
                                                    height="60" alt="{{ $book->name_book }}"
                                                    title="{{ $book->name_book }}">
                                            </td>
                                            @if ($comment->state == '0')
                                                <td style="background-color: red;"> بررسی و تایید نشده </td>
                                            @else
                                                <td style="background-color: green;color:#fff;"> تایید شده است </td>
                                            @endif
                                        </tr>
                                    </tbody>

                                </table>
                                <div style="margin-top: 90px;">
                                    {!! Form::open(['url' => 'admin/comments', 'class' => 'form-horizontal']) !!}
                                    <div class="form-group">
                                        {{ Form::label('answer', 'متن پاسخ', ['class' => 'control-label col-lg-3']) }}
                                        <div class="col-lg-7">
                                            {{ Form::textarea('answer', null, ['class' => 'form-control','placeholder' => 'پاسخ خود را برای این دیدگاه وارد نمایید.']) }}
                                        </div>
                                    </div>

                                    <input type="hidden" name="id_comment" value="{{ $comment->id }}">
                                    <input type="hidden" name="id_books" value="{{ $comment->id_books }}">

                                    <div class="form-actions" style="text-align:center;">
                                        {{ Form::submit('ثبت پاسخ', ['class' => 'btn btn-primary btn-lg']) }}
                                    </div>
                                    {!! Form::close() !!}
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<?php

use App\BooksModel;

function book($id)
{
    $book = BooksModel::find($id);
    return $book;
}

?>
