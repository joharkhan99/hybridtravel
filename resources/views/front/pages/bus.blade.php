@extends('layouts.front')

@section('content')

<!--Search start-->
<div class="search-int">

  <div class="container">

    <div class="row">

      <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">

        <!--One way and ROund trip-->

        <div class="row int">

          <div class="col-6 col-sm-6 col-md-6 col-lg-3">

            <div class="text-box">

              <span>From</span>

              <input type="text" value="Delhi">

            </div>

          </div>

          <div class="col-6 col-sm-6 col-md-6 col-lg-3">

            <div class="text-box">

              <span>To</span>

              <input type="text" value="Kanpur, Uttar Pradesh">

            </div>

          </div>

          <div class="col-6 col-sm-6 col-md-6 col-lg-3">

            <div class="text-box">

              <span>Depart</span>

              <input type="text" value="05/07/2019" data-language="en" class="datepicker-here">

            </div>

          </div>

          <div class="col-6 col-sm-6 col-md-6 col-lg-3">

            <div class="text-box">

              <span>PASSENGERS</span>

              <input type="text" class="cursor" value="1+ Adult" data-toggle="collapse" data-target="#option1">

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

          </div>

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

      <div class="filter-head">188 of 188 Bus <i class="fa fa-filter"></i></div>

      <div class="filter-side">

        <h3>Price: ₹ 1000 - ₹ 6000</h3>

        <input id="price" type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[150,750]">

        <br><br>



        <h3>Bus Types</h3>
        <div>
          <label><input type="checkbox"> AC Seater</label>
          <label><input type="checkbox"> AC Sleeper</label>
          <label><input type="checkbox"> Non-AC Seater</label>
          <label><input type="checkbox"> Non-AC Sleeper</label>
        </div>


        <h3>Travel Operators</h3>

        <div class="scrollbar" id="scrollbarstyle">

          <ul class="force-overflow">

            <li class="checkbox"><label><input type="checkbox"> H S India Tour and Tour</label></li>

            <li class="checkbox"><label><input type="checkbox"> Dhruv Travels</label></li>

            <li class="checkbox"><label><input type="checkbox"> Maheshwaram Travels</label></li>

            <li class="checkbox"><label><input type="checkbox"> Raj Shila Travels and Cargo</label></li>

            <li class="checkbox"><label><input type="checkbox"> Yolo Bus</label></li>

            <li class="checkbox"><label><input type="checkbox"> zingbus</label></li>

          </ul>

        </div>


        <h3>Pickup Time</h3>

        <div class="scrollbar" id="scrollbarstyle">

          <ul class="force-overflow">

            <li class="checkbox"><label><input type="checkbox"> Morning (6AM to 12PM)</label></li>

            <li class="checkbox"><label><input type="checkbox"> Afternoon (12PM - 6PM)</label></li>

            <li class="checkbox"><label><input type="checkbox"> Evening (6PM - 12AM)</label></li>

            <li class="checkbox"><label><input type="checkbox"> Night (12AM - 6AM)</label></li>

          </ul>

        </div>


        <h3>Drop Time</h3>

        <div class="scrollbar" id="scrollbarstyle">

          <ul class="speed-banking force-overflow">

            <li class="checkbox"><label><input type="checkbox"> Morning (6AM to 12PM)</label></li>

            <li class="checkbox"><label><input type="checkbox"> Afternoon (12PM - 6PM)</label></li>

            <li class="checkbox"><label><input type="checkbox"> Evening (6PM - 12AM)</label></li>

            <li class="checkbox"><label><input type="checkbox"> Night (12AM - 6AM)</label></li>

          </ul>

        </div>


        <h3>Pickup Points</h3>

        <div class="scrollbar" id="scrollbarstyle">

          <ul class="speed-banking force-overflow">

            <li class="checkbox"><label><input type="checkbox"> Akshardham</label></li>

            <li class="checkbox"><label><input type="checkbox"> ISBT</label></li>

            <li class="checkbox"><label><input type="checkbox"> Shaheen Bagh</label></li>

            <li class="checkbox"><label><input type="checkbox"> Others</label></li>

          </ul>

        </div>


        <h3>Drop Points</h3>

        <div class="scrollbar" id="scrollbarstyle">

          <ul class="speed-banking force-overflow">

            <li class="checkbox"><label><input type="checkbox"> Kanpur</label></li>

            <li class="checkbox"><label><input type="checkbox"> Noida</label></li>

            <li class="checkbox"><label><input type="checkbox"> Lucknow</label></li>

            <li class="checkbox"><label><input type="checkbox"> Others</label></li>

          </ul>

        </div>

      </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">

      <!--Bus 01 start-->
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

            <img src="{{URL::asset('assets/img/bus/b1.png')}}" class="flogo" alt="">

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">10:00</span>

            New Delhi

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">6H :10M </span>

            2 STOP

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">07:30</span>

            Kanpur, UP

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2 price">

            <small>Rs 999</small><span>Rs 699</span>

            <!--<small>Rs 5,110 Instant Discount</small>-->

          </div>

          <div class="col-12 col-sm-2 col-md-2 col-lg-2">
            <span class="bus-seats">36 Seats Left</span>
            <a href="#selectSeat" data-toggle="collapse" class="book">Select Seat</a>

          </div>

        </div>

        <div class="flight-detail-bg">

          <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6">

              <h2>Blueworld tourist private limited</h2>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-2">

              <a href="#!" class="details" data-toggle="collapse" data-target="#policies">Policies</a>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-2">

              <a href="#!" class="details" data-toggle="collapse" data-target="#pickupsDrops">Pickups & Drops</a>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-2">

              <a href="#!" class="details" data-toggle="collapse" data-target="#amenitiesDetails">+3 Amenities</a>

            </div>

          </div>

        </div>

        <!--Select Seat Start-->
        <div class="select-seat collapse" id="selectSeat">

          <div class="seat">
            <div class="row">

              <div class="col-sm-12 col-md-4 col-lg-2 driver-s">

              </div>

              <div class="col-sm-12 col-md-8 col-lg-10">

                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="seat-title">
                      UPPER
                    </div>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 1</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 4</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>UD 7</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 10</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 13</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>UD 16</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 2</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 5</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>UD 8</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 11</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 14</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 17</small>
                      </span>
                    </label>
                  </div>

                </div>

                <div class="row single">

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 3</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 6</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 9</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 12</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 15</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>UD 18</small>
                      </span>
                    </label>
                  </div>

                </div>

              </div>

            </div>
          </div>

          <div class="seat">
            <div class="row">

              <div class="col-sm-12 col-md-4 col-lg-2 driver-s">

              </div>

              <div class="col-sm-12 col-md-8 col-lg-10">

                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="seat-title">
                      LOWER
                    </div>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 1</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 4</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>LD 7</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 10</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 13</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>LD 16</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 2</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 5</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>LD 8</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 11</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 14</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 17</small>
                      </span>
                    </label>
                  </div>

                </div>

                <div class="row single">

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 3</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 6</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 9</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 12</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 15</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>LD 18</small>
                      </span>
                    </label>
                  </div>

                </div>

              </div>

            </div>
          </div>

          <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
              <div class="seat-info">
                <span class="available">Available</span>
                <span class="bookedinfo">Booked</span>
                <span class="ladies">Ladies</span>
                <span class="blocked">Blocked</span>
              </div>
              <div class="seat-count">
                3 <small>Seats Selected: UD 6, LD 6, LD 9</small>
              </div>


              <div class="row">

                <div class="col-12 col-sm-6 col-md-6 col-lg-6">

                  <div class="text-box1">

                    <span>Pickup Points</span>
                    <select>
                      <option>Select Time and Location</option>
                      <option>19:15, Shop No.24 New Market Mori Gate Golchakkar Near Madrashi Colony Delhi</option>
                    </select>

                  </div>

                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-6">

                  <div class="text-box1">

                    <span>Drop Points</span>
                    <select>
                      <option>Select Time and Location</option>
                      <option>03:55, Kalpana Travels Fazalganj</option>
                      <option>04:20, Rama Devi Naubasta Flyover</option>
                    </select>

                  </div>

                </div>

              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <a href="{{route('user.my_bus')}}" class="book-seat-btn">Book Seats</a>
              <span class="total-amount"><i class="fa fa-rupee"></i> 2097</span>
            </div>
          </div>

        </div>
        <!--Select Seat End-->

        <!--Pickups & Drops details start-->
        <div class="fare collapse" id="pickupsDrops">

          <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="table-responsive">

                <table class="table table-bordered">

                  <thead>

                    <tr>

                      <th colspan="2">Pickup Points</th>

                    </tr>

                  </thead>
                  <tbody>
                    <tr>
                      <td>Time</td>
                      <td>Location</td>
                    </tr>

                    <tr>
                      <td>19:15</td>
                      <td>Shop No.24 New Market Mori Gate Golchakkar Near Madrashi Colony Delhi</td>

                    </tr>
                  </tbody>

                </table>

              </div>

            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="table-responsive">

                <table class="table table-bordered">

                  <thead>

                    <tr>

                      <th colspan="3">Drop Points</th>

                    </tr>

                  </thead>

                  <tbody>
                    <tr>
                      <td>Time</td>
                      <td>Location</td>
                    </tr>

                    <tr>
                      <td>03:55</td>
                      <td>Kalpana Travels Fazalganj</td>
                    </tr>
                    <tr>
                      <td>04:20</td>
                      <td>Rama Devi Naubasta Flyover</td>
                    </tr>
                  </tbody>

                </table>

              </div>

            </div>

          </div>

        </div>
        <!--Pickups & Drops details end-->

        <!--Amenities Details Start-->
        <div class="flight-detail collapse" id="amenitiesDetails">
          <div class="amenities-details">

            <div class="row">

              <div class="col-6 col-sm-6 col-md-6 col-lg-3">

                <i class="fa fa-wifi"></i> Wifi

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
        <!--Amenities Details End-->

        <!--Policies details start-->
        <div class="fare collapse" id="policies">

          <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="table-responsive">

                <table class="table table-bordered">

                  <thead>

                    <tr>

                      <th> TIME OF CANCELLATION </th>
                      <th> CHARGES </th>

                    </tr>

                  </thead>
                  <tbody>
                    <tr>

                      <td>More than 24 hrs before travel</td>

                      <td>10 %</td>

                    </tr>
                    <tr>

                      <td>12 to 24 hr(s) before travel</td>

                      <td>40 %</td>

                    </tr>
                    <tr>

                      <td>0 to 12 hr(s) before travel</td>

                      <td>100 %</td>

                    </tr>
                  </tbody>

                </table>

              </div>

            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="table-responsive">

                <table class="table">

                  <thead>

                    <tr>

                      <th> OTHER CONDITIONS</th>

                    </tr>

                  </thead>
                  <tbody>
                    <tr>
                      <td>* The penalty is calculated based on total seat worth 699</td>
                    </tr>
                    <tr>
                      <td>* Penalty is calculated basis the scheduled bus departure time from the first boarding point at: 18-11-2020 19:15</td>
                    </tr>
                    <tr>
                      <td>* Partial cancellation is not allowed for this ticket.</td>
                    </tr>
                    <tr>
                      <td>* Please note : the ticket cannot be cancelled after the bus departs from the first boarding point.</td>
                    </tr>
                    <tr>
                      <td>* Above defined cancellation charges are illustrated basis maximum fare applicable. Exact cancellation charges will depend on the final price charged along with discount and
                        other adjustments.</td>
                    </tr>
                    <tr>
                      <td>* Cancellation amount shown above may also vary basis the non-refundable components of the ticket defined by the bus operator</td>
                    </tr>
                  </tbody>

                </table>

              </div>

            </div>

          </div>

        </div>
        <!--Policies details end-->


      </div>
      <!--Bus 01 end-->


      <!--Bus 02 start-->
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

            <img src="{{URL::asset('assets/img/bus/b1.png')}}" class="flogo" alt="">

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">10:00</span>

            New Delhi

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">6H :10M </span>

            2 STOP

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">07:30</span>

            Kanpur, UP

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2 price">

            <small>Rs 999</small><span>Rs 699</span>

            <!--<small>Rs 5,110 Instant Discount</small>-->

          </div>

          <div class="col-12 col-sm-2 col-md-2 col-lg-2">
            <span class="bus-seats">36 Seats Left</span>
            <a href="#selectSeat2" data-toggle="collapse" class="book">Select Seat</a>

          </div>

        </div>

        <div class="flight-detail-bg">

          <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6">

              <h2>Blueworld tourist private limited</h2>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-2">

              <a href="#!" class="details" data-toggle="collapse" data-target="#policies2">Policies</a>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-2">

              <a href="#!" class="details" data-toggle="collapse" data-target="#pickupsDrops2">Pickups & Drops</a>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-2">

              <a href="#!" class="details" data-toggle="collapse" data-target="#amenitiesDetails2">+3 Amenities</a>

            </div>

          </div>

        </div>

        <!--Select Seat Start-->
        <div class="select-seat collapse" id="selectSeat2">

          <div class="seat">
            <div class="row">

              <div class="col-sm-12 col-md-4 col-lg-2 driver-s">

              </div>

              <div class="col-sm-12 col-md-8 col-lg-10">

                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="seat-title">
                      UPPER
                    </div>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 1</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 4</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>UD 7</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 10</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 13</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>UD 16</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 2</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 5</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>UD 8</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 11</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 14</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 17</small>
                      </span>
                    </label>
                  </div>

                </div>

                <div class="row single">

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 3</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 6</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 9</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 12</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 15</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>UD 18</small>
                      </span>
                    </label>
                  </div>

                </div>

              </div>

            </div>
          </div>

          <div class="seat">
            <div class="row">

              <div class="col-sm-12 col-md-4 col-lg-2 driver-s">

              </div>

              <div class="col-sm-12 col-md-8 col-lg-10">

                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="seat-title">
                      LOWER
                    </div>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 1</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 4</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>LD 7</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 10</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 13</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>LD 16</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 2</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 5</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>LD 8</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 11</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 14</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 17</small>
                      </span>
                    </label>
                  </div>

                </div>

                <div class="row single">

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 3</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 6</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 9</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 12</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 15</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>LD 18</small>
                      </span>
                    </label>
                  </div>

                </div>

              </div>

            </div>
          </div>

          <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
              <div class="seat-info">
                <span class="available">Available</span>
                <span class="bookedinfo">Booked</span>
                <span class="ladies">Ladies</span>
                <span class="blocked">Blocked</span>
              </div>
              <div class="seat-count">
                3 <small>Seats Selected: UD 6, LD 6, LD 9</small>
              </div>


              <div class="row">

                <div class="col-12 col-sm-6 col-md-6 col-lg-6">

                  <div class="text-box1">

                    <span>Pickup Points</span>
                    <select>
                      <option>Select Time and Location</option>
                      <option>19:15, Shop No.24 New Market Mori Gate Golchakkar Near Madrashi Colony Delhi</option>
                    </select>

                  </div>

                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-6">

                  <div class="text-box1">

                    <span>Drop Points</span>
                    <select>
                      <option>Select Time and Location</option>
                      <option>03:55, Kalpana Travels Fazalganj</option>
                      <option>04:20, Rama Devi Naubasta Flyover</option>
                    </select>

                  </div>

                </div>

              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <a href="{{route('user.my_bus')}}" class="book-seat-btn">Book Seats</a>
              <span class="total-amount"><i class="fa fa-rupee"></i> 2097</span>
            </div>
          </div>

        </div>
        <!--Select Seat End-->

        <!--Pickups & Drops details start-->
        <div class="fare collapse" id="pickupsDrops2">

          <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="table-responsive">

                <table class="table table-bordered">

                  <thead>

                    <tr>

                      <th colspan="2">Pickup Points</th>

                    </tr>

                  </thead>
                  <tbody>
                    <tr>
                      <td>Time</td>
                      <td>Location</td>
                    </tr>

                    <tr>
                      <td>19:15</td>
                      <td>Shop No.24 New Market Mori Gate Golchakkar Near Madrashi Colony Delhi</td>

                    </tr>
                  </tbody>

                </table>

              </div>

            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="table-responsive">

                <table class="table table-bordered">

                  <thead>

                    <tr>

                      <th colspan="3">Drop Points</th>

                    </tr>

                  </thead>

                  <tbody>
                    <tr>
                      <td>Time</td>
                      <td>Location</td>
                    </tr>

                    <tr>
                      <td>03:55</td>
                      <td>Kalpana Travels Fazalganj</td>
                    </tr>
                    <tr>
                      <td>04:20</td>
                      <td>Rama Devi Naubasta Flyover</td>
                    </tr>
                  </tbody>

                </table>

              </div>

            </div>

          </div>

        </div>
        <!--Pickups & Drops details end-->

        <!--Amenities Details Start-->
        <div class="flight-detail collapse" id="amenitiesDetails2">
          <div class="amenities-details">

            <div class="row">

              <div class="col-6 col-sm-6 col-md-6 col-lg-3">

                <i class="fa fa-wifi"></i> Wifi

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
        <!--Amenities Details End-->

        <!--Policies details start-->
        <div class="fare collapse" id="policies2">

          <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="table-responsive">

                <table class="table table-bordered">

                  <thead>

                    <tr>

                      <th> TIME OF CANCELLATION </th>
                      <th> CHARGES </th>

                    </tr>

                  </thead>
                  <tbody>
                    <tr>

                      <td>More than 24 hrs before travel</td>

                      <td>10 %</td>

                    </tr>
                    <tr>

                      <td>12 to 24 hr(s) before travel</td>

                      <td>40 %</td>

                    </tr>
                    <tr>

                      <td>0 to 12 hr(s) before travel</td>

                      <td>100 %</td>

                    </tr>
                  </tbody>

                </table>

              </div>

            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="table-responsive">

                <table class="table">

                  <thead>

                    <tr>

                      <th> OTHER CONDITIONS</th>

                    </tr>

                  </thead>
                  <tbody>
                    <tr>
                      <td>* The penalty is calculated based on total seat worth 699</td>
                    </tr>
                    <tr>
                      <td>* Penalty is calculated basis the scheduled bus departure time from the first boarding point at: 18-11-2020 19:15</td>
                    </tr>
                    <tr>
                      <td>* Partial cancellation is not allowed for this ticket.</td>
                    </tr>
                    <tr>
                      <td>* Please note : the ticket cannot be cancelled after the bus departs from the first boarding point.</td>
                    </tr>
                    <tr>
                      <td>* Above defined cancellation charges are illustrated basis maximum fare applicable. Exact cancellation charges will depend on the final price charged along with discount and
                        other adjustments.</td>
                    </tr>
                    <tr>
                      <td>* Cancellation amount shown above may also vary basis the non-refundable components of the ticket defined by the bus operator</td>
                    </tr>
                  </tbody>

                </table>

              </div>

            </div>

          </div>

        </div>
        <!--Policies details end-->


      </div>
      <!--Bus 02 end-->


      <!--Bus 03 start-->
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

            <img src="{{URL::asset('assets/img/bus/b1.png')}}" class="flogo" alt="">

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">10:00</span>

            New Delhi

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">6H :10M </span>

            2 STOP

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">07:30</span>

            Kanpur, UP

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2 price">

            <small>Rs 999</small><span>Rs 699</span>

            <!--<small>Rs 5,110 Instant Discount</small>-->

          </div>

          <div class="col-12 col-sm-2 col-md-2 col-lg-2">
            <span class="bus-seats">36 Seats Left</span>
            <a href="#selectSeat3" data-toggle="collapse" class="book">Select Seat</a>

          </div>

        </div>

        <div class="flight-detail-bg">

          <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6">

              <h2>Blueworld tourist private limited</h2>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-2">

              <a href="#!" class="details" data-toggle="collapse" data-target="#policies3">Policies</a>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-2">

              <a href="#!" class="details" data-toggle="collapse" data-target="#pickupsDrops3">Pickups & Drops</a>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-2">

              <a href="#!" class="details" data-toggle="collapse" data-target="#amenitiesDetails3">+3 Amenities</a>

            </div>

          </div>

        </div>

        <!--Select Seat Start-->
        <div class="select-seat collapse" id="selectSeat3">

          <div class="seat">
            <div class="row">

              <div class="col-sm-12 col-md-4 col-lg-2 driver-s">

              </div>

              <div class="col-sm-12 col-md-8 col-lg-10">

                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="seat-title">
                      UPPER
                    </div>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 1</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 4</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>UD 7</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 10</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 13</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>UD 16</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 2</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 5</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>UD 8</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 11</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 14</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 17</small>
                      </span>
                    </label>
                  </div>

                </div>

                <div class="row single">

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 3</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 6</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 9</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 12</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 15</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>UD 18</small>
                      </span>
                    </label>
                  </div>

                </div>

              </div>

            </div>
          </div>

          <div class="seat">
            <div class="row">

              <div class="col-sm-12 col-md-4 col-lg-2 driver-s">

              </div>

              <div class="col-sm-12 col-md-8 col-lg-10">

                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="seat-title">
                      LOWER
                    </div>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 1</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 4</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>LD 7</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 10</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 13</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>LD 16</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 2</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 5</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>LD 8</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 11</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 14</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 17</small>
                      </span>
                    </label>
                  </div>

                </div>

                <div class="row single">

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 3</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 6</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 9</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 12</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 15</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>LD 18</small>
                      </span>
                    </label>
                  </div>

                </div>

              </div>

            </div>
          </div>

          <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
              <div class="seat-info">
                <span class="available">Available</span>
                <span class="bookedinfo">Booked</span>
                <span class="ladies">Ladies</span>
                <span class="blocked">Blocked</span>
              </div>
              <div class="seat-count">
                3 <small>Seats Selected: UD 6, LD 6, LD 9</small>
              </div>


              <div class="row">

                <div class="col-12 col-sm-6 col-md-6 col-lg-6">

                  <div class="text-box1">

                    <span>Pickup Points</span>
                    <select>
                      <option>Select Time and Location</option>
                      <option>19:15, Shop No.24 New Market Mori Gate Golchakkar Near Madrashi Colony Delhi</option>
                    </select>

                  </div>

                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-6">

                  <div class="text-box1">

                    <span>Drop Points</span>
                    <select>
                      <option>Select Time and Location</option>
                      <option>03:55, Kalpana Travels Fazalganj</option>
                      <option>04:20, Rama Devi Naubasta Flyover</option>
                    </select>

                  </div>

                </div>

              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <a href="{{route('user.my_bus')}}" class="book-seat-btn">Book Seats</a>
              <span class="total-amount"><i class="fa fa-rupee"></i> 2097</span>
            </div>
          </div>

        </div>
        <!--Select Seat End-->

        <!--Pickups & Drops details start-->
        <div class="fare collapse" id="pickupsDrops3">

          <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="table-responsive">

                <table class="table table-bordered">

                  <thead>

                    <tr>

                      <th colspan="2">Pickup Points</th>

                    </tr>

                  </thead>
                  <tbody>
                    <tr>
                      <td>Time</td>
                      <td>Location</td>
                    </tr>

                    <tr>
                      <td>19:15</td>
                      <td>Shop No.24 New Market Mori Gate Golchakkar Near Madrashi Colony Delhi</td>

                    </tr>
                  </tbody>

                </table>

              </div>

            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="table-responsive">

                <table class="table table-bordered">

                  <thead>

                    <tr>

                      <th colspan="3">Drop Points</th>

                    </tr>

                  </thead>

                  <tbody>
                    <tr>
                      <td>Time</td>
                      <td>Location</td>
                    </tr>

                    <tr>
                      <td>03:55</td>
                      <td>Kalpana Travels Fazalganj</td>
                    </tr>
                    <tr>
                      <td>04:20</td>
                      <td>Rama Devi Naubasta Flyover</td>
                    </tr>
                  </tbody>

                </table>

              </div>

            </div>

          </div>

        </div>
        <!--Pickups & Drops details end-->

        <!--Amenities Details Start-->
        <div class="flight-detail collapse" id="amenitiesDetails3">
          <div class="amenities-details">

            <div class="row">

              <div class="col-6 col-sm-6 col-md-6 col-lg-3">

                <i class="fa fa-wifi"></i> Wifi

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
        <!--Amenities Details End-->

        <!--Policies details start-->
        <div class="fare collapse" id="policies3">

          <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="table-responsive">

                <table class="table table-bordered">

                  <thead>

                    <tr>

                      <th> TIME OF CANCELLATION </th>
                      <th> CHARGES </th>

                    </tr>

                  </thead>
                  <tbody>
                    <tr>

                      <td>More than 24 hrs before travel</td>

                      <td>10 %</td>

                    </tr>
                    <tr>

                      <td>12 to 24 hr(s) before travel</td>

                      <td>40 %</td>

                    </tr>
                    <tr>

                      <td>0 to 12 hr(s) before travel</td>

                      <td>100 %</td>

                    </tr>
                  </tbody>

                </table>

              </div>

            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="table-responsive">

                <table class="table">

                  <thead>

                    <tr>

                      <th> OTHER CONDITIONS</th>

                    </tr>

                  </thead>
                  <tbody>
                    <tr>
                      <td>* The penalty is calculated based on total seat worth 699</td>
                    </tr>
                    <tr>
                      <td>* Penalty is calculated basis the scheduled bus departure time from the first boarding point at: 18-11-2020 19:15</td>
                    </tr>
                    <tr>
                      <td>* Partial cancellation is not allowed for this ticket.</td>
                    </tr>
                    <tr>
                      <td>* Please note : the ticket cannot be cancelled after the bus departs from the first boarding point.</td>
                    </tr>
                    <tr>
                      <td>* Above defined cancellation charges are illustrated basis maximum fare applicable. Exact cancellation charges will depend on the final price charged along with discount and
                        other adjustments.</td>
                    </tr>
                    <tr>
                      <td>* Cancellation amount shown above may also vary basis the non-refundable components of the ticket defined by the bus operator</td>
                    </tr>
                  </tbody>

                </table>

              </div>

            </div>

          </div>

        </div>
        <!--Policies details end-->


      </div>
      <!--Bus 03 end-->


      <!--Bus 04 start-->
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

            <img src="{{URL::asset('assets/img/bus/b1.png')}}" class="flogo" alt="">

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">10:00</span>

            New Delhi

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">6H :10M </span>

            2 STOP

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">07:30</span>

            Kanpur, UP

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2 price">

            <small>Rs 999</small><span>Rs 699</span>

            <!--<small>Rs 5,110 Instant Discount</small>-->

          </div>

          <div class="col-12 col-sm-2 col-md-2 col-lg-2">
            <span class="bus-seats">36 Seats Left</span>
            <a href="#selectSeat4" data-toggle="collapse" class="book">Select Seat</a>

          </div>

        </div>

        <div class="flight-detail-bg">

          <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6">

              <h2>Blueworld tourist private limited</h2>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-2">

              <a href="#!" class="details" data-toggle="collapse" data-target="#policies4">Policies</a>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-2">

              <a href="#!" class="details" data-toggle="collapse" data-target="#pickupsDrops4">Pickups & Drops</a>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-2">

              <a href="#!" class="details" data-toggle="collapse" data-target="#amenitiesDetails4">+3 Amenities</a>

            </div>

          </div>

        </div>

        <!--Select Seat Start-->
        <div class="select-seat collapse" id="selectSeat4">

          <div class="seat">
            <div class="row">

              <div class="col-sm-12 col-md-4 col-lg-2 driver-s">

              </div>

              <div class="col-sm-12 col-md-8 col-lg-10">

                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="seat-title">
                      UPPER
                    </div>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 1</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 4</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>UD 7</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 10</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 13</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>UD 16</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 2</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 5</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>UD 8</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 11</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 14</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 17</small>
                      </span>
                    </label>
                  </div>

                </div>

                <div class="row single">

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 3</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 6</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 9</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 12</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 15</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>UD 18</small>
                      </span>
                    </label>
                  </div>

                </div>

              </div>

            </div>
          </div>

          <div class="seat">
            <div class="row">

              <div class="col-sm-12 col-md-4 col-lg-2 driver-s">

              </div>

              <div class="col-sm-12 col-md-8 col-lg-10">

                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="seat-title">
                      LOWER
                    </div>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 1</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 4</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>LD 7</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 10</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 13</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>LD 16</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 2</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 5</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>LD 8</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 11</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 14</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 17</small>
                      </span>
                    </label>
                  </div>

                </div>

                <div class="row single">

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 3</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 6</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 9</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 12</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 15</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>LD 18</small>
                      </span>
                    </label>
                  </div>

                </div>

              </div>

            </div>
          </div>

          <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
              <div class="seat-info">
                <span class="available">Available</span>
                <span class="bookedinfo">Booked</span>
                <span class="ladies">Ladies</span>
                <span class="blocked">Blocked</span>
              </div>
              <div class="seat-count">
                3 <small>Seats Selected: UD 6, LD 6, LD 9</small>
              </div>


              <div class="row">

                <div class="col-12 col-sm-6 col-md-6 col-lg-6">

                  <div class="text-box1">

                    <span>Pickup Points</span>
                    <select>
                      <option>Select Time and Location</option>
                      <option>19:15, Shop No.24 New Market Mori Gate Golchakkar Near Madrashi Colony Delhi</option>
                    </select>

                  </div>

                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-6">

                  <div class="text-box1">

                    <span>Drop Points</span>
                    <select>
                      <option>Select Time and Location</option>
                      <option>03:55, Kalpana Travels Fazalganj</option>
                      <option>04:20, Rama Devi Naubasta Flyover</option>
                    </select>

                  </div>

                </div>

              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <a href="{{route('user.my_bus')}}" class="book-seat-btn">Book Seats</a>
              <span class="total-amount"><i class="fa fa-rupee"></i> 2097</span>
            </div>
          </div>

        </div>
        <!--Select Seat End-->

        <!--Pickups & Drops details start-->
        <div class="fare collapse" id="pickupsDrops4">

          <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="table-responsive">

                <table class="table table-bordered">

                  <thead>

                    <tr>

                      <th colspan="2">Pickup Points</th>

                    </tr>

                  </thead>
                  <tbody>
                    <tr>
                      <td>Time</td>
                      <td>Location</td>
                    </tr>

                    <tr>
                      <td>19:15</td>
                      <td>Shop No.24 New Market Mori Gate Golchakkar Near Madrashi Colony Delhi</td>

                    </tr>
                  </tbody>

                </table>

              </div>

            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="table-responsive">

                <table class="table table-bordered">

                  <thead>

                    <tr>

                      <th colspan="3">Drop Points</th>

                    </tr>

                  </thead>

                  <tbody>
                    <tr>
                      <td>Time</td>
                      <td>Location</td>
                    </tr>

                    <tr>
                      <td>03:55</td>
                      <td>Kalpana Travels Fazalganj</td>
                    </tr>
                    <tr>
                      <td>04:20</td>
                      <td>Rama Devi Naubasta Flyover</td>
                    </tr>
                  </tbody>

                </table>

              </div>

            </div>

          </div>

        </div>
        <!--Pickups & Drops details end-->

        <!--Amenities Details Start-->
        <div class="flight-detail collapse" id="amenitiesDetails4">
          <div class="amenities-details">

            <div class="row">

              <div class="col-6 col-sm-6 col-md-6 col-lg-3">

                <i class="fa fa-wifi"></i> Wifi

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
        <!--Amenities Details End-->

        <!--Policies details start-->
        <div class="fare collapse" id="policies4">

          <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="table-responsive">

                <table class="table table-bordered">

                  <thead>

                    <tr>

                      <th> TIME OF CANCELLATION </th>
                      <th> CHARGES </th>

                    </tr>

                  </thead>
                  <tbody>
                    <tr>

                      <td>More than 24 hrs before travel</td>

                      <td>10 %</td>

                    </tr>
                    <tr>

                      <td>12 to 24 hr(s) before travel</td>

                      <td>40 %</td>

                    </tr>
                    <tr>

                      <td>0 to 12 hr(s) before travel</td>

                      <td>100 %</td>

                    </tr>
                  </tbody>

                </table>

              </div>

            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="table-responsive">

                <table class="table">

                  <thead>

                    <tr>

                      <th> OTHER CONDITIONS</th>

                    </tr>

                  </thead>
                  <tbody>
                    <tr>
                      <td>* The penalty is calculated based on total seat worth 699</td>
                    </tr>
                    <tr>
                      <td>* Penalty is calculated basis the scheduled bus departure time from the first boarding point at: 18-11-2020 19:15</td>
                    </tr>
                    <tr>
                      <td>* Partial cancellation is not allowed for this ticket.</td>
                    </tr>
                    <tr>
                      <td>* Please note : the ticket cannot be cancelled after the bus departs from the first boarding point.</td>
                    </tr>
                    <tr>
                      <td>* Above defined cancellation charges are illustrated basis maximum fare applicable. Exact cancellation charges will depend on the final price charged along with discount and
                        other adjustments.</td>
                    </tr>
                    <tr>
                      <td>* Cancellation amount shown above may also vary basis the non-refundable components of the ticket defined by the bus operator</td>
                    </tr>
                  </tbody>

                </table>

              </div>

            </div>

          </div>

        </div>
        <!--Policies details end-->


      </div>
      <!--Bus 04 end-->


      <!--Bus 05 start-->
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

            <img src="{{URL::asset('assets/img/bus/b1.png')}}" class="flogo" alt="">

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">10:00</span>

            New Delhi

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">6H :10M </span>

            2 STOP

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">07:30</span>

            Kanpur, UP

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2 price">

            <small>Rs 999</small><span>Rs 699</span>

            <!--<small>Rs 5,110 Instant Discount</small>-->

          </div>

          <div class="col-12 col-sm-2 col-md-2 col-lg-2">
            <span class="bus-seats">36 Seats Left</span>
            <a href="#selectSeat5" data-toggle="collapse" class="book">Select Seat</a>

          </div>

        </div>

        <div class="flight-detail-bg">

          <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6">

              <h2>Blueworld tourist private limited</h2>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-2">

              <a href="#!" class="details" data-toggle="collapse" data-target="#policies5">Policies</a>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-2">

              <a href="#!" class="details" data-toggle="collapse" data-target="#pickupsDrops5">Pickups & Drops</a>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-2">

              <a href="#!" class="details" data-toggle="collapse" data-target="#amenitiesDetails5">+3 Amenities</a>

            </div>

          </div>

        </div>

        <!--Select Seat Start-->
        <div class="select-seat collapse" id="selectSeat5">

          <div class="seat">
            <div class="row">

              <div class="col-sm-12 col-md-4 col-lg-2 driver-s">

              </div>

              <div class="col-sm-12 col-md-8 col-lg-10">

                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="seat-title">
                      UPPER
                    </div>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 1</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 4</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>UD 7</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 10</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 13</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>UD 16</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 2</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 5</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>UD 8</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 11</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 14</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 17</small>
                      </span>
                    </label>
                  </div>

                </div>

                <div class="row single">

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 3</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 6</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 9</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 12</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 15</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>UD 18</small>
                      </span>
                    </label>
                  </div>

                </div>

              </div>

            </div>
          </div>

          <div class="seat">
            <div class="row">

              <div class="col-sm-12 col-md-4 col-lg-2 driver-s">

              </div>

              <div class="col-sm-12 col-md-8 col-lg-10">

                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="seat-title">
                      LOWER
                    </div>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 1</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 4</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>LD 7</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 10</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 13</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>LD 16</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 2</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 5</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>LD 8</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 11</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 14</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 17</small>
                      </span>
                    </label>
                  </div>

                </div>

                <div class="row single">

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 3</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 6</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 9</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 12</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 15</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>LD 18</small>
                      </span>
                    </label>
                  </div>

                </div>

              </div>

            </div>
          </div>

          <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
              <div class="seat-info">
                <span class="available">Available</span>
                <span class="bookedinfo">Booked</span>
                <span class="ladies">Ladies</span>
                <span class="blocked">Blocked</span>
              </div>
              <div class="seat-count">
                3 <small>Seats Selected: UD 6, LD 6, LD 9</small>
              </div>


              <div class="row">

                <div class="col-12 col-sm-6 col-md-6 col-lg-6">

                  <div class="text-box1">

                    <span>Pickup Points</span>
                    <select>
                      <option>Select Time and Location</option>
                      <option>19:15, Shop No.24 New Market Mori Gate Golchakkar Near Madrashi Colony Delhi</option>
                    </select>

                  </div>

                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-6">

                  <div class="text-box1">

                    <span>Drop Points</span>
                    <select>
                      <option>Select Time and Location</option>
                      <option>03:55, Kalpana Travels Fazalganj</option>
                      <option>04:20, Rama Devi Naubasta Flyover</option>
                    </select>

                  </div>

                </div>

              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <a href="{{route('user.my_bus')}}" class="book-seat-btn">Book Seats</a>
              <span class="total-amount"><i class="fa fa-rupee"></i> 2097</span>
            </div>
          </div>

        </div>
        <!--Select Seat End-->

        <!--Pickups & Drops details start-->
        <div class="fare collapse" id="pickupsDrops5">

          <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="table-responsive">

                <table class="table table-bordered">

                  <thead>

                    <tr>

                      <th colspan="2">Pickup Points</th>

                    </tr>

                  </thead>
                  <tbody>
                    <tr>
                      <td>Time</td>
                      <td>Location</td>
                    </tr>

                    <tr>
                      <td>19:15</td>
                      <td>Shop No.24 New Market Mori Gate Golchakkar Near Madrashi Colony Delhi</td>

                    </tr>
                  </tbody>

                </table>

              </div>

            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="table-responsive">

                <table class="table table-bordered">

                  <thead>

                    <tr>

                      <th colspan="3">Drop Points</th>

                    </tr>

                  </thead>

                  <tbody>
                    <tr>
                      <td>Time</td>
                      <td>Location</td>
                    </tr>

                    <tr>
                      <td>03:55</td>
                      <td>Kalpana Travels Fazalganj</td>
                    </tr>
                    <tr>
                      <td>04:20</td>
                      <td>Rama Devi Naubasta Flyover</td>
                    </tr>
                  </tbody>

                </table>

              </div>

            </div>

          </div>

        </div>
        <!--Pickups & Drops details end-->

        <!--Amenities Details Start-->
        <div class="flight-detail collapse" id="amenitiesDetails5">
          <div class="amenities-details">

            <div class="row">

              <div class="col-6 col-sm-6 col-md-6 col-lg-3">

                <i class="fa fa-wifi"></i> Wifi

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
        <!--Amenities Details End-->

        <!--Policies details start-->
        <div class="fare collapse" id="policies5">

          <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="table-responsive">

                <table class="table table-bordered">

                  <thead>

                    <tr>

                      <th> TIME OF CANCELLATION </th>
                      <th> CHARGES </th>

                    </tr>

                  </thead>
                  <tbody>
                    <tr>

                      <td>More than 24 hrs before travel</td>

                      <td>10 %</td>

                    </tr>
                    <tr>

                      <td>12 to 24 hr(s) before travel</td>

                      <td>40 %</td>

                    </tr>
                    <tr>

                      <td>0 to 12 hr(s) before travel</td>

                      <td>100 %</td>

                    </tr>
                  </tbody>

                </table>

              </div>

            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="table-responsive">

                <table class="table">

                  <thead>

                    <tr>

                      <th> OTHER CONDITIONS</th>

                    </tr>

                  </thead>
                  <tbody>
                    <tr>
                      <td>* The penalty is calculated based on total seat worth 699</td>
                    </tr>
                    <tr>
                      <td>* Penalty is calculated basis the scheduled bus departure time from the first boarding point at: 18-11-2020 19:15</td>
                    </tr>
                    <tr>
                      <td>* Partial cancellation is not allowed for this ticket.</td>
                    </tr>
                    <tr>
                      <td>* Please note : the ticket cannot be cancelled after the bus departs from the first boarding point.</td>
                    </tr>
                    <tr>
                      <td>* Above defined cancellation charges are illustrated basis maximum fare applicable. Exact cancellation charges will depend on the final price charged along with discount and
                        other adjustments.</td>
                    </tr>
                    <tr>
                      <td>* Cancellation amount shown above may also vary basis the non-refundable components of the ticket defined by the bus operator</td>
                    </tr>
                  </tbody>

                </table>

              </div>

            </div>

          </div>

        </div>
        <!--Policies details end-->


      </div>
      <!--Bus 05 end-->


      <!--Bus 06 start-->
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

            <img src="{{URL::asset('assets/img/bus/b1.png')}}" class="flogo" alt="">

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">10:00</span>

            New Delhi

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">6H :10M </span>

            2 STOP

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">07:30</span>

            Kanpur, UP

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2 price">

            <small>Rs 999</small><span>Rs 699</span>

            <!--<small>Rs 5,110 Instant Discount</small>-->

          </div>

          <div class="col-12 col-sm-2 col-md-2 col-lg-2">
            <span class="bus-seats">36 Seats Left</span>
            <a href="#selectSeat6" data-toggle="collapse" class="book">Select Seat</a>

          </div>

        </div>

        <div class="flight-detail-bg">

          <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6">

              <h2>Blueworld tourist private limited</h2>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-2">

              <a href="#!" class="details" data-toggle="collapse" data-target="#policies6">Policies</a>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-2">

              <a href="#!" class="details" data-toggle="collapse" data-target="#pickupsDrops6">Pickups & Drops</a>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-2">

              <a href="#!" class="details" data-toggle="collapse" data-target="#amenitiesDetails6">+3 Amenities</a>

            </div>

          </div>

        </div>

        <!--Select Seat Start-->
        <div class="select-seat collapse" id="selectSeat6">

          <div class="seat">
            <div class="row">

              <div class="col-sm-12 col-md-4 col-lg-2 driver-s">

              </div>

              <div class="col-sm-12 col-md-8 col-lg-10">

                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="seat-title">
                      UPPER
                    </div>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 1</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 4</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>UD 7</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 10</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 13</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>UD 16</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 2</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 5</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>UD 8</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 11</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 14</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 17</small>
                      </span>
                    </label>
                  </div>

                </div>

                <div class="row single">

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 3</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 6</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 9</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 12</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 15</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>UD 18</small>
                      </span>
                    </label>
                  </div>

                </div>

              </div>

            </div>
          </div>

          <div class="seat">
            <div class="row">

              <div class="col-sm-12 col-md-4 col-lg-2 driver-s">

              </div>

              <div class="col-sm-12 col-md-8 col-lg-10">

                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="seat-title">
                      LOWER
                    </div>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 1</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 4</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>LD 7</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 10</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 13</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>LD 16</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 2</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 5</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>LD 8</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 11</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 14</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 17</small>
                      </span>
                    </label>
                  </div>

                </div>

                <div class="row single">

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 3</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 6</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 9</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 12</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 15</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>LD 18</small>
                      </span>
                    </label>
                  </div>

                </div>

              </div>

            </div>
          </div>

          <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
              <div class="seat-info">
                <span class="available">Available</span>
                <span class="bookedinfo">Booked</span>
                <span class="ladies">Ladies</span>
                <span class="blocked">Blocked</span>
              </div>
              <div class="seat-count">
                3 <small>Seats Selected: UD 6, LD 6, LD 9</small>
              </div>


              <div class="row">

                <div class="col-12 col-sm-6 col-md-6 col-lg-6">

                  <div class="text-box1">

                    <span>Pickup Points</span>
                    <select>
                      <option>Select Time and Location</option>
                      <option>19:15, Shop No.24 New Market Mori Gate Golchakkar Near Madrashi Colony Delhi</option>
                    </select>

                  </div>

                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-6">

                  <div class="text-box1">

                    <span>Drop Points</span>
                    <select>
                      <option>Select Time and Location</option>
                      <option>03:55, Kalpana Travels Fazalganj</option>
                      <option>04:20, Rama Devi Naubasta Flyover</option>
                    </select>

                  </div>

                </div>

              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <a href="{{route('user.my_bus')}}" class="book-seat-btn">Book Seats</a>
              <span class="total-amount"><i class="fa fa-rupee"></i> 2097</span>
            </div>
          </div>

        </div>
        <!--Select Seat End-->

        <!--Pickups & Drops details start-->
        <div class="fare collapse" id="pickupsDrops6">

          <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="table-responsive">

                <table class="table table-bordered">

                  <thead>

                    <tr>

                      <th colspan="2">Pickup Points</th>

                    </tr>

                  </thead>
                  <tbody>
                    <tr>
                      <td>Time</td>
                      <td>Location</td>
                    </tr>

                    <tr>
                      <td>19:15</td>
                      <td>Shop No.24 New Market Mori Gate Golchakkar Near Madrashi Colony Delhi</td>

                    </tr>
                  </tbody>

                </table>

              </div>

            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="table-responsive">

                <table class="table table-bordered">

                  <thead>

                    <tr>

                      <th colspan="3">Drop Points</th>

                    </tr>

                  </thead>

                  <tbody>
                    <tr>
                      <td>Time</td>
                      <td>Location</td>
                    </tr>

                    <tr>
                      <td>03:55</td>
                      <td>Kalpana Travels Fazalganj</td>
                    </tr>
                    <tr>
                      <td>04:20</td>
                      <td>Rama Devi Naubasta Flyover</td>
                    </tr>
                  </tbody>

                </table>

              </div>

            </div>

          </div>

        </div>
        <!--Pickups & Drops details end-->

        <!--Amenities Details Start-->
        <div class="flight-detail collapse" id="amenitiesDetails6">
          <div class="amenities-details">

            <div class="row">

              <div class="col-6 col-sm-6 col-md-6 col-lg-3">

                <i class="fa fa-wifi"></i> Wifi

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
        <!--Amenities Details End-->

        <!--Policies details start-->
        <div class="fare collapse" id="policies6">

          <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="table-responsive">

                <table class="table table-bordered">

                  <thead>

                    <tr>

                      <th> TIME OF CANCELLATION </th>
                      <th> CHARGES </th>

                    </tr>

                  </thead>
                  <tbody>
                    <tr>

                      <td>More than 24 hrs before travel</td>

                      <td>10 %</td>

                    </tr>
                    <tr>

                      <td>12 to 24 hr(s) before travel</td>

                      <td>40 %</td>

                    </tr>
                    <tr>

                      <td>0 to 12 hr(s) before travel</td>

                      <td>100 %</td>

                    </tr>
                  </tbody>

                </table>

              </div>

            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="table-responsive">

                <table class="table">

                  <thead>

                    <tr>

                      <th> OTHER CONDITIONS</th>

                    </tr>

                  </thead>
                  <tbody>
                    <tr>
                      <td>* The penalty is calculated based on total seat worth 699</td>
                    </tr>
                    <tr>
                      <td>* Penalty is calculated basis the scheduled bus departure time from the first boarding point at: 18-11-2020 19:15</td>
                    </tr>
                    <tr>
                      <td>* Partial cancellation is not allowed for this ticket.</td>
                    </tr>
                    <tr>
                      <td>* Please note : the ticket cannot be cancelled after the bus departs from the first boarding point.</td>
                    </tr>
                    <tr>
                      <td>* Above defined cancellation charges are illustrated basis maximum fare applicable. Exact cancellation charges will depend on the final price charged along with discount and
                        other adjustments.</td>
                    </tr>
                    <tr>
                      <td>* Cancellation amount shown above may also vary basis the non-refundable components of the ticket defined by the bus operator</td>
                    </tr>
                  </tbody>

                </table>

              </div>

            </div>

          </div>

        </div>
        <!--Policies details end-->


      </div>
      <!--Bus 06 end-->


      <!--Bus 07 start-->
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

            <img src="{{URL::asset('assets/img/bus/b1.png')}}" class="flogo" alt="">

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">10:00</span>

            New Delhi

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">6H :10M </span>

            2 STOP

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">07:30</span>

            Kanpur, UP

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2 price">

            <small>Rs 999</small><span>Rs 699</span>

            <!--<small>Rs 5,110 Instant Discount</small>-->

          </div>

          <div class="col-12 col-sm-2 col-md-2 col-lg-2">
            <span class="bus-seats">36 Seats Left</span>
            <a href="#selectSeat7" data-toggle="collapse" class="book">Select Seat</a>

          </div>

        </div>

        <div class="flight-detail-bg">

          <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6">

              <h2>Blueworld tourist private limited</h2>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-2">

              <a href="#!" class="details" data-toggle="collapse" data-target="#policies7">Policies</a>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-2">

              <a href="#!" class="details" data-toggle="collapse" data-target="#pickupsDrops7">Pickups & Drops</a>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-2">

              <a href="#!" class="details" data-toggle="collapse" data-target="#amenitiesDetails7">+3 Amenities</a>

            </div>

          </div>

        </div>

        <!--Select Seat Start-->
        <div class="select-seat collapse" id="selectSeat7">

          <div class="seat">
            <div class="row">

              <div class="col-sm-12 col-md-4 col-lg-2 driver-s">

              </div>

              <div class="col-sm-12 col-md-8 col-lg-10">

                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="seat-title">
                      UPPER
                    </div>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 1</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 4</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>UD 7</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 10</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 13</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>UD 16</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 2</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 5</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>UD 8</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 11</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 14</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 17</small>
                      </span>
                    </label>
                  </div>

                </div>

                <div class="row single">

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 3</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 6</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 9</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 12</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 15</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>UD 18</small>
                      </span>
                    </label>
                  </div>

                </div>

              </div>

            </div>
          </div>

          <div class="seat">
            <div class="row">

              <div class="col-sm-12 col-md-4 col-lg-2 driver-s">

              </div>

              <div class="col-sm-12 col-md-8 col-lg-10">

                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="seat-title">
                      LOWER
                    </div>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 1</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 4</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>LD 7</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 10</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 13</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>LD 16</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 2</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 5</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>LD 8</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 11</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 14</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 17</small>
                      </span>
                    </label>
                  </div>

                </div>

                <div class="row single">

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 3</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 6</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 9</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 12</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 15</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>LD 18</small>
                      </span>
                    </label>
                  </div>

                </div>

              </div>

            </div>
          </div>

          <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
              <div class="seat-info">
                <span class="available">Available</span>
                <span class="bookedinfo">Booked</span>
                <span class="ladies">Ladies</span>
                <span class="blocked">Blocked</span>
              </div>
              <div class="seat-count">
                3 <small>Seats Selected: UD 6, LD 6, LD 9</small>
              </div>


              <div class="row">

                <div class="col-12 col-sm-6 col-md-6 col-lg-6">

                  <div class="text-box1">

                    <span>Pickup Points</span>
                    <select>
                      <option>Select Time and Location</option>
                      <option>19:15, Shop No.24 New Market Mori Gate Golchakkar Near Madrashi Colony Delhi</option>
                    </select>

                  </div>

                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-6">

                  <div class="text-box1">

                    <span>Drop Points</span>
                    <select>
                      <option>Select Time and Location</option>
                      <option>03:55, Kalpana Travels Fazalganj</option>
                      <option>04:20, Rama Devi Naubasta Flyover</option>
                    </select>

                  </div>

                </div>

              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <a href="{{route('user.my_bus')}}" class="book-seat-btn">Book Seats</a>
              <span class="total-amount"><i class="fa fa-rupee"></i> 2097</span>
            </div>
          </div>

        </div>
        <!--Select Seat End-->

        <!--Pickups & Drops details start-->
        <div class="fare collapse" id="pickupsDrops7">

          <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="table-responsive">

                <table class="table table-bordered">

                  <thead>

                    <tr>

                      <th colspan="2">Pickup Points</th>

                    </tr>

                  </thead>
                  <tbody>
                    <tr>
                      <td>Time</td>
                      <td>Location</td>
                    </tr>

                    <tr>
                      <td>19:15</td>
                      <td>Shop No.24 New Market Mori Gate Golchakkar Near Madrashi Colony Delhi</td>

                    </tr>
                  </tbody>

                </table>

              </div>

            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="table-responsive">

                <table class="table table-bordered">

                  <thead>

                    <tr>

                      <th colspan="3">Drop Points</th>

                    </tr>

                  </thead>

                  <tbody>
                    <tr>
                      <td>Time</td>
                      <td>Location</td>
                    </tr>

                    <tr>
                      <td>03:55</td>
                      <td>Kalpana Travels Fazalganj</td>
                    </tr>
                    <tr>
                      <td>04:20</td>
                      <td>Rama Devi Naubasta Flyover</td>
                    </tr>
                  </tbody>

                </table>

              </div>

            </div>

          </div>

        </div>
        <!--Pickups & Drops details end-->

        <!--Amenities Details Start-->
        <div class="flight-detail collapse" id="amenitiesDetails7">
          <div class="amenities-details">

            <div class="row">

              <div class="col-6 col-sm-6 col-md-6 col-lg-3">

                <i class="fa fa-wifi"></i> Wifi

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
        <!--Amenities Details End-->

        <!--Policies details start-->
        <div class="fare collapse" id="policies7">

          <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="table-responsive">

                <table class="table table-bordered">

                  <thead>

                    <tr>

                      <th> TIME OF CANCELLATION </th>
                      <th> CHARGES </th>

                    </tr>

                  </thead>
                  <tbody>
                    <tr>

                      <td>More than 24 hrs before travel</td>

                      <td>10 %</td>

                    </tr>
                    <tr>

                      <td>12 to 24 hr(s) before travel</td>

                      <td>40 %</td>

                    </tr>
                    <tr>

                      <td>0 to 12 hr(s) before travel</td>

                      <td>100 %</td>

                    </tr>
                  </tbody>

                </table>

              </div>

            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="table-responsive">

                <table class="table">

                  <thead>

                    <tr>

                      <th> OTHER CONDITIONS</th>

                    </tr>

                  </thead>
                  <tbody>
                    <tr>
                      <td>* The penalty is calculated based on total seat worth 699</td>
                    </tr>
                    <tr>
                      <td>* Penalty is calculated basis the scheduled bus departure time from the first boarding point at: 18-11-2020 19:15</td>
                    </tr>
                    <tr>
                      <td>* Partial cancellation is not allowed for this ticket.</td>
                    </tr>
                    <tr>
                      <td>* Please note : the ticket cannot be cancelled after the bus departs from the first boarding point.</td>
                    </tr>
                    <tr>
                      <td>* Above defined cancellation charges are illustrated basis maximum fare applicable. Exact cancellation charges will depend on the final price charged along with discount and
                        other adjustments.</td>
                    </tr>
                    <tr>
                      <td>* Cancellation amount shown above may also vary basis the non-refundable components of the ticket defined by the bus operator</td>
                    </tr>
                  </tbody>

                </table>

              </div>

            </div>

          </div>

        </div>
        <!--Policies details end-->


      </div>
      <!--Bus 07 end-->


      <!--Bus 08 start-->
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

            <img src="{{URL::asset('assets/img/bus/b1.png')}}" class="flogo" alt="">

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">10:00</span>

            New Delhi

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">6H :10M </span>

            2 STOP

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2">

            <span class="ft">07:30</span>

            Kanpur, UP

          </div>

          <div class="col-6 col-sm-2 col-md-2 col-lg-2 price">

            <small>Rs 999</small><span>Rs 699</span>

            <!--<small>Rs 5,110 Instant Discount</small>-->

          </div>

          <div class="col-12 col-sm-2 col-md-2 col-lg-2">
            <span class="bus-seats">36 Seats Left</span>
            <a href="#selectSeat8" data-toggle="collapse" class="book">Select Seat</a>

          </div>

        </div>

        <div class="flight-detail-bg">

          <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6">

              <h2>Blueworld tourist private limited</h2>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-2">

              <a href="#!" class="details" data-toggle="collapse" data-target="#policies8">Policies</a>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-2">

              <a href="#!" class="details" data-toggle="collapse" data-target="#pickupsDrops8">Pickups & Drops</a>

            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-2">

              <a href="#!" class="details" data-toggle="collapse" data-target="#amenitiesDetails8">+3 Amenities</a>

            </div>

          </div>

        </div>

        <!--Select Seat Start-->
        <div class="select-seat collapse" id="selectSeat8">

          <div class="seat">
            <div class="row">

              <div class="col-sm-12 col-md-4 col-lg-2 driver-s">

              </div>

              <div class="col-sm-12 col-md-8 col-lg-10">

                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="seat-title">
                      UPPER
                    </div>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 1</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 4</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>UD 7</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 10</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 13</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>UD 16</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 2</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 5</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>UD 8</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 11</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 14</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 17</small>
                      </span>
                    </label>
                  </div>

                </div>

                <div class="row single">

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 3</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 6</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 9</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 12</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>UD 15</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>UD 18</small>
                      </span>
                    </label>
                  </div>

                </div>

              </div>

            </div>
          </div>

          <div class="seat">
            <div class="row">

              <div class="col-sm-12 col-md-4 col-lg-2 driver-s">

              </div>

              <div class="col-sm-12 col-md-8 col-lg-10">

                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="seat-title">
                      LOWER
                    </div>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 1</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 4</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>LD 7</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 10</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 13</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>LD 16</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 2</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 5</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>LD 8</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 11</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 14</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 17</small>
                      </span>
                    </label>
                  </div>

                </div>

                <div class="row single">

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 3</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 6</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 9</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 12</small>
                      </span>
                    </label>

                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox">
                      <span class="checked">
                        <small>LD 15</small>
                      </span>
                    </label>
                  </div>

                  <div class="col-sm-2 col-md-2 col-lg-2">
                    <label class="check-box">
                      <input type="checkbox" disabled>
                      <span class="checked booked">
                        <small>LD 18</small>
                      </span>
                    </label>
                  </div>

                </div>

              </div>

            </div>
          </div>

          <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
              <div class="seat-info">
                <span class="available">Available</span>
                <span class="bookedinfo">Booked</span>
                <span class="ladies">Ladies</span>
                <span class="blocked">Blocked</span>
              </div>
              <div class="seat-count">
                3 <small>Seats Selected: UD 6, LD 6, LD 9</small>
              </div>


              <div class="row">

                <div class="col-12 col-sm-6 col-md-6 col-lg-6">

                  <div class="text-box1">

                    <span>Pickup Points</span>
                    <select>
                      <option>Select Time and Location</option>
                      <option>19:15, Shop No.24 New Market Mori Gate Golchakkar Near Madrashi Colony Delhi</option>
                    </select>

                  </div>

                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-6">

                  <div class="text-box1">

                    <span>Drop Points</span>
                    <select>
                      <option>Select Time and Location</option>
                      <option>03:55, Kalpana Travels Fazalganj</option>
                      <option>04:20, Rama Devi Naubasta Flyover</option>
                    </select>

                  </div>

                </div>

              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <a href="{{route('user.my_bus')}}" class="book-seat-btn">Book Seats</a>
              <span class="total-amount"><i class="fa fa-rupee"></i> 2097</span>
            </div>
          </div>

        </div>
        <!--Select Seat End-->

        <!--Pickups & Drops details start-->
        <div class="fare collapse" id="pickupsDrops8">

          <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="table-responsive">

                <table class="table table-bordered">

                  <thead>

                    <tr>

                      <th colspan="2">Pickup Points</th>

                    </tr>

                  </thead>
                  <tbody>
                    <tr>
                      <td>Time</td>
                      <td>Location</td>
                    </tr>

                    <tr>
                      <td>19:15</td>
                      <td>Shop No.24 New Market Mori Gate Golchakkar Near Madrashi Colony Delhi</td>

                    </tr>
                  </tbody>

                </table>

              </div>

            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="table-responsive">

                <table class="table table-bordered">

                  <thead>

                    <tr>

                      <th colspan="3">Drop Points</th>

                    </tr>

                  </thead>

                  <tbody>
                    <tr>
                      <td>Time</td>
                      <td>Location</td>
                    </tr>

                    <tr>
                      <td>03:55</td>
                      <td>Kalpana Travels Fazalganj</td>
                    </tr>
                    <tr>
                      <td>04:20</td>
                      <td>Rama Devi Naubasta Flyover</td>
                    </tr>
                  </tbody>

                </table>

              </div>

            </div>

          </div>

        </div>
        <!--Pickups & Drops details end-->

        <!--Amenities Details Start-->
        <div class="flight-detail collapse" id="amenitiesDetails8">
          <div class="amenities-details">

            <div class="row">

              <div class="col-6 col-sm-6 col-md-6 col-lg-3">

                <i class="fa fa-wifi"></i> Wifi

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
        <!--Amenities Details End-->

        <!--Policies details start-->
        <div class="fare collapse" id="policies8">

          <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="table-responsive">

                <table class="table table-bordered">

                  <thead>

                    <tr>

                      <th> TIME OF CANCELLATION </th>
                      <th> CHARGES </th>

                    </tr>

                  </thead>
                  <tbody>
                    <tr>

                      <td>More than 24 hrs before travel</td>

                      <td>10 %</td>

                    </tr>
                    <tr>

                      <td>12 to 24 hr(s) before travel</td>

                      <td>40 %</td>

                    </tr>
                    <tr>

                      <td>0 to 12 hr(s) before travel</td>

                      <td>100 %</td>

                    </tr>
                  </tbody>

                </table>

              </div>

            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="table-responsive">

                <table class="table">

                  <thead>

                    <tr>

                      <th> OTHER CONDITIONS</th>

                    </tr>

                  </thead>
                  <tbody>
                    <tr>
                      <td>* The penalty is calculated based on total seat worth 699</td>
                    </tr>
                    <tr>
                      <td>* Penalty is calculated basis the scheduled bus departure time from the first boarding point at: 18-11-2020 19:15</td>
                    </tr>
                    <tr>
                      <td>* Partial cancellation is not allowed for this ticket.</td>
                    </tr>
                    <tr>
                      <td>* Please note : the ticket cannot be cancelled after the bus departs from the first boarding point.</td>
                    </tr>
                    <tr>
                      <td>* Above defined cancellation charges are illustrated basis maximum fare applicable. Exact cancellation charges will depend on the final price charged along with discount and
                        other adjustments.</td>
                    </tr>
                    <tr>
                      <td>* Cancellation amount shown above may also vary basis the non-refundable components of the ticket defined by the bus operator</td>
                    </tr>
                  </tbody>

                </table>

              </div>

            </div>

          </div>

        </div>
        <!--Policies details end-->


      </div>
      <!--Bus 08 end-->


    </div>

  </div>

</div>
<!--Content end-->

@endsection