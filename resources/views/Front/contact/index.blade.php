@extends('base.baseUser')

@section('content')
  <section class="page-title page-title-layout16 text-center bg-overlay bg-overlay-gradient bg-parallax pb-5">
    <div class="bg-img"><img src="{{asset('assetsFront/images/contact-us.jpg')}}" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav>
            <ol class="breadcrumb justify-content-start mb-0">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
          </nav>
        </div><!-- /.col-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.page-title -->

  <!-- ======================
  Blog Grid
  ========================= -->
  <section class="contact-layout2 pt-5">
    <div class="container">
      <div class="row">
        <!-- Contact panel #1 -->
        <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="contact-info-box">
            <ul class="contact__info-list list-unstyled">
              <li><strong>Email:</strong> <a href="">{!!Html::email($contact->data['data']['email'])!!}</a></li>
              <li><strong>Address:</strong> {{$contact->data['data']['address']}}</li>
              <li><strong>Phone:</strong> <a href="">{{$contact->data['data']['mobile']}}</a></li>
            </ul><!-- /.contact__info-list -->
          </div><!-- /.contact-info-box -->
        </div><!-- /.col-lg-4 -->
        <!-- Contact panel #2 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.Contact layout 2 -->

@endsection
