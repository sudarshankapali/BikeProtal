<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Find new bikes</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    <link href="{{ asset('/css/findnewbike.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body>
    @include('header')

    <section class="findnewbike">

        <div class="findnewbikeheading">
            <h3>New Bike Search</h3>

        </div>
        <div class="findnewbikecontent">
            <div>
                <form>
                    <div class="form-group">
                        <label for="sort-by">Sort:</label>
                        <select id="sort-by">
                            <option value="popularity">Popularity</option>
                            <option value="price-low-to-high">Price: Low to High</option>
                            <option value="price-high-to-low">Price: High to Low</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="brand">Search by Brand:</label>
                        <select id="brand">
                            <option value="all">All brands</option>
                            <option value="toyota">Toyota</option>
                            <option value="honda">Honda</option>
                            <option value="ford">Ford</option>
                            <!-- Add more brands as needed -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="budget">Search by Budget:</label>
                        <select id="budget">
                            <option value="select">Select Budget</option>
                            <option value="10000">$10,000</option>
                            <option value="20000">$20,000</option>
                            <option value="30000">$30,000</option>
                            <!-- Add more budget options as needed -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="fuel-type">Fuel type:</label>
                        <select id="fuel-type">
                            <option value="select">Select Fuel Type</option>
                            <option value="petrol">Petrol</option>
                            <option value="diesel">Diesel</option>
                            <option value="hybrid">Hybrid</option>
                            <!-- Add more fuel types as needed -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="body-type">Body type:</label>
                        <select id="body-type">
                            <option value="select">Select Body Type</option>
                            <option value="sedan">Sedan</option>
                            <option value="suv">SUV</option>
                            <option value="hatchback">Hatchback</option>
                            <!-- Add more body types as needed -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="mileage">Mileage:</label>
                        <select id="mileage">
                            <option value="select">Select Mileage</option>
                            <option value="10">Below 10 km/l</option>
                            <option value="15">10 - 15 km/l</option>
                            <option value="20">15 - 20 km/l</option>
                            <!-- Add more mileage options as needed -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="engine-cc">Engine CC:</label>
                        <select id="engine-cc">
                            <option value="select">Select Engine CC</option>
                            <option value="1000">Below 1000 CC</option>
                            <option value="1500">1000 - 1500 CC</option>
                            <option value="2000">1500 - 2000 CC</option>
                            <!-- Add more engine CC options as needed -->
                        </select>
                    </div>
                    <button type="submit">Apply Filters</button>
                    </forms>
            </div>


            <div class="bike-lists">
                @foreach($bikes as $bike)
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('bike_image/' . $bike['image']) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><a href="/bikedetail/{{$bike['id']}}">{{ $bike['name'] }}</a></p>
                        <p class="card-text"><strong>Rs {{ $bike['price'] }}</strong></p>
                    </div>
                </div>
                @endforeach
            </div>

        </div>



    </section>





    @include('footer')
</body>

</html>