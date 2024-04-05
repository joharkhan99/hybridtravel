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

      <h1 class="head"><span>Staff</span></h1>

      <a href="add-staff.html" class="btn-add">Add Staff</a>



      <div class="table-responsive mar30">

        <table class="table table-bordered">

          <thead>

            <tr>

              <th>Id</th>

              <th>Name</th>

              <th>Mobile No.</th>

              <th>Email Id</th>

              <th>

                Permission type

              </th>

              <th>Action</th>

            </tr>

          </thead>

          <tbody>

            <tr>

              <td>BTI44903</td>

              <td>Mohammad</td>

              <td>8800243724</td>

              <td>iazad@outlook.com</td>

              <td>Read</td>

              <td>

                <a href="#!" class="edit"><i class="fa fa-edit"></i></a>

                <a href="#!" class="delete"><i class="fa fa-trash"></i></a>

              </td>

            </tr>

            <tr>

              <td>BTI44904</td>

              <td>Azad</td>

              <td>8800243724</td>

              <td>amssoftech@gmail.com</td>

              <td>Write</td>

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