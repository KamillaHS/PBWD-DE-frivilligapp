@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default" id="profile-content">
                    <div class="panel-body" style="background-image: url(/images/10882.png);background-attachment: fixed; background-position: center center; background-size: cover; background-repeat: no-repeat">
                        <div class="panel-heading">Register</div>

                        <div id="profile-header">
                            <div id="header-col1">
                                <a href="/dashboard"> <i id="back-button" class="fas fa-angle-left"></i> </a>
                            </div>
                            <div id="header-col2">
                                <p id="header-text">Rediger Konto</p>
                            </div>
                            <div id="header-col3">
                                {{--<a href=""> <i id="settings-button" class="fas fa-cog"></i> </a>--}}
                            </div>
                        </div>

                        <div id="profile-content-content">

                            {!! Form::open(['action' => ['SettingsController@update', $user->id], 'method' => 'POST', 'enctype' => 'multipart/form-data', 'id' => 'form-user-edit']) !!}

                            <div class="form-group">
                                <div class="inner-addon left-addon">
                                    <label for="email" class="col-md-4 control-label"> </label>

                                    <div class="col-md-6" id="edit-form">
                                        <i id="user-icon" class="fas fa-envelope"></i>
                                        <input id="disabledInput" type="email" class="form-control" name="email" value="{{ $user->email }}" readonly="true">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <div class="inner-addon left-addon">
                                    <label for="name" class="col-md-4 control-label"> </label>

                                    <div class="col-md-6" id="edit-form">
                                        <i id="user-icon" class="fas fa-user"></i>
                                        <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}">

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <div class="inner-addon left-addon">
                                    <label for="description" class="col-md-4 control-label"> </label>

                                    <div class="col-md-6" id="edit-form">
                                        <i id="user-icon" class="fas fa-comment-alt"></i>
                                        <input id="description" type="text" class="form-control" name="description" value="{{$user->description}}">

                                        @if ($errors->has('description'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            {{--<div class="form-group">--}}
                                {{--<label>Profilbillede</label>--}}
                                {{--{{Form::file('profile_picture')}}--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                                {{--<label>CV</label>--}}
                                {{--{{Form::file('profile_cv')}}--}}
                            {{--</div>--}}




                            {{Form::submit('Bekræft Ændringer',['class' => 'btn btn-primary', 'id' => 'button-confirm-changes'])}}
                            {!! Form::close() !!}

                            {{--<div class="form-group">--}}
                                {{--<div class="col-md-6 col-md-offset-4">--}}
                                    {{--<button type="submit" class="btn btn-primary btn-block" id="button-register2">--}}
                                        {{--Bekræft Ændringer--}}
                                    {{--</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="btn btn-primary btn-block logout-button">
                                    {{ csrf_field() }}
                                    Log Ud
                                </form>
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
