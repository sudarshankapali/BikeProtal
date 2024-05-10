<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=d, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    <link href="{{ asset('/css/findnewbike.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        @include('header')
        <!-- Display success message -->
        @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif

        <!-- Display error message -->
        @if(session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
        @endif
        <div class="container">
            <form action="/update" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$bike['id']}}">
                <label>Name</label>
                <input type="text" name="name" value="{{$bike['name']}}"><br />
                <!--Price-->
                <label>Price</label>
                <input type="number" name="price" value="{{$bike['price']}}"><br />

                <!--Variant-->
                <label>Variant</label>
                <input type="text" name="variant" value="{{$bike['variant']}}"><br />

                <!--Category-->
                <label>Category</label>
                <input type="text" name="category" value="{{$bike['category']}}"><br />
                <hr>
                <!--Technical specification-->
                <label>Engine type</label>
                <input type="text" name="engine_type" value="{{$bike['engine_type']}}"><br />
                <label>Displacement</label>
                <input type="number" name="displacement" value="{{$bike['displacement']}}"><br />
                <label>Cooling System</label>
                <input type="text" name="cooling_system" value="{{$bike['cooling_system']}}"><br />
                <label>Top Speed</label>
                <input type="number" name="top_speed" value="{{$bike['top_speed']}}"><br />
                <label>Clutch Type</label>
                <input type="text" name="clutch_type" value="{{$bike['clutch_type']}}"><br />
                <label>Start Type</label>
                <input type="text" name="start_type" value="{{$bike['start_type']}}"><br />
                <label>Fuel Type</label>
                <input type="text" name="fuel_type" value="{{$bike['fuel_type']}}"><br />
                <label>Emission Type</label>
                <input type="text" name="emission_type" value="{{$bike['emission_type']}}"><br />
                <label>Fuel Supply</label>
                <input type="text" name="fuel_supply" value="{{$bike['fuel_supply']}}"><br />
                <label>Max Torque</label>
                <input type="number" name="max_torque" value="{{$bike['max_torque']}}"><br />
                <label>Mileage</label>
                <input type="number" name="mileage" value="{{$bike['mileage']}}"><br />
                <label>No of Gears</label>
                <input type="number" name="gears" value="{{$bike['gears']}}" min="0"><br />
                <hr>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        @include('footer')
    </div>
</body>

</html>