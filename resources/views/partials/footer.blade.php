@php
    $site_map_links = [
        [
          "tag" => "DC COMICS",
          "links_list" => [
             ["text" => "Characters", "href" => "#"] ,
             ["text" => "Comics", "href" => "#"] ,
             ["text" => "Movies", "href" => "#"] ,
             ["text" => "Tv", "href" => "#"] ,
             ["text" => "Games", "href" => "#"] ,
             ["text" => "Videos", "href" => "#"] ,
             ["text" => "News", "href" => "#"] ,
          ]
        ],
        [
          "tag" => "SHOP",
          "links_list" => [
             ["text" => "Shop DC", "href" => "#"] ,
             ["text" => "Shop DC Collectibles", "href" => "#"] ,
          ]
        ],
        [
          "tag" => "DC",
          "links_list" => [
            [ "text" => "Term Of Use", "href" => "#" ],
            [ "text" => "Privacy Policy (New)", "href" => "#" ],
            [ "text" => "Ad Choices", "href" => "#" ],
            [ "text" => "Advertising", "href" => "#" ],
            [ "text" => "Jobs", "href" => "#" ],
            [ "text" => "Subscriptions", "href" => "#" ],
            [ "text" => "Talent Workshops", "href" => "#" ],
            [ "text" => "CPSC Certificates", "href" => "#" ],
            [ "text" => "Ratings", "href" => "#" ],
            [ "text" => "Shop Help", "href" => "#" ],
            [ "text" => "Contact Us", "href" => "#" ],
          ]
        ],
        [
          "tag" => "SITES",
          "links_list" => [
            [ "text" => "DC", "href" => "#" ],
            [ "text" => "MAD Magazine", "href" => "#" ],
            [ "text" => "DC Kids", "href" => "#" ],
            [ "text" => "DC Universe", "href" => "#" ],
            [ "text" => "DC Power Visa", "href" => "#" ],
          ]
        ]
    ];

    $social_links = [
      [
        "img" => "/images/footer-facebook.png",
        "href" => "https:\\www.facebook.com"
      ],
      [
        "img" => "/images/footer-twitter.png",
        "href" => "https:\\www.twitter.com"
      ],
      [
        "img" => "/images/footer-youtube.png",
        "href" => "https:\\www.youtu.be"
      ],
      [
        "img" => "/images/footer-pinterest.png",
        "href" => "https:\\www.pinterest.com"
      ],
      [
        "img" => "/images/footer-periscope.png",
        "href" => "https:\\www.periscope.com"
      ],
    ]
@endphp

<footer class="footer">
    <div class="sitemap">
        <div class="sitemap__container container">
            <nav class="sitemap__nav">
                @foreach ($site_map_links as $category)
                    <h4 class="sitemap__category">{{ $category['tag'] }}</h4>
                    <ul class="ul">
                        @foreach ($category['links_list'] as $link)
                            <li class="li">
                                <a class="a" href="{{ $link['href'] }}">{{ $link['text'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                @endforeach
            </nav>
            <div class="right-reserved">
              <p>
                All site content TM and &reg;2020 DC Entertainment, unless otherwise <a class="a" href="#">noted here</a>. All right reserved.
              </p>
              <a class="a" href="#">Cookie Settings</a>
            </div>
            <img class="sitemap__logo" src="/images/dc-logo-bg.png" alt="">
        </div>
    </div>
    <div class="button-strip">
      <div class="container">
        <button class="btn btn--sign-up">sign-up now</button>
        <div class="social-links">
          follow us
          @foreach ($social_links as $social)
              <a href="{{ $social['href'] }}"><img src="{{ $social['img'] }}"></a>
          @endforeach
        </div>
      </div>
    </div>
</footer>