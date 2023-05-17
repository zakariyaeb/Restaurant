<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MIAMDEAL</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="assets/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                            <li><i class="fa fa-phone"></i> 212 6127890</li>
                            <li><i class="fa fa-envelope"></i> MIAMDEAL@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            <div class="top-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="/">
                                <img src="assets/img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li class="active"><a href="/">Home</a></li>
                                    <li><a href="/Restaurants">Restaurants</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Restaurant Details</a></li>
                                            <li><a href="#">Reservation Details</a></li>
                                            <li><a href="#">Family Restaurant</a></li>
                                            <li><a href="#">Premium Restaurant</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        @if (Route::has('login'))
                                       <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                                           @auth
                                          <li>
                                            <x-app-layout>
                     
                                            </x-app-layout>
                                          </li>
                                           @else
                                              <li> <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>
                       
                                               @if (Route::has('register'))
                                                 <li>  <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                                               @endif
                                           @endauth
                                       </div>
                                   @endif
                                    
                                     </li>

                                  
                                </ul>
                            </nav>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    

    <section class="hero-section bg-success text-white">
        <div class="container ">

    <form action="{{ url('/RegisterRestaurant') }}" method="post" enctype="multipart/form-data">
        
        @csrf



        <div class="form-row">
            <div class="col">
                <label for="inputfname">First name :</label>
              <input type="text" class="form-control" name="FirstName"  id="inputfname" placeholder="First name">
            </div>
            <div class="col">
                <label for="inputlname">Last name :</label>
              <input type="text" class="form-control" name="LastName" id="inputlname" placeholder="Last name">
            </div>
          </div>
        <div class="form-row">
         
          <div class="form-group col-md-6">
            <label for="inputEmail">Email :</label>
            <input type="email" class="form-control"  name="email"  id="inputEmail" placeholder="Email">
          </div>
          <div class="form-group col-md-6">
            <label for="Personalphone">Phone :</label>
            <input type="text" class="form-control"  name="RestaurateurPhone"  id="Personalphone" placeholder="Your phone number">
          </div>
        </div>
        <div class="form-group">
          <label for="inputName">Name :</label>
          <input type="text" class="form-control" id="inputName" name="name" placeholder=" Please enter your restaurant name">
        </div>
        <div class="form-row">
          <div class="col">
            <label for="inputAddress">Address :</label>
            <input type="text" class="form-control" id="inputAddress" name="address" placeholder=" Please enter your restaurant address">
          </div>
        
        </div>
        <div class="form-row">
        <div class="col" style="width: 100%; max-width: 22rem">
            <label  for="phone">Phone number :</label>
            <input type="text" id="phone" name="phone" class="form-control" placeholder="Your restaurant phone number" />
            
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                I do not wish to receive communications via email/SMS from MIAMDEAL.
            </label>
          </div>
        </div>
        <button type="submit" value="save" class="btn btn-primary ">Next</button>
      </form>


        </div>
    </section>




    
    <footer class="footer-section">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                            <div class="logo">
                                <a href="#">
                                    <img src="img/footer-logo.png" alt="">
                                </a>
                            </div>
                            <p>Savourez chaque bouchée<br />vivez chaque 
                                instant</p>
                            <div class="fa-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-contact">
                            <h6>Contact Us</h6>
                            <ul>
                                <li>212 6127890</li>
                                <li>MIAMDEAL@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-newslatter">
                            <h6>New latest</h6>
                            <p>Get the latest updates and offers.</p>
                            <form action="#" class="fn-form">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="co-text"><p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script>
  </p></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/crl.js"></script>
</body>

</html>