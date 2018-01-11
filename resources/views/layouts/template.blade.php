<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{!! asset('assets/vendor/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{!! asset('assets/css/modern-business.css') !!}" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{!! asset('assets/font-awesome/css/font-awesome.css') !!}" rel="stylesheet">


  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark fixed-top" style="background-color: #3E2723">
      <div class="container">
        <a class="navbar-brand" href="/home">
          <img src="{!! asset('assets/images/logo/logo2.svg') !!}" alt="">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive" style="font-family: lemonmilk; font-size: 18px; margin-right: 2rem">
          
          <!-- Cart -->
          <ul class="navbar-nav ml-auto">
            <!-- <li class="nav-item">
              <div class="cart box_1">
                <a href="checkout.html" class="nav-link">
                  <div class="total"">
                    <span class="badge" style="margin-right: 2px">5</span>              
                    <i class="fa fa-shopping-cart"></i>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link">
                <strong>|</strong>
              </a>
            </li> -->
            
            <li class="nav-item">
              <a class="nav-link" href="/home">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle dropbtn" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Kamera
              </a>
              <div class="dropdown-content" aria-labelledby="navbarDropdownPortfolio" style="font-size: 15px; list-style-type: none;">
                <a href="/sewa/kamera/canon">Canon</a>
                <a href="/sewa/kamera/nikon">Nikon</a>
                <a href="/sewa/kamera/sony">Sony</a>
                <a href="/sewa/kamera/samsung">Samsung</a>
                <a href="/sewa/kamera/gopro">GO Pro</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle dropbtn" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Lensa
              </a>
              <div class="dropdown-content" aria-labelledby="navbarDropdownPortfolio" style="font-size: 15px; list-style-type: none;">
                <a href="/sewa/lensa/canon">Canon</a>
                <a href="/sewa/lensa/nikon">Nikon</a>
                <a href="/sewa/lensa/sony">Sony</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle dropbtn" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Aksesoris
              </a>
              <div class="dropdown-content" aria-labelledby="navbarDropdownPortfolio" style="font-size: 15px; list-style-type: none;">
                <a href="/sewa/aksesoris/tripod">Tripod</a>
                <a href="/sewa/aksesoris/lighting">Lighting</a>
                <a href="/sewa/aksesoris/microphone">Michrophone</a>
                <a href="/sewa/aksesoris/battery">Extra Battery</a>
                <a href="/sewa/aksesoris/memory">Memory</a>
              </div>
            </li>
           
          
      

            @if(Auth::user())
            <li class="nav-item">
             <a class="nav-link" href="{{'/logout'}}">Logout |  {{ucwords(Auth::user()->name)}}</a>
            </li>

            @else

              <li class="nav-item">
              <a class="nav-link" href="login">Login</a>
            </li>

            @endif
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header-->
      @yield('header')
    <!-- /.header-->

    <!-- Page Content -->
      @yield('content')
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="/about">About</a>
              </li>
              <li class="list-inline-item">⋅</li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
              <li class="list-inline-item">⋅</li>
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">© Sumber Rejeki 2017. All Rights Reserved.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-twitter fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{!! asset('assets/vendor/jquery/jquery.min.js') !!}"></script>
    <script src="{!! asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

  </body>

</html>
