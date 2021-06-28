<nav class="navbar navbar-expand-lg sticky-navbar" style="opicity : 1">
  <div class="container">

    <a class="navbar-brand" href="index.html">
      <img src="{{asset('assetsFront/images/logo/logo.png')}}" class="logo-light" alt="logo">
      <img src="{{asset('assetsFront/images/logo/logo.png')}}" class="logo-dark" alt="logo">
    </a>
    <button class="navbar-toggler" type="button">
      <span class="menu-lines"><span></span></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNavigation">
      <ul class="navbar-nav ml-auto">
        <li class="nav__item">
          <a href="{{route('home')}}" class="nav__item-link">Home</a>
        </li>
        <li class="nav__item">
          <a href="{{route('front.about.index')}}" class="nav__item-link">About Us</a>
        </li>
        <li class="nav__item  has-dropdown">
          <a href="{{route('front.service.index')}}" data-toggle="dropdown" class="dropdown-toggle nav__item-link">IT Solutions</a>
          <ul class="dropdown-menu">
            @foreach ($services as $service)
              <li class="nav__item">
                <a href="{{route('front.service.show', $service->slug)}}" class="nav__item-link">{{ $service->title }}</a>
              </li><!-- /.nav-item -->
            @endforeach
          </ul><!-- /.dropdown-menu -->
        </li>
        <li class="nav__item">
          <a href="{{route('front.contact.index')}}" class="nav__item-link">Contact</a>
        </li><!-- /.nav-item -->
      </ul><!-- /.navbar-nav -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav><!-- /.navabr -->
