@extends('layouts.front')

@section('content')

<!--Content start-->
<section class="maintenance-bg">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-6 col-lg-7">
        <div class="maintenance-img">
          <img src="img/maintenance-mode.png" alt="">
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-5">
        <div class="maintenance-text">
          <h1>Planned maintenance in progress</h1>
          <h5>We apologize for the inconvenience but Space is currently undergoing planned maintenance.</h5>

          <!--Progress Bar-->
          <div class="progress">
            <div class="progress-bar wow fadeInLeft" data-wow-duration="3s" data-wow-delay="1s" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"
              style="width: 73%; visibility: visible; animation-duration: 3s; animation-delay: 1s; animation-name: fadeInLeft;"><span class="skill-percent">73%</span>
            </div>
          </div>

          <!--Subscribe-->
          <div class="subscribe-sec">
            <h6>Please subscribe to newsletter to get updates from us.</h6>

            <form class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Email address" aria-label="Recipient's username" aria-describedby="button-addon2" required>
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Notify me!</button>
              </div>
            </form>
          </div>

          <!--Social Media icon-->
          <div class="maintenance-social">
            <a href="#!"><i class="fa fa-facebook"></i></a>
            <a href="#!"><i class="fa fa-twitter"></i></a>
            <a href="#!"><i class="fa fa-linkedin"></i></a>
            <a href="#!"><i class="fa fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Content end-->

@endsection