@extends('layouts.front')

@section('content')

<!--Search start-->
<div class="search-int">

  <div class="container">

    <div class="row">

      <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">

        <!--One way and ROund trip-->

        <div class="row int">

          <div class="col-6 col-sm-4 col-md-4 col-lg-2">

            <div class="text-box">

              <span>Trip Type</span>

              <select>

                <option selected>One Way</option>

                <option>Round Trip</option>

                <option>Multi City</option>

              </select>

            </div>

          </div>

          <div class="col-6 col-sm-4 col-md-4 col-lg-2">

            <div class="text-box">

              <span>From</span>

              <input type="text" value="Delhi, India">

            </div>

          </div>

          <div class="col-6 col-sm-4 col-md-4 col-lg-2">

            <div class="text-box">

              <span>To</span>

              <input type="text" value="Dubai, UAE">

            </div>

          </div>

          <div class="col-6 col-sm-4 col-md-4 col-lg-2">

            <div class="text-box">

              <span>Depart</span>

              <input type="text" value="05/07/2019" data-language="en" class="datepicker-here">

            </div>

          </div>

          <div class="col-6 col-sm-4 col-md-4 col-lg-2">

            <div class="text-box">

              <span>Return</span>

              <input type="text" value="05/07/2019" data-language="en" class="datepicker-here" disabled>

            </div>

          </div>

          <div class="col-6 col-sm-4 col-md-4 col-lg-2">

            <div class="text-box">

              <span>PASSENGERS & CLASS</span>

              <input type="text" class="cursor" value="1 Adult, Economy" data-toggle="collapse" data-target="#option1">

            </div>

          </div>

        </div>



        <!--PASSENGERS & CLASS-->

        <div class="option1 collapse" id="option1">

          <div class="row">

            <div class="col-6 col-sm-6 col-md-4 col-lg-4">

              <div class="input1">

                <span>Adults 12 + Yrs</span>

                <input type="text" value="0" required>

                <div class="inc">

                  <a href="#!"><i class="fa fa-minus"></i></a>

                  <a href="#!"><i class="fa fa-plus"></i></a>

                </div>

              </div>

            </div>

            <div class="col-6 col-sm-6 col-md-4 col-lg-4">

              <div class="input1">

                <span>Children 2 - 12 Yrs</span>

                <input type="text" value="0" required>

                <div class="inc">

                  <a href="#!"><i class="fa fa-minus"></i></a>

                  <a href="#!"><i class="fa fa-plus"></i></a>

                </div>

              </div>

            </div>

            <div class="col-6 col-sm-6 col-md-4 col-lg-4">

              <div class="input1">

                <span>Infants 0 - 2 Yrs</span>

                <input type="text" value="0" required>

                <div class="inc">

                  <a href="#!"><i class="fa fa-minus"></i></a>

                  <a href="#!"><i class="fa fa-plus"></i></a>

                </div>

              </div>

            </div>



            <div class="col-6 col-sm-6 col-md-6 col-lg-3">

              <div class="input2">

                <span>Preferred Airline</span>

                <input type="text" placeholder="Type here">

              </div>

            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3">

              <div class="input2">

                <span>Class</span>

                <select>

                  <option>All</option>

                  <option>Option 01</option>

                  <option>Option 02</option>

                  <option>Option 03</option>

                </select>

              </div>

            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3">

              <div class="input2">

                <span>Routing</span>

                <select>

                  <option>All</option>

                  <option>Option 01</option>

                  <option>Option 02</option>

                  <option>Option 03</option>

                </select>

              </div>

            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-3">

              <div class="input2">

                <span>Meal</span>

                <select>

                  <option>No</option>

                  <option>Yes</option>

                </select>

              </div>

            </div>

          </div>

        </div>



        <!--Multi City-->

        <div class="row int collapse">

          <div class="col-6 col-sm-4 col-md-4 col-lg-2">

            <div class="text-box">

              <span>Trip Type</span>

              <select>

                <option>One Way</option>

                <option>Round Trip</option>

                <option selected>Multi City</option>

              </select>

            </div>

          </div>

          <div class="col-6 col-sm-4 col-md-4 col-lg-8">

            <div class="text-box">

              <span>From</span>

              <input type="text" class="cursor" value="Delhi to Dubai, Dubai to Delhi" data-toggle="collapse" data-target="#multiCity">

            </div>

          </div>

          <div class="col-6 col-sm-4 col-md-4 col-lg-2">

            <div class="text-box">

              <span>PASSENGERS & CLASS</span>

              <input type="text" class="cursor" value="1 Adult, Economy" data-toggle="collapse" data-target="#option1">

            </div>

          </div>

        </div>



        <!--Add multi city-->

        <div class="option1 collapse" id="multiCity">

          <div class="row">

            <div class="col-xs-12 col-sm-11 col-md-11 col-lg-11">

              <div class="row">

                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                  <div class="input">

                    <span>From</span>

                    <input type="text" placeholder="City or Airport" required>

                    <img src="{{URL::asset('assets/img/fu.png')}}" alt="">

                  </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                  <div class="input">

                    <span>To</span>

                    <input type="text" placeholder="City or Airport" required>

                    <img src="{{URL::asset('assets/img/fd.png')}}" alt="">

                  </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                  <div class="input">

                    <span>Departure</span>

                    <input type="text" placeholder="Departure" data-language="en" class="datepicker-here" />

                    <img src="{{URL::asset('assets/img/cl.png')}}" alt="">

                  </div>

                </div>

              </div>

            </div>

            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">

              <a href="#!" class="del"><i class="fa fa-close"></i></a>

            </div>

          </div>



          <div class="row">

            <div class="col-xs-12 col-sm-11 col-md-11 col-lg-11">

              <div class="row">

                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                  <div class="input">

                    <span>From</span>

                    <input type="text" placeholder="City or Airport" required>

                    <img src="{{URL::asset('assets/img/fu.png')}}" alt="">

                  </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                  <div class="input">

                    <span>To</span>

                    <input type="text" placeholder="City or Airport" required>

                    <img src="{{URL::asset('assets/img/fd.png')}}" alt="">

                  </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                  <div class="input">

                    <span>Departure</span>

                    <input type="text" placeholder="Departure" data-language="en" class="datepicker-here">

                    <img src="{{URL::asset('assets/img/cl.png')}}" alt="">

                  </div>

                </div>

              </div>

            </div>

            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">

              <a href="#!" class="del"><i class="fa fa-close"></i></a>

            </div>

          </div>



          <a href="#!" class="addmore"><i class="fa fa-plus"></i> Add another flight</a>

        </div>

      </div>

      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">

        <button class="btn-search">Search</button>

      </div>

    </div>

  </div>

</div>
<!--Search start-->

<!--Content start-->
<div class="container">

  <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">

      <div class="filter-head">188 of 188 flights <i class="fa fa-filter"></i></div>

      <div class="filter-side">
        <h3>Price: ₹ 3000 - ₹ 30000</h3>
        <input id="price" type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[150,750]">
        <br><br>

        <h3>Stops</h3>
        <label><input type="checkbox"> 1 Stop</label>
        <label><input type="checkbox"> 1+ Stop</label>

        <h3>Departure from New Delhi</h3>
        <div class="scrollbar" id="scrollbarstyle">

          <ul class="force-overflow">

            <li class="checkbox"><label><input type="checkbox"> Before 6AM</label></li>

            <li class="checkbox"><label><input type="checkbox"> 6AM - 12 Noon</label></li>

            <li class="checkbox"><label><input type="checkbox"> 12 Noon - 6PM</label></li>

            <li class="checkbox"><label><input type="checkbox"> After 6PM</label></li>

          </ul>

        </div>

        <h3>Arrival at Dublin</h3>
        <div class="scrollbar" id="scrollbarstyle">

          <ul class="speed-banking force-overflow">

            <li class="checkbox"><label><input type="checkbox"> 6AM - 12 Noon</label></li>

            <li class="checkbox"><label><input type="checkbox"> 12 Noon - 6PM</label></li>

            <li class="checkbox"><label><input type="checkbox"> After 6PM</label></li>

          </ul>

        </div>

        <h3>Airlines</h3>
        <div class="scrollbar" id="scrollbarstyle">

          <ul class="speed-banking force-overflow">

            <li class="checkbox"><label><input type="checkbox"> Aer Lingus</label></li>

            <li class="checkbox"><label><input type="checkbox"> Aeroflot</label></li>

            <li class="checkbox"><label><input type="checkbox"> Air India</label></li>

            <li class="checkbox"><label><input type="checkbox"> British Airways</label></li>

            <li class="checkbox"><label><input type="checkbox"> Cathay Pacific</label></li>

          </ul>

        </div>

      </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">

      <!--Flight 01-->
      <div class="flight-bg">

        <!--Agent Fare start-->

        <a href="#agentfare" class="agentfare" data-toggle="collapse"><i class="fa fa-eye"></i></a>

        <div class="agentfared collapse" id="agentfare">

          <div class="row">

            <div class="col-6 col-sm-6 col-md-3 col-lg-3">

              <span>Base Fare</span>

              <b>2026</b>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-3">

              <span>Taxes & Others</span>

              <b>881</b>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-3">

              <span>Invoice Price</span>

              <b>2901</b>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-3">

              <span>Total Fare Quote</span>

              <b>2907</b>

            </div>

          </div>

        </div>

        <!--Agent Fare end-->
        <div class="row">

          <div class="col-12 col-sm-2 col-md-2 col-lg-2">

            <img src="{{URL::asset('assets/img/flight/QR.png')}}" class="flogo" alt="">

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">10:00</span>

            New Delhi

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">6H :10M </span>

            1 STOP

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">07:30</span>

            Dublin

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2 price">

            <small>Rs 49,363</small><span>Rs 44,427</span>

            <!--<small>Rs 5,110 Instant Discount</small>-->

          </div>

          <div class="col-12 col-sm-2 col-md-2 col-lg-2">

            <a href="{{route('front.flight_checkout')}}" class="book">Book Now</a>

          </div>

        </div>

        <div class="flight-detail-bg">

          <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6">

              <h2>Qatar Airways</h2>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-3">

              <a href="#!" class="details" data-toggle="collapse" data-target="#fare">Non Refundable</a>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-3">

              <a href="#!" class="details" data-toggle="collapse" data-target="#flightDetails">Flight Details</a>

            </div>

          </div>

        </div>

        <div class="flight-detail collapse" id="flightDetails">

          <div class="row">

            <div class="col-sm-12 col-md-8 col-lg-9">

              <div class="row">

                <div class="col-sm-4 col-md-4 col-lg-4">

                  <span class="loc">New Delhi (DEL)</span>

                  <span class="time">10:00</span>

                  <span class="date">Thu, 16 May 2019</span>

                  <span class="air">Indira Gandhi T-3</span>

                </div>

                <div class="col-sm-4 col-md-4 col-lg-4">

                  <div class="line">

                    04hrs 25mins

                    <i class="fa fa-plane"></i>

                  </div>

                </div>

                <div class="col-sm-4 col-md-4 col-lg-4">

                  <span class="loc">Doha (DOH)</span>

                  <span class="time">11:55</span>

                  <span class="date">Thu, 16 May 2019</span>

                  <span class="air">Doha</span>

                </div>

              </div>



              <div class="change-plan">

                Change plane at Doha (DOH), Connecting Time: 19h 50m

              </div>



              <div class="row">

                <div class="col-sm-4 col-md-4 col-lg-4">

                  <span class="loc">Doha (DOH)</span>

                  <span class="time">07:45</span>

                  <span class="date">Fri, 17 May 2019</span>

                  <span class="air">Doha</span>

                </div>

                <div class="col-sm-4 col-md-4 col-lg-4">

                  <div class="line">

                    07hrs 50mins

                    <i class="fa fa-plane"></i>

                  </div>

                </div>

                <div class="col-sm-4 col-md-4 col-lg-4">

                  <span class="loc">Dublin (DUB)</span>

                  <span class="time">13:35</span>

                  <span class="date">Fri, 17 May 2019</span>

                  <span class="air">Dublin T-1</span>

                </div>

              </div>

            </div>

            <div class="col-sm-12 col-md-4 col-lg-3">

              <div class="feat">

                <div class="row">

                  <div class="col-4 col-md-12 col-lg-12">

                    <b>BAGGAGE</b>

                    <span>Adult</span>

                    <br>

                  </div>

                  <div class="col-4 col-md-12 col-lg-12">

                    <b>CHECK-IN</b>

                    <span>30 Kgs</span>

                    <br>

                  </div>

                  <div class="col-4 col-md-12 col-lg-12">

                    <b>CABIN</b>

                    <span>7 Kgs</span>

                  </div>

                </div>

              </div>

            </div>

          </div>



          <div class="amenities">

            <div class="row">

              <div class="col-6 col-sm-6 col-md-6 col-lg-3">

                <i class="fa fa-wifi"></i> Email & messaging (paid)

              </div>

              <div class="col-6 col-sm-6 col-md-6 col-lg-3">

                <i class="fa fa-plug"></i> Power & USB outlets

              </div>

              <div class="col-6 col-sm-6 col-md-6 col-lg-3">

                <i class="fa fa-desktop"></i> On demand entertainment

              </div>

              <div class="col-6 col-sm-6 col-md-6 col-lg-3">

                <i class="fa fa-cutlery"></i> Meal provided

              </div>

            </div>

          </div>

        </div>

        <div class="fare collapse" id="fare">

          <div class="row">

            <div class="col-sm-12 col-md-5 col-lg-4">

              <div class="table-responsive">

                <table class="table">

                  <thead>

                    <tr>

                      <th colspan="2">Fare breakup</th>

                    </tr>

                  </thead>

                  <tr>

                    <td>TOTAL</td>

                    <td>Rs 45,997</td>

                  </tr>

                  <tr>

                    <td><small>Base Fare</small></td>

                    <td>Rs 35,885</td>

                  </tr>

                  <tr>

                    <td><small>Surcharges</small></td>

                    <td>Rs 15,222</td>

                  </tr>

                  <tr>

                    <td><small>Instant discount applied</small></td>

                    <td>-Rs 5,110</td>

                  </tr>

                </table>

              </div>

            </div>

            <div class="col-sm-12 col-md-7 col-lg-8">

              <div class="table-responsive">

                <table class="table table-bordered">

                  <thead>

                    <tr>

                      <th colspan="3">Fare rules DEL - DUB <small>All charges are per passenger</small></th>

                    </tr>

                  </thead>

                  <tr>

                    <td><small>TIME</small></td>

                    <td>

                      <small>

                        CANCELLATION FEE

                        (Airline Fee + MMT Fee)

                      </small>

                    </td>

                    <td>

                      <small>

                        DATE CHANGE FEES

                        (Airline Fee + MMT Fee + Fare Difference )

                      </small>

                    </td>

                  </tr>

                  <tr>

                    <td><small>24 hours to 365 days*</small></td>

                    <td><small>ADULT : ₹ 11,924 + ₹ 649</small></td>

                    <td><small>ADULT : ₹ 9,561 + ₹ 500 + Fare difference</small></td>

                  </tr>

                </table>

              </div>

              <small>* From the Date of Departure</small>

            </div>

          </div>

        </div>

      </div>

      <!--Flight 02-->
      <div class="flight-bg">

        <!--Agent Fare start-->
        <a href="#agentfare2" class="agentfare" data-toggle="collapse"><i class="fa fa-eye"></i></a>

        <div class="agentfared collapse" id="agentfare2">

          <div class="row">

            <div class="col-6 col-sm-6 col-md-3 col-lg-3">

              <span>Base Fare</span>

              <b>2026</b>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-3">

              <span>Taxes & Others</span>

              <b>881</b>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-3">

              <span>Invoice Price</span>

              <b>2901</b>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-3">

              <span>Total Fare Quote</span>

              <b>2907</b>

            </div>

          </div>

        </div>

        <!--Agent Fare end-->
        <div class="row">

          <div class="col-12 col-sm-2 col-md-2 col-lg-2">

            <img src="{{URL::asset('assets/img/flight/QR.png')}}" class="flogo" alt="">

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">10:00</span>

            New Delhi

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">6H :10M </span>

            1 STOP

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">07:30</span>

            Dublin

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2 price">

            <small>Rs 49,363</small><span>Rs 44,427</span>

            <!--<small>Rs 5,110 Instant Discount</small>-->

          </div>

          <div class="col-12 col-sm-2 col-md-2 col-lg-2">

            <a href="{{route('front.flight_checkout')}}" class="book">Book Now</a>

          </div>

        </div>

        <div class="flight-detail-bg">

          <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6">

              <h2>Qatar Airways</h2>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-3">

              <a href="#!" class="details" data-toggle="collapse" data-target="#fare2">Non Refundable</a>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-3">

              <a href="#!" class="details" data-toggle="collapse" data-target="#flightDetails2">Flight Details</a>

            </div>

          </div>

        </div>

        <div class="flight-detail collapse" id="flightDetails2">

          <div class="row">

            <div class="col-sm-12 col-md-8 col-lg-9">

              <div class="row">

                <div class="col-sm-4 col-md-4 col-lg-4">

                  <span class="loc">New Delhi (DEL)</span>

                  <span class="time">10:00</span>

                  <span class="date">Thu, 16 May 2019</span>

                  <span class="air">Indira Gandhi T-3</span>

                </div>

                <div class="col-sm-4 col-md-4 col-lg-4">

                  <div class="line">

                    04hrs 25mins

                    <i class="fa fa-plane"></i>

                  </div>

                </div>

                <div class="col-sm-4 col-md-4 col-lg-4">

                  <span class="loc">Doha (DOH)</span>

                  <span class="time">11:55</span>

                  <span class="date">Thu, 16 May 2019</span>

                  <span class="air">Doha</span>

                </div>

              </div>



              <div class="change-plan">

                Change plane at Doha (DOH), Connecting Time: 19h 50m

              </div>



              <div class="row">

                <div class="col-sm-4 col-md-4 col-lg-4">

                  <span class="loc">Doha (DOH)</span>

                  <span class="time">07:45</span>

                  <span class="date">Fri, 17 May 2019</span>

                  <span class="air">Doha</span>

                </div>

                <div class="col-sm-4 col-md-4 col-lg-4">

                  <div class="line">

                    07hrs 50mins

                    <i class="fa fa-plane"></i>

                  </div>

                </div>

                <div class="col-sm-4 col-md-4 col-lg-4">

                  <span class="loc">Dublin (DUB)</span>

                  <span class="time">13:35</span>

                  <span class="date">Fri, 17 May 2019</span>

                  <span class="air">Dublin T-1</span>

                </div>

              </div>

            </div>

            <div class="col-sm-12 col-md-4 col-lg-3">

              <div class="feat">

                <div class="row">

                  <div class="col-4 col-md-12 col-lg-12">

                    <b>BAGGAGE</b>

                    <span>Adult</span>

                    <br>

                  </div>

                  <div class="col-4 col-md-12 col-lg-12">

                    <b>CHECK-IN</b>

                    <span>30 Kgs</span>

                    <br>

                  </div>

                  <div class="col-4 col-md-12 col-lg-12">

                    <b>CABIN</b>

                    <span>7 Kgs</span>

                  </div>

                </div>

              </div>

            </div>

          </div>



          <div class="amenities">

            <div class="row">

              <div class="col-6 col-sm-6 col-md-6 col-lg-3">

                <i class="fa fa-wifi"></i> Email & messaging (paid)

              </div>

              <div class="col-6 col-sm-6 col-md-6 col-lg-3">

                <i class="fa fa-plug"></i> Power & USB outlets

              </div>

              <div class="col-6 col-sm-6 col-md-6 col-lg-3">

                <i class="fa fa-desktop"></i> On demand entertainment

              </div>

              <div class="col-6 col-sm-6 col-md-6 col-lg-3">

                <i class="fa fa-cutlery"></i> Meal provided

              </div>

            </div>

          </div>

        </div>

        <div class="fare collapse" id="fare2">

          <div class="row">

            <div class="col-sm-12 col-md-5 col-lg-4">

              <div class="table-responsive">

                <table class="table">

                  <thead>

                    <tr>

                      <th colspan="2">Fare breakup</th>

                    </tr>

                  </thead>

                  <tr>

                    <td>TOTAL</td>

                    <td>Rs 45,997</td>

                  </tr>

                  <tr>

                    <td><small>Base Fare</small></td>

                    <td>Rs 35,885</td>

                  </tr>

                  <tr>

                    <td><small>Surcharges</small></td>

                    <td>Rs 15,222</td>

                  </tr>

                  <tr>

                    <td><small>Instant discount applied</small></td>

                    <td>-Rs 5,110</td>

                  </tr>

                </table>

              </div>

            </div>

            <div class="col-sm-12 col-md-7 col-lg-8">

              <div class="table-responsive">

                <table class="table table-bordered">

                  <thead>

                    <tr>

                      <th colspan="3">Fare rules DEL - DUB <small>All charges are per passenger</small></th>

                    </tr>

                  </thead>

                  <tr>

                    <td><small>TIME</small></td>

                    <td>

                      <small>

                        CANCELLATION FEE

                        (Airline Fee + MMT Fee)

                      </small>

                    </td>

                    <td>

                      <small>

                        DATE CHANGE FEES

                        (Airline Fee + MMT Fee + Fare Difference )

                      </small>

                    </td>

                  </tr>

                  <tr>

                    <td><small>24 hours to 365 days*</small></td>

                    <td><small>ADULT : ₹ 11,924 + ₹ 649</small></td>

                    <td><small>ADULT : ₹ 9,561 + ₹ 500 + Fare difference</small></td>

                  </tr>

                </table>

              </div>

              <small>* From the Date of Departure</small>

            </div>

          </div>

        </div>

      </div>

      <!--Flight 03-->
      <div class="flight-bg">

        <!--Agent Fare start-->
        <a href="#agentfare3" class="agentfare" data-toggle="collapse"><i class="fa fa-eye"></i></a>

        <div class="agentfared collapse" id="agentfare3">

          <div class="row">

            <div class="col-6 col-sm-6 col-md-3 col-lg-3">

              <span>Base Fare</span>

              <b>2026</b>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-3">

              <span>Taxes & Others</span>

              <b>881</b>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-3">

              <span>Invoice Price</span>

              <b>2901</b>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-3">

              <span>Total Fare Quote</span>

              <b>2907</b>

            </div>

          </div>

        </div>
        <!--Agent Fare end-->

        <div class="row">

          <div class="col-12 col-sm-2 col-md-2 col-lg-2">

            <img src="{{URL::asset('assets/img/flight/QR.png')}}" class="flogo" alt="">

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">10:00</span>

            New Delhi

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">6H :10M </span>

            1 STOP

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">07:30</span>

            Dublin

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2 price">

            <small>Rs 49,363</small><span>Rs 44,427</span>

            <!--<small>Rs 5,110 Instant Discount</small>-->

          </div>

          <div class="col-12 col-sm-2 col-md-2 col-lg-2">

            <a href="{{route('front.flight_checkout')}}" class="book">Book Now</a>

          </div>

        </div>

        <div class="flight-detail-bg">

          <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6">

              <h2>Qatar Airways</h2>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-3">

              <a href="#!" class="details" data-toggle="collapse" data-target="#fare3">Non Refundable</a>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-3">

              <a href="#!" class="details" data-toggle="collapse" data-target="#flightDetails3">Flight Details</a>

            </div>

          </div>

        </div>

        <div class="flight-detail collapse" id="flightDetails3">

          <div class="row">

            <div class="col-sm-12 col-md-8 col-lg-9">

              <div class="row">

                <div class="col-sm-4 col-md-4 col-lg-4">

                  <span class="loc">New Delhi (DEL)</span>

                  <span class="time">10:00</span>

                  <span class="date">Thu, 16 May 2019</span>

                  <span class="air">Indira Gandhi T-3</span>

                </div>

                <div class="col-sm-4 col-md-4 col-lg-4">

                  <div class="line">

                    04hrs 25mins

                    <i class="fa fa-plane"></i>

                  </div>

                </div>

                <div class="col-sm-4 col-md-4 col-lg-4">

                  <span class="loc">Doha (DOH)</span>

                  <span class="time">11:55</span>

                  <span class="date">Thu, 16 May 2019</span>

                  <span class="air">Doha</span>

                </div>

              </div>



              <div class="change-plan">

                Change plane at Doha (DOH), Connecting Time: 19h 50m

              </div>



              <div class="row">

                <div class="col-sm-4 col-md-4 col-lg-4">

                  <span class="loc">Doha (DOH)</span>

                  <span class="time">07:45</span>

                  <span class="date">Fri, 17 May 2019</span>

                  <span class="air">Doha</span>

                </div>

                <div class="col-sm-4 col-md-4 col-lg-4">

                  <div class="line">

                    07hrs 50mins

                    <i class="fa fa-plane"></i>

                  </div>

                </div>

                <div class="col-sm-4 col-md-4 col-lg-4">

                  <span class="loc">Dublin (DUB)</span>

                  <span class="time">13:35</span>

                  <span class="date">Fri, 17 May 2019</span>

                  <span class="air">Dublin T-1</span>

                </div>

              </div>

            </div>

            <div class="col-sm-12 col-md-4 col-lg-3">

              <div class="feat">

                <div class="row">

                  <div class="col-4 col-md-12 col-lg-12">

                    <b>BAGGAGE</b>

                    <span>Adult</span>

                    <br>

                  </div>

                  <div class="col-4 col-md-12 col-lg-12">

                    <b>CHECK-IN</b>

                    <span>30 Kgs</span>

                    <br>

                  </div>

                  <div class="col-4 col-md-12 col-lg-12">

                    <b>CABIN</b>

                    <span>7 Kgs</span>

                  </div>

                </div>

              </div>

            </div>

          </div>



          <div class="amenities">

            <div class="row">

              <div class="col-6 col-sm-6 col-md-6 col-lg-3">

                <i class="fa fa-wifi"></i> Email & messaging (paid)

              </div>

              <div class="col-6 col-sm-6 col-md-6 col-lg-3">

                <i class="fa fa-plug"></i> Power & USB outlets

              </div>

              <div class="col-6 col-sm-6 col-md-6 col-lg-3">

                <i class="fa fa-desktop"></i> On demand entertainment

              </div>

              <div class="col-6 col-sm-6 col-md-6 col-lg-3">

                <i class="fa fa-cutlery"></i> Meal provided

              </div>

            </div>

          </div>

        </div>

        <div class="fare collapse" id="fare3">

          <div class="row">

            <div class="col-sm-12 col-md-5 col-lg-4">

              <div class="table-responsive">

                <table class="table">

                  <thead>

                    <tr>

                      <th colspan="2">Fare breakup</th>

                    </tr>

                  </thead>

                  <tr>

                    <td>TOTAL</td>

                    <td>Rs 45,997</td>

                  </tr>

                  <tr>

                    <td><small>Base Fare</small></td>

                    <td>Rs 35,885</td>

                  </tr>

                  <tr>

                    <td><small>Surcharges</small></td>

                    <td>Rs 15,222</td>

                  </tr>

                  <tr>

                    <td><small>Instant discount applied</small></td>

                    <td>-Rs 5,110</td>

                  </tr>

                </table>

              </div>

            </div>

            <div class="col-sm-12 col-md-7 col-lg-8">

              <div class="table-responsive">

                <table class="table table-bordered">

                  <thead>

                    <tr>

                      <th colspan="3">Fare rules DEL - DUB <small>All charges are per passenger</small></th>

                    </tr>

                  </thead>

                  <tr>

                    <td><small>TIME</small></td>

                    <td>

                      <small>

                        CANCELLATION FEE

                        (Airline Fee + MMT Fee)

                      </small>

                    </td>

                    <td>

                      <small>

                        DATE CHANGE FEES

                        (Airline Fee + MMT Fee + Fare Difference )

                      </small>

                    </td>

                  </tr>

                  <tr>

                    <td><small>24 hours to 365 days*</small></td>

                    <td><small>ADULT : ₹ 11,924 + ₹ 649</small></td>

                    <td><small>ADULT : ₹ 9,561 + ₹ 500 + Fare difference</small></td>

                  </tr>

                </table>

              </div>

              <small>* From the Date of Departure</small>

            </div>

          </div>

        </div>

      </div>

      <!--Flight 04-->
      <div class="flight-bg">

        <!--Agent Fare start-->
        <a href="#agentfare4" class="agentfare" data-toggle="collapse"><i class="fa fa-eye"></i></a>

        <div class="agentfared collapse" id="agentfare4">

          <div class="row">

            <div class="col-6 col-sm-6 col-md-3 col-lg-3">

              <span>Base Fare</span>

              <b>2026</b>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-3">

              <span>Taxes & Others</span>

              <b>881</b>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-3">

              <span>Invoice Price</span>

              <b>2901</b>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-3">

              <span>Total Fare Quote</span>

              <b>2907</b>

            </div>

          </div>

        </div>
        <!--Agent Fare end-->

        <div class="row">

          <div class="col-12 col-sm-2 col-md-2 col-lg-2">

            <img src="{{URL::asset('assets/img/flight/QR.png')}}" class="flogo" alt="">

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">10:00</span>

            New Delhi

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">6H :10M </span>

            1 STOP

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">07:30</span>

            Dublin

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2 price">

            <small>Rs 49,363</small><span>Rs 44,427</span>

            <!--<small>Rs 5,110 Instant Discount</small>-->

          </div>

          <div class="col-12 col-sm-2 col-md-2 col-lg-2">

            <a href="{{route('front.flight_checkout')}}" class="book">Book Now</a>

          </div>

        </div>

        <div class="flight-detail-bg">

          <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6">

              <h2>Qatar Airways</h2>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-3">

              <a href="#!" class="details" data-toggle="collapse" data-target="#fare4">Non Refundable</a>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-3">

              <a href="#!" class="details" data-toggle="collapse" data-target="#flightDetails4">Flight Details</a>

            </div>

          </div>

        </div>

        <div class="flight-detail collapse" id="flightDetails4">

          <div class="row">

            <div class="col-sm-12 col-md-8 col-lg-9">

              <div class="row">

                <div class="col-sm-4 col-md-4 col-lg-4">

                  <span class="loc">New Delhi (DEL)</span>

                  <span class="time">10:00</span>

                  <span class="date">Thu, 16 May 2019</span>

                  <span class="air">Indira Gandhi T-3</span>

                </div>

                <div class="col-sm-4 col-md-4 col-lg-4">

                  <div class="line">

                    04hrs 25mins

                    <i class="fa fa-plane"></i>

                  </div>

                </div>

                <div class="col-sm-4 col-md-4 col-lg-4">

                  <span class="loc">Doha (DOH)</span>

                  <span class="time">11:55</span>

                  <span class="date">Thu, 16 May 2019</span>

                  <span class="air">Doha</span>

                </div>

              </div>



              <div class="change-plan">

                Change plane at Doha (DOH), Connecting Time: 19h 50m

              </div>



              <div class="row">

                <div class="col-sm-4 col-md-4 col-lg-4">

                  <span class="loc">Doha (DOH)</span>

                  <span class="time">07:45</span>

                  <span class="date">Fri, 17 May 2019</span>

                  <span class="air">Doha</span>

                </div>

                <div class="col-sm-4 col-md-4 col-lg-4">

                  <div class="line">

                    07hrs 50mins

                    <i class="fa fa-plane"></i>

                  </div>

                </div>

                <div class="col-sm-4 col-md-4 col-lg-4">

                  <span class="loc">Dublin (DUB)</span>

                  <span class="time">13:35</span>

                  <span class="date">Fri, 17 May 2019</span>

                  <span class="air">Dublin T-1</span>

                </div>

              </div>

            </div>

            <div class="col-sm-12 col-md-4 col-lg-3">

              <div class="feat">

                <div class="row">

                  <div class="col-4 col-md-12 col-lg-12">

                    <b>BAGGAGE</b>

                    <span>Adult</span>

                    <br>

                  </div>

                  <div class="col-4 col-md-12 col-lg-12">

                    <b>CHECK-IN</b>

                    <span>30 Kgs</span>

                    <br>

                  </div>

                  <div class="col-4 col-md-12 col-lg-12">

                    <b>CABIN</b>

                    <span>7 Kgs</span>

                  </div>

                </div>

              </div>

            </div>

          </div>



          <div class="amenities">

            <div class="row">

              <div class="col-6 col-sm-6 col-md-6 col-lg-3">

                <i class="fa fa-wifi"></i> Email & messaging (paid)

              </div>

              <div class="col-6 col-sm-6 col-md-6 col-lg-3">

                <i class="fa fa-plug"></i> Power & USB outlets

              </div>

              <div class="col-6 col-sm-6 col-md-6 col-lg-3">

                <i class="fa fa-desktop"></i> On demand entertainment

              </div>

              <div class="col-6 col-sm-6 col-md-6 col-lg-3">

                <i class="fa fa-cutlery"></i> Meal provided

              </div>

            </div>

          </div>

        </div>

        <div class="fare collapse" id="fare4">

          <div class="row">

            <div class="col-sm-12 col-md-5 col-lg-4">

              <div class="table-responsive">

                <table class="table">

                  <thead>

                    <tr>

                      <th colspan="2">Fare breakup</th>

                    </tr>

                  </thead>

                  <tr>

                    <td>TOTAL</td>

                    <td>Rs 45,997</td>

                  </tr>

                  <tr>

                    <td><small>Base Fare</small></td>

                    <td>Rs 35,885</td>

                  </tr>

                  <tr>

                    <td><small>Surcharges</small></td>

                    <td>Rs 15,222</td>

                  </tr>

                  <tr>

                    <td><small>Instant discount applied</small></td>

                    <td>-Rs 5,110</td>

                  </tr>

                </table>

              </div>

            </div>

            <div class="col-sm-12 col-md-7 col-lg-8">

              <div class="table-responsive">

                <table class="table table-bordered">

                  <thead>

                    <tr>

                      <th colspan="3">Fare rules DEL - DUB <small>All charges are per passenger</small></th>

                    </tr>

                  </thead>

                  <tr>

                    <td><small>TIME</small></td>

                    <td>

                      <small>

                        CANCELLATION FEE

                        (Airline Fee + MMT Fee)

                      </small>

                    </td>

                    <td>

                      <small>

                        DATE CHANGE FEES

                        (Airline Fee + MMT Fee + Fare Difference )

                      </small>

                    </td>

                  </tr>

                  <tr>

                    <td><small>24 hours to 365 days*</small></td>

                    <td><small>ADULT : ₹ 11,924 + ₹ 649</small></td>

                    <td><small>ADULT : ₹ 9,561 + ₹ 500 + Fare difference</small></td>

                  </tr>

                </table>

              </div>

              <small>* From the Date of Departure</small>

            </div>

          </div>

        </div>

      </div>

      <!--Flight 05-->
      <div class="flight-bg">

        <!--Agent Fare start-->
        <a href="#agentfare5" class="agentfare" data-toggle="collapse"><i class="fa fa-eye"></i></a>

        <div class="agentfared collapse" id="agentfare5">

          <div class="row">

            <div class="col-6 col-sm-6 col-md-3 col-lg-3">

              <span>Base Fare</span>

              <b>2026</b>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-3">

              <span>Taxes & Others</span>

              <b>881</b>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-3">

              <span>Invoice Price</span>

              <b>2901</b>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-3">

              <span>Total Fare Quote</span>

              <b>2907</b>

            </div>

          </div>

        </div>
        <!--Agent Fare end-->

        <div class="row">

          <div class="col-12 col-sm-2 col-md-2 col-lg-2">

            <img src="{{URL::asset('assets/img/flight/QR.png')}}" class="flogo" alt="">

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">10:00</span>

            New Delhi

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">6H :10M </span>

            1 STOP

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">07:30</span>

            Dublin

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2 price">

            <small>Rs 49,363</small><span>Rs 44,427</span>

            <!--<small>Rs 5,110 Instant Discount</small>-->

          </div>

          <div class="col-12 col-sm-2 col-md-2 col-lg-2">

            <a href="{{route('front.flight_checkout')}}" class="book">Book Now</a>

          </div>

        </div>

        <div class="flight-detail-bg">

          <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6">

              <h2>Qatar Airways</h2>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-3">

              <a href="#!" class="details" data-toggle="collapse" data-target="#fare5">Non Refundable</a>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-3">

              <a href="#!" class="details" data-toggle="collapse" data-target="#flightDetails5">Flight Details</a>

            </div>

          </div>

        </div>

        <div class="flight-detail collapse" id="flightDetails5">

          <div class="row">

            <div class="col-sm-12 col-md-8 col-lg-9">

              <div class="row">

                <div class="col-sm-4 col-md-4 col-lg-4">

                  <span class="loc">New Delhi (DEL)</span>

                  <span class="time">10:00</span>

                  <span class="date">Thu, 16 May 2019</span>

                  <span class="air">Indira Gandhi T-3</span>

                </div>

                <div class="col-sm-4 col-md-4 col-lg-4">

                  <div class="line">

                    04hrs 25mins

                    <i class="fa fa-plane"></i>

                  </div>

                </div>

                <div class="col-sm-4 col-md-4 col-lg-4">

                  <span class="loc">Doha (DOH)</span>

                  <span class="time">11:55</span>

                  <span class="date">Thu, 16 May 2019</span>

                  <span class="air">Doha</span>

                </div>

              </div>



              <div class="change-plan">

                Change plane at Doha (DOH), Connecting Time: 19h 50m

              </div>



              <div class="row">

                <div class="col-sm-4 col-md-4 col-lg-4">

                  <span class="loc">Doha (DOH)</span>

                  <span class="time">07:45</span>

                  <span class="date">Fri, 17 May 2019</span>

                  <span class="air">Doha</span>

                </div>

                <div class="col-sm-4 col-md-4 col-lg-4">

                  <div class="line">

                    07hrs 50mins

                    <i class="fa fa-plane"></i>

                  </div>

                </div>

                <div class="col-sm-4 col-md-4 col-lg-4">

                  <span class="loc">Dublin (DUB)</span>

                  <span class="time">13:35</span>

                  <span class="date">Fri, 17 May 2019</span>

                  <span class="air">Dublin T-1</span>

                </div>

              </div>

            </div>

            <div class="col-sm-12 col-md-4 col-lg-3">

              <div class="feat">

                <div class="row">

                  <div class="col-4 col-md-12 col-lg-12">

                    <b>BAGGAGE</b>

                    <span>Adult</span>

                    <br>

                  </div>

                  <div class="col-4 col-md-12 col-lg-12">

                    <b>CHECK-IN</b>

                    <span>30 Kgs</span>

                    <br>

                  </div>

                  <div class="col-4 col-md-12 col-lg-12">

                    <b>CABIN</b>

                    <span>7 Kgs</span>

                  </div>

                </div>

              </div>

            </div>

          </div>



          <div class="amenities">

            <div class="row">

              <div class="col-6 col-sm-6 col-md-6 col-lg-3">

                <i class="fa fa-wifi"></i> Email & messaging (paid)

              </div>

              <div class="col-6 col-sm-6 col-md-6 col-lg-3">

                <i class="fa fa-plug"></i> Power & USB outlets

              </div>

              <div class="col-6 col-sm-6 col-md-6 col-lg-3">

                <i class="fa fa-desktop"></i> On demand entertainment

              </div>

              <div class="col-6 col-sm-6 col-md-6 col-lg-3">

                <i class="fa fa-cutlery"></i> Meal provided

              </div>

            </div>

          </div>

        </div>

        <div class="fare collapse" id="fare5">

          <div class="row">

            <div class="col-sm-12 col-md-5 col-lg-4">

              <div class="table-responsive">

                <table class="table">

                  <thead>

                    <tr>

                      <th colspan="2">Fare breakup</th>

                    </tr>

                  </thead>

                  <tr>

                    <td>TOTAL</td>

                    <td>Rs 45,997</td>

                  </tr>

                  <tr>

                    <td><small>Base Fare</small></td>

                    <td>Rs 35,885</td>

                  </tr>

                  <tr>

                    <td><small>Surcharges</small></td>

                    <td>Rs 15,222</td>

                  </tr>

                  <tr>

                    <td><small>Instant discount applied</small></td>

                    <td>-Rs 5,110</td>

                  </tr>

                </table>

              </div>

            </div>

            <div class="col-sm-12 col-md-7 col-lg-8">

              <div class="table-responsive">

                <table class="table table-bordered">

                  <thead>

                    <tr>

                      <th colspan="3">Fare rules DEL - DUB <small>All charges are per passenger</small></th>

                    </tr>

                  </thead>

                  <tr>

                    <td><small>TIME</small></td>

                    <td>

                      <small>

                        CANCELLATION FEE

                        (Airline Fee + MMT Fee)

                      </small>

                    </td>

                    <td>

                      <small>

                        DATE CHANGE FEES

                        (Airline Fee + MMT Fee + Fare Difference )

                      </small>

                    </td>

                  </tr>

                  <tr>

                    <td><small>24 hours to 365 days*</small></td>

                    <td><small>ADULT : ₹ 11,924 + ₹ 649</small></td>

                    <td><small>ADULT : ₹ 9,561 + ₹ 500 + Fare difference</small></td>

                  </tr>

                </table>

              </div>

              <small>* From the Date of Departure</small>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>
<!--Content end-->

@endsection