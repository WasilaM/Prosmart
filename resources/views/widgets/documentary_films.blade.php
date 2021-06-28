<section class="about-layout4 pt-5 pb-5">
    <div class="container">
        <div class="row heading">
            <div class="col-12">
                <div class="d-flex align-items-center mb-20">
                    <div class="divider divider-primary mr-30"></div>
                    <h2 class="heading__subtitle mb-0">IT Solutions</h2>
                </div>
            </div><!-- /.col-12 -->
            <div class="col-sm-12 col-md-12 col-lg-6" style="margin-top: 0px !important; padding-top: 0px !important">
                <h3 class="heading__title mb-40">{{ @$film->title }}</h3>

                <div class="about__img">
                    <img src="{{ @asset($film->image_url) }}" alt="about">
                </div><!-- /.about-img -->
                <div class="video__btn-wrapper">
                    <a class="video__btn video__btn-white popup-video"
                        href="{{ @$film->video }}">
                        <div class="video__player">
                            <i class="fa fa-play"></i>
                        </div>
                        <span class="video__btn-title">Watch Our Presentation!</span>
                    </a>
                </div>
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6 mx-txt">{!!Str::words(strip_tags(@$film->description), 70)!!}
                <br>
                <div class="pt-5">{!! $film->importance !!}<div>
                <div class="clients pt-5">
                    <p class="text__link text-center mb-10">Trusted By The World's
                        <a href="it-solutions.html" class="btn btn__link btn__primary btn__underlined">Best
                            Organizations</a>
                    </p>
                    <div class="slick-carousel"
                        data-slick='{"slidesToShow": 3, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
                        @foreach ($clients as $client)
                        <div class="client">
                          <img src="{{@asset($client->image_url)}}" alt="client">
                          <img src="{{@asset($client->image_url)}}" alt="client">
                        </div><!-- /.client -->
                      @endforeach
                    </div><!-- /.carousel -->
                </div>
            </div>
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6" style="margin-top: 0px !important; padding-top: 0px !important">
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6 d-flex flex-column justify-content-between">
                <ul class="list-items list-items-layout2 list-horizontal list-unstyled d-flex flex-wrap mt-40">
                </ul>
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.About Layout 4 -->
