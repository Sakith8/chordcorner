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
    <form id="login-form" action="{{ route('login') }}" method="post">

        <section class="vh-100 ">
            <div class="h-100">
                <div class="row d-flex justify-content-center align-items-center ">
                    <div class="col-md-10 col-lg-6 col-xl-5">
                        <img src="Pictures/register.jpeg" class="img-fluid" alt="Sample image">
                    </div>

                    <div class="col-md-9 col-lg-6 col-xl-4 offset-xl-1 color-login">

                        <h1>Welcome to Chord Corner</h1><br><br>

                        @csrf

                        <div class="form-row">
                            <div class="col-md-12 mb-0">
                                <label for="validationCustom03" class="color-login"><b>Email</b></label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                    name="email" placeholder="Enter Email Address" value="{{ old('email') }}"
                                    autocapitalize="none">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-12 mb-0">
                                <label for="validationCustom04" class="color-login"><b>Password</b></label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="validationCustom04" name="password" placeholder="Enter Password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row d-flex align-items-center mt-0">
                            <div class="col-md-5 ">
                                <div class="form-check d-flex align-items-center color-login">
                                    <input class="form-check-input my-0 me-2" type="checkbox" name="remember"
                                        id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 text-right">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>


                        <div class="text-center text-lg-start mt-4 pt-2">
                            <div class="form-group text-center color-login ">
                                <button id="size" class="btn btn-primary" type="submit"><b>
                                        {{ __('Login') }}</b></button>
                            </div><br>

                            <p class="small mt-2 pt-1 mb-0 color-login">Don't have an account? <a class="nav-reg"
                                    href="{{ route('register') }}">{{ __('Register') }}</a></p>
                        </div>

        </section>

        <script href="{{ asset('login.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    </form>

</body>

</html>
@endsection