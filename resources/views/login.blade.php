@extends('layout.main')

@section('content')
    <!-- Header Area End Here -->
    <!-- Breadcrumb Area Start Here -->
    <div class="breadcrumbs-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-content position-relative section-content">
                        <h3 class="title-3">Login-Register</h3>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Login-Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End Here -->
    <!-- Login Area Start Here -->
    <div class="login-register-area mt-no-text">
        <div class="container custom-area">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-custom">
                    <div class="login-register-wrapper">
                        <div class="section-content text-center mb-5">
                            <h2 class="title-4 mb-2">Login</h2>
                            <p class="desc-content">Please login using account detail bellow.</p>
                            @if(session('message'))
                            <div class="alert alert-success">
                                {{session('message')}}
                            </div>
                            @endif
                        </div>
                        <form method="post" action="{{ route('actionlogin') }}" class="login-register-form">
                            @csrf
                            <div class="single-input-item mb-3">
                                <input type="email" placeholder="Email" name="email">
                            </div>
                            <div class="single-input-item mb-3">
                                <input type="password" placeholder="Enter your Password" name="password">
                            </div>
                            <div class="single-input-item mb-3">
                                <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                    <div class="remember-meta mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rememberMe">
                                            <label class="custom-control-label" for="rememberMe">Remember Me</label>
                                        </div>
                                    </div>
                                    <a href="#" class="forget-pwd mb-3">Forget Password?</a>
                                </div>
                            </div>
                            <div class="single-input-item mb-3">
                                <button class="btn flosun-button secondary-btn theme-color rounded-0">Login</button>
                            </div>
                            <div class="single-input-item">
                                <a href="/register">Creat Account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Area End Here -->
    @endsection
