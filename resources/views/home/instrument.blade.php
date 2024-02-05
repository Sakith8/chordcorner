<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.head')
</head>

<body class="bg-color">


<nav id="nav-color" class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <img src="Pictures/favicon.png" class="icon" alt="Chord Corner Logo" width="55" height="55">
        <a class="navbar-brand" href="#">Chord Corner</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('shop') }}">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('show_cart') }}">Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('service') }}">Service</a>
                </li>
            </ul>
        </div>
    </div>


    <div class="user-dropdown">
        <div class="home-name">
            <span class="font-semibold text-gray-600 ">{{ auth()->user()->name }}</span>
        </div>
        <div class="dropdown-content">
            <a href="{{ route('profile') }}">My Profile</a><br><br>

            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        </div>
    </div>


    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    </div>
    </div>
</nav>

<form action="{{route('addinstrument')}}" method="POST" enctype="multipart/form-data">

    @csrf
    <section class="instru-cont">
        <div class="container">
            <div class="row">
                <!-- Left Content -->
                <div class="col-md-6">
                    <div class="centered-content">
                        <div id="white" class="col-md-10 mb-2 p-4 d-flex align-items-center">
                            <label for="instruname" class="col-form-label color-login-4">{{ __('Instrument Name') }}</label>
                            <input id="instruname" type="text"
                                   class="form-control @error('instruname') is-invalid @enderror text-left" name="instruname"
                                   value="{{ old('instruname') }}" required autocomplete="instruname" autofocus
                                   placeholder="Enter Instrument Name">
                            @error('instruname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="centered-content">
                        <div  id="white" class="col-md-10 mb-2 p-4 d-flex align-items-center">
                            <label for="instruprice" class="col-form-label color-login-4">{{ __('Instrument Price') }}</label>
                            <input id="instruprice" type="text"
                                   class="form-control @error('instruprice') is-invalid @enderror text-left" name="instruprice"
                                   value="{{ old('instruprice') }}" required autocomplete="instruprice" autofocus
                                   placeholder="Enter Instrument Price">
                            @error('instruprice')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="centered-content">
                        <div  id="white" class="col-md-10 mb-2 p-4 d-flex align-items-center">
                            <label for="instrucat" class="col-form-label color-login-4">{{ __('Instrument Category') }}</label>
                            <input id="instrucat" type="text"
                                   class="form-control @error('instrucat') is-invalid @enderror text-left" name="instrucat"
                                   value="{{ old('instrucat') }}" required autocomplete="instrucat" autofocus
                                   placeholder="Enter Instrument Category">
                            @error('instrucat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="centered-content">
                        <div  id="white" class="col-md-10 mb-2 p-4 d-flex align-items-center">
                            <label for="img" class="col-form-label color-login-4">{{ __('Upload Image') }}</label>
                            <input id="img" type="file"
                                   class="form-control @error('img') is-invalid @enderror text-left" name="img"
                                   value="{{ old('img') }}" required autocomplete="img" autofocus
                                   placeholder="Upload Image">
                            @error('img')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div><br><br>

                        <div class="btn-align">
                            <div class="form-group text-center  color-login-2">
                                <button href="{{route('shop')}}" id="addPostButton" class="btn btn-primary" type="submit"><b>{{ __('Add Post') }}</b></button>
                            </div></div>
                    </div>
                </div>



                <!-- Right Image -->
                <div class="col-md-6">
                    <img src="Pictures/guitar-arrival.jpg" class="img-fluid" alt="Sample image">
                </div>

            </div>
        </div>
    </section>
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>
