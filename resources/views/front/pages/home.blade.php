@extends('layouts.front')

@section('title', 'Hybrid Travel - Travel Booking System')

@section('content')

<!--Banner start-->
<div class="banner-bg" style="background: #003580 url('{{ URL::asset('assets/img/banner.jpg') }}'); background-size: cover;">
  <div class="container">
    <div class="row">

      <div class="col-12 col-sm-12 col-md-12 col-lg-7">

        <div class="search-bg">
          <!--Tab Nav start-->
          <div class="list-group mtab" id="myList" role="tablist">
            <a class="list-group-item list-group-item-action active" data-toggle="list" href="" data-target="#flights" role="tab"><i class="fa fa-plane"></i> Flights</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="" data-target="#hotels" role="tab"><i class="fa fa-bed"></i> Hotels</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="" data-target="#holidays" role="tab"><i class="fa fa-briefcase"></i> Holidays</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="" data-target="#bus" role="tab"><i class="fa fa-bus"></i> Bus</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="" data-target="#cab" role="tab"><i class="fa fa-cab"></i> Cab</a>
          </div>
          <!--Tab Nav end-->



          <!--Tab Content start-->

          <div class="tab-content">

            <!--Flight-->

            <div class="tab-pane active" id="flights" role="tabpanel">

              <!--Trip Type-->
              <div class="tab-bg">

                <h2>Book Domestic & International Flights</h2>


                <!--Tab Nav start-->
                <div class="list-group stab" id="myList2" role="tablist">
                  <a class="list-group-item list-group-item-action active" data-toggle="list" href="" data-target="#oneway" role="tab">One Way</a>
                  <a class="list-group-item list-group-item-action" data-toggle="list" href="" data-target="#roundtrip" role="tab">Round Trip</a>
                  <a class="list-group-item list-group-item-action" data-toggle="list" href="" data-target="#multicity" role="tab">Multi City</a>
                </div>
                <!--Tab Nav end-->

                <div class="tab-content">

                  <!--One way-->

                  <div class="tab-pane active" id="oneway" role="tabpanel">

                    <form>

                      <div class="row">

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                          <div class="input">

                            <span>From</span>

                            <input type="text" placeholder="City or Airport" required>

                            <img src="{{URL::asset('assets/img/fu.png')}}" alt="">

                          </div>

                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                          <div class="input">

                            <span>To</span>

                            <input type="text" placeholder="City or Airport" required>

                            <img src="{{URL::asset('assets/img/fd.png')}}" alt="">

                          </div>

                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                          <div class="input">

                            <span>Departure</span>

                            <input type="text" placeholder="Select Departure date" data-language="en" class="datepicker-here">

                            <img src="{{URL::asset('assets/img/cl.png')}}" alt="">

                          </div>

                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                          <div class="input">

                            <span>Return</span>

                            <input type="text" placeholder="Select Return Date" data-language="en" class="datepicker-here" disabled>

                            <img src="{{URL::asset('assets/img/cl.png')}}" alt="">

                          </div>

                        </div>

                      </div>


                      <div class="row">

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                          <div class="input1">

                            <span>Adults 12 + Yrs</span>

                            <input type="text" value="0" required>

                            <div class="inc">

                              <a href="#!"><i class="fa fa-minus"></i></a>

                              <a href="#!"><i class="fa fa-plus"></i></a>

                            </div>

                          </div>

                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                          <div class="input1">

                            <span>Children 2 - 12 Yrs</span>

                            <input type="text" value="0" required>

                            <div class="inc">

                              <a href="#!"><i class="fa fa-minus"></i></a>

                              <a href="#!"><i class="fa fa-plus"></i></a>

                            </div>

                          </div>

                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

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



                      <!--Show More Options start-->

                      <div class="option" data-toggle="collapse" data-target="#option">

                        <b><i class="fa fa-chevron-down"></i> Show More Options</b> ( Preferred Airline , Class)

                      </div>

                      <div class="option-det collapse" id="option">

                        <div class="row">

                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                            <div class="input">

                              <span>Preferred Airline</span>

                              <input type="text" placeholder="Type here">

                              <img src="{{URL::asset('assets/img/fu.png')}}" alt="">

                            </div>

                          </div>

                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

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

                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

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

                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

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

                      <!--Show More Options end-->



                      <button class="search-btn" type="submit">

                        Search Flights

                      </button>

                    </form>

                  </div>



                  <!--Round Trip-->

                  <div class="tab-pane" id="roundtrip" role="tabpanel">

                    <form>

                      <div class="row">

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                          <div class="input">

                            <span>From</span>

                            <input type="text" placeholder="City or Airport" required>

                            <img src="{{URL::asset('assets/img/fu.png')}}" alt="">

                          </div>

                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                          <div class="input">

                            <span>To</span>

                            <input type="text" placeholder="City or Airport" required>

                            <img src="{{URL::asset('assets/img/fd.png')}}" alt="">

                          </div>

                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                          <div class="input">

                            <span>Departure</span>

                            <input type="text" placeholder="Select Departure date" data-language="en" class="datepicker-here">

                            <img src="{{URL::asset('assets/img/cl.png')}}" alt="">

                          </div>

                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                          <div class="input">

                            <span>Return</span>

                            <input type="text" placeholder="Select Return Date" data-language="en" class="datepicker-here">

                            <img src="{{URL::asset('assets/img/cl.png')}}" alt="">

                          </div>

                        </div>

                      </div>



                      <div class="row">

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                          <div class="input1">

                            <span>Adults 12 + Yrs</span>

                            <input type="text" value="0" required>

                            <div class="inc">

                              <a href="#!"><i class="fa fa-minus"></i></a>

                              <a href="#!"><i class="fa fa-plus"></i></a>

                            </div>

                          </div>

                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                          <div class="input1">

                            <span>Children 2 - 12 Yrs</span>

                            <input type="text" value="0" required>

                            <div class="inc">

                              <a href="#!"><i class="fa fa-minus"></i></a>

                              <a href="#!"><i class="fa fa-plus"></i></a>

                            </div>

                          </div>

                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

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



                      <!--Show More Options start-->

                      <div class="option" data-toggle="collapse" data-target="#option2">

                        <b><i class="fa fa-chevron-down"></i> Show More Options</b> ( Preferred Airline , Class)

                      </div>

                      <div class="option-det collapse" id="option2">

                        <div class="row">

                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                            <div class="input">

                              <span>Preferred Airline</span>

                              <input type="text" placeholder="Type here">

                              <img src="{{URL::asset('assets/img/fu.png')}}" alt="">

                            </div>

                          </div>

                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

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

                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

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

                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

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

                      <!--Show More Options end-->



                      <button class="search-btn" type="submit">

                        Search Flights

                      </button>

                    </form>

                  </div>



                  <!--Multi City-->

                  <div class="tab-pane" id="multicity" role="tabpanel">

                    <form>

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



                      <div class="row">

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                          <div class="input1">

                            <span>Adults 12 + Yrs</span>

                            <input type="text" value="0" required>

                            <div class="inc">

                              <a href="#!"><i class="fa fa-minus"></i></a>

                              <a href="#!"><i class="fa fa-plus"></i></a>

                            </div>

                          </div>

                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                          <div class="input1">

                            <span>Children 2 - 12 Yrs</span>

                            <input type="text" value="0" required>

                            <div class="inc">

                              <a href="#!"><i class="fa fa-minus"></i></a>

                              <a href="#!"><i class="fa fa-plus"></i></a>

                            </div>

                          </div>

                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

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



                      <!--Show More Options start-->

                      <div class="option" data-toggle="collapse" data-target="#option3">

                        <b><i class="fa fa-chevron-down"></i> Show More Options</b> ( Preferred Airline , Class)

                      </div>

                      <div class="option-det collapse" id="option3">

                        <div class="row">

                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                            <div class="input">

                              <span>Preferred Airline</span>

                              <input type="text" placeholder="Type here">

                              <img src="{{URL::asset('assets/img/fu.png')}}" alt="">

                            </div>

                          </div>

                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

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

                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

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

                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

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

                      <!--Show More Options end-->



                      <button class="search-btn" type="submit">

                        Search Flights

                      </button>

                    </form>

                  </div>



                </div>

              </div>

            </div>

            <!--Hotels-->
            <div class="tab-pane" id="hotels" role="tabpanel">

              <div class="tab-bg">

                <h2>Book Hotels, Resorts and Lodges</h2>



                <form>

                  <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                      <div class="input2">

                        <span>Find hotel deals</span>

                        <input type="text" placeholder="Enter destination or hotel name" required>

                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                      <div class="input">

                        <span>Check-in</span>

                        <input type="text" placeholder="Check-in" data-language="en" class="datepicker-here">

                        <img src="{{URL::asset('assets/img/cl.png')}}" alt="">

                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                      <div class="input">

                        <span>Check-out</span>

                        <input type="text" placeholder="Check-out" data-language="en" class="datepicker-here">

                        <img src="{{URL::asset('assets/img/cl.png')}}" alt="">

                      </div>

                    </div>

                  </div>



                  <div class="row">

                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                      <div class="input1">

                        <span>Guests</span>

                        <input type="text" value="1" required>

                        <div class="inc">

                          <a href="#!"><i class="fa fa-minus"></i></a>

                          <a href="#!"><i class="fa fa-plus"></i></a>

                        </div>

                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                      <div class="input1">

                        <span>Rooms</span>

                        <input type="text" value="1" required>

                        <div class="inc">

                          <a href="#!"><i class="fa fa-minus"></i></a>

                          <a href="#!"><i class="fa fa-plus"></i></a>

                        </div>

                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                      <div class="input2">

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

                  <button class="search-btn" type="submit">

                    Search Hotels

                  </button>

                </form>

              </div>

            </div>

            <!--Bus-->
            <div class="tab-pane" id="bus" role="tabpanel">
              <div class="tab-bg">

                <h2>Book Bus Ticket Across India.</h2>

                <form>

                  <div class="row">

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                      <div class="input">

                        <span>From</span>

                        <input type="text" placeholder="City or Bus stand" required>

                        <img src="{{URL::asset('assets/img/bus.png')}}" alt="">

                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                      <div class="input">

                        <span>To</span>

                        <input type="text" placeholder="City or Bus stand" required>

                        <img src="{{URL::asset('assets/img/bus.png')}}" alt="">

                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                      <div class="input">

                        <span>Travel Date</span>

                        <input type="text" placeholder="Select Travel date" data-language="en" class="datepicker-here">

                        <img src="{{URL::asset('assets/img/cl.png')}}" alt="">

                      </div>

                    </div>

                  </div>


                  <div class="row">

                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                      <div class="input1">

                        <span>Adults 12 + Yrs</span>

                        <input type="text" value="0" required>

                        <div class="inc">

                          <a href="#!"><i class="fa fa-minus"></i></a>

                          <a href="#!"><i class="fa fa-plus"></i></a>

                        </div>

                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                      <div class="input1">

                        <span>Children 2 - 12 Yrs</span>

                        <input type="text" value="0" required>

                        <div class="inc">

                          <a href="#!"><i class="fa fa-minus"></i></a>

                          <a href="#!"><i class="fa fa-plus"></i></a>

                        </div>

                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

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

                  <button class="search-btn" type="submit">

                    Search Bus

                  </button>

                </form>

              </div>

            </div>

            <!--Cab-->
            <div class="tab-pane" id="cab" role="tabpanel">
              <div class="tab-bg">

                <h2>Book affordable Outstation Cabs for over 900+ cities in India</h2>

                <form>

                  <div class="row">

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                      <div class="input">

                        <span>From</span>

                        <input type="text" placeholder="City" required>

                        <img src="{{URL::asset('assets/img/cab.png')}}" alt="">

                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                      <div class="input">

                        <span>To</span>

                        <input type="text" placeholder="City" required>

                        <img src="{{URL::asset('assets/img/cab.png')}}" alt="">

                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                      <div class="input">

                        <span>Departure</span>

                        <input type="text" placeholder="Select Departure date" data-language="en" class="datepicker-here">

                        <img src="{{URL::asset('assets/img/cl.png')}}" alt="">

                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                      <div class="input">

                        <span>Return</span>

                        <input type="text" placeholder="Select Return date" data-language="en" class="datepicker-here">

                        <img src="{{URL::asset('assets/img/cl.png')}}" alt="">

                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                      <div class="input2">

                        <span>Pickup Time</span>

                        <input type="time">

                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                      <div class="input2">

                        <span>Drop Time</span>
                        <input type="time">

                      </div>

                    </div>

                  </div>


                  <button class="search-btn" type="submit">

                    Search Cab

                  </button>

                </form>

              </div>

            </div>

            <!--Hotels-->
            <div class="tab-pane" id="holidays" role="tabpanel">

              <div class="tab-bg">

                <h2>Book Holidays</h2>

                <form>

                  <div class="row">

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                      <div class="input2">

                        <span>From City</span>

                        <input type="text" placeholder="Enter your city" required>

                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                      <div class="input2">

                        <span>To City / Country</span>

                        <input type="text" placeholder="Enter destination city or Country name" required>

                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                      <div class="input">

                        <span>Check-in</span>

                        <input type="text" placeholder="Check-in" data-language="en" class="datepicker-here">

                        <img src="{{URL::asset('assets/img/cl.png')}}" alt="">

                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                      <div class="input">

                        <span>Check-out</span>

                        <input type="text" placeholder="Check-out" data-language="en" class="datepicker-here">

                        <img src="{{URL::asset('assets/img/cl.png')}}" alt="">

                      </div>

                    </div>

                  </div>



                  <div class="row">

                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                      <div class="input1">

                        <span>Guests</span>

                        <input type="text" value="1" required>

                        <div class="inc">

                          <a href="#!"><i class="fa fa-minus"></i></a>

                          <a href="#!"><i class="fa fa-plus"></i></a>

                        </div>

                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                      <div class="input1">

                        <span>Rooms</span>

                        <input type="text" value="1" required>

                        <div class="inc">

                          <a href="#!"><i class="fa fa-minus"></i></a>

                          <a href="#!"><i class="fa fa-plus"></i></a>

                        </div>

                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                      <div class="input2">

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

                  <button class="search-btn" type="submit">

                    Search Hotels

                  </button>

                </form>

              </div>

            </div>

          </div>

          <!--Tab Content start-->

        </div>

      </div>

      <div class="col-12 col-sm-12 col-md-12 col-lg-5">

        <div class="row">

          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">

            <!--Banner slider 01-->

            <div class="banner">

              <div id="Banner01" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">

                  <li data-target="#Banner01" data-slide-to="0" class="active"></li>

                  <li data-target="#Banner01" data-slide-to="1"></li>

                </ol>

                <div class="carousel-inner">

                  <div class="carousel-item active">

                    <img src="{{URL::asset('assets/img/b1-2.jpg')}}" class="d-block w-100')}}" alt="">

                  </div>

                  <div class="carousel-item">

                    <img src="{{URL::asset('assets/img/b1-3.jpg')}}" class="d-block w-100')}}" alt="">

                  </div>

                </div>

              </div>

            </div>

          </div>

          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">

            <!--Banner slider 02-->

            <div class="banner2">

              <div id="Banner02" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">

                  <li data-target="#Banner02" data-slide-to="0" class="active"></li>

                  <li data-target="#Banner02" data-slide-to="1"></li>

                </ol>

                <div class="carousel-inner">

                  <div class="carousel-item active">

                    <img src="{{URL::asset('assets/img/b2-1.jpg')}}" class="d-block w-100')}}" alt="">

                  </div>

                  <div class="carousel-item">

                    <img src="{{URL::asset('assets/img/b2-2.jpg')}}" class="d-block w-100')}}" alt="">

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>



      </div>

    </div>
  </div>

</div>
<!--Banner end-->

<!--Content start-->

<!--Best Flight and Support Start-->
<section class="best-flight-bg">
  <!--Offer-->
  <div class="container">

    <div class="row">

      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

        <a href="#!" class="best-bg">

          <img src="{{URL::asset('assets/img/dollar.png')}}" alt="">

          <span>BEST PRICE GUARANTEED</span>

          <small>Find a lower price? We'll refund you 100% of the difference.</small>

        </a>

      </div>

      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

        <a href="#!" class="support-bg">

          <img src="{{URL::asset('assets/img/support.png')}}" alt="">

          <span>24×7 SUPPORT</span>

          <small>We’re always here for you – reach us 24 hours a day, 7 days a week.</small>

        </a>

      </div>

    </div>

  </div>

  <!--Best Flight start-->
  <div class="container">
    <h2 class="title"><strong>Best Flight</strong></h2>
    <div class="offer slider popular-posts-slider">

      <!--Item 01-->

      <div>

        <div class="best-block-bg">

          <img src="{{URL::asset('assets/img/img-01.png')}}" alt="">

          <footer>

            <h4>Upto Rs.1650 Off</h4>

            <span>Flat Rs.800 Off+10% Supercash (up to Rs.1000)</span>



            <div class="row">

              <div class="col-6">

                <div class="coup">

                  AFIND50

                </div>

              </div>

              <div class="col-6">

                <small>Valid till: 31 Mar, 2019</small>

              </div>

            </div>

          </footer>

        </div>

      </div>

      <!--Item 02-->

      <div>

        <div class="best-block-bg">

          <img src="{{URL::asset('assets/img/img-02.png')}}" alt="">

          <footer>

            <h4>Upto Rs.1650 Off</h4>

            <span>Flat Rs.800 Off+10% Supercash (up to Rs.1000)</span>



            <div class="row">

              <div class="col-6">

                <div class="coup">

                  AFIND50

                </div>

              </div>

              <div class="col-6">

                <small>Valid till: 31 Mar, 2019</small>

              </div>

            </div>

          </footer>

        </div>

      </div>

      <!--Item 03-->

      <div>

        <div class="best-block-bg">

          <img src="{{URL::asset('assets/img/img-03.png')}}" alt="">

          <footer>

            <h4>Upto Rs.1650 Off</h4>

            <span>Flat Rs.800 Off+10% Supercash (up to Rs.1000)</span>



            <div class="row">

              <div class="col-6">

                <div class="coup">

                  AFIND50

                </div>

              </div>

              <div class="col-6">

                <small>Valid till: 31 Mar, 2019</small>

              </div>

            </div>

          </footer>

        </div>

      </div>

      <!--Item 04-->

      <div>

        <div class="best-block-bg">

          <img src="{{URL::asset('assets/img/img-01.png')}}" alt="">

          <footer>

            <h4>Upto Rs.1650 Off</h4>

            <span>Flat Rs.800 Off+10% Supercash (up to Rs.1000)</span>



            <div class="row">

              <div class="col-6">

                <div class="coup">

                  AFIND50

                </div>

              </div>

              <div class="col-6">

                <small>Valid till: 31 Mar, 2019</small>

              </div>

            </div>

          </footer>

        </div>

      </div>

      <!--Item 05-->

      <div>

        <div class="best-block-bg">

          <img src="{{URL::asset('assets/img/img-02.png')}}" alt="">

          <footer>

            <h4>Upto Rs.1650 Off</h4>

            <span>Flat Rs.800 Off+10% Supercash (up to Rs.1000)</span>



            <div class="row">

              <div class="col-6">

                <div class="coup">

                  AFIND50

                </div>

              </div>

              <div class="col-6">

                <small>Valid till: 31 Mar, 2019</small>

              </div>

            </div>

          </footer>

        </div>

      </div>

      <!--Item 06-->

      <div>

        <div class="best-block-bg">

          <img src="{{URL::asset('assets/img/img-03.png')}}" alt="">

          <footer>

            <h4>Upto Rs.1650 Off</h4>

            <span>Flat Rs.800 Off+10% Supercash (up to Rs.1000)</span>



            <div class="row">

              <div class="col-6">

                <div class="coup">

                  AFIND50

                </div>

              </div>

              <div class="col-6">

                <small>Valid till: 31 Mar, 2019</small>

              </div>

            </div>

          </footer>

        </div>

      </div>

    </div>
  </div>
  <!--Best Flight end-->
</section>
<!--Best Flight and Support end-->

<!--Tour Package start-->
<section class="tour">

  <div class="container">

    <h2 class="title1"><strong>Tour Package</strong></h2>



    <div class="row">

      <div class="col-xs-12 col-sm-6 col-md-3">

        <a href="holidays.html" class="tour-block">

          <img src="{{URL::asset('assets/img/t1.png')}}" alt="">

          <h2>

            Mumbai

          </h2>

        </a>

      </div>

      <div class="col-xs-12 col-sm-6 col-md-3">

        <a href="holidays.html" class="tour-block">

          <img src="{{URL::asset('assets/img/t2.png')}}" alt="">

          <h2>

            Delhi

          </h2>

        </a>

      </div>

      <div class="col-xs-12 col-sm-6 col-md-3">

        <a href="holidays.html" class="tour-block">

          <img src="{{URL::asset('assets/img/t3.png')}}" alt="">

          <h2>

            Bangalore

          </h2>

        </a>

      </div>

      <div class="col-xs-12 col-sm-6 col-md-3">

        <a href="holidays.html" class="tour-block">

          <img src="{{URL::asset('assets/img/t4.png')}}" alt="">

          <h2>

            Srinagar

          </h2>

        </a>

      </div>

    </div>



    <a href="holidays.html" class="view-more">View More</a>

  </div>

</section>
<!--Tour Package end-->

<!--Blog Package start-->
<section class="blog">

  <div class="container">

    <h2 class="title1"><strong>Blog</strong></h2>



    <div class="row">

      <div class="col-12 col-md-4 col-md-4">
        <a href="blog-details.html" class="tour-block">
          <img src="{{URL::asset('assets/img/about-02.jpg')}}" alt="">
          <h2>
            Key benefits of my portfolio
          </h2>
        </a>
      </div>

      <div class="col-12 col-md-4 col-md-4">
        <a href="blog-details.html" class="tour-block">
          <img src="{{URL::asset('assets/img/about-03.jpg')}}" alt="">
          <h2>
            Reasons to go responsive
          </h2>
        </a>
      </div>

      <div class="col-12 col-md-4 col-md-4">
        <a href="blog-details.html" class="tour-block">
          <img src="{{URL::asset('assets/img/about-04.jpg')}}" alt="">
          <h2>
            How to keep your SEO rankings
          </h2>
        </a>
      </div>

    </div>



    <a href="blog.html" class="view-more">View More</a>

  </div>

</section>
<!--Blog Package end-->

<!--Partner Package start-->
<section class="partner">

  <div class="container">

    <h2 class="title1"><strong>Partner Airlines</strong></h2>

    <div class="row">
      <div class="col-6 col-sm-4 col-md-4 col-lg-2">
        <img src="{{URL::asset('assets/img/p_01.png')}}" class="plogo w-100" alt="" />
      </div>
      <div class="col-6 col-sm-4 col-md-4 col-lg-2">
        <img src="{{URL::asset('assets/img/p_02.png')}}" class="plogo w-100" alt="" />
      </div>
      <div class="col-6 col-sm-4 col-md-4 col-lg-2">
        <img src="{{URL::asset('assets/img/p_03.png')}}" class="plogo w-100" alt="" />
      </div>
      <div class="col-6 col-sm-4 col-md-4 col-lg-2">
        <img src="{{URL::asset('assets/img/p_04.png')}}" class="plogo w-100" alt="" />
      </div>
      <div class="col-6 col-sm-4 col-md-4 col-lg-2">
        <img src="{{URL::asset('assets/img/p_05.png')}}" class="plogo w-100" alt="" />
      </div>
      <div class="col-6 col-sm-4 col-md-4 col-lg-2">
        <img src="{{URL::asset('assets/img/p_06.png')}}" class="plogo w-100" alt="" />
      </div>

    </div>

  </div>

</section>
<!--Partner Package end-->

<!--Subscribe start-->
<section class="subscribe-bg">

  <div class="container">

    <div class="row">

      <div class="col-xs-12 col-sm-3 col-md-4 col-lg-2">

        <div class="qr">

          <h3>Scan QR Code</h3>

          <img src="{{URL::asset('assets/img/travel-engine-QR.png')}}" alt="">

        </div>

      </div>

      <div class="col-xs-12 col-sm-9 col-md-8 col-lg-5">

        <div class="download">

          <h3>Download Our App</h3>

          <a href=""><img src="{{URL::asset('assets/img/aap_01.png')}}" alt=""></a>

          <img src="{{URL::asset('assets/img/aap_02.png')}}" alt="">

        </div>

        <div class="subscribe">

          <small>Download via SMS</small>

          <div class="sms-bg">

            <select>

              <option selected>+966</option>

              <option>+91</option>

              <option>+971</option>

            </select>

            <input type="text" placeholder="Enter your 10 digit mobile number">

            <button type="button">Submit</button>

          </div>

          <small>Or you can also give a missed call on 8888888888 to download the app</small>

        </div>

      </div>

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">

        <div class="sub-email">

          <h3>Sign up for Exclusive Coupons / Deals</h3>

          <span>Exclusive access to coupons, special offers and promotions.</span>

          <div class="sub-input">

            <input type="text" placeholder="Enter your e-mail address">

            <button type="button">Send</button>

          </div>

        </div>

      </div>

    </div>

  </div>

</section>
<!--Subscribe end-->

<!--Content end-->

@endsection