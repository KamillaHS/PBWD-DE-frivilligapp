@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Back to Posts</a>

    <h1>{{$post->title}}</h1>

    <div>
        {{$post->body}}
    </div>

    <br><small>Written at {{$post->created_at}}</small>

@endsection
