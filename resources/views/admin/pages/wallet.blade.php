@extends('layouts.admin')

@section('title', 'Hybrid Travel - Travel Booking System')

@section('content')

<!--Content start-->
<div class="container mar60">

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
            <li class="current"><a href="wallet.html"><i class="fa fa-google-wallet"></i> My Wallet</a></li>
            <li><a href="setting.html"><i class="fa fa-sliders"></i> Setting</a></li>
            <li><a href="../login.html"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
        </div>
      </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">

      <h1 class="head"><span>Wallet</span></h1>

      <a href="#!" class="btn-add">Withdraw Amount</a>



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

            <small><i class="fa fa-rupee"></i> Withdraw</small>

          </div>

        </div>

        <div class="col-4">

          <div class="balance">

            1000

            <small><i class="fa fa-rupee"></i> Total Earned</small>

          </div>

        </div>

      </div>





      <br />

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

              <td>Debit</td>

              <td><i class="fa fa-plus"></i> 1000</td>

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