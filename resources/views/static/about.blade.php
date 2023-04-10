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
                <h1 class="page-title">A propos</h1>
                <div class="page-title-one-desc">Chambres et Suites et Destinations vers lesquelles vous pouvez voyager maintenant.</div>
                <div class="page-title-one-bread-crumb-area">
                    <ul class="page-title-one-bread-crumb">
                        <li><a href="{{route('accueil')}}">   Suites</a></li>
                        <li>A propos</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Video section -->
    <section class="video-section pb-0">
        <div class="auto-container">
            <div class="video-slider wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="theme_carousel_wrapper">
                    <div class="video_carousel owl-theme owl-carousel owl-dot-style-one" data-options='{"loop": true, "center": false, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "480" :{ "items" : "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" } , "992":{ "items" : "1" }, "1200":{ "items" : "1" }}}'>
                        <div class="video-image">
                            <img src="assets/images/resource/image-3.jpg" alt="">
                            <div class="video-box">
                                <div class="video-btn"><a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="overlay-link play-now ripple" data-fancybox="gallery" data-caption=""><i class="fas fa-play"></i></a></div>
                            </div>
                        </div>
                        <div class="video-image">
                            <img src="assets/images/resource/image-3.jpg" alt="">
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
                        <h4 class="video-one-nav-text">Video suivante</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-one-section style-three">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="about-one-wrapper-two text-center">
                        <div class="about-one-image-five"><div class="wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms"><img src="assets/images/resource/circle-text-two.png" alt=""></div></div>
                        <div class="about-one-rating">4.02 <i class="fas fa-star"></i></div>
                        <h2 class="about-one-title wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">Notre Histoire.</h2>
                        <h4 class="about-one-title-two wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">Une Histoire de confiance <br>Nous choissir c'est s'assurer le confort</h4>
                        <div class="about-one-text mb-50 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">Bienvenue à notre hôtel ! Nous sommes heureux de vous accueillir dans notre établissement qui allie charme, confort et convivialité.

                            Nous sommes fiers de faire partie de cette communauté et de partager avec nos clients l'histoire et la beauté de cette région.
                            
                            Nos chambres ont été récemment rénovées pour offrir un confort moderne tout en conservant le charme de l'époque. Nous sommes convaincus que vous vous sentirez comme chez vous dans nos chambres spacieuses et élégantes.
                            
                            Que vous soyez en voyage d'affaires, en vacances en famille ou en escapade romantique, notre hôtel est l'endroit idéal pour séjourner. Nous offrons une gamme de services et d'équipements pour répondre à tous vos besoins.
                            
                            Nous sommes impatients de vous accueillir et de vous offrir une expérience mémorable dans notre hôtel.</div>
                        <div class="about-one-signature mb-50 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="assets/images/resource/signature.png" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="about-one-image-six img_hover_3"><a  class="lightbox-image link" data-fancybox="gallery" href="assets/images/resource/about-3.jpg"><img src="assets/images/resource/about-3.jpg" alt=""></a></div>
                </div>
                <div class="col-md-4">
                    <div class="about-one-image-six img_hover_3"><a  class="lightbox-image link" data-fancybox="gallery" href="assets/images/resource/about-3.jpg"><img src="assets/images/resource/about-4.jpg" alt=""></a></div>
                </div>
                <div class="col-md-4">
                    <div class="about-one-image-six img_hover_3"><a  class="lightbox-image link" data-fancybox="gallery" href="assets/images/resource/about-3.jpg"><img src="assets/images/resource/about-5.jpg" alt=""></a></div>
                </div>
            </div>
        </div>
    </section>

    <!-- services -->
    <section class="services-one-section mx-70">
       
    </section>

    <!-- CTA section -->
    <section class="cta-one-section">
        <div class="cta-one-bg" data-parallax='{"y": 50}' style="background-image: url(assets/images/background/bg-2.jpg);"></div>
        <div class="auto-container">
            <div class="cta-one-logo"><img src="assets/images/logo-light-2.png" alt=""></div>
            <h2 class="cta-one-title">Un cadre de repos et détente <br> Visitez notre Hotel.</h2>
        </div>
    </section>

    <!-- testimonials -->
    <section class="testimonials-one-section">        
        <div class="auto-container">
            <div class="title-box text-center">
                <div class="sub-title">Temoignages</div>
                <h2 class="sec-title">Avis de nos clients</h2>
            </div>
            <div class="testimonial-one-wrapper-box style-two">
                <div class="testimonial-one-slider">
                    <div class="theme_carousel owl-theme owl-carousel owl-dot-style-one" data-options='{"loop": true, "center": false, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "mouseDrag": false, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "480" :{ "items" : "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "2" } , "992":{ "items" : "3" }, "1200":{ "items" : "3" }}}'>
                        <div class="testimonial-one-slider-item">
                            <div class="testimonial-one-text"> un lieu charmant <br> un lieu charmant <br> un lieu charmant<br> un lieu charmant <br> un lieu charmant  </div>
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
                        <div class="testimonial-one-slider-item">
                            <div class="testimonial-one-text">Service impécable <br> Service impécable <br> Service impécable <br>   Service impécable <br> Service impécable </div>
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
                        <div class="testimonial-one-slider-item">
                            <div class="testimonial-one-text">Une ambiance chaleureuse <br> Une ambiance chaleureuse <br> Une ambiance chaleureuse <br>   Une ambiance chaleureuse <br>  </div>
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

    <!-- funfact section -->
    <section class="funfact-section pt-0">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="funfact-one">
                        <div class="count-outer count-box">
                            <span class="funfact-one-count-text count-text" data-speed="3000" data-stop="23">0</span>
                        </div>
                        <div class="funfact-one-title"> Offres Spa</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="funfact-one">
                        <div class="count-outer count-box">
                            <span class="funfact-one-count-text count-text" data-speed="3000" data-stop="3">0</span>
                        </div>
                        <div class="funfact-one-title">Total suites</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="funfact-one">
                        <div class="count-outer count-box">
                            <span class="funfact-one-count-text count-text" data-speed="3000" data-stop="40">0</span>
                        </div>
                        <div class="funfact-one-title">Total chambre</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="funfact-one">
                        <div class="count-outer count-box">
                            <span class="funfact-one-count-text count-text" data-speed="8" data-stop="20">0</span><span></span>
                        </div>
                        <div class="funfact-one-title">Clients satisfaits</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Clients Logo -->
    <section class="clients-logo-one-section style-two pt-0">
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














