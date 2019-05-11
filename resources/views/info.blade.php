@extends('layouts.layout')

@section('content')




    <div class="mt-menu bg-image">
        <div class="container py-5 ">
            <div class="row ">


                <div class="col-md-12 text-center mt-0 "><h1 class="font-weight-bold">Start learning  </h1></div>
                <div class="col-md-12 text-center text-white" ><h4>
                        Or do you want to work as a private teacher?
                    </h4></div>




                <!--<div class="col-md-12 m-auto text-center my-5 pb-5" style="top: 8px">
                    <a  class="btn  btn-outline-deep-orange">I'm student</a>
                    <a  class="btn  btn-outline-white  ">I'm teacher</a>
                </div> -->

            </div>
        </div>

    </div>




















    <div class="row justify-content-center row-color">

    <div class="container pt-menu ">


        <div class="row justify-content-center py-3 mb-5 ">
            <div class="col-md-12 pb-5 mt-0 ">
                <h3 class="text-center pb-3"> Choose what you want to learn</h3>
            </div>



            @foreach($categories as $category)
                <div class="col-md-4 mb-4">
                    <a href="{{ $category->link() }}" class="card">
                        <img class="card-img-top p-5 img-fluid" src="{{$category->image}}" alt="Card image cap"/>

                        <div class="card-body text-center">
                            <h4 class="card-title text-center"><a>{{$category->title}}</a></h4>

                        </div>

                    </a>
                </div>
            @endforeach



        </div>


    </div>

    </div>



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
                                                        <h3 class="username">Josef Nash (test) </h3>
                                                        <h5 class="position">Art teacher</h5>
                                                    </div>
                                                    <div class="user-bio has-text-centered">
                                                        <p>Josef Nash is an accountant at the Acme Inc comany. She
                                                            works very hard.</p>
                                                    </div>
                                                    <div class="action has-text-centered">
                                                        <a  href="/user/1"  class="button is-small">View profile</a>
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
                                                        <h3 class="username">Helen Miller (test)</h3>
                                                        <h5 class="position">Computer teacher</h5>
                                                    </div>
                                                    <div class="user-bio has-text-centered">
                                                        <p>Helen Miller is an accountant at the Acme Inc comany. She
                                                            works very hard.</p>
                                                    </div>
                                                    <div class="action has-text-centered">
                                                        <a  href="/user/1"  class="button is-small">View profile</a>
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
                                                        <h3 class="username">Sara Gordon (test)</h3>
                                                        <h5 class="position">Sport teacher</h5>
                                                    </div>
                                                    <div class="user-bio has-text-centered">
                                                        <p>Sara Gordon is an accountant at the Acme Inc comany. She
                                                            works very hard.</p>
                                                    </div>
                                                    <div class="action has-text-centered">
                                                        <a  href="/user/1"  class="button is-small">View profile</a>
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

@endsection