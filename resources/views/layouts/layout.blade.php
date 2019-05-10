<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teacher.nu | learn every thing</title>

    <meta name="description"
          content="Start learning |
Choose what you want to learn">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="/front/css/all.css">-->
    <link rel="stylesheet" href="/front/css/bootstrap.min.css">
    <link rel="stylesheet" href="/front/css/mdb.min.css">
    <link rel="stylesheet" href="/front/css/General.css">
    <link rel="stylesheet" href="/front/css/style.css">
    <link rel="stylesheet" href="/front/css/fam.css">
    <script src="/front/js/jquery.min.js"></script>
    @yield('head')

</head>

<body>
<!--Navbar-->

<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-transparent pt-3 pb-0 zIndex100 scrolling-navbar "
     style="background-color: white!important;">

    <!-- Navbar brand -->
    <a class="navbar-brand  pt-0" href="/">

        <img src="/front/img/logo-teacher.png" style="margin-top: -17px;height: 45px;"/>
    </a>

    <!-- Collapse button -->
    <button class="navbar-toggler mb-3" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse mt-1" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">


            <!-- Dropdown

            <li class="nav-item dropdown pr-3 pb-3 letter-s2 windowlink">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink"
                   aria-haspopup="true"
                   aria-expanded="false">Courses</a>
            </li>
             -->
            <li class="nav-item dropdown pr-3 letter-s2 pb-0 mb-0 mt-1 ">

            <form class="form-inline active-purple-3 active-purple-4">
                <input name="title" class="form-control form-control-sm mx-2  " type="text" placeholder="Search" aria-label="Search">
                <button type="submit" class="btn m-0 p-0 mr-1" style="background:none;color: black!important;box-shadow: none"> <i class="fas fa-search" aria-hidden="true"></i> </button>

            </form>
            </li>

            <li class="nav-item dropdown pr-3 letter-s2 pb-3">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown"
                   aria-haspopup="true"
                   aria-expanded="false">Categories</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">

                   @foreach($categories as $category)
                    <a  href="{{ $category->link() }}" class="dropdown-item" href="#">{{$category->title}}</a>
                    @endforeach



                </div>
            </li>



            <li class="nav-item pr-3 letter-s2 pb-3">
                <a class="nav-link" href="/blog">News</a>
            </li>
            <li class="nav-item pr-3 letter-s2 pb-3">
                <a class="nav-link" href="/info">Info</a>
            </li>




          <li class="nav-item position-relative nav-li-line pl-4 mr-3">
              <a class="nav-link nav-link btn btn-sm " href="{{ route('profile') }}">Register as teacher</a>


          </li>

            <li class="nav-item pb-3 ">
                <a class="nav-link nav-link btn btn-sm" href="/myCourseRequests/create">Request a course or teacher</a>

            </li>

            <li class="nav-item pr-3 letter-s2 pb-3">

                @if(!Auth::check())

                        <button class=" dropdown-toggle mr-4 nav-link btn nav-btn nav-btn-line " type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></button>

                        <div class="dropdown-menu" style=" " >
                            <a class="dropdown-item" href="" data-toggle="modal" data-target="#modalContactForm">Login</a>
                            <a class="dropdown-item" href="{{ route('register') }}"> Register</a>

                        </div>


                    @else

                    <button class=" dropdown-toggle mr-4 nav-link btn nav-btn nav-btn-line " type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></button>

                    <div class="dropdown-menu" style=" " >
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Edit info</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                    </div>

                    <a class="nav-link btn nav-btn nav-btn-line " href="/user/{{Auth::user()->id}}"> {{Auth::user()->name}} Profile</a>
                @endif



            </li>




        </ul>
        <!-- Links -->


    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->
@yield('content')
<!-- Footer -->
<footer class="page-footer font-small pt-4 purple-backcolor position-relative">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left ">

        <!-- Grid row -->
        <div class="row justify-content-center mb-5 mt-4">

            <!-- Grid column -->
            <div class="col-md-3 mt-md-0 mt-3  px-5">

                <!-- Content -->
                <h6 class="light-purple-color footer-line pb-1">Contact us</h6>
                <ul class="list-unstyled">
                    <li>
                        <i class="fas fa-envelope fa-1x pr-1 "></i> <a href="#!">info@domaun.com</a>
                    </li>
                    <li>
                        <i class="fab fa-telegram-plane fa-1x pr-1"></i> <a href="#!">telegram.id</a>
                    </li>
                    <li>
                        <i class="fas fa-phone fa-1x pr-1"></i><a href="#!">2222112</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3 px-5">

                <!-- Links -->
                <h6 class="light-purple-color footer-line pb-1">About us</h6>

                <p>Learnn more about us Learnn more about us Learnn more about us Learnn more us</p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3 text-center">
                <div class="mt-5">
                    <a href="#">
                        <span class="p-2 footer-sotial-span mr-1"><i class="fab fa-linkedin-in purple-color"></i></span>
                    </a>
                    <a href="#">
                        <span class="p-2 footer-sotial-span mr-1"><i
                                    class="fab fa-google-plus-g purple-color"></i></span>
                    </a>
                    <a href="#">
                        <span class="p-2 footer-sotial-span mr-1"><i class="fab fa-facebook-f purple-color"></i></span>
                    </a>
                </div>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-2">

        <ul class="list">
            <li class="mr-5">
                <a href="#!">Categories</a>
            </li>
            <li class="mr-5">
                <a href="#!">Blog</a>
            </li>
            <li class="mr-5">
                <a href="#!">About</a>
            </li>
            <li class="mr-5">
                <a href="#!">Content</a>
            </li>
            <li class="mr-5 p-1 float-right">
                © 2019  - Designed by <a href="https://cyancoder.co/en" style="display: inline">CyanCoder</a>

            </li>
        </ul>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->







<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold"> Login to Teacher.nu  </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-1">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-md-12 col-form-label ">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-12 col-form-label ">{{ __('Password') }}</label>

                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12 ">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-12 ">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>


            </div>
            <div class="modal-footer d-flex ">
                or
                <a class="btn orange-color" href="{{ route('register') }}">
                    Register
                </a>
                if you are new
            </div>
        </div>
    </div>
</div>





<script src="/front/js/popper.min.js"></script>
<script src="/front/js/bootstrap.min.js"></script>
<script src="/front/js/mdb.min.js"></script>
<script src="/front/js/fam.js"></script>
<!--<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>-->
<!--<script src="/front/js/navbar.js"></script>-->
@yield('script')
@include('layouts.toastr')
</body>
</html>