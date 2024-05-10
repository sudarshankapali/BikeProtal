<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bike Price List</title>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bikepricelist.css') }}" rel="stylesheet">
</head>

<body>
    <main class="main">
        @include('header')
        <section id="bike-price">
            <div class="bike-price-heading">
                <div>
                    <h2>Bike Price in Nepal for All Models (2024 April UPDATED)</h2>
                </div>

                <div>
                    <p>Bike price in Nepal overview page contains the latest cost of all motorcycles from various
                        manufacturers.
                        Currently, there are several bikes ranging from low-cost to high-end models that are available
                        in
                        the
                        Nepalese market. <br>
                        And if you are in a hurry or searching for your favourite brand bikes pricing, we offer an
                        accurate
                        and
                        updated Bike price in Nepal 2024, all on one page.</p>
                </div>



            </div>

            <div class="form">
                <form action="#">
                    <label for="brand">Select Brand:</label>
                    <select id="brand" name="brand">
                        <option value="all">All brands</option>
                        <option value="brand1">Brand 1</option>
                        <option value="brand2">Brand 2</option>
                        <option value="brand3">Brand 3</option>
                        <!-- Add more options as needed -->
                    </select>

                    <label for="model">Select Model:</label>
                    <select id="model" name="model">
                        <option value="all">All models</option>
                        <option value="model1">Model 1</option>
                        <option value="model2">Model 2</option>
                        <option value="model3">Model 3</option>
                        <!-- Add more options as needed -->
                    </select>

                    <button type="submit">Submit</button>
                </form>
            </div>

        </section>


        <section class="list">
            <div class="brand">
                <div class="brand-name">
                    <h2>Asian Beast Price List 2024</h2>
                </div>

                <div class="brand-img">
                    <div>
                        <img src="{{ asset('img/scooter.png') }}" alt="" style="width: 100px; height: 100px;">
                    </div>
                </div>

                <div class="discribe">
                    <p>Asian Beast is an on and off-road motorcycle brand that was established in 2010. Their bikes
                        are
                        manufactured in China and imported into the Nepalese market by Asian Automobiles. Find the
                        latest
                        Asian Beast bike price in Nepal below.</p>
                </div>

                <div class="table">
                    <div class="table-container">
                        <table class="price-table">
                            <thead>
                                <tr>
                                    <th>Model</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ASIAN BEAST AB250 V1</td>
                                    <td>Rs. 4,90,000</td>
                                </tr>
                                <tr>
                                    <td>Asian Beast Hyper X (CNC Customised)</td>
                                    <td>Rs. 6,75,000</td>
                                </tr>
                                <tr>
                                    <td>Asian Beast Hyper X (Motard)</td>
                                    <td>Rs. 5,55,000</td>
                                </tr>
                                <tr>
                                    <td>Asian Beast Hyper X (Dirt)</td>
                                    <td>Rs. 5,55,000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>



            </div>

            {{-- end --}}

            <div class="brand">
                <div class="brand-name">
                    <h2>Bajaj Price List 2024</h2>
                </div>

                <div class="brand-img">
                    <div>
                        <img src="{{ asset('img/scooter.png') }}" alt="" style="width: 100px; height: 100px;">
                    </div>
                </div>

                <div class="discribe">
                    <p>Bajaj is the world's third-largest two-wheelers manufacturer which was founded in 1930 in
                        Rajasthan,
                        India. Their bikes are sold in over 70 countries, and they also appear to be one of the
                        top-selling
                        brands in Nepal for decades. HH Bajaj under the Golchha Organization is the official
                        distributor of
                        Bajaj Auto in the Nepalese market. They always provide amazing sales offers, easy financing
                        schemes,
                        and repair services which have made it a trusted motorcycle brand. Here is the latest Bajaj
                        bike
                        price in Nepal.</p>
                </div>

                <div class="table">
                    <div class="table-container">

                        <table class="price-table">
                            <thead>
                                <tr>
                                    <th>Model</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Bajaj Avenger 160 Street (ABS)</td>
                                    <td>Rs. 3,68,900</td>
                                </tr>
                                <tr>
                                    <td>Bajaj Avenger 220 Cruise</td>
                                    <td>Rs. 4,12,900</td>
                                </tr>
                                <tr>
                                    <td>Bajaj Discover 125 (Disc)</td>
                                    <td>Rs. 2,38,900</td>
                                </tr>
                                <tr>
                                    <td>Bajaj Discover 125 (Drum)</td>
                                    <td>Rs. 2,00,900</td>
                                </tr>
                                <tr>
                                    <td>Bajaj Discover 125 ST</td>
                                    <td>Rs. 2,46,900</td>
                                </tr>
                                <tr>
                                    <td>Bajaj Dominar 250 (BS4 - Discontinued)</td>
                                    <td> Rs. 5,67,900</td>
                                </tr>
                                <tr>
                                    <td>Bajaj Dominar 250 (BS6)</td>
                                    <td> Rs. 5,49,900</td>
                                </tr>
                                <tr>
                                    <td>Bajaj Dominar 400 (BS6)</td>
                                    <td> Rs. 5,99,900</td>
                                </tr>
                                <tr>
                                    <td>Bajaj Dominar 400 (BS4 - Discontinued)</td>
                                    <td> Rs. 5,99,900</td>
                                </tr>
                                <tr>
                                    <td>Bajaj Platina 100 ES</td>
                                    <td> Rs. 2,02,900</td>
                                </tr>
                                <tr>
                                    <td>Bajaj Pulsar 125</td>
                                    <td> Rs. 2,59,900</td>
                                </tr>
                                <tr>
                                    <td>Bajaj Pulsar 150 (Single Disc)</td>
                                    <td> Rs. 2,95,900</td>
                                </tr>

                                <tr>
                                    <td>Bajaj Pulsar 150 (Twin Disc)</td>
                                    <td> Rs. 3,13,900</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>




            </div>


            <div class="brand">
                <div class="brand-name">
                    <h2>Benelli Price List 2024</h2>
                </div>

                <div class="brand-img">
                    <div>
                        <img src="{{ asset('img/scooter.png') }}" alt="" style="width: 100px; height: 100px;">
                    </div>
                </div>

                <div class="discribe">
                    <p>BBenelli is a well-known motorcycle manufacturer that has been in business since 1911. It has
                        been in
                        the two-wheeler market for over 100 years with its superior technology, powerful models, and
                        sporty
                        styling. However, Benelli has been a member of the Qjian Jiang (QJ) group, China's biggest
                        capacity
                        motorcycle manufacturer, since 2005. Their bikes are popular and also have been available in
                        the
                        Nepalese market for many years now. KTM International Trading Pvt. Ltd is an authorised
                        distributor,
                        and here is the latest Benelli price in Nepal.</p>
                </div>

                <div class="table">

                    <div class="table-container">
                        <table class="price-table">
                            <thead>
                                <tr>
                                    <th>Model</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Benelli 180S (Red/White)</td>
                                    <td>Rs. 4,54,900</td>
                                </tr>
                                <tr>
                                    <td>Benelli 180S (Neon Green)</td>
                                    <td>Rs. 4,21,900</td>
                                </tr>
                                <tr>
                                    <td>Benelli 302S (Neon Green)</td>
                                    <td>Rs. 10,74,900</td>
                                </tr>
                                <tr>
                                    <td>Benelli 302S (Black/White)</td>
                                    <td>Rs. 10,49,900</td>
                                </tr>
                                <tr>
                                    <td>Benelli 752S</td>
                                    <td>Rs. 25,15,000</td>
                                </tr>
                                <tr>
                                    <td>Benelli Leoncino 251</td>
                                    <td>Rs. 6,30,000</td>
                                </tr>
                                <tr>
                                    <td>Benelli TNT 135</td>
                                    <td>Rs. 2,75,000</td>
                                </tr>
                                <tr>
                                    <td>Benelli TNT 15</td>
                                    <td>Rs. 2,65,000</td>
                                </tr>
                                <tr>
                                    <td>Benelli TNT 150i</td>
                                    <td>Rs. 3,79,900</td>
                                </tr>
                                <tr>
                                    <td>Benelli TNT 600i</td>
                                    <td>Rs. 23,58,000</td>
                                </tr>
                                <tr>
                                    <td>Benelli TRK 251</td>
                                    <td>Rs. 7,64,900</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>



            </div>


            <div class="brand">
                <div class="brand-name">
                    <h2>BMW Price List 2024</h2>
                </div>

                <div class="brand-img">
                    <div>
                        <img src="{{ asset('img/scooter.png') }}" alt="" style="width: 100px; height: 100px;">
                    </div>
                </div>

                <div class="discribe">
                    <p>BMW Motorrad has been making famous motorcycles since 1923. Their bikes are manufactured in
                        Berlin,
                        Germany, while the G310 series, is manufactured in India by TVS Motor Company. In addition,
                        BMW made
                        its long-awaited debut in the Nepalese market with these models back in 2018. Himalayan
                        Motorrad is
                        Nepal's authorized importer and distributor of BMW motorcycles. Here is a list of the latest
                        and
                        updated BMW bike price in Nepal.</p>
                </div>

                <div class="table">

                    <div class="table-container">
                        <table class="price-table">
                            <thead>
                                <tr>
                                    <th>Model</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>BMW G 310 GS (BS4 - White)</td>
                                    <td>Rs. 11,15,000</td>
                                </tr>
                                <tr>
                                    <td>BMW G 310 GS (BS4 - Black or Red)</td>
                                    <td>Rs. 10,90,000</td>
                                </tr>
                                <tr>
                                    <td>BMW G 310 GS (BS6 - White/Triple Black)</td>
                                    <td>Rs. 14,50,000</td>
                                </tr>
                                <tr>
                                    <td>BMW G 310 GS (BS6 - Rally Style)</td>
                                    <td>Rs. 14,75,000</td>
                                </tr>
                                <tr>
                                    <td>BMW G 310 R (BS4 - White)</td>
                                    <td>Rs. 9,75,000</td>
                                </tr>
                                <tr>
                                    <td>BMW G 310 R (BS6 - Black/Style Passion)</td>
                                    <td>Rs. 13,50,000</td>
                                </tr>
                                <tr>
                                    <td>BMW G 310 R (BS6 - Style Sports)</td>
                                    <td>Rs. 13,75,000</td>
                                </tr>
                                <tr>
                                    <td>BMW G 310 R (BS4 - Black or Red)</td>
                                    <td>Rs. 9,50,000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                </div>



            </div>




            <div class="brand">
                <div class="brand-name">
                    <h2>CFMoto Price List 2024</h2>
                </div>

                <div class="brand-img">
                    <div>
                        <img src="{{ asset('img/scooter.png') }}" alt="" style="width: 100px; height: 100px;">
                    </div>
                </div>

                <div class="discribe">
                    <p>CFMoto is a world leader in the production of liquid-cooled engines for quads and
                        motorcycles. It has
                        a yearly capacity of 800,000 engines and 600,000 vehicles. CFMoto has been manufacturing
                        high-quality Powersports products for over 20 years and is the world's largest exporter of
                        ATVs and
                        UTVs. Furthermore, the brand now has a global distribution network in China, Canada, and 68
                        other
                        European, North and South American, and African countries. CFMoto has been in Nepal since
                        August of
                        2017 and is now open for business in the 2-wheeler market. ANNA International Pvt. Ltd. is
                        an
                        authorized distributor of CFMoto products. The latest CFMoto bike price in Nepal are listed
                        below.
                    </p>
                </div>

                <div class="table">
                    <div class="table-container">
                        <table class="price-table">
                            <thead>
                                <tr>
                                    <th>Model</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CFMoto 150NK</td>
                                    <td>Rs. 3,50,000</td>
                                </tr>
                                <tr>
                                    <td>CFMoto 250NK</td>
                                    <td>Rs. 5,65,500</td>
                                </tr>
                                <tr>
                                    <td>CFMoto 250SR</td>
                                    <td>Rs. 6,90,000</td>
                                </tr>
                                <tr>
                                    <td>CFMoto 400GT (ABS)</td>
                                    <td>Rs. 9,41,500</td>
                                </tr>
                                <tr>
                                    <td>CFMoto 400NK</td>
                                    <td>Rs. 7,90,000</td>
                                </tr>
                                <tr>
                                    <td>CFMoto 650MT</td>
                                    <td>Rs. 16,50,000</td>
                                </tr>
                                <tr>
                                    <td>CFMoto 650NK</td>
                                    <td>Rs. 15,50,000</td>
                                </tr>
                                <tr>
                                    <td>CFMoto ST Papio</td>
                                    <td>Rs. 2,41,500</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>





                </div>




            </div>





            <div class="brand">
                <div class="brand-name">
                    <h2>Crossfire Price List 2024</h2>
                </div>

                <div class="brand-img">
                    <div>
                        <img src="{{ asset('img/scooter.png') }}" alt="" style="width: 100px; height: 100px;">
                    </div>
                </div>

                <div class="discribe">
                    <p>Crossfire is one of the leading dirt and enduro motorcycle brands in the Nepalese market.
                        They
                        debuted back in 2013 with their flagship enduro model, XZ250RR. Crossfire motorbikes are
                        known for
                        their sleek appearance, speed, and performance. Classic Wheels Export and Import is the sole
                        distributor of Crossfire Motorcycles Australia. However, these bikes are manufactured and
                        imported
                        from China to match the off-road standards and guidelines of Nepal. Let's take a look at the
                        most
                        recent Crossfire bike price in Nepal.</p>
                </div>

                <div class="table">
                    <div class="table-container">
                        <table class="price-table">
                            <thead>
                                <tr>
                                    <th>Model</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Crossfire GR7 250</td>
                                    <td>Rs. 5,45,000</td>
                                </tr>
                                <tr>
                                    <td>Crossfire HJ 250</td>
                                    <td>Rs. 6,99,000</td>
                                </tr>
                                <tr>
                                    <td>Crossfire HJ 250 (SuperMoto - Limited Edition)</td>
                                    <td>Rs. 7,19,000</td>
                                </tr>
                                <tr>
                                    <td>Crossfire RM 250 (Race Edition)</td>
                                    <td>Rs. 7,99,000</td>
                                </tr>
                                <tr>
                                    <td>Crossfire Tracker 250</td>
                                    <td>Rs. 3,70,000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>





                </div>




            </div>



        </section>







        @include('footer')
    </main>
</body>

</html>
