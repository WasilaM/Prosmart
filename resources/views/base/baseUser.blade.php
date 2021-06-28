<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link href="assets/images/favicon/favicon.png" rel="icon">

  {!! SEOMeta::generate() !!}
  {!! JsonLd::generate() !!}

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;600;700;800;900&family=Roboto:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
  <link rel="stylesheet" href="{{asset('assetsFront/css/libraries.css')}}">
  <link rel="stylesheet" href="{{asset('assetsFront/css/style.css')}}">
</head>

<body>
  <div class="wrapper">
    <div class="preloader">
      <div class="sk-cube-grid">
        <span class="sk-cube"></span>
        <span class="sk-cube"></span>
        <span class="sk-cube"></span>
        <span class="sk-cube"></span>
        <span class="sk-cube"></span>
        <span class="sk-cube"></span>
        <span class="sk-cube"></span>
        <span class="sk-cube"></span>
        <span class="sk-cube"></span>
      </div>
    </div><!-- /.preloader -->

    <!-- =========================
        Header
    =========================== -->
    <header class="header header-transparent">
      @widget('nav_bar')
    </header><!-- /.Header -->

    @yield('content')

    @widget('footer')

  <script src="{{asset('assetsFront/js/jquery-3.5.1.min.js')}}"></script>
  <script src="{{asset('assetsFront/js/plugins.js')}}"></script>
  <script src="{{asset('assetsFront/js/main.js')}}"></script>
</body>

</html>
