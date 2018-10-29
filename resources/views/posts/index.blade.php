@extends('layouts.app')

@section('content')
    <h1>Posts</h1>

    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <h3><a href="/posts/{{$post->id}}">
                    {{$post->title}}
                    <br><small>Written at {{$post->created_at}}</small>
                </a></h3>
            </div>
        @endforeach

        {{--{{$posts->links()}}--}}
    @else
        <p>No posts found</p>
    @endif

@endsection