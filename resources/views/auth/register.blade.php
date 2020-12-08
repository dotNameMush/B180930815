@extends('layout.app')
@section('content')
<!-- Normal Breadcrumb Begin -->
<section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Register</h2>
                        <p>Welcome to the official Anime blog.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Register Section Begin -->
    <section class="signup spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Sign Up</h3>
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <!--Name-->
                            <div class="input__item">
                                <input type="text" name="name" id="name" placeholder="Your Name"
                                value="{{ old('name') }}">
                                <span class="icon_profile"></span>
                                
                            </div>
                            @error('name')
                                        <div style="color:red;">
                                            {{ $message }}
                                        </div>
                            @enderror
                            <!--email-->
                            <div class="input__item">
                                <input type="email" name="email" id="email" 
                                placeholder="Email address" value="{{ old('email') }}">
                                <span class="icon_mail"></span>
                                
                            </div>
                            @error('email')
                                        <div style="color:red;">
                                            {{ $message }}
                                        </div>
                            @enderror
                            <!--password-->
                            <div class="input__item">
                                <input type="password" name="password" id="password" 
                                placeholder="Password" value="{{ old('password') }}">
                                <span class="icon_lock"></span>
                                
                            </div>
                            @error('password')
                                        <div style="color:red;">
                                            {{ $message }}
                                        </div>
                            @enderror
                            <!--repeat password-->
                            <div class="input__item">
                                <input type="password" name="password_confirmation" id="password_confirmation" 
                                placeholder="Repeat Password" value="">
                                <span class="icon_lock"></span>
                                
                            </div>
                            @error('password_confirmation')
                                        <div style="color:red;">
                                            {{ $message }}
                                        </div>
                            @enderror
                            <!--register button-->
                            <button type="submit" class="site-btn">Register</button>
                        </form>



                        <h5>Already have an account? <a href="{{ route('login') }}">Log In!</a></h5>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__social__links">
                        <h3>Login With:</h3>
                        <ul>
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i> Sign in With Facebook</a>
                            </li>
                            <li><a href="#" class="google"><i class="fa fa-google"></i> Sign in With Google</a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i> Sign in With Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- register Section End -->
@endsection