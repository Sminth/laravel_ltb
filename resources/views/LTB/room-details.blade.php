@include('layout.header')

<body class="gray_bg">

<div class="page-wrapper">

    <!-- Main Header -->
    <header class="main-header header-style-one">

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo"><a href="{{route('accueil')}}"><img src="assets/images/logo-dark.png" alt=""></a></div>
                    </div>
                    <!--Nav Box-->
                    <div class="nav-outer">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar.png" alt=""></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation">
                                                            
                                <li class="dropdown"><a href="{{route('chambre')}}">Chambres</a>
                                </li>
                                <li><a href="{{route('galerie')}}">Galerie</a></li>
                                <li><a href="{{route('Blog')}}">Blog</a></li>
                                <li class="dropdown"><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="{{route('about')}}">A propos </a></li>
                                        <li><a href="{{route('service')}}">Nos Services</a></li>
                                        <li><a href="{{route('temoignage')}}">Temoignages</a></li>
                                    </ul>
                                </li>                             
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="right-column">
                        <div class="navbar-right">
                            <div class="link-btn"><a href="contact.html" class="btn-one">Reservez <span></span></a></div>
                        </div>
                        <div class="navbar-right">
                            <div class="link-btn"><a href="contact.html" class="btn-one">Connexion <span></span></a></div>
                        </div>
                    </div>                     
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="header-upper">
                <div class="auto-container">
                    <div class="inner-container">
                        <!--Logo-->
                        <div class="logo-box">
                            <div class="logo"><a href="{{route('accueil')}}"><img src="assets/images/logo-dark.png" alt=""></a></div>
                        </div>
                        <!--Nav Box-->
                        <div class="nav-outer">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar.png" alt=""></div>
    
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">
                            </nav>
                        </div>
                        <div class="right-column">
                            <div class="navbar-right">
                                <div class="link-btn"><a href="contact.html" class="btn-one">RESERVEZ <span></span></a></div>
                            </div>
                            <div class="navbar-right">
                                <div class="link-btn"><a href="contact.html" class="btn-one">CONNEXION <span></span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="icon far fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="{{route('accueil')}}"><img src="assets/images/logo-light.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
				<!--Social Links-->
				<div class="social-links">
					<ul class="clearfix">
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
						<li><a href="#"><span class="fab fa-youtube"></span></a></li>
					</ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

        <div class="nav-overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div>
    </header>
    <!-- End Main Header -->

    <!-- Page Title -->
    <section class="page-title-one">
        <div class="auto-container">
            <div class="page-title-one-content">
                <h1 class="page-title">Room Details</h1>
                <div class="page-title-one-desc">Rooms And Suites Inspira & tionration Destinations you can travel to now.</div>
                <div class="page-title-one-bread-crumb-area">
                    <ul class="page-title-one-bread-crumb">
                        <li><a href="{{route('accueil')}}">Home</a></li>
                        <li>Room Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Room Section -->
    <section class="room-one-section style-two">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-4">
                    <form method="get" class="booking-form-widget">                    
                        <div class="booking-form-column">
                            <!--check in/out-->
                            <div class="booking-form-column-wrap">
                                <div id="nd_booking_open_calendar_from" class="">
                                    <h4 class="nd_booking_date_label">Check-In</h4>
                                    <div class="flex-box">
                                        <h1 id="nd_booking_date_number_from_front" class="nd_booking_date_number_from_front">01</h1>
                                        <h6 id="nd_booking_date_month_from_front" class="nd_booking_date_month_from_front">Jan</h6>
                                    </div>
                                </div>
                                <input type="hidden" id="nd_booking_date_month_from" class="">
                                <input type="hidden" id="nd_booking_date_number_from" class="">
                                <input placeholder="Check In" class="opacity-0" type="text" name="form-name" id="nd_booking_archive_form_date_range_from" value="" />
                            </div>
                        </div>        
                        <div class="booking-form-column">
                            <div class="booking-form-column-wrap">        
                                <div id="nd_booking_open_calendar_to" class="">
                                    <h4 class="nd_booking_date_label">Check-Out</h4>
                                    <div class="flex-box">
                                        <h1 id="nd_booking_date_number_to_front" class="nd_booking_date_number_from_front">04</h1>
                                        <h6 id="nd_booking_date_month_to_front" class="nd_booking_date_month_from_front">Feb</h6>
                                    </div>
                                </div>        
                                <input type="hidden" id="nd_booking_date_month_to" class="">
                                <input type="hidden" id="nd_booking_date_number_to" class="">
                                <input placeholder="Check Out" class="opacity-0" type="text" name="form-name" id="nd_booking_archive_form_date_range_to" value="" />                            
                            </div>  
                        </div>
                        <div class="booking-form-column">
                            <div class="nd_booking_width_100_percentage nd_booking_width_100_percentage_all_iphone nd_booking_float_left  nd_booking_box_sizing_border_box">
                                <h4 class="nd_booking_date_label">Room</h4>
                                <div class="room-opt">
                                    <select>
                                        <option data-display="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                    </select>
                                    <span class="nd_booking_date_month_from_front">Room</span>
                                </div>
                            </div>
                        </div>
                        <div class="booking-form-column">
                            <div class="nd_booking_width_100_percentage nd_booking_width_100_percentage_all_iphone nd_booking_float_left  nd_booking_box_sizing_border_box">
                                <h4 class="nd_booking_date_label">Guests</h4>
                                <div class="room-opt">
                                    <select>
                                        <option  data-display="09">09</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                    </select>
                                    <span class="nd_booking_date_month_from_front">Guest</span>
                                </div>
                            </div>
                        </div>
                        <div class="booking-form-submit-btn">
                            <div class="booking-form-submit-btn-label">Have a Promotion Code?</div>
                            <button class="btn-one">Check Availability + <span></span></button>
                        </div>
                    </form>
                    <div class="search-widget">
                        <h4 class="widget-title">Search</h4>
                        <form>
                            <input class="search-widget-search-field" type="search" placeholder="">
                        </form>
                    </div>
                    <div class="services-category-one">
                        <h4 class="widget-title">Room Services</h4>
                        <ul class="services-category-onelist">
                            <li><i class="fas fa-sort-down"></i> Swimming Pool</li>
                            <li><i class="fas fa-sort-down"></i> Smooking Room</li>
                            <li><i class="fas fa-sort-down"></i> Wifi-24 H</li>
                            <li><i class="fas fa-sort-down"></i> Sea View</li>
                            <li><i class="fas fa-sort-down"></i> Breckfast Included</li>
                            <li><i class="fas fa-sort-down"></i> Car Parking</li>
                            <li><i class="fas fa-sort-down"></i> 10% Discount</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="room-one-block">
                        <div class="room-one-like"><i class="far fa-heart"></i></div>
                        <div class="room-one-image img_hover_3">
                            <img src="assets/images/resource/room-15.jpg" alt="">
                        </div>
                        <div class="room-one-content style-three">
                            <div class="room-one-rating">
                                <div class="room-one-rating-icon">
                                    <i class="fal fa-star"></i>
                                    <i class="fal fa-star"></i>
                                    <i class="fal fa-star"></i>
                                    <i class="fal fa-star"></i>
                                    <i class="fal fa-star"></i>
                                </div>
                                <div class="room-one-rating-info">(5.0 Reviews)</div>
                            </div>
                            <h4 class="room-one-title-three">Luxury with Ultra Family Room.</h4>                            
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="room-one-info">
                                        <li>Status: <span>Avaialble</span></li>
                                        <li>Deposit: <strong>10% OFF</strong></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="room-one-info">
                                        <li>Bads: <strong>03</strong></li>
                                        <li>Parson: <strong>: 06 - 08</strong></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="room-one-desc mt-30 mb-50">Proin urna nunc, pharetra at placerat venenatis, sagittis at nunc. Curabitur suscipit faucibus fermentum. Integer et hendrerit leo. Phasellus in volutpat ante, ut posuere ipsum. Morbi et libero id justo tristique cursus a sed sapien. Pellentesque turpis  too massa, facilisis ut tortor sit amet, consequat congue ex. Proin aliquet luctus vestibul. Duis efficitur sem nibh, vel cursus felis tristique vitae.
                            <br><br>
                            Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis tempus iaculis tempor. Fusce molestie eu nunc quis viverra. Donec semper sapien ut gravida gravida. Aenean rhoncus venenatis mi, sed venenatis felis facilisis eget. Proin sollicitudin cursus nunc eu pharetra. Nam sed mauris purus.</div>
                        </div>
                        <div class="room-one-list mb-50">
                            <h4 class="room-one-title-two">Amenities</h4>
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <ul class="room-one-info-two">
                                        <li><i class="fas fa-house-flood"></i>Booking House</li>
                                        <li><i class="fas fa-credit-card-front"></i>Accepts Credit Cards</li>
                                        <li><i class="fas fa-user"></i>Tour Team</li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <ul class="room-one-info-two">
                                        <li><i class="fas fa-bus"></i>Bus Parking</li>
                                        <li><i class="fas fa-car"></i>Car Parking</li>
                                        <li><i class="fas fa-motorcycle"></i>Bike parking</li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <ul class="room-one-info-two">
                                        <li><i class="fas fa-user-nurse"></i>Girlfriend Free</li>
                                        <li><i class="fas fa-door-open"></i>Outdoor Seating</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="room-one-list mb-50">
                            <h4 class="room-one-title-two">Filter By Tags</h4>
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <ul class="room-one-info-two">
                                        <li><input type="checkbox"> Booking House</li>
                                        <li><input type="checkbox">Reservation</li>
                                        <li><input type="checkbox">Tour operator</li>
                                        <li><input type="checkbox">Travel Agency</li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <ul class="room-one-info-two">
                                        <li><input type="checkbox">Tour Ratting</li>
                                        <li><input type="checkbox">Trip Vacation</li>
                                        <li><input type="checkbox">Booking House</li>
                                        <li><input type="checkbox">Rasturent Food</li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <ul class="room-one-info-two">
                                        <li><input type="checkbox">Moharaja Pales</li>
                                        <li><input type="checkbox">Tour Place</li>
                                        <li><input type="checkbox">Funny Mode</li>
                                        <li><input type="checkbox">Booking House</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="room-one-price">
                            <div class="room-one-price-left-side">
                                <div class="room-one-price-value">$ 5859.00 </div>  
                                <div class="room-one-price-label">Starting price /Night</div>
                            </div>
                            <div class="room-one-price-left-side">
                                <div class="room-one-price-phone-number"><i class="fas fa-phone"></i> <a href="tel:09638111666">09638111666</a> </div>
                                <div class="room-one-price-phone-number-title">Have questions about this product</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </section>

    <!-- Room Section -->
    <section class="room-one-section style-two pt-0">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="title-box">
                        <div class="sub-title">Discover Our Rooms</div>
                        <h2 class="sec-title">Luxury Interior</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="room-one-block">
                        <div class="room-one-like"><i class="far fa-heart"></i></div>
                        <div class="room-one-image img_hover_3">
                            <img src="assets/images/resource/room-1.jpg" alt="">
                        </div>
                        <div class="room-one-content style-two">
                            <div class="room-one-info">Starting From <span>$19.00</span> /Night</div>
                            <h4 class="room-one-title"><a href="{{route('chambrespecified', ['id'=>2])}}">Luxury with Ultra Family Room.</a></h4>
                            <div class="room-one-desc">Nulla imperdiet ligula est, maximus est sodales Phasellus varius.</div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="room-one-info">
                                        <li>Status: <span>Avaialble</span></li>
                                        <li>Deposit: <strong>10% OFF</strong></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="room-one-info">
                                        <li>Bads: <strong>03</strong></li>
                                        <li>Parson: <strong>: 06 - 08</strong></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="room-one-link-btn"><a href="{{route('chambrespecified', ['id'=>2])}}" class="btn-one s-four">Book Now + <span></span></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-one-block">
                        <div class="room-one-like"><i class="far fa-heart"></i></div>
                        <div class="room-one-image img_hover_3">
                            <img src="assets/images/resource/room-2.jpg" alt="">
                        </div>
                        <div class="room-one-content style-two">
                            <div class="room-one-info">Starting From <span>$19.00</span> /Night</div>
                            <h4 class="room-one-title"><a href="{{route('chambrespecified', ['id'=>2])}}">Luxury with Ultra Family Room.</a></h4>
                            <div class="room-one-desc">Nulla imperdiet ligula est, maximus est sodales Phasellus varius.</div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="room-one-info">
                                        <li>Status: <span>Avaialble</span></li>
                                        <li>Deposit: <strong>10% OFF</strong></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="room-one-info">
                                        <li>Bads: <strong>03</strong></li>
                                        <li>Parson: <strong>: 06 - 08</strong></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="room-one-link-btn"><a href="{{route('chambrespecified', ['id'=>2])}}" class="btn-one s-four">Book Now + <span></span></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-one-block">
                        <div class="room-one-like"><i class="far fa-heart"></i></div>
                        <div class="room-one-image img_hover_3">
                            <img src="assets/images/resource/room-3.jpg" alt="">
                        </div>
                        <div class="room-one-content style-two">
                            <div class="room-one-info">Starting From <span>$19.00</span> /Night</div>
                            <h4 class="room-one-title"><a href="{{route('chambrespecified', ['id'=>2])}}">Luxury with Ultra Family Room.</a></h4>
                            <div class="room-one-desc">Nulla imperdiet ligula est, maximus est sodales Phasellus varius.</div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="room-one-info">
                                        <li>Status: <span>Avaialble</span></li>
                                        <li>Deposit: <strong>10% OFF</strong></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="room-one-info">
                                        <li>Bads: <strong>03</strong></li>
                                        <li>Parson: <strong>: 06 - 08</strong></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="room-one-link-btn"><a href="{{route('chambrespecified', ['id'=>2])}}" class="btn-one s-four">Book Now + <span></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="funfact-section style-two">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="funfact-one">
                        <div class="count-outer count-box">
                            <span class="funfact-one-count-text count-text" data-speed="3000" data-stop="23">0</span>
                        </div>
                        <div class="funfact-one-title">Spa Offers</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="funfact-one">
                        <div class="count-outer count-box">
                            <span class="funfact-one-count-text count-text" data-speed="3000" data-stop="204">0</span>
                        </div>
                        <div class="funfact-one-title">Toatal Rooms</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="funfact-one">
                        <div class="count-outer count-box">
                            <span class="funfact-one-count-text count-text" data-speed="3000" data-stop="05">0</span>
                        </div>
                        <div class="funfact-one-title">Total Brunces</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="funfact-one">
                        <div class="count-outer count-box">
                            <span class="funfact-one-count-text count-text" data-speed="8" data-stop="20">0</span><span>k</span>
                        </div>
                        <div class="funfact-one-title">Spa Offers</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!--footer section  -->
   <footer class="main-footer">
    <div class="auto-container">
        <div class="footer-widgets-section">
            <div class="row clearfix">
                <div class="column col-lg-3 col-md-6">
                    <div class="widget footer-logo">
                        <div class="image"><a href="{{route('accueil')}}"><img src="assets/images/footer-1.png" alt=""></a></div>
                    </div>
                </div>
                <div class="column col-lg-3 col-md-6">
                    <div class="widget about-widget">
                        <h3 class="widget-title">A propos</h3>
                        <div class="widget-content">
                            <div class="about-wdget-text">ppppppppp <br> pppppppppp </div> 
                            <ul>
                                <li>Email. <a href="mailto:info@holly.com">info@ltb.com</a></li>
                                <li>Phone. <a href="tel:+5662220033">+ </a></li>
                            </ul>                                      
                        </div>
                    </div>
                </div>
                <div class="column col-lg-3 col-md-6">
                    <div class="widget links-widget">    
                        <h3 class="widget-title">Liens Utiles</h3>                 
                        <div class="widget-content">
                            <ul>
                                <li><a href="#">A propos</a></li>
                                <li><a href="#">Mon Compte</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column col-lg-3 col-md-6">
                    <div class="widget contact-widget">
                        <h2 class="widget-title">Abidjan, <span>CIV</span></h2>
                        <div class="contact-widget-text">iczioczichiozcizciiozciozczoiczioc</div>
                        <div class="contact-widget-social-links">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="wrapper-box">
                <div class="copyright-text">
                   
                </div>
            </div>
        </div>
    </div>
</footer>

</div>
<!--End pagewrapper-->

@include('layout.footer')




























