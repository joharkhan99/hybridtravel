@extends('layouts.front')

@section('content')

<!--Banner start-->
<section class="banner-blog overlay" style=" background: url('{{('assets/img/blog-banner.png')}}') no-repeat; background-size: cover; background-position: center center;">
  <div class="container">
    <h1>Contact us</h1>

    <h6>
      Get in touch with us by filling out our contact form.
    </h6>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item">Contact Us</li>
      </ol>
    </nav>
  </div>
</section>
<!--Banner end-->

<!--Content start-->
<div class="container mar30">

  <div class="row">
    <div class="col-12 col-sm-12 col-md-8 col-lg-8">

      <div class="contact-form">
        <form>
          <div class="row">
            <div class="col-md-12">
              <h2>Get in touch with us</h2>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="E-mail" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Mobile number" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject" required>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <textarea cols="40" rows="6" class="form-control" placeholder="Message" required></textarea>
              </div>
            </div>
            <div class="col-md-12 text-center">
              <button type="submit" class="btn-block btn btn-dark">Write to us</button>
            </div>
            <div class="col-md-12">
              <div class="data-notes">
                <i class="fa fa-check-circle"></i> Your personal data is safe with us,
              </div>
            </div>
          </div>
        </form>
      </div>

    </div>

    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
      <div class="contact-info">
        <h3><i class="fa fa-phone"></i> Help & support</h4>
          <p>
            We’re here to help with any questions or issues:
            <br>
            <a href="mailto:contact@yourdomain.com">contact@yourdomain.com</a>
          </p>
      </div>

      <div class="contact-info">
        <h3><i class="fa fa-map-marker"></i> Our location</h4>
          <p>
            Shaheen Bagh, Okhla, New Delhi, India.
            <br>
            <a target="_blank" href="https://g.page/ams-web-design-company-in-delhi?share">Show on map</a>
          </p>
      </div>

      <div class="contact-info">
        <h3><i class="fa fa-dollar"></i> Sales department</h4>
          <p>
            We’d love to discuss how we can save you money:
            <br>
            <a href="mailto:sales@yourdomain.com">sales@yourdomain.com</a>
          </p>
      </div>

    </div>
  </div>

</div>
<!--Content end-->

@endsection