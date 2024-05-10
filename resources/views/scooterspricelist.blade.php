<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scooters Price List</title>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bikepricelist.css') }}" rel="stylesheet">
</head>

<body>
    <main class="main">
        @include('header')
        <section id="bike-price">
            <div class="bike-price-heading">
                <div>
                    <h2>Scooter Price in Nepal for All Models (2024 April UPDATED)</h2>
                </div>

                <div>
                    <p>Scooter price in Nepal overview page contains the latest cost of all scooters from various
                        manufacturers. Currently, there are several scooters ranging from low-cost to high-end models
                        that are available in the Nepalese market. <br>

                        And if you are in a hurry or searching for your favourite brand scooty pricing, we offer an
                        accurate and updated Scooter price in Nepal 2024, all on one page.</p>
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
                    <h2>AIMA Price List 2024</h2>
                </div>

                <div class="brand-img">
                    <div>
                        <img src="{{ asset('img/scooter.png') }}" alt="" style="width: 100px; height: 100px;">
                    </div>
                </div>

                <div class="discribe">
                    <p>Find the latest AIMA electric scooter price in Nepal below:</p>
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
                                    <td>AIMA Mine Plus</td>
                                    <td>Rs. 2,74,000</td>
                                </tr>
                                <tr>
                                    <td>AIMA Tiger S5</td>
                                    <td>Rs. 1,84,000</td>
                                </tr>
                                <tr>
                                    <td>AIMA Tiger Saber X6 (X611)</td>
                                    <td>Rs. 4,80,000</td>
                                </tr>
                                <tr>
                                    <td>AIMA Tiger Saber X6 (X612)</td>
                                    <td>Rs. 5,85,000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>



                </div>

            </div>

            {{-- end --}}

            <div class="brand">
                <div class="brand-name">
                    <h2>Aprilia Price List 2024</h2>
                </div>

                <div class="brand-img">
                    <div>
                        <img src="{{ asset('img/scooter.png') }}" alt="" style="width: 100px; height: 100px;">
                    </div>
                </div>

                <div class="discribe">
                    <p>Aprilia is an Italian motorcycle brand established after World War. The company currently
                        manufactures and offer small-capacity motorcycles to sportbikes over the world. However, it only
                        sells scooters in the Nepalese market. MV Dugar Group is an official importer and distributor of
                        Aprilia products. Below is the updated and latest Aprilia price in Nepal.</p>
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
                                    <td>Aprilia SR 125</td>
                                    <td>Rs. 2,88,900</td>
                                </tr>
                                <tr>
                                    <td>Aprilia SR 150 (Race)</td>
                                    <td>Rs. 3,62,900</td>
                                </tr>
                                <tr>
                                    <td>Aprilia SR 150</td>
                                    <td>Rs. 3,39,900</td>
                                </tr>
                                <tr>
                                    <td>Aprilia Storm 125</td>
                                    <td>Rs. 2,78,900</td>
                                </tr>
                                <tr>
                                    <td>Aprilia SXR 160</td>
                                    <td>Rs. 4,65,400</td>
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
                    <p>Benelli is a well-known motorcycle manufacturer that has been in business since 1911. It has
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
                                    <td>Benelli Panarea 125</td>
                                    <td>Rs. 2,99,900</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                </div>



            </div>


            <div class="brand">
                <div class="brand-name">
                    <h2>Doohan Price List 2024</h2>
                </div>

                <div class="brand-img">
                    <div>
                        <img src="{{ asset('img/scooter.png') }}" alt="" style="width: 100px; height: 100px;">
                    </div>
                </div>

                <div class="discribe">
                    <p>Find the latest Doohan scooter price in Nepal below:</p>
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
                                    <td>Doohan E-Swan</td>
                                    <td>Rs. 2,31,900</td>
                                </tr>
                                <tr>
                                    <td>Doohan Idou</td>
                                    <td>Rs. 1,59,900</td>
                                </tr>
                                <tr>
                                    <td>Doohan iTango</td>
                                    <td>Rs. 2,89,900</td>
                                </tr>
                                <tr>
                                    <td>Doohan iTank (Double Battery)</td>
                                    <td>Rs. 4,99,900</td>
                                </tr>
                                <tr>
                                    <td>Doohan iTank (Single Battery)</td>
                                    <td>Rs. 3,59,900</td>
                                </tr>
                                <tr>
                                    <td>Doohan Uranus</td>
                                    <td>Rs. 3,21,900</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                </div>



            </div>




            <div class="brand">
                <div class="brand-name">
                    <h2>Hero Price List 2024</h2>
                </div>

                <div class="brand-img">
                    <div>
                        <img src="{{ asset('img/scooter.png') }}" alt="" style="width: 100px; height: 100px;">
                    </div>
                </div>

                <div class="discribe">
                    <p>Hero MotoCorp Limited, formerly known as Hero Honda, is an Indian motorcycle and scooter
                        manufacturer. When Honda chose to discontinue their joint venture with Hero in 2010, they bought
                        the remaining shares from Honda and renamed themselves, Hero. As a result, it was also released
                        in the Nepalese market in 2012. Nepal General Marketing Private Limited (NGM) is an official
                        distributor of Hero MotoCorp and they also provide after-sales support for spare parts and
                        services. Below is the latest Hero price in Nepal.
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
                                    <td>Hero Destini 125</td>
                                    <td>Rs. 2,28,500</td>
                                </tr>
                                <tr>
                                    <td>Hero Duet</td>
                                    <td>Rs. 1,93,500</td>
                                </tr>
                                <tr>
                                    <td>Hero Maestro Edge</td>
                                    <td>Rs. 2,25,500</td>
                                </tr>
                                <tr>
                                    <td>Hero Maestro Edge 125</td>
                                    <td>Rs. 2,68,000</td>
                                </tr>
                                <tr>
                                    <td>Hero Pleasure</td>
                                    <td>Rs. 1,78,500</td>
                                </tr>
                                <tr>
                                    <td>Hero Pleasure Plus (Platinum)</td>
                                    <td>Rs. 2,15,500</td>
                                </tr>
                                <tr>
                                    <td>Hero Pleasure Plus</td>
                                    <td>Rs. 2,05,500</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>






                </div>




            </div>





            <div class="brand">
                <div class="brand-name">
                    <h2>Honda Price List 2024</h2>
                </div>

                <div class="brand-img">
                    <div>
                        <img src="{{ asset('img/scooter.png') }}" alt="" style="width: 100px; height: 100px;">
                    </div>
                </div>

                <div class="discribe">
                    <p>Since 1959, Honda has been the world's largest motorcycle manufacturer. Their bikes are
                        innovative, durable, powerful, and comfortable. Honda is one of the most well-known and renowned
                        brands in the global two-wheeler market. In Nepal, Syakar Trading is the authorized dealer of
                        Honda motorbikes. Furthermore, they import around 60,000 high-quality motorcycles each year and
                        sell them in over 70 showrooms across the country. The most recent Honda price in Nepal is
                        listed below.</p>
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
                                    <td>Honda Activa 125 (DLX)</td>
                                    <td>Rs. 2,53,900</td>
                                </tr>
                                <tr>
                                    <td>Honda Activa 125</td>
                                    <td>Rs. 2,43,900</td>
                                </tr>
                                <tr>
                                    <td>Honda Aviator</td>
                                    <td>Rs. 2,35,900</td>
                                </tr>
                                <tr>
                                    <td>Honda Dio (STD)</td>
                                    <td>Rs. 2,21,900</td>
                                </tr>
                                <tr>
                                    <td>Honda Dio (DLX)</td>
                                    <td>Rs. 2,31,900</td>
                                </tr>
                                <tr>
                                    <td>Honda Dio 125</td>
                                    <td>Rs. 2,99,900</td>
                                </tr>
                                <tr>
                                    <td>Honda Dio 125 (Deluxe)</td>
                                    <td>Rs. 3,09,900</td>
                                </tr>
                                <tr>
                                    <td>Honda Grazia (BS6-Drum)</td>
                                    <td>Rs. 2,79,900</td>
                                </tr>
                                <tr>
                                    <td>Honda Grazia (BS4-Disc)</td>
                                    <td>Rs. 2,59,900</td>
                                </tr>
                                <tr>
                                    <td>Honda Grazia (BS6-Disc)</td>
                                    <td>Rs. 2,99,900</td>
                                </tr>
                                <tr>
                                    <td>Honda Grazia (BS4-Drum)</td>
                                    <td>Rs. 2,38,900</td>
                                </tr>
                                <tr>
                                    <td>Honda Navi</td>
                                    <td>Rs. 1,60,900</td>
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
