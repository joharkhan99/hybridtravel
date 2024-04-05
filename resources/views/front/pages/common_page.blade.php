@extends('layouts.front')

@section('content')

<!--Content start-->
<div class="container mar60">

  <div class="element-container">

    <div class="row">
      <div class="col-sm-12 col-md-4 col-lg-3">
        <!--Side navigation-->
        <ul class="side-nav">
          <li><a href="{{route('front.about')}}">About Us</a></li>
          <li><a href="{{route('front.faqs')}}">FAQs</a></li>
          <li><a href="{{route('front.careers')}}">Careers</a></li>
          <li><a href="{{route('front.blog')}}">Blog</a></li>
          <li><a href="{{route('front.timeline')}}">Timeline</a></li>
          <li><a href="{{route('front.contact')}}">Contact Us</a></li>
          <li><a href="{{route('front.coming_soon')}}">Coming Soon</a></li>
          <li><a href="{{route('front.maintenance_mode')}}">Maintenance</a></li>
        </ul>

      </div>

      <div class="col-sm-12 col-md-8 col-lg-9">
        <!--Elements start-->
        <div class="coomon-page-bg">
          <h1>Common / single page</h1>

          <img src="img/pic-01.jpg" alt="">

          <p>
            Lorem ipsum dolor sit amet consectetur adipiscing elit tempus libero dictumst, metus quis nisi porta tortor torquent semper est taciti, lobortis viverra feugiat facilisis dapibus neque
            tincidunt ligula nec. Vestibulum etiam varius cubilia platea hac nam cursus posuere habitasse eget, feugiat felis odio sollicitudin sed leo tortor cum facilisis, sapien ac imperdiet eros
            natoque fermentum bibendum suscipit hendrerit. Mattis a eget in molestie pulvinar ut viverra et laoreet penatibus neque, platea sociosqu nam tristique tempus porta ad iaculis mi phasellus
            porttitor, nec cum libero aliquet facilisis bibendum accumsan ligula rutrum curae.
          </p>

          <p>
            Nascetur lectus semper magna dictumst sapien, nec ut non ridiculus, litora commodo cubilia quam. Vestibulum quis metus class consequat at id dictumst sapien faucibus lobortis, euismod
            senectus eu mattis sem mauris eleifend risus eget, ad imperdiet vulputate fermentum nec augue morbi aliquet eros. Purus conubia nisi quisque malesuada cursus porta pellentesque lacinia
            vivamus tortor, erat turpis in nec parturient auctor bibendum urna magna. Interdum porta ullamcorper eget suspendisse sociis torquent pellentesque commodo integer mi, netus sociosqu ante
            non vitae lobortis per massa odio natoque, nascetur eu varius consequat rutrum mattis feugiat purus aliquam. Phasellus aptent class lectus nisl sed torquent congue purus, hendrerit
            elementum eget habitant varius facilisis condimentum interdum lacus, vulputate felis aliquam diam vivamus egestas enim. Eget dictum nullam justo pulvinar ullamcorper, vehicula ridiculus
            curabitur integer varius bibendum, cursus magna aptent auctor.
          </p>

        </div>
        <!--Elements start-->
      </div>
    </div>
  </div>
</div>
<!--Content end-->

@endsection