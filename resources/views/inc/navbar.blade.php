<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">--}}
                {{--<span class="sr-only">Toggle navigation</span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
            {{--</button>--}}
            <a class="navbar-brand" href="/">{{config('app.name', 'Frivillig App')}}</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/historik">Historik</a></li>
                <li><a href="/posts">Blog</a></li>
            </ul>
        </div> <!-- nav end  -->
    </div>
</nav>