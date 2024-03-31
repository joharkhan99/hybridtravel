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
            <li><a href="wallet.html"><i class="fa fa-google-wallet"></i> My Wallet</a></li>
            <li><a href="my-profile.html"><i class="fa fa-user"></i> My Profile</a></li>
            <li><a href="../login.html"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
        </div>
      </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">

      <h1 class="head"><span>Change password</span></h1>

      <form>

        <div class="row mar30">

          <div class="col-sm-12 col-md-12 col-lg-8">

            <div class="form-group">
              <label>Current Password</label>
              <input type="text" class="form-control" required />
            </div>

            <div class="form-group">
              <label>New password</label>
              <input type="text" class="form-control" required />
            </div>

            <div class="form-group">
              <label>Confirm password</label>
              <input type="text" class="form-control" required />
            </div>

            <div class="form-group">
              <button type="submit" class="btn-book1">Change paasword</button>
            </div>

          </div>

        </div>

      </form>

    </div>

  </div>

</div>
<!--Content end-->

@endsection