<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.head')
</head>

<body class="bg-color">
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
                    <a class="nav-link active" href="{{ route('shop') }}">Shop</a>
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

<div class="bg-color">
    <div class="container-fluid">
        <h2 class="shop-topic">Welcome to Shop</h2>
        @foreach($categories as $category)
            <div class="category-section">
                <div id="cat_show_home">
                <h2>{{ $category->category_name }}</h2>
                </div>
                <div class="row justify-content-center">

                    @foreach($products->where('category', $category->category_name) as $product)

                     <div class="col-sm-6 col-md-4 col-lg-4">

                            <div class="box">
                                <div class="img-box">
                                    <img src="{{ asset('product/' . $product->image) }}" alt="{{ $product->title }}"
                                         width="30%" height="20%">
                                </div>
                                <div class="detail-box">
                                    <h5>{{ $product->title }}</h5>
                                    <h6>Rs.{{ $product->price }}</h6>
                                </div>

                                    <form action="{{url('add_cart',  ['id' => $product->id])}}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-success">Add to Cart</button>
                                    </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach

    </div>
</div>

<footer><br>
    <footer><br>
        @include('home.footer')
    </footer>
</footer>

<script src="{{ asset('login.js') }}"></script>

<!-- Reference

Pin on Brad♥️✨ (2022) Pinterest. Available at: https://www.pinterest.com/pin/163466661466827524/ (Accessed: 08 September 2023).
Pergola, M.L. (2022) Photo by Mario La Pergola on unsplash, A bunch of items that are on display photo – Free Guitar Image on Unsplash. Available at: https://unsplash.com/photos/Wrx0iVcYKmM (Accessed: 08 September 2023).
We love music (no date) We Love Music. Available at: https://www.welovemusic.lk/ (Accessed: 08 September 2023).  -->


</body>

</html>
