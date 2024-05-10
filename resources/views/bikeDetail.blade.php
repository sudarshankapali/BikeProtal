<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bike Detail</title>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    @include('header')
    <img src="{{ asset('bike_image/' . $detail['image']) }}" class="card-img-top" alt="...">
    <div class="container">
        <table class="table">
            <thead>
                <tr>

                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Category</th>
                    <th scope="col">Engine Type</th>
                    <th scope="col">Diaplacement</th>
                    <th scope="col">Cooling System</th>
                    <th scope="col">Top speed</th>
                    <th scope="col">Clutch Type</th>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <td>{{$detail['name']}}</td>
                    <td>Rs{{$detail['price']}}</td>
                    <td>{{$detail['category']}}</td>
                    <td>{{$detail['engine_type']}}</td>
                    <td>{{$detail['displacement']}}</td>
                    <td>{{$detail['cooling_system']}}</td>
                    <td>{{$detail['top_speed']}}</td>
                    <td>{{$detail['clutch_type']}}</td>
                </tr>
            </tbody>
        </table>

    </div>
    @include('footer')
</body>

</html>