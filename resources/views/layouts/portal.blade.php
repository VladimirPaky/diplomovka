<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vidiecky Vzdelávací portál</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base_url" content="{{ url('/') }}">

    <link href="{{asset('css/app_user.css')}}" rel="stylesheet">
    @yield('styles')
    </head>
    <body class="home">
        <!-- navbar-->
        <header class="header">
          <div role="navigation" class="navbar navbar-default">
            <div class="container">
              <div class="navbar-header"><a href="{{ route('portal.index') }}" class="navbar-brand">Vidiecky vzdelávaci portál</a>
                <div class="navbar-buttons">
                  <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle navbar-btn">Menu<i class="fa fa-align-justify"></i></button>
              </div>
          </div>
          <div id="navigation" class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
              <li class="active"><a href="{{ route('portal.index') }}">Domov</a></li>


                <li><a href="{{ route('allCourses') }}">Kurzy</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
      
      <?php if (Auth::check()) {
                ?>
                <li><a href="#">|</a></li>
                <li><a href="#">{{Auth::user()->name}}</a></li>
                <a style="border:none; margin-right: 5px;" href="{{ route('logout') }}" class="btn navbar-btn btn-white pull-left"><i class="fa fa-sign-out"></i>Log out</a>
                <?php
              }else{
                ?>


      <a style="border:none; margin-right: 5px;" href="{{ route('login') }}" class="btn navbar-btn btn-white pull-left"><i class="fa fa-sign-in"></i>Log in</a>
      <a href="{{ route('register') }}" class="btn navbar-btn btn-white pull-left"><i class="fa fa-sign-in"></i>Registrácia</a>
</ul>
        <?php

              }?>
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
<section class="section--padding-bottom-small">
  <div class="container">
    <div class="row">

      @if(Session::has('err'))
        <div class="bg-danger"> {{ Session::get('has-error') }} </div>
      @endif

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
<p class="credit">Diplmomová práca SPU Nitra</p>
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
{{-- <script src="js/front.js"></script><!-- substitute:livereload --> --}}
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