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


                <div class="col-md-12 text-center mt-5 "><h1 class="font-weight-bold">Start learning</h1></div>
                <div class="col-md-12 text-center white-text" ><h4>  Choose what you want to learn  </h4></div>



                <div class="col-md-6 m-auto pt-3">
                    <div class="input-group mb-4 shadow">
                        <div class="input-group md-form form-sm form-2 pl-0">
                            <input class="form-control my-0 py-1 red-border bg-white" type="text" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <span class="input-group-text red lighten-1 red-border" id="basic-text1"><i class="fas fa-search text-grey" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>


                </div>
                <!--<div class="col-md-12 m-auto text-center my-5 pb-5" style="top: 8px">
                    <a  class="btn  btn-outline-deep-orange">I'm student</a>
                    <a  class="btn  btn-outline-white  ">I'm teacher</a>
                </div>-->

            </div>
        </div>

    </div>

    <div class="container mt-3">



        <div class="row">
            <div class="col-md-12 justify-content-center tabs">

                <input type="radio" id="tab1" name="tab-control" checked>
                <input type="radio" id="tab2" name="tab-control">
                <input type="radio" id="tab3" name="tab-control">
                <input type="radio" id="tab4" name="tab-control">
                <ul>
                    <li title="CRM">
                        <label for="tab1" role="button">

                            <img src="/front/img/icon/5.png" class="w-100" />
                            <br>
                            <div>School</div>
                        </label>
                    </li>
                    <li title="ANALYTICS"><label for="tab2" role="button">

                            <img src="/front/img/icon/4.png" class="w-100" />
                            <div>Art</div>
                        </label>
                    </li>
                    <li title="MONEY TRANSFER"><label for="tab3" role="button">
                            <img src="/front/img/icon/5.png" class="w-100" />

                            <br>
                            <div>Sport </div>
                        </label></li>
                    <li title="MARKETPLACES"><label for="tab4" role="button">
                            <img src="/front/img/icon/4.png" class="w-100" />

                            <br>
                            <div>Other</div>
                        </label>
                    </li>

                </ul>

                <div class="slider">
                    <div class="indicator"></div>
                </div>
                <div class="content p-4 tabs-detail">
                    <section>
                        <div class="row text-center mt-4 ">
                            <div class="col-md-2 p-4 position-relative">
                                <a href="course.html" class="ancherLinks">
                                    <div><img src="/front/img/icon/1.png" class="mr-hover " width="50" alt=""></div>
                                    <div>chemistry</div>
                                </a>
                            </div>
                            <div class="col-md-2 p-4 position-relative">
                                <a href="course.html" class="ancherLinks">
                                    <div><img src="/front/img/icon/2.png" class="mr-hover" width="50" alt=""></div>
                                    <div>geography</div>
                                </a>
                            </div>
                            <div class="col-md-2 p-4 position-relative">
                                <a href="course.html" class="ancherLinks">
                                    <div><img src="/front/img/icon/3.png" class="mr-hover" width="50" alt=""></div>
                                    <div>history</div>
                                </a>
                            </div>
                            <div class="col-md-2 p-4 position-relative">
                                <a href="course.html" class="ancherLinks">
                                    <div><img src="/front/img/icon/1.png" class="mr-hover" width="50" alt=""></div>
                                    <div>mathematics</div>
                                </a>
                            </div>
                            <div class="col-md-2 p-4 position-relative">
                                <a href="course.html" class="ancherLinks">
                                    <div><img src="/front/img/icon/3.png" class="mr-hover " width="50" alt=""></div>
                                    <div>Course</div>
                                </a>
                            </div>
                            <div class="col-md-2 p-4 position-relative">
                                <a href="course.html" class="ancherLinks">
                                    <div><img src="/front/img/icon/2.png" class="mr-hover" width="50" alt=""></div>
                                    <div>Course</div>
                                </a>
                            </div>
                            <div class="col-md-2 p-4 position-relative">
                                <a href="course.html" class="ancherLinks">
                                    <div><img src="/front/img/icon/3.png" class="mr-hover" width="50" alt=""></div>
                                    <div>Course</div>
                                </a>
                            </div>
                            <div class="col-md-2 p-4 position-relative">
                                <a href="course.html" class="ancherLinks">
                                    <div><img src="/front/img/icon/1.png" class="mr-hover" width="50" alt=""></div>
                                    <div>Course</div>
                                </a>
                            </div>



                        </div>



                    </section>
                    <section>
                        <div class="row text-center mt-4 ">
                            <div class="col-md-2 p-4 position-relative">
                                <a href="course.html" class="ancherLinks">
                                    <div><img src="/front/img/icon/1.png" class="mr-hover " width="50" alt=""></div>
                                    <div>Music</div>
                                </a>
                            </div>
                            <div class="col-md-2 p-4 position-relative">
                                <a href="course.html" class="ancherLinks">
                                    <div><img src="/front/img/icon/2.png" class="mr-hover" width="50" alt=""></div>
                                    <div>Course</div>
                                </a>
                            </div>
                            <div class="col-md-2 p-4 position-relative">
                                <a href="course.html" class="ancherLinks">
                                    <div><img src="/front/img/icon/3.png" class="mr-hover" width="50" alt=""></div>
                                    <div>Course</div>
                                </a>
                            </div>
                            <div class="col-md-2 p-4 position-relative">
                                <a href="course.html" class="ancherLinks">
                                    <div><img src="/front/img/icon/1.png" class="mr-hover" width="50" alt=""></div>
                                    <div>Course</div>
                                </a>
                            </div>
                            <div class="col-md-2 p-4 position-relative">
                                <a href="course.html" class="ancherLinks">
                                    <div><img src="/front/img/icon/3.png" class="mr-hover " width="50" alt=""></div>
                                    <div>Course</div>
                                </a>
                            </div>
                            <div class="col-md-2 p-4 position-relative">
                                <a href="course.html" class="ancherLinks">
                                    <div><img src="/front/img/icon/2.png" class="mr-hover" width="50" alt=""></div>
                                    <div>Course</div>
                                </a>
                            </div>
                            <div class="col-md-2 p-4 position-relative">
                                <a href="course.html" class="ancherLinks">
                                    <div><img src="/front/img/icon/3.png" class="mr-hover" width="50" alt=""></div>
                                    <div>Course</div>
                                </a>
                            </div>
                            <div class="col-md-2 p-4 position-relative">
                                <a href="course.html" class="ancherLinks">
                                    <div><img src="/front/img/icon/1.png" class="mr-hover" width="50" alt=""></div>
                                    <div>Course</div>
                                </a>
                            </div>



                        </div>

                    </section>
                    <section>
                        <div class="row text-center mt-4 ">
                            <div class="col-md-2 p-4 position-relative">
                                <a href="course.html" class="ancherLinks">
                                    <div><img src="/front/img/icon/1.png" class="mr-hover " width="50" alt=""></div>
                                    <div>Sport</div>
                                </a>
                            </div>
                            <div class="col-md-2 p-4 position-relative">
                                <a href="course.html" class="ancherLinks">
                                    <div><img src="/front/img/icon/2.png" class="mr-hover" width="50" alt=""></div>
                                    <div>Course</div>
                                </a>
                            </div>
                            <div class="col-md-2 p-4 position-relative">
                                <a href="course.html" class="ancherLinks">
                                    <div><img src="/front/img/icon/3.png" class="mr-hover" width="50" alt=""></div>
                                    <div>Course</div>
                                </a>
                            </div>
                            <div class="col-md-2 p-4 position-relative">
                                <a href="course.html" class="ancherLinks">
                                    <div><img src="/front/img/icon/1.png" class="mr-hover" width="50" alt=""></div>
                                    <div>Course</div>
                                </a>
                            </div>
                            <div class="col-md-2 p-4 position-relative">
                                <a href="course.html" class="ancherLinks">
                                    <div><img src="/front/img/icon/3.png" class="mr-hover " width="50" alt=""></div>
                                    <div>Course</div>
                                </a>
                            </div>
                            <div class="col-md-2 p-4 position-relative">
                                <a href="course.html" class="ancherLinks">
                                    <div><img src="/front/img/icon/2.png" class="mr-hover" width="50" alt=""></div>
                                    <div>Course</div>
                                </a>
                            </div>
                            <div class="col-md-2 p-4 position-relative">
                                <a href="course.html" class="ancherLinks">
                                    <div><img src="/front/img/icon/3.png" class="mr-hover" width="50" alt=""></div>
                                    <div>Course</div>
                                </a>
                            </div>
                            <div class="col-md-2 p-4 position-relative">
                                <a href="course.html" class="ancherLinks">
                                    <div><img src="/front/img/icon/1.png" class="mr-hover" width="50" alt=""></div>
                                    <div>Course</div>
                                </a>
                            </div>



                        </div>

                    </section>
                    <section>
                        <div class="row text-center mt-4 ">
                            <div class="col-md-2 p-4 position-relative">
                                <a href="course.html" class="ancherLinks">
                                    <div><img src="/front/img/icon/1.png" class="mr-hover " width="50" alt=""></div>
                                    <div>Course</div>
                                </a>
                            </div>
                            <div class="col-md-2 p-4 position-relative">
                                <a href="course.html" class="ancherLinks">
                                    <div><img src="/front/img/icon/2.png" class="mr-hover" width="50" alt=""></div>
                                    <div>Course</div>
                                </a>
                            </div>
                            <div class="col-md-2 p-4 position-relative">
                                <a href="course.html" class="ancherLinks">
                                    <div><img src="/front/img/icon/3.png" class="mr-hover" width="50" alt=""></div>
                                    <div>Course</div>
                                </a>
                            </div>
                            <div class="col-md-2 p-4 position-relative">
                                <a href="course.html" class="ancherLinks">
                                    <div><img src="/front/img/icon/1.png" class="mr-hover" width="50" alt=""></div>
                                    <div>Course</div>
                                </a>
                            </div>
                            <div class="col-md-2 p-4 position-relative">
                                <a href="course.html" class="ancherLinks">
                                    <div><img src="/front/img/icon/3.png" class="mr-hover " width="50" alt=""></div>
                                    <div>Course</div>
                                </a>
                            </div>
                            <div class="col-md-2 p-4 position-relative">
                                <a href="course.html" class="ancherLinks">
                                    <div><img src="/front/img/icon/2.png" class="mr-hover" width="50" alt=""></div>
                                    <div>Course</div>
                                </a>
                            </div>
                            <div class="col-md-2 p-4 position-relative">
                                <a href="course.html" class="ancherLinks">
                                    <div><img src="/front/img/icon/3.png" class="mr-hover" width="50" alt=""></div>
                                    <div>Course</div>
                                </a>
                            </div>
                            <div class="col-md-2 p-4 position-relative">
                                <a href="course.html" class="ancherLinks">
                                    <div><img src="/front/img/icon/1.png" class="mr-hover" width="50" alt=""></div>
                                    <div>Course</div>
                                </a>
                            </div>



                        </div>

                        <!--
                        <div class="row">
                            <div class="col-md-4">

                                <img src="/front/img/crmbig.jpg" height="162" width="202"/></div>
                            <div class="col-md-8">
                                <h2>CRM</h2>
                                No more chaos. COAX team can help you to build and maintain relationships with
                                people who your success depends on. Maintaining efficient and cost-effective
                                partnerships is key to remain competitive. We develop a brand new system
                                for your business and integrate improve upon your current CRM system so
                                you can maintain efficient and cost-effective partnerships. Or maybe you
                                would like to integrate 3rd parties CRM? We can do it, of course!
                            </div>

                        </div>
                        -->
                    </section>
                </div>
            </div>
        </div>


    </div>

    <div class=" pt-menu pt-flow" style="padding-top: 0">

        <div class="row justify-content-center row-color">
            <div class="col-md-12 p-0 m-0">
                <div class="card-header white-text text-center py-4 orange-color">
                    <strong>ipsum dolor sit amet, eu qui choro equideHabeo suscipit euripidis sit ea. Regione tibique n </strong>
                </div>
                <h3 class="text-center py-3 mt-5">Teachers</h3>
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

                                                        <img src="/front/img/avatar.png" /></div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="user-meta has-text-centered">
                                                        <h3 class="username">Helen Miller</h3>
                                                        <h5 class="position">Accountant</h5>
                                                    </div>
                                                    <div class="user-bio has-text-centered">
                                                        <p>Helen Miller is an accountant at the Acme Inc comany. She
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
                                                        <h5 class="position">Accountant</h5>
                                                    </div>
                                                    <div class="user-bio has-text-centered">
                                                        <p>Helen Miller is an accountant at the Acme Inc comany. She
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
                                                        <h5 class="position">Accountant</h5>
                                                    </div>
                                                    <div class="user-bio has-text-centered">
                                                        <p>Helen Miller is an accountant at the Acme Inc comany. She
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
                <h3 class="text-center pb-3">Learn</h3>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top p-5 img-fluid" src="/front/img/image_counter.png" alt="Card image cap"/>

                    <div class="card-body">
                        <h4 class="card-title"><a>Course title</a></h4>
                        <p class="card-text">Some quick example text to build on the Course title and make up the bulk of the
                            card's content.</p>
                        <a href="course.html" class="btn purple-backcolor">More detail</a>

                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top p-5 img-fluid" src="/front/img/image_counter.png" alt="Card image cap"/>
                    <div class="card-body">
                        <h4 class="card-title"><a>Course title</a></h4>
                        <p class="card-text">Some quick example text to build on the Course title and make up the bulk of the
                            card's content.</p>
                        <a href="course.html" class="btn purple-backcolor">More detail</a>

                    </div>

                </div>
            </div>
        </div>


    </div>
@endsection