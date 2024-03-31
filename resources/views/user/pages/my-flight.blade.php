﻿@extends('layouts.user')

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

      <h1 class="head"><span>My Flight</span></h1>

      <br />

      <div class="table-responsive">

        <table class="table table-bordered">

          <thead>

            <tr>

              <th>Trip Id</th>

              <th>Trip</th>

              <th>Name</th>

              <th>Departure Date</th>

              <th>Booked on</th>

              <th>Status</th>

              <th>Action</th>

            </tr>

          </thead>

          <tbody>

            <tr>

              <td>36823489</td>

              <td>IXR <i class="fa fa-long-arrow-right"></i> BOM</td>

              <td>Mohammad Azad</td>

              <td>05-13-2019</td>

              <td>05-13-2019</td>

              <td>Upcoming</td>

              <td style="width:110px;">

                <a href="flight-details.html" class="edit" title="View Details"><i class="fa fa-eye"></i></a>

                <a href="#!" class="print" title="Print ticket"><i class="fa fa-print"></i></a>

                <a href="#!" class="delete" title="Cancel"><i class="fa fa-close"></i></a>

              </td>

            </tr>

            <tr>

              <td>36823489</td>

              <td>IXR <i class="fa fa-long-arrow-right"></i> BOM</td>

              <td>Mohammad Azad</td>

              <td>05-13-2019</td>

              <td>05-13-2019</td>

              <td>Upcoming</td>

              <td style="width:110px;">

                <a href="flight-details.html" class="edit" title="View Details"><i class="fa fa-eye"></i></a>

                <a href="#!" class="print" title="Print ticket"><i class="fa fa-print"></i></a>

                <a href="#!" class="delete" title="Cancel"><i class="fa fa-close"></i></a>

              </td>

            </tr>

          </tbody>

        </table>

      </div>

    </div>

  </div>

</div>
<!--Content end-->

@endsection