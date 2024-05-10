<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tax Calculation</title>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/taxcalculation.css') }}" rel="stylesheet" type="text/css">

</head>

<body>
    @include('header')
    <main class="taxmain">
        <div class="top-heading">
            <div>
                <h2>Bike Tax Calculator</h2>
            </div>
            <div>
                <p>Use this bike tax calculator to calculate the yearly amount of bike tax in Nepal. First, choose the
                    province where your two-wheeler has been registered. Then, select the category where your
                    bike/scooter
                    falls in, i.e., CC for petrol-powered and Watt for electric.</p>
            </div>
        </div>

        <div class="dropdown-1">
            <div>
                <label for="province-select">Select Province:</label>
                <select id="province-select" class="custom-select">
                    <option value="province1">Province 1</option>
                    <option value="province2">Province 2</option>
                    <option value="province3">Province 3</option>
                    <!-- Add more provinces as needed -->
            </div>

            <div>
                </select>

                <label for="cc-watt-select">Select CC or Watt:</label>
                <select id="cc-watt-select" class="custom-select">
                    <option value="cc">CC</option>
                    <option value="watt">Watt</option>
                </select>
            </div>

        </div>

        <p><i>DISCLAIMER: The calculation performed by the Bike Tax Calculator is only based on the information you
                provide.
                The calculated yearly tax amount DOES NOT include late fines, third-party insurance fees, processing
                fees,
                or other possible fees. Please visit your nearest Department of Transport Management (DOTM) office or
                seek
                professional advice for the exact yearly tax amount. Nepbike bears no liability for any kind of loss
                caused.

            </i></p>
        <h2>Bike Tax in Nepal </h2>

        <p>Any individual who rides a two-wheeler must pay a bike tax in Nepal. The vehicle tax collected each year is
            one
            of the country’s primary sources of revenue. The federal government distributes the funds raised to state
            and
            local governments for road maintenance and new projects. It also contributes to keeping the cost of road
            safety
            and security low. <br>

            The Nepalese government charges various types of fees and taxes associated with vehicles. This includes the
            registration fee, ownership change, blue book registration/renewal fee, change of location, vehicle tax,
            inter-regional pass tax, route permit tax, and more. Among these, vehicle tax is the most significant and
            recurring. You must pay it each time you renew your blue book. Before that, you need to buy compulsory
            third-party insurance as well. <br>

            Every year, the Department of Transport Management (DOTM) levies taxes on vehicle owners. The tax rate
            varies
            according to the type of vehicle and its capacity. The greater the CC and Watt of your bike or scooter, the
            more
            taxes you will have to pay annually. Similarly, internal combustion engine vehicles are taxed at a higher
            rate
            than EVs (electric vehicles).</p>

        <h2>Bike Tax Rate in Nepal - 2079/80 (2022/23)</h2>
        <p>All 7 provinces have implemented a new tax rate for bikes and scooters in Nepal from the fiscal year 2079/80.
            The
            Tax Rate depends on the type of bike/scooter (i.e. petrol-powered or electric) you own. They are further
            classified in terms of the vehicle’s engine displacement (in CC) and peak power (in Watt). <br>

            Bagmati province charges the highest tax compared to other provinces whereas Sudurpashchim becomes the most
            tax-friendly province. Similarly, Karnali and Sudurpashchim have even provided full discounts on electric
            vehicles. <br>

            Below we have listed the updated rate of bike tax in Nepal 2079/80. Furthermore, you can find different tax
            rate
            tables for every province (1 to 7).</p>
        <h2>Bike Tax Rate in Province 1 - 2079/80</h2>
        <p>Province 1 has revised tax rate of bike/scooter for the new fiscal year. These latest tax rates are levied on
            private two-wheelers registered in Bhojpur, Dhankuta, Ilam, Jhapa, Khotang, Morang, Okhaldhunga, Panchthar,
            Sankhuwasabha, Solukhumbu, Sunsari, Taplejung, Terhathum, and Udayapur districts. <br>

            The amount of bike tax in Province 1 charged as follows:</p>

        <div class="table-container">
            <table class="tax-table">
                <thead>
                    <tr>
                        <th>Bike/Scooter CC</th>
                        <th>Tax Rate</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Up to 125 CC</td>
                        <td>Rs. 3,000</td>
                    </tr>
                    <tr>
                        <td>126 CC - 160 CC</td>
                        <td>Rs. 4,000</td>
                    </tr>
                    <tr>
                        <td>161 CC - 250 CC</td>
                        <td>Rs. 5,500</td>
                    </tr>
                    <tr>
                        <td>251 CC - 400 CC</td>
                        <td>Rs. 10,000</td>
                    </tr>
                    <tr>
                        <td>More than 400 CC</td>
                        <td>Rs. 18,000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <p> The amount of electric bike tax in Province 1 charged as follows:</p>

        <div class="table-container">
            <table class="tax-table">
                <thead>
                    <tr>
                        <th>Electric Bike/Scooter</th>
                        <th>Tax Rate</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>350 W - 1000 W</td>
                        <td>Rs. 2,000</td>
                    </tr>
                    <tr>
                        <td>1001 W - 1500 W</td>
                        <td>Rs. 2,500</td>
                    </tr>
                    <tr>
                        <td>1501 W - 2000 W</td>
                        <td>Rs. 3,000</td>
                    </tr>
                    <tr>
                        <td>More than 2000 W</td>
                        <td>Rs. 4,000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h1>Bike Tax Rate in Province 2 (Madhesh) - 2079/80
        </h1>
        <p>Province 2 (Madhesh) has decent tax rates when compared to other provinces. If you have registered your bike
            or scooter in Bara, Dhanusa, Mahottari, Parsa, Rautahat, Saptari, Sarlahi, and Siraha districts, you are
            levied as per Madhesh Pradesh Tax Rates. <br>

            The amount of bike tax in Province 2 (Madhesh) charged as follows:</p>

        <div class="table-container">
            <table class="tax-table">
                <thead>
                    <tr>
                        <th>Bike/Scooter CC</th>
                        <th>Tax Rate</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Up to 125 CC</td>
                        <td>Rs. 2,700</td>
                    </tr>
                    <tr>
                        <td>126 CC - 160 CC</td>
                        <td>Rs. 4,500</td>
                    </tr>
                    <tr>
                        <td>161 CC - 250 CC</td>
                        <td>Rs. 6,000</td>
                    </tr>
                    <tr>
                        <td>251 CC - 400 CC</td>
                        <td>Rs. 10,000</td>
                    </tr>
                    <tr>
                        <td>More than 400 CC</td>
                        <td>Rs. 17,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p>The amount of bike tax in Province 2 (Madhesh Pradesh) charged as follows:</p>
        <div class="table-container">
            <table class="tax-table">
                <thead>
                    <tr>
                        <th>Electric Bike/Scooter</th>
                        <th>Tax Rate</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>350 W - 1000 W</td>
                        <td>Rs. 2,000</td>
                    </tr>
                    <tr>
                        <td>1001 W - 1500 W</td>
                        <td>Rs. 2,500</td>
                    </tr>
                    <tr>
                        <td>More than 1500 W</td>
                        <td>Rs. 3,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h2>Bike Tax Rate in Province 3 (Bagmati) - 2079/80</h2>
        <p>Bagmati Province has the highest tax rate of bike in Nepal. Since the capital city, Kathmandu lies in this
            Pradesh, lots of people prefer to purchase and register two-wheelers for ease. The tax charges here start
            from
            Rs. 2,000 and go up to Rs. 30,000. Likewise, the tax rates are applicable if you have registered your bike
            or
            scooter in Bhaktapur, Chitwan, Dhading, Dolakha, Kathmandu, Kavrepalanchowk, Lalitpur, Makawanpur, Nuwakot,
            Ramechhap, Rasuwa, Sindhuli, and Sindhupalchowk. <br>

            The amount of bike tax in Province 3 (Bagmati) charged as follows:</p>
        <div class="table-container">
            <table class="tax-table">
                <thead>
                    <tr>
                        <th>Bike/Scooter CC</th>
                        <th>Tax Rate</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Up to 125 CC</td>
                        <td>Rs. 3,000</td>
                    </tr>
                    <tr>
                        <td>126 CC - 160 CC</td>
                        <td>Rs. 5,000</td>
                    </tr>
                    <tr>
                        <td>161 CC - 225 CC</td>
                        <td>Rs. 6,500</td>
                    </tr>
                    <tr>
                        <td>226 CC - 400 CC</td>
                        <td>Rs. 11,000</td>
                    </tr>
                    <tr>
                        <td>401 CC - 650 CC</td>
                        <td>Rs. 20,000</td>
                    </tr>
                    <tr>
                        <td>More than 650 CC</td>
                        <td>Rs. 30,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p>The amount of electric bike tax in Province 3 (Bagmati) charged as follows:</p>

        <div class="table-container">
            <table class="tax-table">
                <thead>
                    <tr>
                        <th>Electric Bike/Scooter</th>
                        <th>Tax Rate</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>350 W - 1000 W</td>
                        <td>Rs. 2,000</td>
                    </tr>
                    <tr>
                        <td>1001 W - 1500 W</td>
                        <td>Rs. 2,500</td>
                    </tr>
                    <tr>
                        <td>More than 1500 W</td>
                        <td>Rs. 3,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h2>Bike Tax Rate in Province 4 (Gandaki) - 2079/80
        </h2>
        <p>If you have registered your bike or scooter in Baglung, Gorkha, Kaski, Lamjung, Manang, Myagdi, Purva
            Nawalparasi, Parbat, Syangja, and Tanahu, you have to pay tax according to the Province 4, Gandaki Tax
            Rates.
            The charges start from small Rs. 1,000 and go up to massive Rs. 30,000 depending upon the types and capacity
            of
            two-wheelers. <br>

            The amount of bike tax in Province 4 (Gandaki) charged as follows:</p>
        <div class="table-container">
            <table class="tax-table">
                <thead>
                    <tr>
                        <th>Bike/Scooter CC</th>
                        <th>Tax Rate</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Up to 125 CC</td>
                        <td>Rs. 3,000</td>
                    </tr>
                    <tr>
                        <td>126 CC - 160 CC</td>
                        <td>Rs. 5,000</td>
                    </tr>
                    <tr>
                        <td>161 CC - 225 CC</td>
                        <td>Rs. 6,500</td>
                    </tr>
                    <tr>
                        <td>226 CC - 400 CC</td>
                        <td>Rs. 11,000</td>
                    </tr>
                    <tr>
                        <td>401 CC - 650 CC</td>
                        <td>Rs. 20,000</td>
                    </tr>
                    <tr>
                        <td>More than 650 CC</td>
                        <td>Rs. 30,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p>The amount of electric bike tax in Province 4 (Gandaki) charged as follows:</p>
        <div class="table-container">
            <table class="tax-table">
                <thead>
                    <tr>
                        <th>Electric Bike/Scooter</th>
                        <th>Tax Rate</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>350 W - 1000 W</td>
                        <td>Rs. 1,000</td>
                    </tr>
                    <tr>
                        <td>1001 W - 1500 W</td>
                        <td>Rs. 1,500</td>
                    </tr>
                    <tr>
                        <td>More than 1500 W</td>
                        <td>Rs. 2,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h1>Bike Tax Rate in Province 5 (Lumbini) - 2079/80</h1>
        <p>
            All bikes and scooters that are registered in Arghakhanchi, Banke, Bardiya, Dang, Gulmi, Kapilvastu, Paschim
            Nawalparasi, Palpa, Pyuthan, Rolpa, Purbi Rukum, and Rupandehi districts, are applicable under Province 5,
            Lumbini Vehicle Tax Rates. The charges look good when compared with other provinces of Nepal. <br>

            The amount of bike tax in Province 5 (Lumbini) charged as follows:</p>
        <div class="table-container">
            <table class="tax-table">
                <thead>
                    <tr>
                        <th>Bike/Scooter CC</th>
                        <th>Tax Rate</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Up to 125 CC</td>
                        <td>Rs. 2,600</td>
                    </tr>
                    <tr>
                        <td>126 CC - 160 CC</td>
                        <td>Rs. 4,500</td>
                    </tr>
                    <tr>
                        <td>161 CC - 250 CC</td>
                        <td>Rs. 5,500</td>
                    </tr>
                    <tr>
                        <td>251 CC - 400 CC</td>
                        <td>Rs. 11,000</td>
                    </tr>
                    <tr>
                        <td>More than 400 CC</td>
                        <td>Rs. 25,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p>The amount of electric bike tax in Province 5 (Lumbini) charged as follows:</p>
        <div class="table-container">
            <table class="tax-table">
                <thead>
                    <tr>
                        <th>Electric Bike/Scooter</th>
                        <th>Tax Rate</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Up to 500 W</td>
                        <td>Rs. 1,000</td>
                    </tr>
                    <tr>
                        <td>501 W - 1000 W</td>
                        <td>Rs. 1,500</td>
                    </tr>
                    <tr>
                        <td>1001 W - 1500 W</td>
                        <td>Rs. 2,000</td>
                    </tr>
                    <tr>
                        <td>More than 1500 W</td>
                        <td>Rs. 3,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h2>Bike Tax Rate in Province 6 (Karnali) - 2079/80
        </h2>
        <p>The tax rates for two-wheelers in Province 6, Karnali remains unchanged in this fiscal year 2079/80. The bike
            and
            scooters registered in Dailekh, Dolpa, Humla, Jajarkot, Jumla, Kalikot, Mugu, Rukum Paschim, Salyan, and
            Surkhet
            districts, falls in Province 6 Tax Rates. <br>

            The amount of bike tax in Province 6 (Karnali) charged as follows:</p>

        <div class="table-container">
            <table class="tax-table">
                <thead>
                    <tr>
                        <th>Bike/Scooter CC</th>
                        <th>Tax Rate</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Up to 125 CC</td>
                        <td>Rs. 2,500</td>
                    </tr>
                    <tr>
                        <td>126 CC - 250 CC</td>
                        <td>Rs. 4,000</td>
                    </tr>
                    <tr>
                        <td>251 CC - 400 CC</td>
                        <td>Rs. 8,000</td>
                    </tr>
                    <tr>
                        <td>More than 400 CC</td>
                        <td>Rs. 15,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p>Karnali Province has continued a full discount on vehicle tax of electric two-wheelers for the fiscal year
            2079/80. So, you don’t need to pay any taxes for your electric scooters or bikes registered in this
            province.
        </p>
        <h2>Bike Tax Rate in Province 7 (Sudurpaschim) - 2079/80</h2>
        <p>
            Sudurpaschim is the most tax-friendly province in Nepal. It levies the lowest tax rates compared to other
            provinces. If your bike or scooter is registered in Achham, Baitadi, Bajhang, Bajura, Dadeldhura, Darchula,
            Doti, Kailali, and Kanchanpur districts, you have to pay tax according to the rate of Province 7.

            The amount of bike tax in Province 7 (Sudurpaschim) charged as follows:</p>
        <div class="table-container">
            <table class="tax-table">
                <thead>
                    <tr>
                        <th>Bike/Scooter CC</th>
                        <th>Tax Rate</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Up to 125 CC</td>
                        <td>Rs. 2,500</td>
                    </tr>
                    <tr>
                        <td>126 CC - 150 CC</td>
                        <td>Rs. 4,500</td>
                    </tr>
                    <tr>
                        <td>151 CC - 250 CC</td>
                        <td>Rs. 5,500</td>
                    </tr>
                    <tr>
                        <td>251 CC - 400 CC</td>
                        <td>Rs. 8,000</td>
                    </tr>
                    <tr>
                        <td>More than 400 CC</td>
                        <td>Rs. 9,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p>Addtionally, there is no vehicle tax charged on electric scooters and bikes in Province 7. Sudurpaschim is
            the
            second province in Nepal after Karnali to offer a 100% discount on electric vehicles for the 2079/80 fiscal
            year.</p>

        <h2>Late Bike Tax Fine in Nepal</h2>
        <p>
            Every person who owns two-wheelers must pay bike tax in Nepal. If you don’t pay vehicle tax in time, you
            need to
            pay an additional fine as a penalty. The bike and scooter whose renewal date has not exceeded 3 months after
            the
            expiration date are free from penalty. <br>

            For example: If a bike tax expires in Bhadra, the vehicle tax can be paid by Mangsir that year. However, if
            it
            exceeds 3 months, a fine will be levied as per the rules of the Government.</p>
        <div class="table-container">
            <table class="fine-table">
                <thead>
                    <tr>
                        <th>Time (Expired Onwards)</th>
                        <th>Fine (2079/80)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Up to 1 Month</td>
                        <td>5%</td>
                    </tr>
                    <tr>
                        <td>1 Month - 2.5 Months</td>
                        <td>10%</td>
                    </tr>
                    <tr>
                        <td>Up to Fiscal Year</td>
                        <td>20%</td>
                    </tr>
                    <tr>
                        <td>After Fiscal Year</td>
                        <td>32%</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p><i>Note: The above fines are as per the fiscal year 2079/80. The fines before this fiscal year need to pay
                extra
                penalties as per your vehicle's types and category. For more information, please visit your nearest
                respective Department of Transport Management (DOTM) office or seek professional advice.
            </i>
        </p>
        <h2>How to pay bike tax in Nepal?</h2>
        <p>
        <ol>
            <li> Visit your nearest Department of Transport Management (DOTM) office.</li>
            <li>Purchase third-party vehicle insurance. You need to have a copy of third-party motorcycle insurance.
            </li>
            <li> Pay your bike/scooter tax when you renew your bluebook.</li>
        </ol>
        Additionally, you can also pay your bike tax online with eSewa.


        </p>
    </main>


    @include('footer')
</body>

</html>
