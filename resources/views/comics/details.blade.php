@extends('layouts.default')

@section('page_title', $comic['series'] . " | Details - DC Comics")

@section('content')
    <div class="jumbotron">
    </div>
    <div class="blue-stripe">
        <div class="container thumbnail-container">
            <img class="thumbnail" src="{{ $comic['thumb'] }}" alt="">
        </div>
    </div>
    <div class="comic-description">
        <div class="container comic-description__container">
            <article class="comic-description__article">
                <h1 class="h1"> {{ $comic['title'] }} </h1>
                <div class="green-box">
                    <div class="price-container">U.S. price:  
                        <span class="price"> {{ $comic['price'] }} </span>
                        <span class="availability">available</span>
                    </div>
                    <button class="btn btn--availability">Check Availability 
                        <i class="fas fa-caret-down nav__drop-down-caret"></i>
                    </button>
                </div>
                <p class="description">
                    {!! $comic['description'] !!}
                </p>
            </article>
            <aside class="comic-description__aside">
                advertisement
                <img src="/images/adv.jpg" alt="Adv">
            </aside>
        </div>
    </div>
    <div class="comic-specs">
        <div class="container comic-specs__container">
            <div class="left-column">
                <h2 class="comic-spec__category">Talent</h2>
                <div class="key-value">
                    <div class="key">Art by: </div>
                    <div class="value">
                        @foreach ($comic['artists'] as $artist)
                            <a class="a" href="#">{{ $artist }}</a>@if ($loop->index < count($comic['artists']) -  1),@endif
                        @endforeach
                    </div>
                </div>
                <div class="key-value">
                    <div class="key">Written by: </div>
                    <div class="value">
                        @foreach ($comic['writers'] as $writer)
                            <a class="a" href="#">{{ $writer }}</a>@if ($loop->index < count($comic['writers']) - 1),@endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="right-column">
                <h2 class="comic-spec__category">Specs</h2>
                <div class="key-value">
                    <div class="key">Series: </div>
                    <div class="value">
                            <a class="a" href="#">{{ $comic['series'] }}</a>
                    </div>
                </div>
                <div class="key-value">
                    <div class="key">U.S. Price: </div>
                    <div class="value">
                            {{ $comic['price'] }}
                    </div>
                </div>
                <div class="key-value">
                    <div class="key">On Sale Date: </div>
                    <div class="value">
                            {{ $comic['sale_date'] }}
                    </div>
                </div>
            </div>
        </div>     
    </div>
    
    @include("partials.buy_comics_buttons")
    
@endsection