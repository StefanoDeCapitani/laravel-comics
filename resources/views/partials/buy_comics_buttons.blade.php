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
            "text" => "shop dc"
        ],
        [
            "link" => "#",
            "img" => "/images/buy-comics-shop-locator.png",
            "text" => "comic shop locator"
        ],
        [
            "link" => "#",
            "img" => "/images/buy-comics-subscriptions.png",
            "text" => "subscriptions"
        ]
    ];
@endphp
<div class="buy-comics--details">
    <div class="container buy-comics--details__container">
        <div class="buy-comics-buttons">
                <div class="buy-comics-buttons__btn-group">
                    @foreach ($links as $link)
                        <a class="a buy-comics-buttons__btn" href="{{ $link['link'] }}">
                            <p>{{ $link['text'] }}</p>
                            <div class="cta-icon {{ "cta-icon--" . ($loop->index + 1) }}">
                                <img class="img" src="/images/cta-icons.png" alt="">
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>