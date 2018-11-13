@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" id="profile-content" >


                <div class="panel-body" style="background-image: url(/images/10882.png);background-position: center center; background-size: 200%; background-repeat: no-repeat">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
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

                        <div id="profile-content-content">
                            <div id="profile-content-col1">
                                <img src="https://torexgroup.com/wp-content/uploads/2017/06/empty_avatar.jpg" alt="Profilbillede" id="user-profile-picture">
                                {{--{{ Auth::user()->profile_picture }}--}}
                            </div>
                            <div id="profile-content-col2">
                                <h2 id="profile-name">{{ Auth::user()->name }}</h2>
                            </div>
                            <div id="profile-text">
                                <h4>Beskrivelse</h4>
                                <p>
                                    {{ Auth::user()->description }}
                                </p>
                            </div>

                            <button type="button" class="btn btn-primary btn-block" id="cv-button">
                                CV
                            </button>
                        </div>

                        <div id="profile-history">
                            <a href="/posts/create" class="btn btn-primary btn-block" id="create-button">Opret Job</a>
                            <h4 id="text-history-headline">Seneste Jobs</h4>


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
                                @else
                                    <p id="no-jobs">Du har ikke fuldendt nogen jobs...</p>
                                @endif



                                {{--@if(count($posts) > 0)--}}
                                    {{--<table class="table table-striped">--}}
                                        {{--@foreach($posts as $post)--}}
                                            {{--<tr id="job-post">--}}
                                                {{--<td>--}}
                                                    {{--<img style="width: 10%;" src="/storage/cover_images/{{$post->cover_image}}" alt="">--}}
                                                {{--</td>--}}
                                                {{--<td>--}}
                                                    {{--{{$post->title}}--}}
                                                    {{--Område--}}
                                                {{--</td>--}}
                                                {{--<td>--}}
                                                    {{--Dato--}}
                                                {{--</td>--}}
                                            {{--</tr>--}}
                                        {{--@endforeach--}}
                                    {{--</table>--}}
                                {{--@else--}}
                                    {{--<p id="no-jobs">Du har ikke fuldendt nogen jobs...</p>--}}
                                {{--@endif--}}
                            </div>


                            {{--@if(count($posts) > 0)--}}
                                {{--<table class="table table-striped">--}}
                                    {{--<tr>--}}
                                        {{--<th>Title</th>--}}
                                        {{--<th></th>--}}
                                        {{--<th></th>--}}
                                    {{--</tr>--}}
                                    {{--@foreach($posts as $post)--}}
                                        {{--<tr>--}}
                                            {{--<td>{{$post->title}}</td>--}}
                                            {{--<td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>--}}
                                            {{--<td>--}}
                                                {{--{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}--}}
                                                {{--{{Form::hidden('_method', 'DELETE')}}--}}
                                                {{--{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}--}}
                                                {{--{!!Form::close()!!}--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}
                                    {{--@endforeach--}}
                                {{--</table>--}}
                            {{--@else--}}
                                {{--<p id="no-jobs">Du har ikke fuldendt nogen jobs...</p>--}}
                            {{--@endif--}}
                        </div>
                    </div>



            </div>
        </div>
    </div>
</div>
@endsection
