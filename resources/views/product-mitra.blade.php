@extends('layout.main2')

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
                        <h3 class="title-3">MY Product</h3>
                        <ul>
                            <li><a href="/katalogmitra">Katalog</a></li>
                            <li>Nama Product</li>
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
                            <img src="assets/images/blog/blog1.jpg" alt="Blog Image" />
                        </figure>
                        <section class="blog-post-wrapper product-summery">
                            <div class="section-content section-title">
                                <ul>
                                    <li><h1 class="title-3"><a href="#" style=" color:rgb(0, 255, 247);">Edit</a></h1></li>
                                </ul>
                                <blockquote class="blockquote mb-4">
                                    <p>
                                        PENJELASAN BUNGA APA mmsf jda
                                        <br>
                                        <br>
                                    </p>
                                </blockquote>
                            </div>
                            <div class="comment-area-wrapper mt-5">
                                <div class="comments-view-area">
                                    <h3 class="mb-5">3 Comments</h3>
                                    <div class="single-comment-wrap mb-4 d-flex">
                                        <figure class="author-thumb">
                                            <a href="#">
                                                <img src="assets/images/review/1.jpg" alt="Author" />
                                            </a>
                                        </figure>
                                        <div class="comments-info">
                                            <p class="mb-2">
                                                This book is a treatise on the theory of ethics,
                                                very popular during the Renaissance. The first line
                                                of Lorem Ipsum, "Lorem ipsum dolor sit amet
                                            </p>
                                            <div class="comment-footer d-flex justify-content-between">
                                                <a href="#" class="author"><strong>Duy</strong> - July 30, 2022</a>
                                                <a href="#" class="btn-reply"><i class="fa fa-reply"></i> Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-comment-wrap mb-4 comment-reply d-flex">
                                        <figure class="author-thumb">
                                            <a href="#">
                                                <img src="assets/images/review/1.jpg" alt="Author" />
                                            </a>
                                        </figure>
                                        <div class="comments-info">
                                            <p class="mb-2">
                                                Praesent bibendum risus pellentesque faucibus
                                                rhoncus. Etiam a mollis odio. Integer urna nisl,
                                                fermentum eu mollis et, gravida eu elit.
                                            </p>
                                            <div class="comment-footer d-flex justify-content-between">
                                                <a href="#" class="author"><strong>Jack</strong> - July 30, 2022</a>
                                                <a href="#" class="btn-reply"><i class="fa fa-reply"></i> Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-comment-wrap mb-4 d-flex">
                                        <figure class="author-thumb">
                                            <a href="#">
                                                <img src="assets/images/review/1.jpg" alt="Author" />
                                            </a>
                                        </figure>
                                        <div class="comments-info">
                                            <p class="mb-2">
                                                Praesent bibendum risus pellentesque faucibus
                                                rhoncus. Etiam a mollis odio. Integer urna nisl,
                                                fermentum eu mollis et, gravida eu elit.
                                            </p>
                                            <div class="comment-footer d-flex justify-content-between">
                                                <a href="#" class="author"><strong>Duy</strong> - July 30, 2022</a>
                                                <a href="#" class="btn-reply"><i class="fa fa-reply"></i> Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- Blog Details Wrapper Area End -->
                    <!-- Blog Comments Area Start Here -->
                    <form action="#">
                        <div class="comment-box">
                            <h3>Leave A Comment</h3>
                            <div class="row">
                                <div class="col-12 col-custom">
                                    <div class="input-item mt-4 mb-4">
                                        <textarea cols="30" rows="5" name="comment"
                                            class="border rounded-0 w-100 custom-textarea input-area"
                                            placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 col-custom">
                                    <div class="input-item mb-4">
                                        <input class="border rounded-0 w-100 input-area name" type="text"
                                            placeholder="Name" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-custom">
                                    <div class="input-item mb-4">
                                        <input class="border rounded-0 w-100 input-area email" type="text"
                                            placeholder="Email" />
                                    </div>
                                </div>
                                <div class="col-12 col-custom mt-40">
                                    <button type="submit" class="btn flosun-button primary-btn rounded-0 w-100">
                                        Post comment
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
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
