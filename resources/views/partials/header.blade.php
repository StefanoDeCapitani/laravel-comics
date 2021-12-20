<header>
    <nav class="nav">
        <a class="nav__logo" href="{{ route("home") }}"><img src="/images/dc-logo.png" alt="DC Comics log"></a>
        <ul class="nav__ul">
            @foreach ($nav_links as $link)
                <li class="nav__li"><a href="{{ $link['route'] }}">{{ $link['name'] }}</a></li>
                @if(isset($link["sub_links"]))
                    <ul class="nav__sub-ul">
                        @foreach ($link['sub_links'] as $sub_link)
                            <li class="nav__li"><a href="{{ $sub_link['route'] }}">{{ $sub_link['name'] }}</a></li>
                        @endforeach
                    </ul>
                @endif
            @endforeach
        </ul>
        <div class="nav__search-bar">
            <input type="text" placeholder="Search">
            <i class="fas fa-search"></i>
        </div>
    </nav>
</header>