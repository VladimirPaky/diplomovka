<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin - Vidiecky Vzdelávací portál</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base_url" content="{{ url('/') }}">

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    
    <!-- Bootstrap CSS-->
{{--     <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome & Pixeden Icon Stroke icon font-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/pe-icon-7-stroke.css"> --}}
    <!-- Google fonts - Roboto Condensed & Roboto-->
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700|Roboto:300,400"> --}}
    <!-- lightbox-->
   {{--  <link rel="stylesheet" href="css/lightbox.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png"> --}}
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

        @yield('styles')
    </head>
    <body class="home">
        <!-- navbar-->
        <header class="header">
          <div role="navigation" class="navbar navbar-default">
            <div class="container">
              <div class="navbar-header"><a href="index.html" class="navbar-brand">Viviecky vzdelavaci portal</a>
                <div class="navbar-buttons">
                  <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle navbar-btn">Menu<i class="fa fa-align-justify"></i></button>
              </div>
          </div>
          <div id="navigation" class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.html">Home</a></li>
              <li><a href="text.html">Kurzy</a></li>
              <li><a href="text.html">Blog</a></li>
              {{-- <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Dropdown item 1</a></li>
                  <li><a href="#">Dropdown item 2</a></li>
                  <li><a href="#">Dropdown item 3</a></li>
                  <li><a href="#">Dropdown item 4</a></li>
              </ul>
          </li> --}}
          <li><a href="contact.html">Contact</a></li>
      </ul><a href="#" data-toggle="modal" data-target="#login-modal" class="btn navbar-btn btn-white pull-left"><i class="fa fa-sign-in"></i>Log in</a>
  </div>
</div>
</div>
</header>
    <!-- *** LOGIN MODAL ***_________________________________________________________
    -->
    <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
            <h4 id="Login" class="modal-title">Customer login</h4>
        </div>
        <div class="modal-body">
            <form action="customer-orders.html" method="post">
              <div class="form-group">
                <input id="email_modal" type="text" placeholder="email" class="form-control">
            </div>
            <div class="form-group">
                <input id="password_modal" type="password" placeholder="password" class="form-control">
            </div>
            <p class="text-center">
                <button type="button" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
            </p>
        </form>
        <p class="text-center text-muted">Not registered yet?</p>
        <p class="text-center text-muted"><a href="#"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
    </div>
</div>
</div>
</div>
<!-- *** LOGIN MODAL END ***-->
<div id="carousel-home" data-ride="carousel" class="carousel slide carousel-fullscreen carousel-fade">
  <!-- Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-home" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-home" data-slide-to="1"></li>
    <li data-target="#carousel-home" data-slide-to="2"></li>
</ol>
<!-- Wrapper for slides-->
<div role="listbox" class="carousel-inner">
    <div style="background-image: url('img/carousel3.jpg');" class="item active">
      <div class="overlay"></div>
      <div class="carousel-caption">
        <h1 class="super-heading">Barunka</h1>
        <p class="super-paragraph">A multi-purpose Bootstrap template by  <a href="https://bootstrapious.com">Bootstrapious.com</a>.</p>
    </div>
</div>
<div style="background-image: url('img/carousel2.jpg');" class="item">
  <div class="overlay"></div>
  <div class="carousel-caption">
    <h1 class="super-heading">Praesent dapibus, neque id cursus faucibus</h1>
    <p class="super-paragraph">Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci</p>
</div>
</div>
<div style="background-image: url('img/carousel1.jpg');" class="item">
  <div class="overlay"></div>
  <div class="carousel-caption">
    <h1 class="super-heading">Lorem ipsum dolor color</h1>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
</div>
</div>
</div>
</div>
<section class="section--padding-bottom-small">
  <div class="container">
    <div class="row">

        @yield('content')
        
    </div>
</div>

</section>
<footer class="footer">
  <div class="footer__copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p>&copy;2017 Vidiecky vzdelavaci portal</p>
      </div>
      <div class="col-md-6">
          <p class="credit">Template by <a href="https://bootstrapious.com/free-templates" class="external">Bootstrapious templates</a></p>
          <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
      </div>
  </div>
</div>
</div>
</footer>
<!-- Javascript files-->
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> --}}
{{-- <script src="js/bootstrap.min.js"></script>
<script src="js/jquery.cookie.js"> </script>
<script src="js/lightbox.min.js"></script> --}}
<script src="js/front.js"></script><!-- substitute:livereload -->
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
<!---->
<script>
  (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
  e=o.createElement(i);r=o.getElementsByTagName(i)[0];
  e.src='//www.google-analytics.com/analytics.js';
  r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
  ga('create','UA-XXXXX-X');ga('send','pageview');
</script>
</body>
</html>