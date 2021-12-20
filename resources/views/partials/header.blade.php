@php
   $nav_links = [
        [
            "route" => "characters",
            "name" => "characters"
        ],
        [
            "route" => "comics",
            "name" => "comics"
        ],
        [
            "route" => "movies",
            "name" => "movies"
        ],
        [
            "route" => "tv",
            "name" => "tv"
        ],
        [
            "route" => "games",
            "name" => "games"
        ],
        [
            "route" => "collectibles",
            "name" => "collectibles"
        ],
        [
            "route" => "videos",
            "name" => "videos"
        ],
        [
            "route" => "fans",
            "name" => "fans"
        ],
        [
            "route" => "news",
            "name" => "news"
        ],
        [
            "name" => "shop",
            "route" => "shop",
            "sub_links" => [
                [
                    "name" => "dc shop",
                    "route" => "link"
                ],
                [
                    "name" => "print subscription",
                    "route" => "link"
                ],
                [
                    "name" => "comic shop locator",
                    "route" => "link"
                ]
            ]
        ],
    ]; 
@endphp


<header class="header">   
    <div class="blue-line">
        <div class="blue-line__container container">
            <div>  
                <a href="#" class="a">dc power&trade; visa&reg;</a> 
            </div>
            <div> 
                additional dc sites <i class="fas fa-caret-down blue-line__drop-down-caret"></i>
            </div>
        </div>
    </div>
    <nav class="nav container">
        <a class="a nav__logo" href="{{ route("home") }}"><img src="/images/dc-logo.png" alt="DC Comics log"></a>
        <ul class="ul nav__ul">
            @foreach ($nav_links as $link)
                <li class="nav__li">
                    <a class="a nav__link" href="{{ $link['route'] }}">
                        {{ $link['name'] }}
                @if(isset($link["sub_links"]))
                        <i class="fas fa-caret-down nav__drop-down-caret"></i>
                    </a>
                        <ul class="ul nav__sub-ul">
                            @foreach ($link['sub_links'] as $sub_link)
                                <li class="nav__sub-li"><a class="a nav__sub-link" href="{{ $sub_link['route'] }}">{{ $sub_link['name'] }}</a></li>
                            @endforeach
                        </ul>
                @else 
                    </a>
                @endif
                </li>
            @endforeach
        </ul>
        <div class="nav__search-bar">
            <input class="search-bar__input" type="text" placeholder="Search">
            <i class="fas fa-search search-bar__icon"></i>
        </div>
    </nav>
</header>