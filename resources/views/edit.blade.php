@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default" style="background-image: url(/images/10882.png);background-attachment: fixed; background-position: center center; background-size: cover; background-repeat: no-repeat">
                    <div class="panel-body" id="frontpage-box">
                        <div class="panel-heading">Register</div>

                        <div id="profile-header">
                            <div id="header-col1">
                                <a href=""> <i id="back-button" class="fas fa-angle-left"></i> </a>
                            </div>
                            <div id="header-col2">
                                <p id="header-text">Rediger Konto</p>
                            </div>
                            <div id="header-col3">
                                {{--<a href=""> <i id="settings-button" class="fas fa-cog"></i> </a>--}}
                            </div>
                        </div>

                        <div id="profile-content-content">
                            {{ $user->name }}


                            <h1>Hello</h1>

                            {!! Form::open(['action' => ['SettingsController@update', $user->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                <div class="form-group">
                                {{Form::label('name', 'Navn')}}
                                {{Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Navn'])}}
                            </div>


                            {{--{{Form::hidden('_method', 'PUT')}}--}}
                            {{Form::submit('Bekræft Ændringer',['class' => 'btn btn-primary', 'id' => 'button-confirm-changes'])}}
                            {!! Form::close() !!}

                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="btn btn-primary btn-block" id="button-register">
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
