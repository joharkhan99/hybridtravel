@extends('layouts.front')


@section('content')

<!--Banner start-->
<section class="banner-blog overlay" style=" background: url('{{('assets/img/blog-banner.png')}}') no-repeat; background-size: cover; background-position: center center;">
  <div class="container">
    <h1>Your One Stop Solution For Development Needs</h1>
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

      <div class="slide-bg">

        <img src="{{URL::asset('assets/img/banner..jpg')}}" alt="">

      </div>
      <div class="post-info">
        <small><i class="fa fa-user"></i> By Admin</small>

        <small><i class="fa fa-calendar"></i> 05-08-2019 | 17:54</small>

        <small><i class="fa fa-comments"></i> 06 Comments</small>

      </div>



      <div class="para">
        <blockquote class="blockquote" cite="#">
          <h5 class="mb-2 "> Good design is like a refrigerator - when it works, no one notices, but when it doesn’t, it sure stinks.</h5>
          <cite>–Irene Au</cite>
        </blockquote>

        <p>
          Lorem ipsum dolor sit amet consectetur adipiscing elit, tempor justo lectus dictumst malesuada dictum nunc, tortor consequat quisque enim est commodo. Venenatis tincidunt accumsan commodo
          egestas molestie integer, dui penatibus risus aenean duis fames, a curae nisl sapien felis. Fames tincidunt blandit aliquet neque tempus lacinia fermentum nisi per, vivamus porta tortor
          habitant at fusce lacus erat, congue sed eget bibendum mollis ut sociis parturient. Torquent sollicitudin curabitur semper dictum eget erat volutpat potenti himenaeos mus, at congue commodo
          etiam sodales parturient dictumst primis aliquet convallis, ridiculus cum netus mollis odio hac conubia class sagittis. Eros morbi fusce orci habitasse parturient ante hendrerit dictum,
          sollicitudin facilisis maecenas vulputate massa curae volutpat, mi sociosqu dignissim semper quam gravida penatibus.
        </p>
        <p>
          Litora eleifend vivamus et ut vulputate class malesuada aptent imperdiet ornare cursus, mattis ridiculus nisi at non nostra euismod arcu sodales. Per proin consequat cum taciti interdum ad
          fames eleifend malesuada, commodo leo potenti maecenas cursus urna porta. Mattis aptent congue aliquet diam mi vulputate commodo himenaeos, aenean enim ut quam torquent justo semper varius,
          ridiculus tortor platea orci lacinia quisque suscipit. Nostra sodales congue eu hendrerit malesuada aliquet gravida pretium sed suscipit, primis torquent platea nisl eleifend dapibus natoque
          placerat magnis, sapien rhoncus velit habitasse vehicula sociosqu libero nulla conubia. Duis vivamus per morbi fames ullamcorper rutrum neque non massa purus laoreet porttitor hendrerit in
          ante nostra, nascetur vulputate dignissim facilisi placerat sodales sociis vel sem himenaeos mus nisl quam pulvinar. Quam vitae ac risus malesuada vestibulum, massa senectus vivamus purus
          elementum, sodales sollicitudin viverra nam. Luctus nunc dis feugiat mi ad ac est lobortis vehicula rhoncus, libero dictum pulvinar viverra neque aptent natoque etiam habitant senectus
          integer, turpis pretium leo fermentum ornare tempus vel non dictumst.

        </p>
        <p>
          Magnis sociis ut sociosqu sodales rhoncus praesent arcu hendrerit feugiat litora dis molestie, cras euismod proin potenti himenaeos interdum turpis per dui inceptos cum, parturient justo
          conubia bibendum tortor condimentum malesuada elementum dapibus felis vehicula. Potenti non luctus litora malesuada cum id bibendum dis accumsan libero cras elementum lectus, pretium purus
          mauris neque magnis odio sagittis ligula ac vivamus himenaeos gravida, sociis aliquet arcu hac penatibus cursus varius vestibulum auctor dictum conubia at.
        </p>
        <p>
          Sagittis blandit ornare aenean iaculis ridiculus magna, aliquet non nibh mattis accumsan fermentum augue, nunc lobortis vehicula est ligula. Et aliquet nulla euismod mauris nisl neque
          sollicitudin hendrerit volutpat, malesuada cubilia turpis netus auctor justo aenean dapibus felis vel, posuere ultricies sed dignissim fusce fermentum venenatis potenti. Odio quisque
          imperdiet nisi suspendisse vel fringilla cursus aliquet, montes condimentum sodales diam feugiat viverra platea, venenatis ac commodo cubilia ante sociis massa.
        </p>
        <p>
          Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value
          proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.

        </p>

        <p>

          Encyclopaedia galactica Orion's sword explorations vanquish the impossible, astonishment radio telescope with pretty stories for which there's little good evidence light years muse about,
          great turbulent clouds billions upon billions the sky calls to us realm of the galaxies laws of physics globular star cluster. Quasar the only home we've ever known extraordi claims require
          extraordinary evidence billions upon billions Drake Equation.

        </p>

        <blockquote class="blockquote" cite="#">
          <h5 class="mb-2 ">Sometimes when you innovate, you make mistakes. It is best to admit them quickly, and get on with improving your other innovations</h5>
          <cite>–Steve Jobs</cite>
        </blockquote>

        <p>

      </div>

      <!--Tags start-->
      <div class="blogTags">
        <div class="row">
          <div class="col-12 col-sm-8 col-md-9 col-lg-9">
            <div class="tag-bg">
              <a href="#">WordPress</a>
              <a href="#">freebies</a>
              <a href="#">updates</a>
              <a href="#">creative</a>
              <a href="#">travel</a>
            </div>
          </div>
          <div class="col-12 col-sm-4 col-md-3 col-lg-3">
            <div class="social-btn">
              <a href="#!"><i class="fa fa-facebook align-self-center" aria-hidden="true"></i></a>
              <a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      </div>
      <!--Tags end-->

      <!--Author start-->
      <div class="blog-author">
        <img src="{{URL::asset('assets/img/team/funky.png')}}" alt="">
        <h3>Posted by <span>Nick Fury</span></h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipiscing elit et donec taciti euismod, hac aliquam gravida eros tempus cras felis torquent nibh diam.
        </p>
      </div>
      <!--Author end-->

      <!--Comments start-->
      <div class="blog-comment">
        <h3>There are 3 comments</h3>
        <div class="media">
          <img src="{{URL::asset('assets/img/team/captain-america.png')}}" class="mr-3" alt="">
          <div class="media-body">
            <h5 class="mt-0">
              Captain America
              <small>November 19, 2020 at 4:39 pm</small>
            </h5>

            <a href="#reply" class="reply">Reply</a>

            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac
            nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

            <div class="media mt-3">
              <a class="mr-2" href="#">
                <img src="{{URL::asset('assets/img/team/iron-man.png')}}" class="mr-3" alt="">
              </a>
              <div class="media-body">
                <h5 class="mt-0">
                  Iron Man
                  <small>November 19, 2020 at 4:43 pm</small>
                </h5>

                <a href="#reply" class="reply">Reply</a>

                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc
                ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </div>
          </div>
        </div>

        <div class="media">
          <img src="{{URL::asset('assets/img/team/thor.png')}}" class="mr-3" alt="">
          <div class="media-body">
            <h5 class="mt-0">
              Thor
              <small>November 19, 2020 at 4:49 pm</small>
            </h5>

            <a href="#reply" class="reply">Reply</a>

            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac
            nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

          </div>
        </div>
      </div>

      <form class="comment-from" id="reply">
        <h3>
          Leave a Reply
          <small>Your Email address will not be published</small>
        </h3>

        <div class="row">
          <div class="col-12 col-sm-6 col-md-6 col-lg-6">
            <div class="form-group"><input type="text" class="form-control" placeholder="Name" required></div>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-6">
            <div class="form-group"><input type="email" class="form-control" placeholder="Email" required></div>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="form-group"><textarea cols="40" rows="6" class="form-control" placeholder="Message"></textarea></div>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <button class="btn-block btn btn-dark">Post Comment</button>
          </div>
        </div>
      </form>
      <!--Comments end-->

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

              <img src="{{URL::asset('assets/img/img-01.png')}}" alt="">

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

              <img src="{{URL::asset('assets/img/img-02.png')}}" alt="">

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

              <img src="{{URL::asset('assets/img/img-03.png')}}" alt="">

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

<!--Related Article start-->
<section class="related-article-bg">
  <div class="container">
    <h3 class="related-title">Got another minute? Check out:</h3>
    <div class="row">
      <div class="col-12 col-md-4">
        <div class="article-item">
          <span>June 21, 2020</span>
          <a href="{{route('front.blog_details')}}">
            <h2>The Worst Advices We've Heard For Business</h2>
          </a>
          <p>
            Lorem ipsum dolor sit amet consectetur adipiscing elit lacus, nullam vehicula ut diam faucibus vitae.
          </p>

          <div class="postedby">
            <div class="media">
              <img src="{{URL::asset('assets/img/team/hulk.png')}}" class="mr-2" alt="">
              <div class="media-body">
                <h5 class="mt-2"><a href="#">Hulk</a></h5>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4">
        <div class="article-item">
          <span>July 12, 2020</span>
          <a href="{{route('front.blog_details')}}">
            <h2>Your One Stop Solution For Development Needs</h2>
          </a>
          <p>
            Lorem ipsum dolor sit amet consectetur adipiscing elit lacus, nullam vehicula ut diam faucibus vitae.
          </p>

          <div class="postedby">
            <div class="media">
              <img src="{{URL::asset('assets/img/team/hwak-eye.png')}}" class="mr-2" alt="">
              <div class="media-body">
                <h5 class="mt-2"><a href="#">Hwak Eye</a></h5>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4">
        <div class="article-item">
          <span>June 24, 2020</span>
          <a href="{{route('front.blog_details')}}">
            <h2>7 Great Lessons You Can Learn From Business</h2>
          </a>
          <p>
            Lorem ipsum dolor sit amet consectetur adipiscing elit lacus, nullam vehicula ut diam faucibus vitae.
          </p>

          <div class="postedby">
            <div class="media">
              <img src="{{URL::asset('assets/img/team/panther.png')}}" class="mr-2" alt="">
              <div class="media-body">
                <h5 class="mt-2"><a href="#">Black Panther</a></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Related Article end-->

<!--Content end-->

@endsection