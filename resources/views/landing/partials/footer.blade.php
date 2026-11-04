<footer class="site-footer">
            <div class="site-footer__top">
                <div class="container">
                    <div class="site-footer__top-inner">
                        <div class="row">
                            <div class="col-xl-4 wow fadeInUp" data-wow-delay="100ms">
                                <div class="footer-widget__about">
                                    <div class="footer-widget__about-logo">
                                        <a href="{{ route('landing.home') }}"><img src="{{ asset('landing-assets/images/resources/logo-2.png') }}" alt=""></a>
                                    </div>
                                    <p class="footer-widget__about-text">We provide a range of professional skincare
                                        <br> treatments designed to improve your skin’s <br> health and natural beauty.
                                    </p>
                                    <div class="footer-widget__newsletter-form-box">
                                        <form class="footer-widget__newsletter-form contact-form-validated"
                                            action="assets/inc/sendemail.php" method="POST" novalidate="novalidate">
                                            <div class="footer-widget__newsletter-form-input-box">
                                                <input type="email" placeholder="Your Email address" name="email">
                                            </div>
                                            <button type="submit" class="footer-widget__newsletter-btn">
                                                <span><i class="icon-paper-plane"></i></span>
                                            </button>
                                            <div class="result"></div>
                                        </form>
                                    </div>
                                    <div class="footer-widget__social">
                                        <a href="https://www.facebook.com/"><span class="fab fa-facebook-f"></span></a>
                                        <a href="https://x.com/"><span class="fab fa-twitter"></span></a>
                                        <a href="https://www.instagram.com/?hl=en"><span
                                                class="fab fa-instagram"></span></a>
                                        <a href="https://www.pinterest.com/"><span
                                                class="fab fa-pinterest-p"></span></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-8">
                                <div class="site-footer__top-right">
                                    <div class="site-footer__top-right-top">
                                        <div class="site-footer__contact-info">
                                            <ul class="site-footer__contact-info-list">
                                                <li>
                                                    <div class="icon-box">
                                                        <span class="icon-telephone"></span>
                                                    </div>
                                                    <div class="content-box">
                                                        <h3>Urgent Support?</h3>
                                                        <p><a href="tel:123456789">+1 (246) 333-099</a></p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="icon-box">
                                                        <span class="icon-email"></span>
                                                    </div>
                                                    <div class="content-box">
                                                        <h3>Send us a Mail</h3>
                                                        <p><a href="mailto:info@domain.com">info@domain.com</a></p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="icon-box">
                                                        <span class="icon-clock"></span>
                                                    </div>
                                                    <div class="content-box">
                                                        <h3>Opening Time</h3>
                                                        <p><a href="tel:123456789">Mon -Sat: 10:00 - 17:00</a></p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                            <div class="footer-widget__links">
                                                <h4 class="footer-widget__title">Quick links</h4>
                                                <ul class="footer-widget__links-list list-unstyled">
                                                    <li><span class="icon-chevron"></span><a href="{{ route('landing.home') }}">Home</a>
                                                    </li>
                                                    <li><span class="icon-chevron"></span><a href="{{ route('landing.about') }}">About
                                                            Us</a>
                                                    </li>
                                                    <li><span class="icon-chevron"></span><a href="services.html">Our
                                                            Services</a>
                                                    </li>
                                                    <li><span class="icon-chevron"></span><a
                                                            href="{{ route('landing.products') }}">Products</a>
                                                    </li>
                                                    <li><span class="icon-chevron"></span><a href="{{ route('landing.blog') }}">Latest
                                                            Blog</a></li>
                                                    <li><span class="icon-chevron"></span><a href="contact.html">Contact
                                                            Us</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                            <div class="footer-widget__links services">
                                                <h4 class="footer-widget__title">Our Services</h4>
                                                <ul class="footer-widget__links-list list-unstyled">
                                                    <li><span class="icon-chevron"></span><a
                                                            href="facial-treatment.html">Facial
                                                            Treatment</a>
                                                    </li>
                                                    <li><span class="icon-chevron"></span><a
                                                            href="facial-treatment.html">Skin
                                                            Hydration </a>
                                                    </li>
                                                    <li><span class="icon-chevron"></span><a href="services.html">Our
                                                            Services</a>
                                                    </li>
                                                    <li><span class="icon-chevron"></span><a
                                                            href="facial-treatment.html">Anti-Aging
                                                            Care</a>
                                                    </li>
                                                    <li><span class="icon-chevron"></span><a
                                                            href="facial-treatment.html">Acne
                                                            Treatment</a></li>
                                                    <li><span class="icon-chevron"></span><a
                                                            href="facial-treatment.html">Skin
                                                            Rejuvenation</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                            <div class="footer-widget__recent-posts">
                                                <h3 class="footer-widget__title">Recent Posts</h3>
                                                <ul class="footer-widget__recent-posts-list">
                                                    <li>
                                                        <div class="footer-widget__recent-posts-img">
                                                            <img src="{{ asset('landing-assets/images/resources/footer-v1-img1.jpg') }}"
                                                                alt="news-update-img">
                                                        </div>
                                                        <div class="footer-widget__recent-posts-content">
                                                            <p><span class="icon-calendar"></span> 10 Jan,2026</p>
                                                            <h4><a href="blog-details.html">Natural Skincare Tips <br>
                                                                    for a Radiant Glow</a></h4>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="footer-widget__recent-posts-img">
                                                            <img src="{{ asset('landing-assets/images/resources/footer-v1-img2.jpg') }}"
                                                                alt="news-update-img">
                                                        </div>
                                                        <div class="footer-widget__recent-posts-content">
                                                            <p><span class="icon-calendar"></span> 10 Jan,2026</p>
                                                            <h4><a href="blog-details.html">Easy Skincare Routines <br>
                                                                    for Busy Lifestyles</a></h4>
                                                        </div>
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


            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <div class="site-footer__copyright">
                                    <p class="site-footer__copyright-text">© 2026 <a href="{{ route('landing.home') }}">Pureglow</a>. All
                                        Rights Reserved.</p>
                                </div>
                                <div class="site-footer__bottom-payment-box">
                                    <ul class="list-unstyled site-footer__bottom-payment">
                                        <li><a href="{{ route('landing.about') }}"><img
                                                    src="{{ asset('landing-assets/images/resources/site-footer-payment-img1.png') }}"
                                                    alt=""></a></li>
                                        <li><a href="{{ route('landing.about') }}"><img
                                                    src="{{ asset('landing-assets/images/resources/site-footer-payment-img2.png') }}"
                                                    alt=""></a></li>
                                        <li><a href="{{ route('landing.about') }}"><img
                                                    src="{{ asset('landing-assets/images/resources/site-footer-payment-img3.png') }}"
                                                    alt=""></a></li>
                                        <li><a href="{{ route('landing.about') }}"><img
                                                    src="{{ asset('landing-assets/images/resources/site-footer-payment-img4.png') }}"
                                                    alt=""></a></li>
                                        <li><a href="{{ route('landing.about') }}"><img
                                                    src="{{ asset('landing-assets/images/resources/site-footer-payment-img5.png') }}"
                                                    alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>