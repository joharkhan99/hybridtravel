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
            <li><a href="report.html"><i class="fa fa-file-excel-o"></i> Report</a></li>
            <li><a href="wallet.html"><i class="fa fa-google-wallet"></i> My Wallet</a></li>
            <li><a href="staff.html"><i class="fa fa-user"></i> Staff</a></li>
            <li><a href="setting.html"><i class="fa fa-sliders"></i> Setting</a></li>
            <li><a href="../login.html"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
        </div>
      </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">

      <h1 class="head"><span>Change Password</span></h1>

      <form>

        <div class="row mar30">

          <div class="col-sm-12 col-md-8 col-lg-8">

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