@extends('layouts.user')

@section('title', 'Hybrid Travel - Travel Booking System')

@section('content')

<!--Content start-->
<div class="container mar60">

  <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
      <div class="user-profile-bg">
        <!--User info-->
        <div class="user-profile-info">
          <img src="../img/team/captain-america.png" alt="" />
          <h2>Captain America</h2>
          <h6>Delhi, India</h6>
        </div>

        <!--Navigation-->
        <div class="user-nav">
          <ul>
            <li><a href="{{ route('user.my_flight') }}"><i class="fa fa-plane"></i> My Flight</a></li>
            <li><a href="{{ route('user.my_hotel') }}"><i class="fa fa-bed"></i> My Hotel</a></li>
            <li><a href="{{ route('user.my_holidays') }}"><i class="fa fa-briefcase"></i> My Holidays</a></li>
            <li class="current"><a href="{{ route('user.my_bus') }}"><i class="fa fa-bus"></i> My Bus</a></li>
            <li><a href="{{ route('user.my_cab') }}"><i class="fa fa-taxi"></i> My Cab</a></li>
            <li><a href="{{ route('user.wallet') }}"><i class="fa fa-google-wallet"></i> My Wallet</a></li>
            <li><a href="{{ route('user.my_profile') }}"><i class="fa fa-user"></i> My Profile</a></li>
            <li>
              <form action="{{route('logout')}}" method="post">
                @csrf
                <button type="submit"><i class="fa fa-sign-out"></i> Logout</button>
              </form>
            </li>
          </ul>
        </div>
      </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">

      <div class="bflight-bg">

        <h2>Holidays Information</h2>

        <div class="row fd">

          <div class="col-sm-12 col-md-12 col-lg-12">

            <div class="id">Holiday ID : 620018770890619275</div>

          </div>

          <div class="col-sm-8 col-md-8 col-lg-8">

            <h3>2 Nights Kuala Lumpur & 3 Nights Bali</h3>

          </div>

          <div class="col-sm-4 col-md-4 col-lg-4">

            <span>Trip Date: 05-14-2019</span>

          </div>

        </div>



        <div class="row fi">

          <div class="col-sm-6 col-md-3 col-lg-3 text-left">

            <span>5 Nights 6 Days </span>

          </div>

          <div class="col-sm-6 col-md-5 col-lg-5 text-left">

            <span>2N Kuala Lumpur - 3N Bali </span>

          </div>

          <div class="col-sm-12 col-md-4 col-lg-4 text-left">

            <span>Room 1: 2 Adults</span>

          </div>

        </div>



        <div class="bag">

          <small>

            Cancellation Policy: Full refund if you cancel this booking by 13/May/2019.

          </small>

        </div>

      </div>



      <div class="bflight-bg">

        <h2>Print & Amendment Services</h2>

        <div class="btn-print">

          <a href="hdinvoice.html" target="_blank">Print Invoice</a>

          <a href="#!">Cancel Holiday</a>

        </div>

      </div>



      <div class="bflight-bg">

        <h2>Holiday Details</h2>

        <br />

        <div class="table-responsive">

          <table class="table table-bordered">

            <thead>

              <tr>

                <th>Room</th>

                <th>Adults</th>

                <th>Child</th>

                <th>Infants</th>

                <th>Number</th>

                <th>Cost/Person (INR)</th>

                <th>Net Cost (INR)</th>

              </tr>

            </thead>

            <tbody>

              <tr>

                <td>1</td>

                <td>2</td>

                <td>1</td>

                <td>0</td>

                <td>2</td>

                <td>4000</td>

                <td>8000</td>

              </tr>

              <tr>

                <td>1</td>

                <td>1</td>

                <td>3</td>

                <td>0</td>

                <td>1</td>

                <td>4000</td>

                <td>4000</td>

              </tr>

            </tbody>

          </table>

        </div>

      </div>



      <div class="bflight-bg">

        <h2>Hotel Price Details</h2>

        <br />

        <div class="table-responsive">

          <table class="table table-bordered">

            <tbody>

              <tr>

                <td>

                  Base fare

                  Rs. 4,578

                </td>

                <td>

                  Taxes & fees

                  Rs. 946

                </td>

                <td>

                  Markup

                  Rs. 270

                </td>

                <td>

                  Total

                  Rs. 5,794

                </td>

              </tr>

            </tbody>

          </table>

        </div>

      </div>



      <div class="bflight-bg">

        <h2>Order Price Details</h2>

        <br />

        <div class="row">

          <div class="col-sm-6 col-md-6 col-lg-6">

            <table class="table table-bordered">

              <thead>

                <tr>

                  <th>Price Detail</th>

                  <th>Amount</th>

                </tr>

              </thead>

              <tbody>

                <tr>

                  <td>Base Fare</td>

                  <td>Rs. 4,578</td>

                </tr>

                <tr>

                  <td>Taxes & Fees</td>

                  <td>Rs. 946</td>

                </tr>

                <tr>

                  <td>Customer Prom.</td>

                  <td>sdvdsds</td>

                </tr>

                <tr>

                  <td>Conv. Fee</td>

                  <td>Rs. 270</td>

                </tr>

                <tr>

                  <td>Grand Total</td>

                  <td>Rs. 5,794</td>

                </tr>

              </tbody>

            </table>

          </div>

          <div class="col-sm-6 col-md-6 col-lg-6">

            <table class="table table-bordered">

              <thead>

                <tr>

                  <th>Payment Detail</th>

                  <th>Amount</th>

                </tr>

              </thead>

              <tbody>

                <tr>

                  <td>Coupon</td>

                  <td>Rs. -800</td>

                </tr>

                <tr>

                  <td>PayPrice</td>

                  <td>Rs. 4,994</td>

                </tr>

              </tbody>

            </table>

          </div>

        </div>

      </div>



      <div class="bflight-bg">

        <h2>Contact Detail</h2>

        <br />

        <div class="table-responsive">

          <table class="table table-bordered">

            <tbody>

              <tr>

                <th>

                  Name

                </th>

                <td>

                  Mohammad

                </td>

              </tr>

              <tr>

                <th>

                  Phone

                </th>

                <td>

                  880243724

                </td>

              </tr>

              <tr>

                <th>

                  Email

                </th>

                <td>

                  mohammad@xyz.com

                </td>

              </tr>

            </tbody>

          </table>

        </div>

      </div>



      <div class="bflight-bg">

        <h2>Travel Engine Support</h2>

        <br />

        <div class="table-responsive">

          <table class="table table-bordered">

            <tbody>

              <tr>

                <th>

                  Tel

                </th>

                <td>

                  9873476810, 8800243724

                </td>

              </tr>

              <tr>

                <th>

                  Email

                </th>

                <td>

                  support@yourdomain.com

                </td>

              </tr>

            </tbody>

          </table>

        </div>

      </div>

    </div>

  </div>

</div>
<!--Content end-->

@endsection