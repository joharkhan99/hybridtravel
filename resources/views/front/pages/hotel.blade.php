@extends('layouts.front')

@section('content')

<!--Search start-->
<div class="search-int">

  <div class="container">

    <div class="row">

      <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">

        <!--One way and Round trip-->

        <div class="row int">

          <div class="col-6 col-sm-4 col-md-4 col-lg-2">

            <div class="text-box">

              <span>Find hotel deals</span>

              <input type="text" placeholder="Enter destination or hotel name" required="">

            </div>

          </div>

          <div class="col-6 col-sm-4 col-md-4 col-lg-2">

            <div class="text-box">

              <span>Check-in</span>

              <input type="text" placeholder="Check-in" data-language="en" class="datepicker-here">

            </div>

          </div>

          <div class="col-6 col-sm-4 col-md-4 col-lg-2">

            <div class="text-box">

              <span>Check-out</span>

              <input type="text" placeholder="Check-in" data-language="en" class="datepicker-here">

            </div>

          </div>

          <div class="col-6 col-sm-4 col-md-4 col-lg-2">

            <div class="input11">

              <span>Guests</span>

              <input type="text" value="1" required="">

              <div class="inc1">

                <a href="#!"><i class="fa fa-minus"></i></a>

                <a href="#!"><i class="fa fa-plus"></i></a>

              </div>

            </div>

          </div>

          <div class="col-6 col-sm-4 col-md-4 col-lg-2">

            <div class="input11">

              <span>Rooms</span>

              <input type="text" value="1" required="">

              <div class="inc1">

                <a href="#!"><i class="fa fa-minus"></i></a>

                <a href="#!"><i class="fa fa-plus"></i></a>

              </div>

            </div>

          </div>

          <div class="col-6 col-sm-4 col-md-4 col-lg-2">

            <div class="text-box">

              <span>Meal</span>

              <select>

                <option>Select</option>

                <option>All</option>

                <option>Breakfast</option>

                <option>Lunch</option>

                <option>Dinner</option>

                <option>Breakfast + Lunch</option>

                <option>Breakfast + Dinner</option>

                <option>Lunch + Dinner</option>

              </select>

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

                    <img src="img/fu.png" alt="">

                  </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                  <div class="input">

                    <span>To</span>

                    <input type="text" placeholder="City or Airport" required>

                    <img src="img/fd.png" alt="">

                  </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                  <div class="input">

                    <span>Departure</span>

                    <input type="text" placeholder="Departure" data-language="en" class="datepicker-here">

                    <img src="img/cl.png" alt="">

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

                    <img src="img/fu.png" alt="">

                  </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                  <div class="input">

                    <span>To</span>

                    <input type="text" placeholder="City or Airport" required>

                    <img src="img/fd.png" alt="">

                  </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                  <div class="input">

                    <span>Departure</span>

                    <input type="text" placeholder="Departure" data-language="en" class="datepicker-here">

                    <img src="img/cl.png" alt="">

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

      <div class="filter-head">188 of 188 Hotels <i class="fa fa-filter"></i></div>

      <div class="filter-side">

        <h3>Price: ₹ 3000 - ₹ 30000</h3>

        <input id="price" type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[150,750]">

        <br><br>



        <h3>City</h3>

        <div class="scrollbar" id="scrollbarstyle">

          <ul class="force-overflow">

            <li class="checkbox"><label><input type="checkbox"> Enfield</label></li>

            <li class="checkbox"><label><input type="checkbox"> Dun Laoghaire</label></li>

            <li class="checkbox"><label><input type="checkbox"> Tullamore</label></li>

            <li class="checkbox"><label><input type="checkbox"> Malahide</label></li>

            <li class="checkbox"><label><input type="checkbox"> An Muileann Gcearr</label></li>

            <li class="checkbox"><label><input type="checkbox"> Balbriggan</label></li>

            <li class="checkbox"><label><input type="checkbox"> Navan</label></li>

            <li class="checkbox"><label><input type="checkbox"> Portlaoise</label></li>

          </ul>

        </div>



        <h3>Star Rating</h3>

        <div class="scrollbar" id="scrollbarstyle">

          <ul class="speed-banking force-overflow">

            <li class="checkbox">

              <label>

                <input type="checkbox">

                <i class="fa fa-star"></i>

                <i class="fa fa-star"></i>

                <i class="fa fa-star"></i>

                <i class="fa fa-star"></i>

                <i class="fa fa-star"></i>

              </label>

            </li>

            <li class="checkbox">

              <label>

                <input type="checkbox">

                <i class="fa fa-star"></i>

                <i class="fa fa-star"></i>

                <i class="fa fa-star"></i>

                <i class="fa fa-star"></i>

              </label>

            </li>

            <li class="checkbox">

              <label>

                <input type="checkbox">

                <i class="fa fa-star"></i>

                <i class="fa fa-star"></i>

                <i class="fa fa-star"></i>

              </label>

            </li>

            <li class="checkbox">

              <label>

                <input type="checkbox">

                <i class="fa fa-star"></i>

                <i class="fa fa-star"></i>

              </label>

            </li>

            <li class="checkbox">

              <label>

                <input type="checkbox">

                <i class="fa fa-star"></i>

              </label>

            </li>

          </ul>

        </div>



        <h3>Facility</h3>

        <div class="scrollbar" id="scrollbarstyle">

          <ul class="speed-banking force-overflow">

            <li class="checkbox">

              <label>

                <input type="checkbox">

                Free Cancellation

              </label>

            </li>

            <li class="checkbox">

              <label>

                <input type="checkbox">

                Free WiFi

              </label>

            </li>

            <li class="checkbox">

              <label>

                <input type="checkbox">

                Kid-friendly buffet

              </label>

            </li>

            <li class="checkbox">

              <label>

                <input type="checkbox">

                Newspapers

              </label>

            </li>

            <li class="checkbox">

              <label>

                <input type="checkbox">

                Terrace

              </label>

            </li>

            <li class="checkbox">

              <label>

                <input type="checkbox">

                Books, DVDs & music for kids

              </label>

            </li>

            <li class="checkbox">

              <label>

                <input type="checkbox">

                On-site parking

              </label>

            </li>

            <li class="checkbox">

              <label>

                <input type="checkbox">

                Dry cleaning

              </label>

            </li>

            <li class="checkbox">

              <label>

                <input type="checkbox">

                Pool

              </label>

            </li>

          </ul>

        </div>

      </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">

      <div class="hotel-bg">

        <!--Agent Fare start-->

        <a href="#agentfare" class="agentfare-h" data-toggle="collapse"><i class="fa fa-eye"></i></a>

        <div class="agentfared-h collapse" id="agentfare">

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

          <div class="col-12 col-sm-4 col-md-3 col-lg-3">

            <a href="{{route('front.hotel_details')}}">

              <img src="img/t1.png" class="himg" alt="">

            </a>

          </div>

          <div class="col-12 col-sm-8 col-md-6 col-lg-6">

            <h2 class="ht">

              <a href="{{route('front.hotel_details')}}">Dublin Central Inn (formerly Dublin City Inn Talbot Street)</a>

            </h2>

            <span class="rate">

              <i class="fa fa-star"></i>

              <i class="fa fa-star"></i>

              <i class="fa fa-star"></i>

              <i class="fa fa-star"></i>

              <i class="fa fa-star"></i>

            </span>

            <span class="location">

              <i class="fa fa-map-marker"></i> Dublin

            </span>



            <div class="faci">

              <small><i class="fa fa-ticket"></i> Free Cancellation</small>

              <small><i class="fa fa-wifi"></i> Free WiFi</small>

            </div>

          </div>

          <div class="col-12 col-sm-12 col-md-3 col-lg-3">

            <div class="price">

              <span>Rs 44,427</span>

              <small>For 3 nights</small>

            </div>

            <a href="#!" class="book">Book Now</a>

          </div>

        </div>

      </div>



      <div class="hotel-bg">

        <!--Agent Fare start-->

        <a href="#agentfare2" class="agentfare-h" data-toggle="collapse"><i class="fa fa-eye"></i></a>

        <div class="agentfared-h collapse" id="agentfare2">

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

          <div class="col-12 col-sm-4 col-md-3 col-lg-3">

            <a href="{{route('front.hotel_details')}}">

              <img src="img/t2.png" class="himg" alt="">

            </a>

          </div>

          <div class="col-12 col-sm-8 col-md-6 col-lg-6">

            <h2 class="ht">

              <a href="{{route('front.hotel_details')}}">Dublin Central Inn (formerly Dublin City Inn Talbot Street)</a>

            </h2>

            <span class="rate">

              <i class="fa fa-star"></i>

              <i class="fa fa-star"></i>

              <i class="fa fa-star"></i>

              <i class="fa fa-star"></i>

              <i class="fa fa-star"></i>

            </span>

            <span class="location">

              <i class="fa fa-map-marker"></i> Dublin

            </span>



            <div class="faci">

              <small><i class="fa fa-ticket"></i> Free Cancellation</small>

              <small><i class="fa fa-wifi"></i> Free WiFi</small>

            </div>

          </div>

          <div class="col-12 col-sm-12 col-md-3 col-lg-3">

            <div class="price">

              <span>Rs 44,427</span>

              <small>For 3 nights</small>

            </div>

            <a href="#!" class="book">Book Now</a>

          </div>

        </div>

      </div>



      <div class="hotel-bg">

        <!--Agent Fare start-->

        <a href="#agentfare3" class="agentfare-h" data-toggle="collapse"><i class="fa fa-eye"></i></a>

        <div class="agentfared-h collapse" id="agentfare3">

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

          <div class="col-12 col-sm-4 col-md-3 col-lg-3">

            <a href="{{route('front.hotel_details')}}">

              <img src="img/t3.png" class="himg" alt="">

            </a>

          </div>

          <div class="col-12 col-sm-8 col-md-6 col-lg-6">

            <h2 class="ht">

              <a href="{{route('front.hotel_details')}}">Dublin Central Inn (formerly Dublin City Inn Talbot Street)</a>

            </h2>

            <span class="rate">

              <i class="fa fa-star"></i>

              <i class="fa fa-star"></i>

              <i class="fa fa-star"></i>

              <i class="fa fa-star"></i>

              <i class="fa fa-star"></i>

            </span>

            <span class="location">

              <i class="fa fa-map-marker"></i> Dublin

            </span>



            <div class="faci">

              <small><i class="fa fa-ticket"></i> Free Cancellation</small>

              <small><i class="fa fa-wifi"></i> Free WiFi</small>

            </div>

          </div>

          <div class="col-12 col-sm-12 col-md-3 col-lg-3">

            <div class="price">

              <span>Rs 44,427</span>

              <small>For 3 nights</small>

            </div>

            <a href="#!" class="book">Book Now</a>

          </div>

        </div>

      </div>



      <div class="hotel-bg">

        <!--Agent Fare start-->

        <a href="#agentfare4" class="agentfare-h" data-toggle="collapse"><i class="fa fa-eye"></i></a>

        <div class="agentfared-h collapse" id="agentfare4">

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

          <div class="col-12 col-sm-4 col-md-3 col-lg-3">

            <a href="{{route('front.hotel_details')}}">

              <img src="img/t4.png" class="himg" alt="">

            </a>

          </div>

          <div class="col-12 col-sm-8 col-md-6 col-lg-6">

            <h2 class="ht">

              <a href="{{route('front.hotel_details')}}">Dublin Central Inn (formerly Dublin City Inn Talbot Street)</a>

            </h2>

            <span class="rate">

              <i class="fa fa-star"></i>

              <i class="fa fa-star"></i>

              <i class="fa fa-star"></i>

              <i class="fa fa-star"></i>

              <i class="fa fa-star"></i>

            </span>

            <span class="location">

              <i class="fa fa-map-marker"></i> Dublin

            </span>



            <div class="faci">

              <small><i class="fa fa-ticket"></i> Free Cancellation</small>

              <small><i class="fa fa-wifi"></i> Free WiFi</small>

            </div>

          </div>

          <div class="col-12 col-sm-12 col-md-3 col-lg-3">

            <div class="price">

              <span>Rs 44,427</span>

              <small>For 3 nights</small>

            </div>

            <a href="#!" class="book">Book Now</a>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>
<!--Content end-->

@endsection