@extends('layouts.default')

@section('page_title', $comic['series'] . " | Details - DC Comics")

@section('content')
    <div class="jumbotron">
        <img src="/images/jumbotron.jpg">
    </div>
    <div class="blue-stripe"></div>
    <div class="comic-description">
        <div class="container">
            <h1> {{ $comic['series'] }} </h1>
        </div>
    </div>
    <div class="comic-specs">
        <div class="container">

        </div>
    </div>
    
@endsection