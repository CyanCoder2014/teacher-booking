@extends('layouts.layout')

@section('content')

    <div class="window-drop animated slideInDown">
        <div class="closeLink"><i class="fa fa-times"></i></div>
        <div class="tab">
            <button class="tablinks active" onmouseover="openCity(event, 'London')"><img src="/front/img/icon/5.png"
                                                                                         class="mr-hover" width="40" alt="">
                School
            </button>
            <button class="tablinks" onmouseover="openCity(event, 'Paris')"><img src="/front/img/icon/4.png"
                                                                                 class="mr-hover" width="40" alt="">Art
            </button>
            <button class="tablinks" onmouseover="openCity(event, 'Tokyo')"><img src="/front/img/icon/5.png"
                                                                                 class="mr-hover" width="40" alt="">Sport
            </button>
        </div>

        <div id="London" class="tabcontent animated fadeIn" style="display: block">
            <div class="container">
                <div class="row text-center mt-4 ">
                    <div class="col-md-2 col-sm-4 p-4 position-relative">
                        <a href="course.html" class="ancherLinks">
                            <div><img src="/front/img/icon/1.png" class="mr-hover " width="50" alt=""></div>
                            <div>chemistry</div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 p-4 position-relative">
                        <a href="course.html" class="ancherLinks">
                            <div><img src="/front/img/icon/2.png" class="mr-hover" width="50" alt=""></div>
                            <div>geography</div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 p-4 position-relative">
                        <a href="course.html" class="ancherLinks">
                            <div><img src="/front/img/icon/3.png" class="mr-hover" width="50" alt=""></div>
                            <div>history</div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 p-4 position-relative">
                        <a href="course.html" class="ancherLinks">
                            <div><img src="/front/img/icon/1.png" class="mr-hover" width="50" alt=""></div>
                            <div>mathematics</div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 p-4 position-relative">
                        <a href="course.html" class="ancherLinks">
                            <div><img src="/front/img/icon/3.png" class="mr-hover " width="50" alt=""></div>
                            <div>Course</div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 p-4 position-relative">
                        <a href="course.html" class="ancherLinks">
                            <div><img src="/front/img/icon/2.png" class="mr-hover" width="50" alt=""></div>
                            <div>Course</div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 p-4 position-relative">
                        <a href="course.html" class="ancherLinks">
                            <div><img src="/front/img/icon/3.png" class="mr-hover" width="50" alt=""></div>
                            <div>Course</div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 p-4 position-relative">
                        <a href="course.html" class="ancherLinks">
                            <div><img src="/front/img/icon/1.png" class="mr-hover" width="50" alt=""></div>
                            <div>Course</div>
                        </a>
                    </div>


                </div>
            </div>
        </div>

        <div id="Paris" class="tabcontent animated fadeIn">
            <div class="container">
                <div class="row text-center mt-4 ">
                    <div class="col-md-2 col-sm-4 p-4 position-relative">
                        <a href="course.html" class="ancherLinks">
                            <div><img src="/front/img/icon/1.png" class="mr-hover " width="50" alt=""></div>
                            <div>chemistry</div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 p-4 position-relative">
                        <a href="course.html" class="ancherLinks">
                            <div><img src="/front/img/icon/2.png" class="mr-hover" width="50" alt=""></div>
                            <div>geography</div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 p-4 position-relative">
                        <a href="course.html" class="ancherLinks">
                            <div><img src="/front/img/icon/3.png" class="mr-hover" width="50" alt=""></div>
                            <div>history</div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 p-4 position-relative">
                        <a href="course.html" class="ancherLinks">
                            <div><img src="/front/img/icon/1.png" class="mr-hover" width="50" alt=""></div>
                            <div>mathematics</div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 p-4 position-relative">
                        <a href="course.html" class="ancherLinks">
                            <div><img src="/front/img/icon/3.png" class="mr-hover " width="50" alt=""></div>
                            <div>Course</div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 p-4 position-relative">
                        <a href="course.html" class="ancherLinks">
                            <div><img src="/front/img/icon/2.png" class="mr-hover" width="50" alt=""></div>
                            <div>Course</div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 p-4 position-relative">
                        <a href="course.html" class="ancherLinks">
                            <div><img src="/front/img/icon/3.png" class="mr-hover" width="50" alt=""></div>
                            <div>Course</div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 p-4 position-relative">
                        <a href="course.html" class="ancherLinks">
                            <div><img src="/front/img/icon/1.png" class="mr-hover" width="50" alt=""></div>
                            <div>Course</div>
                        </a>
                    </div>


                </div>
            </div>
        </div>

        <div id="Tokyo" class="tabcontent animated fadeIn">
            <div class="container">
                <div class="row text-center mt-4 ">
                    <div class="col-md-2 col-sm-4 p-4 position-relative">
                        <a href="course.html" class="ancherLinks">
                            <div><img src="/front/img/icon/1.png" class="mr-hover " width="50" alt=""></div>
                            <div>chemistry</div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 p-4 position-relative">
                        <a href="course.html" class="ancherLinks">
                            <div><img src="/front/img/icon/2.png" class="mr-hover" width="50" alt=""></div>
                            <div>geography</div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 p-4 position-relative">
                        <a href="course.html" class="ancherLinks">
                            <div><img src="/front/img/icon/3.png" class="mr-hover" width="50" alt=""></div>
                            <div>history</div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 p-4 position-relative">
                        <a href="course.html" class="ancherLinks">
                            <div><img src="/front/img/icon/1.png" class="mr-hover" width="50" alt=""></div>
                            <div>mathematics</div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 p-4 position-relative">
                        <a href="course.html" class="ancherLinks">
                            <div><img src="/front/img/icon/3.png" class="mr-hover " width="50" alt=""></div>
                            <div>Course</div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 p-4 position-relative">
                        <a href="course.html" class="ancherLinks">
                            <div><img src="/front/img/icon/2.png" class="mr-hover" width="50" alt=""></div>
                            <div>Course</div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 p-4 position-relative">
                        <a href="course.html" class="ancherLinks">
                            <div><img src="/front/img/icon/3.png" class="mr-hover" width="50" alt=""></div>
                            <div>Course</div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 p-4 position-relative">
                        <a href="course.html" class="ancherLinks">
                            <div><img src="/front/img/icon/1.png" class="mr-hover" width="50" alt=""></div>
                            <div>Course</div>
                        </a>
                    </div>


                </div>
            </div>
        </div>

    </div>


    <div class="mt-menu bg-image">
        <div class="container py-5 ">
            <div class="row ">


                <div class="col-md-12 text-center mt-2 "><h1 class="font-weight-bold">Start learning</h1></div>
                <div class="col-md-12 text-center white-text" ><h4>  Choose what you want to learn  </h4></div>




                <div class=" m-auto pt-3 px-4 flex-center">
                    <div class="input-group mb-4 shadow  flex-center" >

                        @foreach($categories as $category)
                            <a class="nav-link btn  nav-btn-category" href="#"><img style="height: 30px" src="{{$category->image}}"> <h3>{{$category->title}}</h3></a>
                        @endforeach



                        <!--
                        <div class="input-group md-form form-sm form-2 pl-0">
                            <input class="form-control my-0 py-1 red-border bg-white" type="text" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <span class="input-group-text red lighten-1 red-border" id="basic-text1"><i class="fas fa-search text-grey" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        -->
                    </div>


                </div>
                <!--<div class="col-md-12 m-auto text-center my-5 pb-5" style="top: 8px">
                    <a  class="btn  btn-outline-deep-orange">I'm student</a>
                    <a  class="btn  btn-outline-white  ">I'm teacher</a>
                </div>-->

            </div>
        </div>

    </div>






















    <div class="container ">
        <div class="row mt-5 mb-5">
            <div class="col-md-2 bg-white p-3" style="margin-top: 4.5rem">
                <!--
                <ul style="list-style: none" class="p-0">
                    <li class="font-weight-bold"><a href="#" class="text-black" id="all">all</a></li>
                    <li><a href="#" class="text-black" id="category">category</a></li>
                    <li><a href="#" class="text-black" id="language">language</a></li>
                </ul>
                <hr>
                -->
                <ul style="list-style: none" class="p-0">

                    <li>
                        <!-- Default unchecked -->
                        <div class="custom-control custom-checkbox">
                            <input checked type="checkbox" class="custom-control-input" id="defaultUnchecked">
                            <label class="custom-control-label" for="defaultUnchecked">All Categories</label>
                        </div>
                    </li>

                    @foreach($categories as $category)
                        <li>
                            <!-- Default unchecked -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                                <label class="custom-control-label" for="defaultUnchecked">{{$category->title}}</label>
                            </div>
                        </li>
                    @endforeach


                </ul>
            </div>
            <div class="col-md-10 text-right ">
                <ul class="nav nav-tabs justify-content-end filterUl" id="myTab" role="tablist">
                    <li class="nav-item" >
                        <a class="nav-link active p-0"  data-toggle="tab" href="#home" role="tab"
                           aria-controls="home"
                           aria-selected="true"><div class="p-3" id="grid-tab">Teachers Profile</div></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-0" data-toggle="tab" href="#home" role="tab"
                           aria-controls="profile"
                           aria-selected="false"><div class="p-3" id="list-tab">Teachers detail</div></a>
                    </li>

                    <!--
                    <li class="nav-item">
                        <a class="nav-link p-0" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                           aria-controls="contact"
                           aria-selected="false"><div class="p-3">other</div></a>
                    </li>
                    -->
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="container">
                            <div class="row">





                                @foreach($courses as $course)


                                    <a href="{{$course->link}}" class="col-md-4 mt-3 mother1">
                                        <div class="shadow hoverable p-3 bg-white">
                                            <div class="row">
                                                <div class="col-md-12 mother2">
                                                    <div class="text-center">
                                                        <img src="/front/img/avatar-04.jpg" class="rounded-circle w-50" style="max-width: 250px"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mother2">
                                                    <h5 class="text-center font-weight-bold mt-3">
                                                       {{$course->title}}
                                                    </h5>
                                                    <h6 class="text-center  mt-3">
                                                        {!! \Illuminate\Support\Str::words($course->intro , $words = 8, $end = '...') !!}
                                                    </h6>
                                                </div>
                                            </div>


                                        </div>
                                    </a>
                                @endforeach





                                <a class="col-md-4 mt-3 mother1">
                                    <div class="shadow hoverable p-3 bg-white">
                                        <div class="row">
                                            <div class="col-md-12 mother2">
                                                <div class="text-center">
                                                    <img src="/front/img/avatar-04.jpg" class="rounded-circle w-50" style="max-width: 250px"/>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mother2">
                                                <h5 class="text-center font-weight-bold mt-3">
                                                   Sam Smith
                                                </h5>
                                                <h6 class="text-center  mt-3">
                                                    English teacher
                                                </h6>
                                            </div>
                                        </div>


                                    </div>
                                </a>



                                    <a class="col-md-4 mt-3 mother1">
                                        <div class="shadow hoverable p-3 bg-white">
                                            <div class="row">
                                                <div class="col-md-12 mother2">
                                                    <div class="text-center">
                                                        <img src="/front/img/avatar-02.jpg" class="rounded-circle w-50" style="max-width: 250px"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mother2">
                                                    <h5 class="text-center font-weight-bold mt-3">
                                                       Rose Green
                                                    </h5>
                                                    <h6 class="text-center  mt-3">
                                                        Art teacher
                                                    </h6>
                                                </div>
                                            </div>


                                        </div>
                                    </a>




                                    <a class="col-md-4 mt-3 mother1">
                                        <div class="shadow hoverable p-3 bg-white">
                                            <div class="row">
                                                <div class="col-md-12 mother2">
                                                    <div class="text-center">
                                                        <img src="/front/img/avatar-03.jpg" class="rounded-circle w-50" style="max-width: 250px"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mother2">
                                                    <h5 class="text-center font-weight-bold mt-3">
                                                        Sam Smith
                                                    </h5>
                                                    <h6 class="text-center  mt-3">
                                                        Traffic teacher
                                                    </h6>
                                                </div>
                                            </div>


                                        </div>
                                    </a>




                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="p-3">
                           <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12958.568448977405!2d51.411705618567204!3d35.71042366599737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e0166f8cc432f%3A0x3dca3f769a547d6a!2sKachiran!5e0!3m2!1sen!2ses!4v1544976503063"
                                    frameborder="0" style="border:0; height: 510px" class="shadow w-100"
                                    allowfullscreen></iframe>-->
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- End teacher list -->







    <div class=" pt-menu pt-flow" style="padding-top: 0">

        <div class="row justify-content-center row-color">
            <div class="col-md-12 p-0 m-0">
                <div class="card-header white-text text-center py-4 orange-color">
                    <strong>ipsum dolor sit amet, eu qui choro equideHabeo suscipit euripidis sit ea. Regione tibique n </strong>
                </div>
                <h3 class="text-center py-3 mt-5">Best Teachers</h3>
                <div id="carouselExampleControls" class="carousel slide my-5" data-ride="carousel">

                    <div class="carousel-inner over-vis" role="listbox">





                        <div class="carousel-item active">
                            <div class="section">
                                <div class="container">
                                    <div class="columns">
                                        <div class="column is-4 is-offset-4">
                                            <div class="card my-2">
                                                <div class="header">
                                                    <div class="avatar">
                                                        <img src="/front/img/avatar-05.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="user-meta has-text-centered">
                                                        <h3 class="username">Josef Nash </h3>
                                                        <h5 class="position">Art teacher</h5>
                                                    </div>
                                                    <div class="user-bio has-text-centered">
                                                        <p>Josef Nash is an accountant at the Acme Inc comany. She
                                                            works very hard.</p>
                                                    </div>
                                                    <div class="action has-text-centered">
                                                        <a href="profile.html" class="button is-small">View profile</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="section">
                                <div class="container">
                                    <div class="columns">
                                        <div class="column is-4 is-offset-4">
                                            <div class="card my-2">
                                                <div class="header">
                                                    <div class="avatar">
                                                        <img src="https://image.ibb.co/fa2YRF/dounia.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="user-meta has-text-centered">
                                                        <h3 class="username">Helen Miller</h3>
                                                        <h5 class="position">Computer teacher</h5>
                                                    </div>
                                                    <div class="user-bio has-text-centered">
                                                        <p>Helen Miller is an accountant at the Acme Inc comany. She
                                                            works very hard.</p>
                                                    </div>
                                                    <div class="action has-text-centered">
                                                        <a href="#" class="button is-small">View profile</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="section">
                                <div class="container">
                                    <div class="columns">
                                        <div class="column is-4 is-offset-4">
                                            <div class="card my-2">
                                                <div class="header">
                                                    <div class="avatar">
                                                        <img src="/front/img/avatar.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="user-meta has-text-centered">
                                                        <h3 class="username">Sara Gordon</h3>
                                                        <h5 class="position">Sport teacher</h5>
                                                    </div>
                                                    <div class="user-bio has-text-centered">
                                                        <p>Sara Gordon is an accountant at the Acme Inc comany. She
                                                            works very hard.</p>
                                                    </div>
                                                    <div class="action has-text-centered">
                                                        <a href="#" class="button is-small">View profile</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <a class="arrow carousel-control-prev" href="#carouselExampleControls" role="button"
                       data-slide="prev">
                        <img src="/front/img/arrow-left.png" height="128" width="128" class="position-absolute img-fluid prev-img"/>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="arrow carousel-control-next" href="#carouselExampleControls" role="button"
                       data-slide="next">
                        <img src="/front/img/arrow-right.png" height="128" width="128" class="position-absolute img-fluid next-img" />
                        <span class="sr-only">Next</span>
                    </a>

                </div>
            </div>
        </div>
    </div>

    <div class="container pt-menu">


        <div class="row justify-content-center py-3 mb-5">
            <div class="col-md-12 pb-5 mt-0 ">
                <h3 class="text-center pb-3">Requested courses</h3>
            </div>



            @foreach($coursesRequests as $coursesRequest)
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top p-5 img-fluid" src="/front/img/bgtop.png" alt="Card image cap"/>

                    <div class="card-body">
                        <h4 class="card-title"><a>{{$coursesRequest->title}}</a></h4>
                        <p class="card-text">{{$coursesRequest->intro}}</p>

                    </div>

                </div>
            </div>
            @endforeach



            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top p-5 img-fluid" src="/front/img/bgtop.png" alt="Card image cap"/>

                    <div class="card-body">
                        <h4 class="card-title"><a>Course title</a></h4>
                        <p class="card-text">Some quick example text to build on the Course title and make up the bulk of the
                            card's content.</p>

                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top p-5 img-fluid" src="/front/img/bgtop.png" alt="Card image cap"/>
                    <div class="card-body">
                        <h4 class="card-title"><a>Course title</a></h4>
                        <p class="card-text">Some quick example text to build on the Course title and make up the bulk of the
                            card's content.</p>

                    </div>

                </div>
            </div>
        </div>


    </div>
@endsection