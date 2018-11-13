@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="background-image: url(https://www.imageupload.co.uk/images/2018/11/05/1088d8ff7.jpg);background-position: center center; background-size: 200%; background-repeat: no-repeat">
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
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label"> <i id="user-icon" class="fas fa-user"></i> </label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" placeholder="Navn" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label"> <i id="user-icon" class="fas fa-envelope"></i> </label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" placeholder="E-mail" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description" class="col-md-4 control-label"> <i id="user-icon" class="fas fa-comment-alt"></i> </label>

                                <div class="col-md-6">
                                    <input id="description" type="textarea" class="form-control" name="description" placeholder="Beskrivelse">

                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div id="register-pics" class="form-group{{ $errors->has('profile_picture') ? ' has-error' : '' }}">
                                <label for="profile_picture" class="col-md-4 control-label"> <i id="user-big-icon" class="fas fa-user"></i> </label>

                                <div class="col-md-6">
                                    <input id="profile-picture" type="file" class="custom-file-input" name="profile_picture">

                                    @if ($errors->has('profile_picture'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('profile_picture') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div id="register-pics" class="form-group{{ $errors->has('profile_cv') ? ' has-error' : '' }}">
                                <label for="profile_cv" class="col-md-4 control-label"> <i id="user-big-icon" class="fas fa-file-invoice"></i> </label>

                                <div class="col-md-6">
                                    <input id="profile_cv" type="file" class="custom-file-input" name="profile_cv">

                                    @if ($errors->has('profile_cv'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('profile_cv') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label"> <i id="user-icon" class="fas fa-lock"></i> </label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label"> <i id="user-icon" class="fas fa-lock"></i> </label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <p class="text-secondary">Har du allerede en konto? <u><a href="/login">Login her</a></u> </p>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary btn-block" id="button-register">
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
