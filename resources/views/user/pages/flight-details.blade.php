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
            <li class="current"><a href="my-flight.html"><i class="fa fa-plane"></i> My Flight</a></li>
            <li><a href="my-hotel.html"><i class="fa fa-bed"></i> My Hotel</a></li>
            <li><a href="my-holidays.html"><i class="fa fa-briefcase"></i> My Holidays</a></li>
            <li><a href="my-bus.html"><i class="fa fa-bus"></i> My Bus</a></li>
            <li><a href="my-cab.html"><i class="fa fa-taxi"></i> My Cab</a></li>
            <li><a href="wallet.html"><i class="fa fa-google-wallet"></i> My Wallet</a></li>
            <li><a href="my-profile.html"><i class="fa fa-user"></i> My Profile</a></li>
            <li><a href="../login.html"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
        </div>
      </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">

      <div class="bflight-bg">

        <h2>Flight Information</h2>

        <div class="row fd">

          <div class="col-sm-12 col-md-12 col-lg-12">

            <div class="id">Trip ID : 620018770890619275</div>

          </div>

          <div class="col-sm-4 col-md-4 col-lg-3">

            <span>IndiGo</span>

            <small>6E787</small>

          </div>

          <div class="col-sm-8 col-md-8 col-lg-9">

            <h3>Ranchi <i class="fa fa-long-arrow-right"></i> Mumbai <small>Sun, 03 Mar 2019</small></h3>

          </div>

        </div>



        <div class="row fi">

          <div class="col-sm-3 col-md-3 col-lg-3">

            <span>IXR 16:45</span>

            <span>Sun, 03 Mar 2019</span>

            <small>

              Birsa Munda Airport

            </small>

          </div>

          <div class="col-sm-3 col-md-3 col-lg-3">

            <i class="fa fa-plane"></i>

            <span>BOM 19:30</span>

            <span>Sun, 03 Mar 2019</span>

            <small>

              Chhatrapati Shivaji Int'l Airport

            </small>

          </div>

        </div>



        <div class="bag">

          <b><i class="fa fa-briefcase"></i> Baggage information : </b>

          <span>

            Check-In:15kg/person

          </span>

          <span>

            Cabin:7kg/person

          </span>

        </div>

      </div>



      <div class="bflight-bg">

        <h2>Print & Amendment Services</h2>

        <div class="btn-print">

          <a href="fticket.html" target="_blank">Print Ticket</a>

          <a href="finvoice.html" target="_blank">Print Invoice</a>

          <a href="#!">Cancel Flights</a>

        </div>

      </div>



      <div class="bflight-bg">

        <h2>Ticket Details</h2>

        <br />

        <div>Ranchi → Mumbai</div>

        <br />

        <div class="table-responsive">

          <table class="table table-bordered">

            <thead>

              <tr>

                <th>Name</th>

                <th>Sector</th>

                <th>PNR</th>

                <th>Ticket No.</th>

                <th>Seat No.</th>

                <th>Status</th>

              </tr>

            </thead>

            <tbody>

              <tr>

                <td>RAHUL/RANJAN (Adult)</td>

                <td>IXR→BOM</td>

                <td>LCMD4S</td>

                <td>LCMD4S</td>

                <td>...</td>

                <td>Complete</td>

              </tr>

            </tbody>

          </table>

        </div>

      </div>



      <div class="bflight-bg">

        <h2>Trip Price Details</h2>

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