@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Back to Posts</a>

    <h1>{{$post->title}}</h1>

    <div>
        {!!$post->body!!}
    </div>

    <br><small>Written at {{$post->created_at}}</small>

    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'style' => 'float:right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection
