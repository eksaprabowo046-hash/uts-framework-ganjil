@extends('layouts.landing')

@section('title', 'Testimonials - Pureglow')

@section('content')
<!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url('{{ asset('landing-assets/images/backgrounds/page-header-bg.jpg') }}');">
            </div>
            <div class="shape1 float-bob-y"><img src="{{ asset('landing-assets/images/shapes/page-header-shape1.png') }}" alt=""></div>
            <div class="shape2 float-bob-y"><img src="{{ asset('landing-assets/images/shapes/page-header-shape2.png') }}" alt=""></div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Testimonials</h2>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb">
                            <li><a href="{{ route('landing.home') }}">Home</a></li>
                            <li><span>//</span></li>
                            <li>Testimonials</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Testimonial One Start-->
        <section class="testimonial-one testimonial-page">
            <div class="container">
                <div class="row">
                    <!--Testimonial One Single Start -->
                    <div class="col-xl-6 col-lg-6">
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
                    <div class="col-xl-6 col-lg-6">
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
                    <div class="col-xl-6 col-lg-6">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__quote">
                                <span class="icon-quote"></span>
                            </div>
                            <div class="testimonial-one__client-box">
                                <div class="testimonial-one__client-img">
                                    <img src="{{ asset('landing-assets/images/testimonial/testimonial-one-client-1-3.jpg') }}"
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
                                    <h4 class="testimonial-one__client-name"><a href="#">Olivia Bennett</a></h4>
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
                    <div class="col-xl-6 col-lg-6">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__quote">
                                <span class="icon-quote"></span>
                            </div>
                            <div class="testimonial-one__client-box">
                                <div class="testimonial-one__client-img">
                                    <img src="{{ asset('landing-assets/images/testimonial/testimonial-one-client-1-4.jpg') }}"
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
                                    <h4 class="testimonial-one__client-name"><a href="#">Sophia Mitchell</a>
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
                    <div class="col-xl-6 col-lg-6">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__quote">
                                <span class="icon-quote"></span>
                            </div>
                            <div class="testimonial-one__client-box">
                                <div class="testimonial-one__client-img">
                                    <img src="{{ asset('landing-assets/images/testimonial/testimonial-one-client-1-5.jpg') }}"
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
                                    <h4 class="testimonial-one__client-name"><a href="#">Amelia Roberts</a></h4>
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
                    <div class="col-xl-6 col-lg-6">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__quote">
                                <span class="icon-quote"></span>
                            </div>
                            <div class="testimonial-one__client-box">
                                <div class="testimonial-one__client-img">
                                    <img src="{{ asset('landing-assets/images/testimonial/testimonial-one-client-1-6.jpg') }}"
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
                                    <h4 class="testimonial-one__client-name"><a href="#">Alisa Olivia</a>
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
            </div>
        </section>
        <!--Testimonial One End-->

        <!--Site Footer Start-->
@endsection
