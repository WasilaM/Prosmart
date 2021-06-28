@extends('base.baseUser')

@section('content')
  <section class="page-title page-title-layout16 text-center bg-overlay bg-overlay-gradient bg-parallax">
    <div class="bg-img"><img src="{{asset('images/films.jpg')}}" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav>
            <ol class="breadcrumb justify-content-center mb-0">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Documantry Films</li>
            </ol>
          </nav>
        </div><!-- /.col-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.page-title -->

  <!-- ======================
  Blog Grid
  ========================= -->
  <section class="blog-grid pt-0 mt-0">
    <div class="container">
      <div class="row">
        <section class="about-layout1 pb-0">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="heading mb-30">
                  <div class="d-flex align-items-center mb-20">
                    <div class="divider divider-primary mr-30"></div>
                    <h2 class="heading__subtitle mb-0">Documantry Films</h2>
                  </div>
                  <h3 class="heading__title mb-40">{{ $film->data['data']['address'][App::getLocale()] }}</h3>
                </div><!-- /heading -->
                <div class="position-relative offset-xl-1 mx-txt">
                  <p class="mb-40">{{ $film->data['data']['description'][App::getLocale()] }}</p>
                  {!! $film->data['data']['importants'][App::getLocale()] !!}
                </div>
              </div><!-- /.col-lg-6 -->
              <div class="col-sm-12 col-md-12 col-lg-5 offset-lg-1">
                <div class="about__img">
                    <img src="{{ asset($film->photo) }}" alt="about">
                </div><!-- /.about-img -->
                <div class="video__btn-wrapper">
                    <a class="video__btn video__btn-white popup-video"
                        href="{{ $film->data['data']['video'][App::getLocale()] }}">
                        <div class="video__player">
                            <i class="fa fa-play"></i>
                        </div>
                        <span class="video__btn-title">Watch Our Presentation!</span>
                    </a>
                </div>
              </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </section><!-- /.About Layout 1 -->

      </div><!-- /.container -->
    </section><!-- /.blog Grid -->
  @endsection
