<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="Wayne Bulthé" content="">

    <title>Fat-flamingo</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendors/venderfront/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Custom styles for this template -->
    <link href="{{asset('css/css/shop-homepage.css')}}" rel="stylesheet">
    <link href="{{asset('css/css/style3.css')}}" rel="stylesheet">
    @yield('extra')
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Fat-Flamingo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/spots')}}">Spots</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/shop')}}">Shop</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                @if (Route::has('login'))
                    <li class="nav-item">
                        @auth
                            <a class="nav-link" href="{{ url('/home') }}">Home</a>
                        @else
                            <a class="nav-link" href="{{ route('login') }}">Login</a>

                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        @endif
                    </li>
                @endauth
                @endif
                <li class="nav-item">
                    @if(Cart::instance('default')->count()>0)
                    <a id="cart" data-notify="{{Cart::instance('default')->count()}}" class="nav-link" href="{{ url('/order') }}"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    @endif
                </li>
                <li class="nav-item">
                    <a id="wish" class="nav-link" data-notify="{{Cart::instance('default')->count()}}" href=" "><i class="fa fa-heartbeat" aria-hidden="true"></i></a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">


        <!-- /.col-lg-3 -->
@yield('content')

        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark" style="background-image: url({{asset('images/bg/bg-asphalt.jpg')}});background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;" id="contact">
    <img class="img-fluid " src="" alt="" id="fbg">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-white ">
                <h5 class="">Shop Open @</h5>
                <ul>
                    <li>M	10:00–18:00</li>
                    <li>T	10:00–18:00</li>
                    <li>W 10:00–18:00</li>
                    <li>T 10:00–18:00</li>
                    <li>F	10:00–18:00</li>
                    <li>S 10:00–18:00</li>
                    <li>S	13:30–18:00</li>
                </ul></div>
            <div class="col-md-4 text-white d-flex flex-column">
                <h5 class="">Contact @:</h5>
                <a class="text-white" href="https://g.page/skateshopbrugge?share">Langestraat 24<br>8000 Brugge</a>
                <a class="text-white" href="tel:050 48 11 85">Tel: 050 48 11 85</a>
                <a class="text-white"  href="https://www.instagram.com/thefatflamingo/?fbclid=IwAR03obgSwbkUICHGe401mLL1NqsfceQDse9TMZF1xl2FT9vX5AkVUOTH1Yg"><i class="fa fa-instagram" aria-hidden="true"></i>  Follow us on instagram</a>
                <a class="text-white"  href="https://www.facebook.com/skateshopthefatflamingobrugge/"><i class="fa fa-facebook-official" aria-hidden="true"></i> Follow us on facebook</a>
            </div>
            <div class="col">
                <img class="img-fluid rounded-circle" src="{{asset('images/icon/ms-icon-310x310.png')}}" alt="">
            </div></div>
        <p class="m-0 text-center text-white">Copyright &copy; Bulthé Wayne 2019</p>
    </div>
    <!-- /.container -->
</footer>
@yield('modal')
<!-- Bootstrap core JavaScript -->
<script src="{{asset('vendors/venderfront/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendors/venderfront/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
<script src="{{asset('vendors/venderfront/bootstrap/js/mine.js')}}"></script>
@yield('extrajs')

</body>

</html>
