@extends('layouts.front')

@section('content')

<!--Content start-->
<div class="container">

  <div class="row">

    <div class="col-sm-12 col-md-10 offset-md-1 col-lg-6 offset-lg-3">

      <div class="login-bg">
        <form action="{{route('login')}}" method="post">
          @csrf
          <h1><span>Login</span></h1>

          @if (session('message'))
          <span>
            {{ session('message') }}
          </span>
          @endif

          @if ($errors->has('email'))
          <span>
            {{$errors->first('email')}}
          </span>
          @endif

          @if ($errors->has('password'))
          <span>
            {{$errors->first('password')}}
          </span>
          @endif

          <div class="login-inp">

            <span>Email or Mobile Number</span>

            <input type="text" placeholder="Email or Mobile Number" name="email" value="{{old('email')}}">

          </div>

          <div class="login-inp">

            <span>Password</span>

            <input type="text" placeholder="minimum 6 characters." name="password" value="{{old('password')}}">

          </div>

          <a href="/forgot" class="forgot">Forgot Password?</a>

          <label class="check">

            Remember Me

            <input type="checkbox" checked="checked">

            <span class="checkmark"></span>

          </label>



          <button type="submit" class="btn-login">Login</button>
        </form>



        <div class="orlogin">

          <span>OR LOGIN WITH</span>

        </div>



        <div class="login-social">

          <div class="row">

            <div class="col-sm-6 col-md-6 col-lg-6">

              <a href="#!" class="lfacebook"><i class="fa fa-facebook"></i> Login with Facebook</a>

            </div>

            <div class="col-sm-6 col-md-6 col-lg-6">
              <form action="{{route('google')}}" method="post">
                @csrf
                <button class="lgoogle w-100">
                  <i class="fa fa-google"></i> Login with Google
                </button>
              </form>
            </div>

          </div>

        </div>



        <div class="orsignup">

          <span>Or</span>

        </div>

        <div class="create-acc">

          <a href="/signup"> Create New Account</a>

        </div>



      </div>

    </div>

  </div>

</div>
<!--Content end-->

@endsection