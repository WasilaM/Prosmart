@extends('base.baseUser')

@section('content')
    <section class="page-title page-title-layout16 text-center bg-overlay bg-overlay-gradient bg-parallax">
        <div class="bg-img"><img src="{{ asset($service->banner_url) }}" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav>
                        <ol class="breadcrumb justify-content-start mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('front.service.index') }}"> IT Solutions</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $service->title }}</li>
                        </ol>
                    </nav>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
      Blog Grid
      ========================= -->
    <section class="blog-grid pt-0">
        <div class="container">
            <div class="row">
                <section class="about-layout1 pb-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex align-items-center mb-20">
                                    <div class="divider divider-primary mr-30"></div>
                                    <h2 class="heading__subtitle mb-0">IT Solutions</h2>
                                </div>
                            </div><!-- /.col-12 -->
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="heading mb-30">
                                    <h3 class="heading__title mb-40">{{ $service->title }}</h3>
                                </div><!-- /heading -->
                                <div class="position-relative offset-xl-1 mx-txt">
                                    <p class="mb-40">{!! strip_tags($service->description, '<br>') !!}</p>
                                    {!! strip_tags($service->importance, '<br><li><ul>') !!}
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-12 col-md-12 col-lg-5 offset-lg-1">
                                <div class="about__img mb-40">
                                    <img src="{{ asset($service->image_url) }}" alt="about">
                                </div><!-- /.about-img -->
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </section><!-- /.About Layout 1 -->

            </div><!-- /.container -->
    </section><!-- /.blog Grid -->
@endsection
