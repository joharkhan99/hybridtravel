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

      <h1 class="head"><span>Agent</span></h1>

      <a href="add-agent.html" class="btn-add">Add Agent</a>



      <div class="table-responsive mar30">

        <table class="table table-bordered">

          <thead>

            <tr>

              <th>Agent Id</th>

              <th>Name</th>

              <th>Mobile</th>

              <th>Flight Booked</th>

              <th>Hotel Booked</th>

              <th>Status</th>

              <th>Action</th>

            </tr>

          </thead>

          <tbody>

            <tr>

              <td>BTI44903</td>

              <td>Mohammad Azad</td>

              <td>880243724</td>

              <td>10</td>

              <td>204</td>

              <td>Active</td>

              <td>

                <a href="add-agent.html" class="edit" title="View Details"><i class="fa fa-eye"></i></a>

                <a href="#!" class="print" title="Block User"><i class="fa fa-stop"></i></a>

                <a href="#!" class="delete" title="Delete"><i class="fa fa-trash"></i></a>

              </td>

            </tr>

            <tr>

              <td>BTI44904</td>

              <td>Mohammad</td>

              <td>880243724</td>

              <td>70</td>

              <td>24</td>

              <td>Block</td>

              <td>

                <a href="add-agent.html" class="edit" title="View Details"><i class="fa fa-eye"></i></a>

                <a href="#!" class="print" title="Block User"><i class="fa fa-stop"></i></a>

                <a href="#!" class="delete" title="Delete"><i class="fa fa-trash"></i></a>

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