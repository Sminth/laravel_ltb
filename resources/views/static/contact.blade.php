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
    <section class="page-title-one style-four">
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d24209.578954803852!2d-75.546666!3d40.66962!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x89c437f153223255%3A0x641522b12db2d4d!2s4249%20Reliance%20St%2C%20Whitehall%2C%20PA%2018052%2C%20USA!3m2!1d40.6720896!2d-75.53357319999999!5e0!3m2!1sen!2sbd!4v1646808332816!5m2!1sen!2sbd" width="600" height="900" frameborder="0" style="border:0; width: 100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="auto-container">
            <div class="page-title-one-content">
                <h1 class="page-title">Contactez Nous</h1>
                <div class="page-title-one-desc">Tout nos contacts</div>
                <div class="page-title-one-bread-crumb-area style-two">
                    <ul class="page-title-one-bread-crumb">
                        <li><a href="{{route('accueil')}}">Acceuil</a></li>
                        <li>Contact </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact Form section -->
    <section class="contact-form-section">
       <div class="auto-container">  
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-info-one">
                        <h3 class="contact-info-one-title">Nos Contacts</h3>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="contact-info-one-inner-box">
                                    <div class="contact-info-one-label">Addresse</div>
                                    <h4 class="contact-info-one-value">Bonoumin</h4> <br> Abidjan CIV.</h4>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="contact-info-one-inner-box">
                                    <div class="contact-info-one-label">E-mail</div>
                                    <h4 class="contact-info-one-value"><a href="mailto:example@info.com">example@info.com</a></h4>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="contact-info-one-inner-box">
                                    <div class="contact-info-one-label">Telephone</div>
                                    <h4 class="contact-info-one-value"><a href="tel:+1(246)3330791">(+************)</a> <br> <a href="tel:+1(246)3330791">(+**********)</a></h4>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="contact-info-one-inner-box">
                                    <div class="contact-info-one-label">Sociaux</div>
                                    <ul class="contact-info-one-social-links">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Contact Form-->
                    <h3 class="contact-form-one-title">Laisser un commentaire</h3>
                    <div class="contact-form-one-desc">Morbi et sagittis dui, sed fermentum ante. Pellentesque molestie sit amet dolor vel euismod. </div>
                    <div class="contact-form">
                        <form method="post" action="inc/sendemail.php" id="contact-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="contact-form-one-label">Votre nom</label>
                                    <input type="text" class="form-control contact-form-one-input" name="form_name" value="" placeholder="Votre Nom" required>
                                </div>                      
                                <div class="form-group col-md-6">
                                    <label class="contact-form-one-label">Votre email</label>
                                    <input type="email" class="form-control contact-form-one-input" name="email" value="" placeholder="Votre email" required>
                                </div>                        
                                <div class="form-group col-md-6">
                                    <label class="contact-form-one-label">Votre numero</label>
                                    <input type="text" class="form-control contact-form-one-input" name="form_phone" value="" placeholder="Votre numero" required>
                                </div>                        
                                <div class="form-group col-md-6">
                                    <label class="contact-form-one-label">Sujet</label>
                                    <input type="text" class="form-control contact-form-one-input" name="form_subject" value="" placeholder="Sujet" required>
                                </div>                        
                                <div class="form-group col-md-12">
                                    <label class="contact-form-one-label">Votre message</label>
                                    <textarea name="form_message" class="form-control contact-form-one-input" placeholder="Votre message"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button class="btn-one" type="submit" data-loading-text="Please wait...">Envoyer<span></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-author-one">
                        <div class="contact-author-thumb"><img src="assets/images/resource/image-5.jpg" alt=""></div>
                        <div class="contact-author-name">Sminth Chris</div>
                        <div class="contact-author-desc">Pellentesque vestibulum massa ac posuere pulvinar. Cras ultrices vitae erat in fringilla. Nullam sodales nunc id augue malesuada</div>
                        <div class="contact-author-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <ul class="contact-author-social-links">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
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





























