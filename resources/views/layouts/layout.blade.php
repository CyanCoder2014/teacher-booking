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



            <li class="nav-item dropdown pr-3 letter-s2 pb-3">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown"
                   aria-haspopup="true"
                   aria-expanded="false">Categories</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">

                   @foreach($categories as $category)
                    <a class="dropdown-item" href="#">{{$category->title}}</a>
                    @endforeach



                </div>
            </li>



            <li class="nav-item pr-3 letter-s2 pb-3">
                <a class="nav-link" href="course.html">Blog</a>
            </li>
            <li class="nav-item pr-3 letter-s2 pb-3">
                <a class="nav-link" href="about.html">About us</a>
            </li>
            <li class="nav-item pr-3 letter-s2 pb-3">
                <a class="nav-link" href="contact.html">Contact us</a>
            </li>



          <li class="nav-item position-relative nav-li-line pl-4 mr-3">
              <a class="nav-link nav-link btn btn-sm orange-border" href="{{ route('profile') }}">Register as teacher</a>


          </li>

            <li class="nav-item pb-3 ">
                <a class="nav-link nav-link btn btn-sm" href="{{ route('CourseRequest') }}">Request a course</a>

            </li>

            <li class="nav-item pr-3 letter-s2 pb-3">

                @if(!Auth::check())
                   <a class="nav-link btn nav-btn nav-btn-line " href="{{ route('login') }}">Login</a>
                    @else
                    <a class="nav-link btn nav-btn nav-btn-line " href="{{ route('profile') }}"> {{Auth::user()->name}} Profile</a>
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