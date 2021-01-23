<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Load Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
          integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('lib/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome.css') }}">


</head>
<body class="antialiased">

<!-- navbar -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Homsi <span class="text-span">Co</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#category">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#status">status</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Brands">Brands</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#status">Contact us</a>
                </li>
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
                        </li>

                    @else

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Login</a>
                        </li>

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>

        </div>
    </div>
</nav>


<!-- header slider -->
<header class="header">

    <div class="">
        <div id="GFG" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#GFG" data-slide-to="0" class="active"></li>
                <li data-target="#GFG" data-slide-to="1"></li>
                <li data-target="#GFG" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/slider/1.jpg') }}" alt="GFG" class="d-block w-100" loading="lazy"/>

                    <div class="carousel-caption d-none d-md-block">
                        <h4>First slide label</h4>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>


                <div class="carousel-item">
                    <img src="{{ asset('img/slider/2.jpg') }}" alt="GFG" class="d-block w-100" loading="lazy"/>

                    <div class="carousel-caption d-none d-md-block">
                        <h4>Homsi 4</h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
                    </div>
                </div>


                <div class="carousel-item">
                    <img src="{{ asset('img/slider/3.jpg') }}" alt="GFG" class="d-block w-100" loading="lazy"/>
                    <div class="carousel-caption d-none d-md-block">
                        <h4>Homsi 2</h4>
                        <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                            veniam,</p>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#GFG" data-slide="prev">
          <span class="carousel-control-prev-icon">
          </span>
            </a>
            <a class="carousel-control-next" href="#GFG" data-slide="next">
          <span class="carousel-control-next-icon">
          </span>
            </a>
        </div>
    </div>

</header>

<section class="CollectionGrid-container" id="category">
    <div class="CollectionGrid container">
        <div class="row">
            <div class="CollectionGrid-tile col-xs-12 col-sm-6 col-lg-4 ">
                <a class=" hover-overlay-light " href="#">
                    <div class="CollectionGrid-tileImage align-center">
                        <img src="{{ asset('img/category/pants.png') }}" alt="bags" loading="lazy">
                    </div>
                    <div class="CollectionGrid-tileName js-dotdotdot">
                        Pants
                    </div>
                </a>
            </div>
            <div class="CollectionGrid-tile col-xs-12 col-sm-6 col-lg-4">
                <a class="hover-overlay-light" href="#">
                    <div class="CollectionGrid-tileImage align-center">
                        <img src="{{ asset('img/category/tshirt.png') }}" alt="bags" loading="lazy">
                    </div>
                    <div class="CollectionGrid-tileName js-dotdotdot">
                        T-shirt
                    </div>
                </a>
            </div>
            <div class="CollectionGrid-tile col-xs-12 col-sm-6 col-lg-4">
                <a class=" hover-overlay-light" href="#">
                    <div class="CollectionGrid-tileImage align-center">
                        <img src="{{ asset('img/category/jacket.png') }}" alt="bags" loading="lazy">
                    </div>
                    <div class="CollectionGrid-tileName js-dotdotdot">
                        Jackets
                    </div>
                </a>
            </div>
        </div>


    </div>

</section>

<section class="status text-center" id="status">
    <div class="data">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="box">
                        <em class="fa fa-user fa-fw fa-4x"></em>
                        <span class="number">600</span>
                        <p>Happy User</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="box">
                        <em class="fa fa-copyright fa-fw fa-4x"></em>
                        <span class="number">600</span>
                        <p>Our Brands</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="box">
                        <em class="fa fa-user-tie fa-fw fa-4x"></em>
                        <span class="number">600</span>
                        <p>Happy Employee</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="box">
                        <em class="fa fa-code-branch fa-fw fa-4x"></em>
                        <span class="number">600</span>
                        <p>Our Branch</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
<!-- brands -->

<section class="brands" style="display: block; " id="Brands">
    <div class="brand-title text-center">
        <h2>
            <span>Homsi</span>
            brands
        </h2>
    </div>
    <div class="brand-slider slider">


        <a href="#">
            <div class="slide"><img class=" " src="{{ asset('img/logos/Tmall logo.png') }}" loading="lazy"></div>
        </a>

        <a href="#">
            <div class="slide"><img class=" " src="{{ asset('img/logos/massi logo.png') }}" loading="lazy"></div>
        </a>

        <a href="#">
            <div class="slide"><img class=" " src="{{ asset('img/logos/ruvalino logo.png') }}" loading="lazy"></div>
        </a>

        <a href="#">
            <div class="slide"><img class=" " src="{{ asset('img/logos/free girl logo.png') }}" loading="lazy"></div>
        </a>

    </div>

</section>


<section class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-center text-md-left">
                <p>You think we're cool? let's work together</p>
            </div>
            <div class="col-md-4 text-center text-md-right">
                <a class="btn btn-outline-light  btn-lg" href="#contact-us" data-bs-toggle="button">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="footer-inner">

        <div class="container">

            <div class="row">

                <div class="col-sm-8 col-xs-12 col-lg-8">
                    <div class="footer-col site-info">

                        <h4>Homsi
                            <span class="text-span">Company</span>
                        </h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip
                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        </p>
                    </div>

                </div>


                <div class="col-sm-4 col-xs-12 col-lg-4">
                    <div class=" footer-col company-info">

                        <h4>Contact Us</h4>
                        <address>
                            <div>
                                <a href="https://goo.gl/maps/RWcMX1CbQm4W4Vxj9">
                                    <em class="fa fa-location-arrow"></em>
                                    <span>Al kadam lap lap lap</span>
                                </a>
                            </div>

                            <div>
                                <em class="fa fa-phone"></em>
                                <span>9222</span>
                            </div>

                            <div>
                                <a href="mhdite7@gmail.com">
                                    <em class="fa fa-envelope"></em>
                                    <span>mhdite7@gmail.com</span>

                                </a>

                            </div>
                        </address>


                    </div>

                </div>
            </div>


        </div>


    </div>

</footer>

<div class="copyright">

    <div class="container">
        <div class="row">
            <div class="col-sm-6 text-center text-sm-left text-uppercase">
                Copyright 2021
                <span>
            Homsi
            <span class="text-span">Co</span>
          </span>
                ©
            </div>

            <div class="col-sm-6 text-center text-sm-right text-uppercase">
                DESIGNED & Developed BY
                <a href="#">Mohamad Murad</a>
            </div>

        </div>


    </div>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
</script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="{{asset('js/welcome.js')}}"></script>
</body>
</html>
