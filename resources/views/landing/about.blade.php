@extends('layouts.landing')

@section('title', 'About Us - Pureglow')

@section('content')
<!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url('{{ asset('landing-assets/images/backgrounds/page-header-bg.jpg') }}');">
            </div>
            <div class="shape1 float-bob-y"><img src="{{ asset('landing-assets/images/shapes/page-header-shape1.png') }}" alt=""></div>
            <div class="shape2 float-bob-y"><img src="{{ asset('landing-assets/images/shapes/page-header-shape2.png') }}" alt=""></div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>About Us</h2>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb">
                            <li><a href="{{ route('landing.home') }}">Home</a></li>
                            <li><span>//</span></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--About One Start -->
        <section class="about-one about-one--about">
            <div class="about-one-shape-1 float-bob-y">
                <img src="{{ asset('landing-assets/images/shapes/about-one-shape-1.png') }}" alt="about-one-shape">
            </div>
            <div class="about-one-shape-2 float-bob-y">
                <img src="{{ asset('landing-assets/images/shapes/about-one-shape-2.png') }}" alt="about-one-shape">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="about-one__left">
                            <div class="about-one__img-box">
                                <div class="about-one__img">
                                    <img src="{{ asset('landing-assets/images/resources/about-one-img-1.jpg') }}" alt="about-one-img">
                                </div>
                                <div class="about-one__img-two-and-content">
                                    <div class="about-one__img-two-counter">
                                        <div class="about-one__img-two-counter-count">
                                            <h3 class="odometer" data-count="27">00</h3>
                                            <span class="plus">+</span>
                                        </div>
                                        <div class="about-one__img-two-counter-count-title">
                                            <h4>Years of Experience</h4>
                                        </div>
                                    </div>
                                    <div class="about-one__img-2">
                                        <img src="{{ asset('landing-assets/images/resources/about-one-img-2.jpg') }}" alt="about-one-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="about-one__right">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <div class="section-title__tagline-box">
                                    <p class="section-title__tagline">About Us</p>
                                    <div class="section-title__tagline-shape"></div>
                                </div>
                                <h2 class="section-title__title title-animation">Explore Our Dedication
                                    to Healthy Skin</h2>
                            </div>
                            <p class="about-one__text">We are passionate about helping you achieve healthy, glowing skin
                                through gentle and effective care. Our journey began with a simple belief that true
                                beauty starts with skin wellness.</p>
                            <div class="about-one__point-box">
                                <ul class="about-one__point">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Natural Skin Therapy</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Expert Skin Therapy</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="about-one__point two">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Botanical Beauty Treatment</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Skin Renewal Treatment</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="about-one__btn-and-author-box">
                                <div class="about-one__btn-box">
                                    <a class="thm-btn" href="#">Explore Now
                                        <span class="fas fa-arrow-right"></span>
                                    </a>
                                </div>
                                <div class="about-one__author-box">
                                    <div class="about-one__author-img">
                                        <img src="{{ asset('landing-assets/images/resources/about-one-author-img.jpg') }}" alt="author-img">
                                    </div>
                                    <div class="about-one__author-contetn">
                                        <h5>Emma Watson</h5>
                                        <p>Founder CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About One End -->


        <!--Why Choose One Start-->
        <section class="why-choose-one">
            <div class="why-choose-one__shape-1 float-bob-y">
                <img src="{{ asset('landing-assets/images/shapes/why-choose-one-shape-1.png') }}" alt="why-choose-one-shape">
            </div>
            <div class="why-choose-one__shape-2 float-bob-x">
                <img src="{{ asset('landing-assets/images/shapes/why-choose-one-shape-2.png') }}" alt="why-choose-one-shape">
            </div>
            <div class="container">
                <div class="why-choose-one__inner">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="why-choose-one__left">
                                <div class="section-title text-left sec-title-animation animation-style2">
                                    <div class="section-title__tagline-box">
                                        <p class="section-title__tagline">Why Choose Us</p>
                                        <div class="section-title__tagline-shape"></div>
                                    </div>
                                    <h2 class="section-title__title title-animation">Why Trust Our Skincare</h2>
                                </div>
                                <p class="why-choose-one__text">We are committed to providing professional skincare
                                    solutions that help your skin look healthy, fresh, and naturally radiant</p>
                                <div class="why-choose-one__point-box">
                                    <ul class="why-choose-one__point">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-facial-1"></span>
                                            </div>
                                            <div class="content">
                                                <h3>High-Grade Materials</h3>
                                                <p>We use only high-quality materials to ensure
                                                    durability, safety,and long-lasting performance.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-facial"></span>
                                            </div>
                                            <div class="content">
                                                <h3>Essential Oil Therapy Massage</h3>
                                                <p>We use only high-quality materials to ensure
                                                    durability, safety,and long-lasting performance.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="why-choose-one__right">
                                <div class="why-choose-one__img wow fadeInRight" data-wow-delay="200ms">
                                    <img src="{{ asset('landing-assets/images/resources/why-choose-one-img-1.png') }}"
                                        alt="why-choose-one-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Why Choose One End-->

        <!-- Sliding Text One Start -->
        <section class="sliding-text-one sliding-text-one--about">
            <div class="sliding-text-one__wrap">
                <ul class="sliding-text-one__list list-unstyled marquee_mode">
                    <li>
                        <h2 data-hover="Skincare" class="sliding-text-one__title">Skincare</h2>
                    </li>
                    <li><span></span></li>
                    <li>
                        <h2 data-hover="Haircare" class="sliding-text-one__title">Haircare</h2>
                    </li>
                    <li><span></span></li>
                    <li>
                        <h2 data-hover="Bodycare" class="sliding-text-one__title">Bodycare</h2>
                    </li>
                    <li><span></span></li>
                    <li>
                        <h2 data-hover="Gentle Care" class="sliding-text-one__title">Gentle Care</h2>
                    </li>
                    <li><span></span></li>
                    <li>
                        <h2 data-hover="Glow" class="sliding-text-one__title">Glow</h2>
                    </li>
                    <li><span></span></li>
                </ul>
            </div>
        </section>
        <!-- Sliding Text One End -->

        <!--Team One Start-->
        <section class="team-one team-one--about">
            <div class="team-one__bg" style="background-image: url('{{ asset('landing-assets/images/backgrounds/team-v1-bg.jpg') }}');"></div>
            <div class="container">
                <div class="team-one__top">
                    <div class="row">
                        <div class="col-xl-9">
                            <div class="team-one__inner">
                                <div class="section-title text-left sec-title-animation animation-style2">
                                    <div class="section-title__tagline-box">
                                        <p class="section-title__tagline">Our Team</p>
                                        <div class="section-title__tagline-shape"></div>
                                    </div>
                                    <h2 class="section-title__title title-animation">Meet Our Professional <br> Beauty
                                        Team</h2>
                                </div>

                                <div class="team-one__top-btn">
                                    <a class="thm-btn" href="{{ route('landing.about') }}">View all Team
                                        <span class="fas fa-arrow-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-one__bottom">
                    <div class="row">
                        <!--Team One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                            <div class="team-one__single">
                                <div class="team-one__single-img">
                                    <img src="{{ asset('landing-assets/images/team/team-v1-img1.jpg') }}" alt="">
                                </div>

                                <div class="team-one__single-content">
                                    <p>Skin Therapist</p>
                                    <h2><a href="doctor-details.html">Emma Williams</a></h2>

                                    <div class="team-one__social-links">
                                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                                        <a href="#"><span class="fab fa-twitter"></span></a>
                                        <a href="#"><span class="fab fa-instagram"></span></a>
                                        <a href="#"><span class="fab fa-pinterest-p"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Team One Single End-->

                        <!--Team One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="team-one__single">
                                <div class="team-one__single-img">
                                    <img src="{{ asset('landing-assets/images/team/team-v1-img2.jpg') }}" alt="">
                                </div>

                                <div class="team-one__single-content">
                                    <p>Skin Therapist</p>
                                    <h2><a href="doctor-details.html">Amelia Thompson</a></h2>

                                    <div class="team-one__social-links">
                                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                                        <a href="#"><span class="fab fa-twitter"></span></a>
                                        <a href="#"><span class="fab fa-instagram"></span></a>
                                        <a href="#"><span class="fab fa-pinterest-p"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Team One Single End-->

                        <!--Team One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="team-one__single">
                                <div class="team-one__single-img">
                                    <img src="{{ asset('landing-assets/images/team/team-v1-img3.jpg') }}" alt="">
                                </div>

                                <div class="team-one__single-content">
                                    <p>Skin Therapist</p>
                                    <h2><a href="doctor-details.html">Isabella Davis</a></h2>

                                    <div class="team-one__social-links">
                                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                                        <a href="#"><span class="fab fa-twitter"></span></a>
                                        <a href="#"><span class="fab fa-instagram"></span></a>
                                        <a href="#"><span class="fab fa-pinterest-p"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Team One Single End-->
                    </div>
                </div>
            </div>
        </section>
        <!--Team One End-->

        <!--Site Footer Start-->
@endsection
