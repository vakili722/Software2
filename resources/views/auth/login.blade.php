@extends('auth.master')

@section('title', 'ورود به سیستم')

@section('body')
<div class="login-box">
    <div class="login-logo">
        <a href="{{ url() }}"><b>Workflow</b> BPM</a>
    </div>

    @include('auth.message')

    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="{{ url('auth/login') }}" method="post">
            <div class="form-group has-feedback">
                <input type="email" name="email" class="form-control" placeholder="Email" required="">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="Password" required="">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
            {!! csrf_field() !!}
        </form>

        <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in
                using
                Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in
                using
                Google+</a>
        </div>
        <!-- /.social-auth-links -->

        <a href="{{ url('password/email') }}">I forgot my password</a><br>
        <a href="{{ url('auth/register') }}" class="text-center">Register a new membership</a>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@endsection