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

            
              
              {{-- <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Dropdown item 1</a></li>
                  <li><a href="#">Dropdown item 2</a></li>
                  <li><a href="#">Dropdown item 3</a></li>
                  <li><a href="#">Dropdown item 4</a></li>
              </ul>
          </li> --}}
          {{-- <li><a href="contact.html">Kontakt</a></li> --}}
      
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