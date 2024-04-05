@extends('layouts.front')

@section('content')

<!--Banner start-->
<section class="banner-blog overlay" style=" background: url(img/blog-banner.png) no-repeat; background-size: cover; background-position: center center;">
  <div class="container">
    <h1>Start a career that makes an impact</h1>
    <!--Search Career-->
    <div class="career-search">
      <form>
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for jobs by keyword" aria-label="Recipient's username" aria-describedby="button-addon2" required>
          <select class="form-control vline">
            <option selected="">All locations</option>
            <option value="location1">Chicago, US</option>
            <option value="location2">New York, US</option>
            <option value="location3">Seattle/Kirkland, US</option>
            <option value="location4">Los Angles, US</option>
            <option value="location5">Moscow, Russia</option>
            <option value="location6">Sydney, Australia</option>
            <option value="location7">Birmingham, UK</option>
            <option value="location7">Manchester, UK</option>
            <option value="location8">Beijing, China</option>
          </select>
          <select class="form-control vline">
            <option selected="">All departments</option>
            <option value="department1">Analytics</option>
            <option value="department2">Business Strategy</option>
            <option value="department3">Data Center &amp; Network</option>
            <option value="department4">Developer Relations</option>
            <option value="department5">Engineering</option>
            <option value="department6">Hardware Engineering</option>
            <option value="department7">IT &amp; Data Management</option>
            <option value="department8">Legal &amp; Government Relations</option>
            <option value="department9">Manufacturing &amp; Supply Chain</option>
            <option value="department10">Marketing &amp; Communications</option>
            <option value="department11">Network Engineering</option>
            <option value="department12">Partnerships</option>
            <option value="department13">Web</option>
          </select>
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
          </div>
        </div>
      </form>
    </div>
    <h6>
      Your career can change the financial future of millions of people.
    </h6>
  </div>
</section>
<!--Banner end-->

<!--Content start-->
<div class="container mar30">

  <div class="career-bg">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-8 col-lg-8">
        <!--Item 01-->
        <div class="article-item">
          <a href="{{route('front.careers')}}">
            <h2>Senior PHP software developer</h2>
          </a>
          <p>
            Lorem ipsum dolor sit amet consectetur adipiscing elit, convallis parturient fusce semper eu pulvinar, hendrerit etiam nascetur aliquam placerat tellus.
          </p>

          <div class="postedby">
            <div class="media">
              <img src="img/team/hulk.png" class="mr-2" alt="">
              <div class="media-body">
                <h5 class="mt-2">Location <span>Delhi</span></h5>
                <a href="careers-single.html#applyNow" class="apply-now">Apply now</a>
              </div>
            </div>
          </div>
        </div>

        <!--Item 02-->
        <div class="article-item">
          <a href="{{route('front.careers')}}">
            <h2>Digital Marketing Executive</h2>
          </a>
          <p>
            Lorem ipsum dolor sit amet consectetur adipiscing elit, convallis parturient fusce semper eu pulvinar, hendrerit etiam nascetur aliquam placerat tellus.
          </p>

          <div class="postedby">
            <div class="media">
              <img src="img/team/captain-america.png" class="mr-2" alt="">
              <div class="media-body">
                <h5 class="mt-2">Location <span>India</span></h5>
                <a href="careers-single.html#applyNow" class="apply-now">Apply now</a>
              </div>
            </div>
          </div>
        </div>

        <!--Item 03-->
        <div class="article-item">
          <a href="{{route('front.careers')}}">
            <h2>Engineering Manager - Android Application Infrastructure</h2>
          </a>
          <p>
            Lorem ipsum dolor sit amet consectetur adipiscing elit, convallis parturient fusce semper eu pulvinar, hendrerit etiam nascetur aliquam placerat tellus.
          </p>

          <div class="postedby">
            <div class="media">
              <img src="img/team/iron-man.png" class="mr-2" alt="">
              <div class="media-body">
                <h5 class="mt-2">Location <span>KSA</span></h5>
                <a href="careers-single.html#applyNow" class="apply-now">Apply now</a>
              </div>
            </div>
          </div>
        </div>

        <!--Item 04-->
        <div class="article-item">
          <a href="{{route('front.careers')}}">
            <h2>Account manager - technologies</h2>
          </a>
          <p>
            Lorem ipsum dolor sit amet consectetur adipiscing elit, convallis parturient fusce semper eu pulvinar, hendrerit etiam nascetur aliquam placerat tellus.
          </p>

          <div class="postedby">
            <div class="media">
              <img src="img/team/thor.png" class="mr-2" alt="">
              <div class="media-body">
                <h5 class="mt-2">Location <span>UAE</span></h5>
                <a href="careers-single.html#applyNow" class="apply-now">Apply now</a>
              </div>
            </div>
          </div>
        </div>

        <!--Item 05-->
        <div class="article-item">
          <a href="{{route('front.careers')}}">
            <h2>Recruitment consultant education</h2>
          </a>
          <p>
            Lorem ipsum dolor sit amet consectetur adipiscing elit, convallis parturient fusce semper eu pulvinar, hendrerit etiam nascetur aliquam placerat tellus.
          </p>

          <div class="postedby">
            <div class="media">
              <img src="img/team/hwak-eye.png" class="mr-2" alt="">
              <div class="media-body">
                <h5 class="mt-2">Location <span>USA</span></h5>
                <a href="careers-single.html#applyNow" class="apply-now">Apply now</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-12 col-md-4 col-lg-4">
        <div class="career-intro">
          <h3>The benefits of working at Travel Engine </h4>
            <p>
              Our team strives to help new members reach their unlimited potential every day.
            </p>
            <p>
              At Space, we don't just accept difference—we celebrate it, we support it, and we thrive on it for the benefit of our employees, our products, and our community.
            </p>
        </div>

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