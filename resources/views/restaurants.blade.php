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
                            <a href="/Restaurateur" class="bk-btn">REGISTER MY RESTAURANT</a>
                           
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
                            <a href="./index.html">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li class="active"><a href="/Restaurants">Restaurants</a></li>
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
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>RESTAURANTS</h2>
                        <div class="bt-option">
                            <a href="/">Home</a>
                            <span>Restaurants</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Rooms Section Begin -->
    <section class="rooms-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="assets/img/rest/rest-1.jpg" alt="">
                        <div class="ri-text">
                            <h4>Restaurant 1</h4>
                            <h3>100dh<span>/-20%</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Tables:</td>
                                        <td>30</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Chefs</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">adresse:</td>
                                        <td>Lorem ipsum dolor sit </td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>Wifi, Television, Bathroom,...</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="primary-btn">Reserver</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="assets/img/rest/rest-2.jpg" alt="">
                        <div class="ri-text">
                            <h4>Restaurant 2</h4>
                            <h3>200dh<span>/-20%</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Tables:</td>
                                        <td>30</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Chefs</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">adresse:</td>
                                        <td>Lorem ipsum dolor sit </td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>Wifi, Television, Bathroom,...</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="primary-btn">Reserver</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="assets/img/rest/rest-3.jpg" alt="">
                        <div class="ri-text">
                            <h4>Restaurant 3</h4>
                            <h3>140dh<span>/-30%</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Tables:</td>
                                        <td>30</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Chefs</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">adresse:</td>
                                        <td>Lorem ipsum dolor sit </td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>Wifi, Television, Bathroom,...</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="primary-btn">Reserver</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="assets/img/rest/rest-4.jpg" alt="">
                        <div class="ri-text">
                            <h4>Restaurant 4</h4>
                            <h3>130dh<span>/-20%</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Tables:</td>
                                        <td>30</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Chefs</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">adresse:</td>
                                        <td>Lorem ipsum dolor sit </td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>Wifi, Television, Bathroom,...</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="primary-btn">Reserver</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="assets/img/rest/rest-5.jpg" alt="">
                        <div class="ri-text">
                            <h4>Restaurant 5</h4>
                            <h3>100dh<span>/-20%</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Tables:</td>
                                        <td>30</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Chefs</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">adresse:</td>
                                        <td>Lorem ipsum dolor sit </td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>Wifi, Television, Bathroom,...</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="primary-btn">Reserver</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="assets/img/rest/rest-6.jpg" alt="">
                        <div class="ri-text">
                            <h4>Restaurant 6</h4>
                            <h3>160dh<span>/-10%</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Tables:</td>
                                        <td>30</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Chefs</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">adresse:</td>
                                        <td>Lorem ipsum dolor sit </td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>Wifi, Television, Bathroom,...</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="primary-btn">Reserver</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="room-pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">Next <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Rooms Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                           
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
</body>

</html>