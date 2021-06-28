@extends('base.baseUser')

@section('content')
  <section class="page-title page-title-layout16 text-center bg-overlay bg-overlay-gradient bg-parallax pb-5">
    <div class="bg-img"><img src="{{asset('assetsFront/images/services.jpg')}}" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav>
            <ol class="breadcrumb justify-content-start mb-auto">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
          </nav>
        </div><!-- /.col-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.page-title -->

  <!-- ======================
  Blog Grid
  ========================= -->
  <section class="blog-grid pt-5">
    <div class="container">
      <div class="row">
        <!-- post Item #1 -->
        @foreach ($services as $service)
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="{{asset($service->image_url)}}">
                  <img src="{{asset($service->image_url)}}" alt="post image">
                </a>
              </div><!-- /.post-img -->
              <div class="post__content">
                <h4 class="post__title"><a>{{ $service->title }}</a>
                </h4>
                <a href="{{route('front.service.show', $service->slug)}}" class="btn btn__secondary btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.post-content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
        @endforeach
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.blog Grid -->
@endsection
