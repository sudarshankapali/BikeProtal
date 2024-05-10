<header id="header">
    <div class="logosearch">
        <div>
            <div><img src="{{ asset('img/logo.svg') }}" alt="">
            </div>
        </div>
        <div>
            <input type="text">
            <button>Search</button>

        </div>
    </div>


    <div class="navigation">


        <ul>
            <li> HOME</li>
            <li class="dropdown"> BIKES
                <ul class="dropdown-content">
                    <li><a href="{{ route('findnewbike') }}">Find New Bikes</a></li>
                    <li class="dropdown-popularbrands" style="color: black">Popular Brands
                        <ul class="dropdown-content">
                            <li><a href="{{ route('findnewbike') }}">TVS</a></li>
                            <li><a href="{{ route('findnewbike') }}">Bajaj</a></li>
                            <li><a href="{{ route('findnewbike') }}">Yamaha</a></li>
                        </ul>

                    </li>
                    <li class="dropdown-bikesbybudget" style="color: black">Bikes By Budget

                        <ul class="dropdown-content">
                            <li><a href="{{ route('findnewbike') }}">Rs. 2Lakh-3Lakh</a></li>
                            <li><a href="{{ route('findnewbike') }}">Rs. 3Lakh-5Lakh</a></li>
                            <li><a href="{{ route('findnewbike') }}">Rs. 5Lakh-7Lakh</a></li>
                            <li><a href="{{ route('findnewbike') }}">Rs. 7Lakh-10Lakh</a></li>
                            <li><a href="{{ route('findnewbike') }}">Rs. 10Lakh-15Lakh</a></li>
                            <li><a href="{{ route('findnewbike') }}">Over Rs. 15Lakh</a></li>

                        </ul>
                    </li>
                    <li class="dropdown-bikesbybodytype"style="color: black">Bikes By Body Type
                        <ul class="dropdown-content">
                            <li><a href="{{ route('findnewbike') }}">Sports</a></li>
                            <li><a href="{{ route('findnewbike') }}">Street</a></li>
                            <li><a href="{{ route('findnewbike') }}">Cruiser</a></li>
                            <li><a href="{{ route('findnewbike') }}">Commuter</a></li>
                            <li><a href="{{ route('findnewbike') }}">Super</a></li>
                            <li><a href="{{ route('findnewbike') }}">Cafe Racer</a></li>
                            <li><a href="{{ route('findnewbike') }}">Sports Touring</a></li>
                            <li><a href="{{ route('findnewbike') }}">Adventure Touring</a></li>
                            <li><a href="{{ route('findnewbike') }}">Dirt</a></li>




                        </ul>
                    </li>
                    <li><a href="{{ route('showroom') }}">Showroom</a></li>
                    <li><a href="{{ route('taxcalculation') }}">Tax Calculation</a></li>
                </ul>
            </li>

            <li class="dropdown"> SCOOTERS
                <ul class="dropdown-content">
                    <li><a href="{{ route('findnewbike') }}">Find New Scooters</a></li>
                    <li class="dropdown-popularbrands" style="color: black">Popular Brands
                        <ul class="dropdown-content">
                            <li><a href="{{ route('findnewbike') }}">TVS</a></li>
                            <li><a href="{{ route('findnewbike') }}">Bajaj</a></li>
                            <li><a href="{{ route('findnewbike') }}">Yamaha</a></li>
                        </ul>

                    </li>
                    <li class="dropdown-scootersbybodytype" style="color: black">Scooters By Body Type
                        <ul class="dropdown-content">
                            <li><a href="{{ route('findnewbike') }}">Scooters</a></li>
                            <li><a href="{{ route('findnewbike') }}">Maxi Scooters</a></li>
                        </ul>

                    </li>
            </li>
            <li><a href="{{ route('showroom') }}">Showroom</a></li>

        </ul>
        </li>
        <li class="dropdown"> ELECTRIC VEHICLE
            <ul class="dropdown-content">
                <li><a href="{{ route('findnewbike') }}">Electric Bike</a></li>
                <li><a href="{{ route('findnewbike') }}">Electric Scooters</a></li>
            </ul>
        </li>

        <li> <a href="{{ route('comparebikes') }}" style="color: white; text-decoration:none;">COMPARE BIKES</a></li>

        <li class="dropdown"> PRICE LIST
            <ul class="dropdown-content">
                <li><a href="{{ route('bikepricelist') }}">Bike Price List</a></li>
                <li><a href="{{ route('scooterspricelist') }}">Scooters Price List</a></li>

            </ul>
        </li>

        <li class="dropdown"> NEWS & ARTICLE
            <ul class="dropdown-content">
                <li><a href="{{ route('news') }}">News</a></li>
                <li><a href="{{ route('article') }}">Articles</a></li>

            </ul>
        </li>
        </ul>


    </div>

</header>

{{-- end of header section --}}
