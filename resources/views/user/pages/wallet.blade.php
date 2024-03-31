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
            <li><a href="my-flight.html"><i class="fa fa-plane"></i> My Flight</a></li>
            <li><a href="my-hotel.html"><i class="fa fa-bed"></i> My Hotel</a></li>
            <li><a href="my-holidays.html"><i class="fa fa-briefcase"></i> My Holidays</a></li>
            <li><a href="my-bus.html"><i class="fa fa-bus"></i> My Bus</a></li>
            <li><a href="my-cab.html"><i class="fa fa-taxi"></i> My Cab</a></li>
            <li class="current"><a href="wallet.html"><i class="fa fa-google-wallet"></i> My Wallet</a></li>
            <li><a href="my-profile.html"><i class="fa fa-user"></i> My Profile</a></li>
            <li><a href="../login.html"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
        </div>
      </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">

      <h1 class="head"><span>Wallet</span></h1>


      <div class="row">

        <div class="col-4">

          <div class="balance">

            1000

            <small><i class="fa fa-rupee"></i> Balance</small>

          </div>

        </div>

        <div class="col-4">

          <div class="balance">

            1000

            <small><i class="fa fa-rupee"></i> Earned</small>

          </div>

        </div>

        <div class="col-4">

          <div class="balance">

            1000

            <small><i class="fa fa-rupee"></i> Refilled</small>

          </div>

        </div>

      </div>



      <br />
      <!--Refill wallet-->
      <div class="refill">

        Refill your wallet

        <div class="input-group">

          <input type="text" placeholder="Deposit amount" class="form-control">

          <select class="form-control">

            <option>Razorpay</option>

            <option>PayU Biz</option>

          </select>

          <div class="input-group-prepend">

            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Submit</button>

          </div>

        </div>

      </div>



      <br />
      <!--Transaction-->
      <h2 class="head2"><span>Transaction Details</span></h2>

      <div class="table-responsive">

        <table class="table table-bordered">

          <thead>

            <tr>

              <th>Transaction Id</th>

              <th>Transaction Type</th>

              <th>Amount</th>

              <th>Date</th>

            </tr>

          </thead>

          <tbody>

            <tr>

              <td>36823489</td>

              <td>Refill</td>

              <td><i style=" color: #4CAF50; " class="fa fa-plus"></i> 1000</td>

              <td>05-13-2019</td>

            </tr>

            <tr>

              <td>36823489</td>

              <td>Debit</td>

              <td><i style=" color: #ed1d24; font-size: 12px; " class="fa fa-minus"></i> 1000</td>

              <td>05-13-2019</td>

            </tr>

          </tbody>

        </table>

      </div>

    </div>

  </div>

</div>
<!--Content end-->

@endsection