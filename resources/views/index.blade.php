@extends('layout.main')

@section('content')
    <!-- Slider/Intro Section Start -->
    <div class="intro11-slider-wrap section">
        <div class="intro11-slider swiper-container">
            <div class="swiper-wrapper">
                <div class="intro11-section swiper-slide slide-1 slide-bg-1 bg-position">
                    <!-- Intro Content Start -->
                    <div class="intro11-content text-left">
                        <h3 class="title-slider text-uppercase">Top Trend</h3>
                        <h2 class="title">2022 Flower Trend</h2>
                        <p class="desc-content">Lorem ipsum dolor sit amet, pri autem nemore bonorum te. Autem fierent ullamcorper ius no, nec ea quodsi invenire. </p>

                    </div>
                    <!-- Intro Content End -->
                </div>
                <div class="intro11-section swiper-slide slide-2 slide-bg-1 bg-position">
                    <!-- Intro Content Start -->
                    <div class="intro11-content text-left">
                        <h3 class="title-slider black-slider-title text-uppercase">Collection</h3>
                        <h2 class="title">Flowers and Candle <br> Birthday Gift</h2>
                        <p class="desc-content">Lorem ipsum dolor sit amet, pri autem nemore bonorum te. Autem fierent ullamcorper ius no, nec ea quodsi invenire. </p>

                    </div>
                    <!-- Intro Content End -->
                </div>
            </div>
            <!-- Slider Navigation -->
            <div class="home1-slider-prev swiper-button-prev main-slider-nav"><i class="lnr lnr-arrow-left"></i></div>
            <div class="home1-slider-next swiper-button-next main-slider-nav"><i class="lnr lnr-arrow-right"></i></div>
            <!-- Slider pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Slider/Intro Section End -->
    <!-- Product Countdown Area Start Here -->
    <div class="product-countdown-area mt-text-3">
        <div class="container custom-area">
            <div class="row">
                <!--Section Title Start-->
                <div class="col-12 col-custom">
                    <div class="section-title text-center mb-30">
                        <h3 class="section-title-3"><a href="/toko">Our Mitra Store</a></h3>
                    </div>
                </div>
                <!--Section Title End-->
            </div>
            <div class="row">
            </div>
            <div class="row product-row">
                <div class="col-12 col-custom">
                    <div class="item-carousel-2 swiper-container anime-element-multi product-area">
                        <div class="swiper-wrapper">
                            @foreach ($mitras as $mitra)
                            <div class="single-item swiper-slide">
                                <!--Single Product Start-->
                                <div class="single-product position-relative mb-30">
                                    <div class="product-image">
                                        <a class="d-block" href="{{route('allproduct', $mitra->id)}}">
                                            <img src="{{ asset('storage/users/'.$mitra->image) }}" alt="" class="product-image-1 w-100">
                                        </a>

                                        <div class="add-action d-flex flex-column position-absolute">

                                            <a href="{{route('allproduct', $mitra->id)}}" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                                <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h4 class="title-2"> <a href={{route('allproduct', $mitra->id)}}>{{$mitra->name}}</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <!--Single Product End-->
                            </div>
                            @endforeach
                        </div>
                        <!-- Slider pagination -->
                        <div class="swiper-pagination default-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Countdown Area End Here -->
    <br>
    <br>
    <br>
    <!--Product Area Start-->
    <div class="product-area mt-text-2 mb-text-3">
        <div class="container custom-area-2 overflow-hidden">
            <div class="row">
                <!--Section Title Start-->
                <div class="col-12 col-custom">
                    <div class="section-title text-center mb-30">
                        <span class="section-title-1">Wonderful gift</span>
                        <h3 class="section-title-3">Featured Products</h3>
                    </div>
                </div>
                <!--Section Title End-->
            </div>
            <div class="row product-row">
                <div class="col-12 col-custom">
                    <div class="product-slider swiper-container anime-element-multi">
                        <div class="swiper-wrapper">
                            <div class="single-item swiper-slide">
                                <!--Single Product Start-->
                                @foreach ($products as $product)
                                <div class="single-product position-relative mb-30">
                                    <div class="product-image">
                                        <a class="d-block" href="{{route('product.detail', $product->id)}}">
                                            <img src="{{ asset('storage/products/'.$product->image) }}" alt="" class="product-image-1 w-100">
                                        </a>

                                        <div class="add-action d-flex flex-column position-absolute">
                                            <a href="{{route('product.detail', $product->id)}}" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                                <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h4 class="title-2"> <a href="{{route('product.detail', $product->id)}}">{{$product->name}}</a></h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price ">Rp. {{number_format($product->price)}}</span>

                                        </div>
                                        <a href="{{route('product.detail', $product->id)}}" class="btn flosun-button secondary-btn rounded-0">Detail</a>
                                    </div>
                                </div>
                                @endforeach
                                <!--Single Product End-->
                            </div>
                        </div>
                        <!-- Slider pagination -->
                        <div class="swiper-pagination default-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Product Area End-->
    <!-- History Area Start Here -->
    <div class="our-history-area pt-text-3">
        <div class="container">
            <div class="row">
                <!--Section Title Start-->
                <div class="col-12">
                    <div class="section-title text-center mb-30">
                        <span class="section-title-1">A little Story About Us</span>
                        <h2 class="section-title-large">E - Blossom</h2>
                    </div>
                </div>
                <!--Section Title End-->
            </div>
            <div class="row">
                <div class="col-lg-8 ms-auto me-auto">
                    <div class="history-area-content pb-0 mb-0 border-0 text-center">
                        <p><strong>Lorem Ipsum</strong></p>
                        <p>Lorem Ipsum</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- History Area End Here -->

    <!-- Testimonial Area Start Here -->
    <div class="testimonial-area mt-text-2">
        <div class="container custom-area">
            <div class="row">
                <!--Section Title Start-->
                <div class="col-12 col-custom">
                    <div class="section-title text-center">
                        <span class="section-title-1">We Love Our Clients</span>
                        <h3 class="section-title-3">What They’re Saying</h3>
                    </div>
                </div>
                <!--Section Title End-->
            </div>
            <div class="row">
                <div class="testimonial-carousel swiper-container intro11-carousel-wrap col-12 col-custom">
                    <div class="swiper-wrapper">
                        <div class="single-item swiper-slide">
                            <!--Single Testimonial Start-->
                            <div class="single-testimonial text-center">
                                <div class="testimonial-img">
                                    <img src="assets/images/testimonial/testimonial1.jpg" alt="">
                                </div>
                                <div class="testimonial-content">
                                    <p>These guys have been absolutely outstanding. Perfect Themes and the best of all that you have many options to choose! Best Support team ever! Very fast responding! Thank you very much! I highly recommend this theme and these people!</p>
                                    <div class="testimonial-author">
                                        <h6>Katherine Sullivan <span>Customer</span></h6>
                                    </div>
                                </div>
                            </div>
                            <!--Single Testimonial End-->
                        </div>
                        <div class="single-item swiper-slide">
                            <!--Single Testimonial Start-->
                            <div class="single-testimonial text-center">
                                <div class="testimonial-img">
                                    <img src="assets/images/testimonial/testimonial2.jpg" alt="">
                                </div>
                                <div class="testimonial-content">
                                    <p>These guys have been absolutely outstanding. Perfect Themes and the best of all that you have many options to choose! Best Support team ever! Very fast responding! Thank you very much! I highly recommend this theme and these people!</p>
                                    <div class="testimonial-author">
                                        <h6>Alex Jhon <span>Customer</span></h6>
                                    </div>
                                </div>
                            </div>
                            <!--Single Testimonial End-->
                        </div>
                    </div>
                    <!-- Slider Navigation -->
                    <div class="home1-slider-prev swiper-button-prev main-slider-nav"><i class="lnr lnr-arrow-left"></i></div>
                    <div class="home1-slider-next swiper-button-next main-slider-nav"><i class="lnr lnr-arrow-right"></i></div>
                    <!-- Slider pagination -->
                    <div class="swiper-pagination default-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Area End Here -->
    <br>
    <br>

@endsection
