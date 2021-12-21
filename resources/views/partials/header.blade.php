@php
   $nav_links = [
        [
            "route" => "characters.index",
            "name" => "characters"
        ],
        [
            "route" => "comics.index",
            "name" => "comics"
        ],
        [
            "route" => "movies.index",
            "name" => "movies"
        ],
        [
            "route" => "tv.index",
            "name" => "tv"
        ],
        [
            "route" => "games.index",
            "name" => "games"
        ],
        [
            "route" => "collectibles.index",
            "name" => "collectibles"
        ],
        [
            "route" => "videos.index",
            "name" => "videos"
        ],
        [
            "route" => "fans.index",
            "name" => "fans"
        ],
        [
            "route" => "news.index",
            "name" => "news"
        ],
        [
            "route" => "shop.index",
            "name" => "shop",
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

    $route_name = Request::route()->getName();
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
                <li class="nav__li {{ $route_name === $link['route'] ? "active" : "" }}">
                    <a class="a nav__link" href="{{ route($link['route']) }}">
                        {{ $link['name'] }}
                @if(isset($link["sub_links"]))
                        <i class="fas fa-caret-down nav__drop-down-caret"></i>
                    </a>
                        <ul class="ul nav__sub-ul">
                            @foreach ($link['sub_links'] as $sub_link)
                                <li class="nav__sub-li">
                                    <a class="a nav__sub-link" href="#">
                                        {{ $sub_link['name'] }}
                                    </a>
                                </li>
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