<section class="features-layout1 pt-0">
    <div class="features-bg">
        <div class="bg-img"><img src="{{ asset('assetsFront/images/backgrounds/14.jpg') }}" alt="background"></div>
    </div>
    <div class="container">
        <div class="row heading heading-light mb-30 ">
            <div class="col-sm-12 col-md-12 col-lg-5">
                <div class="divider divider-primary mt-0"></div>
                <h3 class="heading__title">IT Soutions</h3>
            </div><!-- /col-lg-5 -->
        </div><!-- /.row -->
        <div class="row">
            @foreach ($services as $service)
            <div class="col-6 col-md-6 col-lg-3">
                <div class="feature-item text-center">
                    <div class="feature__icon">
                        <i class="icon-software"></i>
                    </div>
                    <h4 class="feature__title">{{ $service->title }}</h4>
                    <a href="{{route('front.service.show', $service->slug)}}" class="btn__link"><i class="icon-arrow-right icon-outlined"></i></a>
                </div><!-- /.feature-item -->
            </div><!-- /.col-lg-3 -->
            @endforeach
        </div><!-- /.row -->
            {{-- <div class="row mt-40">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="mb-30"></p>
                            <a class="btn mb-30">
                            </a>
                        </div><!-- /.col-sm-6 -->
                        <div class="col-sm-6">
                            <ul class="mb-30">
                            </ul>
                        </div><!-- /.col-sm-6 -->
                    </div><!-- /.row -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row --> --}}
    </div><!-- /.container -->
</section><!-- /.Features Layout 1 -->
