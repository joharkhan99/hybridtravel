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
            <li class="current"><a href="markup.html"><i class="fa fa-edit"></i> Markup</a></li>
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

      <h1 class="head"><span>Add Markup</span></h1>

      <a href="markup.html" class="btn-add">View Markup</a>

      <form>

        <div class="row mar30">

          <div class="col-sm-6 col-md-6 col-lg-4">

            <div class="form-group">

              <label>Select Category</label>

              <select class="form-control">

                <option>Flights Domestic</option>

                <option>Flights International</option>

                <option>Hotels</option>

                <option>Holidays</option>

                <option>Bus</option>

                <option>Cab</option>

              </select>

            </div>

          </div>

          <div class="col-sm-6 col-md-6 col-lg-4">

            <div class="form-group">

              <label>Select Carrier</label>

              <select class="form-control">

                <option>All</option>

                <option>Option 01</option>

                <option>Option 02</option>

                <option>Option 03</option>

                <option>Option 04</option>

                <option>Option 05</option>

              </select>

            </div>

          </div>

          <div class="col-sm-6 col-md-6 col-lg-4">

            <div class="form-group">

              <label>Select Markup Type</label>

              <select class="form-control">

                <option>Fixed</option>

                <option>Percentage</option>

              </select>

            </div>

          </div>

          <div class="col-sm-6 col-md-6 col-lg-4">

            <div class="form-group">

              <label>%BaseFare (Markup)</label>

              <input type="text" class="form-control" />

            </div>

          </div>

          <div class="col-sm-6 col-md-6 col-lg-4">

            <div class="form-group">

              <label>Tax Type</label>

              <select class="form-control">

                <option>%YQ</option>

                <option>%Tax</option>

              </select>

            </div>

          </div>

          <div class="col-sm-6 col-md-6 col-lg-4">

            <div class="form-group">

              <label>Tax %</label>

              <input type="text" class="form-control" />

            </div>

          </div>

          <div class="col-sm-6 col-md-6 col-lg-4">

            <div class="form-group">

              <button type="submit" class="btn-book1">Add Markup</button>

            </div>

          </div>

        </div>

      </form>

    </div>

  </div>

</div>
<!--Content end-->


@endsection