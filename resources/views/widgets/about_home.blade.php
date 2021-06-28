<section class="about-layout1 pb-10 pt-5" style="margin-top: 0px !important">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-6">
        <div class="heading mb-30">
          <div class="d-flex align-items-center mb-20">
            <div class="divider divider-primary mr-30"></div>
            <h2 class="heading__subtitle mb-0">About Us</h2>
          </div>
          <h3 class="heading__title mb-40">{{$about->title}}</h3>
        </div><!-- /heading -->
        <div class="position-relative offset-xl-1">
          <p class="mb-40">{!!Str::words(strip_tags($about->description), 70)!!}</p>
        </div>
      </div><!-- /.col-lg-6 -->
      <div class="col-sm-12 col-md-12 col-lg-5 offset-lg-1">
        <div class="about__img mb-40">
          <img src="{{asset($about->image_url)}}" alt="about">
        </div><!-- /.about-img -->
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.About Layout 1 -->
