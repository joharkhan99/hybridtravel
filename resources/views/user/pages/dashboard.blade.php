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
          <img src="../img/team/captain-america.png" alt="">
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
            <li><a href="wallet.html"><i class="fa fa-google-wallet"></i> My Wallet</a></li>
            <li><a href="my-profile.html"><i class="fa fa-user"></i> My Profile</a></li>
            <li><a href="../login.html"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
        </div>
      </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">

      <form action="{{route('logout')}}" method="post">
        @csrf
        <button type="submit" class="btn btn-primary">Logout</button>
      </form>

      <h1 class="dashboard-title"><span>Your account <small>Manage your account and settings here.</small></span></h1>

      <div class="dasboard-content-bg">
        <div class="row">
          <!--Item 01-->
          <div class="col-12 col-sm-6 col-md-4 col-lg-4">
            <a href="my-flight.html" class="dashboard-item">
              <i class="fa fa-plane"></i>
              <h3>Flight</h3>
              <h6>Manage & access the history of your flights</h6>
            </a>
          </div>
          <!--Item 02-->
          <div class="col-12 col-sm-6 col-md-4 col-lg-4">
            <a href="my-hotel.html" class="dashboard-item">
              <i class="fa fa-bed"></i>
              <h3>Hotels</h3>
              <h6>Manage & access the history of your hotels</h6>
            </a>
          </div>
          <!--Item 03-->
          <div class="col-12 col-sm-6 col-md-4 col-lg-4">
            <a href="my-holidays.html" class="dashboard-item">
              <i class="fa fa-briefcase"></i>
              <h3>Holidays</h3>
              <h6>Manage & access the history of your holidays</h6>
            </a>
          </div>
          <!--Item 04-->
          <div class="col-12 col-sm-6 col-md-4 col-lg-4">
            <a href="wallet.html" class="dashboard-item">
              <i class="fa fa-google-wallet"></i>
              <h3>Payments & wallet</h3>
              <h6>Review payments, wallet, history and add fund</h6>
            </a>
          </div>
          <!--Item 05-->
          <div class="col-12 col-sm-6 col-md-4 col-lg-4">
            <a href="my-profile.html" class="dashboard-item">
              <i class="fa fa-user"></i>
              <h3>Personal info</h3>
              <h6>Provide personal details and how we can reach you</h6>
            </a>
          </div>
          <!--Item 06-->
          <div class="col-12 col-sm-6 col-md-4 col-lg-4">
            <a href="change-password.html" class="dashboard-item">
              <i class="fa fa-shield"></i>
              <h3>Login & security</h3>
              <h6>Update your password and secure your account</h6>
            </a>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>
<!--Content end-->

@endsection