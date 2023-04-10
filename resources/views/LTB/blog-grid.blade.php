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
                <h1 class="page-title">Nos Activités</h1>
                <div class="page-title-one-desc">Les nouvelles concernat les activités de l'hotel</div>
                <div class="page-title-one-bread-crumb-area">
                    <ul class="page-title-one-bread-crumb">
                        <li><a href="{{route('accueil')}}">Acceuil</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- news section -->
    <div class="blog-page">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="news-one-block">
                        <div class="news-one-image"><div class="img_hover_3"><a href="{{route('Blogspecified', ['id'=>2])}}"><img src="assets/images/resource/news-18.jpg" alt=""></a></div></div>
                        <div class="news-one-content-bottom">
                            <div class="news-one-post-meta">Nov 8, 2022 / By Sminth</div>
                            <h4 class="news-one-title"><a href="{{route('Blogspecified', ['id'=>2])}}">Vessi Founder Mikaella Go’s Guide to Vancouver</a></h4>
                            <div class="read-more">
                                <a href="{{route('Blogspecified', ['id'=>2])}}" class="reader-more-link">Lire +</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="news-one-block">
                        <div class="news-one-image"><div class="img_hover_3"><a href="{{route('Blogspecified', ['id'=>2])}}"><img src="assets/images/resource/news-18.jpg" alt=""></a></div></div>
                        <div class="news-one-content-bottom">
                            <div class="news-one-post-meta">Nov 8, 2022 / By Sminth</div>
                            <h4 class="news-one-title"><a href="{{route('Blogspecified', ['id'=>2])}}">Vessi Founder Mikaella Go’s Guide to Vancouver</a></h4>
                            <div class="read-more">
                                <a href="{{route('Blogspecified', ['id'=>2])}}" class="reader-more-link">Lire +</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="news-one-block">
                        <div class="news-one-image"><div class="img_hover_3"><a href="{{route('Blogspecified', ['id'=>2])}}"><img src="assets/images/resource/news-18.jpg" alt=""></a></div></div>
                        <div class="news-one-content-bottom">
                            <div class="news-one-post-meta">Nov 8, 2022 / By Sminth</div>
                            <h4 class="news-one-title"><a href="{{route('Blogspecified', ['id'=>2])}}">Vessi Founder Mikaella Go’s Guide to Vancouver</a></h4>
                            <div class="read-more">
                                <a href="{{route('Blogspecified', ['id'=>2])}}" class="reader-more-link">Lire +</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="news-one-block">
                        <div class="news-one-image"><div class="img_hover_3"><a href="{{route('Blogspecified', ['id'=>2])}}"><img src="assets/images/resource/news-18.jpg" alt=""></a></div></div>
                        <div class="news-one-content-bottom">
                            <div class="news-one-post-meta">Nov 8, 2022 / By Sminth</div>
                            <h4 class="news-one-title"><a href="{{route('Blogspecified', ['id'=>2])}}">Vessi Founder Mikaella Go’s Guide to Vancouver</a></h4>
                            <div class="read-more">
                                <a href="{{route('Blogspecified', ['id'=>2])}}" class="reader-more-link">Lire +</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="news-one-block">
                        <div class="news-one-image"><div class="img_hover_3"><a href="{{route('Blogspecified', ['id'=>2])}}"><img src="assets/images/resource/news-18.jpg" alt=""></a></div></div>
                        <div class="news-one-content-bottom">
                            <div class="news-one-post-meta">Nov 8, 2022 / By Sminth</div>
                            <h4 class="news-one-title"><a href="{{route('Blogspecified', ['id'=>2])}}">Vessi Founder Mikaella Go’s Guide to Vancouver</a></h4>
                            <div class="read-more">
                                <a href="{{route('Blogspecified', ['id'=>2])}}" class="reader-more-link">Lire +</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="news-one-block">
                        <div class="news-one-image"><div class="img_hover_3"><a href="{{route('Blogspecified', ['id'=>2])}}"><img src="assets/images/resource/news-18.jpg" alt=""></a></div></div>
                        <div class="news-one-content-bottom">
                            <div class="news-one-post-meta">Nov 8, 2022 / By Sminth</div>
                            <h4 class="news-one-title"><a href="{{route('Blogspecified', ['id'=>2])}}">Vessi Founder Mikaella Go’s Guide to Vancouver</a></h4>
                            <div class="read-more">
                                <a href="{{route('Blogspecified', ['id'=>2])}}" class="reader-more-link">Lire +</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="news-one-block">
                        <div class="news-one-image"><div class="img_hover_3"><a href="{{route('Blogspecified', ['id'=>2])}}"><img src="assets/images/resource/news-18.jpg" alt=""></a></div></div>
                        <div class="news-one-content-bottom">
                            <div class="news-one-post-meta">Nov 8, 2022 / By Sminth</div>
                            <h4 class="news-one-title"><a href="{{route('Blogspecified', ['id'=>2])}}">Vessi Founder Mikaella Go’s Guide to Vancouver</a></h4>
                            <div class="read-more">
                                <a href="{{route('Blogspecified', ['id'=>2])}}" class="reader-more-link">Lire +</a>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-4 col-md-6">
                    <div class="news-one-block">
                        <div class="news-one-image"><div class="img_hover_3"><a href="{{route('Blogspecified', ['id'=>2])}}"><img src="assets/images/resource/news-18.jpg" alt=""></a></div></div>
                        <div class="news-one-content-bottom">
                            <div class="news-one-post-meta">Nov 8, 2022 / By Sminth</div>
                            <h4 class="news-one-title"><a href="{{route('Blogspecified', ['id'=>2])}}">Vessi Founder Mikaella Go’s Guide to Vancouver</a></h4>
                            <div class="read-more">
                                <a href="{{route('Blogspecified', ['id'=>2])}}" class="reader-more-link">Lire +</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="news-one-block">
                        <div class="news-one-image"><div class="img_hover_3"><a href="{{route('Blogspecified', ['id'=>2])}}"><img src="assets/images/resource/news-18.jpg" alt=""></a></div></div>
                        <div class="news-one-content-bottom">
                            <div class="news-one-post-meta">Nov 8, 2022 / By Sminth</div>
                            <h4 class="news-one-title"><a href="{{route('Blogspecified', ['id'=>2])}}">Vessi Founder Mikaella Go’s Guide to Vancouver</a></h4>
                            <div class="read-more">
                                <a href="{{route('Blogspecified', ['id'=>2])}}" class="reader-more-link">Lire +</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post-pagination">
                <ul class="clearfix">
                    <li><a href="#"><span class="fas fa-angle-left"></span></a></li>
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><span class="fas fa-angle-right"></span></a></li>
                </ul>
            </div>
        </div>
    </div>

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




























