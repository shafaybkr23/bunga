@extends('layout.main')

@section('content')
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
    <!-- Register Area Start Here -->
    <div class="login-register-area mt-no-text">
        <div class="container container-default-2 custom-area">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-custom">
                    <div class="login-register-wrapper">
                        <div class="section-content text-center mb-5">
                            <h2 class="title-4 mb-2">Create Account</h2>
                            <p class="desc-content">Please Register using account detail bellow.</p>
                            <hr>
                            @if(session('message'))
                            <div class="alert alert-success">
                                {{session('message')}}
                            </div>
                            @endif
                        </div>
                        <form method="post" action="{{ route('actionregister') }}" class="login-register-form">
                            @csrf
                            <div class="single-input-item mb-3">
                                <input type="text" placeholder="Store Name" name="name">
                            </div>
                            <div class="single-input-item mb-3">
                                <input type="email" placeholder="Email" name="email">
                            </div>
                            <div class="single-input-item mb-3">
                                <input type="number" placeholder="Phone Number" name="phone">
                            </div>
                            <div class="single-input-item mb-3">
                                <textarea placeholder="Address" name="address" class="form-control"></textarea>
                            </div>
                            <div class="single-input-item mb-3">
                                <input type="text" placeholder="Linktree" name="linktree">
                            </div>

                            <div class="single-input-item mb-3">
                                <input type="password" placeholder="Enter your Password" name="password">
                            </div>
                            <div class="single-input-item mb-3">
                                <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                    <div class="remember-meta mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rememberMe">
                                            <label class="custom-control-label" for="rememberMe">Subscribe Our Newsletter</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-input-item mb-3">
                                <button class="btn flosun-button secondary-btn theme-color rounded-0">Register</button>
                                <p class="mt-3">Already have an account? <a href="{{ route('login') }}" class="text-secondary">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Area End Here -->
    @endsection
