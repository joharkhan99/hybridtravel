@extends('layouts.front')

@section('content')

<!--Content start-->
<div class="container">

  <div class="hheading">

    <h1>Checkout - Outstation Round-trip</h1>

  </div>



  <div class="slide-bg">

    <div class="row">

      <div class="col-sm-12 col-md-8 col-lg-9">

        <div class="cab-bg">
          <div class="row">

            <div class="col-12 col-sm-4 col-md-3 col-lg-2">

              <a href="#!">

                <img src="{{URL::asset('assets/img/cab/car.png')}}" class="himg" alt="">

              </a>

            </div>

            <div class="col-12 col-sm-8 col-md-9 col-lg-10">

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


        <!--Driver & Cab details start-->
        <br>

        <div class="form-bg">

          <h2 class="htitle"><i class="fa fa-user"></i> Enter Traveller Details | <small>Seat UD 2 horizontal sleeper</small></h2>
          <br>
          <h6>Cab and driver details will be shared up to 30 mins prior to departure.</h5>

        </div>
        <!--Driver & Cab details end-->


        <!--Trip details start-->
        <br><br>
        <div class="form-bg">
          <h2 class="htitle"><i class="fa fa-user"></i> Trip details</h2>

          <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="form-group">

                <label>Confirm Pick up address</label>

                <input type="text" class="form-control">

              </div>

            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">

              <div class="form-group">

                <label>Confirm Drop off address</label>

                <input type="text" class="form-control">

              </div>

            </div>

          </div>

        </div>
        <!--Trip details end-->

        <!--Contact traveller details start-->
        <br> <br>

        <h2 class="htitle"><i class="fa fa-user"></i> Enter Traveller Details | <small> <a href="login.html">Sign in</a> to book faster</small></h2>

        <div class="form-bg">

          <div class="row">

            <div class="col-sm-12 col-md-12 col-lg-12">

              <div class="form-group">

                <label>Full Name</label>

                <input type="text" class="form-control">

              </div>

            </div>

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


        <br><br>

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

            <td>Base Fare</td>

            <td>Rs. 13597</td>

          </tr>
          <tr>

            <td class="cursor" data-toggle="collapse" data-target="#fee">Fee & Surcharges <i class="fa fa-chevron-down"></i></td>

            <td>Rs. 750</td>

          </tr>

          <tr class="collapse" id="fee">

            <td colspan="2">

              <table class="table">

                <tr>
                  <td><small>Driver Charges</small></td>

                  <td><small>Rs. 500</small></td>

                </tr>

                <tr>

                  <td><small>Tax</small></td>

                  <td><small>Rs. 250</small></td>

                </tr>

              </table>

            </td>

          </tr>

          <tr>

            <td>Total Fare</td>

            <td>

              Rs. 14347

            </td>

          </tr>

          <tr>

            <td>Discount</td>

            <td>Rs.100</td>

          </tr>

          <tr>

            <td class="table-dark">You Pay</td>

            <td class="table-dark">Rs.14247</td>

          </tr>

        </table>

        <button type="button" class="btn-book1">Pay Now</button>

      </div>

    </div>

  </div>



</div>
<!--Content end-->

@endsection