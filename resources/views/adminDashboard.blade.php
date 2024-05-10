<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main>
        <div class="container">
            <h1>This is the admin dashboard</h1>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif

            <!--enctype="multipart/form-data"-->
            <form action="/upload" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image">
                <br />
                <!--Name-->
                <label>Name</label>
                <input type="text" name="name"><br />
                <!--Price-->
                <label>Price</label>
                <input type="number" name="price"><br />

                <!--Variant-->
                <label>Variant</label>
                <input type="text" name="variant"><br />

                <!--Category-->
                <label>Category</label>
                <input type="text" name="category"><br />
                <hr>
                <!--Technical specification-->
                <label>Engine type</label>
                <input type="text" name="engine_type"><br />
                <label>Displacement</label>
                <input type="number" name="displacement"><br />
                <label>Cooling System</label>
                <input type="text" name="cooling_system"><br />
                <label>Top Speed</label>
                <input type="number" name="top_speed"><br />
                <label>Clutch Type</label>
                <input type="text" name="clutch_type"><br />
                <label>Start Type</label>
                <input type="text" name="start_type"><br />
                <label>Fuel Type</label>
                <input type="text" name="fuel_type"><br />
                <label>Emission Type</label>
                <input type="text" name="emission_type"><br />
                <label>Fuel Supply</label>
                <input type="text" name="fuel_supply"><br />
                <label>Max Torque</label>
                <input type="number" name="max_torque"><br />
                <label>Mileage</label>
                <input type="number" name="mileage"><br />
                <label>No of Gears</label>
                <input type="number" name="gears" min="0"><br />
                <hr>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <br />
            <a href="/more"><button class="btn btn-primary">More Options</button></a>
        </div>
    </main>
</body>

</html>