<header class="header container">
   
        <div class="blue-line">
            <div class="container">
                <div>  
                    <a href="">dc power&trade; visa&reg;</a> 
                </div>
                <div> 
                    additional dc sites <i class="fas fa-caret-down blue-line__drop-down-caret"></i>
                </div>
            </div>
        </div>
        <div class="container">
            <nav class="nav">
                <a class="nav__logo" href="{{ route("home") }}"><img src="/images/dc-logo.png" alt="DC Comics log"></a>
                <ul class="nav__ul">
                    @foreach ($nav_links as $link)
                        <li class="nav__li">
                            <a class="nav__link" href="{{ $link['route'] }}">
                                {{ $link['name'] }}
                        @if(isset($link["sub_links"]))
                                <i class="fas fa-caret-down nav__drop-down-caret"></i>
                            </a>
                                <ul class="nav__sub-ul">
                                    @foreach ($link['sub_links'] as $sub_link)
                                        <li class="nav__sub-li"><a class="nav__sub-link" href="{{ $sub_link['route'] }}">{{ $sub_link['name'] }}</a></li>
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
        </div>
</header>