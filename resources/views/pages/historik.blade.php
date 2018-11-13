@extends('layouts.app')

@section('content')
    {{--<h1>{{$title}}</h1>--}}
    {{--<p>Dette er historikken</p>--}}

    {{--@if(count($jobs) > 0)--}}
        {{--<ul class="list-group">--}}
            {{--@foreach($jobs as $job)--}}
                {{--<li class="list-group-item">{{$job}}</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
    {{--@endif--}}

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default" id="profile-content" >

                    <div class="panel-body" style="background-image: url(/images/10882.png);background-position: center center; background-size: 200%; background-repeat: no-repeat">

                        <div id="profile-header">
                            <div id="header-col1">
                                <a href=""> <i id="back-button" class="fas fa-angle-left"></i> </a>
                            </div>
                            <div id="header-col2">
                                <p id="header-text">Brugerprofil</p>
                            </div>
                            <div id="header-col3">
                                <a href=""> <i id="settings-button" class="fas fa-cog"></i> </a>
                            </div>
                        </div>

                        <div>
                            <div id="recent-jobs">
                                <h4 id="newest-headline">Aktuelle Jobs</h4>

                                <div id="profile-jobs">

                                    @if(count($jobs) > 0)
                                        <ul class="list-group">
                                            @foreach($jobs as $job)
                                                <li class="list-group-item">{{$job}}</li>
                                            @endforeach
                                        </ul>
                                    @endif

                                </div>
                            </div>

                            <div id="recent-jobs">
                                <h4 id="newest-headline">Afviklede Jobs</h4>

                                <div id="profile-jobs">

                                    @if(count($jobs) > 0)
                                        <ul class="list-group">
                                            @foreach($jobs as $job)
                                                <li class="list-group-item">{{$job}}</li>
                                            @endforeach
                                        </ul>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
