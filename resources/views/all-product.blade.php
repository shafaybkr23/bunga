@extends('layout.main')

@section('content')

    <!-- Breadcrumb Area Start Here -->
    <div class="breadcrumbs-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-content position-relative section-content">
                        <h3 class="title-3">{{$mitra->name}}</h3>
                        <ul>
                            <li><a href="index.html">Toko</a></li>
                            <li>Produk</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End Here -->
    <!-- Blog Main Area Start Here -->
    <div class="blog-main-area">
        <div class="container container-default custom-area">
            <div class="row">
                <div class="col-lg-12 col-12 col-custom widget-mt">
                    <!-- Shop Wrapper Start -->
                    <div class="row">
                        @foreach ($products as $product)
                        <div class="col-12 col-md-6 col-lg-4 col-custom mb-30">
                            <div class="blog-lst">
                                <div class="single-blog">
                                    <div class="blog-image">
                                        <a class="d-block" href="{{route('product.detail', $product->id)}}">
                                            <img src="{{asset('storage/products/'.$product->image)}}" alt="Product" class="w-100">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-text">
                                            <h4><a href="{{route('product.detail', $product->id)}}">{{$product->name}}</a></h4>
                                            <div class="blog-post-info">
                                                <span><a href="#">{{$mitra->name}}</a></span>
                                            </div>
                                            <p>{{$product->description}}</p>
                                            <a href="{{route('product.detail', $product->id)}}" class="blog-readmore">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    <!-- Shop Wrapper End -->
                    <!-- Bottom Toolbar Start -->
                    <div class="row">
                        <div class="col-sm-12 col-custom">
                            <div class="toolbar-bottom">
                                {{ $products -> links() }}
                            </div>
                        </div>
                    </div>
                    <!-- Bottom Toolbar End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Main Area End Here -->
    @endsection
