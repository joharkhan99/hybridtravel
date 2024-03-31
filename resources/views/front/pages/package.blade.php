@extends('layouts.front')

@section('content')

<!--Search start-->
<div class="search-int">

  <div class="container">

    <div class="row">

      <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10 int">

        <div class="text-box">

          <span>Search package</span>

          <input type="text" placeholder="Enter package..." required="">

        </div>

      </div>

      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">

        <button class="btn-search1">Search</button>

      </div>

    </div>

  </div>

</div>
<!--Search start-->

<!--Content start-->
<div class="container">

  <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">

      <div class="filter-head">188 of 188 Package <i class="fa fa-filter"></i></div>

      <div class="filter-side">

        <h3>Price: ₹ 3000 - ₹ 30000</h3>

        <input id="price" type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[150,750]">

        <br><br>

        <h3>

          Packages by Location

        </h3>

        <div class="scrollbar" id="scrollbarstyle">

          <ul class="force-overflow">

            <li class="checkbox"><label><input type="checkbox"> Jammu & Kashmir</label></li>

            <li class="checkbox"><label><input type="checkbox"> Himachal Pradesh</label></li>

            <li class="checkbox"><label><input type="checkbox"> Kerala</label></li>

            <li class="checkbox"><label><input type="checkbox"> Uttarakhand</label></li>

            <li class="checkbox"><label><input type="checkbox"> Himachal</label></li>

          </ul>

        </div>



        <h3>Type of Trip</h3>

        <div class="scrollbar" id="scrollbarstyle">

          <ul class="speed-banking force-overflow">

            <li class="checkbox">

              <label>

                <input type="checkbox">

                Wildlife

              </label>

            </li>

            <li class="checkbox">

              <label>

                <input type="checkbox">

                Honeymoon

              </label>

            </li>

            <li class="checkbox">

              <label>

                <input type="checkbox">

                Luxury

              </label>

            </li>

            <li class="checkbox">

              <label>

                <input type="checkbox">

                Cruise

              </label>

            </li>

            <li class="checkbox">

              <label>

                <input type="checkbox">

                Hot & New

              </label>

            </li>

            <li class="checkbox">

              <label>

                <input type="checkbox">

                Adventure

              </label>

            </li>

            <li class="checkbox">

              <label>

                <input type="checkbox">

                Leisure

              </label>

            </li>

            <li class="checkbox">

              <label>

                <input type="checkbox">

                Hill Station

              </label>

            </li>

            <li class="checkbox">

              <label>

                <input type="checkbox">

                Group Tours

              </label>

            </li>

          </ul>

        </div>

      </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">

      <div class="hotel-bg">

        <div class="row">

          <div class="col-12 col-sm-4 col-md-3 col-lg-3">

            <a href="holidays-details.html">

              <img src="img/t1.png" class="himg" alt="">

            </a>

          </div>

          <div class="col-12 col-sm-8 col-md-6 col-lg-6">

            <h2 class="ht">

              <a href="package-details.html">2 Nights Kuala Lumpur & 3 Nights Bali</a>

            </h2>

            <span class="rate">

              5 Nights 6 Days

            </span>

            <div class="faci">

              <small>Jammu & Kashmir</small><br>

              <small><b>Type of Trip :</b> Road Trip</small>

              <small><b>Start:</b> Kuala Lumpur</small>

              <small><b>End:</b> Bali</small>

            </div>

          </div>

          <div class="col-12 col-sm-12 col-md-3 col-lg-3">

            <div class="price">

              <span>Rs 41,427</span>

              <small style="text-decoration:line-through;">

                Rs 44,427

              </small>

            </div>

            <a href="package-details.html" class="book">View Details</a>

          </div>

        </div>

      </div>



      <div class="hotel-bg">

        <div class="row">

          <div class="col-12 col-sm-4 col-md-3 col-lg-3">

            <a href="holidays-details.html">

              <img src="img/t2.png" class="himg" alt="">

            </a>

          </div>

          <div class="col-12 col-sm-8 col-md-6 col-lg-6">

            <h2 class="ht">

              <a href="package-details.html">2 Nights Kuala Lumpur & 3 Nights Bali</a>

            </h2>

            <span class="rate">

              5 Nights 6 Days

            </span>

            <div class="faci">

              <small>Jammu & Kashmir</small><br>

              <small><b>Type of Trip :</b> Road Trip</small>

              <small><b>Start:</b> Kuala Lumpur</small>

              <small><b>End:</b> Bali</small>

            </div>

          </div>

          <div class="col-12 col-sm-12 col-md-3 col-lg-3">

            <div class="price">

              <span>Rs 41,427</span>

              <small style="text-decoration:line-through;">

                Rs 44,427

              </small>

            </div>

            <a href="package-details.html" class="book">View Details</a>

          </div>

        </div>

      </div>



      <div class="hotel-bg">

        <div class="row">

          <div class="col-12 col-sm-4 col-md-3 col-lg-3">

            <a href="holidays-details.html">

              <img src="img/t3.png" class="himg" alt="">

            </a>

          </div>

          <div class="col-12 col-sm-8 col-md-6 col-lg-6">

            <h2 class="ht">

              <a href="package-details.html">2 Nights Kuala Lumpur & 3 Nights Bali</a>

            </h2>

            <span class="rate">

              5 Nights 6 Days

            </span>

            <div class="faci">

              <small>Jammu & Kashmir</small><br>

              <small><b>Type of Trip :</b> Road Trip</small>

              <small><b>Start:</b> Kuala Lumpur</small>

              <small><b>End:</b> Bali</small>

            </div>

          </div>

          <div class="col-12 col-sm-12 col-md-3 col-lg-3">

            <div class="price">

              <span>Rs 41,427</span>

              <small style="text-decoration:line-through;">

                Rs 44,427

              </small>

            </div>

            <a href="package-details.html" class="book">View Details</a>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>
<!--Content end-->

@endsection