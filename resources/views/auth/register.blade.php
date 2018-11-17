@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="background-image: url(/images/1088.jpg);background-attachment: fixed; background-position: center center; background-size: cover; background-repeat: no-repeat">
                <div class="panel-body" id="frontpage-box">
                    <div class="panel-heading">Register</div>


                    <div id="profile-header">
                        <div id="header-col1">
                            <a href=""> <i id="back-button" class="fas fa-angle-left"></i> </a>
                        </div>
                        <div id="header-col2">
                            <p id="header-text">Opret Konto</p>
                        </div>
                        <div id="header-col3">
                            <a href=""> <i id="settings-button" class="fas fa-cog"></i> </a>
                        </div>
                    </div>


                    <div class="panel-body">
                        <form class="form-horizontal" id="register-form" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <div class="inner-addon left-addon">
                                    <label for="name" class="col-md-4 control-label"> </label>

                                    <div class="col-md-6">
                                        <i id="user-icon" class="fas fa-user"></i>
                                        <input id="name" type="text" class="form-control" name="name" placeholder="Navn" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="inner-addon left-addon">
                                    <label for="email" class="col-md-4 control-label"> </label>

                                    <div class="col-md-6">
                                        <i id="user-icon" class="fas fa-envelope"></i>
                                        <input id="email" type="email" class="form-control" name="email" placeholder="E-mail" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <div class="inner-addon left-addon">
                                    <label for="description" class="col-md-4 control-label"> </label>

                                    <div class="col-md-6">
                                        <i id="user-icon" class="fas fa-comment-alt"></i>
                                        <input id="description" type="text" class="form-control" name="description" placeholder="Beskrivelse">

                                        @if ($errors->has('description'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div id="register-pics" class="form-group{{ $errors->has('profile_picture') ? ' has-error' : '' }}">
                                <label for="profile_picture" class="col-md-4 control-label"> <i id="user-big-icon" class="fas fa-user"></i> </label>

                                <div class="col-md-6" id="reg_upload">
                                    <input id="profile_picture" type="file" class="custom-file-input" name="profile_picture">

                                    @if ($errors->has('profile_picture'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('profile_picture') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div id="register-pics" class="form-group{{ $errors->has('profile_cv') ? ' has-error' : '' }}">
                                <label for="profile_cv" class="col-md-4 control-label"> <i id="user-big-icon" class="fas fa-file-invoice"></i> </label>

                                <div class="col-md-6" id="reg_upload">
                                    <input id="profile_cv" type="file" class="custom-file-input" name="profile_cv">

                                    @if ($errors->has('profile_cv'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('profile_cv') }}</strong>
                                    </span>
                                    @endif
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
                                <div class="inner-addon left-addon">
                                    <label for="password-confirm" class="col-md-4 control-label"> </label>

                                    <div class="col-md-6">
                                        <i id="user-icon" class="fas fa-lock"></i>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <p class="text-secondary">Har du allerede en konto? <u><a href="/login">Login her</a></u> </p>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary btn-block" id="button-register2">
                                        Opret Konto
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
