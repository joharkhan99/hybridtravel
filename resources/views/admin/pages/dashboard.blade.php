@extends('layouts.admin')

@section('title', 'Hybrid Travel - Travel Booking System')

@section('content')

<!--Content start-->
<div class="container mar60">
  <h1>
    ADMIN:
    {{Auth::user()->name}}
  </h1>

  <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">

      <div class="user-profile-bg">
        <!--User info-->
        <div class="user-profile-info">
          <img src="../img/team/funky.png" alt="" />
          <h2>Fury</h2>
          <h6>Delhi, India</h6>
        </div>

        <!--Navigation-->
        <div class="user-nav">
          <ul>
            <li><a href="agent.html"><i class="fa fa-plane"></i> My Agent</a></li>
            <li><a href="markup.html"><i class="fa fa-edit"></i> Markup</a></li>
            <li><a href="report.html"><i class="fa fa-file-excel-o"></i> Report</a></li>
            <li><a href="wallet.html"><i class="fa fa-google-wallet"></i> My Wallet</a></li>
            <li><a href="setting.html"><i class="fa fa-sliders"></i> Setting</a></li>
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
            <a href="agent.html" class="dashboard-item">
              <i class="fa fa-plane"></i>
              <h3>My Agent</h3>
              <h6>Manage & access the history of your agent</h6>
            </a>
          </div>
          <!--Item 02-->
          <div class="col-12 col-sm-6 col-md-4 col-lg-4">
            <a href="markup.html" class="dashboard-item">
              <i class="fa fa-edit"></i>
              <h3>Markup</h3>
              <h6>Manage & Add the markup in items</h6>
            </a>
          </div>
          <!--Item 03-->
          <div class="col-12 col-sm-6 col-md-4 col-lg-4">
            <a href="report.html" class="dashboard-item">
              <i class="fa fa-user"></i>
              <h3>Report</h3>
              <h6>Download the exel report on the basis of date</h6>
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
            <a href="setting.html" class="dashboard-item">
              <i class="fa fa-info"></i>
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