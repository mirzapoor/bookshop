@extends('layouts.app')
@section('content')
<div class="container mx-auto" style="width: 900px ">
<div class="row" >
    <div class="col-md-10 " style="margin-right: 50px; "  >

  
    <div id="content" class="text-right mr-5" style="font-size: 10px ">
        <div class="inner" style="min-height:700px; ">
            <div class='class-md-9'>
                <div class="row ">
                    <h1 >ثبت نام</h1>
                </div>
            </div>
            <hr>
           
            <div class="row"  >
                <div class="col-md-9 " style="background-color: #f7f7f7" >
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                    
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-3 control-label h4">نام کاربری</label>

                        <div class="col-md-9" >
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-3 control-label h4">ایمیل</label>

                        <div class="col-md-9">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-3 control-label h4">گذرواژه</label>

                        <div class="col-md-9">
                            <input id="password" type="password" class="form-control" name="password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label for="password-confirm" class="col-md-3 control-label h4">تکرار گذرواژه</label>

                        <div class="col-md-9">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="fname" class="col-md-3 control-label h4">نام</label>

                        <div class="col-md-9">
                            <input type="text" name="fname" class="form-control">
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="lname" class="col-md-3 control-label h4">نام خانوادگی</label>
                        <div class="col-md-9">
                            <input type="text" name="lname" class="form-control">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="mobile" class="col-md-3 control-label h4">موبایل</label>
                        <div class="col-md-9">
                            <input type="text" name="mobile" class="form-control">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="phone" class="col-md-3 control-label h4">تلفن ثابت</label>
                        <div class="col-md-9">
                            <input type="text" name="phone" class="form-control">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="code" class="col-md-3 control-label h4">کد پستی</label>
                        <div class="col-md-9">
                            <input type="text" name="code" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address" class="col-md-3 control-label h4">آدرس</label>
                        <div class="col-md-9">
                            <input type="text" name="address" class="form-control">
                        </div>
                    </div>


                    <div class="form-group ">
                        <label for="details" class="col-md-3 control-label h4">توضیحات</label>
                        <div class="col-md-9">
                            <input type="text" name="details" class="form-control">
                        </div>
                    </div>

                    <div class="form-acions" style="text-align:center;margin-botton:100px ;">
                        <button type="submit" class="btn btn-success btn-lg"> ثبت اطلاعات</button>
                    </div><br>
                    </form>
                                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection


