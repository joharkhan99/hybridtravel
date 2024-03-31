@extends('layouts.front')

@section('content')

<!--Content start-->
<div class="container">

  <div class="hheading">

    <div class="row">

      <div class="col-12 col-sm-12 col-md-8 col-lg-9">

        <h1>2 Nights Kuala Lumpur & 3 Nights Bali</h1>

        <h5>2N Kuala Lumpur . 3N Bali</h5>

        <h5>

          Room: 1

          | Adults 1: 2 Child

          |

          <a href="#option1" data-toggle="collapse" title="edit"><i class="fa fa-edit"></i></a>

        </h5>

      </div>

      <div class="col-12 col-sm-12 col-md-4 col-lg-3">

        <span class="hprice">

          Rs. 42,448

        </span>

        <a href="holidays-check-out.html" class="book-bg">Book Now</a>

      </div>

    </div>



  </div>



  <div class="collapse" id="option1">

    <div class="table-responsive">

      <table class="table">

        <thead>

          <tr>

            <td>Room</td>

            <td>Adults</td>

            <td>Child</td>

            <td>Infants</td>

            <td>Number</td>

            <td>Cost/Person (INR)</td>

            <td>Net Cost (INR)</td>

          </tr>

        </thead>

        <tbody>

          <tr>

            <td>

              <div class="input2">

                <input type="number" value="1" disabled>

              </div>

            </td>

            <td>

              <div class="input2">

                <input type="number" value="1">

              </div>

            </td>

            <td>

              <div class="input2">

                <input type="number" value="1">

              </div>

            </td>

            <td>

              <div class="input2">

                <input type="number" value="1">

              </div>

            </td>

            <td>

              <div class="input2">

                <input type="number" value="1" disabled>

              </div>

            </td>

            <td>

              <div class="input2">

                <input type="number" value="40000" disabled>

              </div>

            </td>

            <td>

              <div class="input2">

                <input type="number" value="40000" disabled>

              </div>

            </td>

          </tr>

          <tr>

            <td>

              <div class="input2">

                <input type="number" value="1" disabled>

              </div>

            </td>

            <td>

              <div class="input2">

                <input type="number" value="1">

              </div>

            </td>

            <td>

              <div class="input2">

                <input type="number" value="1">

              </div>

            </td>

            <td>

              <div class="input2">

                <input type="number" value="1">

              </div>

            </td>

            <td>

              <div class="input2">

                <input type="number" value="1" disabled>

              </div>

            </td>

            <td>

              <div class="input2">

                <input type="number" value="40000" disabled>

              </div>

            </td>

            <td>

              <div class="input2">

                <input type="number" value="40000" disabled>

              </div>

            </td>

          </tr>

        </tbody>

      </table>

    </div>

    <a href="#!"><i class="fa fa-plus"></i> Add Room</a>



    <hr>

    <div class="row">

      <div class="col-sm-6 col-md-3 col-lg-3">

        <div class="input1">

          <span>Trip Date</span>

          <input type="text" value="05/07/2019" data-language="en" class="datepicker-here">

        </div>

      </div>

      <div class="col-sm-6 col-md-3 col-lg-3">

        <button type="button" class="btn-book1" style="margin-top:16px;">Update</button>

      </div>

    </div>

    <hr>

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

      </div>

      <div class="col-sm-12 col-md-4 col-lg-3">

        <h4>Included at this price</h4>

        <span class="fac"><i class="fa fa-hotel"></i> Hotels</span>

        <span class="fac"><i class="fa fa-plane"></i> Flight</span>

        <span class="fac"><i class="fa fa-star-o"></i> Activities</span>

        <span class="fac"><i class="fa fa-car"></i> Transfer</span>

        <span class="fac"><i class="fa fa-ticket"></i> Visa</span>

      </div>

    </div>

  </div>



  <div class="hdetails">

    <h2>OVERVIEW</h2>

    <p>

      Enjoy the best of 2 countries - Bali & Kuala Lumpur| Visit Tanah Lot temple at Sunset | Enjoy the mesmerizing view of the skyline atop the Kuala Lumpur Tower| Suitable for honeymooners, families
      & couples

    </p>

  </div>

</div>
<!--Content end-->

@endsection