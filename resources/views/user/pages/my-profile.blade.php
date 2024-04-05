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
            <li><a href="{{ route('user.my_flight') }}"><i class="fa fa-plane"></i> My Flight</a></li>
            <li><a href="{{ route('user.my_hotel') }}"><i class="fa fa-bed"></i> My Hotel</a></li>
            <li><a href="{{ route('user.my_holidays') }}"><i class="fa fa-briefcase"></i> My Holidays</a></li>
            <li class="current"><a href="{{ route('user.my_bus') }}"><i class="fa fa-bus"></i> My Bus</a></li>
            <li><a href="{{ route('user.my_cab') }}"><i class="fa fa-taxi"></i> My Cab</a></li>
            <li><a href="{{ route('user.wallet') }}"><i class="fa fa-google-wallet"></i> My Wallet</a></li>
            <li><a href="{{ route('user.my_profile') }}"><i class="fa fa-user"></i> My Profile</a></li>
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

      <h1 class="head"><span>Personal info</span></h1>

      <form>

        <div class="row mar30">

          <div class="col-sm-3 col-md-3 col-lg-3">

            <div class="form-group">

              <label>Salutation</label>

              <select class="form-control">

                <option>Mr</option>

                <option>Mrs</option>

                <option>Dr</option>

                <option>Miss</option>

                <option>Ms</option>

                <option>Prof</option>

                <option>Rev</option>

                <option>Other</option>

              </select>

            </div>

          </div>

          <div class="col-sm-9 col-md-9 col-lg-9">

            <div class="form-group">

              <label>Full Name</label>

              <input type="text" class="form-control" />

            </div>

          </div>

          <div class="col-sm-8 col-md-8 col-lg-8">

            <div class="form-group">

              <label>Email Id</label>

              <input type="email" class="form-control" value="iazad@outlook.com" disabled />

            </div>

          </div>

          <div class="col-sm-4 col-md-4 col-lg-4">

            <div class="form-group">

              <label>Mobile No.</label>

              <input type="text" class="form-control" />

            </div>

          </div>

          <div class="col-sm-8 col-md-8 col-lg-8">

            <div class="form-group">

              <label>Company</label>

              <input type="text" class="form-control" />

            </div>

          </div>

          <div class="col-sm-4 col-md-4 col-lg-4">

            <div class="form-group">

              <label>GST Number</label>

              <input type="text" class="form-control" />

            </div>

          </div>

          <div class="col-sm-12 col-md-12 col-lg-12">

            <div class="form-group">

              <label> Address</label>

              <input type="text" class="form-control" />

            </div>

          </div>

          <div class="col-sm-12 col-md-12 col-lg-12">

            <div class="form-group">

              <label> Profile Pic</label>
              <div class="input-group mb-3">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                  <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
              </div>

            </div>

          </div>

          <div class="col-sm-6 col-md-6 col-lg-4">

            <div class="form-group">

              <button type="submit" class="btn-book1">Save</button>

            </div>

          </div>

        </div>

      </form>

    </div>

  </div>

</div>
<!--Content end-->

@endsection