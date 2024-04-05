@extends('layouts.admin')

@section('title', 'Hybrid Travel - Travel Booking System')

@section('content')

<!--Content start-->
<div class="container mar30">

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
            <li class="current"><a href="{{ route('admin.agent') }}"><i class="fa fa-plane"></i> My Agent</a></li>
            <li><a href="{{ route('admin.markup') }}"><i class="fa fa-edit"></i> Markup</a></li>
            <li><a href="{{ route('admin.report') }}"><i class="fa fa-file-excel-o"></i> Report</a></li>
            <li><a href="{{ route('admin.wallet') }}"><i class="fa fa-google-wallet"></i> My Wallet</a></li>
            <li><a href="{{ route('admin.setting') }}"><i class="fa fa-sliders"></i> Setting</a></li>
            <li><a href="{{ route('admin.logout') }}"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
        </div>
      </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">

      <h1 class="head"><span>Markup</span></h1>

      <a href="add-markup.html" class="btn-add">Add Markup</a>



      <div class="table-responsive mar30">

        <table class="table table-bordered">

          <thead>

            <tr>

              <th>Markup Id</th>

              <th>Agent Id</th>

              <th>Agent Name</th>

              <th>Service Type</th>

              <th>Flat</th>

              <th>Base Fare</th>

              <th>YQ</th>

              <th>Tax</th>

              <th>Action</th>

            </tr>

          </thead>

          <tbody>

            <tr>

              <td>1234</td>

              <td>BTI44903</td>

              <td>Mohammad Azad</td>

              <td>FlightsDomestic</td>

              <td>100.0</td>

              <td>0.0</td>

              <td>0.0</td>

              <td>0.0</td>

              <td>

                <a href="add-markup.html" class="edit"><i class="fa fa-edit"></i></a>

                <a href="#!" class="delete"><i class="fa fa-trash"></i></a>

              </td>

            </tr>

            <tr>

              <td>1234</td>

              <td>BTI44903</td>

              <td>Mohammad Azad</td>

              <td>FlightsDomestic</td>

              <td>100.0</td>

              <td>0.0</td>

              <td>0.0</td>

              <td>0.0</td>

              <td>

                <a href="add-markup.html" class="edit"><i class="fa fa-edit"></i></a>

                <a href="#!" class="delete"><i class="fa fa-trash"></i></a>

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