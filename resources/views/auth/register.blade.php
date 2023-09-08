@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('Pictures/favicon.ico')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('Pictures/favicon.ico')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('Pictures/favicon.ico')}}">
    <link rel="manifest" href="public/favicon.ico">
    <title>Chord Corner</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('styles.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body class="bg-col">
    <form method="POST" action="{{ route('register') }}">
        <section class="vh-100">
            <div class="h-100">
                <div class="row justify-content-center mt-10">
                    <div class="col-md-10 col-lg-6 col-xl-5">
                        <img src="Pictures/register.jpeg" class="img-fluid" alt="Sample image">
                    </div>

                    <div class="col-md-1 col-lg-8 col-xl-4 offset-xl-1 color-login-1">

                        <div class="height-cont">
                            <h1>Register to Chord Corner</h1><br><br>

                            @csrf

                            <div class="col-md-10 mb-1  p-0">
                                <label for="name" class="col-form-label   color-login-1">{{ __('Name') }}</label>
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror text-left" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus
                                    placeholder="Enter Name">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-row">
                                <div class="col-md-5 m-1  p-0">
                                    <label for="phone_no"
                                        class="col-form-label   color-login-1">{{ __('Mobile Number') }}</label>
                                    <input id="phone_no" type="phone_no"
                                        class="form-control @error('phone_no') is-invalid @enderror text-left"
                                        name="phone_no" value="{{ old('phone_no') }}" required autocomplete="phone_no"
                                        placeholder="Enter Mobile Number">
                                    @error('phone_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-5 m-1 p-0">
                                    <label for="address"
                                        class="col-form-label color-login-1">{{ __('Address') }}</label>
                                    <input id="address" type="address"
                                        class="form-control @error('address') is-invalid @enderror text-left"
                                        name="address" value="{{ old('address') }}" required autocomplete="address"
                                        placeholder="Enter Address">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-10 mb-1 p-0">
                                <label for="email"
                                    class="col-form-label   color-login-1">{{ __('Email Address') }}</label>
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                    autocapitalize="none" placeholder="Enter Email Address">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-row">
                                <div class="col-md-5 m-1 p-0">
                                    <label for="password"
                                        class="col-form-label  color-login-1">{{ __('Password') }}</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror text-left"
                                        name="password" required autocomplete="new-password"
                                        placeholder="Enter Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-5  m-1 p-0 ">
                                    <label for="password-confirm"
                                        class="col-form-label  color-login-1">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control text-left"
                                        name="password_confirmation" required autocomplete="new-password"
                                        placeholder="Re-Enter Password">
                                </div>
                            </div>

                            <br>

                            <div class="form-group text-center  color-login-1">
                                <button id="size-1" class="btn btn-primary" type="submit"><b>
                                        {{ __('Register') }}</b></button>
                            </div><br>

                            <div class="container">
                                <div class="row">
                                    <div id="font" class="col-md-8 offset-md-2 text-center color-login-1">
                                        <p>Already have an account? <a class="nav-reg"
                                                href="{{ route('login') }}">{{ __('Log In') }}</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>

    <script href="{{ asset('login.js') }})"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>
@endsection