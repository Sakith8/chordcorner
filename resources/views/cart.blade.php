<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<body class="bg-color3">
    < <nav id="nav-color" class="navbar navbar-expand-lg navbar-dark ">
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
                        <a class="nav-link " aria-current="page" href="{{ route('welcome') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('shop') }}">Shop</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="{{ route('cart') }}">Cart</a>
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


        <section class="product_section layout_padding">
            <div class="container"><br><br>
                <div class="heading_container heading_center">
                    <h1 class="topic4">
                        Welcome to Cart
                    </h1>
                </div><br>
            </div>
    </div>
    <table id="white">
    <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Price</th>

        <th>Total</th>
    </tr>
    
</table>

<div class="btn-box">
    <a href="#">Checkout</a>
</div>

<div class="btn-box">
    <a href="{{ route('shop') }}">Continue Shopping</a>
</div>


    </section>

    <footer><br>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="full">
                        <div class="logo_footer">
                            <a href="#"><img width="150" src="Pictures/favicon.png" alt="#" /></a>
                        </div><br>
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
                                </div><br>

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
                                                            name="email" />
                                                        <input type="submit" value="Subscribe" />
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