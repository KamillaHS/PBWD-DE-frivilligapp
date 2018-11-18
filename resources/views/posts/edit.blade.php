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

                            <?php
                            $areainfo = [
                                '1' => 'Bornholm',
                                '2' => 'Fyn',
                                '3' => 'Københavns området',
                                '4' => 'Lolland-Falster',
                                '5' => 'Midtjylland',
                                '6' => 'Nordjylland',
                                '7' => 'Sjælland',
                                '8' => 'Sønderjylland'
                            ];

                            $categoryinfo = [
                                '1' => 'Bæredygtighed og Genbrug',
                                '2' => 'Flygtninge og Integration',
                                '3' => 'Lektiehjælp og Børneklubber',
                                '4' => 'Praktisk Arbejde'
                            ];

                            ?>

                            {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            <div class="form-group">
                                {{Form::label('title', 'Titel')}}
                                {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Titel'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('area', 'Område')}}
                                {{Form::select('area', $areainfo, $post->area, ['class' => 'form-control' ])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('startdate', 'Startdato')}}
                                {{Form::date('startdate', $post->startdate, ['class' => 'form-control', 'placeholder' => '01-01-2018'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('enddate', 'Slutdato')}}
                                {{Form::date('enddate', $post->enddate, ['class' => 'form-control', 'placeholder' => '01-01-2018'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('category', 'Kategori')}}
                                {{Form::select('category', $categoryinfo, $post->category, ['class' => 'form-control' ])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('body', 'Beskrivelse')}}
                                {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Beskrivelse'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('demands', 'Krav')}}
                                {{Form::textarea('demands', $post->demands, ['id' => 'body-editor', 'class' => 'form-control', 'placeholder' => 'Krav'])}}
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
