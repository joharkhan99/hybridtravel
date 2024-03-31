@extends('layouts.front')

@section('title', 'Hybrid Travel - Travel Booking System')

@section('content')

<!--Banner start-->
<section class="banner-blog overlay" style=" background: url('{{URL::asset('assets/img/blog-banner.png')}}') no-repeat; background-size: cover; background-position: center center;">
  <div class="container">
    <h1>About Travel Engine</h1>
    <h6>We help people find great products at a reasonable price</h6>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item">About Us</li>
      </ol>
    </nav>
  </div>
</section>
<!--Banner end-->

<!--Content start-->
<!--Intro-->
<section class="about-bg mar30">
  <div class="container">
    <div class="row">

      <div class="col-12 col-md-6 col-lg-6 about-aling">
        <div class="about-intro">
          <h6>We are the Travel Engine!</h6>
          <h2>
            We are a full service <span>Creative agency</span> that makes good ideas come to life.
          </h2>
          <p>
            A team of passinate designers and developers who are unmatched. We are an insight and behaviour driven creative digital agency. A Full package Digital Creative Agency Specializing in: Web
            Design, Mobile APP Design, and Branding.
          </p>
          <ul>
            <li>Creative Ideas </li>
            <li>Super Responsive for all devices</li>
            <li>Excellent features</li>
          </ul>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-6">
        <div class="intro-img">
          <img src="{{URL::asset('assets/img/about-01.jpg')}}" alt="">
        </div>
      </div>

    </div>
  </div>
</section>

<!--Tag Line-->
<section class="about-tag">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-10">
        <h3>
          Our passion for customer excellence is just one reason why we are the market leader. We've always worked very hard to give our customers the best experience in dealing with our company.
        </h3>
      </div>
    </div>
  </div>
</section>

<!--Why Choose Us-->
<section class="why-us">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-10">
        <h3>
          See why people choose us
        </h3>
        <h6>
          We help people find great products at a reasonable price
        </h6>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-4 col-lg-4">
        <div class="why-item">
          <i class="fa fa-user" aria-hidden="true"></i>
          <h2>
            Professional designers
          </h2>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipiscing elit ullamcorper laoreet, litora nibh magnis dictum.
          </p>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 col-lg-4">
        <div class="why-item">
          <i class="fa fa-check-circle" aria-hidden="true"></i>
          <h2>
            Quality control
          </h2>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipiscing elit ullamcorper laoreet, litora nibh magnis dictum.
          </p>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 col-lg-4">
        <div class="why-item">
          <i class="fa fa-clock-o" aria-hidden="true"></i>
          <h2>
            Timely delivery
          </h2>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipiscing elit ullamcorper laoreet, litora nibh magnis dictum.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Team-->
<section class="team-bg">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-10">
        <h3>
          People behind the scenes
        </h3>
        <h6>
          Lorem ipsum dolor sit amet consectetur, adipiscing elit ullamcorper laoreet, litora nibh magnis dictum.
        </h6>
      </div>
    </div>

    <div class="row">
      <!--Member 01-->
      <div class="col-12 col-md-4 col-lg-4">
        <div class="team-item">
          <img src="{{URL::asset('assets/img/team/captain-america.png')}}" alt="">
          <h2>
            Captain America
          </h2>
          <h5>Travel Engine, Co-Founder</h5>
          <div class="team-social">
            <a href="#!"><i class="fa fa-facebook"></i></a>
            <a href="#!"><i class="fa fa-twitter"></i></a>
            <a href="#!"><i class="fa fa-linkedin"></i></a>
            <a href="#!"><i class="fa fa-instagram"></i></a>
          </div>
        </div>
      </div>
      <!--Member 02-->
      <div class="col-12 col-md-4 col-lg-4">
        <div class="team-item">
          <img src="{{URL::asset('assets/img/team/funky.png')}}" alt="">
          <h2>
            Fury
          </h2>
          <h5>Travel Engine, Co-Founder</h5>
          <div class="team-social">
            <a href="#!"><i class="fa fa-facebook"></i></a>
            <a href="#!"><i class="fa fa-twitter"></i></a>
            <a href="#!"><i class="fa fa-linkedin"></i></a>
            <a href="#!"><i class="fa fa-instagram"></i></a>
          </div>
        </div>
      </div>
      <!--Member 03-->
      <div class="col-12 col-md-4 col-lg-4">
        <div class="team-item">
          <img src="{{URL::asset('assets/img/team/iron-man.png')}}" alt="">
          <h2>
            Iron man
          </h2>
          <h5>Travel Engine, CEO</h5>
          <div class="team-social">
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

<!--Clients-->
<section class="client-bg">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-10">
        <h3>
          Some of our happy clients
        </h3>
        <h6>
          Lorem ipsum dolor sit amet consectetur, adipiscing elit ullamcorper laoreet, litora nibh magnis dictum.
        </h6>
      </div>
    </div>

    <div class="row">
      <!--Client logo 01-->
      <div class="col-6 col-sm-4 col-md-2 col-lg-2">
        <img src="{{URL::asset('assets/img/p_01.png')}}" alt="">
      </div>
      <!--Client logo 02-->
      <div class="col-6 col-sm-4 col-md-2 col-lg-2">
        <img src="{{URL::asset('assets/img/p_02.png')}}" alt="">
      </div>
      <!--Client logo 03-->
      <div class="col-6 col-sm-4 col-md-2 col-lg-2">
        <img src="{{URL::asset('assets/img/p_03.png')}}" alt="">
      </div>
      <!--Client logo 04-->
      <div class="col-6 col-sm-4 col-md-2 col-lg-2">
        <img src="{{URL::asset('assets/img/p_04.png')}}" alt="">
      </div>
      <!--Client logo 05-->
      <div class="col-6 col-sm-4 col-md-2 col-lg-2">
        <img src="{{URL::asset('assets/img/p_05.png')}}" alt="">
      </div>
      <!--Client logo 06-->
      <div class="col-6 col-sm-4 col-md-2 col-lg-2">
        <img src="{{URL::asset('assets/img/p_06.png')}}" alt="">
      </div>

    </div>
  </div>
</section>

<!--News-->
<section class="news-bg">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-10">
        <h3>
          Read our news & blogs
        </h3>
        <h6>
          Our duty towards you is to share our experience we're reaching in our work path with you.
        </h6>
      </div>
    </div>

    <div class="row">
      <!--News item 01-->
      <div class="col-12 col-md-6 col-lg-6">
        <div class="news-item">
          <div class="row">
            <div class="col-12 col-sm-7 col-md-12 col-lg-7">
              <div class="news-text">
                <a href="blog-details.html">
                  <h2>
                    How to keep your SEO rankings
                  </h2>
                </a>
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipiscing elit arcu urna.
                </p>
              </div>
            </div>
            <div class="col-12 col-sm-5 col-md-12 col-lg-5">
              <a href="blog-details.html">
                <img src="{{URL::asset('assets/img/about-02.jpg')}}" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
      <!--News item 01-->
      <div class="col-12 col-md-6 col-lg-6">
        <div class="news-item">
          <div class="row">
            <div class="col-12 col-sm-7 col-md-12 col-lg-7">
              <div class="news-text">
                <a href="blog-details.html">
                  <h2>
                    The best rebrands of the year
                  </h2>
                </a>
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipiscing elit arcu urna.
                </p>
              </div>
            </div>
            <div class="col-12 col-sm-5 col-md-12 col-lg-5">
              <a href="blog-details.html">
                <img src="{{URL::asset('assets/img/about-03.jpg')}}" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
      <!--News item 01-->
      <div class="col-12 col-md-6 col-lg-6">
        <div class="news-item">
          <div class="row">
            <div class="col-12 col-sm-7 col-md-12 col-lg-7">
              <div class="news-text">
                <a href="blog-details.html">
                  <h2>
                    Key benefits of my portfolio update
                  </h2>
                </a>
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipiscing elit arcu urna.
                </p>
              </div>
            </div>
            <div class="col-12 col-sm-5 col-md-12 col-lg-5">
              <a href="blog-details.html">
                <img src="{{URL::asset('assets/img/about-04.jpg')}}" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
      <!--News item 01-->
      <div class="col-12 col-md-6 col-lg-6">
        <div class="news-item">
          <div class="row">
            <div class="col-12 col-sm-7 col-md-12 col-lg-7">
              <div class="news-text">
                <a href="blog-details.html">
                  <h2>
                    Reasons to go responsive
                  </h2>
                </a>
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipiscing elit arcu urna.
                </p>
              </div>
            </div>
            <div class="col-12 col-sm-5 col-md-12 col-lg-5">
              <a href="blog-details.html">
                <img src="{{URL::asset('assets/img/about-05.jpg')}}" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!--Content end-->

<!--Testimonials start-->
<section class="testimonial-bg">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-10">
        <h2>
          Testimonials
          </h3>
          <h6>
            Our dear customers said about us
          </h6>
      </div>
    </div>


    <div class="offer slider popular-posts-slider">

      <!--Item 01-->
      <div>
        <div class="testi-con">
          <p>
            <i class="fa fa-quote-left"></i>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, incididunt aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
            <i class="fa fa-quote-right"></i>
          </p>
        </div>
        <div class="triangle-down"></div>
        <div class="testi-con-name">
          <img src="{{URL::asset('assets/img/img.png')}}" alt=""> Mohammad Azad
          <p>
            Web Designer
          </p>
        </div>
      </div>

      <!--Item 02-->
      <div>
        <div class="testi-con">
          <p>
            <i class="fa fa-quote-left"></i>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, incididunt aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
            <i class="fa fa-quote-right"></i>
          </p>
        </div>
        <div class="triangle-down"></div>
        <div class="testi-con-name">
          <img src="{{URL::asset('assets/img/img.png')}}" alt=""> Mohammad
          <p>
            UI Designer
          </p>
        </div>
      </div>

      <!--Item 03-->
      <div>
        <div class="testi-con">
          <p>
            <i class="fa fa-quote-left"></i>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, incididunt aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
            <i class="fa fa-quote-right"></i>
          </p>
        </div>
        <div class="triangle-down"></div>
        <div class="testi-con-name">
          <img src="{{URL::asset('assets/img/img.png')}}" alt=""> Bilal Azad
          <p>
            UX Designer
          </p>
        </div>
      </div>

      <!--Item 04-->
      <div>
        <div class="testi-con">
          <p>
            <i class="fa fa-quote-left"></i>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, incididunt aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
            <i class="fa fa-quote-right"></i>
          </p>
        </div>
        <div class="triangle-down"></div>
        <div class="testi-con-name">
          <img src="{{URL::asset('assets/img/img.png')}}" alt=""> Abu Bilal
          <p>
            Web Developer
          </p>
        </div>
      </div>

      <!--Item 05-->
      <div>
        <div class="testi-con">
          <p>
            <i class="fa fa-quote-left"></i>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, incididunt aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
            <i class="fa fa-quote-right"></i>
          </p>
        </div>
        <div class="triangle-down"></div>
        <div class="testi-con-name">
          <img src="{{URL::asset('assets/img/img.png')}}" alt=""> Yusuf Shams
          <p>
            UI/UX Designer
          </p>
        </div>
      </div>


    </div>
  </div>
</section>
<!--Testimonial end-->

<!--Content end-->

@endsection