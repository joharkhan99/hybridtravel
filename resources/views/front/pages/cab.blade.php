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

              <span>Trip Type</span>
              <select>
                <option>Outstation One-way</option>
                <option>Outstation Round-trip</option>
                <option>Cab From Airport</option>
                <option>Cab To Airport</option>
              </select>

            </div>

          </div>

          <div class="col-6 col-sm-6 col-md-6 col-lg-3">

            <div class="text-box">

              <span>From</span>

              <input type="text" value="Delhi">

            </div>

          </div>

          <div class="col-6 col-sm-6 col-md-6 col-lg-3">

            <div class="text-box">

              <span>To</span>

              <input type="text" value="Goa">

            </div>

          </div>

          <div class="col-6 col-sm-6 col-md-6 col-lg-3">

            <div class="text-box">

              <span>Pickup date & time</span>

              <input type="text" value="11/19/2020 02:54 pm" data-timepicker="true" data-language="en" class="datepicker-here">

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

  <!--Cab 01 start-->
  <div class="cab-bg">

    <!--Agent Fare start-->

    <a href="#agentfare" class="agentfare-h" data-toggle="collapse"><i class="fa fa-eye"></i></a>

    <div class="agentfared-h collapse" id="agentfare">

      <div class="row">

        <div class="col-6 col-sm-6 col-md-3 col-lg-3">

          <span>Base Fare</span>

          <b>2026</b>

        </div>

        <div class="col-6 col-sm-6 col-md-3 col-lg-3">

          <span>Taxes &amp; Others</span>

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

      <div class="col-12 col-sm-4 col-md-3 col-lg-2">

        <a href="#!">

          <img src="{{URL::asset('assets/img/cab/car.png')}}" class="himg" alt="">

        </a>

      </div>

      <div class="col-12 col-sm-8 col-md-6 col-lg-7">

        <h2 class="ht">

          <a href="#!">Dzire, Etios Or Similar</a>

        </h2>

        <span class="location">

          Sedan

        </span>



        <div class="faci">
          <b>Facilities:</b>

          <small><i class="fa fa-car"></i> 4 Seater</small>

          <small><i class="fa fa-briefcase"></i> 2 Luggage Bags </small>

          <small><i class="fa fa-check-square-o"></i> AC</small>

        </div>

        <div class="cab-notes">
          <i class="fa fa-check"></i>
          <span>1174 Kms included | <small>Extra fare ₹11.55/km after 1174 Kms</small> </span>
          <a href="#cabDetails" data-toggle="collapse">Cab details <i class="fa fa-chevron-down"></i></a>
        </div>

      </div>

      <div class="col-12 col-sm-12 col-md-3 col-lg-3">

        <div class="price">

          <span>Rs 14,347</span>

          <small>inclusive of GST</small>

        </div>

        <a href="{{route('front.cab_checkout')}}" class="book">Book Now</a>

      </div>

    </div>



    <!--Cab details start-->
    <div class="fare collapse" id="cabDetails">

      <div class="row">

        <div class="col-sm-12 col-md-6 col-lg-6">

          <div class="table-responsive">

            <table class="table">

              <thead>

                <tr>

                  <th>Inclusions</th>

                </tr>

              </thead>
              <tbody>
                <tr>
                  <td>1174 Kms till 3:00 AM, 21 Nov</td>
                </tr>
                <tr>
                  <td>Driver Allowance</td>
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

                  <th>Exclustions</th>

                </tr>

              </thead>
              <tbody>
                <tr>
                  <td>Night charges(11 PM to 6 AM): ₹ 500</td>
                </tr>
                <tr>
                  <td>Toll Charges: As applicable</td>
                </tr>
                <tr>
                  <td>State Tax: As applicable</td>
                </tr>
                <tr>
                  <td>Fare beyond 1174 Kms: ₹ 11.6/Km</td>
                </tr>
              </tbody>

            </table>

          </div>

        </div>

      </div>

    </div>
    <!--Cab details end-->

  </div>
  <!--Cab 01 end-->

  <!--Cab 02 start-->
  <div class="cab-bg">

    <!--Agent Fare start-->

    <a href="#agentfare" class="agentfare-h" data-toggle="collapse"><i class="fa fa-eye"></i></a>

    <div class="agentfared-h collapse" id="agentfare">

      <div class="row">

        <div class="col-6 col-sm-6 col-md-3 col-lg-3">

          <span>Base Fare</span>

          <b>2026</b>

        </div>

        <div class="col-6 col-sm-6 col-md-3 col-lg-3">

          <span>Taxes &amp; Others</span>

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

      <div class="col-12 col-sm-4 col-md-3 col-lg-2">

        <a href="#!">

          <img src="{{URL::asset('assets/img/cab/car.png')}}" class="himg" alt="">

        </a>

      </div>

      <div class="col-12 col-sm-8 col-md-6 col-lg-7">

        <h2 class="ht">

          <a href="#!">Dzire, Etios Or Similar</a>

        </h2>

        <span class="location">

          Sedan

        </span>



        <div class="faci">
          <b>Facilities:</b>

          <small><i class="fa fa-car"></i> 4 Seater</small>

          <small><i class="fa fa-briefcase"></i> 2 Luggage Bags </small>

          <small><i class="fa fa-check-square-o"></i> AC</small>

        </div>

        <div class="cab-notes">
          <i class="fa fa-check"></i>
          <span>1174 Kms included | <small>Extra fare ₹11.55/km after 1174 Kms</small> </span>
          <a href="#cabDetails2" data-toggle="collapse">Cab details <i class="fa fa-chevron-down"></i></a>
        </div>

      </div>

      <div class="col-12 col-sm-12 col-md-3 col-lg-3">

        <div class="price">

          <span>Rs 14,347</span>

          <small>inclusive of GST</small>

        </div>

        <a href="{{route('front.cab_checkout')}}" class="book">Book Now</a>

      </div>

    </div>



    <!--Cab details start-->
    <div class="fare collapse" id="cabDetails2">

      <div class="row">

        <div class="col-sm-12 col-md-6 col-lg-6">

          <div class="table-responsive">

            <table class="table">

              <thead>

                <tr>

                  <th>Inclusions</th>

                </tr>

              </thead>
              <tbody>
                <tr>
                  <td>1174 Kms till 3:00 AM, 21 Nov</td>
                </tr>
                <tr>
                  <td>Driver Allowance</td>
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

                  <th>Exclustions</th>

                </tr>

              </thead>
              <tbody>
                <tr>
                  <td>Night charges(11 PM to 6 AM): ₹ 500</td>
                </tr>
                <tr>
                  <td>Toll Charges: As applicable</td>
                </tr>
                <tr>
                  <td>State Tax: As applicable</td>
                </tr>
                <tr>
                  <td>Fare beyond 1174 Kms: ₹ 11.6/Km</td>
                </tr>
              </tbody>

            </table>

          </div>

        </div>

      </div>

    </div>
    <!--Cab details end-->

  </div>
  <!--Cab 02 end-->

  <!--Cab 03 start-->
  <div class="cab-bg">

    <!--Agent Fare start-->

    <a href="#agentfare" class="agentfare-h" data-toggle="collapse"><i class="fa fa-eye"></i></a>

    <div class="agentfared-h collapse" id="agentfare">

      <div class="row">

        <div class="col-6 col-sm-6 col-md-3 col-lg-3">

          <span>Base Fare</span>

          <b>2026</b>

        </div>

        <div class="col-6 col-sm-6 col-md-3 col-lg-3">

          <span>Taxes &amp; Others</span>

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

      <div class="col-12 col-sm-4 col-md-3 col-lg-2">

        <a href="#!">

          <img src="{{URL::asset('assets/img/cab/car.png')}}" class="himg" alt="">

        </a>

      </div>

      <div class="col-12 col-sm-8 col-md-6 col-lg-7">

        <h2 class="ht">

          <a href="#!">Dzire, Etios Or Similar</a>

        </h2>

        <span class="location">

          Sedan

        </span>



        <div class="faci">
          <b>Facilities:</b>

          <small><i class="fa fa-car"></i> 4 Seater</small>

          <small><i class="fa fa-briefcase"></i> 2 Luggage Bags </small>

          <small><i class="fa fa-check-square-o"></i> AC</small>

        </div>

        <div class="cab-notes">
          <i class="fa fa-check"></i>
          <span>1174 Kms included | <small>Extra fare ₹11.55/km after 1174 Kms</small> </span>
          <a href="#cabDetails3" data-toggle="collapse">Cab details <i class="fa fa-chevron-down"></i></a>
        </div>

      </div>

      <div class="col-12 col-sm-12 col-md-3 col-lg-3">

        <div class="price">

          <span>Rs 14,347</span>

          <small>inclusive of GST</small>

        </div>

        <a href="{{route('front.cab_checkout')}}" class="book">Book Now</a>

      </div>

    </div>



    <!--Cab details start-->
    <div class="fare collapse" id="cabDetails3">

      <div class="row">

        <div class="col-sm-12 col-md-6 col-lg-6">

          <div class="table-responsive">

            <table class="table">

              <thead>

                <tr>

                  <th>Inclusions</th>

                </tr>

              </thead>
              <tbody>
                <tr>
                  <td>1174 Kms till 3:00 AM, 21 Nov</td>
                </tr>
                <tr>
                  <td>Driver Allowance</td>
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

                  <th>Exclustions</th>

                </tr>

              </thead>
              <tbody>
                <tr>
                  <td>Night charges(11 PM to 6 AM): ₹ 500</td>
                </tr>
                <tr>
                  <td>Toll Charges: As applicable</td>
                </tr>
                <tr>
                  <td>State Tax: As applicable</td>
                </tr>
                <tr>
                  <td>Fare beyond 1174 Kms: ₹ 11.6/Km</td>
                </tr>
              </tbody>

            </table>

          </div>

        </div>

      </div>

    </div>
    <!--Cab details end-->

  </div>
  <!--Cab 03 end-->

  <!--Cab 04 start-->
  <div class="cab-bg">

    <!--Agent Fare start-->

    <a href="#agentfare" class="agentfare-h" data-toggle="collapse"><i class="fa fa-eye"></i></a>

    <div class="agentfared-h collapse" id="agentfare">

      <div class="row">

        <div class="col-6 col-sm-6 col-md-3 col-lg-3">

          <span>Base Fare</span>

          <b>2026</b>

        </div>

        <div class="col-6 col-sm-6 col-md-3 col-lg-3">

          <span>Taxes &amp; Others</span>

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

      <div class="col-12 col-sm-4 col-md-3 col-lg-2">

        <a href="#!">

          <img src="{{URL::asset('assets/img/cab/car.png')}}" class="himg" alt="">

        </a>

      </div>

      <div class="col-12 col-sm-8 col-md-6 col-lg-7">

        <h2 class="ht">

          <a href="#!">Dzire, Etios Or Similar</a>

        </h2>

        <span class="location">

          Sedan

        </span>



        <div class="faci">
          <b>Facilities:</b>

          <small><i class="fa fa-car"></i> 4 Seater</small>

          <small><i class="fa fa-briefcase"></i> 2 Luggage Bags </small>

          <small><i class="fa fa-check-square-o"></i> AC</small>

        </div>

        <div class="cab-notes">
          <i class="fa fa-check"></i>
          <span>1174 Kms included | <small>Extra fare ₹11.55/km after 1174 Kms</small> </span>
          <a href="#cabDetails4" data-toggle="collapse">Cab details <i class="fa fa-chevron-down"></i></a>
        </div>

      </div>

      <div class="col-12 col-sm-12 col-md-3 col-lg-3">

        <div class="price">

          <span>Rs 14,347</span>

          <small>inclusive of GST</small>

        </div>

        <a href="{{route('front.cab_checkout')}}" class="book">Book Now</a>

      </div>

    </div>



    <!--Cab details start-->
    <div class="fare collapse" id="cabDetails4">

      <div class="row">

        <div class="col-sm-12 col-md-6 col-lg-6">

          <div class="table-responsive">

            <table class="table">

              <thead>

                <tr>

                  <th>Inclusions</th>

                </tr>

              </thead>
              <tbody>
                <tr>
                  <td>1174 Kms till 3:00 AM, 21 Nov</td>
                </tr>
                <tr>
                  <td>Driver Allowance</td>
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

                  <th>Exclustions</th>

                </tr>

              </thead>
              <tbody>
                <tr>
                  <td>Night charges(11 PM to 6 AM): ₹ 500</td>
                </tr>
                <tr>
                  <td>Toll Charges: As applicable</td>
                </tr>
                <tr>
                  <td>State Tax: As applicable</td>
                </tr>
                <tr>
                  <td>Fare beyond 1174 Kms: ₹ 11.6/Km</td>
                </tr>
              </tbody>

            </table>

          </div>

        </div>

      </div>

    </div>
    <!--Cab details end-->

  </div>
  <!--Cab 04 end-->

  <!--Cab 05 start-->
  <div class="cab-bg">

    <!--Agent Fare start-->

    <a href="#agentfare" class="agentfare-h" data-toggle="collapse"><i class="fa fa-eye"></i></a>

    <div class="agentfared-h collapse" id="agentfare">

      <div class="row">

        <div class="col-6 col-sm-6 col-md-3 col-lg-3">

          <span>Base Fare</span>

          <b>2026</b>

        </div>

        <div class="col-6 col-sm-6 col-md-3 col-lg-3">

          <span>Taxes &amp; Others</span>

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

      <div class="col-12 col-sm-4 col-md-3 col-lg-2">

        <a href="#!">

          <img src="{{URL::asset('assets/img/cab/car.png')}}" class="himg" alt="">

        </a>

      </div>

      <div class="col-12 col-sm-8 col-md-6 col-lg-7">

        <h2 class="ht">

          <a href="#!">Dzire, Etios Or Similar</a>

        </h2>

        <span class="location">

          Sedan

        </span>



        <div class="faci">
          <b>Facilities:</b>

          <small><i class="fa fa-car"></i> 4 Seater</small>

          <small><i class="fa fa-briefcase"></i> 2 Luggage Bags </small>

          <small><i class="fa fa-check-square-o"></i> AC</small>

        </div>

        <div class="cab-notes">
          <i class="fa fa-check"></i>
          <span>1174 Kms included | <small>Extra fare ₹11.55/km after 1174 Kms</small> </span>
          <a href="#cabDetails5" data-toggle="collapse">Cab details <i class="fa fa-chevron-down"></i></a>
        </div>

      </div>

      <div class="col-12 col-sm-12 col-md-3 col-lg-3">

        <div class="price">

          <span>Rs 14,347</span>

          <small>inclusive of GST</small>

        </div>

        <a href="{{route('front.cab_checkout')}}" class="book">Book Now</a>

      </div>

    </div>



    <!--Cab details start-->
    <div class="fare collapse" id="cabDetails5">

      <div class="row">

        <div class="col-sm-12 col-md-6 col-lg-6">

          <div class="table-responsive">

            <table class="table">

              <thead>

                <tr>

                  <th>Inclusions</th>

                </tr>

              </thead>
              <tbody>
                <tr>
                  <td>1174 Kms till 3:00 AM, 21 Nov</td>
                </tr>
                <tr>
                  <td>Driver Allowance</td>
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

                  <th>Exclustions</th>

                </tr>

              </thead>
              <tbody>
                <tr>
                  <td>Night charges(11 PM to 6 AM): ₹ 500</td>
                </tr>
                <tr>
                  <td>Toll Charges: As applicable</td>
                </tr>
                <tr>
                  <td>State Tax: As applicable</td>
                </tr>
                <tr>
                  <td>Fare beyond 1174 Kms: ₹ 11.6/Km</td>
                </tr>
              </tbody>

            </table>

          </div>

        </div>

      </div>

    </div>
    <!--Cab details end-->

  </div>
  <!--Cab 05 end-->


</div>
<!--Content end-->

@endsection