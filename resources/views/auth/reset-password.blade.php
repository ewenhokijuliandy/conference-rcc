@extends('layouts.master-without_nav')

@section('title')
    Reset Password
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
                                    <p class="text-muted">Please fill in the form below to reset your password.</p>
                                </div>
                                <div class="p-2 mt-4">

                                    @if(session('status'))
                                        <div class="alert alert-success text-center small mb-4" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    {!! Form::open(['route' => 'password.update']) !!}

                                    {{ Form::hidden('token', $request->route('token')) }}

                                    <div class="mb-3">
                                        <label class="form-label" for="email">Email</label>
                                        {!! Form::email('email', $request->email, ['id'=>'email','class'=>'form-control','required readonly']) !!}
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="userpassword">Password</label>
                                        {!! Form::password('password', ['id'=>'password','class'=>'form-control'.($errors->has('password') ? ' is-invalid' : null),'placeholder'=>'Enter new password','required autofocus']) !!}
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="password-confirm">Confirm Password</label>
                                        {!! Form::password('password_confirmation', ['id'=>'password-confirmation','class'=>'form-control'.($errors->has('password-confirmation') ? ' is-invalid' : null),'placeholder'=>'Confirm new password','required autofocus']) !!}
                                        @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="auth-show-pass" onclick="myFunction()">
                                        <label class="form-check-label" for="auth-show-pass">Show password</label>
                                    </div>

                                    <div class="mt-3 text-end">
                                        <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Update Password</button>
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

    <script>
        function myFunction() {
            var x = document.getElementById("password");
            var y = document.getElementById("password-confirmation");
            if (x.type === "password") {
                x.type = "text";
                y.type = "text";
            } else {
                x.type = "password";
                y.type = "password";
            }
        }
    </script>

@endsection
