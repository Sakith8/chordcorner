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
                    <a class="nav-link " aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('shop') }}">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cart') }}">Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('service') }}">Service</a>
                </li>
            </ul>


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


<div style="position: relative;">


    <div class="bg-color">
        <div class="container-fluid">
            <h2 class="shop-topic">Welcome to Service</h2><br>

            <h1 class="shop-topic1">
                Free Tutors
            </h1><br>
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="box">
                        <div class="option_container">

                            <div class="img-box">
                                <img src="Pictures/acoustic.jpeg" alt="" width="60%" height="75%">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Tom Marks
                                </h5>
                                <h6>
                                    Guitar Tutor
                                </h6>
                                <div class="options">
                                    <a href="" class="btn btn-primary">
                                        Book Now
                                    </a>
                                    <a href="" class="btn btn-success">
                                        Schedule
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="box">
                        <div class="option_container">

                        </div>
                        <div class="img-box">
                            <img src="Pictures/piano.jpeg" alt="" width="60%" height="75%">
                        </div>

                        <div class="detail-box">
                            <h5>
                                John Doe
                            </h5>
                            <h6>
                                Piano Tutor
                            </h6>
                            <div class="options">
                                <a href="" class="btn btn-primary">
                                    Book Now
                                </a>
                                <a href="" class="btn btn-success">
                                    Schedule
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="box">
                        <div class="option_container">

                        </div>
                        <div class="img-box">
                            <img src="Pictures/addicon.jpeg" alt="" width="50%" height="70%">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Name
                            </h5>
                            <h6>
                                Profession
                            </h6>
                            <div class="options">
                                <a href="" class="btn btn-primary">
                                    Book Now
                                </a>
                                <a href="" class="btn btn-success">
                                    Schedule
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <br>

                <div class="btn-box">
                    <a href="" class="btn btn-light">
                        Join Now for Chord Corner
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<footer><br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="full">
                    <div class="logo_footer">
                        <a href="#"><img width="150" src="Pictures/favicon.png" alt="#"/></a>
                    </div>
                    <br>
                    <div class="information">
                        <p><strong>ADDRESS:</strong> Union Place, Colombo 02</p>
                        <p><strong>TELEPHONE:</strong> +94 011 233 2478</p>
                        <p><strong>EMAIL:</strong> chordcorner@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="widget_menu">
                                    <h3>Menu</h3>
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="{{ route('shop') }}">Shop</a></li>
                                        <li><a href="{{ route('contact')}}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <br>

                            <div class="col-md-5">
                                <div class="widget_menu">
                                    <h3>Newsletter</h3>
                                    <div class="information1">
                                        <p>Subscribe by our newsletter and get update protidin.</p>
                                    </div>
                                    <div class="form_sub">
                                        <form>
                                            <fieldset>
                                                <div class="field">
                                                    <input type="email" placeholder="Enter Your Mail"
                                                           name="email"/>
                                                    <input type="submit" value="Subscribe"/>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</footer>


</body>

</html>
