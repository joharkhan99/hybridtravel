@extends('layouts.front')

@section('content')

<!--Banner start-->
<section class="banner-blog overlay" style=" background: url('{{('assets/img/blog-banner.png')}}') no-repeat; background-size: cover; background-position: center center;">
  <div class="container">
    <h1>Our Blog</h1>
    <h6>We transform your perception into an excellent website</h6>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="/"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item">Blog single</li>
      </ol>
    </nav>
  </div>
</section>
<!--Banner end-->

<!--Content start-->
<div class="container mar30">

  <div class="row">

    <main class="col-sm-12 col-md-12 col-lg-9">

      <!--Blog Item 01-->
      <div class="blog-list">

        <div class="pdate">

          <span>09</span>

          <small>MAR</small>

          <small>2019</small>

        </div>

        <img src="{{URL::asset('assets/img/1.jpg')}}" alt="">

        <h2>Your One Stop Solution For Development Needs</h2>

        <p>

          Monocle ipsum dolor sit amet iconic Nord craftsmanship soft power the highest quality To efficient Zürich AsianotePacific Zürich the best quality of life Melbourne Shinkansen vibrant, St
          Moritz signature pintxos tans Swiss essential airport flat white elegant bulletin charming Gaggenau first-class lovely perfect hub Flat white Ettinger business class Star Moritz boutique
          Gaggenau…

        </p>

        <a href="{{route('front.blog_details')}}">Read more</a>

      </div>

      <!--Blog Item 02-->
      <div class="blog-list">

        <div class="pdate">

          <span>09</span>

          <small>MAR</small>

          <small>2019</small>

        </div>

        <img src="{{URL::asset('assets/img/banner.jpg')}}" alt="">

        <h2>7 Great Lessons You Can Learn From Business</h2>

        <p>

          Monocle ipsum dolor sit amet iconic Nord craftsmanship soft power the highest quality To efficient Zürich AsianotePacific Zürich the best quality of life Melbourne Shinkansen vibrant, St
          Moritz signature pintxos tans Swiss essential airport flat white elegant bulletin charming Gaggenau first-class lovely perfect hub Flat white Ettinger business class Star Moritz boutique
          Gaggenau…

        </p>

        <a href="{{route('front.blog_details')}}">Read more</a>

      </div>

      <!--Pagination-->
      <nav aria-label="...">

        <ul class="pagination pagination-md">

          <li class="page-item active" aria-current="page">

            <span class="page-link">

              1

              <span class="sr-only">(current)</span>

            </span>

          </li>

          <li class="page-item"><a class="page-link" href="{{route('front.blog')}}">2</a></li>

          <li class="page-item"><a class="page-link" href="{{route('front.blog')}}">3</a></li>

        </ul>

      </nav>

    </main>

    <aside class="col-sm-12 col-md-12 col-lg-3">

      <!--Search box-->
      <form class="blog-search">
        <input type="text" placeholder="Search for..." required>
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>

      <hr>

      <!--Recent post start-->
      <div class="recent-post">
        <h2>Latest Post</h2>

        <!--Item 01-->
        <a href="{{route('front.blog_details')}}">

          <div class="row">

            <div class="col-4 col-sm-2 col-md-2 col-lg-4 pr">

              <img src="{{URL::asset('assets/img/img-01.pn')}}" alt="">

            </div>

            <div class="col-8 col-sm-10 col-md-10 col-lg-8 pl">

              <h3>11 Times Old Furniture Gained New Life</h3>

              <span>Mar 05,2017</span>

            </div>

          </div>

        </a>

        <!--Item 02-->
        <a href="{{route('front.blog_details')}}">

          <div class="row">

            <div class="col-4 col-sm-2 col-md-2 col-lg-4 pr">

              <img src="{{URL::asset('assets/img/img-02.pn')}}" alt="">

            </div>

            <div class="col-8 col-sm-10 col-md-10 col-lg-8 pl">

              <h3>11 Times Old Furniture Gained New Life</h3>

              <span>Mar 05,2017</span>

            </div>

          </div>

        </a>

        <!--Item 03-->
        <a href="{{route('front.blog_details')}}">

          <div class="row">

            <div class="col-4 col-sm-2 col-md-2 col-lg-4 pr">

              <img src="{{URL::asset('assets/img/img-03.pn')}}" alt="">

            </div>

            <div class="col-8 col-sm-10 col-md-10 col-lg-8 pl">

              <h3>11 Times Old Furniture Gained New Life</h3>

              <span>Mar 05,2017</span>

            </div>

          </div>

        </a>
      </div>
      <!--Recent post end-->

      <hr>

      <!--Tags start-->
      <div class="tag-bg">
        <h2>Tags</h2>

        <a href="#">studio</a>
        <a href="#">events</a>
        <a href="#">WordPress</a>
        <a href="#">gadgets</a>
        <a href="#">office</a>
        <a href="#">magazine</a>
        <a href="#">freebies</a>
        <a href="#">photograpy</a>
        <a href="#">updates</a>
        <a href="#">creative</a>
        <a href="#">travel</a>
      </div>
      <!--Tags start-->

    </aside>

  </div>

</div>
<!--Content end-->

@endsection