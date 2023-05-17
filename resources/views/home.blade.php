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
  
    <div id="preloder">
        <div class="loader"></div>
    </div>


    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
       
        <div class="header-configure-area">
            
         
        </div>
       
       
    </div>
   
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

    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-text">
                        <h1>MIAMDEAL</h1>
                        <p>Here are the best restaurant reservation platform, including recommendations for international
                            restaurants and for finding low-priced ones.</p>
                        <a href="#" class="primary-btn">Discover Now</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
                    <div class="booking-form">
                        <h3>Trouver un restaurant</h3>
                       

                            <form>
                                <div class="form-group">
                                  <label for="formGroupExampleInput">Quoi</label>
                                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Cuisine,nom du restaurant">
                                </div>
                                <div class="form-group">
                                  <label for="formGroupExampleInput2">Où</label>
                                  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Maroc">
                                </div>
                            <button type="submit">Rechercher</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="assets/img/hero/hero-1.jpg"></div>
            <div class="hs-item set-bg" data-setbg="assets/img/hero/hero-2.jpg"></div>
            <div class="hs-item set-bg" data-setbg="assets/img/hero/hero-3.jpg"></div>
        </div>
    </section>
   
    <section class="aboutus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title">
                            <span>About Us</span>
                            <h2>MIAMDEAL <br />RESERVATION PLATFORM</h2>
                        </div>
                        <p class="f-para">MIAMDEAL is a restaurants reservation platform . We’re passionate about
                            restaurants. Every day, we inspire and reach thousands of restaurant enjoyers across the world.</p>
                        <p class="s-para">So when it comes to reserving the perfect restaurant, we’ve got you covered.</p>
                        <a href="#" class="primary-btn about-btn">Read More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-pic">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="assets/img/about/about-1.jpg" alt="">
                            </div>
                            <div class="col-sm-6">
                                <img src="assets/img/about/about-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>What We Do</span>
                        <h2>Discover Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <h4>A successful restaurant experience</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <h4>Find a restaurant</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <h4>Check real-time availability</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <h4>Book a table</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <h4> Special offers</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <h4>Partners
                            restaurants</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-text">
                        <h1>Restaurant N°</h1>
                        <a href="#" class="primary-btn">Reserver</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
                  
                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="assets/img/rest/rest-1.jpg"></div>
            <div class="hs-item set-bg" data-setbg="assets/img/rest/rest-2.jpg"></div>
            <div class="hs-item set-bg" data-setbg="assets/img/rest/rest-3.jpg"></div>
            <div class="hs-item set-bg" data-setbg="assets/img/rest/rest-4.jpg"></div>
            <div class="hs-item set-bg" data-setbg="assets/img/rest/rest-5.jpg"></div>
            <div class="hs-item set-bg" data-setbg="assets/img/rest/rest-6.jpg"></div>
        </div>
    </section>
  <br>
  
    <section class="hp-room-section">
        <div class="container-fluid">
            <div class="hp-room-items">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="assets/img/rest/rest-b1.jpg">
                            <div class="hr-text">
                                <h3>The moroccan Trips</h3>
                                <h2>190 dh<span>/-50%</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Tables:</td>
                                            <td>30</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Chefs:</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">adresse:</td>
                                            <td>Lorem ipsum dolor sit amet</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <td>Lorem ipsum dolor sit amet.</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="primary-btn">Reserver</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="assets/img/rest/rest-b2.jpg">
                            <div class="hr-text">
                                <h3>The Riad</h3>
                                <h2>200  dh<span>/-50%</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Tables:</td>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Chefs:</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">adresse:</td>
                                            <td>Lorem ipsum dolor sit amet</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <td>Lorem ipsum dolor sit amet.</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="primary-btn">Reserver</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="assets/img/rest/rest-b3.jpg">
                            <div class="hr-text">
                                <h3>L'italien</h3>
                                <h2>110 dh<span>/-30%</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Tables:</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Chefs:</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">adresse:</td>
                                            <td>Lorem ipsum dolor sit amet</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <td>Lorem ipsum dolor sit amet.</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="primary-btn">Reserver</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="assets/img/rest/rest-b4.jpg">
                            <div class="hr-text">
                                <h3>al arabi</h3>
                                <h2>170 dh<span>/-20%</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Tables:</td>
                                            <td>15</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Chefs:</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">adresse:</td>
                                            <td>Lorem ipsum dolor sit amet</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <td>Lorem ipsum dolor sit amet.</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="primary-btn">Reserver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>lorem </span>
                        <h2>What Users Say?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="testimonial-slider owl-carousel">
                        <div class="ts-item">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque deserunt nulla libero id repellat omnis, recusandae ipsam consequuntur reprehenderit quo quaerat porro tempora explicabo totam aut aperiam culpa adipisci harum.</p>
                            <div class="ti-author">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5> Lorem, ipsum.</h5>
                            </div>
                            <img src="img/testimonial-logo.png" alt="">
                        </div>
                        <div class="ts-item">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                 Nemo enim quae culpa omnis, quo similique molestiae accusamus nam quam
                                  commodi nihil voluptatibus illo ad reprehenderit facere itaque quisquam 
                                  dolorem consectetur.</p>
                            <div class="ti-author">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5> Lorem, ipsum.</h5>
                            </div>
                            <img src="img/testimonial-logo.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Selection MIAMDEAL</span>
                        <h2>Pour vous :</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="blog-item set-bg" data-setbg="assets/img/blog/blog-1.jpg">
                        <div class="bi-text">
                            <span class="b-tag">APP</span>
                            <h4><a href="#">Telecharger l'application</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i>2023</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item set-bg" data-setbg="assets/img/blog/blog-2.jpg">
                        <div class="bi-text">
                            <span class="b-tag">OFFRES</span>
                            <h4><a href="#">Decouvrez nos offres</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i>Pour ce mois </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item set-bg" data-setbg="assets/img/blog/blog-3.jpg">
                        <div class="bi-text">
                            <span class="b-tag">Promos</span>
                            <h4><a href="#">try</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i>1 week</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="blog-item small-size set-bg" data-setbg="assets/img/blog/blog-wide.jpg">
                        <div class="bi-text">
                            <span class="b-tag">Notre selection de restaurants</span>
                            <h4><a href="#">les meilleurs restaurant de votre zone</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i>2023</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item small-size set-bg" data-setbg="assets/img/blog/blog-10.jpg">
                        <div class="bi-text">
                            <span class="b-tag">Worldwide</span>
                            <h4><a href="#">international</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i>24h</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
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