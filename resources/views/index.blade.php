@extends('layouts.layout')

@section('content')




    <div class="mt-menu bg-image">
        <div class="container py-5 ">
            <div class="row ">


                <div class="col-md-12 text-center mt-0 "><h1 class="font-weight-bold">
                        @if(App::getLocale() == 'en')
                            Start learning
                        @else
                            Börja lära sig
                        @endif
                    </h1></div>
                <div class="col-md-12 text-center text-white" ><h4>

                        @if(App::getLocale() == 'en')
                            Or do you want to work as a private teacher?
                        @else
                            Eller vill du arbeta som privatlärare?
                        @endif
                    </h4></div>




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
                <form action="">
                    <h4 style="color: #ef5258 ;font-size: 1.6rem">Category</h4>
                    <ul style="list-style: none" class="p-0">
                        <li>
                            <!-- Default unchecked -->
                            <div class="custom-control custom-checkbox">
                                <input @if(!is_array(Request::get('categories')))checked @endif type="checkbox" class="custom-control-input" id="defaultUnchecked">
                                <label class="custom-control-label" for="defaultUnchecked">All Categories</label>
                            </div>
                        </li>

                        @foreach($categories as $category)
                            <li>
                                <!-- Default unchecked -->
                                <div class="custom-control custom-checkbox">
                                    <input @if(is_array(Request::get('categories')) and in_array($category->id,Request::get('categories'))) checked @endif type="checkbox" class="custom-control-input" id="{{$category->title}}" name="categories[]" value="{{$category->id}}">
                                    <label class="custom-control-label" for="{{$category->title}}">{{$category->title}}</label>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                    <h4 style="color: #ef5258 ;font-size: 1.6rem">Types</h4>
                    <ul style="list-style: none" class="p-0">
                        <li>
                            <!-- Default unchecked -->
                            <div class="custom-control custom-checkbox">
                                <input @if(!is_array(Request::get('types')))checked @endif type="checkbox" class="custom-control-input" id="defaultUnchecked1">
                                <label class="custom-control-label" for="defaultUnchecked1">All Types</label>
                            </div>
                        </li>
                        <li>
                            <!-- Default unchecked -->
                            <div class="custom-control custom-checkbox">
                                <input @if(is_array(Request::get('types')) and in_array(0,Request::get('types'))) checked @endif type="checkbox" class="custom-control-input" id="type1" name="types[]" value="0">
                                <label class="custom-control-label" for="type1">private</label>
                            </div>
                        </li>
                        <li>
                            <!-- Default unchecked -->
                            <div class="custom-control custom-checkbox">
                                <input @if(is_array(Request::get('types')) and in_array(1,Request::get('types'))) checked @endif  type="checkbox" class="custom-control-input" id="type2" name="types[]" value="1">
                                <label class="custom-control-label" for="type2">group</label>
                            </div>
                        </li>
                        <li>
                            <!-- Default unchecked -->
                            <div class="custom-control custom-checkbox">
                                <input @if(is_array(Request::get('types')) and in_array(2,Request::get('types'))) checked @endif type="checkbox" class="custom-control-input" id="type3" name="types[]" value="2">
                                <label class="custom-control-label" for="type3">online</label>
                            </div>
                        </li>



                    </ul>
                    <h4 style="color: #ef5258 ;font-size: 1.6rem">Price Range</h4>
                    <div class="row">
                        <div class="col-6 form-group">
                            <label for="min">Min</label>
                            <input type="number" class="form-control" name="min" id="min" value="{{ Request::get('min') }}">
                        </div>
                        <div class="col-6 form-group">
                            <label for="max">Max</label>
                            <input type="number" class="form-control" name="max" id="max" value="{{ Request::get('max') }}">
                        </div>
                    </div>
                    <button class="btn btn-danger nav-link nav-link btn btn-sm orange-border waves-effect waves-light" type="submit">Filter</button>
                </form>
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


                                    <a href="/user/{{$course->id}}" class="col-md-4 mt-3 mother1">
                                        <div class="shadow hoverable p-3 bg-white">
                                            <div class="row">
                                                <div class="col-md-12 mother2">
                                                    <div class="text-center">
                                                        <img src="{{ asset($course->image()) }}" class="rounded-circle w-50" style="height: 250px"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mother2 " style="height: 280px;overflow: hidden">
                                                    <h5 class="text-center font-weight-bold mt-3 text-grey ">
                                                       {{$course->category->title }}
                                                    </h5>

                                                    <h5 class="text-center  mt-2 orange-text ">
                                                        {{$course->subject}}
                                                    </h5>

                                                    <h6 class="text-center  mt-2 text-black ">
                                                        {{ $course->city}}, {{ $course->state->name }}
                                                    </h6>
                                                    <div class=" text-center">
                                                        <div class="text-orang" style="font-size: 10px">
                                                            @for($i=1;$i< $course->AcceptedComment->avg('rate');$i++)
                                                                <i class="fas fa-star"></i>
                                                            @endfor
                                                            @if(($course->AcceptedComment->avg('rate')/0.5)%2 == 1)
                                                                <i class="fas fa-star-half"></i>
                                                            @endif
                                                        </div>
                                                        <span class="font-weight-bold">{{ $course->AcceptedComment->avg('rate') }}</span>
                                                    </div>

                                                    <h6 class="text-center  mt-3 orange-text">

                                                    <span class="text-grey font-weight-bold">Hourly rate:
                                                </span>
                                                    <span class=" font-weight-bold">
                                                    {{ $course->hourly_rate }}$
                                                    </span>
                                                    </h6>


                                                    <h6 class="text-center  mt-2 text-grey ">
                                                        {!! \Illuminate\Support\Str::words($course->intro , $words = 6, $end = '...') !!}
                                                    </h6>
                                                </div>
                                            </div>


                                        </div>
                                    </a>
                                @endforeach

<!--


                                    <a  href="/user/1"  class="col-md-4 mt-3 mother1">
                                        <div class="shadow hoverable p-3 bg-white">
                                            <div class="row">
                                                <div class="col-md-12 mother2">
                                                    <div class="text-center">
                                                        <img src="/front/img/avatar-03.jpg" class="rounded-circle w-50" style="max-width: 250px"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mother2">
                                                    <h5 class="text-center font-weight-bold mt-3">
                                                        Sam Smith (test)
                                                    </h5>
                                                    <h6 class="text-center  mt-3">
                                                        Traffic teacher
                                                    </h6>
                                                </div>
                                            </div>


                                        </div>
                                    </a>


-->

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





    <div class="row justify-content-center row-color">

    <div class="container pt-menu ">


        <div class="row justify-content-center py-3 mb-5 ">
            <div class="col-md-12 pb-5 mt-0 ">
                <h3 class="text-center pb-3"> Choose what you want to learn</h3>
            </div>



            @foreach($categories as $category)
                <div class="col-md-4 mb-4">
                    <a href="{{ $category->link() }}" class="card">
                        <div style="height: 200px;overflow: hidden">
                            <img class="card-img-top img-fluid h-100" src="{{$category->image}}" alt="{{$category->title}}"/>
                        </div>

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

    <div class="container pt-menu">


        <div class="row justify-content-center py-3 mb-5">
            <div class="col-md-12 pb-5 mt-0 ">
                <h3 class="text-center pb-3">Requested courses or teacher</h3>
            </div>



            @foreach($coursesRequests as $coursesRequest)
            <div class="col-md-4">
                <div class="card">
                   <!-- <img class="card-img-top p-5 img-fluid" src="/front/img/bgtop.png" alt="Card image cap"/>-->

                    <div class="card-body">
                        <h4 class="card-title"><a>{{$coursesRequest->title}}</a></h4>
                        <p class="card-text">{!! $coursesRequest->intro !!}</p>

                    </div>

                </div>
            </div>
            @endforeach



        </div>


    </div>
@endsection