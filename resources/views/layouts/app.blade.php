<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="{{ asset('sass/custom.scss') }}" rel="stylesheet">
    <link href="{{ asset('sass/customNav.scss') }}" rel="stylesheet">
    <link href="{{ asset('sass/customLogin.scss') }}" rel="stylesheet">
    <link href="{{ asset('sass/customReg.scss') }}" rel="stylesheet">
    <link href="{{ asset('sass/customUser.scss') }}" rel="stylesheet">
    <link href="{{ asset('sass/customJobList.scss') }}" rel="stylesheet">
    <link href="{{ asset('sass/customJob.scss') }}" rel="stylesheet">
    <link href="{{ asset('sass/customUserEdit.scss') }}" rel="stylesheet">


    {{--@if(url("frivilligapp.local/posts/{{$post->id}}/edit"))--}}
        {{--<link href="{{ asset('sass/customJobEdit.scss') }}" rel="stylesheet">--}}
    {{--@endif--}}


</head>
<body>
    <div id="app">
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor', {height: 100});
        CKEDITOR.replace( 'body-editor', {height: 100} );
    </script>
</body>
</html>