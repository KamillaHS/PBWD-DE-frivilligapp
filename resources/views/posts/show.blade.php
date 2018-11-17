@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default" id="profile-content" >
                    <div class="panel-body" style="background-image: url(/images/10882.png);background-position: center center; background-size: 200%; background-repeat: no-repeat">

                        <div>
                            <div id="profile-header">
                                <div id="header-col1">
                                    <a href="{{ URL::previous() }}"> <i id="back-button" class="fas fa-angle-left"></i> </a>
                                </div>
                                <div id="header-col2">
                                    <p id="header-text">Job Beskrivelse</p>
                                </div>
                                <div id="header-col3">
                                    @if(!Auth::guest())
                                        @if(Auth::user()->id == $post->user_id)
                                            <a href="/posts/{{$post->id}}/edit" > <i id="settings-button" class="fas fa-cog"></i> </a>
                                        @endif
                                    @endif
                                </div>
                            </div>

                            <div id="job-content-content">
                                <div id="job-content-col1">
                                    <img id="job-logo" src="/storage/cover_images/{{$post->cover_image}}" alt="">
                                </div>
                                <div id="job-content-col2">
                                    <h2 id="job-name">{{$post->title}}</h2>
                                    <br><div id="title-line"></div>
                                    <br><h3 id="job-title-area">Område</h3>
                                </div>
                                <div id="job-info">
                                    <table>
                                        <td id="info-headings">
                                            <h4>Udbyder</h4>
                                            <h4>Startdato</h4>
                                            <h4>Slutdato</h4>
                                            <h4>Kategori</h4>
                                        </td>
                                        <td id="info-info">
                                            <h4>{{$post->user->name}}</h4>
                                            <h4>Startdato</h4>
                                            <h4>Slutdato</h4>
                                            <h4>Kategori</h4>
                                        </td>
                                    </table>


                                    <h4>Beskrivelse</h4>
                                    <p id="job-text">
                                        {!!$post->body!!}
                                    </p>
                                    <h4>Krav</h4>
                                    <p id="job-text">
                                        Ingen krav
                                    </p>
                                </div>

                                <button type="button" class="btn btn-primary btn-block" id="apply-button">
                                    Søg Job
                                </button>
                            </div>


                            {{--<h1>{{$post->title}}</h1>--}}
                            {{--<br>--}}
                            {{--<img style="width: 100%;" src="/storage/cover_images/{{$post->cover_image}}" alt="">--}}
                            {{--<br><br>--}}
                            {{--<div>--}}
                                {{--{!!$post->body!!}--}}
                            {{--</div>--}}

                            {{--<br><small>Written at {{$post->created_at}} by {{$post->user->name}}</small>--}}

                            {{--<hr>--}}

                            {{--@if(!Auth::guest())--}}
                                {{--@if(Auth::user()->id == $post->user_id)--}}
                                    {{--<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>--}}
                                    {{--{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'style' => 'float:right'])!!}--}}
                                    {{--{{Form::hidden('_method', 'DELETE')}}--}}
                                    {{--{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}--}}
                                    {{--{!!Form::close()!!}--}}
                                {{--@endif--}}
                            {{--@endif--}}


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
