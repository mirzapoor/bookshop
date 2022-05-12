@extends('layouts.app')
@section('content')
    <div class="container " style="width: 1000px">
        <div class="row">
            <div class="col-md-8 " style="margin-right: 50px; ">


                <div id="content" class="text-right mr-5" style="font-size: 10px ">
                    <div class="inner" style="min-height:700px; ">
                        <div class='class-md-9'>
                            <div class="row ">
                                <h1>صفحه ورود کاربر</h1>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-md-9 " style="background-color: #f7f7f7">
                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                    {{ csrf_field() }}



                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <span for="email" class="text-right col-md-4 control-label h4  mt-5">نام کاربری</span>
                                        <div>
                                            <input id="email" type="email" class="form-control box mt-4 " name="email"
                                                value="{{ old('email') }}" placeholder="ایمیل خود را وارد کنید" />
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <span for="password" class="col-md-4 control-label text-right h4 ">رمز عبور</span>

                                        <div>
                                            <input id="password" type="password" class="form-control box mt-4 " name="password"
                                                placeholder="رمز عبور خود را وارد کنید">

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <div class="checkbox">
                                                <label for="remember-me">
                                                    <input type="checkbox" name="remember" id="remember-me"> مرا به خاطر
                                                    بسپار
                                                </label>
                                            </div>
                                        </div>
                                    </div>




                                    <a type="submit" href="{{ url('/') }}" class="btn col-md-12 text-center">ورود</a>
                                    <p class="text-center "><a href="{{ url('/password/reset') }}"> رمز خود را فراموش
                                            کرده اید ؟ </a></p>
                                    <p class="text-right text-dark ">عضو جدید:
                                    </p>
                                    <a href="{{ url('/register') }}" class="btn  col-md-12 text-center mb-5">ساخت حساب</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
