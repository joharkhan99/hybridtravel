@extends('layouts.front')

@section('content')

<!--Banner start-->
<section class="banner-blog overlay" style=" background: url('{{('assets/img/blog-banner.png')}}') no-repeat; background-size: cover; background-position: center center;">
  <div class="container">
    <h1>Frequntly Asked Questions</h1>
    <div class="faq-search">
      <form>
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search your question..." aria-label="Recipient's username" aria-describedby="button-addon2" required>
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
          </div>
        </div>
      </form>
    </div>
    <h6>We transform your perception into an excellent website</h6>
  </div>
</section>
<!--Banner end-->

<!--Content start-->
<div class="container mar30">

  <div class="faq-bg">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-8 col-lg-8">
        <!--Item 01-->
        <div class="article-item">
          <a href="{{route('front.blog_details')}}">
            <h2>How do I get a receipt for my purchase?</h2>
          </a>
          <p>
            1 article in this collection
          </p>

          <div class="postedby">
            <div class="media">
              <img src="{{URL::asset('assets/img/team/hulk.png')}}" class="mr-2" alt="">
              <div class="media-body">
                <h5 class="mt-2">Written by <span>Hulk</span></h5>
              </div>
            </div>
          </div>
        </div>

        <!--Item 02-->
        <div class="article-item">
          <a href="{{route('front.blog_details')}}">
            <h2>What methods of payments are supported?</h2>
          </a>
          <p>
            1 article in this collection
          </p>

          <div class="postedby">
            <div class="media">
              <img src="{{URL::asset('assets/img/team/captain-america.png')}}" class="mr-2" alt="">
              <div class="media-body">
                <h5 class="mt-2">Written by <span>Captain America</span></h5>
              </div>
            </div>
          </div>
        </div>

        <!--Item 03-->
        <div class="article-item">
          <a href="{{route('front.blog_details')}}">
            <h2>How do I get access to a theme I purchased?</h2>
          </a>
          <p>
            1 article in this collection
          </p>

          <div class="postedby">
            <div class="media">
              <img src="{{URL::asset('assets/img/team/iron-man.png')}}" class="mr-2" alt="">
              <div class="media-body">
                <h5 class="mt-2">Written by <span>Iron Man</span></h5>
              </div>
            </div>
          </div>
        </div>

        <!--Item 04-->
        <div class="article-item">
          <a href="{{route('front.blog_details')}}">
            <h2>How do I get help with the theme I purchased?</h2>
          </a>
          <p>
            1 article in this collection
          </p>

          <div class="postedby">
            <div class="media">
              <img src="{{URL::asset('assets/img/team/thor.png')}}" class="mr-2" alt="">
              <div class="media-body">
                <h5 class="mt-2">Written by <span>Thor</span></h5>
              </div>
            </div>
          </div>
        </div>

        <!--Item 05-->
        <div class="article-item">
          <a href="{{route('front.blog_details')}}">
            <h2>My account</h2>
          </a>
          <p>
            1 article in this collection
          </p>

          <div class="postedby">
            <div class="media">
              <img src="{{URL::asset('assets/img/team/hwak-eye.png')}}" class="mr-2" alt="">
              <div class="media-body">
                <h5 class="mt-2">Written by <span>Hwak Eye</span></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-4 col-lg-4">
        <div class="faqs-support">
          <h3>Have any question? </h4>
            <p>If you need to send us mail regarding job opportunities, please write to us at <a href="mailto:support@yourdomain.com">support@yourdomain.com</a> for more information.</p> or call us <a
              href="tel:+918800243724">@(91) 88-00-24-37-24</a>
        </div>

        <div class="faqs-video">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/mSQrTPvNFwY" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

</div>
<!--Content end-->

@endsection