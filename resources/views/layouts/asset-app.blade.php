<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Flora Aid</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="{{asset('userInterface/css/bootstrap-select.min.css')}}">
    <!-- Price Slider Stylesheets -->
    <link rel="stylesheet" href="{{asset('userInterface/vendor/nouislider/nouislider.css')}}">
    <!-- Custom font icons-->
    <link rel="stylesheet" href="{{asset('userInterface/css/custom-fonticons.css')}}">
    <!-- Google fonts - Poppins-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700">
    <!-- owl carousel-->
    <link rel="stylesheet" href="{{asset('userInterface/vendor/owl.carousel/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('userInterface/vendor/owl.carousel/assets/owl.theme.default.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('userInterface/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('userInterface/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('userInterface/img/favicon.ico')}}">
    <!-- Modernizr-->
    <script src="{{asset('userInterface/js/modernizr.custom.79639.js')}}"></script>
    <script src="https://use.fontawesome.com/717493f103.js"></script>
    <script id="dsq-count-scr" src="//floraaid.disqus.com/count.js" async></script>
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
<body>
  <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg">
        <div class="search-area">
          <div class="search-area-inner d-flex align-items-center justify-content-center">
            <div class="close-btn"><i class="icon-close"></i></div>
            <form action="{{ route('search') }}" method="get">
              <div class="form-group">
                <input type="search" name="search" placeholder="What are you looking for?">
                <button type="submit" class="submit"><i class="icon-search"></i></button>
              </div>
            </form>
          </div>
        </div>
        <div class="container-fluid">  
          <!-- Navbar Header  --><a href="{{url('/')}}" class="navbar-brand"><img src="{{asset('userInterface/img/logo.png')}}" alt="..."></a>
          <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right" style="border:1px solid green;"><i class="fa fa-bars"></i></button>
          <!-- Navbar Collapse -->
          <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item"><a id="navbarHomeLink" href="{{url('/')}}" aria-haspopup="true" aria-expanded="false" class="nav-link">Home</a>
              </li>
              <li class="nav-item"><a href="{{ url('/products') }}" class="nav-link">Products</a>
              </li>
              <li class="nav-item"><a href="{{ url('/faq') }}" class="nav-link">FAQ</a>
              </li>
              <li class="nav-item"><a href="{{url('/contact')}}" class="nav-link">Contact</a>
              </li>
               <!-- <li class="nav-item"><a href="{{  url('new') }}" class="nav-link">Con</a>
              </li> --> 
            </ul>
            <div class="right-col d-flex align-items-lg-center flex-column flex-lg-row">
              <!-- Search Button-->
              <div class="search"><i class="icon-search"></i></div>
              <!-- User Not Logged - link to login page-->
              @if(Auth::check()) 
                <div class="user"> <a id="userdetails" href="{{ url('/home') }}" class="user-link"><i class="icon-profile"></i>Profile</a></div>
              @else
              <div class="user"> <a id="userdetails" href="{{ url('/login') }}" class="user-link"><i class="icon-profile"></i></a></div>
              @endif
              <!-- Cart Dropdown-->
              <div class="cart dropdown show"><a id="cartdetails" href="https://example.com/" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="icon-cart"></i>
                  <div class="cart-no">{{ App\Cart::totalItems() }}</div></a><a href="{{ url('/carts') }}" class="text-primary view-cart">View Cart</a>
                <div aria-labelledby="cartdetails" class="dropdown-menu">
                  <!-- cart item-->
                 <!--  <div class="dropdown-item cart-product">
                    <div class="d-flex align-items-center">
                      <div class="img"><img src="{{asset('userInterface/img/hoodie-man-1.png')}}" alt="..." class="img-fluid"></div>
                      <div class="details d-flex justify-content-between">
                        <div class="text"> <a href="#"><strong>Heather Gray Hoodie</strong></a><small>Quantity: 1 </small><span class="price">$75.00 </span></div><a href="#" class="delete"><i class="fa fa-trash-o"></i></a>
                      </div>
                    </div>
                  </div> -->
                  <!-- total price-->
                  <!-- <div class="dropdown-item total-price d-flex justify-content-between"><span>Total</span><strong class="text-primary">$75.00</strong></div> -->
                  <!-- call to actions-->
                  <div class="dropdown-item CTA d-flex"><a href="{{ url('/carts') }}" class="btn btn-template wide">View Cart</a><a href="{{ url('/checkout') }}" class="btn btn-template wide">Checkout</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
          <div class="container">
            @include('layouts/flash-message')
          </div>

            @yield('content')

    <div id="scrollTop"><i class="fa fa-long-arrow-up"></i></div>
    <!-- Footer-->
    <footer class="main-footer">
      <div class="copyrights">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="text col-md-6">
              <p>&copy; 2019 <a href="#" target="_blank"> Mehenaz Mohona </a> All rights reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

   <!-- JavaScript files-->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="{{asset('userInterface/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('userInterface/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('userInterface/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('userInterface/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('userInterface/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js')}}"></script>
    <script src="{{asset('userInterface/vendor/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('userInterface/vendor/nouislider/nouislider.min.js')}}"></script>
    <script src="{{asset('userInterface/vendor/jquery-countdown/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('userInterface/vendor/masonry-layout/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('userInterface/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <!-- masonry -->
    <script>
      $(function(){
          var $grid = $('.masonry-wrapper').masonry({
              itemSelector: '.item',
              columnWidth: '.item',
              percentPosition: true,
              transitionDuration: 0,
          });
      
          $grid.imagesLoaded().progress( function() {
              $grid.masonry();
          });
      })
      
      
    </script>
    <!-- Main Template File-->
    <script src="{{asset('userInterface/js/front.js')}}"></script>
  </body>

</html>
