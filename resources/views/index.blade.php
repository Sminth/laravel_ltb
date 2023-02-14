@extends ('layouts.main')
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
                        <div class="logo"><a href="index.html"><img src="assets/images/logo-dark.png" alt=""></a></div>
                    </div>
                    <!--Nav Box-->
                    <div class="nav-outer">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar.png" alt=""></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation">
                                <li class="dropdown"><a href="index.html">Home</a>
                                    <ul>
                                        <li><a href="index.html">Home 01</a></li>
                                        <li><a href="index-2.html">Home 02</a></li>
                                        <li><a href="index-3.html">Home 03</a></li>
                                    </ul>
                                </li>                                 
                                <li class="dropdown"><a href="#">Rooms</a>
                                    <ul>
                                        <li><a href="room-1.html">Room 01</a>
                                        </li>
                                        <li><a href="room-2.html">Room 02</a>
                                        </li>
                                        <li><a href="room-3.html">Room Grid Style</a>
                                        </li>
                                        <li><a href="room-4.html">Room List Style</a>
                                        </li>
                                        <li><a href="room-details.html">Room Details</a></li>
                                        <li><a href="room-details-2.html">Room Details 02</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="about.html">About Us </a></li>
                                        <li><a href="services.html">Our Services</a></li>
                                        <li><a href="testimonial.html">Testimonials</a></li>
                                        <li><a href="error.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="gallery.html">Portfolio</a></li>
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-with-sidebar.html">Blog With Sidebar</a></li>
                                        <li><a href="blog.html">Blog Classic</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>                                
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="right-column">
                        <div class="navbar-right">
                            <div class="link-btn"><a href="contact.html" class="btn-one">Book Now + <span></span></a></div>
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
                            <div class="logo"><a href="index.html"><img src="assets/images/logo-dark.png" alt=""></a></div>
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
                                <div class="link-btn"><a href="contact.html" class="btn-one">Book Now + <span></span></a></div>
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
                <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-light.png" alt="" title=""></a></div>
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

    <!-- Bnner Section -->
    <section class="banner-section">
        <div class="swiper-container banner-slider">
            <div class="swiper-wrapper">
                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url(assets/images/main-slider/banner-1.jpg);">
                    <div class="content-outer">
                        <div class="content-box text-center justify-content-center">
                            <div class="inner">
                                <h6 class="main-slider-sub-title">Wellcome To Our</h6>
                                <h1 class="main-slider-title">Holly Hotel</h1>
                                <div class="main-slider-text">Rooms And Suites Inspira & tionration</div>
                                <div class="link-box">
                                    <a href="about.html" class="btn-one">Discover More <span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url(assets/images/main-slider/banner-2.jpg);">
                    <div class="content-outer">
                        <div class="content-box text-center justify-content-center">
                            <div class="inner">
                                <h6 class="main-slider-sub-title">Wellcome To Our</h6>
                                <h1 class="main-slider-title">Holly Hotel</h1>
                                <div class="main-slider-text">Rooms And Suites Inspira & tionration</div>
                                <div class="link-box">
                                    <a href="about.html" class="btn-one">Discover More <span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-slider-nav style-one">
            <div class="banner-slider-control banner-slider-button-prev"><span><i class="fal fa-angle-right"></i></span></div>
            <div class="banner-slider-control banner-slider-button-next"><span><i class="fal fa-angle-right"></i></span> </div>
        </div>
    </section>
    <!-- End Bnner Section -->

    <section class="booking-form-section">
        <div class="auto-container">
            <!--START FORM-->
            <form method="get">    
                <div class="row">                    
                    <div class="col-lg-3 col-md-6 booking-form-column">
                        <!--check in/out-->
                        <div class="">
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

                    <div class="col-lg-3 col-md-6 booking-form-column">
                        <div class="">        
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
                    <div class="col-lg-3 col-md-6 booking-form-column">
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
                    <div class="col-lg-3 col-md-6 booking-form-column">
                        <div class="booking-form-submit-btn">
                            <div class="booking-form-submit-btn-label">Have a Promotion Code?</div>
                            <button class="btn-one">Check Availability + <span></span></button>
                        </div>
                    </div>
                </div>
            </form>
            <!--END FORM-->
        </div>
    </section>

    <!-- about section -->
    <section class="about-one-section">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about-one-rating">4.02 <i class="fas fa-star"></i></div>
                    <h2 class="about-one-title wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">Our Resort History.</h2>
                    <h4 class="about-one-title-two wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">Nullam quis justo posuere, feugiat nisi ac, vulputate ante. Phasellus sit amet accumsan turpis.</h4>
                    <div class="about-one-text wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">Phasellus vel accumsan odio. Sedghk ligula tellus, vestibulum eu est in, fermentum malesuada orci. Maecenas sagittis justo sit amesdrt felis tincidunt dictum. Suspendisse potenti. Sed vehicula leo non augue mollis, ac auctor magna bibendum. Pellente habitant morbi tristique senectus et netus et males fames ac turpis egestas. In eget fringilla masgdsa. Mkrgorbi vulputate augue id vulputate congue sollicitudi tristique.</div>
                    <div class="about-one-signature wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="assets/images/resource/signature.png" alt=""></div>
                </div>
                <div class="col-lg-7">
                    <div class="about-one-image-box">
                        <div class="about-one-image wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"><div class="img_hover_1"><img src="assets/images/resource/about-1.jpg" alt=""></div></div>
                        <div class="about-one-image-two"><div class="scroll-rotate"><img src="assets/images/resource/circle-text.png" alt=""></div></div>                        
                    </div>
                </div>
            </div>
            <div class="bottom-text"><h4 class="about-one-text-two">Discover Our About History.</h4></div>
        </div>
    </section>

    <!-- services -->
    <section class="services-one-section mx-70">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-one-block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <h4 class="service-one-title">Restaurant</h4>
                        <div class="service-one-text">Nam ornare metus vel tempor tincidunt. Duis erat erat, sagittis nec euismod eu, hendrerit in justo. Nulla euismod, sapien ut viverra rutrum, leo velit.</div>
                        <div class="read-more">
                            <a href="#" class="reader-more-link">Read More +</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-one-block wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <h4 class="service-one-title">Travel Fast</h4>
                        <div class="service-one-text">Nam ornare metus vel tempor tincidunt. Duis erat erat, sagittis nec euismod eu, hendrerit in justo. Nulla euismod, sapien ut viverra rutrum, leo velit.</div>
                        <div class="read-more">
                            <a href="#" class="reader-more-link">Read More +</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-one-block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <h4 class="service-one-title">Premium</h4>
                        <div class="service-one-text">Nam ornare metus vel tempor tincidunt. Duis erat erat, sagittis nec euismod eu, hendrerit in justo. Nulla euismod, sapien ut viverra rutrum, leo velit.</div>
                        <div class="read-more">
                            <a href="#" class="reader-more-link">Read More +</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- gallery section -->
    <section class="gallery-one-section mx-70">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="title-box">
                        <div class="sub-title">Discover Our Rooms</div>
                        <h2 class="sec-title">Luxury Interior</h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <!--Filter-->
                    <div class="filters">
                        <ul class="filter-tabs filter-btns">
                            <li class="filter active" data-role="button" data-filter=".all">All</li>
                            <li class="filter" data-role="button" data-filter=".cat-1">Luxury</li>
                            <li class="filter" data-role="button" data-filter=".cat-2">Family</li>
                            <li class="filter" data-role="button" data-filter=".cat-3">Double Bed</li>
                            <li class="filter" data-role="button" data-filter=".cat-4">Relax</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="full-container">  
            <!--Sortable Galery-->
            <div class="sortable-masonry">
                
                <div class="items-container row">
                    <div class="gallery-block-one masonry-item all cat-1 col-lg-4 col-md-6">
                        <div class="gallery-one-box">
                            <div class="gallery-one-image">
                                <img src="assets/images/gallery/gallery-1.jpg" alt="">
                            </div>
                            <div class="gallery-one-content">
                                <h4 class="gallery-one-title">Family Room</h4>
                                <div class="gallery-one-text">Starting From $19.00 /Night <span class="gallery-one-rating">4.05 <i class="far fa-star"></i></span></div>
                                <div class="gallery-one-like"><i class="far fa-heart"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-block-one masonry-item all cat-2 col-lg-8 col-md-12">
                        <div class="gallery-one-box">
                            <div class="gallery-one-image">
                                <img src="assets/images/gallery/gallery-2.jpg" alt="">
                            </div>
                            <div class="gallery-one-content">
                                <h4 class="gallery-one-title">Family Room</h4>
                                <div class="gallery-one-text">Starting From $19.00 /Night <span class="gallery-one-rating">4.05 <i class="far fa-star"></i></span></div>
                                <div class="gallery-one-like"><i class="far fa-heart"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-block-one masonry-item all cat-3 col-lg-4 col-md-6">
                        <div class="gallery-one-box">
                            <div class="gallery-one-image">
                                <img src="assets/images/gallery/gallery-3.jpg" alt="">
                            </div>
                            <div class="gallery-one-content">
                                <h4 class="gallery-one-title">Family Room</h4>
                                <div class="gallery-one-text">Starting From $19.00 /Night <span class="gallery-one-rating">4.05 <i class="far fa-star"></i></span></div>
                                <div class="gallery-one-like"><i class="far fa-heart"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-block-one masonry-item all cat-4 col-lg-4 col-md-6">
                        <div class="gallery-one-box">
                            <div class="gallery-one-image">
                                <img src="assets/images/gallery/gallery-4.jpg" alt="">
                            </div>
                            <div class="gallery-one-content">
                                <h4 class="gallery-one-title">Family Room</h4>
                                <div class="gallery-one-text">Starting From $19.00 /Night <span class="gallery-one-rating">4.05 <i class="far fa-star"></i></span></div>
                                <div class="gallery-one-like"><i class="far fa-heart"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-block-one masonry-item all cat-2 col-lg-4 col-md-6">
                        <div class="gallery-one-box">
                            <div class="gallery-one-image">
                                <img src="assets/images/gallery/gallery-5.jpg" alt="">
                            </div>
                            <div class="gallery-one-content">
                                <h4 class="gallery-one-title">Family Room</h4>
                                <div class="gallery-one-text">Starting From $19.00 /Night <span class="gallery-one-rating">4.05 <i class="far fa-star"></i></span></div>
                                <div class="gallery-one-like"><i class="far fa-heart"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-one-view-all-btn text-center mt-40 mb-30"><a href="gallery.html" class="btn-one large-btn">View All Luxury + <span></span></a></div>
        </div>
    </section>

    <!-- Video section -->
    <section class="video-section pt-0">
        <div class="auto-container">
            <div class="text-center">
                <span class="title-rating">4.05 <i class="far fa-star"></i></span>
                <h2 class="video-one-title"><span class="theme-color">Best Western Plus Hotel </span> Maple Leaf To provide you with a <br> better experience, we use cookies and related tracking <br> technologies on this website.</h2>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="video-one-text wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        Nam ornare metus vel tempor tincidunt. Duis erat erat, sagi euismod eu, hendrerit in justo. Nulla euismod, sapien viver, leo velit pellentesque risus, ac tempus velit turpis eget mag ipsum dolor sit amet, adipiscing elit.
                    </div>
                    <div class="video-slider wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="theme_carousel_wrapper">
                            <div class="video_carousel owl-theme owl-carousel owl-dot-style-one" data-options='{"loop": true, "center": false, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "mouseDrag": false, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "480" :{ "items" : "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" } , "992":{ "items" : "1" }, "1200":{ "items" : "1" }}}'>
                                <div class="video-image">
                                    <img src="assets/images/resource/image-1.jpg" alt="">
                                    <div class="video-box">
                                        <div class="video-btn"><a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="overlay-link play-now ripple" data-fancybox="gallery" data-caption=""><i class="fas fa-play"></i></a></div>
                                    </div>
                                </div>
                                <div class="video-image">
                                    <img src="assets/images/resource/image-1.jpg" alt="">
                                    <div class="video-box">
                                        <div class="video-btn"><a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="overlay-link play-now ripple" data-fancybox="gallery" data-caption=""><i class="fas fa-play"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-box">
                                <div class="video-one-slider-nav theme-carousel-btn">
                                    <span class="carousel-btn left-btn"><i class="fal fa-angle-left"></i></span> /
                                    <span class="carousel-btn right-btn"><i class="fal fa-angle-right"></i></span>
                                </div>
                                <h4 class="video-one-nav-text">Next Hotel Videos</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="video-one-text wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">Nam ornare metus vel tempor tincidunt. Duis erat erat, sagittis nec euismod eu, hendrerit in justo. Nulla euismod, sapien ut viverra rutrum, leo velit pellentesque risus, ac tempus velit turpis eget magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultrices lectus vitae risus sagittis scelerisque. Morbi auctor, odio vel mattis pretium, urna erat ultricies nunc, nec molestie turpis mi vel ex.</div>
                    <div class="video-one-image wow fadeInRight" data-wow-delay="500ms" data-wow-duration="1500ms"><div class="img_hover_3"><img src="assets/images/resource/image-2.jpg" alt=""></div></div>
                </div>
            </div>
        </div>
    </section>

    <!-- funfact section -->
    <section class="funfact-section pt-0">
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

    <!-- testimonials -->
    <section class="testimonials-one-section pt-0 pb-0">        
        <div class="auto-container">
            <div class="testimonial-one-wrapper-box">
                <div class="testimonial-one-big-title" data-parallax='{"x": -50}'>Testimonials</div>
                <div class="testimonial-one-title">What Client Says?</div>
                <div class="testimonial-one-slider">
                    <div class="theme_carousel owl-theme owl-carousel owl-dot-style-one" data-options='{"loop": true, "center": false, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "mouseDrag": false, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "480" :{ "items" : "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" } , "992":{ "items" : "1" }, "1200":{ "items" : "1" }}}'>
                        <div class="testimonial-one-slider-item style-two">
                            <div class="testimonial-one-text">Pellentesque vestibulum massa ac posuere pulvinar. Cras ultrices vitae erat in fringilla. Nullam sodales nunc id augue malesuada efficitur. Cras eget cursus justo. Sed quis imperdiet libero, eget eleifend augue. Nulla lectus urna, tristique porta purus id, rhoncus placerat nisl. </div>
                            <div class="testimonial-one-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="testimonial-one-author-info">
                                <div class="testimonial-one-author-logo"><img src="assets/images/resource/client-logo.png" alt=""></div>
                                <div class="testimonial-one-author-name">Md.Towkibur Rahman</div>
                                <div class="testimonial-one-designation">Designer</div>
                            </div>
                        </div>
                        <div class="testimonial-one-slider-item style-two">
                            <div class="testimonial-one-text">Pellentesque vestibulum massa ac posuere pulvinar. Cras ultrices vitae erat in fringilla. Nullam sodales nunc id augue malesuada efficitur. Cras eget cursus justo. Sed quis imperdiet libero, eget eleifend augue. Nulla lectus urna, tristique porta purus id, rhoncus placerat nisl. </div>
                            <div class="testimonial-one-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="testimonial-one-author-info">
                                <div class="testimonial-one-author-logo"><img src="assets/images/resource/client-logo.png" alt=""></div>
                                <div class="testimonial-one-author-name">Md.Towkibur Rahman</div>
                                <div class="testimonial-one-designation">Designer</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="news-one-section mx-70">
        <div class="auto-container">
            <div class="title-box text-center">
                <div class="sub-title">Our Blog</div>
                <h2 class="sec-title">Latest News</h2>
            </div>
            <div class="theme_carousel owl-theme owl-carousel owl-dot-style-one" data-options='{"loop": true, "center": false, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "mouseDrag": false, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "480" :{ "items" : "1" }, "768" :{ "items" : "2" }, "992" :{ "items" : "3" } , "1200":{ "items" : "4" }, "1600":{ "items" : "5" }}}'>
                <div class="news-one-block">
                    <div class="news-one-image"><div class="img_hover_3"><a href="blog-details.html"><img src="assets/images/resource/news-1.jpg" alt=""></a></div></div>
                    <div class="news-one-content-bottom">
                        <div class="news-one-post-meta">Nov 8, 2022 / By Hotel</div>
                        <h4 class="news-one-title"><a href="blog-details.html">Vessi Founder Mikaella Go’s Guide to Vancouver</a></h4>
                        <div class="read-more">
                            <a href="blog-details.html" class="reader-more-link">Read More +</a>
                        </div>
                    </div>
                </div>
                <div class="news-one-block">
                    <div class="news-one-image"><div class="img_hover_3"><a href="blog-details.html"><img src="assets/images/resource/news-2.jpg" alt=""></a></div></div>
                    <div class="news-one-content-bottom">
                        <div class="news-one-post-meta">Nov 8, 2022 / By Hotel</div>
                        <h4 class="news-one-title"><a href="blog-details.html">Vessi Founder Mikaella Go’s Guide to Vancouver</a></h4>
                        <div class="read-more">
                            <a href="blog-details.html" class="reader-more-link">Read More +</a>
                        </div>
                    </div>
                </div>
                <div class="news-one-block">
                    <div class="news-one-image"><div class="img_hover_3"><a href="blog-details.html"><img src="assets/images/resource/news-3.jpg" alt=""></a></div></div>
                    <div class="news-one-content-bottom">
                        <div class="news-one-post-meta">Nov 8, 2022 / By Hotel</div>
                        <h4 class="news-one-title"><a href="blog-details.html">Vessi Founder Mikaella Go’s Guide to Vancouver</a></h4>
                        <div class="read-more">
                            <a href="blog-details.html" class="reader-more-link">Read More +</a>
                        </div>
                    </div>
                </div>
                <div class="news-one-block">
                    <div class="news-one-image"><div class="img_hover_3"><a href="blog-details.html"><img src="assets/images/resource/news-4.jpg" alt=""></a></div></div>
                    <div class="news-one-content-bottom">
                        <div class="news-one-post-meta">Nov 8, 2022 / By Hotel</div>
                        <h4 class="news-one-title"><a href="blog-details.html">Vessi Founder Mikaella Go’s Guide to Vancouver</a></h4>
                        <div class="read-more">
                            <a href="blog-details.html" class="reader-more-link">Read More +</a>
                        </div>
                    </div>
                </div>
                <div class="news-one-block">
                    <div class="news-one-image"><div class="img_hover_3"><a href="blog-details.html"><img src="assets/images/resource/news-5.jpg" alt=""></a></div></div>
                    <div class="news-one-content-bottom">
                        <div class="news-one-post-meta">Nov 8, 2022 / By Hotel</div>
                        <h4 class="news-one-title"><a href="blog-details.html">Vessi Founder Mikaella Go’s Guide to Vancouver</a></h4>
                        <div class="read-more">
                            <a href="blog-details.html" class="reader-more-link">Read More +</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Logo -->
    <section class="clients-logo-one-section pt-0">
        <div class="auto-container">
            <div class="row">
                <div class="client-logo-one-column col-lg-3 col-md-4 col-sm-6">
                    <div class="client-logo-one-image wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="assets/images/client-logo/client-logo-1.png" alt=""></div>
                </div>
                <div class="client-logo-one-column col-lg-3 col-md-4 col-sm-6">
                    <div class="client-logo-one-image wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="assets/images/client-logo/client-logo-2.png" alt=""></div>
                </div>
                <div class="client-logo-one-column col-lg-3 col-md-4 col-sm-6">
                    <div class="client-logo-one-image wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="assets/images/client-logo/client-logo-3.png" alt=""></div>
                </div>
                <div class="client-logo-one-column col-lg-3 col-md-4 col-sm-6">
                    <div class="client-logo-one-image wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="assets/images/client-logo/client-logo-4.png" alt=""></div>
                </div>
                <div class="client-logo-one-column col-lg-3 col-md-4 col-sm-6">
                    <div class="client-logo-one-image wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="assets/images/client-logo/client-logo-5.png" alt=""></div>
                </div>
                <div class="client-logo-one-column col-lg-3 col-md-4 col-sm-6">
                    <div class="client-logo-one-image wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="assets/images/client-logo/client-logo-5.png" alt=""></div>
                </div>
                <div class="client-logo-one-column col-lg-3 col-md-4 col-sm-6">
                    <div class="client-logo-one-image wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="assets/images/client-logo/client-logo-6.png" alt=""></div>
                </div>
                <div class="client-logo-one-column col-lg-3 col-md-4 col-sm-6">
                    <div class="client-logo-one-image wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="assets/images/client-logo/client-logo-7.png" alt=""></div>
                </div>
                <div class="client-logo-one-column col-lg-3 col-md-4 col-sm-6">
                    <div class="client-logo-one-image wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="assets/images/client-logo/client-logo-8.png" alt=""></div>
                </div>
                <div class="client-logo-one-column col-lg-3 col-md-4 col-sm-6">
                    <div class="client-logo-one-image wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="assets/images/client-logo/client-logo-1.png" alt=""></div>
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
                            <div class="image"><a href="index.html"><img src="assets/images/footer-1.png" alt=""></a></div>
                        </div>
                    </div>
                    <div class="column col-lg-3 col-md-6">
                        <div class="widget about-widget">
                            <h3 class="widget-title">About Us</h3>
                            <div class="widget-content">
                                <div class="about-wdget-text">Pellentque vestilum massa <br> posuere pulvinar. </div> 
                                <ul>
                                    <li>Email. <a href="mailto:info@holly.com">info@holly.com</a></li>
                                    <li>Phone. <a href="tel:+5662220033">+ 566 222 00 33</a></li>
                                </ul>                                      
                            </div>
                        </div>
                    </div>
                    <div class="column col-lg-3 col-md-6">
                        <div class="widget links-widget">    
                            <h3 class="widget-title">Top Links</h3>                 
                            <div class="widget-content">
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="column col-lg-3 col-md-6">
                        <div class="widget contact-widget">
                            <h2 class="widget-title">Melbourne, <span>Australia</span></h2>
                            <div class="contact-widget-text">269 King Str, 05th Floor, Utral Hosue Building, Melbourne, VIC 3000, Australia.</div>
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
                        Copyrigh ©holly.hotel All Rights Reserved
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top"><a href="# " class="back-to-top " data-wow-duration="1.0s " data-wow-delay="1.0s "><i class="fa fa-angle-up "></i></a></div>

