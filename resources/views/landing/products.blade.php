@extends('layouts.landing')

@section('title', 'Products - Pureglow')

@section('content')
<!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url('{{ asset('landing-assets/images/backgrounds/page-header-bg.jpg') }}');">
            </div>
            <div class="shape1 float-bob-y"><img src="{{ asset('landing-assets/images/shapes/page-header-shape1.png') }}" alt=""></div>
            <div class="shape2 float-bob-y"><img src="{{ asset('landing-assets/images/shapes/page-header-shape2.png') }}" alt=""></div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Products</h2>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb">
                            <li><a href="{{ route('landing.home') }}">Home</a></li>
                            <li><span>//</span></li>
                            <li>Products</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Product Start-->
        <section class="product">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-12">
                        <div class="product__items">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="product__showing-result">
                                        <div class="product__showing-text-box">
                                            <p class="product__showing-text">Showing 1–12/14 of 14 results</p>
                                        </div>
                                        <div class="product__showing-sort">
                                            <div class="select-box">
                                                <select class="wide">
                                                    <option data-display="Sort by popular">Sort by popular</option>
                                                    <option value="1">Sort by popular</option>
                                                    <option value="2">Sort by Price</option>
                                                    <option value="3">Sort by Ratings</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product__all">
                                <div class="product__all-tab">
                                    <div class="product__all-tab-button">
                                        <ul class="tabs-button-box clearfix">
                                            <li data-tab="#grid" class="tab-btn-item active-btn-item">
                                                <div class="product__all-tab-button-icon one">
                                                    <i class="fa fa-solid fa-bars"></i>
                                                </div>
                                            </li>
                                            <li data-tab="#list" class="tab-btn-item">
                                                <div class="product__all-tab-button-icon">
                                                    <i class="fa fa-solid fa-list-ul"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <!--Start Tabs Content Box-->
                                    <div class="tabs-content-box">
                                        <!--Start Tab-->
                                        <div class="tab-content-box-item tab-content-box-item-active" id="grid">
                                            <div class="product__all-tab-content-box-item">
                                                <div class="product__all-tab-single">
                                                    <div class="row">

                                                        <!--Product All Single Start-->
                                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                                            <div class="single-product-style1">
                                                                <div class="single-product-style1__img">
                                                                    <img src="{{ asset('landing-assets/images/shop/shop-product-1-1.jpg') }}"
                                                                        alt="">
                                                                    <img src="{{ asset('landing-assets/images/shop/shop-product-1-1.jpg') }}"
                                                                        alt="">
                                                                    <ul class="single-product-style1__overlay">
                                                                        <li>
                                                                            <p>New</p>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="single-product-style1__info">
                                                                        <li>
                                                                            <a href="#" title="Add to Wishlist">
                                                                                <i class="fa fa-regular fa-heart"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Add to cart">
                                                                                <i class="fa fa-solid fa-cart-plus"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Quick View">
                                                                                <i class="fa fa-regular fa-eye"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Compare">
                                                                                <i class="fa fa-solid fa-repeat"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="single-product-style1__content">
                                                                    <div class="single-product-style1__content-left">
                                                                        <h4>
                                                                            <a href="product-details.html">
                                                                                Soft Lips Night Balm
                                                                            </a>
                                                                        </h4>
                                                                        <p>$33.00</p>
                                                                    </div>
                                                                    <div class="single-product-style1__content-right">
                                                                        <div class="single-product-style1__review">
                                                                            <i class="fa fa-star"></i>
                                                                            <p>4.9</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Product All Single End-->
                                                        <!--Product All Single Start-->
                                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                                            <div class="single-product-style1">
                                                                <div class="single-product-style1__img">
                                                                    <img src="{{ asset('landing-assets/images/shop/shop-product-1-2.jpg') }}"
                                                                        alt="">
                                                                    <img src="{{ asset('landing-assets/images/shop/shop-product-1-2.jpg') }}"
                                                                        alt="">
                                                                    <ul class="single-product-style1__info">
                                                                        <li>
                                                                            <a href="#" title="Add to Wishlist">
                                                                                <i class="fa fa-regular fa-heart"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Add to cart">
                                                                                <i class="fa fa-solid fa-cart-plus"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Quick View">
                                                                                <i class="fa fa-regular fa-eye"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Compare">
                                                                                <i class="fa fa-solid fa-repeat"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="single-product-style1__content">
                                                                    <div class="single-product-style1__content-left">
                                                                        <h4>
                                                                            <a href="product-details.html">
                                                                                Pure Skin Cleanser
                                                                            </a>
                                                                        </h4>
                                                                        <p>$50.00</p>
                                                                    </div>
                                                                    <div class="single-product-style1__content-right">
                                                                        <div class="single-product-style1__review">
                                                                            <i class="fa fa-star"></i>
                                                                            <p>5.0</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Product All Single End-->
                                                        <!--Product All Single Start-->
                                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                                            <div class="single-product-style1">
                                                                <div class="single-product-style1__img">
                                                                    <img src="{{ asset('landing-assets/images/shop/shop-product-1-3.jpg') }}"
                                                                        alt="">
                                                                    <img src="{{ asset('landing-assets/images/shop/shop-product-1-3.jpg') }}"
                                                                        alt="">
                                                                    <ul class="single-product-style1__overlay">
                                                                        <li>
                                                                            <p>5% Off</p>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="single-product-style1__info">
                                                                        <li>
                                                                            <a href="#" title="Add to Wishlist">
                                                                                <i class="fa fa-regular fa-heart"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Add to cart">
                                                                                <i class="fa fa-solid fa-cart-plus"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Quick View">
                                                                                <i class="fa fa-regular fa-eye"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Compare">
                                                                                <i class="fa fa-solid fa-repeat"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="single-product-style1__content">
                                                                    <div class="single-product-style1__content-left">
                                                                        <h4>
                                                                            <a href="product-details.html">
                                                                                Natural Glow Cream
                                                                            </a>
                                                                        </h4>
                                                                        <p><del>$33.00</del> $28.00</p>
                                                                    </div>
                                                                    <div class="single-product-style1__content-right">
                                                                        <div class="single-product-style1__review">
                                                                            <i class="fa fa-star"></i>
                                                                            <p>4.5</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Product All Single End-->
                                                        <!--Product All Single Start-->
                                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                                            <div class="single-product-style1">
                                                                <div class="single-product-style1__img">
                                                                    <img src="{{ asset('landing-assets/images/shop/shop-product-1-4.jpg') }}"
                                                                        alt="">
                                                                    <img src="{{ asset('landing-assets/images/shop/shop-product-1-4.jpg') }}"
                                                                        alt="">
                                                                    <ul class="single-product-style1__info">
                                                                        <li>
                                                                            <a href="#" title="Add to Wishlist">
                                                                                <i class="fa fa-regular fa-heart"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Add to cart">
                                                                                <i class="fa fa-solid fa-cart-plus"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Quick View">
                                                                                <i class="fa fa-regular fa-eye"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Compare">
                                                                                <i class="fa fa-solid fa-repeat"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="single-product-style1__content">
                                                                    <div class="single-product-style1__content-left">
                                                                        <h4>
                                                                            <a href="product-details.html">
                                                                                Skin Care Cream
                                                                            </a>
                                                                        </h4>
                                                                        <p>$40.00</p>
                                                                    </div>
                                                                    <div class="single-product-style1__content-right">
                                                                        <div class="single-product-style1__review">
                                                                            <i class="fa fa-star"></i>
                                                                            <p>4.8</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Product All Single End-->
                                                        <!--Product All Single Start-->
                                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                                            <div class="single-product-style1">
                                                                <div class="single-product-style1__img">
                                                                    <img src="{{ asset('landing-assets/images/shop/shop-product-1-5.jpg') }}"
                                                                        alt="">
                                                                    <img src="{{ asset('landing-assets/images/shop/shop-product-1-5.jpg') }}"
                                                                        alt="">
                                                                    <ul class="single-product-style1__overlay">
                                                                        <li>
                                                                            <p>5% Off</p>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="single-product-style1__info">
                                                                        <li>
                                                                            <a href="#" title="Add to Wishlist">
                                                                                <i class="fa fa-regular fa-heart"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Add to cart">
                                                                                <i class="fa fa-solid fa-cart-plus"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Quick View">
                                                                                <i class="fa fa-regular fa-eye"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Compare">
                                                                                <i class="fa fa-solid fa-repeat"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="single-product-style1__content">
                                                                    <div class="single-product-style1__content-left">
                                                                        <h4>
                                                                            <a href="product-details.html">
                                                                                Face Cream Jar
                                                                            </a>
                                                                        </h4>
                                                                        <p><del>$25.00</del>$20.00</p>
                                                                    </div>
                                                                    <div class="single-product-style1__content-right">
                                                                        <div class="single-product-style1__review">
                                                                            <i class="fa fa-star"></i>
                                                                            <p>4.9</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Product All Single End-->
                                                        <!--Product All Single Start-->
                                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                                            <div class="single-product-style1">
                                                                <div class="single-product-style1__img">
                                                                    <img src="{{ asset('landing-assets/images/shop/shop-product-1-6.jpg') }}"
                                                                        alt="">
                                                                    <img src="{{ asset('landing-assets/images/shop/shop-product-1-6.jpg') }}"
                                                                        alt="">
                                                                    <ul class="single-product-style1__info">
                                                                        <li>
                                                                            <a href="#" title="Add to Wishlist">
                                                                                <i class="fa fa-regular fa-heart"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Add to cart">
                                                                                <i class="fa fa-solid fa-cart-plus"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Quick View">
                                                                                <i class="fa fa-regular fa-eye"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Compare">
                                                                                <i class="fa fa-solid fa-repeat"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="single-product-style1__content">
                                                                    <div class="single-product-style1__content-left">
                                                                        <h4>
                                                                            <a href="product-details.html">
                                                                                Splash Serum Bottle
                                                                            </a>
                                                                        </h4>
                                                                        <p>$35.00</p>
                                                                    </div>
                                                                    <div class="single-product-style1__content-right">
                                                                        <div class="single-product-style1__review">
                                                                            <i class="fa fa-star"></i>
                                                                            <p>4.7</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Product All Single End-->
                                                        <!--Product All Single Start-->
                                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                                            <div class="single-product-style1">
                                                                <div class="single-product-style1__img">
                                                                    <img src="{{ asset('landing-assets/images/shop/shop-product-1-7.jpg') }}"
                                                                        alt="">
                                                                    <img src="{{ asset('landing-assets/images/shop/shop-product-1-7.jpg') }}"
                                                                        alt="">
                                                                    <ul class="single-product-style1__overlay">
                                                                        <li>
                                                                            <p>New</p>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="single-product-style1__info">
                                                                        <li>
                                                                            <a href="#" title="Add to Wishlist">
                                                                                <i class="fa fa-regular fa-heart"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Add to cart">
                                                                                <i class="fa fa-solid fa-cart-plus"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Quick View">
                                                                                <i class="fa fa-regular fa-eye"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Compare">
                                                                                <i class="fa fa-solid fa-repeat"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="single-product-style1__content">
                                                                    <div class="single-product-style1__content-left">
                                                                        <h4>
                                                                            <a href="product-details.html">
                                                                                Monica Cleansing Foam
                                                                            </a>
                                                                        </h4>
                                                                        <p>$27.00</p>
                                                                    </div>
                                                                    <div class="single-product-style1__content-right">
                                                                        <div class="single-product-style1__review">
                                                                            <i class="fa fa-star"></i>
                                                                            <p>4.6</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Product All Single End-->
                                                        <!--Product All Single Start-->
                                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                                            <div class="single-product-style1">
                                                                <div class="single-product-style1__img">
                                                                    <img src="{{ asset('landing-assets/images/shop/shop-product-1-8.jpg') }}"
                                                                        alt="">
                                                                    <img src="{{ asset('landing-assets/images/shop/shop-product-1-8.jpg') }}"
                                                                        alt="">
                                                                    <ul class="single-product-style1__info">
                                                                        <li>
                                                                            <a href="#" title="Add to Wishlist">
                                                                                <i class="fa fa-regular fa-heart"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Add to cart">
                                                                                <i class="fa fa-solid fa-cart-plus"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Quick View">
                                                                                <i class="fa fa-regular fa-eye"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Compare">
                                                                                <i class="fa fa-solid fa-repeat"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="single-product-style1__content">
                                                                    <div class="single-product-style1__content-left">
                                                                        <h4>
                                                                            <a href="product-details.html">
                                                                                Velvet Matte Lipstick
                                                                            </a>
                                                                        </h4>
                                                                        <p>$44.00</p>
                                                                    </div>
                                                                    <div class="single-product-style1__content-right">
                                                                        <div class="single-product-style1__review">
                                                                            <i class="fa fa-star"></i>
                                                                            <p>5.0</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Product All Single End-->
                                                        <!--Product All Single Start-->
                                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                                            <div class="single-product-style1">
                                                                <div class="single-product-style1__img">
                                                                    <img src="{{ asset('landing-assets/images/shop/shop-product-1-9.jpg') }}"
                                                                        alt="">
                                                                    <img src="{{ asset('landing-assets/images/shop/shop-product-1-9.jpg') }}"
                                                                        alt="">
                                                                    <ul class="single-product-style1__overlay">
                                                                        <li>
                                                                            <p>3% Off</p>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="single-product-style1__info">
                                                                        <li>
                                                                            <a href="#" title="Add to Wishlist">
                                                                                <i class="fa fa-regular fa-heart"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Add to cart">
                                                                                <i class="fa fa-solid fa-cart-plus"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Quick View">
                                                                                <i class="fa fa-regular fa-eye"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Compare">
                                                                                <i class="fa fa-solid fa-repeat"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="single-product-style1__content">
                                                                    <div class="single-product-style1__content-left">
                                                                        <h4>
                                                                            <a href="product-details.html">
                                                                                Hydrating Skin Care Set
                                                                            </a>
                                                                        </h4>
                                                                        <p><del>$49.00</del>$52.00</p>
                                                                    </div>
                                                                    <div class="single-product-style1__content-right">
                                                                        <div class="single-product-style1__review">
                                                                            <i class="fa fa-star"></i>
                                                                            <p>4.9</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Product All Single End-->
                                                        <!--Product All Single Start-->
                                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                                            <div class="single-product-style1">
                                                                <div class="single-product-style1__img">
                                                                    <img src="{{ asset('landing-assets/images/shop/shop-product-1-10.jpg') }}"
                                                                        alt="">
                                                                    <img src="{{ asset('landing-assets/images/shop/shop-product-1-10.jpg') }}"
                                                                        alt="">
                                                                    <ul class="single-product-style1__info">
                                                                        <li>
                                                                            <a href="#" title="Add to Wishlist">
                                                                                <i class="fa fa-regular fa-heart"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Add to cart">
                                                                                <i class="fa fa-solid fa-cart-plus"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Quick View">
                                                                                <i class="fa fa-regular fa-eye"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Compare">
                                                                                <i class="fa fa-solid fa-repeat"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="single-product-style1__content">
                                                                    <div class="single-product-style1__content-left">
                                                                        <h4>
                                                                            <a href="product-details.html">
                                                                                Rose Glow Face Cream
                                                                            </a>
                                                                        </h4>
                                                                        <p>$25.00</p>
                                                                    </div>
                                                                    <div class="single-product-style1__content-right">
                                                                        <div class="single-product-style1__review">
                                                                            <i class="fa fa-star"></i>
                                                                            <p>4.7</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Product All Single End-->
                                                        <!--Product All Single Start-->
                                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                                            <div class="single-product-style1">
                                                                <div class="single-product-style1__img">
                                                                    <img src="{{ asset('landing-assets/images/shop/shop-product-1-11.jpg') }}"
                                                                        alt="">
                                                                    <img src="{{ asset('landing-assets/images/shop/shop-product-1-11.jpg') }}"
                                                                        alt="">
                                                                    <ul class="single-product-style1__overlay">
                                                                        <li>
                                                                            <p>New</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>7% Off</p>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="single-product-style1__info">
                                                                        <li>
                                                                            <a href="#" title="Add to Wishlist">
                                                                                <i class="fa fa-regular fa-heart"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Add to cart">
                                                                                <i class="fa fa-solid fa-cart-plus"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Quick View">
                                                                                <i class="fa fa-regular fa-eye"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Compare">
                                                                                <i class="fa fa-solid fa-repeat"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="single-product-style1__content">
                                                                    <div class="single-product-style1__content-left">
                                                                        <h4>
                                                                            <a href="product-details.html">
                                                                                Vitamin C Serum
                                                                            </a>
                                                                        </h4>
                                                                        <p><del>$36.00</del>$43.00</p>
                                                                    </div>
                                                                    <div class="single-product-style1__content-right">
                                                                        <div class="single-product-style1__review">
                                                                            <i class="fa fa-star"></i>
                                                                            <p>4.9</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Product All Single End-->
                                                        <!--Product All Single Start-->
                                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                                            <div class="single-product-style1">
                                                                <div class="single-product-style1__img">
                                                                    <img src="{{ asset('landing-assets/images/shop/shop-product-1-12.jpg') }}"
                                                                        alt="">
                                                                    <img src="{{ asset('landing-assets/images/shop/shop-product-1-12.jpg') }}"
                                                                        alt="">
                                                                    <ul class="single-product-style1__info">
                                                                        <li>
                                                                            <a href="#" title="Add to Wishlist">
                                                                                <i class="fa fa-regular fa-heart"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Add to cart">
                                                                                <i class="fa fa-solid fa-cart-plus"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Quick View">
                                                                                <i class="fa fa-regular fa-eye"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" title="Compare">
                                                                                <i class="fa fa-solid fa-repeat"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="single-product-style1__content">
                                                                    <div class="single-product-style1__content-left">
                                                                        <h4>
                                                                            <a href="product-details.html">
                                                                                Deep Moisture Cream
                                                                            </a>
                                                                        </h4>
                                                                        <p>$28.00</p>
                                                                    </div>
                                                                    <div class="single-product-style1__content-right">
                                                                        <div class="single-product-style1__review">
                                                                            <i class="fa fa-star"></i>
                                                                            <p>4.6</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Product All Single End-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Tab-->
                                        <!--Start Tab-->
                                        <div class="tab-content-box-item" id="list">
                                            <div class="product__all-tab-content-box-item">
                                                <div class="product__all-tab-single">
                                                    <div class="row">

                                                        <!--Product All Single Start-->
                                                        <div class="col-xl-6 col-lg-6">
                                                            <div class="single-product-style2">
                                                                <div class="row">
                                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                                        <div class="single-product-style2__img">
                                                                            <img src="{{ asset('landing-assets/images/shop/shop-product-2-1.jpg') }}"
                                                                                alt="">
                                                                            <img src="{{ asset('landing-assets/images/shop/shop-product-2-1.jpg') }}"
                                                                                alt="">
                                                                            <ul class="single-product-style1__overlay">
                                                                                <li>
                                                                                    <p>New</p>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                                        <div class="single-product-style2__content">
                                                                            <div class="single-product-style2__review">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                            </div>
                                                                            <div class="single-product-style2__text">
                                                                                <h4>
                                                                                    <a href="product-details.html">
                                                                                        Soft Lips Night Balm
                                                                                    </a>
                                                                                </h4>
                                                                                <p>$33.00</p>
                                                                            </div>
                                                                            <ul class="single-product-style2__info">
                                                                                <li>
                                                                                    <a href="#" title="Add to Wishlist">
                                                                                        <i
                                                                                            class="fa fa-regular fa-heart">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Add to cart">
                                                                                        <i
                                                                                            class="fa fa-solid fa-cart-plus">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Quick View">
                                                                                        <i class="fa fa-regular fa-eye">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Compare">
                                                                                        <i
                                                                                            class="fa fa-solid fa-repeat">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Product All Single Start-->
                                                        <!--Product All Single Start-->
                                                        <div class="col-xl-6 col-lg-6">
                                                            <div class="single-product-style2">
                                                                <div class="row">
                                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                                        <div class="single-product-style2__img">
                                                                            <img src="{{ asset('landing-assets/images/shop/shop-product-2-2.jpg') }}"
                                                                                alt="">
                                                                            <img src="{{ asset('landing-assets/images/shop/shop-product-2-2.jpg') }}"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                                        <div class="single-product-style2__content">
                                                                            <div class="single-product-style2__review">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                            </div>
                                                                            <div class="single-product-style2__text">
                                                                                <h4>
                                                                                    <a href="product-details.html">
                                                                                        Pure Skin Cleanser
                                                                                    </a>
                                                                                </h4>
                                                                                <p>$50.00</p>
                                                                            </div>
                                                                            <ul class="single-product-style2__info">
                                                                                <li>
                                                                                    <a href="#" title="Add to Wishlist">
                                                                                        <i
                                                                                            class="fa fa-regular fa-heart">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Add to cart">
                                                                                        <i
                                                                                            class="fa fa-solid fa-cart-plus">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Quick View">
                                                                                        <i class="fa fa-regular fa-eye">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Compare">
                                                                                        <i
                                                                                            class="fa fa-solid fa-repeat">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Product All Single Start-->
                                                        <!--Product All Single Start-->
                                                        <div class="col-xl-6 col-lg-6">
                                                            <div class="single-product-style2">
                                                                <div class="row">
                                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                                        <div class="single-product-style2__img">
                                                                            <img src="{{ asset('landing-assets/images/shop/shop-product-2-3.jpg') }}"
                                                                                alt="">
                                                                            <img src="{{ asset('landing-assets/images/shop/shop-product-2-3.jpg') }}"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                                        <div class="single-product-style2__content">
                                                                            <div class="single-product-style2__review">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                            </div>
                                                                            <div class="single-product-style2__text">
                                                                                <h4>
                                                                                    <a href="product-details.html">
                                                                                        Natural Glow Cream
                                                                                    </a>
                                                                                </h4>
                                                                                <p>$40.00</p>
                                                                            </div>
                                                                            <ul class="single-product-style2__info">
                                                                                <li>
                                                                                    <a href="#" title="Add to Wishlist">
                                                                                        <i
                                                                                            class="fa fa-regular fa-heart">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Add to cart">
                                                                                        <i
                                                                                            class="fa fa-solid fa-cart-plus">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Quick View">
                                                                                        <i class="fa fa-regular fa-eye">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Compare">
                                                                                        <i
                                                                                            class="fa fa-solid fa-repeat">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Product All Single Start-->
                                                        <!--Product All Single Start-->
                                                        <div class="col-xl-6 col-lg-6">
                                                            <div class="single-product-style2">
                                                                <div class="row">
                                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                                        <div class="single-product-style2__img">
                                                                            <img src="{{ asset('landing-assets/images/shop/shop-product-2-4.jpg') }}"
                                                                                alt="">
                                                                            <img src="{{ asset('landing-assets/images/shop/shop-product-2-4.jpg') }}"
                                                                                alt="">
                                                                        </div>
                                                                        <ul class="single-product-style1__overlay">
                                                                            <li>
                                                                                <p>5% Off</p>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                                        <div class="single-product-style2__content">
                                                                            <div class="single-product-style2__review">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                            </div>
                                                                            <div class="single-product-style2__text">
                                                                                <h4>
                                                                                    <a href="product-details.html">
                                                                                        Skin Care Cream
                                                                                    </a>
                                                                                </h4>
                                                                                <p><del>$33.00</del>$28.00</p>
                                                                            </div>
                                                                            <ul class="single-product-style2__info">
                                                                                <li>
                                                                                    <a href="#" title="Add to Wishlist">
                                                                                        <i
                                                                                            class="fa fa-regular fa-heart">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Add to cart">
                                                                                        <i
                                                                                            class="fa fa-solid fa-cart-plus">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Quick View">
                                                                                        <i class="fa fa-regular fa-eye">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Compare">
                                                                                        <i
                                                                                            class="fa fa-solid fa-repeat">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Product All Single Start-->
                                                        <!--Product All Single Start-->
                                                        <div class="col-xl-6 col-lg-6">
                                                            <div class="single-product-style2">
                                                                <div class="row">
                                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                                        <div class="single-product-style2__img">
                                                                            <img src="{{ asset('landing-assets/images/shop/shop-product-2-5.jpg') }}"
                                                                                alt="">
                                                                            <img src="{{ asset('landing-assets/images/shop/shop-product-2-5.jpg') }}"
                                                                                alt="">
                                                                        </div>
                                                                        <ul class="single-product-style1__overlay">
                                                                            <li>
                                                                                <p>5% Off</p>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                                        <div class="single-product-style2__content">
                                                                            <div class="single-product-style2__review">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                            </div>
                                                                            <div class="single-product-style2__text">
                                                                                <h4>
                                                                                    <a href="product-details.html">
                                                                                        Face Cream Jar
                                                                                    </a>
                                                                                </h4>
                                                                                <p><del>$25.00</del>$20.00</p>
                                                                            </div>
                                                                            <ul class="single-product-style2__info">
                                                                                <li>
                                                                                    <a href="#" title="Add to Wishlist">
                                                                                        <i
                                                                                            class="fa fa-regular fa-heart">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Add to cart">
                                                                                        <i
                                                                                            class="fa fa-solid fa-cart-plus">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Quick View">
                                                                                        <i class="fa fa-regular fa-eye">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Compare">
                                                                                        <i
                                                                                            class="fa fa-solid fa-repeat">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Product All Single Start-->
                                                        <!--Product All Single Start-->
                                                        <div class="col-xl-6 col-lg-6">
                                                            <div class="single-product-style2">
                                                                <div class="row">
                                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                                        <div class="single-product-style2__img">
                                                                            <img src="{{ asset('landing-assets/images/shop/shop-product-2-6.jpg') }}"
                                                                                alt="">
                                                                            <img src="{{ asset('landing-assets/images/shop/shop-product-2-6.jpg') }}"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                                        <div class="single-product-style2__content">
                                                                            <div class="single-product-style2__review">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                            </div>
                                                                            <div class="single-product-style2__text">
                                                                                <h4>
                                                                                    <a href="product-details.html">
                                                                                        Splash Serum Bottle
                                                                                    </a>
                                                                                </h4>
                                                                                <p>$35.00</p>
                                                                            </div>
                                                                            <ul class="single-product-style2__info">
                                                                                <li>
                                                                                    <a href="#" title="Add to Wishlist">
                                                                                        <i
                                                                                            class="fa fa-regular fa-heart">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Add to cart">
                                                                                        <i
                                                                                            class="fa fa-solid fa-cart-plus">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Quick View">
                                                                                        <i class="fa fa-regular fa-eye">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Compare">
                                                                                        <i
                                                                                            class="fa fa-solid fa-repeat">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Product All Single Start-->
                                                        <!--Product All Single Start-->
                                                        <div class="col-xl-6 col-lg-6">
                                                            <div class="single-product-style2">
                                                                <div class="row">
                                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                                        <div class="single-product-style2__img">
                                                                            <img src="{{ asset('landing-assets/images/shop/shop-product-2-7.jpg') }}"
                                                                                alt="">
                                                                            <img src="{{ asset('landing-assets/images/shop/shop-product-2-7.jpg') }}"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                                        <div class="single-product-style2__content">
                                                                            <div class="single-product-style2__review">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                            </div>
                                                                            <div class="single-product-style2__text">
                                                                                <h4>
                                                                                    <a href="product-details.html">
                                                                                        Monica Cleansing Foam
                                                                                    </a>
                                                                                </h4>
                                                                                <p>$44.00</p>
                                                                            </div>
                                                                            <ul class="single-product-style2__info">
                                                                                <li>
                                                                                    <a href="#" title="Add to Wishlist">
                                                                                        <i
                                                                                            class="fa fa-regular fa-heart">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Add to cart">
                                                                                        <i
                                                                                            class="fa fa-solid fa-cart-plus">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Quick View">
                                                                                        <i class="fa fa-regular fa-eye">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Compare">
                                                                                        <i
                                                                                            class="fa fa-solid fa-repeat">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Product All Single Start-->
                                                        <!--Product All Single Start-->
                                                        <div class="col-xl-6 col-lg-6">
                                                            <div class="single-product-style2">
                                                                <div class="row">
                                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                                        <div class="single-product-style2__img">
                                                                            <img src="{{ asset('landing-assets/images/shop/shop-product-2-8.jpg') }}"
                                                                                alt="">
                                                                            <img src="{{ asset('landing-assets/images/shop/shop-product-2-8.jpg') }}"
                                                                                alt="">
                                                                            <ul class="single-product-style1__overlay">
                                                                                <li>
                                                                                    <p>New</p>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                                        <div class="single-product-style2__content">
                                                                            <div class="single-product-style2__review">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                            </div>
                                                                            <div class="single-product-style2__text">
                                                                                <h4>
                                                                                    <a href="product-details.html">
                                                                                        Velvet Matte Lipstick
                                                                                    </a>
                                                                                </h4>
                                                                                <p>$27.00</p>
                                                                            </div>
                                                                            <ul class="single-product-style2__info">
                                                                                <li>
                                                                                    <a href="#" title="Add to Wishlist">
                                                                                        <i
                                                                                            class="fa fa-regular fa-heart">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Add to cart">
                                                                                        <i
                                                                                            class="fa fa-solid fa-cart-plus">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Quick View">
                                                                                        <i class="fa fa-regular fa-eye">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Compare">
                                                                                        <i
                                                                                            class="fa fa-solid fa-repeat">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Product All Single Start-->
                                                        <!--Product All Single Start-->
                                                        <div class="col-xl-6 col-lg-6">
                                                            <div class="single-product-style2">
                                                                <div class="row">
                                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                                        <div class="single-product-style2__img">
                                                                            <img src="{{ asset('landing-assets/images/shop/shop-product-2-9.jpg') }}"
                                                                                alt="">
                                                                            <img src="{{ asset('landing-assets/images/shop/shop-product-2-9.jpg') }}"
                                                                                alt="">
                                                                            <ul class="single-product-style1__overlay">
                                                                                <li>
                                                                                    <p>3% Off</p>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                                        <div class="single-product-style2__content">
                                                                            <div class="single-product-style2__review">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                            </div>
                                                                            <div class="single-product-style2__text">
                                                                                <h4>
                                                                                    <a href="product-details.html">
                                                                                        Hydrating Skin Care Set
                                                                                    </a>
                                                                                </h4>
                                                                                <p><del>$49.00</del>$52.00</p>
                                                                            </div>
                                                                            <ul class="single-product-style2__info">
                                                                                <li>
                                                                                    <a href="#" title="Add to Wishlist">
                                                                                        <i
                                                                                            class="fa fa-regular fa-heart">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Add to cart">
                                                                                        <i
                                                                                            class="fa fa-solid fa-cart-plus">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Quick View">
                                                                                        <i class="fa fa-regular fa-eye">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Compare">
                                                                                        <i
                                                                                            class="fa fa-solid fa-repeat">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Product All Single Start-->
                                                        <!--Product All Single Start-->
                                                        <div class="col-xl-6 col-lg-6">
                                                            <div class="single-product-style2">
                                                                <div class="row">
                                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                                        <div class="single-product-style2__img">
                                                                            <img src="{{ asset('landing-assets/images/shop/shop-product-2-10.jpg') }}"
                                                                                alt="">
                                                                            <img src="{{ asset('landing-assets/images/shop/shop-product-2-10.jpg') }}"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                                        <div class="single-product-style2__content">
                                                                            <div class="single-product-style2__review">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                            </div>
                                                                            <div class="single-product-style2__text">
                                                                                <h4>
                                                                                    <a href="product-details.html">
                                                                                        Rose Glow Face Cream
                                                                                    </a>
                                                                                </h4>
                                                                                <p><del>$33.00</del>$28.00</p>
                                                                            </div>
                                                                            <ul class="single-product-style2__info">
                                                                                <li>
                                                                                    <a href="#" title="Add to Wishlist">
                                                                                        <i
                                                                                            class="fa fa-regular fa-heart">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Add to cart">
                                                                                        <i
                                                                                            class="fa fa-solid fa-cart-plus">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Quick View">
                                                                                        <i class="fa fa-regular fa-eye">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Compare">
                                                                                        <i
                                                                                            class="fa fa-solid fa-repeat">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Product All Single Start-->
                                                        <!--Product All Single Start-->
                                                        <div class="col-xl-6 col-lg-6">
                                                            <div class="single-product-style2">
                                                                <div class="row">
                                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                                        <div class="single-product-style2__img">
                                                                            <img src="{{ asset('landing-assets/images/shop/shop-product-2-11.jpg') }}"
                                                                                alt="">
                                                                            <img src="{{ asset('landing-assets/images/shop/shop-product-2-11.jpg') }}"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                                        <div class="single-product-style2__content">
                                                                            <div class="single-product-style2__review">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                            </div>
                                                                            <div class="single-product-style2__text">
                                                                                <h4>
                                                                                    <a href="product-details.html">
                                                                                        Vitamin C Serum
                                                                                    </a>
                                                                                </h4>
                                                                                <p>$40.00</p>
                                                                            </div>
                                                                            <ul class="single-product-style2__info">
                                                                                <li>
                                                                                    <a href="#" title="Add to Wishlist">
                                                                                        <i
                                                                                            class="fa fa-regular fa-heart">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Add to cart">
                                                                                        <i
                                                                                            class="fa fa-solid fa-cart-plus">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Quick View">
                                                                                        <i class="fa fa-regular fa-eye">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Compare">
                                                                                        <i
                                                                                            class="fa fa-solid fa-repeat">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Product All Single Start-->
                                                        <!--Product All Single Start-->
                                                        <div class="col-xl-6 col-lg-6">
                                                            <div class="single-product-style2">
                                                                <div class="row">
                                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                                        <div class="single-product-style2__img">
                                                                            <img src="{{ asset('landing-assets/images/shop/shop-product-2-12.jpg') }}"
                                                                                alt="">
                                                                            <img src="{{ asset('landing-assets/images/shop/shop-product-2-12.jpg') }}"
                                                                                alt="">
                                                                        </div>
                                                                        <ul class="single-product-style1__overlay">
                                                                            <li>
                                                                                <p>New</p>
                                                                            </li>
                                                                            <li>
                                                                                <p>7% Off</p>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                                        <div class="single-product-style2__content">
                                                                            <div class="single-product-style2__review">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                            </div>
                                                                            <div class="single-product-style2__text">
                                                                                <h4>
                                                                                    <a href="product-details.html">
                                                                                        Deep Moisture Cream
                                                                                    </a>
                                                                                </h4>
                                                                                <p><del>$36.00</del>$43.00</p>
                                                                            </div>
                                                                            <ul class="single-product-style2__info">
                                                                                <li>
                                                                                    <a href="#" title="Add to Wishlist">
                                                                                        <i
                                                                                            class="fa fa-regular fa-heart">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Add to cart">
                                                                                        <i
                                                                                            class="fa fa-solid fa-cart-plus">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Quick View">
                                                                                        <i class="fa fa-regular fa-eye">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Compare">
                                                                                        <i
                                                                                            class="fa fa-solid fa-repeat">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Product All Single Start-->
                                                        <!--Product All Single Start-->
                                                        <div class="col-xl-6 col-lg-6">
                                                            <div class="single-product-style2">
                                                                <div class="row">
                                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                                        <div class="single-product-style2__img">
                                                                            <img src="{{ asset('landing-assets/images/shop/shop-product-2-1.jpg') }}"
                                                                                alt="">
                                                                            <img src="{{ asset('landing-assets/images/shop/shop-product-2-1.jpg') }}"
                                                                                alt="">
                                                                            <ul class="single-product-style1__overlay">
                                                                                <li>
                                                                                    <p>New</p>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                                        <div class="single-product-style2__content">
                                                                            <div class="single-product-style2__review">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                            </div>
                                                                            <div class="single-product-style2__text">
                                                                                <h4>
                                                                                    <a href="product-details.html">
                                                                                        Soft Lips Night Balm
                                                                                    </a>
                                                                                </h4>
                                                                                <p>$55.00</p>
                                                                            </div>
                                                                            <ul class="single-product-style2__info">
                                                                                <li>
                                                                                    <a href="#" title="Add to Wishlist">
                                                                                        <i
                                                                                            class="fa fa-regular fa-heart">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Add to cart">
                                                                                        <i
                                                                                            class="fa fa-solid fa-cart-plus">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Quick View">
                                                                                        <i class="fa fa-regular fa-eye">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Compare">
                                                                                        <i
                                                                                            class="fa fa-solid fa-repeat">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Product All Single Start-->
                                                        <!--Product All Single Start-->
                                                        <div class="col-xl-6 col-lg-6">
                                                            <div class="single-product-style2">
                                                                <div class="row">
                                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                                        <div class="single-product-style2__img">
                                                                            <img src="{{ asset('landing-assets/images/shop/shop-product-2-2.jpg') }}"
                                                                                alt="">
                                                                            <img src="{{ asset('landing-assets/images/shop/shop-product-2-2.jpg') }}"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                                        <div class="single-product-style2__content">
                                                                            <div class="single-product-style2__review">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                            </div>
                                                                            <div class="single-product-style2__text">
                                                                                <h4>
                                                                                    <a href="product-details.html">
                                                                                        Pure Skin Cleanser
                                                                                    </a>
                                                                                </h4>
                                                                                <p>$80.00</p>
                                                                            </div>
                                                                            <ul class="single-product-style2__info">
                                                                                <li>
                                                                                    <a href="#" title="Add to Wishlist">
                                                                                        <i
                                                                                            class="fa fa-regular fa-heart">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Add to cart">
                                                                                        <i
                                                                                            class="fa fa-solid fa-cart-plus">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Quick View">
                                                                                        <i class="fa fa-regular fa-eye">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" title="Compare">
                                                                                        <i
                                                                                            class="fa fa-solid fa-repeat">
                                                                                        </i>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Product All Single Start-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Tab-->
                                    </div>
                                    <!--End Tabs Content Box-->
                                </div>
                                <ul class="styled-pagination text-center clearfix list-unstyled">
                                    <li class="arrow prev active">
                                        <a href="#">
                                            <span class="fas fa-angle-left"></span>
                                        </a>
                                    </li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="arrow next">
                                        <a href="#">
                                            <span class="fas fa-angle-right"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-12">
                        <div class="product__sidebar">
                            <div class="shop-search product__sidebar-single">
                                <form action="#">
                                    <input type="text" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <div class="product__price-ranger product__sidebar-single">
                                <h3 class="product__sidebar-title">Price</h3>
                                <div class="price-ranger">
                                    <div id="slider-range"></div>
                                    <div class="ranger-min-max-block">
                                        <input type="text" readonly class="min">
                                        <span>-</span>
                                        <input type="text" readonly class="max">
                                        <input type="submit" value="Filter">
                                    </div>
                                </div>
                            </div>

                            <div class="shop-category product__sidebar-single">
                                <h3 class="product__sidebar-title">Categories</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#">Facial Cleansers</a></li>
                                    <li class="active"><a href="#">Glow Serums</a></li>
                                    <li><a href="#">Face Moisturizers</a></li>
                                    <li><a href="#">Lip Treatments</a></li>
                                    <li><a href="#">Night Care</a></li>
                                </ul>
                            </div>

                            <div class="shop-product-recent-products product__sidebar-single">
                                <h3 class="product__sidebar-title">Recent Products</h3>
                                <ul class="clearfix list-unstyled">
                                    <li>
                                        <div class="img">
                                            <img src="{{ asset('landing-assets/images/shop/product-thumb-1.jpg') }}" alt="Product">
                                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="content">
                                            <div class="title">
                                                <h5><a href="#">Soft Lips Night Balm</a></h5>
                                            </div>
                                            <div class="price">
                                                <p>$33.00</p>
                                            </div>
                                            <div class="review">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star color"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img">
                                            <img src="{{ asset('landing-assets/images/shop/product-thumb-2.jpg') }}" alt="Product">
                                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="content">
                                            <div class="title">
                                                <h5><a href="#">Pure Skin Cleanser</a></h5>
                                            </div>
                                            <div class="price">
                                                <p>$39.00</p>
                                            </div>
                                            <div class="review">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star color"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img">
                                            <img src="{{ asset('landing-assets/images/shop/product-thumb-3.jpg') }}" alt="Product">
                                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="content">
                                            <div class="title">
                                                <h5><a href="#">Natural Glow Cream</a></h5>
                                            </div>
                                            <div class="price">
                                                <p>$54.00</p>
                                            </div>
                                            <div class="review">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star color"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img">
                                            <img src="{{ asset('landing-assets/images/shop/product-thumb-4.jpg') }}" alt="Product">
                                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="content">
                                            <div class="title">
                                                <h5><a href="#">Vitamin C Serum</a></h5>
                                            </div>
                                            <div class="price">
                                                <p>$44.00</p>
                                            </div>
                                            <div class="review">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star color"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="shop-product-tags product__sidebar-single">
                                <h3 class="product__sidebar-title">Product Tags</h3>
                                <div class="shop-product__tags-list">
                                    <a href="#">Skincare</a>
                                    <a href="#">Face Wash</a>
                                    <a href="#">Moisturizer</a>
                                    <a href="#">Serum</a>
                                    <a href="#">Sunscreen</a>
                                    <a href="#">Acne Care</a>
                                </div>
                            </div>

                            <!--Start Products Style1 Single Sidear -->
                            <div class="shop-product-tags product__sidebar-single style">
                                <h3 class="product__sidebar-title">Reviews</h3>
                                <div class="sidebar-rating-box sidebar-rating-box--style2">
                                    <ul class="list-unstyled">
                                        <li>
                                            <input type="radio" id="fivestar" name="rating" checked="checked">
                                            <label for="fivestar">
                                                <i></i>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" id="fourstar" name="rating">
                                            <label for="fourstar">
                                                <i></i>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star gray"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" id="threestar" name="rating">
                                            <label for="threestar">
                                                <i></i>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star gray"></span>
                                                <span class="fas fa-star gray"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" id="twostar" name="rating">
                                            <label for="twostar">
                                                <i></i>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star gray"></span>
                                                <span class="fas fa-star gray"></span>
                                                <span class="fas fa-star gray"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" id="onestar" name="rating">
                                            <label for="onestar">
                                                <i></i>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star gray"></span>
                                                <span class="fas fa-star gray"></span>
                                                <span class="fas fa-star gray"></span>
                                                <span class="fas fa-star gray"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--End Products Style1 Single Sidear -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Product End-->

        <!--Site Footer Start-->
@endsection
