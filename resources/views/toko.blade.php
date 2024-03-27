@extends('layout.main')

@section('content')
    <!-- Breadcrumb Area Start Here -->
    <div class="breadcrumbs-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-content position-relative section-content">
                        <h3 class="title-3">TOKO TERDAFTAR</h3>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>Toko</li>
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
                        @foreach ($mitras as $user)
                        <div class="col-12 col-md-6 col-lg-4 col-custom mb-30">
                            <div class="blog-lst">
                                <div class="single-blog">
                                    <div class="blog-image">
                                        <a class="d-block" href="{{route('allproduct', $user->id)}}">
                                            <img src="{{asset('storage/users/'.$user->image)}}" alt="Product" class="w-100">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-text">
                                            <h4><a href="{{route('allproduct', $user->id)}}">{{$user->name}}</a></h4>
                                            <div class="blog-post-info">
                                                <span><a href="#">{{$user->address}}</a></span>
                                                <span>{{$user->phone}}</span>
                                            </div>
                                            <a href="{{route('allproduct', $user->id)}}" class="blog-readmore">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Shop Wrapper End -->
                    <!-- Bottom Toolbar Start -->
                    <div class="row">
                        <div class="col-sm-12 col-custom">
                            <div class="toolbar-bottom">
                                <div class="pagination mb-2">
                                    {{ $mitras -> links() }}
                                </div>
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
