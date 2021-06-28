<section class="clients pt-50 pb-50 border-top">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12">
        <div class="slick-carousel"
        data-slick='{"slidesToShow": 6, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 4}}, {"breakpoint": 767, "settings": {"slidesToShow": 3}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>

        @foreach ($clients as $client)
          <div class="client">
            <img src="{{asset($client->image_url)}}" alt="client">
            <img src="{{asset($client->image_url)}}" alt="client">
          </div><!-- /.client -->
        @endforeach

      </div><!-- /.carousel -->
    </div><!-- /.col-12 -->
  </div><!-- /.row -->
</div><!-- /.container -->
</section><!-- /.clients -->
