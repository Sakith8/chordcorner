<!DOCTYPE html>
<html lang="en">

<head>
@include('home.head')
</head>

<body class="bg-color3">
<nav id="nav-color" class="navbar navbar-expand-lg navbar-dark ">
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
                    <a class="nav-link active " aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('shop') }}">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cart') }}">Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('service') }}">Service</a>
                </li>
            </ul>


            <div class="user-dropdown">
                <div class="home-name">
                    <span class="font-semibold text-gray-600 ">{{ auth()->user()->name }}</span>
                </div>
                <div class="dropdown-content">
                    <a href="{{ route('profile') }}"> {{ __('Profile') }}</a><br><br>
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
<div class="bg-color">
    <div class="container-fluid">
        <h2 class="shop-topic">Welcome to Profile</h2><br>


        @section('content')
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">User Profile</div>

                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <h2>Welcome, {{ auth()->user()->name }}</h2>

                                <form method="POST" action="{{ route('profile.update') }}">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" value="{{ Auth::user()->name }}"/>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" value="{{ Auth::user()->email }}"/>
                                    </div>

                                    <form method="POST" action="{{ route('profile.update') }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="align">
                                            <button type="submit" class="btn btn-danger">Update Profile</button>
                                    </form>


                                    <form method="POST" action="{{ route('profile.destroy') }}">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete Profile</button>
                                    </form>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <br><br>
    </div>
</div>


<footer><br>
    @include('home.footer')
</footer>

</body>

</html>
