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
            <li><a href="booking.html"><i class="fa fa-plane"></i> My Booking</a></li>
            <li><a href="markup.html"><i class="fa fa-edit"></i> Markup</a></li>
            <li class="current"><a href="report.html"><i class="fa fa-file-excel-o"></i> Report</a></li>
            <li><a href="wallet.html"><i class="fa fa-google-wallet"></i> My Wallet</a></li>
            <li><a href="staff.html"><i class="fa fa-user"></i> Staff</a></li>
            <li><a href="setting.html"><i class="fa fa-sliders"></i> Setting</a></li>
            <li><a href="../login.html"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
        </div>
      </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">

      <h1 class="head"><span>Report</span></h1>



      <div class="refill">

        Daily/Periodic Sales (.xls)

        <div class="input-group">

          <select class="form-control">

            <option value="FLIGHTSALES">Flight Sales </option>

            <option value="FLIGHTCANXREPORT">Flight Cancellation Report </option>

            <option value="HOTELSALES">Hotel Sales </option>

            <option value="HOTELCANXREPORT">Hotel Cancellation Report </option>

          </select>

          <input type="text" placeholder="From" class="form-control datepicker-here" data-language="en" />

          <input type="text" placeholder="To" class="form-control datepicker-here" data-language="en" />

          <div class="input-group-prepend">

            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Get Report</button>

          </div>

        </div>

      </div>



    </div>

  </div>

</div>
<!--Content end-->

@endsection