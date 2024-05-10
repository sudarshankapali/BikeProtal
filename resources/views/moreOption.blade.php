<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More Option</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    <link href="{{ asset('/css/findnewbike.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    @include('header')
    <div class="bike-lists container">
        @foreach($bikes as $bike)
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('bike_image/' . $bike['image']) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $bike['name'] }}</h5>
                <p class="card-text">Some quick example text to build on the Bike Name and make up the bulk of the card's content.</p>
                <a href="/edit/{{$bike['id']}}" class="btn btn-primary">Edit</a>
                <a href="/delete/{{$bike['id']}}" class="btn btn-danger">Delete</a>
            </div>
        </div>
        @endforeach
    </div>
    @include('footer')
</body>

</html>