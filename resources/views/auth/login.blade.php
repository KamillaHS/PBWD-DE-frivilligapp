@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" id="login-big-box">
            <div class="panel panel-default" style="background-image: url(/images/1088.jpg); background-attachment: fixed; background-position: center center; background-size: cover; background-repeat: no-repeat">
                <div class="panel-body" id="frontpage-box">
                    <div class="panel-heading">Login</div>


                    <div id="profile-header">
                        <div id="header-col1">
                            <a href=""> <i id="back-button" class="fas fa-angle-left"></i> </a>
                        </div>
                        <div id="header-col2">
                            <p id="header-text">Login</p>
                        </div>
                        <div id="header-col3">
                            <a href=""> <i id="settings-button" class="fas fa-cog"></i> </a>
                        </div>
                    </div>

                    <div id="logo-box">
                        <img id="app_logo" src="/images/app_logo.png">
                    </div>

                    <div class="panel-body">
                        <form class="form-horizontal" id="form-body-custom" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="inner-addon left-addon">
                                    <label for="email" class="col-md-4 control-label">  </label>

                                    <div class="col-md-6">
                                        <i id="user-icon" class="fas fa-envelope"></i>
                                        <input id="email" type="email" class="form-control" name="email" placeholder="E-mail" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="inner-addon left-addon">
                                    <label for="password" class="col-md-4 control-label"> </label>

                                    <div class="col-md-6">
                                        <i id="user-icon" class="fas fa-lock"></i>
                                        <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">


                                <div class="col-md-8 col-md-offset-4" id="form-buttons-custom">
                                    <a class="btn btn-link" style="margin-left: 20%;" href="{{ route('password.request') }}">
                                        Glemt dit Password?
                                    </a>
                                    <br>
                                    <button type="submit" class="btn btn-primary btn-block" id="button-login">
                                        Login
                                    </button>
                                    <button type="button" class="btn btn-primary btn-block" id="button-register">
                                        <a href="{{ route('register') }}">
                                        Opret Konto
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
