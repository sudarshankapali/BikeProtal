<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bike Articles</title>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/news.css') }}" rel="stylesheet">
</head>

<body>
    @include('header')
    <div class="top-heading">
        <div>
            <h2>Bike Articles</h2>
        </div>
        <div>
            <p>Articles related to motorcycles for better knowledge in bikes.</p>
        </div>
    </div>


    <section id="news">

        <div class="news-content">
            {{-- start --}}
            <div>
                <div class="news-image">
                    <img src="{{ asset('img/motorbike.png') }}" alt="" style="width: 407px; height: 280px;">
                </div>


                <div>


                    <div class="news-heading">
                        <h4>Popular Used Second-Hand Scooters in Nepal [2024 Updated]</h4>
                    </div>
                    <div class="news-detail">
                        <p>In this page you will find the guide to buy second-hand scooters along with the popular
                            models in Nepal. Explore Now!</p>
                    </div>
                    <div class="news-date">
                        <div>
                            <p>Posted On: 05/06/2023</p>
                        </div>
                        <div><a href="">Read More...</a></div>
                    </div>
                </div>
            </div>

            {{-- end --}}

            <div>
                <div class="news-image">
                    <img src="{{ asset('img/motorbike.png') }}" alt="" style="width: 407px; height: 280px;">
                </div>


                <div>


                    <div class="news-heading">
                        <h4>Crossfire & ItalicaMoto New Campaign Launched: “Upahar Mela No Jhamela”</h4>
                    </div>
                    <div class="news-detail">
                        <p>At amazing offers, discover the optimal blend of power, style, and longevity. Without
                            delay,
                            reserve
                            your ride!</p>
                    </div>
                    <div class="news-date">
                        <div>
                            <p>Posted On: 05/06/2023</p>
                        </div>
                        <div><a href="">Read More...</a></div>
                    </div>
                </div>
            </div>


            <div>
                <div class="news-image">
                    <img src="{{ asset('img/motorbike.png') }}" alt="" style="width: 407px; height: 280px;">
                </div>


                <div>


                    <div class="news-heading">
                        <h4>Crossfire & ItalicaMoto New Campaign Launched: “Upahar Mela No Jhamela”</h4>
                    </div>
                    <div class="news-detail">
                        <p>At amazing offers, discover the optimal blend of power, style, and longevity. Without
                            delay,
                            reserve
                            your ride!</p>
                    </div>
                    <div class="news-date">
                        <div>
                            <p>Posted On: 05/06/2023</p>
                        </div>
                        <div><a href="">Read More...</a></div>
                    </div>
                </div>
            </div>




            <div>
                <div class="news-image">
                    <img src="{{ asset('img/motorbike.png') }}" alt="" style="width: 407px; height: 280px;">
                </div>


                <div>


                    <div class="news-heading">
                        <h4>Crossfire & ItalicaMoto New Campaign Launched: “Upahar Mela No Jhamela”</h4>
                    </div>
                    <div class="news-detail">
                        <p>At amazing offers, discover the optimal blend of power, style, and longevity. Without
                            delay,
                            reserve
                            your ride!</p>
                    </div>
                    <div class="news-date">
                        <div>
                            <p>Posted On: 05/06/2023</p>
                        </div>
                        <div><a href="">Read More...</a></div>
                    </div>
                </div>
            </div>
        </div>

    </section>



    @include('footer')
</body>

</html>
