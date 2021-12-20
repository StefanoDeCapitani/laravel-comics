@php
    $links = [
        [
            "link" => "#",
            "img" => "/images/buy-comics-digital-comics.png",
            "text" => "digital comics"
        ],
        [
            "link" => "#",
            "img" => "/images/buy-comics-merchandise.png",
            "text" => "dc merchandise"
        ],
        [
            "link" => "#",
            "img" => "/images/buy-comics-subscriptions.png",
            "text" => "subscription"
        ],
        [
            "link" => "#",
            "img" => "/images/buy-comics-shop-locator.png",
            "text" => "comic shop locator"
        ],
        [
            "link" => "#",
            "img" => "/images/buy-dc-power-visa.svg",
            "text" => "dc power visa"
        ]
    ];
@endphp

<div class="buy-comics-section">
    <nav class="nav container">
        <ul class="ul nav__ul">
            @foreach ($links as $link)
                <li class="nav__li">
                    <a class="a nav__a" href="{{ $link['link'] }}">
                        <img src="{{ $link['img'] }}" alt="">
                        <p>{{ $link['text'] }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
</div>