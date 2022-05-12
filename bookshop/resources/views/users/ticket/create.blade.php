@extends('layouts.userpanel')
 

@section('css')
<link type="text/css" rel="stylesheet" href="<?= Url('themes/1/stylesheets/bootstrap.css'); ?>">
@endsection

@section('content')
<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">
		ثبت تیکت جدید
	</p>
	<div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px"></div>
	<div style="padding-right:300px;">

	{!! Form::open(['url'=>'user/ticket']) !!}


 
	<div class="form-group">
		{{ Form::label('olaviyat','اولویت ',['class'=>'control-label col-lg-3']) }}
		<div class="col-lg-7">
			{{ Form::select('olaviyat',$olv,null,['class'=>'form-control']) }}
		</div>
	</div>

	<?php
		if($errors->has('content'))
		{
			?>
			<div class="form-group has-error">
			{!! Form::label('content','متن تیکت',['class'=>'control-label','for'=>'inputError']) !!}
			{!! Form::textarea('content',null,['class'=>'form-control','id'=>'inputError','placeholder="متن تیکت خود را وارد نمایید."','style'=>'width:600px;']) !!}

			<span class="help-block" style="color:red;"><?php echo $errors->first('content'); ?></span>
			</div>
		<?php 
	}
	else
	{?>
	<div class="form-group">
		{!! Form::label('content','متن تیکت') !!}
		{!! Form::textarea('content',null,['class'=>'form-control','placeholder="متن تیکت خود را وارد نمایید."','style'=>'width:600px;']) !!}
	</div>
	<?php } ?>




	<div class="form-input">
		{!! Form::submit('ثبت تیکت',['class'=>'btn','style'=>'margin-right:20px;'])!!}
	</div>
	{!! Form::close() !!}


	</div>

@endsection