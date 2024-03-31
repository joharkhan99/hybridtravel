@extends('layouts.front')

@section('content')

<!--Content start-->
<div class="container">

  <div class="hheading">

    <div class="row">

      <div class="col-12 col-sm-12 col-md-8 col-lg-9">

        <h1>2 Nights Kuala Lumpur & 3 Nights Bali</h1>

        <h5>5 Nights 6 Days</h5>

        <div class="faci">

          <span><b>Type of Trip :</b> Road Trip</span>

          |

          <span><b>Start:</b> Kuala Lumpur</span>

          |

          <span><b>End:</b> Bali</span>

        </div>

      </div>

      <div class="col-12 col-sm-12 col-md-4 col-lg-3">

        <span class="hprice">

          Rs. 42,448

        </span>

      </div>

    </div>



  </div>

  <div class="slide-bg">

    <div class="row">

      <div class="col-sm-12 col-md-8 col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

          <ol class="carousel-indicators">

            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>

            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

          </ol>

          <div class="carousel-inner">

            <div class="carousel-item active">

              <img src="img/banner.jpg" class="d-block w-100" alt="">

            </div>

            <div class="carousel-item">

              <img src="img/banner.jpg" class="d-block w-100" alt="">

            </div>

            <div class="carousel-item">

              <img src="img/banner.jpg" class="d-block w-100" alt="">

            </div>

          </div>

          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">

            <span class="carousel-control-prev-icon" aria-hidden="true"></span>

            <span class="sr-only">Previous</span>

          </a>

          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">

            <span class="carousel-control-next-icon" aria-hidden="true"></span>

            <span class="sr-only">Next</span>

          </a>

        </div>

        <br>

        <div class="hdetails">

          <h2>OVERVIEW</h2>

          <p>

            Enjoy the best of 2 countries - Bali & Kuala Lumpur| Visit Tanah Lot temple at Sunset | Enjoy the mesmerizing view of the skyline atop the Kuala Lumpur Tower| Suitable for honeymooners,
            families & couples

          </p>

        </div>

      </div>

      <div class="col-sm-12 col-md-4 col-lg-3">

        <h4>Enquiry Now</h4>

        <form>

          <div class="form-group">

            <small>Name</small>

            <input class="form-control" required>

          </div>

          <div class="form-group">

            <small>Email Id</small>

            <input class="form-control" required>

          </div>

          <div class="form-group">

            <small>Mobile No.</small>

            <input class="form-control" required>

          </div>

          <div class="form-group">

            <small>Trip Duration</small>

            <input class="form-control" required>

          </div>

          <div class="form-group">

            <small>Trip Duration</small>

            <textarea class="form-control"></textarea>

          </div>

          <div class="form-group">

            <button type="submit" class="btn-book1">Submit</button>

          </div>

        </form>

      </div>

    </div>

  </div>



</div>
<!--Content end-->

@endsection