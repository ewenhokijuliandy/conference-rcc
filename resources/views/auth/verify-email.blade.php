@extends('layouts.master-without_nav')

@section('title')
    Verify Email
@endsection

@section('content')

    <div class="authentication-bg min-vh-100">
        <div class="container">
            <div class="d-flex flex-column min-vh-100 px-3 pt-4">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-lg-6 col-xl-5">

                        <div class="text-center mb-4">
                            <a href="index">
                                <img src="{{ URL::asset('assets/images/rcc_logo.png') }}" alt="" height="100">
                            </a>
                        </div>

                        <div class="card">
                            <div class="card-body p-4">
                                <div class="text-center mt-3">
                                    <div class="avatar-lg mx-auto">
                                        <div class="avatar-title rounded-circle bg-light">
                                            <i class="bx bxs-envelope h2 mb-0 text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="mt-4 pt-2">
                                        @if(session('status'))
                                            <div class="alert alert-success text-center small mb-4" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                        <h4>Verify your email</h4>
                                        <p>
                                            We have sent you verification email to <span class="fw-bold">{{auth()->user()->email}}</span>, Please check it.
                                        </p>
                                        <div class="mt-4">
                                            {!! Form::open(['route' => 'verification.send']) !!}
                                            {{ Form::submit('Resend Email Verification', ['class'=>'btn btn-primary w-10']) }}
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center text-muted p-4">
                            <p class="text-dark-50">© <script>document.write(new Date().getFullYear())</script> Research Collaboration Community. All rights reserved. </p>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- end container -->
    </div>

@endsection
