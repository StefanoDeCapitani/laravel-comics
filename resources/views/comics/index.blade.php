@extends('layouts.default')

@section('page_title', "Homepage - DC Comics")

@section('content')
    <div class="jumbotron">
        <img src="/images/jumbotron.jpg">
    </div>
    <div class="current-series-section">
        <div class="container">
            <h1 class="section-title">current series</h1>
            <ul class="ul comics-grid">
                @foreach ($comics as $comic)
                    <li class="comic">
                        <a href="{{ route('comics.details', ['id'=>$loop->index]) }}">
                            <div class="ratio">
                                <img src="{{ $comic['thumb']}}" alt="">
                            </div>
                        </a>
                        <a href="{{ route('comics.details', ['id'=>$loop->index]) }}" class="a series-title">{{ $comic['series']}}</a>
                    </li>
                @endforeach
            </ul>
            <button class="btn btn--load-more">load more</button>
        </div>
    </div>
    @include('partials.buy_comics')
@endsection