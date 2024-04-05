@extends('layouts.agent')

@section('title', 'Hybrid Travel - Travel Booking System')

@section('content')

<!--Content start-->
<div class="container mar60">

  <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
      <div class="user-profile-bg">
        <!--User info-->
        <div class="user-profile-info">
          <img src="../img/team/iron-man.png" alt="" />
          <h2>Iron Man</h2>
          <h6>Delhi, India</h6>
        </div>

        <!--Navigation-->
        <div class="user-nav">
          <ul>
            <li><a href="{{ route('agent.booking') }}"><i class="fa fa-plane"></i> My Booking</a></li>
            <li class="current"><a href="{{ route('agent.markup') }}"><i class="fa fa-edit"></i> Markup</a></li>
            <li><a href="{{ route('agent.report') }}"><i class="fa fa-file-excel-o"></i> Report</a></li>
            <li><a href="{{ route('agent.wallet') }}"><i class="fa fa-google-wallet"></i> My Wallet</a></li>
            <li><a href="{{ route('agent.staff') }}"><i class="fa fa-user"></i> Staff</a></li>
            <li><a href="{{ route('agent.setting') }}"><i class="fa fa-sliders"></i> Setting</a></li>
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

        <h2>Bus Information</h2>

        <div class="row fd">

          <div class="col-sm-12 col-md-12 col-lg-12">

            <div class="id">Trip ID : 620018770890619275</div>

          </div>

          <div class="col-sm-4 col-md-4 col-lg-3">

            <span>zingbus</span>

            <small>6E787</small>

          </div>

          <div class="col-sm-8 col-md-8 col-lg-9">

            <h3>Delhi <i class="fa fa-long-arrow-right"></i> Kanpur <small>Sun, 03 Mar 2019</small></h3>

          </div>

        </div>



        <div class="row fi">

          <div class="col-sm-3 col-md-3 col-lg-3">

            <span>Delhi 16:45</span>

            <span>Sun, 03 Mar 2019</span>

            <small>

              Delhi - Dhaula Kaun Bus Stop (Infront of DSOI office)

            </small>

          </div>

          <div class="col-sm-3 col-md-3 col-lg-3">

            <i class="fa fa-bus"></i>

            <span>Kanpur 19:30</span>

            <span>Sun, 03 Mar 2019</span>

            <small>

              Kanpur Bypass Naubasta Chauraha Starting of Flyover

            </small>

          </div>

        </div>



        <div class="bag">

          <b><i class="fa fa-briefcase"></i> Baggage information : </b>

          <span>

            30kg/person

          </span>

        </div>

      </div>



      <div class="bflight-bg">

        <h2>Print & Amendment Services</h2>

        <div class="btn-print">

          <a href="bticket.html" target="_blank">Print Ticket</a>

          <a href="binvoice.html" target="_blank">Print Invoice</a>

          <a href="#!">Cancel Flights</a>

        </div>

      </div>



      <div class="bflight-bg">

        <h2>Ticket Details</h2>

        <br />

        <div>Delhi <i class="fa fa-long-arrow-right"></i> Kanpur</div>

        <br />

        <div class="table-responsive">

          <table class="table table-bordered">

            <thead>

              <tr>

                <th>Name</th>

                <th>From/To</th>

                <th>Ticket No.</th>

                <th>Seat No.</th>

                <th>Status</th>

              </tr>

            </thead>

            <tbody>

              <tr>

                <td>RAHUL/RANJAN (Adult)</td>

                <td>Delhi <i class="fa fa-long-arrow-right"></i> Kanpur</td>

                <td>LCMD4S</td>

                <td>73</td>

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

                  Rs. 2,814

                </td>

                <td>

                  Taxes & fees

                  Rs. 154

                </td>

                <td>

                  Markup

                  Rs. 270

                </td>

                <td>

                  Total

                  Rs. 3238

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

                  <td>Rs. 3,084</td>

                </tr>

                <tr>

                  <td>Taxes & Fees</td>

                  <td>Rs. 154</td>

                </tr>

                <tr>

                  <td>Customer Prom.</td>

                  <td>sdvdsds</td>

                </tr>

                <tr>

                  <td>Conv. Fee</td>

                  <td>Rs. 0</td>

                </tr>

                <tr>

                  <td>Grand Total</td>

                  <td>Rs. 3,238</td>

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

                  <td>Rs. -238</td>

                </tr>

                <tr>

                  <td>PayPrice</td>

                  <td>Rs. 3,000</td>

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