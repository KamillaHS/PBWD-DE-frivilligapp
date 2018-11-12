@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default" id="profile-content" >

                    <div class="panel-body" style="background-image: url(https://www.imageupload.co.uk/images/2018/11/05/108812.png);background-position: center center; background-size: 200%; background-repeat: no-repeat">

                        <div>
                            <div class="input-group stylish-input-group">
                                <input type="text" class="form-control" id="search-bar" placeholder="Søg" >
                                <span class="input-group-addon">
                                    <button type="submit">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>

                            <div id="search-filters">
                                <button type="button" id="filter-cat" class="btn btn-primary btn-lg"> <i id="cat-icon" class="fas fa-list-ul"></i> </button>
                                <button type="button" id="filter-area" class="btn btn-primary btn-lg"> <i id="map-icon" class="fas fa-map-marker-alt"></i> </button>
                                <button type="button" id="filter-date" class="btn btn-primary btn-lg"> <i id="date-icon" class="fas fa-calendar-check"></i> </button>
                            </div>

                            <div id="recent-jobs">
                                <h4 id="newest-headline">Nyeste Jobs</h4>

                                <div id="profile-jobs">



                                    @if(count($posts) > 0)
                                        <div id="list">
                                            @foreach($posts as $post)
                                                <div id="job-post"><a href="/posts/{{$post->id}}">
                                                    <div id="job-post1">
                                                        <img style="width: 100%;" src="/storage/cover_images/{{$post->cover_image}}" alt="">
                                                    </div>
                                                    <div id="job-post2">
                                                        <p id="job-title">{{$post->title}}</p>
                                                        <br><div id="job-line"></div>
                                                        <br><p id="job-area">Område</p>
                                                    </div>
                                                    <div id="job-post3">
                                                        <p id="job-dato">Dato</p>
                                                    </div>
                                                </a></div>
                                            @endforeach
                                        </div>
                                    @else
                                        <p id="no-jobs">Du har ikke fuldendt nogen jobs...</p>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{--<div class="jumbotron text-center">--}}
        {{--<h1>{{$title}}</h1>--}}
        {{--<p>Hello there - there's soon gonna be a lot here!</p>--}}
        {{--<p>--}}
            {{--<a class="btn btn-primary btn-lg" href="/login">Login</a>--}}
            {{--<a class="btn btn-success btn-lg" href="/register">Register</a>--}}
        {{--</p>--}}
    {{--</div>--}}
@endsection