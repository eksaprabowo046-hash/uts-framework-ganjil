@extends('layouts.landing')

@section('title', 'Blog - Pureglow')

@section('content')
<!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url('{{ asset('landing-assets/images/backgrounds/page-header-bg.jpg') }}');">
            </div>
            <div class="shape1 float-bob-y"><img src="{{ asset('landing-assets/images/shapes/page-header-shape1.png') }}" alt=""></div>
            <div class="shape2 float-bob-y"><img src="{{ asset('landing-assets/images/shapes/page-header-shape2.png') }}" alt=""></div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Our Blog</h2>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb">
                            <li><a href="{{ route('landing.home') }}">Home</a></li>
                            <li><span>//</span></li>
                            <li>Our Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

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

                    <!--Blog One Single Start-->
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <div class="blog-one__single-img-inner">
                                    <img src="{{ asset('landing-assets/images/blog/blog-v1-img4.jpg') }}" alt="">
                                </div>
                                <div class="blog-one__single-content">
                                    <div class="blog-one__single-content-date">
                                        <h2>10</h2>
                                        <p>feb,2026</p>
                                    </div>
                                    <div class="blog-one__single-content-inner">
                                        <h3><a href="blog-details.html">Best Skincare Tips for Clear & Smooth Skin</a>
                                        </h3>
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
                                    <img src="{{ asset('landing-assets/images/blog/blog-v1-img5.jpg') }}" alt="">
                                </div>
                                <div class="blog-one__single-content">
                                    <div class="blog-one__single-content-date">
                                        <h2>10</h2>
                                        <p>feb,2026</p>
                                    </div>
                                    <div class="blog-one__single-content-inner">
                                        <h3><a href="blog-details.html">Skincare Routine That Transforms Your Glow</a>
                                        </h3>
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
