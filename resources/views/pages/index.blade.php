@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default" id="profile-content" >

                    <div class="panel-body" style="background-image: url(https://www.imageupload.co.uk/images/2018/11/05/108812.png);background-position: center center; background-size: 200%; background-repeat: no-repeat">

                        <div>
                            <div id="searchfunction">
                                Søg funktion her
                            </div>

                            <div id="search-filters">
                                Filtre her
                            </div>

                            <div id="recent-jobs">
                                <h4 id="text-history-headline">Nyeste Jobs</h4>

                                <div id="profile-jobs">



                                    {{--@if(count($posts) > 0)--}}
                                        {{--<div id="list">--}}
                                            {{--@foreach($posts as $post)--}}
                                                {{--<div id="job-post"><a href="/posts/{{$post->id}}">--}}
                                                    {{--<div id="job-post1">--}}
                                                        {{--<img style="width: 100%;" src="/storage/cover_images/{{$post->cover_image}}" alt="">--}}
                                                    {{--</div>--}}
                                                    {{--<div id="job-post2">--}}
                                                        {{--<p id="job-title">{{$post->title}}</p>--}}
                                                        {{--<br><div id="job-line"></div>--}}
                                                        {{--<br><p id="job-area">Område</p>--}}
                                                    {{--</div>--}}
                                                    {{--<div id="job-post3">--}}
                                                        {{--<p id="job-dato">Dato</p>--}}
                                                    {{--</div>--}}
                                                {{--</a></div>--}}
                                            {{--@endforeach--}}
                                        {{--</div>--}}
                                    {{--@else--}}
                                        {{--<p id="no-jobs">Du har ikke fuldendt nogen jobs...</p>--}}
                                    {{--@endif--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>Hello there - there's soon gonna be a lot here!</p>
        <p>
            <a class="btn btn-primary btn-lg" href="/login">Login</a>
            <a class="btn btn-success btn-lg" href="/register">Register</a>
        </p>
    </div>
@endsection