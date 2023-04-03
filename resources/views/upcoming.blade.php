@extends('layouts.master-without_nav')

@section('title') Coming Soon @endsection

@section('content')

    <div class="authentication-bg min-vh-100" style="background: url(./assets/images/auth-bg.jpg) bottom;">
        <div class="bg-overlay bg-light"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="home-wrapper text-center">
                        <a href="index" class="auth-logo">
                            <span class="logo-lg">
                                <img src="{{ URL::asset('assets/images/rcc_logo.png') }}" alt="" height="100">
                            </span>
                        </a>
                        <h3 class="mt-3">New Feature is Under Construction</h3>
                        <p class="mb-0">Stay Tuned for Our Latest Feature.</p>

                        <div class="row justify-content-center mt-5">
                            <div class="col-lg-6 col-sm-5">
                                <div class="maintenance-img mb-5">
                                    <img src="{{ URL::asset('assets/images/coming-soon-img.png') }}" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                        </div>



                        <div id="countdown" class="countdownlist"></div>

                        <div class="mt-5">
                            <a class="btn btn-primary waves-effect waves-light" href="{{ url('/') }}">Back to Home</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
