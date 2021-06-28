<section class="slider">
  <div class="slick-carousel carousel-arrows-light carousel-dots-light m-slides-0"
    data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>

    @foreach ($banners as $banner)
      <div class="slide-item align-v-h bg-overlay bg-overlay-gradient">
        <div class="bg-img"><img src="{{asset($banner->banner_url)}}" alt="slide img"></div>
      </div><!-- /.slide-item -->
    @endforeach

  </div><!-- /.carousel -->
</section><!-- /.slider -->
