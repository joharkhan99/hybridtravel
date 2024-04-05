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
            <li><a href="{{ route('agent.booking') }}"><i class="fa fa-plane"></i> My Booking</a></li>
            <li class="current"><a href="{{ route('agent.markup') }}"><i class="fa fa-edit"></i> Markup</a></li>
            <li><a href="{{ route('agent.report') }}"><i class="fa fa-file-excel-o"></i> Report</a></li>
            <li><a href="{{ route('agent.wallet') }}"><i class="fa fa-google-wallet"></i> My Wallet</a></li>
            <li><a href="{{ route('agent.staff') }}"><i class="fa fa-user"></i> Staff</a></li>
            <li><a href="{{ route('agent.setting') }}"><i class="fa fa-sliders"></i> Setting</a></li>
            <li>
              <form action="{{route('logout')}}" method="post">
                @csrf
                <button type="submit"><i class="fa fa-sign-out"></i> Logout</button>
              </form>
            </li>
          </ul>
        </div>
      </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">

      <h1 class="head"><span>My Booking</span></h1>

      <div class="refill">

        <div class="input-group">

          <select class="form-control">

            <option value="FLIGHTSALES">Flight </option>

            <option value="HOTELSALES">Hotel </option>

          </select>

          <select class="form-control">

            <option value="Upcoming">All </option>

            <option value="Upcoming">Upcoming </option>

            <option value="Upcoming">Hold </option>

            <option value="Completed">Completed </option>

            <option value="Canceled">Canceled </option>

          </select>

          <input type="text" placeholder="From" class="form-control datepicker-here" data-language="en" />

          <input type="text" placeholder="To" class="form-control datepicker-here" data-language="en" />

          <div class="input-group-prepend">

            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>

          </div>

        </div>

      </div>



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

              <td>

                <a href="flight-details.html" class="edit" title="View Details"><i class="fa fa-eye"></i></a>

                <a href="#!" class="delete" title="Cancel"><i class="fa fa-close"></i></a>

              </td>

            </tr>

            <tr>

              <td>36823489</td>

              <td>IXR <i class="fa fa-long-arrow-right"></i> BOM</td>

              <td>Mohammad Azad</td>

              <td>05-13-2019</td>

              <td>05-13-2019</td>

              <td>Cancel</td>

              <td>

                <a href="flight-details.html" class="edit" title="View Details"><i class="fa fa-eye"></i></a>

                <a href="#!" class="delete" title="Cancel"><i class="fa fa-close"></i></a>

              </td>

            </tr>

            <tr>

              <td>36823489</td>

              <td>IXR <i class="fa fa-long-arrow-right"></i> BOM</td>

              <td>Mohammad Azad</td>

              <td>05-13-2019</td>

              <td>05-13-2019</td>

              <td>Hold</td>

              <td>

                <a href="flight-details.html" class="edit" title="View Details"><i class="fa fa-eye"></i></a>

                <a href="#!" class="delete" title="Cancel"><i class="fa fa-close"></i></a>

              </td>

            </tr>

            <tr>

              <td>36823489</td>

              <td>IXR <i class="fa fa-long-arrow-right"></i> BOM</td>

              <td>Mohammad Azad</td>

              <td>05-13-2019</td>

              <td>05-13-2019</td>

              <td>Completed</td>

              <td>

                <a href="flight-details.html" class="edit" title="View Details"><i class="fa fa-eye"></i></a>

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