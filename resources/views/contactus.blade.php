<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <main>
        @include('header')


        <h2>Contact Us</h2>
        <p>If you have any queries or even just wanted to give us feedback, we are always here to help you. We welcome
            your feedback and criticism about NepBike and aim to improve your experience on our site.</p>
        <p>In case you are trying to get in touch with us regarding any issues or inquiries, email us at
            support@nepbike.com or message us on our Facebook page.</p>

        <h3>Contact Details</h3>
        <ul>
            <li>Address: Madhyapur Thimi-5, Bhaktapu</li>
            <li>Email: support@nepbike.com</li>
            <li>Open Hours: Sun to Fri 10 AM to 6 PM</li>
        </ul>


        @include('footer')

    </main>

</body>

</html>
