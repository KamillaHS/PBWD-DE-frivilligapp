@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    <p>Dette er historikken</p>

    @if(count($jobs) > 0)
        <ul class="list-group">
            @foreach($jobs as $job)
                <li class="list-group-item">{{$job}}</li>
            @endforeach
        </ul>
    @endif
@endsection
