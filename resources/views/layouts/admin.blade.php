    <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base_url" content="{{ url('/') }}">

    <title>Admin - Vidiecky Vzdelávací portál</title>

    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('styles')

</head>

<body id="admin-page">

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Administrácia</a>
        </div>
        <!-- /.navbar-header -->
        <ul class="nav navbar-top-links navbar-right">


            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> {{ Auth::user()->name . " " }}<i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
{{--                     <li><a href="#"><i class="fa fa-user fa-fw"></i> Profil používateľa</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Nastavenia</a>
                    </li> --}}
                    {{-- <li class="divider"></li> --}}
                    <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out fa-fw"></i> Odhlásiť sa</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->


        </ul>

        {{--<ul class="nav navbar-nav navbar-right">--}}
        {{--@if(auth()->guest())--}}
        {{--@if(!Request::is('auth/login'))--}}
        {{--<li><a href="{{ url('/auth/login') }}">Login</a></li>--}}
        {{--@endif--}}
        {{--@if(!Request::is('auth/register'))--}}
        {{--<li><a href="{{ url('/auth/register') }}">Register</a></li>--}}
        {{--@endif--}}
        {{--@else--}}
        {{--<li class="dropdown">--}}
        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span></a>--}}
        {{--<ul class="dropdown-menu" role="menu">--}}
        {{--<li><a href="{{ url('/auth/logout') }}">Logout</a></li>--}}

        {{--<li><a href="{{ url('/admin/profile') }}/{{auth()->user()->id}}">Profile</a></li>--}}
        {{--</ul>--}}
        {{--</li>--}}
        {{--@endif--}}
        {{--</ul>--}}


        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="{{route('dashboard')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-user fa-fw"></i> Používatelia<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('users.index')}}">Zoznam používateľov</a>
                            </li>

                            <li>
                                <a href="{{route('users.create')}}">Nový používateľ</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-book fa-fw"></i> Kurzi<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('courses.index') }}">Zoznam kurzov</a>
                            </li>

                            <li>
                                <a href="{{ route('courses.create') }}">Nový kurz</a>
                            </li>

                            <li>
                                <a href="{{ route('course-categories.index') }}">Kategórie</a>
                                {{-- <ul class="nav nav-third-level">
                                    <li>
                                        <a href="">Zoznam kategórií</a>
                                    </li>
                                </ul> --}}
                                <!-- /.nav-third-level -->
                            </li>

                            <li>
                                <a href="{{ route('applications.index') }}">Prihlášky</a>
                            </li>

                            <li>
                                <a href="{{ route('results.index') }}">Výsledky testov</a>
                            </li>
{{-- 
                            <li>
                                <a href="{{ route('courses.lessons.index', ) }}">Zoznam lekcii</a>
                            </li>

                             <li>
                                <a href="{{ route('courses.lessons.create') }}">nova lekcia</a>
                            </li> --}}

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-newspaper-o fa-fw"></i> Blog<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('posts.index') }}">Zoznam člankov</a>
                            </li>

                            <li>
                                <a href="{{ route('posts.create') }}">Nový članok</a>
                            </li>
                            <li>
                                <a href="{{ route('post-categories.index') }}">Kategórie{{--  <span class="fa arrow"></span> --}}</a>
                                {{-- <ul class="nav nav-third-level">
                                    <li>
                                        <a href="{{ route('post-categories.index') }}">Zoznam kategórií</a>
                                    </li>
                                </ul> --}}
                                <!-- /.nav-third-level -->
                            </li>

                            {{-- <li>
                                <a href="#"> Komentáre <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="">Zoznam komentárov</a>
                                    </li>
                                    <li>
                                        <a href="">XXX</a>
                                    </li>
                                </ul>
                                <!-- /.nav-third-level -->
                            </li> --}}

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

{{--                       <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i>X<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/categories">XX</a>
                            </li>

                            <li>
                                <a href="/categories/create">X</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
 --}}                

                   {{-- < li>
                        <a href="#"><i class="fa fa-image fa-fw"></i> Banneri<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('banners.index') }}">Zoznam bannerov</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li> --}}

                     <li>
                        <a href="#"><i class="fa fa-file fa-fw"></i> Súbory<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('media.index') }}">Zoznam súborov</a>
                            </li>

                            <li>
                                <a href="{{ route('media.create') }}">Nahrať súbory</a>    
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

{{--
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                                <!-- /.nav-third-level -->
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li> --}}
                </ul>


            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>


<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                {{-- <h1 class="page-header"></h1> --}}
                
                @yield('content')
                
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{asset('js/app.js')}}"></script>




@yield('scripts')
{{-- @yield('footer') --}}





</body>

</html>
