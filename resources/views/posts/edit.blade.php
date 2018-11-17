@extends('layouts.app')
<head>
    <link href="{{ asset('sass/customJobEdit.scss') }}" rel="stylesheet">
</head>

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default" id="profile-content" >
                    <div class="panel-body" style="background-image: url(/images/10882.png);background-position: center center; background-size: 200%; background-repeat: no-repeat">

                        <div id="profile-header">
                            <div id="header-col1">
                                <a href="{{ URL::previous() }}"> <i id="back-button" class="fas fa-angle-left"></i> </a>
                            </div>
                            <div id="header-col2">
                                <p id="header-text">Rediger Job</p>
                            </div>
                            <div id="header-col3">

                            </div>
                        </div>

                        <div id="edit-post-page">

                            {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            <div class="form-group">
                                {{Form::label('title', 'Titel')}}
                                {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Titel'])}}
                            </div>
                            <div class="form-group">
                                <label>Område</label>
                                <input type="text" class="form-control" placeholder="Område">
                            </div>
                            <div class="form-group">
                                <label>Startdato</label>
                                <input type="text" class="form-control" placeholder="Dato">
                            </div>
                            <div class="form-group">
                                <label>Slutdato</label>
                                <input type="text" class="form-control" placeholder="Dato">
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="form-control" id="exampleSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                {{Form::label('body', 'Beskrivelse')}}
                                {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Beskrivelse'])}}
                            </div>
                            <div class="form-group">
                                <label>Krav</label>
                                <input type="text" id="body-editor" class="form-control" placeholder="Krav">
                            </div>
                            <div class="form-group">
                                <label>Udbyder Logo</label>
                                {{Form::file('cover_image')}}
                            </div>
                            {{Form::hidden('_method', 'PUT')}}
                            {{Form::submit('Bekræft Ændringer',['class' => 'btn btn-primary', 'id' => 'button-confirm-changes'])}}
                            {!! Form::close() !!}

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
