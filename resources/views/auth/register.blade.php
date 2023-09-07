@extends('layouts.app')

@section('content')
<div class="card-body">
    <form method="POST" action="{{ route('register') }}">
        @csrf


        <section class="vh-100">
            <div class="container-fluid h-custom">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-9 col-lg-6 col-xl-5">
                        <img src="Pictures/register.jpeg" class="img-fluid" alt="Sample image">
                    </div>

                    <div class="col-md-1 col-lg-6 col-xl-4 offset-xl-1">

                        <div class="container-1">
                            <h1>Register for Chord Corner</h1><br><br>

                            <form id="registration-form" action="homepage.html" method="post" novalidate>
                                <form class="needs-validation" novalidate>
                                    <div class="form-row">

                                        <div class="form-row">
                                            <div class="col-md-11 mb-1">
                                                <label for="name" class="col-form-label">{{ __('Name') }}</label>
                                                <input id="name" type="text"
                                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                      
                                            <div class="col-md-11 mb-1">
                                                <label for="phone_no"
                                                    class="col-form-label">{{ __('Mobile Number') }}</label>
                                                <input id="phone_no" type="phone_no"
                                                    class="form-control @error('phone_no') is-invalid @enderror"
                                                    name="phone_no" value="{{ old('phone_no') }}" required
                                                    autocomplete="phone_no">
                                                @error('phone_no')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                       

                        
                                            <div class="col-md-11 mb-1">
                                                <label for="address" class="col-form-label">{{ __('Address') }}</label>
                                                <input id="address" type="address"
                                                    class="form-control @error('address') is-invalid @enderror"
                                                    name="address" value="{{ old('address') }}" required
                                                    autocomplete="address">
                                                @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                    

                           
                                            <div class="col-md-11 mb-1">
                                                <label for="email"
                                                    class="col-form-label">{{ __('Email Address') }}</label>
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    name="email" value="{{ old('email') }}" required
                                                    autocomplete="email">
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        

                                      
                                            <div class="col-md-11 mb-1">
                                                <label for="password"
                                                    class="col-form-label">{{ __('Password') }}</label>
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="new-password">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        

                                  
                                            <div class="col-md-11 mb-1">
                                                <label for="password-confirm"
                                                    class="col-form-label">{{ __('Confirm Password') }}</label>
                                                <input id="password-confirm" type="password" class="form-control"
                                                    name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                     
                                        <br>

                                        <div class="form-group text-center">
                                            <button id="size-1" class="btn btn-primary" type="submit"><b>
                                                    {{ __('Register') }}</b></button>
                                        </div><br>

                                        <div class="container">
                                            <div class="row">
                                                <div id="font" class="col-md-8 offset-md-2 text-center">
                                                    <p>Already have an account? <a class="nav-reg"
                                                            href="{{ route('login') }}">{{ __('Log In') }}</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="register.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>

    </form>
</div>
</div>
</div>
</div>
</div>
@endsection