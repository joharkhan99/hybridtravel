@extends('layouts.front')

@section('content')

<!--Content start-->
<div class="container">

  <div class="hheading">

    <h1>Checkout</h1>

  </div>



  <div class="slide-bg">

    <div class="row">

      <div class="col-sm-12 col-md-8 col-lg-9">

        <div class="flight-detail">

          <div class="row">

            <div class="col-sm-12 col-md-12 col-lg-3">

              <div class="fcart">

                <img src="{{URL::asset('assets/img/bus/b1.png')}}" alt="">

                <span><b>zingbus</b></span>

                <small>Bharat Benz Full Air Suspention AC Sleeper (2+1)</small>

              </div>

            </div>

            <div class="col-sm-5 col-md-5 col-lg-4">

              <span class="loc">Delhi</span>

              <span class="time">20:40 </span>

              <span class="date">17 Dec' 20, Thu</span>

              <span class="air">Delhi - Dhaula Kaun Bus Stop (Infront of DSOI office)</span>

            </div>

            <div class="col-sm-2 col-md-2 col-lg-1">

              <div class="line2">

                6h

                <i class="fa fa-bus"></i>

              </div>

            </div>

            <div class="col-sm-5 col-md-5 col-lg-4">

              <span class="loc">Kanpur</span>

              <span class="time">03:35</span>

              <span class="date">18 Dec' 20, Fri</span>

              <span class="air">Kanpur Bypass Naubasta Chauraha Starting of Flyover</span>

            </div>

          </div>



          <div class="change-plan">

            2 Seats Selected - UD 2, UD 5

          </div>

        </div>

        <!--Traveller 01 start-->
        <br>

        <h2 class="htitle"><i class="fa fa-user"></i> Enter Traveller Details | <small>Seat UD 2 horizontal sleeper</small></h2>

        <div class="form-bg">

          <div class="row">

            <div class="col-sm-12 col-md-5 col-lg-5">

              <div class="form-group">

                <label>Name</label>

                <input type="text" class="form-control">

              </div>

            </div>

            <div class="col-sm-12 col-md-3 col-lg-3">

              <div class="form-group">

                <label>Age (in yrs)</label>

                <input type="number" class="form-control">

              </div>

            </div>

            <div class="col-sm-12 col-md-4 col-lg-4">

              <div class="form-group">

                <label>Gender</label>
                <select class="form-control">
                  <option>Male</option>
                  <option>Female</option>
                </select>

              </div>

            </div>

          </div>

        </div>
        <!--Traveller 01 end-->


        <!--Traveller 01 start-->
        <br><br>

        <h2 class="htitle"><i class="fa fa-user"></i> Enter Traveller Details | <small>Seat UD 5 horizontal sleeper</small></h2>

        <div class="form-bg">

          <div class="row">

            <div class="col-sm-12 col-md-5 col-lg-5">

              <div class="form-group">

                <label>Name</label>

                <input type="text" class="form-control">

              </div>

            </div>

            <div class="col-sm-12 col-md-3 col-lg-3">

              <div class="form-group">

                <label>Age (in yrs)</label>

                <input type="number" class="form-control">

              </div>

            </div>

            <div class="col-sm-12 col-md-4 col-lg-4">

              <div class="form-group">

                <label>Gender</label>
                <select class="form-control">
                  <option>Male</option>
                  <option>Female</option>
                </select>

              </div>

            </div>

          </div>

        </div>
        <!--Traveller 01 end-->

        <!--Contact traveller details start-->
        <br> <br>

        <h2 class="htitle"><i class="fa fa-user"></i> Enter Contact Details | <small> <a href="{{route('login')}}">Sign in</a> to book faster</small></h2>

        <div class="form-bg">

          <div class="row">

            <div class="col-sm-12 col-md-5 col-lg-5">

              <div class="form-group">

                <label>

                  Email ID

                  <small>(Booking confirmation will be sent to this email ID)</small>

                </label>

                <input type="text" class="form-control">

              </div>

            </div>

            <div class="col-sm-12 col-md-3 col-lg-3">
              <div class="form-group">

                <label>Code</label>

                <select class="form-control">

                  <option>India&nbsp;&nbsp;(+91)</option>

                  <option>Afghanistan&nbsp;&nbsp;(+93)</option>

                  <option>Albania&nbsp;&nbsp;(+355)</option>

                  <option>Algeria&nbsp;&nbsp;(+213)</option>

                  <option>American Samoa&nbsp;&nbsp;(+1 684)</option>

                </select>

              </div>

            </div>

            <div class="col-sm-12 col-md-4 col-lg-4">

              <div class="form-group">

                <label>Mobile Number</label>

                <input type="number" class="form-control">

              </div>

            </div>

          </div>



          <div class="form-group form-check">

            <input type="checkbox" class="form-check-input" id="GST" data-toggle="collapse" data-target="#gstd">

            <label class="form-check-label" for="GST" data-toggle="collapse" data-target="#gstd">

              I have a GST number

              (optional)

            </label>

          </div>

          <div class="row collapse" id="gstd">

            <div class="col-sm-6 col-md-6 col-lg-6">

              <div class="form-group">

                <label>GST Number</label>

                <input type="text" class="form-control">

              </div>

            </div>

            <div class="col-sm-6 col-md-6 col-lg-6">

              <div class="form-group">

                <label>

                  Company Name

                </label>

                <input type="text" class="form-control">

              </div>

            </div>

            <div class="col-sm-12 col-md-12 col-lg-12">

              <div class="form-group">

                <label>

                  Company Address

                </label>

                <input type="text" class="form-control">

              </div>

            </div>

          </div>

        </div>

        <!--Contact traveller details end-->


        <!--Coupon start-->
        <br><br>

        <h2 class="htitle"><i class="fa fa-gift"></i> Available Deals</h2>

        <br>

        <div class="form-bg">

          <label>Have a Coupon Code?</label>

          <div class="row">

            <div class="col-sm-6 col-md-6 col-lg-8">

              <div class="form-group">

                <input type="text" class="form-control">

              </div>

            </div>

            <div class="col-sm-6 col-md-6 col-lg-4">

              <a href="#!" class="btn-book">Apply coupon</a>

            </div>

          </div>

        </div>
        <!--Coupon end-->


        <br><br />

        <div class="row">

          <div class="col-sm-6 col-md-6 col-lg-4">

            <button type="button" class="btn-book1">Pay Now</button>

          </div>

        </div>

      </div>

      <div class="col-sm-12 col-md-4 col-lg-3">

        <h4>Fare Details</h4>

        <table class="table table-bordered">

          <tr>

            <td class="cursor" data-toggle="collapse" data-target="#fare">Base Fare <i class="fa fa-chevron-down"></i></td>

            <td>Rs. 3084</td>

          </tr>

          <tr class="collapse" id="fare">

            <td colspan="2">

              <table class="table">

                <tr>

                  <td><small>Adult x 2</small></td>

                  <td><small>Rs. 3084</small></td>

                </tr>

                <tr>

                  <td><small>Children x 1</small></td>

                  <td><small>Rs. 0</small></td>

                </tr>

                <tr>

                  <td><small>Infants x 1</small></td>

                  <td><small>Rs. 0</small></td>

                </tr>

              </table>

            </td>

          </tr>

          <tr>

            <td class="cursor" data-toggle="collapse" data-target="#fee">Fee & Surcharges <i class="fa fa-chevron-down"></i></td>

            <td>Rs. 154</td>

          </tr>

          <tr class="collapse" id="fee">

            <td colspan="2">

              <table class="table">

                <tr>

                  <td><small>Tax</small></td>

                  <td><small>Rs. 154</small></td>

                </tr>

                <tr>

                  <td><small>Passenger Service Fee</small></td>

                  <td>Rs. 0</td>

                </tr>

              </table>

            </td>

          </tr>

          <tr>

            <td>Total Fare</td>

            <td>

              Rs. 3238

            </td>

          </tr>

          <tr>

            <td>Discount</td>

            <td>Rs.238</td>

          </tr>

          <tr>

            <td class="table-dark">You Pay</td>

            <td class="table-dark">Rs.3000</td>

          </tr>

        </table>

        <button type="button" class="btn-book1">Pay Now</button>

      </div>

    </div>

  </div>



</div>
<!--Content end-->

@endsection