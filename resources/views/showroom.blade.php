<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="{{ asset('/css/showroom.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

</head>


<body>
    @include('header')

    <section class="showroom">


        <h3>Search Your Nearest Bike Showroom</h3>
        <p>Finding a bike/scooter showroom in Nepal was never this easy. Just
            select the brand and you will get detailed information of authorized dealers of that particular brand. You
            can further choose your district to get the nearest showroom in your area.</p>

        <div class="container">
            <form>
                <div class="form-group">
                    <label for="brand">Brand *</label>
                    <select id="brand">
                        <option value="">Select brand</option>
                        <option value="brand1">Brand 1</option>
                        <option value="brand2">Brand 2</option>
                        <option value="brand3">Brand 3</option>
                        <!-- Add more brand options as needed -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="district">District:</label>
                    <select id="district">
                        <option value="all">All districts</option>
                        <option value="district1">District 1</option>
                        <option value="district2">District 2</option>
                        <option value="district3">District 3</option>
                        <!-- Add more district options as needed -->
                    </select>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
        <h3>Nepbike Showroom Locator</h3>
        <p>You are planning to buy a new bike or simply thinking of doing test drives. You wanted to call your nearest
            showroom for more information. But don’t know how many showrooms are in your locality or which one is
            suitable for you? Well, you have come to the right place. </p>
        <p>Nepbike’s showroom locator gives you access to the names, contact information, and addresses of every bike
            dealership. We provide 1000+ showroom details for more than 35 motorcycle and scooter brands, which are
            available in Nepal. Locate the nearest authorized dealer in all 77 districts throughout the country.

        </p>













    </section>





    @include('footer')
</body>

</html>
