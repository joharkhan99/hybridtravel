@extends('layouts.front')

@section('content')

<!--Content start-->
<div class="container">

  <div class="row">

    <div class="col-sm-12 col-md-10 offset-md-1 col-lg-6 offset-lg-3">

      <div class="login-bg">

        <h1><span>Forgot Password?</span></h1>

        <p>

          Enter your email address to get your password. You may need to check your spam folder or unblock

          no-reply@yourdomain.com.

        </p>

        <div class="login-inp">

          <span>Email ID</span>

          <input type="text" placeholder="Enter register email id">

        </div>



        <button type="submit" class="btn-login">Forgot</button>





        <div class="orsignup">

          <span>Or</span>

        </div>

        <div class="create-acc">

          <a href="/login"> Login</a>

        </div>



      </div>

    </div>

  </div>

</div>
<!--Content end-->

@endsection