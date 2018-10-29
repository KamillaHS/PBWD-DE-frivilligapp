@extends('layouts.app')

@section('content')
    <a href="/posts/{{$post->id}}" class="btn btn-default">Back to Post</a>

    <h1>Edit Post</h1>

    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('submit',['class' => 'btn btm-primary'])}}
    {!! Form::close() !!}

@endsection