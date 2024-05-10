<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bikenep</title>

    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <main id="main" class="container">
        {{-- <header id="header">
            <div class="logosearch">
                <div>
                    <div><img src="https://www.nepbike.com/_next/image?url=/images/nepbike-logo.png&w=256&q=75" alt="">
                    </div>
                </div>
                <div class="col text-center">
                    <form class="d-flex" role="search" method="post" action="/search">
                        <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-danger" type="submit">Search</button>
                    </form>
                </div>
            </div>


            <div class="navigation">


                <ul class="mt-3">
                    <li> HOME</li>
                    <li class="dropdown"> BIKES
                        <ul class="dropdown-content">
                            <li><a href="#">Find New Bikes</a></li>
                            <li><a href="#">Popular Brands</a></li>
                            <li><a href="#">Bikes By Budget</a></li>
                            <li><a href="#">Bikes By Body Type</a></li>
                            <li><a href="#">Showroom</a></li>
                            <li><a href="#">Tax Calculation</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"> SCOOTERS
                        <ul class="dropdown-content">
                            <li><a href="#">Find New Scooters</a></li>
                            <li><a href="#">Popular Brands</a></li>
                            <li><a href="#">Scooters By Body Type</a></li>
                            <li><a href="#">Showroom</a></li>

                        </ul>
                    </li>
                    <li class="dropdown"> ELECTRIC VEHICLE
                        <ul class="dropdown-content">
                            <li><a href="#">Electric Bike</a></li>
                            <li><a href="#">Electric Scooters</a></li>
                        </ul>
                    </li>

                    <li> COMPARE BIKES</li>

                    <li class="dropdown"> PRICE LIST
                        <ul class="dropdown-content">
                            <li><a href="#">Bike Price List</a></li>
                            <li><a href="#">Scooters Price List</a></li>

                        </ul>
                    </li>

                    <li class="dropdown"> NEWS & ARTICLE
                        <ul class="dropdown-content">
                            <li><a href="#">News</a></li>
                            <li><a href="#">Articles</a></li>

                        </ul>
                    </li>
                </ul>


            </div>

        </header> --}}

        @include('header')

        {{-- end of header section --}}

        <section id="hero-section">
            <div>
                <div>
                    <img src="https://www.nepbike.com/_next/image?url=https://assets.nepbike.com/assets/nepbike-homepage-hero-background-large.png&w=1920&q=75" class="img-fluid" alt="">
                </div>
                <div class="search-bike">
                    <div class="search-bike-heading">
                        <h1>Search the right bike in Nepal</h1>
                        <div class="search-bike-button">
                            <form method="post" action="/search">
                                @csrf
                                <input class="searchInput" placeholder="Search a bike, e.g. RM 250" autocomplete="off" name="search" value="">
                                <button type="submit">Search</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </section>

        {{-- end of hero-section --}}




        <section id="explore">
            <div class="explore-heading">
                <div>
                    <h3>Explore or Compare</h3>
                </div>

            </div>
            <div class="explore-content">
                <div>
                    <div>
                        <div>
                            <img src="{{ asset('img/motorbike.png') }}" alt="" style="width: 59px; height: 37px;" class="img-fluid">
                        </div>
                        <div>Bikes</div>
                    </div>
                    <div>
                        <div>
                            <div><img src="{{ asset('img/scooter.png') }}" alt="" style="width: 59px; height: 37px;" class="img-fluid"></div>
                        </div>

                        <div>Scooters</div>
                    </div>

                    <div>
                        <div>
                            <div><img src="{{ asset('img/electric-car.png') }}" alt="" style="width: 59px; height: 37px;" class="img-fluid">
                            </div>
                        </div>

                        <div>Electric Vehicle </div>

                    </div>

                    <div>
                        <div>
                            <img src="{{ asset('img/pie-graph.png') }}" alt="" style="width: 59px; height: 37px;" class="img-fluid">
                        </div>

                        <div>Compare</div>

                    </div>

                </div>

            </div>
        </section>


        {{-- end of explore serction --}}

        <section id="search-by-bikes">
            <div class="search-by-bikes-heading">
                <h3>Search bikes by</h3>
            </div>
            <div class="search-by-bikes-contents">
                <div class="specification">
                    <div class="brand">Brand</div>
                    <div class="budget">Budget</div>
                    <div class="engine">Engine cc</div>

                </div>
                <hr>

                <div class="brand-images">
                    <div><img src="{{ asset('img/brand/aima-logo.png') }}" class="img-fluid" alt="" style="width: 135px; height: 91px;">
                    </div>
                    <div><img src="{{ asset('img/brand/aprilia-logo.png') }}" class="img-fluid" alt="" style="width: 135px; height: 91px;">
                    </div>
                    <div><img src="{{ asset('img/brand/asian-beast-logo.png') }}" class="img-fluid" alt="" style="width: 135px; height: 91px;">
                    </div>
                    <div><img src="{{ asset('img/brand/bajaj-logo.webp') }}" class="img-fluid" alt="" style="width: 135px; height: 91px;">
                    </div>
                    <div><img src="{{ asset('img/brand/benelli-logo.webp') }}" class="img-fluid" alt="" style="width: 135px; height: 91px;">
                    </div>
                    <div><img src="{{ asset('img/brand/bmw-motrrad-logo.png') }}" class="img-fluid" alt="" style="width: 135px; height: 91px;">
                    </div>
                    <div><img src="{{ asset('img/brand/cfmoto-logo.webp') }}" class="img-fluid" alt="" style="width: 135px; height: 91px;">
                    </div>
                    <div><img src="{{ asset('img/brand/crossfire-logo.webp') }}" class="img-fluid" alt="" style="width: 135px; height: 91px;">
                    </div>
                    <div><img src="{{ asset('img/brand/crossx-logo.png') }}" class="img-fluid" alt="" style="width: 135px; height: 91px;">
                    </div>
                    <div><img src="{{ asset('img/brand/haojue-logo.webp') }}" class="img-fluid" alt="" style="width: 135px; height: 91px;">
                    </div>
                    <div><img src="{{ asset('img/brand/doohan-brand.webp') }}" class="img-fluid" alt="" style="width: 135px; height: 91px;">
                    </div>
                    <div><img src="{{ asset('img/brand/ducati-logo.webp') }}" class="img-fluid" alt="" style="width: 135px; height: 91px;">
                    </div>

                </div>

            </div>

            <div class="show-all"><a href="/findnewbike">Show All <img stroke="currentColor" fill="currentColor" stroke-width="0" height="18" width="18" src="{{ asset('img/arrow-svgrepo-com.svg') }}"></a>

                </svg></div>


        </section>

        {{-- end of search-by-bikes section --}}

        <section id="bikes-in-sportlight">
            <div class="bikes-in-sportlight-heading">
                <h3>Bikes in Spotlight</h3>
            </div>
            <div class="bikes-in-sportlight-contents">
                <div class="spotlight">
                    <div class="popular-bikes">Popular Bikes</div>
                    <div class="latest-bikes">Latest Bikes</div>
                    <div class="best-mileage-bikes">Best Mileage Bikes</div>
                    <div class="spotrs-biked">Sports Bikes</div>
                    <div class="cruiser-bikes">Cruiser Bikes</div>
                    <div class="commuter-bikes">Commuter Bikes</div>
                    <div class="dirt-bikes">Dirt Bikes</div>
                </div>
                <hr>
                <div class="bike-img">
                    @foreach ($bikes as $bike)
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('bike_image/' . $bike['image']) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><a href="/bikedetail/{{ $bike['id'] }}">{{ $bike['name'] }}</a></p>
                            <p class="card-text"><strong>Rs {{ $bike['price'] }}</strong></p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="show-all"> Show all Popular Bikes<img stroke="currentColor" fill="currentColor" stroke-width="0" height="18" width="18" src="{{ asset('img/arrow-svgrepo-com.svg') }}">

                </svg></div>

        </section>

        {{-- end of bikes-in-sportlight" section --}}


        <section id="latest-news">
            <div class="latest-news-heading">
                <h3>Latest News</h3>
            </div>
            <div class="latest-news-contents">
                <div><img src="{{ asset('img/bike/duke-200.webp') }}" class="img-fluid" alt="" style="width: 400px; height: 315px;"></div>
                <div><img src="{{ asset('img/bike/duke-200.webp') }}" class="img-fluid" alt="" style="width: 400px; height: 315px;"></div>
                <div><img src="{{ asset('img/bike/duke-200.webp') }}" class="img-fluid" alt="" style="width: 400px; height: 315px;"></div>
            </div>
            <div class="show-all">Show All News<img stroke="currentColor" fill="currentColor" stroke-width="0" height="18" width="18" src="{{ asset('img/arrow-svgrepo-com.svg') }}">

                </svg></div>
            </div>

        </section>

        {{-- end of latest-news section --}}

        <section id="latest-article">

            <div class="latest-article-heading">
                <h3>Latest Article</h3>
            </div>
            <div class="latest-article-contents">
                <div class="article-img">
                    <!---->
                    @foreach ($bikes as $bike)
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('bike_image/' . $bike['image']) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $bike['name'] }}</h5>
                            <p class="card-text">Some quick example text to build on the Bike Name and make up the
                                bulk of the card's content.</p>
                            <a href="/bikedetail/{{ $bike['id'] }}" class="btn btn-primary">Read Article</a>
                        </div>
                    </div>
                    @endforeach
                    <!---->
                </div>
            </div>
            <div class="show-all"></div>

        </section>

        {{-- end of latest-article section --}}

        @include('footer')

        {{-- <footer id="footer">
            <div class="footer-first">
                <div class="logo">
                    <div>
                        <img src="https://www.nepbike.com/_next/image?url=https://assets.nepbike.com/20230111/nepbike-logo-white-72ec8047.png&w=256&q=75"
                            alt="" class="img-fluid" style="width: 83px; height:45px">
                    </div>
                </div>

                <div>
                    <ul>
                        <li><a href="{{ route('aboutus') }}">About Us</a></li>
        <li><a href="{{ route('contactus') }}">Contact Us</a></li>
        <li><a href="{{ route('termcondition') }}">Terms & Conditions</a></li>
        <li><a href="{{ route('privacypolicy') }}">Privacy & Policy</a></li>
        </ul>
        </div>
        <div>
            <a href=""><img src="{{ asset('img/youtube.png') }}" alt="" class="img-fluid" style="width: 39px; height: 39px;"></a>
            <a href=""><img src="{{ asset('img/instagram.png') }}" alt="" class="img-fluid" style="width: 39px; height: 39px;"></a>
            <a href=""><img src="{{ asset('img/facebook.png') }}" alt="" class="img-fluid" style="width: 39px; height: 39px;"></a>
            <a href=""><img src="{{ asset('img/tiktok.png') }}" alt="" class="img-fluid" style="width: 39px; height: 39px;"></a>

        </div>

        </div>

        <div class="all-right-reserved">
            <div>
                <hr>
            </div>

            <p>©2024 Nepbike. All rights reserved</p>
        </div>
        </footer> --}}
        {{-- end of footer section --}}

    </main>
</body>

</html>