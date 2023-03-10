<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('page_title')</title>
  <link rel="stylesheet" type="text/css" href="{{asset('front_assets/css/font-awesome.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('front_assets/css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('front_assets/css/jquery.smartmenus.bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('front_assets/css/jquery.simpleLens.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('front_assets/css/slick.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('front_assets/css/nouislider.css')}}">
  {{-- <link rel="stylesheet" type="text/css" href="{{asset('front_assets/css/theme-color/default-theme.css')}}"
  id="switcher"> --}}
  <link rel="stylesheet" type="text/css" href="{{asset('front_assets/css/sequence-theme.modern-slide-in.css')}}"
    media="all">
  <link rel="stylesheet" type="text/css" href="{{asset('front_assets/css/style.css')}}">
  <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Lato'>
  <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Raleway'>
  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script>
  <script>
    var PRODUCT_IMAGE="{{asset('storage/media/')}}";
  </script>
</head>
{{-- <img src="{{asset('storage/media/logo.jpg')}}" alt="img" height="50px"> --}}

<body class="productPage"
  style="background-image: url({{asset('storage/media/home/bg.jpg')}}); background-repeat: repeat-y; height: 100%; background-size: contain;">
  <!-- SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->
  <!-- Start header section -->
  <header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <!-- start header top left -->
              <div class="aa-header-top-left">
                <marquee><span class="mar">Nisarga Ayurveda Provides Best Quality </span> Products <span class="mar"> |
                  </span>
                  Treatment <span class="mar"> | </span> Services
                  &emsp;<span class="mar">Free Online Consultation For Selection Of <span>Skin</span>
                    And <span>Hair Care</span>
                    <span class="mar">Products</span>
                  </span>
                  &emsp;<span class="mar"> Free Shipping
                    <!--| COD-->
                    above ₹1000/-
                  </span>
                </marquee>
                {{-- <marquee direction="left">
                </marquee> --}}
              </div>
              <!-- / header top left -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="{{url('/')}}">
                  {{-- <span class="fa fa-shopping-cart"></span> --}}
                  <p>
                    <img src="{{asset('storage/media/logo.jpg')}}" alt="img" height="50px">
                    Nisarga Ayurveda <span class="text-right">... Cures Naturally</span>
                  </p>
                </a>
                <!-- img based logo -->
                <!-- <a href="javascript:void(0)"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
              <!-- / logo  -->
              <!-- cart box -->
              @php
              $getAddToCartTotalItem=getAddToCartTotalItem();
              $totalCartItem=count($getAddToCartTotalItem);
              $totalPrice=0;
              @endphp
              <div class="aa-cartbox">
                <a class="aa-cart-link" href="#" id="cartBox">
                  <span class="fa fa-shopping-basket"></span>
                  {{-- <span class="aa-cart-title">SHOPPING CART</span> --}}
                  <span class="aa-cart-notify">{{$totalCartItem}}</span>
                </a>
                <div class="aa-cartbox-summary">
                  @if($totalCartItem>0)
                  <ul>
                    @foreach($getAddToCartTotalItem as $cartItem)

                    @php
                    $totalPrice=$totalPrice+($cartItem->qty*$cartItem->price)
                    @endphp

                    <li>
                      <a class="aa-cartbox-img" href="#"><img 
                        {{-- src="{{asset('storage/media/'.$cartItem->image)}}" --}}
                          src="{{asset('storage/media/'.$cartItem->folder_name.'/1.jpg')}}" 
                          alt="img"></a>
                          
                      <div class="aa-cartbox-info">
                        <h4><a href="#">{{$cartItem->name}}</a></h4>
                        <p>{{$cartItem->qty}} * Rs {{$cartItem->price}}</p>
                      </div>
                    </li>
                    @endforeach
                    <li>
                      <span class="aa-cartbox-total-title">
                        Total
                      </span>
                      <span class="aa-cartbox-total-price">
                        Rs {{$totalPrice}}
                      </span>
                    </li>
                  </ul>
                  <a class="aa-cartbox-checkout aa-primary-btn" href="{{url('/cart')}}">Cart</a>
                  @endif
                </div>
              </div>
              <!-- / cart box -->
              <section id="menu">
                <div class="container-fluid">
                  <div class="row">
                    <div class="menu-area">
                      <!-- Navbar -->
                      <div class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                        </div>
                        <!--/.nav-collapse -->
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <!-- / menu -->

              <!-- search box -->
              {{-- <div class="aa-search-box"> --}}
              <div class="navbar-collapse collapse">
                <!-- Left nav -->
                {{-- {!! getTopNavCat() !!} --}}
                <ul class="nav navbar-nav">
                  <li><a href="{{url('/')}}">Home</a></li>
                  <li><a href="{{url('about')}}">About</a></li>
                  <li><a href="{{url('products')}}">Products</a></li>
                  <li><a class="has-submenu" id="sm-16776547049227695-1" aria-haspopup="true"
                      aria-controls="sm-16776547049227695-2" aria-expanded="false">Services<span
                        class="caret"></span></a>
                    <ul class="dropdown-menu" id="sm-16776547049227695-2" role="group" aria-hidden="true"
                      aria-labelledby="sm-16776547049227695-1" aria-expanded="false">
                      <li><a href="{{url('telephonic')}}">Telephonic Consultation</a></li>
                      <li><a href="{{url('video')}}">Video Consultation (Online)</a></li>
                      <li><a href="{{url('clinic')}}">Clinic Consultation</a></li>
                      <li><a href="{{url('panchakarma')}}">Panchakarma</a></li>
                    </ul>
                  </li>
                  <li><a href="{{url('gallery')}}">Gallery</a></li>
                  <li><a href="{{url('testimonial')}}">Testimonial</a></li>
                  <li><a href="{{url('contact')}}">Contact Us</a>
                    <a href="tel:+918208787115">
                      <i class="mt-3 fa fa-phone" aria-hidden="true" style="color: #008000;"></i>
                      <span>
                        +91 82087 87115
                      </span>
                    </a>
                  </li>
                  {{-- <li><input type="button" value="Login" class="btn btn-info" data-toggle="modal" data-target="#login-modal"></li> --}}
                </ul>
              </div>
              {{-- </div> --}}
              <!-- / search box -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <!-- menu -->
  <!-- Start slider -->
  @section('container')
  @show
  <!-- footer -->
  <footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-footer-top-area">
              <div class="row">
                <div class="col-md-3 col-sm-6">
                  <div class="aa-footer-widget">
                    <h3 class=" text-center"> Reach at..</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="https://goo.gl/maps/sniWAz5Js1eCefTMA">
                          <i class="fa fa-map-marker" aria-hidden="true" style="color: red;"></i>
                          <span>
                            Flat C-413, Building No.1, MHADACITY, Opposite Hotel Brij Inn, Behind Dwarkamai
                            Hotel, Near Main Bus Stand Chowk, Ganeshpeth, Nagpur
                            Pin Code 440018, Maharashtra.
                          </span>
                        </a></li>
                      <li style="margin-top:10px;"><a href="tel:+918208787115">
                          <i class="mt-3 fa fa-phone" aria-hidden="true" style="color: chartreuse;"></i>
                          <span>
                            +91 82087 87115
                          </span>
                        </a></li>
                      <li style="margin-top:10px;"> <a href="mailto:yogini.megha@gmail.com">
                          <i class="mt-3 fa fa-envelope" aria-hidden="true"></i>
                          yogini.megha@gmail.com
                        </a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-7 col-sm-6">
                  <div class="aa-footer-widget">
                    <div class="aa-footer-widget">
                      <h3 class=" text-center">About</h3>
                      <ul class="aa-footer-nav">
                        <li><a>
                            <p>
                              Founded in 2014 by Dr Megha Kelwade. Nisarga Ayurveda provides a vast range of beauty and
                              health
                              care products that are 100% natural and processed using traditional authentic ayurvedic
                              methods.
                              We also provide various ayurvedic panchakarma treatments with complete consultation and
                              guidance
                              before and after treatment by the capable hands of Dr. Megha Kelwade .
                            </p>
                          </a></li>
                        <li>
                          <a href="https://www.amazon.in/s?k=Nisarga+Ayurveda&ref=bl_dp_s_web_0" target="_blank"
                            class="fa fa-amazon"></a>
                          <a href="https://www.indiamart.com/nisarga-ayurveda/?pos=1&kwd=nisarga%20ayurveda&tags=||||8186.624|Price|product"
                            target="_blank"> <img src="{{asset('storage/media/footer/india_mart.jpg')}}"
                              class="india" /> </a>
                          <a href="https://www.facebook.com/Nisarg-Ayurveda-106407377478681;" target="_blank"
                            class="fa fa-facebook"></a>
                          <a href="https://www.instagram.com/nisarga_ayurveda" target="_blank"
                            class="fa fa-instagram"></a>
                          <a href="https://www.youtube.com/channel/UCz3QhGIglERICrYxzxattWw;" target="_blank"
                            class="fa fa-youtube"></a>
                          <a href="https://twitter.com/KelwadeMegha" target="_blank" class="fa fa-twitter"></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-2 col-sm-6">
                  <div class="aa-footer-widget">
                    <div class="aa-footer-widget">
                      <h3 class=" text-center"> Pages</h3>
                      <ul class="aa-footer-nav">
                        <li>
                          <a class="active" href="index.php">
                            Home
                          </a>
                        </li>
                        <li>
                          <a class="" href="about.php">
                            About
                          </a>
                        </li>
                        <li>
                          <a class="" href="shop.php">
                            Products
                          </a>
                        </li>
                        <li>
                          <a class="" href="gallery.php">
                            Gallery
                          </a>
                        </li>
                        <li>
                          <a class="" href="contact.php">
                            Contact Us
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-footer-bottom-area">
              <p>&copy; 2022 All Rights Reserved By<strong> Dr. Megha Kelwade.</strong></p>
              <p>&emsp; Designed By ICEICO Technologies </p>
              <div class="aa-footer-payment">
                {{-- <span class="fa fa-cc-mastercard"></span>
                <span class="fa fa-cc-visa"></span>
                <span class="fa fa-paypal"></span>
                <span class="fa fa-cc-discover"></span> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->
  @php
  if(isset($_COOKIE['login_email']) && isset($_COOKIE['login_pwd'])){
  $login_email=$_COOKIE['login_email'];
  $login_pwd=$_COOKIE['login_pwd'];
  $is_remember="checked='checked'";
  } else{
  $login_email='';
  $login_pwd='';
  $is_remember="";
  }
  @endphp
  <!-- Login Modal -->
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <div id="popup_login">
            <h4>Login or Register</h4>
            <form class="aa-login-form" id="frmLogin">
              <label>Email address<span>*</span></label>
              <input type="email" placeholder="Email" name="str_login_email" required value="{{$login_email}}">
              <label>Password<span>*</span></label>
              <input type="password" placeholder="Password" name="str_login_password" required value="{{$login_pwd}}">
              <button class="aa-browse-btn btn btn-primary" type="submit" id="btnLogin">Login</button>
              {{-- <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme" name="rememberme"
                  {{$is_remember}}> Remember me </label> --}}
              <div id="login_msg"></div>
              {{-- <p class="aa-lost-password"><a href="javascript:void(0)" onclick="forgot_password()">Lost your
                  password?</a></p> --}}
              <div class="aa-register-now">
                Don't have an account?<a href="{{url('registration')}}">Register now!</a>
              </div>
              @csrf
            </form>
          </div>
          <div id="popup_forgot" style="display:none;">
            <h4>Forgot Password</h4>
            <form class="aa-login-form" id="frmForgot">
              <label>Email address<span>*</span></label>
              <input type="email" placeholder="Email" name="str_forgot_email" required>
              <button class="aa-browse-btn" type="submit" id="btnForgot">Submit</button>
              <br><br>
              <div id="forgot_msg"></div>
              <div class="aa-register-now">
                Login Form?<a href="javascript:void(0)" onclick="show_login_popup()">Login now!</a>
              </div>
              @csrf
            </form>
          </div>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="{{asset('front_assets/js/bootstrap.js')}}"></script>
  <script src="{{asset('front_assets/js/jquery.smartmenus.js')}}"></script>
  <script src="{{asset('front_assets/js/jquery.smartmenus.bootstrap.js')}}"></script>
  <script src="{{asset('front_assets/js/sequence.js')}}"></script>
  <script src="{{asset('front_assets/js/sequence-theme.modern-slide-in.js')}}"></script>
  <script src="{{asset('front_assets/js/jquery.simpleGallery.js')}}"></script>
  <script src="{{asset('front_assets/js/jquery.simpleLens.js')}}"></script>
  <script src="{{asset('front_assets/js/slick.js')}}"></script>
  <script src="{{asset('front_assets/js/nouislider.js')}}"></script>
  <script src="{{asset('front_assets/js/custom.js')}}"></script>
</body>

</html>