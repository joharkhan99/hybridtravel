﻿@extends('layouts.admin')

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

      <h1 class="head"><span>Add Markup</span></h1>

      <a href="markup.html" class="btn-add">View Markup</a>

      <form>

        <div class="row mar30">

          <div class="col-sm-6 col-md-6 col-lg-4">

            <div class="form-group">

              <label>Select Agent</label>

              <select class="form-control">

                <option>Select</option>

                <option>Agent 01</option>

                <option>Agent 02</option>

                <option>Agent 03</option>

              </select>

            </div>

          </div>

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