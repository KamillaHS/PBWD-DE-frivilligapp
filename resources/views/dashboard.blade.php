@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        <a href="/posts/create" class="btn btn-primary">Opret Job</a>
                        <h3>Dine Job Opslag</h3>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
