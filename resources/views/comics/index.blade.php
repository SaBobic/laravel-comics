@php
$main_menu = config('main_menu');
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="css/app.css">
    </head>

    <body>
        <!-- Header -->
        <header id="main-header">
            <nav class="container">
                <figure>
                    <a href="#">
                        <img src="/img/dc-logo.png" alt="DC Comics Logo">
                    </a>
                </figure>

                <ul>
                    @foreach ($main_menu as $item)
                        <li>
                            <a href="{{ $item['url'] }}">{{ $item['anchor'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </header>
        <!-- Main -->
        <main>
            <!-- Jumbotron -->
            <section class="jumbotron"></section>
            <!-- Series section -->
            <section class="series-list">
                <div class="container">
                    <div class="label bg-primary">
                        <h2>CURRENT SERIES</h2>
                    </div>
                    <div class="row">
                        @foreach ($comics as $comic)
                            <div class="col">
                                <figure>
                                    <div>
                                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                                    </div>
                                    <figcaption>{{ $comic['series'] }}</figcaption>
                                </figure>
                            </div>
                        @endforeach
                    </div>
                    <button>LOAD MORE</button>
                </div>
            </section>
            <!-- Tabs section -->
            <section id="tabs" class="bg-primary">
                <div class="row container">
                    <div class="col">
                        <figure>
                            <img src="img/buy-comics-digital-comics.png" alt="item.text">
                            <figcaption>DIGITAL COMICS</figcaption>
                        </figure>
                    </div>
                    <div class="col">
                        <figure>
                            <img src="img/buy-comics-merchandise.png" alt="item.text">
                            <figcaption>DC MERCHANDISE</figcaption>
                        </figure>
                    </div>
                    <div class="col">
                        <figure>
                            <img src="img/buy-comics-subscriptions.png" alt="item.text">
                            <figcaption>SUBSCRIPTION</figcaption>
                        </figure>
                    </div>
                    <div class="col">
                        <figure>
                            <img src="img/buy-comics-shop-locator.png" alt="item.text">
                            <figcaption>COMIC SHOP LOCATOR</figcaption>
                        </figure>
                    </div>
                    <div class="col">
                        <figure>
                            <img src="img/buy-dc-power-visa.svg" alt="item.text">
                            <figcaption>DC POWER VISA</figcaption>
                        </figure>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <footer>
            <section id="main-footer-top">
                <div class="container">
                    <nav>
                        <div>
                            <h4>DC COMICS</h4>
                            <ul>
                                <li><a :href="#">Characters</a></li>
                                <li><a :href="#">Comics</a></li>
                                <li><a :href="#">Movies</a></li>
                                <li><a :href="#">TV</a></li>
                                <li><a :href="#">Games</a></li>
                                <li><a :href="#">Vides</a></li>
                                <li><a :href="#">News</a></li>
                            </ul>
                            <h4>SHOP</h4>
                            <ul>
                                <li><a :href="#">Shop DC</a></li>
                                <li><a :href="#">Shop DC Collectibles</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4>DC</h4>
                            <ul>
                                <li><a :href="#">Term Of Use</a></li>
                                <li><a :href="#">Privacy policy (New)</a></li>
                                <li><a :href="#">Ad Choices</a></li>
                                <li><a :href="#">Advertising</a></li>
                                <li><a :href="#">Jobs</a></li>
                                <li><a :href="#">Subcriptions</a></li>
                                <li><a :href="#">Talent Workshops</a></li>
                                <li><a :href="#">CPSC Certificates</a></li>
                                <li><a :href="#">Ratings</a></li>
                                <li><a :href="#">Shop Help</a></li>
                                <li><a :href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4>SITES</h4>
                            <ul>
                                <li><a :href="#">DC</a></li>
                                <li><a :href="#">MAD Magazine</a></li>
                                <li><a :href="#">DC Kids</a></li>
                                <li><a :href="#">DC Universe</a></li>
                                <li><a :href="#">DC Power Visa</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </section>
            <section id="main-footer-bottom">
                <nav class="container">
                    <a href="#" class="newsletter-sign-up">SIGN-UP NOW!</a>

                    <div class="follow-us c-primary">
                        <div>FOLLOW US</div>
                        <div>
                            <a href="#"><img src="/img/footer-facebook.png" alt="Facebook Logo"></a>
                            <a href="#"><img src="/img/footer-twitter.png" alt="Twitter Logo"></a>
                            <a href="#"><img src="/img/footer-youtube.png" alt="Youtube Logo"></a>
                            <a href="#"><img src="/img/footer-pinterest.png" alt="Pinterest Logo"></a>
                            <a href="#"><img src="/img/footer-periscope.png" alt="Periscope Logo"></a>
                        </div>
                    </div>
                </nav>
            </section>
        </footer>
    </body>
</html>
