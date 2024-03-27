@extends('layout.main2')

@section('content')
    <!-- Slider/Intro Section Start -->
    <div class="intro11-slider-wrap section-2 mrl-50">
        <div class="intro11-slider swiper-container">
            <div class="swiper-wrapper">
                <div class="intro11-section swiper-slide slide-4 slide-bg-2 bg-position">
                    <!-- Intro Content Start -->
                    <div class="intro11-content-2 text-center">
                        <h1 class="different-title">Welcome</h1>
                        <h2 class="title">2022 Flower Trend</h2>

                    </div>
                    <!-- Intro Content End -->
                </div>
                <div class="intro11-section swiper-slide slide-3 slide-bg-2 bg-position">
                    <!-- Intro Content Start -->
                    <div class="intro11-content text-left">
                        <h3 class="title-slider text-uppercase">Top Trend</h3>
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

    <div class="product-area mt-text-2 mb-text-3">
        <div class="container custom-area-2 overflow-hidden">
            <div class="row">
                <!--Section Title Start-->
                <div class="col-12 col-custom">
                    <div class="section-title text-center mb-30">
                        <span class="section-title-1">MY Product</span>
                        <h3 class="section-title-3">Featured Products</h3>
                    </div>
                </div>
                <!--Section Title End-->
            </div>
            <div class="row product-row">
                <div class="col-12 col-custom">
                    <div class="product-slider swiper-container anime-element-multi">
                        <div class="swiper-wrapper">
                            <?php
                            $no=0;
                            ?>
                            @foreach ($products as $product)
                            <div class="single-item swiper-slide">
                                <!--Single Product Start-->
                                @if($no==0)
                                <div class="single-product position-relative mb-30">
                                    <div class="product-image">
                                        <a class="d-block" href="{{route('product.detail', $product->id)}}">
                                            <img src="{{asset('storage/products/'.$product->image)}}" alt="" class="product-image-1 w-100">
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
                                            <span class="regular-price ">Rp {{number_format($product->price,0,',','.')}}</span>
                                        </div>
                                        <a href="{{route('product.detail', $product->id)}}" class="btn product-cart">Detail</a>
                                    </div>
                                </div>
                                @endif
                                <!--Single Product End-->
                                <!--Single Product Start-->
                                @if ($no==1)
                                <div class="single-product position-relative mb-30">
                                    <div class="product-image">
                                        <a class="d-block" href="{{route('product.detail', $product->id)}}">
                                            <img src="{{asset('storage/products/'.$product->image)}}" alt="" class="product-image-1 w-100">
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
                                            <span class="regular-price ">Rp {{number_format($product->price,0,',','.')}}</span>
                                        </div>
                                        <a href="{{route('product.detail', $product->id)}}" class="btn product-cart">Detail</a>
                                    </div>
                                </div>
                                @endif
                                <!--Single Product End-->
                            </div>
                            <?php
                            $no++;
                            if($no==2){
                                $no=0;
                            }
                            ?>
                            @endforeach
                        </div>
                        <!-- Slider pagination -->
                        <div class="swiper-pagination default-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Product Area End-->
    </div>
    <!--Product Area End-->
    @endsection
