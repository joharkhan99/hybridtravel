@extends('layouts.front')

@section('content')

<!--Search start-->
<div class="search-int">

  <div class="container">

    <div class="row">

      <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">

        <!--One way and Round trip-->

        <div class="row int">

          <div class="col-6 col-sm-4 col-md-4 col-lg-4">

            <div class="text-box">

              <span>STARTING FROM</span>

              <input type="text" value="New Delhi" required="">

            </div>

          </div>

          <div class="col-6 col-sm-4 col-md-4 col-lg-4">

            <div class="text-box">

              <span>GOING TO</span>

              <input type="text" value="Bali" required="">

            </div>

          </div>

          <div class="col-12 col-sm-4 col-md-4 col-lg-4">

            <div class="text-box">

              <span>DURING</span>

              <input type="text" placeholder="" data-language="en" class="datepicker-here">

            </div>

          </div>

        </div>



      </div>

      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">

        <button class="btn-search1">Search</button>

      </div>

    </div>

  </div>

</div>
<!--Search start-->

<!--Content start-->
<div class="container">

  <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">

      <div class="filter-head">188 of 188 Holidays <i class="fa fa-filter"></i></div>

      <div class="filter-side">

        <h3>Price: ₹ 3000 - ₹ 30000</h3>

        <input id="price" type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[150,750]">

        <br><br>



        <h3>Trip Duration</h3>

        <div class="scrollbar" id="scrollbarstyle">

          <ul class="speed-banking force-overflow">

            <li class="checkbox">

              <label>

                <input type="checkbox">

                Up To 3 Nights

              </label>

            </li>

            <li class="checkbox">

              <label>

                <input type="checkbox">

                4 - 6 Nights

              </label>

            </li>

            <li class="checkbox">

              <label>

                <input type="checkbox">

                7 - 10 Nights

              </label>

            </li>

            <li class="checkbox">

              <label>

                <input type="checkbox">

                11 - 15 Nights

              </label>

            </li>

          </ul>

        </div>



        <h3>Hotel Category</h3>

        <div class="scrollbar" id="scrollbarstyle">

          <ul class="speed-banking force-overflow">

            <li class="checkbox">

              <label>

                <input type="checkbox">

                5 Star

              </label>

            </li>

            <li class="checkbox">

              <label>

                <input type="checkbox">

                4 Star

              </label>

            </li>

            <li class="checkbox">

              <label>

                <input type="checkbox">

                Up To 3 Star

              </label>

            </li>

          </ul>

        </div>



        <h3>Travel Option</h3>

        <div class="scrollbar" id="scrollbarstyle">

          <ul class="force-overflow">

            <li class="checkbox"><label><input type="checkbox"> By Flight</label></li>

            <li class="checkbox"><label><input type="checkbox"> By Car</label></li>

            <li class="checkbox"><label><input type="checkbox"> By Bus</label></li>

            <li class="checkbox"><label><input type="checkbox"> Includes Sightseeing</label></li>

            <li class="checkbox"><label><input type="checkbox"> Includes Meals</label></li>

          </ul>

        </div>



        <h3>Themes</h3>

        <div class="scrollbar" id="scrollbarstyle">

          <ul class="speed-banking force-overflow">

            <li class="checkbox">

              <label>

                <input type="checkbox">

                Beach

              </label>

            </li>

            <li class="checkbox">

              <label>

                <input type="checkbox">

                Honeymoon

              </label>

            </li>

            <li class="checkbox">

              <label>

                <input type="checkbox">

                Luxury

              </label>

            </li>

            <li class="checkbox">

              <label>

                <input type="checkbox">

                Cruise

              </label>

            </li>

            <li class="checkbox">

              <label>

                <input type="checkbox">

                Hot & New

              </label>

            </li>

            <li class="checkbox">

              <label>

                <input type="checkbox">

                Adventure

              </label>

            </li>

            <li class="checkbox">

              <label>

                <input type="checkbox">

                Leisure

              </label>

            </li>

            <li class="checkbox">

              <label>

                <input type="checkbox">

                Hill Station

              </label>

            </li>

            <li class="checkbox">

              <label>

                <input type="checkbox">

                Group Tours

              </label>

            </li>

          </ul>

        </div>

      </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">

      <!--Holidays 01-->
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

            <a href="{{route('front.holidays_details')}}">

              <img src="img/t1.png" class="himg" alt="">

            </a>

          </div>

          <div class="col-12 col-sm-8 col-md-6 col-lg-6">

            <h2 class="ht">

              <a href="{{route('front.holidays_details')}}">2 Nights Kuala Lumpur & 3 Nights Bali</a>

            </h2>

            <span class="rate">

              5 Nights 6 Days

            </span>

            <span class="location">

              2N Kuala Lumpur - 3N Bali

            </span>

            <div class="faci">

              <small>Included at this price</small><br>

              <small><i class="fa fa-hotel"></i> Hotels</small>

              <small><i class="fa fa-plane"></i> Flight</small>

              <small><i class="fa fa-star-o"></i> Activities</small>

              <small><i class="fa fa-car"></i> Transfer</small>

              <small><i class="fa fa-ticket"></i> Visa</small>

            </div>

          </div>

          <div class="col-12 col-sm-12 col-md-3 col-lg-3">

            <div class="price">

              <span>Rs 44,427</span>

              <small>

                Price Per Person

              </small>

            </div>

            <a href="{{route('front.holidays_details')}}" class="book">View Details</a>

          </div>

        </div>

      </div>


      <!--Holidays 02-->
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

            <a href="{{route('front.holidays_details')}}">

              <img src="img/t3.png" class="himg" alt="">

            </a>

          </div>

          <div class="col-12 col-sm-8 col-md-6 col-lg-6">

            <h2 class="ht">

              <a href="{{route('front.holidays_details')}}">2 Nights Kuala Lumpur & 3 Nights Bali</a>

            </h2>

            <span class="rate">

              5 Nights 6 Days

            </span>

            <span class="location">

              2N Kuala Lumpur - 3N Bali

            </span>

            <div class="faci">

              <small>Included at this price</small><br>

              <small><i class="fa fa-hotel"></i> Hotels</small>

              <small><i class="fa fa-plane"></i> Flight</small>

              <small><i class="fa fa-star-o"></i> Activities</small>

              <small><i class="fa fa-car"></i> Transfer</small>

              <small><i class="fa fa-ticket"></i> Visa</small>

            </div>

          </div>

          <div class="col-12 col-sm-12 col-md-3 col-lg-3">

            <div class="price">

              <span>Rs 44,427</span>

              <small>

                Price Per Person

              </small>

            </div>

            <a href="{{route('front.holidays_details')}}" class="book">View Details</a>

          </div>

        </div>

      </div>


      <!--Holidays 03-->
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

            <a href="{{route('front.holidays_details')}}">

              <img src="img/t2.png" class="himg" alt="">

            </a>

          </div>

          <div class="col-12 col-sm-8 col-md-6 col-lg-6">

            <h2 class="ht">

              <a href="{{route('front.holidays_details')}}">2 Nights Kuala Lumpur & 3 Nights Bali</a>

            </h2>

            <span class="rate">

              5 Nights 6 Days

            </span>

            <span class="location">

              2N Kuala Lumpur - 3N Bali

            </span>

            <div class="faci">

              <small>Included at this price</small><br>

              <small><i class="fa fa-hotel"></i> Hotels</small>

              <small><i class="fa fa-plane"></i> Flight</small>

              <small><i class="fa fa-star-o"></i> Activities</small>

              <small><i class="fa fa-car"></i> Transfer</small>

              <small><i class="fa fa-ticket"></i> Visa</small>

            </div>

          </div>

          <div class="col-12 col-sm-12 col-md-3 col-lg-3">

            <div class="price">

              <span>Rs 44,427</span>

              <small>

                Price Per Person

              </small>

            </div>

            <a href="{{route('front.holidays_details')}}" class="book">View Details</a>

          </div>

        </div>

      </div>


      <!--Holidays 04-->
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

            <a href="{{route('front.holidays_details')}}">

              <img src="img/t4.png" class="himg" alt="">

            </a>

          </div>

          <div class="col-12 col-sm-8 col-md-6 col-lg-6">

            <h2 class="ht">

              <a href="{{route('front.holidays_details')}}">2 Nights Kuala Lumpur & 3 Nights Bali</a>

            </h2>

            <span class="rate">

              5 Nights 6 Days

            </span>

            <span class="location">

              2N Kuala Lumpur - 3N Bali

            </span>

            <div class="faci">

              <small>Included at this price</small><br>

              <small><i class="fa fa-hotel"></i> Hotels</small>

              <small><i class="fa fa-plane"></i> Flight</small>

              <small><i class="fa fa-star-o"></i> Activities</small>

              <small><i class="fa fa-car"></i> Transfer</small>

              <small><i class="fa fa-ticket"></i> Visa</small>

            </div>

          </div>

          <div class="col-12 col-sm-12 col-md-3 col-lg-3">

            <div class="price">

              <span>Rs 44,427</span>

              <small>

                Price Per Person

              </small>

            </div>

            <a href="{{route('front.holidays_details')}}" class="book">View Details</a>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>
<!--Content end-->

@endsection