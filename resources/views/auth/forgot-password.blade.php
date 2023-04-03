@extends('layouts.master-without_nav')

@section('title')
    Forgot Password
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
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Reset Password</h5>
                                    <p class="text-muted">Enter your registered email address to reset your password.</p>
                                </div>
                                <div class="p-2 mt-4">
                                    @error('email')
                                    <div class="alert alert-danger text-center small mb-4" role="alert">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    @if(session('status'))
                                    <div class="alert alert-success text-center small mb-4" role="alert">
                                        {{ session('status') }}
                                    </div>
                                    @endif
                                    {!! Form::open(['route' => 'password.request']) !!}

                                        <div class="mb-3">
                                            <label class="form-label" for="email">Email</label>
                                            {!! Form::email('email', old('email'), ['id'=>'email','class'=>'form-control','placeholder'=>'Enter email','required autofocus']) !!}
                                        </div>

                                        <div class="mt-3 text-end">
                                            <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Reset</button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <p class="mb-0">Remember It? <a href="{{ route('login') }}" class="fw-medium text-primary"> Sign in </a></p>
                                        </div>
                                    {!! Form::close() !!}
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
