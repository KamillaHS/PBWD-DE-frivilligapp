@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Back to Posts</a>

    <h1>{{$post->title}}</h1>
    <br>
    <img style="width: 100%;" src="/storage/cover_images/{{$post->cover_image}}" alt="">
    <br><br>
    <div>
        {!!$post->body!!}
    </div>

    <br><small>Written at {{$post->created_at}} by {{$post->user->name}}</small>

    <hr>

    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'style' => 'float:right'])!!}
                 {{Form::hidden('_method', 'DELETE')}}
                  {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
             {!!Form::close()!!}
        @endif
    @endif
@endsection
