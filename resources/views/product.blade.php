@extends('layout.main')

@section('content')
<!-- off-canvas menu start -->
<aside class="off-canvas-wrapper" id="mobileMenu">
    <div class="off-canvas-overlay"></div>
    <div class="off-canvas-inner-content">
        <div class="btn-close-off-canvas">
            <i class="fa fa-times"></i>
        </div>
        <div class="off-canvas-inner">
            <div class="search-box-offcanvas">
                <form>
                    <input type="text" placeholder="Search product..." />
                    <button class="search-btn"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</aside>
</header>
<!-- Header Area End Here -->
<!-- Blog Area Wrapper Start Here -->
<div class="blog-area-wrapper">
    <!-- Breadcrumb Area Start Here -->
    <div class="breadcrumbs-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-content position-relative section-content">
                        <h3 class="title-3">Ulasan Product</h3>
                        <ul>
                            <li><a href="index.html">Product</a></li>
                            <li>{{$product->name}}</li>
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
                <div class="col-12 col-custom widget-mt">
                    <!-- Blog Details wrapper Area Start -->
                    <div class="blog-post-details">
                        <figure class="blog-post-thumb mb-5">
                            <img src="{{ asset('storage/products/'.$product->image) }}" alt="Blog Image" />
                        </figure>
                        <section class="blog-post-wrapper product-summery">
                            <div class="section-content section-title">
                                <h2 class="title-3">{{ $product->name }}</h2>
                                <blockquote class="blockquote mb-4">
                                    <p>{{ $product->description }}</p>
                                </blockquote>
                                <h3 class="title-3">{{ $product->user->name }}</h3>
                                <span class="d-block mb-4">{{ $product->user->address }} - {{ $product->user->phone_number }}</span>
                                <?php
                                 $linktree = $product->user->linktree;
                                 //cek jika tidak ada http
                                    if (strpos($linktree, 'http') === false) {
                                        $linktree = 'http://' . $linktree;
                                    }
                                ?>
                                <a href="{{$linktree}}" class="btn flosun-button secondary-btn rounded-0" target="_blank">Linktree</a>
                            </div>

                        </section>
                    </div>
                    <!-- Blog Details Wrapper Area End -->
                    <!-- Blog Comments Area Start Here -->

                    <!-- Blog Comments Area End Here -->
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Main Area End Here -->
</div>
<!-- Blog Area Wrapper End Here -->
<br>
<br>

@endsection
