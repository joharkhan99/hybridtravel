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

        <div class="hotel-bg">

          <div class="row">

            <div class="col-12 col-sm-4 col-md-3 col-lg-3">

              <a href="{{route('front.hotel_details')}}">

                <img src="img/t1.png" class="himg" alt="">

              </a>

            </div>

            <div class="col-12 col-sm-8 col-md-6 col-lg-6">

              <h2 class="ht">

                <a href="{{route('front.hotel_details')}}">2 Nights Kuala Lumpur & 3 Nights Bali</a>

              </h2>

              <span class="rate">

                5 Nights 6 Days

              </span>

              <span class="location">

                2N Kuala Lumpur - 3N Bali

              </span>

              <br>

              <span class="location">

                Trip Date: 05-14-2019

              </span>

              <br>

              <a href="{{('front.holidays_details')}}">View details</a>



            </div>

            <div class="col-12 col-sm-12 col-md-3 col-lg-3">

              <div class="price">

                <small>Room: 1</small>

                <small>Adults 1: 2 Child</small>

              </div>

              <a href="#option1" class="book" data-toggle="collapse">Edit</a>

            </div>

          </div>



          <div class="hotel-detail-bg">

            <div class="collapse" id="option1">

              <div class="table-responsive">

                <table class="table">

                  <thead>

                    <tr>

                      <td>Room</td>

                      <td>Adults</td>

                      <td>Child</td>

                      <td>Infants</td>

                      <td>Number</td>

                      <td>Cost/Person (INR)</td>

                      <td>Net Cost (INR)</td>

                    </tr>

                  </thead>

                  <tbody>

                    <tr>

                      <td>

                        <div class="input2">

                          <input type="number" value="1" disabled>

                        </div>

                      </td>

                      <td>

                        <div class="input2">

                          <input type="number" value="1">

                        </div>

                      </td>

                      <td>

                        <div class="input2">

                          <input type="number" value="1">

                        </div>

                      </td>

                      <td>

                        <div class="input2">

                          <input type="number" value="1">

                        </div>

                      </td>

                      <td>

                        <div class="input2">

                          <input type="number" value="1" disabled>

                        </div>

                      </td>

                      <td>

                        <div class="input2">

                          <input type="number" value="40000" disabled>

                        </div>

                      </td>

                      <td>

                        <div class="input2">

                          <input type="number" value="40000" disabled>

                        </div>

                      </td>

                    </tr>

                    <tr>

                      <td>

                        <div class="input2">

                          <input type="number" value="1" disabled>

                        </div>

                      </td>

                      <td>

                        <div class="input2">

                          <input type="number" value="1">

                        </div>

                      </td>

                      <td>

                        <div class="input2">

                          <input type="number" value="1">

                        </div>

                      </td>

                      <td>

                        <div class="input2">

                          <input type="number" value="1">

                        </div>

                      </td>

                      <td>

                        <div class="input2">

                          <input type="number" value="1" disabled>

                        </div>

                      </td>

                      <td>

                        <div class="input2">

                          <input type="number" value="40000" disabled>

                        </div>

                      </td>

                      <td>

                        <div class="input2">

                          <input type="number" value="40000" disabled>

                        </div>

                      </td>

                    </tr>

                  </tbody>

                </table>

              </div>

              <a href="#!"><i class="fa fa-plus"></i> Add Room</a>



              <hr>

              <div class="row">

                <div class="col-sm-6 col-md-4 col-lg-4">

                  <div class="input1">

                    <span>Trip Date</span>

                    <input type="text" value="05/07/2019" data-language="en" class="datepicker-here">

                  </div>

                </div>

                <div class="col-sm-6 col-md-4 col-lg-4">

                  <button type="button" class="btn-book1" style="margin-top:16px;">Update</button>

                </div>

              </div>

              <hr>

            </div>

            <small>Cancellation Policy: Full refund if you cancel this booking by 13/May/2019.</small>

          </div>

        </div>


        <!--Traveller 01 start-->
        <br>

        <h2 class="htitle"><i class="fa fa-user"></i> Enter Traveller Details | <small>Adult 1</small></h2>

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


        <!--Traveller 02 start-->
        <br><br>

        <h2 class="htitle"><i class="fa fa-user"></i> Enter Traveller Details | <small>Adult 2</small></h2>

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
        <!--Traveller 02 end-->

        <!--Contact traveller details start-->
        <br> <br>

        <h2 class="htitle"><i class="fa fa-user"></i> Enter Contact Details | <small> <a href="login.html">Sign in</a> to book faster</small></h2>

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

            <td>Charges</td>

            <td>Rs.42,448</td>

          </tr>

          <tr>

            <td>Tax</td>

            <td>Rs.1,000</td>

          </tr>

          <tr>

            <td>Discount</td>

            <td>Rs.1,000</td>

          </tr>

          <tr>

            <td class="table-dark">You Pay</td>

            <td class="table-dark">Rs.42,448</td>

          </tr>

        </table>

        <button type="button" class="btn-book1">Pay Now</button>

      </div>

    </div>

  </div>



</div>
<!--Content end-->

@endsection