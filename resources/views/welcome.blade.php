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

<body>
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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cart</a>
                    </li>
                </ul>

                <body class="antialiased">
                    <div
                        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                        @if (Route::has('login'))
                        <div class="nav-item">
                            @auth
                            <a href="{{ url('/homepage') }}" id="home-name1"
                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                            @else
                            <a href="{{ route('login') }}" id="home-name1"
                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                in</a>

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" id="home-name1"
                                class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                            @endauth
                        </div>
                        @endif

                    </div>
            </div>
    </nav>

    <div class="bg-color">
        <div style="position: relative;">
            <img src="Pictures/home.png" width="100%" height="690" alt="Background Image">
            <div class="home-quote">
                <i>“Where words fail, music speaks.” <br>— Hans Christian Andersen</i>
            </div>
            <a href="#" class="shop-button">Shop Now</a>
        </div><br>

        <section class="why_section layout_padding">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2 class="why">
                        Why Choose Us
                    </h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="box1">
                            <div class="img-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 512 512">
                                    <g>
                                        <g>
                                            <path d="M476.158,231.363l-13.259-53.035c3.625-0.77,6.345-3.986,6.345-7.839v-8.551c0-18.566-15.105-33.67-33.67-33.67h-60.392
                                    V110.63c0-9.136-7.432-16.568-16.568-16.568H50.772c-9.136,0-16.568,7.432-16.568,16.568V256c0,4.427,3.589,8.017,8.017,8.017
                                    c4.427,0,8.017-3.589,8.017-8.017V110.63c0-0.295,0.239-0.534,0.534-0.534h307.841c0.295,0,0.534,0.239,0.534,0.534v145.372
                                    c0,4.427,3.589,8.017,8.017,8.017c4.427,0,8.017-3.589,8.017-8.017v-9.088h94.569c0.008,0,0.014,0.002,0.021,0.002
                                    c0.008,0,0.015-0.001,0.022-0.001c11.637,0.008,21.518,7.646,24.912,18.171h-24.928c-4.427,0-8.017,3.589-8.017,8.017v17.102
                                    c0,13.851,11.268,25.119,25.119,25.119h9.086v35.273h-20.962c-6.886-19.883-25.787-34.205-47.982-34.205
                                    s-41.097,14.322-47.982,34.205h-3.86v-60.393c0-4.427-3.589-8.017-8.017-8.017c-4.427,0-8.017,3.589-8.017,8.017v60.391H192.817
                                    c-6.886-19.883-25.787-34.205-47.982-34.205s-41.097,14.322-47.982,34.205H50.772c-0.295,0-0.534-0.239-0.534-0.534v-17.637
                                    h34.739c4.427,0,8.017-3.589,8.017-8.017s-3.589-8.017-8.017-8.017H8.017c-4.427,0-8.017,3.589-8.017,8.017
                                    s3.589,8.017,8.017,8.017h26.188v17.637c0,9.136,7.432,16.568,16.568,16.568h43.304c-0.002,0.178-0.014,0.355-0.014,0.534
                                    c0,27.996,22.777,50.772,50.772,50.772s50.772-22.776,50.772-50.772c0-0.18-0.012-0.356-0.014-0.534h180.67
                                    c-0.002,0.178-0.014,0.355-0.014,0.534c0,27.996,22.777,50.772,50.772,50.772c27.995,0,50.772-22.776,50.772-50.772
                                    c0-0.18-0.012-0.356-0.014-0.534h26.203c4.427,0,8.017-3.589,8.017-8.017v-85.511C512,251.989,496.423,234.448,476.158,231.363z
                                    M375.182,144.301h60.392c9.725,0,17.637,7.912,17.637,17.637v0.534h-78.029V144.301z M375.182,230.881v-52.376h71.235
                                    l13.094,52.376H375.182z M144.835,401.904c-19.155,0-34.739-15.583-34.739-34.739s15.584-34.739,34.739-34.739
                                    c19.155,0,34.739,15.583,34.739,34.739S163.99,401.904,144.835,401.904z M427.023,401.904c-19.155,0-34.739-15.583-34.739-34.739
                                    s15.584-34.739,34.739-34.739c19.155,0,34.739,15.583,34.739,34.739S446.178,401.904,427.023,401.904z M495.967,299.29h-9.086
                                    c-5.01,0-9.086-4.076-9.086-9.086v-9.086h18.171V299.29z" />
                                        </g>
                                    </g>

                                </svg>
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Free Delivery
                                </h5>
                                <p>
                                    Get your products delivered to your doorstep for free. We ensure fast and reliable
                                    delivery services.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box1">
                            <div class="img-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 512 512">
                                    <g id="filled">
                                        <path
                                            d="m252.92 300h3.08a124.245 124.245 0 1 0 -4.49-.09c.075.009.15.023.226.03.394.039.789.06 1.184.06zm-96.92-124a100 100 0 1 1 100 100 100.113 100.113 0 0 1 -100-100z" />
                                        <path
                                            d="m447.445 387.635-80.4-80.4a171.682 171.682 0 0 0 60.955-131.235c0-94.841-77.159-172-172-172s-172 77.159-172 172c0 73.747 46.657 136.794 112 161.2v158.8c-.3 9.289 11.094 15.384 18.656 9.984l41.344-27.562 41.344 27.562c7.574 5.4 18.949-.7 18.656-9.984v-70.109l46.6 46.594c6.395 6.789 18.712 3.025 20.253-6.132l9.74-48.724 48.725-9.742c9.163-1.531 12.904-13.893 6.127-20.252zm-339.445-211.635c0-81.607 66.393-148 148-148s148 66.393 148 148-66.393 148-148 148-148-66.393-148-148zm154.656 278.016a12 12 0 0 0 -13.312 0l-29.344 19.562v-129.378a172.338 172.338 0 0 0 72 0v129.38zm117.381-58.353a12 12 0 0 0 -9.415 9.415l-6.913 34.58-47.709-47.709v-54.749a171.469 171.469 0 0 0 31.467-15.6l67.151 67.152z" />
                                        <path
                                            d="m287.62 236.985c8.349 4.694 19.251-3.212 17.367-12.618l-5.841-35.145 25.384-25c7.049-6.5 2.89-19.3-6.634-20.415l-35.23-5.306-15.933-31.867c-4.009-8.713-17.457-8.711-21.466 0l-15.933 31.866-35.23 5.306c-9.526 1.119-13.681 13.911-6.634 20.415l25.384 25-5.841 35.145c-1.879 9.406 9 17.31 17.367 12.618l31.62-16.414zm-53-32.359 2.928-17.615a12 12 0 0 0 -3.417-10.516l-12.721-12.531 17.658-2.66a12 12 0 0 0 8.947-6.5l7.985-15.971 7.985 15.972a12 12 0 0 0 8.947 6.5l17.658 2.66-12.723 12.535a12 12 0 0 0 -3.417 10.516l2.928 17.615-15.849-8.231a12 12 0 0 0 -11.058 0z" />
                                    </g>
                                </svg>
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Best Quality
                                </h5>
                                <p>
                                    We pride ourselves on offering the best quality products. Your satisfaction is our
                                    top priority.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box1">
                            <div class="img-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 512 512">
                                    <path
                                        d="M256 0C115.39 0 0 115.39 0 256s115.39 256 256 256 256-115.39 256-256S396.61 0 256 0zm104 344H160v-24h200v24zm0-56H160v-24h200v24zm0-56H160v-24h200v24zm0-56H160v-24h200v24z" />
                                </svg>

                                </svg>
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Free Tutoring for Beginners
                                </h5>
                                <p>
                                    We offer free tutoring sessions for beginners. Learn from experts and kickstart your
                                    journey with us.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><br>

        <!-- Latest Arrival -->

        <section class="arrival_section">
            <div class="container">
                <div class="box">
                    <div class="arrival_bg_box">
                        <img src="Pictures/arrival.jpeg" alt="">
                    </div>
                    <div class="row">
                        <div class="col-md-6 ml-auto">
                            <div class="heading_container remove_line_bt">
                                <h2 class="para2">
                                    Discover Our Latest Arrivals
                                </h2>
                            </div>
                            <p class="para1">
                                Explore our newest collection of musical instruments, handpicked for music enthusiasts
                                like you.
                                From guitars to keyboards and more, we have what you need to create beautiful melodies.
                            </p>
                            <a href="#" class="para2">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section><br>

        <section class="product_section layout_padding">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2 class="topic">
                        Our Products
                    </h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="box">
                            <div class="option_container">
                                <div class="options">
                                    <a href="" class="option1">
                                        Add To Cart
                                    </a>
                                    <a href="" class="option2">
                                        Buy Now
                                    </a>
                                </div>
                            </div>
                            <div class="img-box">
                                <img src="Pictures/acoustic.jpeg" alt="" width="60%" height="75%">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Acoustic Guitar
                                </h5>
                                <h6>
                                    Rs.50,000
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="box">
                            <div class="option_container">
                                <div class="options">
                                    <a href="" class="option1">
                                        Add To Cart
                                    </a>
                                    <a href="" class="option2">
                                        Buy Now
                                    </a>
                                </div>
                            </div>
                            <div class="img-box">
                                <img src="Pictures/electric.jpeg" alt="" width="60%" height="75%">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Electric Guitar
                                </h5>
                                <h6>
                                    Rs.240,000
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="box">
                            <div class="option_container">
                                <div class="options">
                                    <a href="" class="option1">
                                        Add To Cart
                                    </a>
                                    <a href="" class="option2">
                                        Buy Now
                                    </a>
                                </div>
                            </div>
                            <div class="img-box">
                                <img src="Pictures/mixer.jpeg" alt="" width="65%" height="75%">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Mixer
                                </h5>
                                <h6>
                                    Rs.41,000
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="box">
                            <div class="option_container">
                                <div class="options">
                                    <a href="" class="option1">
                                        Add To Cart
                                    </a>
                                    <a href="" class="option2">
                                        Buy Now
                                    </a>
                                </div>
                            </div>
                            <div class="img-box">
                                <img src="Pictures/keyboard.jpeg" alt="" width="65%" height="75%">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Portable Keyboard
                                </h5>
                                <h6>
                                    Rs.130,000
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="box">
                            <div class="option_container">
                                <div class="options">
                                    <a href="" class="option1">
                                        Add To Cart
                                    </a>
                                    <a href="" class="option2">
                                        Buy Now
                                    </a>
                                </div>
                            </div>
                            <div class="img-box">
                                <img src="Pictures/piano.jpeg" alt="" width="65%" height="75%">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Grand Piano
                                </h5>
                                <h6>
                                    Rs.2,880,000
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4" border-radius="10px">
                        <div class="box">
                            <div class="option_container">
                                <div class="options">
                                    <a href="" class="option1">
                                        Add To Cart
                                    </a>
                                    <a href="" class="option2">
                                        Buy Now
                                    </a>
                                </div>
                            </div>
                            <div class="img-box">
                                <img src="Pictures/drums.jpeg" alt="" width="55%" height="75%">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Acoustic Drums
                                </h5>
                                <h6>
                                    Rs.70,000
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="btn-box">
                        <a href="">
                            To The Store
                        </a>
                    </div>
                </div>
        </section><br>
    </div>
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
                                            <li><a href="#">Contact</a></li>
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

    <script src="{{ asset('public/register.js') }}"></script>
    <script src="{{ asset('public/ogin.js') }}"></script>


</body>

</html>