@extends('layouts.front')

@section('content')


<!--Banner start-->
<section class="banner-blog overlay" style=" background: url(img/blog-banner.png) no-repeat; background-size: cover; background-position: center center;">
  <div class="container">
    <h1>Timeline</h1>
    <h6>We transform your perception into an excellent website</h6>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item">Timeline</li>
      </ol>
    </nav>
  </div>
</section>
<!--Banner end-->

<!--Content start-->
<div class="container mar30">
  <div class="timeline-start">
    <h2>Best solutions for your business!</h2>
    <p>
      Lorem ipsum dolor sit amet consectetur, adipiscing elit neque a.
    </p>
  </div>
  <div class="timeline">
    <div class="timeline-cont timeline-left">
      <div class="timeline-content">
        <h2>Our services reflect our knowledge</h2>
        <p>
          A team of passinate designers and developers who are unmatched. We are an insight and behaviour driven creative digital agency. A Full package Digital Creative Agency Specializing in: Web
          Design, Mobile APP Design, and Branding.
        </p>
        <ul>
          <li>
            <a href="#!"><i class="fa fa-check-circle-o"></i> Creative Ideas</a>
          </li>
          <li>
            <a href="#!"><i class="fa fa-check-circle-o"></i> Super Responsive for all devices</a>
          </li>
          <li>
            <a href="#!"><i class="fa fa-check-circle-o"></i> Excellent features</a>
          </li>
          <li>
            <a href="#!"><i class="fa fa-check-circle-o"></i> Simple & clean design</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="timeline-cont timeline-right">
      <div class="timeline-content">
        <h2>How to keep your SEO rankings</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipiscing elit nam egestas, litora sed gravida tristique dictum vivamus nostra. Aenean tincidunt hac condimentum montes justo faucibus leo cum, arcu
          natoque dui netus luctus placerat class, vitae tempus dapibus blandit ridiculus pharetra aliquet.
        </p>
        <img src="img/about-04.jpg" alt="" />
      </div>
    </div>

    <div class="timeline-cont timeline-left">
      <div class="timeline-content">
        <h2>Key benefits of my portfolio update</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipiscing elit nam egestas, litora sed gravida tristique dictum vivamus nostra. Aenean tincidunt hac condimentum montes justo faucibus leo cum, arcu
          natoque dui netus luctus placerat class, vitae tempus dapibus blandit ridiculus pharetra aliquet.
        </p>
        <img src="img/about-03.jpg" alt="" />
      </div>
    </div>
    <div class="timeline-cont timeline-right">
      <div class="timeline-content">
        <h2>The best rebrands of the year</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipiscing elit nam egestas, litora sed gravida tristique dictum vivamus nostra. Aenean tincidunt hac condimentum montes justo faucibus leo cum, arcu
          natoque dui netus luctus placerat class, vitae tempus dapibus blandit ridiculus pharetra aliquet.
        </p>
        <img src="img/about-02.jpg" alt="" />
      </div>
    </div>
  </div>

  <div class="timeline-end">
    <h2>Start a new project with us and start adventure together!</h2>
    <a href="contact.html">Let's Discuss</a>
  </div>
</div>
<!--Content end-->

@endsection