<div class="chat-icon"><button type="button" class="chat-toggler"><i class="fa fa-comment"></i></button></div>
    <!--Chat Popup-->
    <div id="chat-popup" class="chat-popup">
        <div class="popup-inner">
            <div class="close-chat"><i class="fa fa-times"></i></div>
            <div class="chat-form">
                <p>Please fill out the form below and we will get back to you as soon as possible.</p>
                <form action="assets/inc/sendemail.php" method="POST" class="contact-form-validated">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="Your Text" required></textarea>
                    </div>
                    <div class="form-group message-btn">
                        <button type="submit" class="thm-btn"> Submit Now
                            <span class="fas fa-arrow-right"></span>
                        </button>
                    </div>
                    <div class="result"></div>
                </form>
            </div>
        </div>
    </div>



    <!-- Start sidebar widget content -->
    <div class="xs-sidebar-group info-group info-sidebar">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">X</a>
                </div>
                <div class="sidebar-textwidget">
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="logo">
                                <a href="{{ route('landing.home') }}"><img src="{{ asset('landing-assets/images/resources/logo-2.png') }}" alt="" /></a>
                            </div>
                            <div class="content-box">
                                <h4>About Us</h4>
                                <div class="inner-text">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                                        roots in a piece of classical Latin literature from 45 BC, making it over
                                        2000 years old.
                                    </p>
                                </div>
                            </div>

                            <div class="form-inner">
                                <h4>Get a free quote</h4>
                                <form action="assets/inc/sendemail.php" method="POST" class="contact-form-validated">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Name" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Message..." required=""></textarea>
                                    </div>
                                    <div class="form-group message-btn">
                                        <button class="thm-btn" data-text="Submit Now +" type="submit"
                                            data-loading-text="Please wait...">Submit Now
                                            <span class="fas fa-arrow-right"></span>
                                        </button>
                                    </div>
                                    <div class="result"></div>
                                </form>
                            </div>

                            <div class="sidebar-contact-info">
                                <h4>Contact Info</h4>
                                <ul class="list-unstyled">
                                    <li>
                                        <span class="icon-maps-and-flags"></span> 88 broklyn street, New York
                                    </li>
                                    <li>
                                        <span class="icon-call"></span>
                                        <a href="tel:123456789">+1 555-9990-153</a>
                                    </li>
                                    <li>
                                        <span class="icon-email"></span>
                                        <a href="mailto:info@example.com">info@example.com</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="thm-social-link1">
                                <ul class="social-box list-unstyled">
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End sidebar widget content -->