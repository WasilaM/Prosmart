<footer class="footer pt-50">
  <div class="footer-primary">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-3 footer-widget footer-widget-about">
          <div class="footer-widget__content">
            <img src="{{asset('assetsFront/images/logo/logo.png')}}" style="max-height : 80px !important" alt="logo" class="mb-30">
          </div><!-- /.footer-widget__content -->
        </div><!-- /.col-xl-3 -->
        <div class="col-sm-6 col-md-4 col-lg-2 footer-widget footer-widget-nav">
          <h6 class="footer-widget__title">{{__('Site Map')}}</h6>
          <div class="footer-widget__content">
            <nav>
              <ul class="list-unstyled">
                <li><a href="{{ route('home') }}">{{__('Home')}}</a></li>
                <li><a href="{{route('front.about.index')}}">{{__('About Us')}}</a></li>
                <li><a href="{{route('front.service.index')}}">{{__('IT Solutions')}}</a></li>
                <li><a href={{route('front.contact.index')}}">{{__('Contact')}}</a></li>
              </ul>
            </nav>
          </div><!-- /.footer-widget__content -->
        </div><!-- /.col-lg-2 -->
        <div class="col-sm-6 col-md-4 col-lg-2 footer-widget footer-widget-nav">
          <h6 class="footer-widget__title">{{__('IT Solutions')}}</h6>
          <div class="footer-widget__content">
            <nav>
              <ul class="list-unstyled">
                @foreach ($services as $service)
                    <li><a href="{{route('front.service.show', $service->slug)}}">{{ $service->title }}</a></li>
                @endforeach
              </ul>
            </nav>
          </div><!-- /.footer-widget__content -->
        </div><!-- /.col-lg-2 -->
        <div class="col-md-4 col-sm-4 col-lg-5">
            <div class="widget w-100">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d220836.5730555395!2d31.746819000000002!3d30.135074000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1457f0bcec3249d1%3A0x1fc53fbd73e2c4ac!2z2YXYr9mK2YbYqSDYqNiv2LHYjCDZhdit2KfZgdi42Kkg2KfZhNmC2KfZh9ix2KnigKw!5e0!3m2!1sar!2seg!4v1620653342155!5m2!1sar!2seg" width="100%" height="175" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
      </div><!-- /.row -->
    </div><!-- /.container -->
  </div><!-- /.footer-primary -->
  <div class="footer-secondary" style="max-height: 5px !important">
    <div class="container">
      <div class="row align-items-center mb-10">
        <div class="col-sm-12 col-md-5 col-lg-5">
          <div class="footer__copyrights">
            <span class="fz-14">&copy; 2021 Prosmart, All Rights Reserved.</span>
          </div>
        </div><!-- /.col-lg-6 -->
        <div class="col-sm-12 col-md-2 col-lg-2 text-center">
          <button id="scrollTopBtn" class="my-2"><i class="icon-arrow-up-2"></i></button>
        </div><!-- /.col-lg-2 -->
        <div class="col-sm-12 col-md-5 col-lg-5 d-flex flex-wrap justify-content-end align-items-center">
          <ul class="social-icons list-unstyled mb-0 mr-30">
            <li><a href="{{asset($data['data']['facebook'])}}"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="{{asset($data['data']['youtube'])}}"><i class="fab fa-youtube"></i></a></li>
            <li><a href="{{asset($data['data']['twitter'])}}"><i class="fab fa-twitter"></i></a></li>
            <li><a href="{{asset($data['data']['linkedin'])}}"><i class="fab fa-linkedin"></i></a></li>
          </ul><!-- /.social-icons -->
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </div><!-- /.footer-secondary -->
</footer><!-- /.Footer -->
