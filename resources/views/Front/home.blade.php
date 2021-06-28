@extends('base.baseUser')

@section('content')
    @widget('banner_home')

    <!-- ========================
        About Layout 4
      =========================== -->

    @widget('about_home')



    <!-- ========================
        Services Carousel
        =========================== -->

    @widget('service_home')

    <!-- ===========================
            portfolio Grid
            ============================= -->

    @widget('documentary_films')

    <!-- =========================
         Banner layout 5
        =========================== -->

    @widget('recent_news')


    @widget('home_clients')
    <!-- ======================
        Blog Grid
      ========================= -->
    {{-- <section class="blog-grid pb-50">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
          <div class="heading text-center mb-40">
            <h2 class="heading__subtitle">Recent Articles</h2>
            <h3 class="heading__title">Resource Library</h3>
          </div><!-- /.heading -->
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
      <div class="row">
        <!-- Blog Item #1 -->
        <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="post-item">
            <div class="post__img">
              <a href="blog-single-post.html">
                <img src="{{asset('assetsFront/images/blog/grid/1.jpg')}}" alt="blog image">
              </a>
            </div><!-- /.blog-img -->
            <div class="post__content">
              <div class="post__meta d-flex flex-wrap">
                <div class="post__meta-cat">
                  <a href="#">Consulting</a><a href="#">Sales</a>
                </div><!-- /.blog-meta-cat -->
                <span class="post__meta-date">May 13, 2020</span>
              </div>
              <h4 class="post__title"><a href="#">Five Ways to Develop a World Class Sales Operations
                  Function</a>
              </h4>
              <p class="post__desc">Outsourcing IT infrastructure is a concept that has been around for a while.
                Characterized in terms of technicians and engineers, workstations and servers, the idea of outsourcing
                your basic IT needs...
              </p>
              <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                <span>Read More</span>
                <i class="icon-arrow-right"></i>
              </a>
            </div><!-- /.blog-content -->
          </div><!-- /.post-item -->
        </div><!-- /.col-lg-4 -->
        <!-- Blog Item #2 -->
        <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="post-item">
            <div class="post__img">
              <a href="blog-single-post.html">
                <img src="{{asset('assetsFront/images/blog/grid/2.jpg')}}" alt="blog image">
              </a>
            </div><!-- /.blog-img -->
            <div class="post__content">
              <div class="post__meta d-flex flex-wrap">
                <div class="post__meta-cat">
                  <a href="#">Tech</a><a href="#">Communications</a>
                </div><!-- /.blog-meta-cat -->
                <span class="post__meta-date">April 17, 2020</span>
              </div>
              <h4 class="post__title"><a href="#">Succession Risks That Threaten Your Leadership Strategy</a>
              </h4>
              <p class="post__desc">Today’s organizations need a quality bench of leaders to drive business
                outcomes and satisfy employees, customers and investors who now demand more transparency and
                accountability...
              </p>
              <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                <span>Read More</span>
                <i class="icon-arrow-right"></i>
              </a>
            </div><!-- /.blog-content -->
          </div><!-- /.post-item -->
        </div><!-- /.col-lg-4 -->
        <!-- Blog Item #3 -->
        <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="post-item">
            <div class="post__img">
              <a href="blog-single-post.html">
                <img src="{{asset('assetsFront/images/blog/grid/3.jpg')}}" alt="blog image">
              </a>
            </div><!-- /.blog-img -->
            <div class="post__content">
              <div class="post__meta d-flex flex-wrap">
                <div class="post__meta-cat">
                  <a href="#">Digital Business</a><a href="#">Cloud</a>
                </div><!-- /.blog-meta-cat -->
                <span class="post__meta-date">March 20, 2020</span>
              </div>
              <h4 class="post__title"><a href="#">What Do Employee Engagement Surveys Tell You About
                  Employee?</a>
              </h4>
              <p class="post__desc">Outsourcing IT infrastructure is a concept that has been around for a while.
                Characterized in terms of technicians and engineers, workstations and servers, the idea of outsourcing
                your basic IT needs...
              </p>
              <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                <span>Read More</span>
                <i class="icon-arrow-right"></i>
              </a>
            </div><!-- /.blog-content -->
          </div><!-- /.post-item -->
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.blog Grid --> --}}

    <!-- =========================
         Banner layout 2
        =========================== -->


@endsection
