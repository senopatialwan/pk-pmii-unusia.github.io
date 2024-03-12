@extends('layouts.auth')

@section('title', 'Masuk | Admin')

@section('content')
    <div class="login-wrapper">
        <div id="login" class="login loginpage col-lg-offset-4 col-lg-4 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-offset-0 col-xs-12">
            <h1>
                <a href="#" title="Login Page" tabindex="-1">Ultra Admin</a>
            </h1>
            <form name="loginform" id="loginform" action="https://jaybabani.com/ultra-admin-html/preview/index.html" method="post">
                <p>
                    <label for="user_login">Username <br />
                        <input type="text" name="log" id="user_login" class="input" value="demo" size="20" />
                    </label>
                </p>
                <p>
                    <label for="user_pass">Password <br />
                        <input type="password" name="pwd" id="user_pass" class="input" value="demo" size="20" />
                    </label>
                </p>
                <p class="forgetmenot">
                    <label class="icheck-label form-label" for="rememberme">
                        <input name="rememberme" type="checkbox" id="rememberme" value="forever" class="skin-square-orange" checked> Remember me </label>
                </p>
                <p class="submit">
                    <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-orange btn-block" value="Sign In" />
                </p>
            </form>
            <p id="nav">
                <a class="pull-left" href="#" title="Password Lost and Found">Forgot password?</a>
                <a class="pull-right" href="ui-register.html" title="Sign Up">Sign Up</a>
            </p>
        </div>
    </div>
@endsection