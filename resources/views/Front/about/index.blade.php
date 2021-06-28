@extends('base.baseUser')

@section('content')
    <section class="page-title page-title-layout16 text-center bg-overlay bg-overlay-gradient bg-parallax pb-0 mb-0">
        <div class="bg-img"><img src="{{ $about->banner_url }}" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav>
                        <ol class="breadcrumb justify-content-start mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About</li>
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
                <section class="about-layout1 pb-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="heading mb-30">
                                    <div class="d-flex align-items-center mb-20">
                                        <div class="divider divider-primary mr-30"></div>
                                        <h2 class="heading__subtitle mb-0">About Us</h2>
                                    </div>
                                    <h3 class="heading__title mb-40">{{ $about->title }}</h3>
                                </div><!-- /heading -->
                                <div class="position-relative offset-xl-1">
                                    <p class="mb-40">{!! strip_tags($about->description, '<br>') !!}</p>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-12 col-md-12 col-lg-5 offset-lg-1">
                                <div class="about__img mb-40">
                                    <img src="{{ asset($about->image_url) }}" alt="about">
                                </div><!-- /.about-img -->
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </section><!-- /.About Layout 1 -->

            </div><!-- /.container -->
    </section><!-- /.blog Grid -->
@endsection
