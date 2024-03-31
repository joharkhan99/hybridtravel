@extends('layouts.front')

@section('content')

<!--Content start-->
<div class="container">

  <div class="row">

    <div class="col-sm-12 col-md-10 offset-md-1 col-lg-6 offset-lg-3">

      <div class="login-bg">

        <h1><span>Create New Account</span></h1>

        <div class="login-inp">

          <span>

            Email or Mobile Number <small>This will be your username</small>

          </span>

          <input type="text" placeholder="Email or Mobile Number">

          <small>OTP verification is done when account is created using mobile number</small>

        </div>

        <div class="login-inp">

          <span>Password</span>

          <input type="text" placeholder="minimum 6 characters.">

        </div>



        <button type="submit" class="btn-login">

          Create Account

        </button>



        <div class="orlogin">

          <span>OR CREATE ACCOUNT WITH</span>

        </div>



        <div class="login-social">

          <div class="row">

            <div class="col-sm-6 col-md-6 col-lg-6">

              <a href="#!" class="lfacebook"><i class="fa fa-facebook"></i> Signup with Facebook</a>

            </div>

            <div class="col-sm-6 col-md-6 col-lg-6">

              <a href="#!" class="lgoogle"><i class="fa fa-google"></i> Signup with Google</a>

            </div>

          </div>

        </div>



        <div class="orsignup">

          <span>Or Already a member?</span>

        </div>

        <div class="create-acc">

          <a href="login.html"> Login</a>

        </div>



      </div>

    </div>

  </div>

</div>
<!--Content end-->

@endsection