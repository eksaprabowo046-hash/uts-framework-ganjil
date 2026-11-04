@extends('layouts.landing')

@section('title', 'Pureglow - Beauty & Skincare Home')

@section('content')
<!--Main Slider Start-->
        <section class="main-slider">
            <div class="swiper-container main-slider__carousel">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="main-slider__bg"
                            style="background-image: url('{{ asset('landing-assets/images/backgrounds/banner-v2-bg.jpg') }}');"></div>
                        <div class="main-slider__shape-1"></div>
                        <div class="main-slider__shape-2"></div>
                        <div class="main-slider__shape-3 float-bob-y">
                            <img src="{{ asset('landing-assets/images/shapes/main-slider-shape-3.png') }}" alt="main-slider-shape">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <p class="main-slider__sub-title">True Beauty Starts with Healthy Skin</p>
                                        <h2 class="main-slider__title">Glow Starts with <br> Healthy Skin</h2>
                                        <p class="main-slider__text">Healthy skin is the true foundation of lasting
                                            beauty. When your skin is well-nourished, <br> protected, and properly cared
                                            for, it naturally glows with confidence and vitality.</p>
                                        <div class="main-slider__btn-and-video-box">
                                            <div class="main-slider__btn-box">
                                                <a class="thm-btn" href="{{ route('landing.about') }}">Get a Quote
                                                    <span class="fas fa-arrow-right"></span>
                                                </a>
                                            </div>
                                            <div class="main-slider__video-link">
                                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                    class="video-popup">
                                                    <div class="main-slider__video-icon">
                                                        <span class="fa fa-play"></span>
                                                        <i class="ripple"></i>
                                                    </div>
                                                </a>
                                                <h4 class="main-slider__video-title">Watch Video</h4>
                                            </div>
                                        </div>
                                        <div class="main-slider__img-box">
                                            <div class="main-slider__img">
                                                <img src="{{ asset('landing-assets/images/resources/main-slider-img-1-1.png') }}"
                                                    alt="main-slider-img">
                                            </div>
                                            <div class="main-slider__img-shape">
                                                <img src="{{ asset('landing-assets/images/shapes/main-slider-img-shape-1.png') }}"
                                                    alt="main-slider-img-shape">
                                            </div>
                                            <div class="main-slider__img-shape-2">
                                                <img src="{{ asset('landing-assets/images/shapes/main-slider-img-shape-2.png') }}"
                                                    alt="main-slider-img-shape">
                                            </div>
                                            <div class="main-slider__circle-text">
                                                <div class="main-slider__round-text-box">
                                                    <div class="inner">
                                                        <div class="main-slider__curved-circle rotate-me">
                                                            Pureglow Beauty and Glow Skin Solutions .
                                                        </div>
                                                    </div>
                                                    <div class="overlay-icon-box">
                                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                            class="video-popup"><i class="fas fa-play"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="main-slider__bg"
                            style="background-image: url('{{ asset('landing-assets/images/backgrounds/banner-v2-bg.jpg') }}');"></div>
                        <div class="main-slider__shape-1"></div>
                        <div class="main-slider__shape-2"></div>
                        <div class="main-slider__shape-3 float-bob-y">
                            <img src="{{ asset('landing-assets/images/shapes/main-slider-shape-3.png') }}" alt="main-slider-shape">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <p class="main-slider__sub-title">Reveal Your Natural Beauty with Expert Care
                                        </p>
                                        <h2 class="main-slider__title">Healthy Skin <br> Beautiful Glow</h2>
                                        <p class="main-slider__text">Healthy skin is the true foundation of lasting
                                            beauty. When your skin is well-nourished, <br> protected, and properly cared
                                            for, it naturally glows with confidence and vitality.</p>
                                        <div class="main-slider__btn-and-video-box">
                                            <div class="main-slider__btn-box">
                                                <a class="thm-btn" href="{{ route('landing.about') }}">Get a Quote
                                                    <span class="fas fa-arrow-right"></span>
                                                </a>
                                            </div>
                                            <div class="main-slider__video-link">
                                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                    class="video-popup">
                                                    <div class="main-slider__video-icon">
                                                        <span class="fa fa-play"></span>
                                                        <i class="ripple"></i>
                                                    </div>
                                                </a>
                                                <h4 class="main-slider__video-title">Watch Video</h4>
                                            </div>
                                        </div>
                                        <div class="main-slider__img-box">
                                            <div class="main-slider__img">
                                                <img src="{{ asset('landing-assets/images/resources/main-slider-img-1-2.png') }}"
                                                    alt="main-slider-img">
                                            </div>
                                            <div class="main-slider__img-shape">
                                                <img src="{{ asset('landing-assets/images/shapes/main-slider-img-shape-1.png') }}"
                                                    alt="main-slider-img-shape">
                                            </div>
                                            <div class="main-slider__img-shape-2">
                                                <img src="{{ asset('landing-assets/images/shapes/main-slider-img-shape-2.png') }}"
                                                    alt="main-slider-img-shape">
                                            </div>
                                            <div class="main-slider__circle-text">
                                                <div class="main-slider__round-text-box">
                                                    <div class="inner">
                                                        <div class="main-slider__curved-circle rotate-me">
                                                            Pureglow Beauty and Glow Skin Solutions .
                                                        </div>
                                                    </div>
                                                    <div class="overlay-icon-box">
                                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                            class="video-popup"><i class="fas fa-play"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="main-slider__bg"
                            style="background-image: url('{{ asset('landing-assets/images/backgrounds/banner-v2-bg.jpg') }}');"></div>
                        <div class="main-slider__shape-1"></div>
                        <div class="main-slider__shape-2"></div>
                        <div class="main-slider__shape-3 float-bob-y">
                            <img src="{{ asset('landing-assets/images/shapes/main-slider-shape-3.png') }}" alt="main-slider-shape">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <p class="main-slider__sub-title">Fresh, Radiant & Naturally Beautiful Skin</p>
                                        <h2 class="main-slider__title">Your Journey to <br> Perfect Skin</h2>
                                        <p class="main-slider__text">Healthy skin is the true foundation of lasting
                                            beauty. When your skin is well-nourished, <br> protected, and properly cared
                                            for, it naturally glows with confidence and vitality.</p>
                                        <div class="main-slider__btn-and-video-box">
                                            <div class="main-slider__btn-box">
                                                <a class="thm-btn" href="{{ route('landing.about') }}">Get a Quote
                                                    <span class="fas fa-arrow-right"></span>
                                                </a>
                                            </div>
                                            <div class="main-slider__video-link">
                                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                    class="video-popup">
                                                    <div class="main-slider__video-icon">
                                                        <span class="fa fa-play"></span>
                                                        <i class="ripple"></i>
                                                    </div>
                                                </a>
                                                <h4 class="main-slider__video-title">Watch Video</h4>
                                            </div>
                                        </div>
                                        <div class="main-slider__img-box">
                                            <div class="main-slider__img">
                                                <img src="{{ asset('landing-assets/images/resources/main-slider-img-1-3.png') }}"
                                                    alt="main-slider-img">
                                            </div>
                                            <div class="main-slider__img-shape">
                                                <img src="{{ asset('landing-assets/images/shapes/main-slider-img-shape-1.png') }}"
                                                    alt="main-slider-img-shape">
                                            </div>
                                            <div class="main-slider__img-shape-2">
                                                <img src="{{ asset('landing-assets/images/shapes/main-slider-img-shape-2.png') }}"
                                                    alt="main-slider-img-shape">
                                            </div>
                                            <div class="main-slider__circle-text">
                                                <div class="main-slider__round-text-box">
                                                    <div class="inner">
                                                        <div class="main-slider__curved-circle rotate-me">
                                                            Pureglow Beauty and Glow Skin Solutions .
                                                        </div>
                                                    </div>
                                                    <div class="overlay-icon-box">
                                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                            class="video-popup"><i class="fas fa-play"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="swiper-pagination" id="main-slider-pagination"></div>
                <!-- If we need navigation buttons -->

            </div>
        </section>
        <!--Main Slider End-->

        <!--Feature One Start -->
        <section class="feature-one">
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <div class="section-title__tagline-box">
                        <p class="section-title__tagline">Featured Skincare</p>
                        <div class="section-title__tagline-shape"></div>
                    </div>
                    <h2 class="section-title__title title-animation">Beauty and Glow Skin Solutions</h2>
                </div>
                <div class="feature-one__inner">
                    <div class="row">
                        <!--Feature One Single Start -->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            <div class="feature-one__single">
                                <div class="feature-one__img">
                                    <img src="{{ asset('landing-assets/images/resources/feature-1-1.jpg') }}" alt="feature-one-image">
                                    <div class="feature-one__content">
                                        <h4 class="feature-one__title"><a href="cleansing-facial.html">Deep Hydration
                                                <br> Therapy</a></h4>
                                        <p class="feature-one__text">Restore moisture and keep your skin soft, smooth,
                                            and naturally radiant.</p>
                                        <div class="feature-one__btn-box">
                                            <a class="thm-btn" href="contact.html">Get A Quote
                                                <span class="fas fa-arrow-right"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Feature One Single End -->
                        <!--Feature One Single Start -->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            <div class="feature-one__single">
                                <div class="feature-one__img">
                                    <img src="{{ asset('landing-assets/images/resources/feature-1-2.jpg') }}" alt="feature-one-image">
                                    <div class="feature-one__content">
                                        <h4 class="feature-one__title"><a href="cleansing-facial.html">Anti-Aging <br>
                                                Solutions</a></h4>
                                        <p class="feature-one__text">Restore moisture and keep your skin soft, smooth,
                                            and naturally radiant.</p>
                                        <div class="feature-one__btn-box">
                                            <a class="thm-btn" href="contact.html">Get A Quote
                                                <span class="fas fa-arrow-right"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Feature One Single End -->
                        <!--Feature One Single Start -->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            <div class="feature-one__single">
                                <div class="feature-one__img">
                                    <img src="{{ asset('landing-assets/images/resources/feature-1-3.jpg') }}" alt="feature-one-image">
                                    <div class="feature-one__content">
                                        <h4 class="feature-one__title"><a href="cleansing-facial.html">Acne & Blemish
                                                <br> Treatment</a>
                                        </h4>
                                        <p class="feature-one__text">Restore moisture and keep your skin soft, smooth,
                                            and naturally radiant.</p>
                                        <div class="feature-one__btn-box">
                                            <a class="thm-btn" href="contact.html">Get A Quote
                                                <span class="fas fa-arrow-right"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Feature One Single End -->
                        <!--Feature One Single Start -->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            <div class="feature-one__single">
                                <div class="feature-one__img">
                                    <img src="{{ asset('landing-assets/images/resources/feature-1-4.jpg') }}" alt="feature-one-image">
                                    <div class="feature-one__content">
                                        <h4 class="feature-one__title"><a href="cleansing-facial.html">Skin Brightening
                                                <br> Care</a></h4>
                                        <p class="feature-one__text">Restore moisture and keep your skin soft, smooth,
                                            and naturally radiant.</p>
                                        <div class="feature-one__btn-box">
                                            <a class="thm-btn" href="contact.html">Get A Quote
                                                <span class="fas fa-arrow-right"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Feature One Single End -->
                    </div>
                </div>
            </div>
        </section>
        <!--Feature One End -->

        <!--About One Start -->
        <section class="about-one">
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
                                    <a class="thm-btn" href="{{ route('landing.about') }}">Explore Now
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

        <!--Services One Start -->
        <section class="services-one">
            <div class="services-one__shape-1 float-bob-y">
                <img src="{{ asset('landing-assets/images/shapes/services-one-shape-1.png') }}" alt="services-one-shape">
            </div>
            <div class="services-one__shape-2 float-bob-y">
                <img src="{{ asset('landing-assets/images/shapes/services-one-shape-2.png') }}" alt="services-one-shape">
            </div>
            <div class="container">
                <div class="services-one__top">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <div class="section-title__tagline-box">
                                    <p class="section-title__tagline">We Offer</p>
                                    <div class="section-title__tagline-shape"></div>
                                </div>
                                <h2 class="section-title__title title-animation">Beauty and Skin Care Services</h2>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="services-one__top-right">
                                <p class="services-one__top-text">Our skin care services are designed to nourish,
                                    protect,
                                    and
                                    enhance your natural beauty. We use advanced techniques and high-quality.</p>
                                <div class="services-one__btn-box">
                                    <a class="thm-btn" href="services.html">Explore Now
                                        <span class="fas fa-arrow-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-one__bottom">
                    <div class="row">
                        <!--Services One Single Start -->
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                            <div class="services-one__single">
                                <div class="services-one__img">
                                    <img src="{{ asset('landing-assets/images/services/services-1-1.jpg') }}" alt="services-one-img">
                                </div>
                                <div class="services-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-botox"></span>
                                    </div>
                                    <h3 class="services-one__title"><a href="facial-treatment.html">Facial Treatment</a>
                                    </h3>
                                    <p class="services-one__text">Deep cleansing facial to refresh and
                                        rejuvenate your skin for a natural glow.</p>
                                    <a href="facial-treatment.html" class="services-one__btn">Read More <span
                                            class="icon-right-arrow"></span> </a>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single Start -->
                        <!--Services One Single Start -->
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-one__single">
                                <div class="services-one__img">
                                    <img src="{{ asset('landing-assets/images/services/services-1-2.jpg') }}" alt="services-one-img">
                                </div>
                                <div class="services-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-facial-massage"></span>
                                    </div>
                                    <h3 class="services-one__title"><a href="facial-treatment.html">Skin Brightening</a>
                                    </h3>
                                    <p class="services-one__text">Deep cleansing facial to refresh and
                                        rejuvenate your skin for a natural glow.</p>
                                    <a href="facial-treatment.html" class="services-one__btn">Read More <span
                                            class="icon-right-arrow"></span> </a>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single Start -->
                        <!--Services One Single Start -->
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="100ms">
                            <div class="services-one__single">
                                <div class="services-one__img">
                                    <img src="{{ asset('landing-assets/images/services/services-1-1.jpg') }}" alt="services-one-img">
                                </div>
                                <div class="services-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-facial-treatment"></span>
                                    </div>
                                    <h3 class="services-one__title"><a href="facial-treatment.html">Acne Treatment</a>
                                    </h3>
                                    <p class="services-one__text">Deep cleansing facial to refresh and
                                        rejuvenate your skin for a natural glow.</p>
                                    <a href="facial-treatment.html" class="services-one__btn">Read More <span
                                            class="icon-right-arrow"></span> </a>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single Start -->
                    </div>
                </div>
            </div>
        </section>
        <!--Services One End -->

        <!--Picks One Start -->
        <section class="picks-one">
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <div class="section-title__tagline-box">
                        <p class="section-title__tagline">Our Picks</p>
                        <div class="section-title__tagline-shape"></div>
                    </div>
                    <h2 class="section-title__title title-animation">Glow and Skin Care Shop</h2>
                </div>
                <div class="row">
                    <!--Picks One Single Start -->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="picks-one__single">
                            <div class="picks-one__img">
                                <img src="{{ asset('landing-assets/images/resources/picks-1-1.jpg') }}" alt="picks-img">
                                <div class="picks-one__cart">
                                    <a href="#"><span class="icon-shopping-cart"></span></a>
                                </div>
                            </div>
                            <div class="picks-one__content">
                                <p class="picks-one__price">$65.00 <del>$69.00</del> </p>
                                <h4 class="picks-one__title"><a href="product-details.html">Soft Lips Night Balm</a>
                                </h4>
                                <div class="picks-one__rating">
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Picks One Single Start -->
                    <!--Picks One Single Start -->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="200ms">
                        <div class="picks-one__single">
                            <div class="picks-one__img">
                                <img src="{{ asset('landing-assets/images/resources/picks-1-2.jpg') }}" alt="picks-img">
                                <div class="picks-one__cart">
                                    <a href="#"><span class="icon-shopping-cart"></span></a>
                                </div>
                            </div>
                            <div class="picks-one__content">
                                <p class="picks-one__price">$65.00 <del>$69.00</del> </p>
                                <h4 class="picks-one__title"><a href="product-details.html">Pure Skin Cleanser</a></h4>
                                <div class="picks-one__rating">
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Picks One Single Start -->
                    <!--Picks One Single Start -->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="100ms">
                        <div class="picks-one__single">
                            <div class="picks-one__img">
                                <img src="{{ asset('landing-assets/images/resources/picks-1-3.jpg') }}" alt="picks-img">
                                <div class="picks-one__cart">
                                    <a href="#"><span class="icon-shopping-cart"></span></a>
                                </div>
                            </div>
                            <div class="picks-one__content">
                                <p class="picks-one__price">$65.00 <del>$69.00</del> </p>
                                <h4 class="picks-one__title"><a href="product-details.html">Natural Glow Cream</a></h4>
                                <div class="picks-one__rating">
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Picks One Single Start -->
                    <!--Picks One Single Start -->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="200ms">
                        <div class="picks-one__single">
                            <div class="picks-one__img">
                                <img src="{{ asset('landing-assets/images/resources/picks-1-4.jpg') }}" alt="picks-img">
                                <div class="picks-one__cart">
                                    <a href="#"><span class="icon-shopping-cart"></span></a>
                                </div>
                            </div>
                            <div class="picks-one__content">
                                <p class="picks-one__price">$65.00 <del>$69.00</del> </p>
                                <h4 class="picks-one__title"><a href="product-details.html">Skin Care Cream</a></h4>
                                <div class="picks-one__rating">
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Picks One Single Start -->
                </div>
            </div>
        </section>
        <!--Picks One End -->

        <!--Team One Start-->
        <section class="team-one">
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
                                    <a class="thm-btn" href="doctors.html">View all Team
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
                                        <a href="https://www.facebook.com/"><span class="fab fa-facebook-f"></span></a>
                                        <a href="https://x.com/"><span class="fab fa-twitter"></span></a>
                                        <a href="https://www.instagram.com/?hl=en"><span
                                                class="fab fa-instagram"></span></a>
                                        <a href="https://www.pinterest.com/"><span
                                                class="fab fa-pinterest-p"></span></a>
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
                                        <a href="https://www.facebook.com/"><span class="fab fa-facebook-f"></span></a>
                                        <a href="https://x.com/"><span class="fab fa-twitter"></span></a>
                                        <a href="https://www.instagram.com/?hl=en"><span
                                                class="fab fa-instagram"></span></a>
                                        <a href="https://www.pinterest.com/"><span
                                                class="fab fa-pinterest-p"></span></a>
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
                                        <a href="https://www.facebook.com/"><span class="fab fa-facebook-f"></span></a>
                                        <a href="https://x.com/"><span class="fab fa-twitter"></span></a>
                                        <a href="https://www.instagram.com/?hl=en"><span
                                                class="fab fa-instagram"></span></a>
                                        <a href="https://www.pinterest.com/"><span
                                                class="fab fa-pinterest-p"></span></a>
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

        <!--Testimonial One Start-->
        <section class="testimonial-one">
            <div class="testimonial-one__shape-1">
                <img src="{{ asset('landing-assets/images/shapes/testimonial-one-shape-1.png') }}" alt="testimonial-one-shape">
            </div>
            <div class="container">
                <div class="testimonial-one__top">
                    <div class="section-title text-left sec-title-animation animation-style2">
                        <div class="section-title__tagline-box">
                            <p class="section-title__tagline">Testimonial</p>
                            <div class="section-title__tagline-shape"></div>
                        </div>
                        <h2 class="section-title__title title-animation">Radiant Reviews from <br> Our Happy Clients
                        </h2>
                    </div>
                    <div class="testimonial-one__top-right">
                        <div class="testimonial-one__top-clients">
                            <ul class="testimonial-one__top-clients-img-list">
                                <li>
                                    <div class="testimonial-one__top-clients-img">
                                        <img src="{{ asset('landing-assets/images/testimonial/testimonial-v1-img1.jpg') }}" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonial-one__top-clients-img">
                                        <img src="{{ asset('landing-assets/images/testimonial/testimonial-v1-img2.jpg') }}" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonial-one__top-clients-img">
                                        <img src="{{ asset('landing-assets/images/testimonial/testimonial-v1-img3.jpg') }}" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonial-one__top-clients-img">
                                        <img src="{{ asset('landing-assets/images/testimonial/testimonial-v1-img4.jpg') }}" alt="">
                                    </div>
                                </li>
                            </ul>
                            <div class="testimonial-one__top-clients-content">
                                <div class="testimonial-one__top-counter">
                                    <div class="testimonial-one__top-counter-count">
                                        <h3 class="odometer" data-count="12">00</h3>
                                        <span class="m">M</span>
                                        <span class="plus">+</span>
                                        <span class="text">Clients</span>
                                    </div>
                                    <div class="testimonial-one__top-counter-title">
                                        <h4>Trust Skin Expertise</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__top-right-text">
                            <p>The products feel light on the skin but deliver amazing results. <br> My
                                complexion now looks healthier and more radiant.</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-one__bottom">
                    <div class="swiper-container testimonial-one__carousel">
                        <div class="swiper-wrapper">
                            <!--Testimonial One Single Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quote"></span>
                                    </div>
                                    <div class="testimonial-one__client-box">
                                        <div class="testimonial-one__client-img">
                                            <img src="{{ asset('landing-assets/images/testimonial/testimonial-one-client-1-1.jpg') }}"
                                                alt="Client Image">
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <div class="testimonial-one__client-rating">
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                            </div>
                                            <h4 class="testimonial-one__client-name"><a href="#">Amelia Hughes</a></h4>
                                            <p class="testimonial-one__client-sub-title">HealthySkin</p>
                                        </div>
                                    </div>
                                    <p class="testimonial-one__text">The skincare treatments are relaxing and the
                                        result’re incredible.
                                        My skin feels hydrated, smooth, and looks much more radiant.
                                        From the very first session, I noticed a refreshing change in my
                                        skin’s texture and brightness. The products are gentle and sooth,
                                        yet they work deeply to improve overall skin health.</p>
                                </div>
                            </div>
                            <!--Testimonial One Single End -->
                            <!--Testimonial One Single Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quote"></span>
                                    </div>
                                    <div class="testimonial-one__client-box">
                                        <div class="testimonial-one__client-img">
                                            <img src="{{ asset('landing-assets/images/testimonial/testimonial-one-client-1-2.jpg') }}"
                                                alt="Client Image">
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <div class="testimonial-one__client-rating">
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                            </div>
                                            <h4 class="testimonial-one__client-name"><a href="#">Isabella Turner</a>
                                            </h4>
                                            <p class="testimonial-one__client-sub-title">HealthySkin</p>
                                        </div>
                                    </div>
                                    <p class="testimonial-one__text">The skincare treatments are relaxing and the
                                        result’re incredible.
                                        My skin feels hydrated, smooth, and looks much more radiant.
                                        From the very first session, I noticed a refreshing change in my
                                        skin’s texture and brightness. The products are gentle and sooth,
                                        yet they work deeply to improve overall skin health.</p>
                                </div>
                            </div>
                            <!--Testimonial One Single End -->
                            <!--Testimonial One Single Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quote"></span>
                                    </div>
                                    <div class="testimonial-one__client-box">
                                        <div class="testimonial-one__client-img">
                                            <img src="{{ asset('landing-assets/images/testimonial/testimonial-one-client-1-1.jpg') }}"
                                                alt="Client Image">
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <div class="testimonial-one__client-rating">
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                            </div>
                                            <h4 class="testimonial-one__client-name"><a href="#">Amelia Hughes</a></h4>
                                            <p class="testimonial-one__client-sub-title">HealthySkin</p>
                                        </div>
                                    </div>
                                    <p class="testimonial-one__text">The skincare treatments are relaxing and the
                                        result’re incredible.
                                        My skin feels hydrated, smooth, and looks much more radiant.
                                        From the very first session, I noticed a refreshing change in my
                                        skin’s texture and brightness. The products are gentle and sooth,
                                        yet they work deeply to improve overall skin health.</p>
                                </div>
                            </div>
                            <!--Testimonial One Single End -->
                            <!--Testimonial One Single Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quote"></span>
                                    </div>
                                    <div class="testimonial-one__client-box">
                                        <div class="testimonial-one__client-img">
                                            <img src="{{ asset('landing-assets/images/testimonial/testimonial-one-client-1-2.jpg') }}"
                                                alt="Client Image">
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <div class="testimonial-one__client-rating">
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                            </div>
                                            <h4 class="testimonial-one__client-name"><a href="#">Isabella Turner</a>
                                            </h4>
                                            <p class="testimonial-one__client-sub-title">HealthySkin</p>
                                        </div>
                                    </div>
                                    <p class="testimonial-one__text">The skincare treatments are relaxing and the
                                        result’re incredible.
                                        My skin feels hydrated, smooth, and looks much more radiant.
                                        From the very first session, I noticed a refreshing change in my
                                        skin’s texture and brightness. The products are gentle and sooth,
                                        yet they work deeply to improve overall skin health.</p>
                                </div>
                            </div>
                            <!--Testimonial One Single End -->
                        </div>
                        <div class="swiper-nav-style-one">
                            <div class="testimonial-one-dot-style1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial One End-->

        <!--Appointment One Start-->
        <section class="appointment-one">
            <div class="appointment-one__img wow fadeInRight" data-wow-delay="200ms">
                <img src="{{ asset('landing-assets/images/resources/appointment-one-img-1.png') }}" alt="appointment-one-img">
            </div>
            <div class="appointment-one__shape-1 float-bob-y">
                <img src="{{ asset('landing-assets/images/shapes/appointment-shape-1.png') }}" alt="appointment-shape">
            </div>
            <div class="container">
                <div class="appointment-one__inner">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="appointment-one__form-box">
                                <div class="section-title text-left sec-title-animation animation-style2">
                                    <div class="section-title__tagline-box">
                                        <p class="section-title__tagline">Book Appointment</p>
                                        <div class="section-title__tagline-shape"></div>
                                    </div>
                                    <h2 class="section-title__title title-animation">Make an Appointment Today !</h2>
                                </div>
                                <form class="contact-form-validated appointment-one__form"
                                    action="assets/inc/sendemail.php" method="post">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="appointment-one__input-box">
                                                <input type="text" name="name" placeholder="Full Name" required="">
                                                <div class="appointment-one__input-box-icon">
                                                    <span class="icon-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="appointment-one__input-box">
                                                <input type="email" name="email" placeholder="Your Email" required="">
                                                <div class="appointment-one__input-box-icon">
                                                    <span class="icon-envelope"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="appointment-one__input-box">
                                                <input type="text" name="phone" placeholder="Phone">
                                                <div class="appointment-one__input-box-icon">
                                                    <span class="icon-telephone"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="appointment-one__input-box">
                                                <input type="text" placeholder="Date " name="date" id="datepicker">
                                                <div class="appointment-one__input-box-icon">
                                                    <span class="icon-calendar"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="appointment-one__input-box">
                                                <div class="select-box">
                                                    <select class="selectmenu wide">
                                                        <option selected>Select Service</option>
                                                        <option>Facial Treatment</option>
                                                        <option>Skin Brightening</option>
                                                        <option>Acne Treatment</option>
                                                        <option>Natural Skin Therapy</option>
                                                        <option>Deep Hydration Therapy</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="appointment-one__input-box text-message-box">
                                                <textarea name="message" placeholder="Messege"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="appointment-one__btn-box">
                                                <button type="submit" class="thm-btn">
                                                    Submit Now
                                                    <span class="fas fa-arrow-right"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="result"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Appointment One End-->

        <!--Pricing One Start-->
        <section class="pricing-one">
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <div class="section-title__tagline-box">
                        <p class="section-title__tagline">Pricing Plan</p>
                        <div class="section-title__tagline-shape"></div>
                    </div>
                    <h2 class="section-title__title title-animation">Beauty Care Pricing Plans</h2>
                </div>
                <div class="pricing-one__switch-toggle">
                    <ul class="list-unstyled switch-toggler-list" role="tablist" id="switch-toggle-tab">
                        <li class="month active">
                            <a href="#">Monthly</a>
                        </li>
                        <li>
                            <label class="switch on">
                                <span class="slider round"></span>
                            </label>
                        </li>
                        <li class="year">
                            <a href="#">Yearly</a>
                        </li>
                    </ul>
                </div>

                <div class="tabed-content">
                    <div id="month">
                        <div class="row">
                            <!--Pricing One Single Start-->
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="pricing-one__single">
                                    <div class="pricing-one__title-box">
                                        <p class="pricing-one__title">Basic Plan</p>
                                        <h3 class="pricing-one__price-box">$39 <span>/Per Month</span> </h3>
                                        <div class="pricing-one__border"></div>
                                    </div>
                                    <div class="pricing-one__text">
                                        <p>We offer flexible skincare packages that combine expert care.</p>
                                    </div>
                                    <div class="pricing-one__feature-list-box">
                                        <h4 class="pricing-one__feature-title">Feature Description</h4>
                                        <ul class="list-unstyled pricing-one__feature-list">
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Basic Facial Treatment</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Hydration Mask</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Skin Care Consultation</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Skin Cleansing and Exfoliation</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Hydration Mask</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pricing-one__btn-box">
                                        <a class="thm-btn" href="contact.html">Get Started
                                            <span class="fas fa-arrow-right"></span>
                                        </a>
                                    </div>
                                    <div class="pricing-one__shape-1"></div>
                                    <div class="pricing-one__shape-2"></div>
                                </div>
                            </div>
                            <!--Pricing One Single End-->
                            <!--Pricing One Single Start-->
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="pricing-one__single">
                                    <div class="pricing-one__title-box">
                                        <p class="pricing-one__title">Standard Plan</p>
                                        <h3 class="pricing-one__price-box">$59 <span>/Per Month</span> </h3>
                                        <div class="pricing-one__border"></div>
                                    </div>
                                    <div class="pricing-one__text">
                                        <p>We offer flexible skincare packages that combine expert care.</p>
                                    </div>
                                    <div class="pricing-one__feature-list-box">
                                        <h4 class="pricing-one__feature-title">Feature Description</h4>
                                        <ul class="list-unstyled pricing-one__feature-list">
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Basic Facial Treatment</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Hydration Mask</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Skin Care Consultation</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Skin Cleansing and Exfoliation</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Hydration Mask</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pricing-one__btn-box">
                                        <a class="thm-btn" href="contact.html">Get Started
                                            <span class="fas fa-arrow-right"></span>
                                        </a>
                                    </div>
                                    <div class="pricing-one__shape-1"></div>
                                    <div class="pricing-one__shape-2"></div>
                                </div>
                            </div>
                            <!--Pricing One Single End-->
                            <!--Pricing One Single Start-->
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="pricing-one__single">
                                    <div class="pricing-one__title-box">
                                        <p class="pricing-one__title">Premium Plan</p>
                                        <h3 class="pricing-one__price-box">$89 <span>/Per Month</span> </h3>
                                        <div class="pricing-one__border"></div>
                                    </div>
                                    <div class="pricing-one__text">
                                        <p>We offer flexible skincare packages that combine expert care.</p>
                                    </div>
                                    <div class="pricing-one__feature-list-box">
                                        <h4 class="pricing-one__feature-title">Feature Description</h4>
                                        <ul class="list-unstyled pricing-one__feature-list">
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Basic Facial Treatment</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Hydration Mask</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Skin Care Consultation</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Skin Cleansing and Exfoliation</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Hydration Mask</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pricing-one__btn-box">
                                        <a class="thm-btn" href="contact.html">Get Started
                                            <span class="fas fa-arrow-right"></span>
                                        </a>
                                    </div>
                                    <div class="pricing-one__shape-1"></div>
                                    <div class="pricing-one__shape-2"></div>
                                </div>
                            </div>
                            <!--Pricing One Single End-->
                        </div>
                    </div>

                    <div id="year">
                        <div class="row">
                            <!--Pricing One Single Start-->
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="pricing-one__single">
                                    <div class="pricing-one__title-box">
                                        <p class="pricing-one__title">Basic Plan</p>
                                        <h3 class="pricing-one__price-box">$39 <span>/Per Month</span> </h3>
                                        <div class="pricing-one__border"></div>
                                    </div>
                                    <div class="pricing-one__text">
                                        <p>We offer flexible skincare packages that combine expert care.</p>
                                    </div>
                                    <div class="pricing-one__feature-list-box">
                                        <h4 class="pricing-one__feature-title">Feature Description</h4>
                                        <ul class="list-unstyled pricing-one__feature-list">
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Basic Facial Treatment</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Hydration Mask</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Skin Care Consultation</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Skin Cleansing and Exfoliation</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Hydration Mask</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pricing-one__btn-box">
                                        <a class="thm-btn" href="contact.html">Get Started
                                            <span class="fas fa-arrow-right"></span>
                                        </a>
                                    </div>
                                    <div class="pricing-one__shape-1"></div>
                                    <div class="pricing-one__shape-2"></div>
                                </div>
                            </div>
                            <!--Pricing One Single End-->
                            <!--Pricing One Single Start-->
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="pricing-one__single">
                                    <div class="pricing-one__title-box">
                                        <p class="pricing-one__title">Standard Plan</p>
                                        <h3 class="pricing-one__price-box">$59 <span>/Per Month</span> </h3>
                                        <div class="pricing-one__border"></div>
                                    </div>
                                    <div class="pricing-one__text">
                                        <p>We offer flexible skincare packages that combine expert care.</p>
                                    </div>
                                    <div class="pricing-one__feature-list-box">
                                        <h4 class="pricing-one__feature-title">Feature Description</h4>
                                        <ul class="list-unstyled pricing-one__feature-list">
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Basic Facial Treatment</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Hydration Mask</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Skin Care Consultation</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Skin Cleansing and Exfoliation</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Hydration Mask</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pricing-one__btn-box">
                                        <a class="thm-btn" href="contact.html">Get Started
                                            <span class="fas fa-arrow-right"></span>
                                        </a>
                                    </div>
                                    <div class="pricing-one__shape-1"></div>
                                    <div class="pricing-one__shape-2"></div>
                                </div>
                            </div>
                            <!--Pricing One Single End-->
                            <!--Pricing One Single Start-->
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="pricing-one__single">
                                    <div class="pricing-one__title-box">
                                        <p class="pricing-one__title">Premium Plan</p>
                                        <h3 class="pricing-one__price-box">$89 <span>/Per Month</span> </h3>
                                        <div class="pricing-one__border"></div>
                                    </div>
                                    <div class="pricing-one__text">
                                        <p>We offer flexible skincare packages that combine expert care.</p>
                                    </div>
                                    <div class="pricing-one__feature-list-box">
                                        <h4 class="pricing-one__feature-title">Feature Description</h4>
                                        <ul class="list-unstyled pricing-one__feature-list">
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Basic Facial Treatment</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Hydration Mask</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Skin Care Consultation</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Skin Cleansing and Exfoliation</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Hydration Mask</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pricing-one__btn-box">
                                        <a class="thm-btn" href="contact.html">Get Started
                                            <span class="fas fa-arrow-right"></span>
                                        </a>
                                    </div>
                                    <div class="pricing-one__shape-1"></div>
                                    <div class="pricing-one__shape-2"></div>
                                </div>
                            </div>
                            <!--Pricing One Single End-->
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--Pricing One End-->

        <!--Faq One Start-->
        <section class="faq-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="faq-one__left">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <div class="section-title__tagline-box">
                                    <p class="section-title__tagline">FAQ’S</p>
                                    <div class="section-title__tagline-shape"></div>
                                </div>
                                <h2 class="section-title__title title-animation">Frequently Asked Questions</h2>
                            </div>
                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                <div class="accrodion wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>What skincare treatments do you offer?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Regular facials every few weeks help improve skin texture, hydration,
                                                and overall appearance.
                                            </p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion active wow fadeInRight" data-wow-delay="100ms"
                                    data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>How often should I get a facial treatment?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Regular facials every few weeks help improve skin texture, hydration,
                                                and overall appearance.
                                            </p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>Do I need to book an appointment in advance?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Regular facials every few weeks help improve skin texture, hydration,
                                                and overall appearance.
                                            </p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion wow fadeInRight" data-wow-delay="300ms"
                                    data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>How long does a skincare session take?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Regular facials every few weeks help improve skin texture, hydration,
                                                and overall appearance.
                                            </p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>Can I book Or Order online?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Regular facials every few weeks help improve skin texture, hydration,
                                                and overall appearance.
                                            </p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="faq-one__right">
                            <div class="faq-one__img-box">
                                <div class="faq-one__img">
                                    <img src="{{ asset('landing-assets/images/resources/faq-one-img-1.jpg') }}" alt="faq-one-img">
                                </div>
                                <div class="faq-one__clients">
                                    <ul class="faq-one__clients-img-list">
                                        <li>
                                            <div class="faq-one__clients-img">
                                                <img src="{{ asset('landing-assets/images/testimonial/testimonial-v1-img1.jpg') }}" alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="faq-one__clients-img">
                                                <img src="{{ asset('landing-assets/images/testimonial/testimonial-v1-img2.jpg') }}" alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="faq-one__clients-img">
                                                <img src="{{ asset('landing-assets/images/testimonial/testimonial-v1-img3.jpg') }}" alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="faq-one__clients-img">
                                                <img src="{{ asset('landing-assets/images/testimonial/testimonial-v1-img4.jpg') }}" alt="">
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="faq-one__clients-content">
                                        <div class="faq-one__counter">
                                            <div class="faq-one__counter-count">
                                                <h3 class="odometer" data-count="12">00</h3>
                                                <span class="m">M</span>
                                                <span class="plus">+</span>
                                                <span class="text">Clients</span>
                                            </div>
                                            <div class="faq-one__counter-title">
                                                <h4>Trust Skin Expertise</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Faq One End-->

        <!--Menu One Start-->
        <section class="menu-one">
            <div class="menu-one__shape-1">
                <img src="{{ asset('landing-assets/images/shapes/menu-one-shape-1.png') }}" alt="menu-one-shape">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="menu-one__left">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <div class="section-title__tagline-box">
                                    <p class="section-title__tagline">Our Menu</p>
                                    <div class="section-title__tagline-shape"></div>
                                </div>
                                <h2 class="section-title__title title-animation">Services price</h2>
                            </div>
                            <p class="menu-one__text">Our professional makeup services are designed to highlight your
                                natural beauty and create a flawless, radiant look.</p>
                            <div class="menu-one__service-list-box">
                                <ul class="menu-one__service-list">
                                    <li>
                                        <p>Liquid Foundation</p>
                                        <div class="border-box"></div>
                                        <p class="price">$ 99.00</p>
                                    </li>
                                    <li>
                                        <p>Skin Moisturizer</p>
                                        <div class="border-box"></div>
                                        <p class="price">$ 199.00</p>
                                    </li>
                                    <li>
                                        <p>Makeup Brush</p>
                                        <div class="border-box"></div>
                                        <p class="price">$ 85.00</p>
                                    </li>
                                    <li>
                                        <p>Sun Glow Bronzer</p>
                                        <div class="border-box"></div>
                                        <p class="price">$ 100.00</p>
                                    </li>
                                    <li>
                                        <p>Radiance Luminizer</p>
                                        <div class="border-box"></div>
                                        <p class="price">$ 120.00</p>
                                    </li>
                                    <li>
                                        <p>Soft Finish Face Powder</p>
                                        <div class="border-box"></div>
                                        <p class="price">$ 65.00</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="menu-one__right">
                            <div class="before-and-after__img-box">
                                <div class="before-after">
                                    <div class="before-after-twentytwenty" id="wrinkle-before-after">
                                        <img src="{{ asset('landing-assets/images/resources/before-and-after-img.jpg') }}" alt="">
                                        <img src="{{ asset('landing-assets/images/resources/before-and-after-img-2.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="before-and-after__tag"><span>Before</span></div>
                                <div class="before-and-after__tag before-and-after__tag-2">
                                    <span>After</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Menu One End-->

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
        <section class="sliding-text-one sliding-text-one--three">
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

        <!--Blog One Start-->
        <section class="blog-one">
            <div class="container">
                <div class="row">
                    <!--Blog One Content Start-->
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="blog-one__content">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <div class="section-title__tagline-box">
                                    <p class="section-title__tagline">Latest News</p>
                                    <div class="section-title__tagline-shape"></div>
                                </div>
                                <h2 class="section-title__title title-animation">Inside a World of Relaxing <br>
                                    Spa Treatments</h2>
                            </div>

                            <div class="blog-one__content-text">
                                <p>Beautiful skin doesn’t happen overnight. It requires patience, consistency, and the
                                    right treatments. By understanding your skin’s needs and using products designed to
                                    support skin health.</p>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Content End-->

                    <!--Blog One Single Start-->
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <div class="blog-one__single-img-inner">
                                    <img src="{{ asset('landing-assets/images/blog/blog-v1-img1.jpg') }}" alt="">
                                </div>
                                <div class="blog-one__single-content">
                                    <div class="blog-one__single-content-date">
                                        <h2>10</h2>
                                        <p>feb,2026</p>
                                    </div>
                                    <div class="blog-one__single-content-inner">
                                        <h3><a href="blog-details.html">Skincare Secrets for a Natural Glow</a></h3>
                                        <p>Healthy skin is the foundation of natural
                                            beauty. A consistent skincare.</p>
                                        <div class="btn-box">
                                            <a href="blog-details.html">Read More <span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->

                    <!--Blog One Single Start-->
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <div class="blog-one__single-img-inner">
                                    <img src="{{ asset('landing-assets/images/blog/blog-v1-img2.jpg') }}" alt="">
                                </div>
                                <div class="blog-one__single-content">
                                    <div class="blog-one__single-content-date">
                                        <h2>10</h2>
                                        <p>feb,2026</p>
                                    </div>
                                    <div class="blog-one__single-content-inner">
                                        <h3><a href="blog-details.html">Top Skincare Tips for Every Skin Type</a></h3>
                                        <p>Healthy skin is the foundation of natural
                                            beauty. A consistent skincare.</p>
                                        <div class="btn-box">
                                            <a href="blog-details.html">Read More <span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->

                    <!--Blog One Single Start-->
                    <div class="col-xl-6">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <div class="blog-one__single-img-inner">
                                    <img src="{{ asset('landing-assets/images/blog/blog-v1-img3.jpg') }}" alt="">
                                </div>
                                <div class="blog-one__single-content">
                                    <div class="blog-one__single-content-date">
                                        <h2>10</h2>
                                        <p>feb,2026</p>
                                    </div>
                                    <div class="blog-one__single-content-inner">
                                        <h3><a href="blog-details.html">The Ultimate Guide to Skin Wellness</a></h3>
                                        <p>Healthy skin is the foundation of natural
                                            beauty. A consistent skincare.</p>
                                        <div class="btn-box">
                                            <a href="blog-details.html">Read More <span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                </div>
            </div>
        </section>
        <!--Blog One End-->

        <!--Site Footer Start-->
@endsection
