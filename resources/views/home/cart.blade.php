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


    <div class="bg-color">
        <div class="container-fluid">
            <h2 class="shop-topic">Welcome to Cart</h2><br>

            @if(session()->get('message'))
                <div class="alert alert-success">

                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{ session()->get('message') }}
                </div>
            @endif

            <table id="white-table">

                <tr class="tr-cart">
                    <th class="th-cart">Title</th>
                    <th class="th-cart">Quantity</th>
                    <th class="th-cart">Price</th>
                    <th class="th-cart">Image</th>
                    <th class="th-cart">Action</th>
                </tr>


                <?php $total = 0; ?>
                @foreach($cart as $carts)

                    <tr class="tr-cart">
                        <th class="th-cart">{{$carts->title}}</th>
                        <th class="th-cart"> {{$carts->quantity}}</th>
                        <th class="th-cart">{{$carts->price}}</th>
                        <th class="th-cart"><img src="/product/{{$carts->image}}" width="20%" height="10%"></th>
                        <th><a class="btn btn-danger" href="{{url('remove_cart', $carts->id)}}">Remove Product</a></th>
                    </tr>

                        <?php $total += $carts->price * $carts->quantity; ?>
                @endforeach

                <tr class="tr-cart">
                    <th class="th-cart">Total</th>
                    <th class="th-cart"></th>
                    <th class="th-cart">{{$total}}</th>
                    <th class="th-cart"></th>
                    <th class="th-cart"></th>


            </table>

            <div class="btn-box">
                <a href="{{url('cash_order')}}" class="btn btn-success" onclick="return ">Cash on Delivery</a>
                <a href="{{url('stripe', $total)}}" class="btn btn-success">Card Payment</a>
            </div>

            <div class="btn-box">
                <a href="{{ route('shop') }}" class="btn btn-light">Continue Shopping</a>
            </div>


        </div>
    </div>
</div>


<footer><br>
@include('home.footer')
</footer>
</body>

</html>
