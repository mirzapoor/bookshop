@extends('layouts.userpanel')
 

@section('css')
<link type="text/css" rel="stylesheet" href="<?= Url('themes/1/stylesheets/bootstrap.css'); ?>">
@endsection

@section('content')
<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">
		نمایش و مدیریت تیکت های شما
	</p>
	<div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px"></div>
	<div style="padding-right:300px;">


        <table class="table table-striped table-bordered table-hover" style="margin-right:-200px;">
            <thead>
                <tr>
                    <th>کد تیکت</th>
                    <th>محتوی تیکت</th>
                    <th>وضعیت تیکت</th>
                    <th>اولویت</th>
                    <th> پاسخ تیکت </th>
                </tr>
            </thead>
            <tbody> 
            	@foreach( $tickets as $tick )
                <tr>
                    <td> {{ $tick->id }} </td>
                    <td> {{ $tick->content }} </td>

                    @if( $tick->state == 0 )
                    <td style="background-color: orange;"> بررسی نشده است </td>
                    @else
                    <td style="background-color: green;"> توسط مدیر بررسی شد </td>
                    @endif

                    <td> 
                    	<?php
                    		if ( $tick->olaviyat == 1 ) {
                    			echo "اولویت کم";
                    		}elseif ( $tick->olaviyat == 2 ) {
                    			echo "اولویت متوسط";
                    		}elseif ( $tick->olaviyat == 3 ) {
                    			echo "اولویت زیاد";
                    		}
                    	?>
                    </td>

                    @if( $tick->ansewer == '-' )
                    <td style="color: red;"> پاسخی داده نشده است </td>
                    @else
                    <td> {{ $tick->ansewer }} </td>
                    @endif

                </tr>
                @endforeach
            </tbody>
        </table>
		              
	</div>
@endsection