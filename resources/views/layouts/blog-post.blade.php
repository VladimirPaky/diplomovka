<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Material Design Bootstrap</title>

    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <!-- Bootstrap core CSS -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Material Design Bootstrap -->

    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <link href="{{asset('css/libs.css')}}" rel="stylesheet">

    {{-- <link href="css/mdb.min.css" rel="stylesheet">   --}}

    <!-- Template styles -->
    <style rel="stylesheet">
    /* TEMPLATE STYLES */

    /* Necessary for full page carousel*/

    html,
    body,
    .view {
        height: 100%;
    }

    /* Navigation*/

    .navbar {
        background-color: transparent;
    }

    .scrolling-navbar {
        -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
        -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
        transition: background .5s ease-in-out, padding .5s ease-in-out;
    }

    .top-nav-collapse {
        background-color: #1C2331;
    }

    footer.page-footer {
        background-color: #1C2331;
        margin-top: 0;
    }

    @media only screen and (max-width: 767px) {
        .navbar {
            background-color: #1C2331;
        }
        .display-3 {
            font-size: 2rem;
            margin-top: 6rem;
        }
        h3 {
            font-size: 1rem;
        }
    }

    @media only screen and (max-width: 667px) {
        .display-3 {
            font-size: 3rem;
        }
    }

    /* Carousel*/
    .carousel,
    .carousel-item,
    .active {
        height: 100%;
    }

    .carousel-inner {
        height: 100%;
    }

    /*Caption*/

    .flex-center {
        color: #fff;
    }

    @media (min-width: 776px) {
        .carousel .view ul li {
            display: inline;
        }
        .carousel .view .full-bg-img ul li .flex-item {
            margin-bottom: 1.5rem;
        }
    }

    .navbar .btn-group .dropdown-menu a:hover {
        color: #000 !important;
    }

    .navbar .btn-group .dropdown-menu a:active {
        color: #fff !important;
    }
</style>

</head>

<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <strong>Navbar</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item btn-group">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown
                    </a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </div>
</nav>
<!--/.Navbar-->




<div class="container">

   @yield('content');
   
    </div>

    <!--/.Main layout-->

    <!--Footer-->
    <footer class="page-footer center-on-small-only unique-color-dark">


        <!--Footer Links-->
        <div class="container mt-5 mb-4 text-center text-md-left">
            <div class="row">

                <!--First column-->
                <div class="col-md-4 col-lg-4 col-xl-6 mb-r">
                    <h6 class="title font-bold">
                        <strong>Vidiecky portal</strong>
                    </h6>
                    <hr class="blue mb-4 pb-1 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit.</p>
                </div>
                <!--/.First column-->

                <!--Second column-->
                <div class="col-md-4 col-lg-2 col-xl-3 mx-auto mb-r">
                    <h6 class="title font-bold">
                        <strong>Skratky</strong>
                    </h6>
                    <hr class="blue mb-4 pb-1 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">Kurzi</a>
                    </p>
                    <p>
                        <a href="#!">Blog</a>
                    </p>
                    <p>
                        <a href="#!">Môj účet</a>
                    </p>
                    <p>
                        <a href="#!">Kontakt</a>
                    </p>
                </div>
                <!--/.Secpnd column-->

                <!--Third column-->
                <div class="col-md-4 col-lg-3 col-xl-3">
                    <h6 class="title font-bold">
                        <strong>Kontakt</strong>
                    </h6>
                    <hr class="blue mb-4 pb-1 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fa fa-user mr-3"></i>Vladimir Paraska</p>
                        <p>
                            <i class="fa fa-at mr-3"></i>hello@vladimirparaska.eu</p>
                            <p>
                                <i class="fa fa-mobile mr-3"></i>+421 944 059 353</p>
                            </div>
                            <!--/.Third column-->

                        </div>
                    </div>
                    <!--/.Footer Links-->

                    <!-- Copyright-->
                    <div class="footer-copyright">
                        <div class="container-fluid">
                            © Copyright <script>document.write(new Date().getFullYear());</script> |
                            <a href="https://vladimirparaska.eu">
                                <strong>vladimirparaska.eu</strong>
                            </a>
                        </div>
                    </div>
                    <!--/.Copyright -->

                </footer>
                <!--/.Footer-->

                <!-- SCRIPTS -->

                <!-- JQuery -->
                {{-- <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script> --}}

                <!-- Bootstrap dropdown -->
                {{-- <script type="text/javascript" src="js/popper.min.js"></script> --}}

                <!-- Bootstrap core JavaScript -->
                {{-- <script type="text/javascript" src="js/bootstrap.min.js"></script> --}}

                <!-- MDB core JavaScript -->
            {{--     <script type="text/javascript" src="js/mdb.min.js"></script> --}}

                <script src="{{asset('js/libs.js')}}"></script>

                <script>
                    new WOW().init();
                </script>

            </body>

            </html>