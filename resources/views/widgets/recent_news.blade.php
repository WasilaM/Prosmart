<section class="banner-layout5 banner-layout5-sticky bg-parallax">
    <div class="bg-img"><img src="{{ asset('assetsFront/images/banners/9.jpg') }}" alt="background"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5 d-flex flex-column justify-content-between pb-80">
                <div class="heading heading-light mb-50 sticky-top">
                    <div class="divider divider-white"></div>
                    <h3 class="heading__title mb-30">{{ $recent->data['data']['address'][App::getLocale()] }}</h3>
                </div><!-- /.heading -->
            </div><!-- /.col-xl-6 -->
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-1"">
                <section class="awards bg-secondary">
                    <div class="row heading heading-light mb-10 pb-10 pt-10">
                        <div class="col-sm-12">
                            <p class="heading__desc">{!! strip_tags($recent->data['data']['description'][App::getLocale()], '<br>') !!}</p>
                        </div><!-- /.col-lg-5 -->
                    </div><!-- /.row -->
                    <div class="row awards-wrapper">
                        <div class="col-sm-12">
                            <div class="awards-carousel-wrapper">
                                <div class="slick-carousel"
                                    data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows": false, "dots": true,"autoplay": true, "autoplaySpeed": 4000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 768, "settings": {"slidesToShow": 1}}, {"breakpoint": 570, "settings": {"slidesToShow": 1}}]}'>
                                    @foreach ($clients as $client)
                                        <div class="fancybox-item">
                                            <div class="fancybox__icon-img">
                                                <img src="{{ asset($client->image_url) }}" alt="icon">
                                            </div><!-- /.fancybox__icon-img -->
                                            <div class="fancybox__content">
                                                <h4 class="fancybox__title">{{ $client->title }}</h4>
                                            </div><!-- /.fancybox-content -->
                                        </div><!-- /.fancybox-item -->
                                    @endforeach
                                </div><!-- /.carousel  -->
                            </div><!-- /.awards-carousel-wrapper -->
                        </div><!-- /.col-12 -->
                    </div><!-- /.row -->
                </section>
            </div><!-- /.col-xl-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.Banner layout 5 -->
