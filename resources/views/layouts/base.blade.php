<!doctype html>
<html lang="en">
<head>

    <title>Foldam</title>

    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/ion.rangeSlider.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/feather-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick/slick-theme.css') }}">
    <link id="color-link"  rel="stylesheet" type="text/css" href="{{ asset('assets/css/demo4.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <link rel="preconnect" href="{{ asset('https://fonts.gstatic.com/')}}">
    <link
      href="{{ asset('https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      rel="stylesheet')}}">
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Allura&amp;display=swap')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer')}}">

      <style>

        .h-logo {
            max-width:333px !important;
        }

        .f-logo {
            max-width: 220px !important;
        }

        @media only screen and (max-width: 600px) {
            .h-logo {
                max-width: 110px !important;
            }
        }
    </style>
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    @stack('styles')


</head>

<body class="theme-color4 light ltr">
    <style>
        header .profile-dropdown ul li {
            display: block;
            padding: 5px 20px;
            border-bottom: 1px solid #ddd;
            line-height: 35px;
        }

        header .profile-dropdown ul li:last-child {
            border-color: #fff;
        }

        header .profile-dropdown ul {
            padding: 10px 0;
            min-width: 250px;
        }

        .name-usr {
            background: #e87316;
            padding: 8px 12px;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            line-height: 24px;
        }

        .name-usr span {
            margin-right: 10px;
        }

        @media (max-width:600px) {
            .h-logo {
                max-width:150px !important;
            }

            i.sidebar-bar {
                font-size: 22px;
            }

            .mobile-menu ul li a svg {
                width: 20px;
                height: 20px;
            }

            .mobile-menu ul li a span {
                margin-top: 0px;
                font-size: 12px;
            }

            .name-usr {
                padding: 5px 12px;
            }
        }
    </style>
    <header class="header-style-2" id="home">
        <div class="main-header navbar-searchbar">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-menu">
                            <div class="menu-left">
                                <div class="brand-logo">
                                    <a href="{{route('app.index')}}">
                                        <img src="{{asset('assets/images/fold.png')}}" class="h-logo img-fluid blur-up lazyload"
                                            alt="logo">
                                    </a>
                                </div>
                            </div>
                            <nav>
                                <div class="main-navbar">
                                    <div id="mainnav">
                                        <div class="toggle-nav">
                                            <i class="fa fa-bars sidebar-bar"></i>
                                        </div>
                                        <ul class="nav-menu">
                                            <li class="back-btn d-xl-none">
                                                <div class="close-btn">
                                                    Menu
                                                    <span class="mobile-back"><i class="fa fa-angle-left"></i>
                                                    </span>
                                                </div>
                                            </li>
                                            <li><a href="{{route('app.index')}}" class="qq nav-link menu-title">Home</a></li>
                                            <li><a href="{{route('shop.index')}}" class="nav-link menu-title">Shop</a></li>
                                            <li><a href="{{route('cart.index')}}" class="nav-link menu-title">Cart</a></li>
                                            <li><a href="{{route('about.index')}}" class="nav-link menu-title">About Us</a></li>
                                            <li><a href="{{route('contact.show')}}" class="nav-link menu-title">Contact Us</a> </li>
                                            <li><a href="{{route('blog.index')}}" class="nav-link menu-title">Blog</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <div class="menu-right">
                                <ul>
                                    <li>
                                        <div class="search-box theme-bg-color">
                                            <i data-feather="search"></i>
                                        </div>
                                    </li>
                                    <li class="onhover-dropdown wislist-dropdown">
                                        <div class="cart-media">
                                            <a class="header-tools__item header-tools__wishlist" href="{{route('wishlist.index')}}">

                                                <span id="wishlist-count" class="label label-theme rounded-pill">
                                                    {{Cart::instance('wishlist')->content()->count()}}

                                                </span>
                                                <i data-feather="heart"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="onhover-dropdown wislist-dropdown">
                                        <div class="cart-media">
                                            <a href="{{route('cart.index')}}">
                                                <i data-feather="shopping-cart"></i>
                                                <span id="cart-count" class="label label-theme rounded-pill">
                                                    {{Cart::instance('cart')->content()->count()}}
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="onhover-dropdown">
                                        <div class="cart-media name-usr">
                                            @auth <span>{{ Auth::user()->name }}</span> @endauth <i data-feather="user"></i>
                                        </div>
                                        <div class="onhover-div profile-dropdown">
                                            <ul>
                                                @if(Route::has('login'))
                                                    @auth
                                                        @if(Auth::user()->utype ==='ADM')
                                                            <li>
                                                                <a href="{{route('admin.index')}}" class="d-block">Dashboard</a>
                                                            </li>
                                                            @else
                                                        <li>
                                                            <a href="{{route('user.index')}}" class="d-block">My Account</a>
                                                        </li>
                                                        @endif

                                                        <li>
                                                            <a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('frmlogout').submit();" class="d-block">Logout</a>
                                                            <form id="frmlogout" action="{{route('logout')}}" method="POST">
                                                                @csrf
                                                            </form>
                                                        </li>
                                                        @else
                                                        <li>
                                                            <a href="{{route('login')}}" class="d-block">Login</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{route('register')}}" class="d-block">Register</a>
                                                        </li>
                                                    @endauth
                                                @endif
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="search-full">
                                <form method="GET" class="search-full" action="http://localhost:8000/search">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i data-feather="search" class="font-light"></i>
                                        </span>
                                        <input type="text" name="q" class="form-control search-type"
                                            placeholder="Search here..">
                                        <span class="input-group-text close-search">
                                            <i data-feather="x" class="font-light"></i>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="mobile-menu d-sm-none">
        <ul>
            <li>
                <a href="demo3.php" class="active">
                    <i data-feather="home"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i data-feather="align-justify"></i>
                    <span>Category</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i data-feather="shopping-bag"></i>
                    <span>Cart</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i data-feather="heart"></i>
                    <span>Wishlist</span>
                </a>
            </li>
            <li>
                <a href="user-dashboard.php">
                    <i data-feather="user"></i>
                    <span>Account</span>
                </a>
            </li>
        </ul>
    </div>

    @yield('content')
    <div id="qvmodal"></div>
    <!--footer-->
    <hr class="mt-5 text-secondary" />
<footer class="footer footer_type_2">
  <div class="footer-middle container">
    <div class="row row-cols-lg-5 row-cols-2">
      <div class="footer-column footer-store-info col-12 mb-4 mb-lg-0">
        <div class="logo">
          <a href="index.html">
           <img src="{{asset('assets/images/fold.png')}}" class="f-logo img-fluid blur-up lazyload">
          </a>
        </div>
        <ul class="contact-lists" style="clear:both;">
            <li>
                <span><b>phone:</b> <span class="font-light"> +212636404819</span></span>
            </li>
            <li>
                <span><b>Address:</b><span class="font-light">Hay Salam,Mohammadia,Morocco</span></span>
            </li>
            <li>
                <span><b>Email:</b><span class="font-light"> rochdiaziz@gmail.com</span></span>
            </li>
        </ul>

      </div>

      <div class="footer-column footer-menu mb-4 mb-lg-0">
        <h6 class="sub-menu__title text-uppercase">Company</h6>
        <ul class="sub-menu__list list-unstyled">
            <li>
                <a href="{{route('app.index')}}" class="font-dark">Home</a>
            </li>
            <li>
                <a href="{{route('shop.index')}}" class="font-dark">Shop</a>
            </li>
            <li>
                <a href="{{route('about.index')}}" class="font-dark">About Us</a>
            </li>
            <li>
                <a href="{{route('blog.index')}}" class="font-dark">Blog</a>
            </li>
            <li>
                <a href="{{route('contact.show')}}" class="font-dark">Contact</a>
            </li>
        </ul>
      </div>

      <div class="footer-column footer-menu mb-4 mb-lg-0">
        <h6 class="sub-menu__title text-uppercase">Shop</h6>
        <ul class="sub-menu__list list-unstyled">
          <li class="sub-menu__item"><a href="{{route('shop.index')}}" class="menu-link menu-link_us-s">New Arrivals</a></li>
          <li class="sub-menu__item"><a href="{{route('shop.index')}}" class="menu-link menu-link_us-s">Accessories</a></li>
          <li class="sub-menu__item"><a href="{{route('shop.index')}}" class="menu-link menu-link_us-s">Men</a></li>
          <li class="sub-menu__item"><a href="{{route('shop.index')}}" class="menu-link menu-link_us-s">Women</a></li>
          <li class="sub-menu__item"><a href="{{route('shop.index')}}" class="menu-link menu-link_us-s">Shop All</a></li>
        </ul>
      </div>

      <div class="footer-column footer-menu mb-4 mb-lg-0">
        <h6 class="sub-menu__title text-uppercase">Help</h6>
        <ul class="sub-menu__list list-unstyled">
          <li class="sub-menu__item"><a href="{{route('contact.show')}}" class="menu-link menu-link_us-s">Customer Service</a></li>
          <li class="sub-menu__item"><a href="{{route('user.index')}}" class="menu-link menu-link_us-s">My Account</a>
          </li>
          <li class="sub-menu__item"><a href="{{route('blog.index')}}" class="menu-link menu-link_us-s">Find a Store</a>
          </li>
          <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Legal & Privacy</a></li>
          <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Gift Card</a></li>
        </ul>
      </div>

      <div class="footer-column footer-menu mb-4 mb-lg-0">
        <h6 class="sub-menu__title text-uppercase">Categories</h6>
        <ul class="sub-menu__list list-unstyled">
          <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Shirts</a></li>
          <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Jeans</a></li>
          <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Shoes</a></li>
          <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Bags</a></li>
          <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Shop All</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="container d-md-flex align-items-center">
      <span class="footer-copyright me-auto">©2024 Aziz Boujaada</span>
      <div class="footer-settings d-md-flex align-items-center">
        <a href="privacy-policy.html">Privacy Policy</a> &nbsp;|&nbsp; <a href="#">Terms &amp;
          Conditions</a>
      </div>
    </div>
  </div>
</footer>


<footer class="footer-mobile container w-100 px-5 d-md-none bg-body">
  <div class="row text-center">
    <div class="col-4">
      <a href="{{route('app.index')}}" class="footer-mobile__link d-flex flex-column align-items-center">
        <svg class="d-block" width="18" height="18" viewBox="0 0 18 18" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <use href="#icon_home" />
        </svg>
        <span>Home</span>
      </a>
    </div>

    <div class="col-4">
      <a href="{{route('shop.index')}}" class="footer-mobile__link d-flex flex-column align-items-center">
        <svg class="d-block" width="18" height="18" viewBox="0 0 18 18" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <use href="#icon_hanger" />
        </svg>
        <span>Shop</span>
      </a>
    </div>

    <div class="col-4">
      <a href="index.html" class="footer-mobile__link d-flex flex-column align-items-center">
        <div class="position-relative">
          <svg class="d-block" width="18" height="18" viewBox="0 0 20 20" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <use href="#icon_heart" />
          </svg>
          <span class="wishlist-amount d-block position-absolute js-wishlist-count">3</span>
        </div>
        <span>Wishlist</span>
      </a>
    </div>
  </div>
</footer>

<div id="scrollTop" class="visually-hidden end-0"></div>
<div class="page-overlay"></div>



    <div class="bg-overlay"></div>
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/feather/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/lazysizes.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick/slick.js') }}"></script>
    <script src="{{ asset('assets/js/slick/slick-animation.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick/custom_slick.js') }}"></script>
    <script src="{{ asset('assets/js/price-filter.js') }}"></script>
    <script src="{{ asset('assets/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('assets/js/filter.js') }}"></script>
    <script src="{{ asset('assets/js/newsletter.js') }}"></script>
    <script src="{{ asset('assets/js/cart_modal_resize.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme-setting.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script>
        $(function () {
            $('[data-bs-toggle="tooltip"]').tooltip()
        });
    </script>
    @stack('scripts')

</body>

</html>
