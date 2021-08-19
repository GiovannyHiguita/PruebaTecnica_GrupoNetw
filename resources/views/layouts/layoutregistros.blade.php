<!DOCTYPE html>
<html> 
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Prueba Tecnica</title>
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/menu/images/favicon2.png" />
  
  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="/menu/plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="/menu/plugins/bootstrap/css/bootstrap.min.css">
  <!-- Lightbox.min css -->
  <link rel="stylesheet" href="/menu/plugins/lightbox2/dist/css/lightbox.min.css">
  <!-- animation css -->
  <link rel="stylesheet" href="/menu/plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="/menu/plugins/slick/slick.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="/menu/css/style.css">  

</head>
<body id="body">
<header class="navigation fixed-top">
  <div class="container">
    <!-- main nav -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav ml-auto text-center">
          <li class="nav-item dropdown active"></li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Inicio') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest          
        </ul>
      </div>
    </nav>
    <!-- /main nav -->
  </div>
</header>

	<div class="slider-item th-fullpage hero-area" style="background-image: url(/menu/images/slider/frutas.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
                    @yield('content')                
				</div>
			</div>
		</div>
	</div>


<div class="footer-bottom">
    <h5>Copyright 2016. All rights reserved.</h5>
    <h6>Design and Developed by <a href="">Themefisher</a></h6>
		<h6>Distributed by <a href="https://themewagon.com/">Themewagon</a></h6>
  </div>
</footer> <!-- end footer -->
    <!-- 
    Essential Scripts
    =====================================-->
    <!-- Main jQuery -->
    <script src="/menu/plugins/jquery/jquery.min.js"></script>
    <!-- Form Validation -->
    <script src="/menu/plugins/form-validation/jquery.form.js"></script> 
    <script src="/menu/plugins/form-validation/jquery.validate.min.js"></script>
    
    <!-- Bootstrap4 -->
    <script src="/menu/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Parallax -->
    <script src="/menu/plugins/parallax/jquery.parallax-1.1.3.js"></script>
    <!-- lightbox -->
    <script src="/menu/plugins/lightbox2/dist/js/lightbox.min.js"></script>
    <!-- Owl Carousel -->
    <script src="/menu/plugins/slick/slick.min.js"></script>
    <!-- filter -->
    <script src="/menu/plugins/filterizr/jquery.filterizr.min.js"></script>
    <!-- Smooth Scroll js -->
    <script src="/menu/plugins/smooth-scroll/smooth-scroll.min.js"></script>
    
    <!-- Custom js -->
    <script src="/menu/js/script.js"></script>

  </body>
  </html>