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

      <h1 class="head"><span>Markup</span></h1>

      <a href="add-markup.html" class="btn-add">Add Markup</a>



      <div class="table-responsive mar30">

        <table class="table table-bordered">

          <thead>

            <tr>

              <th>Markup Id</th>

              <th>Added By</th>

              <th>Carrier</th>

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

              <td>9W</td>

              <td>FlightsDomestic</td>

              <td>100.0</td>

              <td>0.0</td>

              <td>0.0</td>

              <td>0.0</td>

              <td>

                <a href="#!" class="edit"><i class="fa fa-edit"></i></a>

                <a href="#!" class="delete"><i class="fa fa-trash"></i></a>

              </td>

            </tr>

            <tr>

              <td>1235</td>

              <td>BTI44903</td>

              <td>hotelsdomestic</td>

              <td>Hotels</td>

              <td>500.0</td>

              <td>0.0</td>

              <td>0.0</td>

              <td>0.0</td>

              <td>

                <a href="#!" class="edit"><i class="fa fa-edit"></i></a>

                <a href="#!" class="delete"><i class="fa fa-trash"></i></a>

              </td>

            </tr>

            <tr>

              <td>1236</td>

              <td>BTI44903</td>

              <td>G8</td>

              <td>FlightsDomestic</td>

              <td>0.0</td>

              <td>1.0</td>

              <td>0.0</td>

              <td>0.2</td>

              <td>

                <a href="#!" class="edit"><i class="fa fa-edit"></i></a>

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