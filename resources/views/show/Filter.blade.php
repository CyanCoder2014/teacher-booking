@extends('layouts.layout')

@section('content')

    <div class="bg-gray pt-menu pb-5 mt-3">
    <div class="container ">
        <div class="row mt-5 mb-5">
            <div class="col-md-3 bg-white p-3" style="margin-top: 4.5rem">
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
                    <h4 style="color: #ef5258 ;font-size: 1.6rem">Teach options</h4>
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
                                <label class="custom-control-label" for="type1">Online</label>
                            </div>
                        </li>
                        <li>
                            <!-- Default unchecked -->
                            <div class="custom-control custom-checkbox">
                                <input @if(is_array(Request::get('types')) and in_array(1,Request::get('types'))) checked @endif  type="checkbox" class="custom-control-input" id="type2" name="types[]" value="1">
                                <label class="custom-control-label" for="type2"> At student place</label>
                            </div>
                        </li>
                        <li>
                            <!-- Default unchecked -->
                            <div class="custom-control custom-checkbox">
                                <input @if(is_array(Request::get('types')) and in_array(2,Request::get('types'))) checked @endif type="checkbox" class="custom-control-input" id="type3" name="types[]" value="2">
                                <label class="custom-control-label" for="type3"> At teacher place</label>
                            </div>
                        </li>

                        <li>
                            <!-- Default unchecked -->
                            <div class="custom-control custom-checkbox">
                                <input @if(is_array(Request::get('types')) and in_array(3,Request::get('types'))) checked @endif type="checkbox" class="custom-control-input" id="type3" name="types[]" value="2">
                                <label class="custom-control-label" for="type3"> Another place</label>
                            </div>
                        </li>

                        <li>
                            <!-- Default unchecked -->
                            <div class="custom-control custom-checkbox">
                                <input @if(is_array(Request::get('types')) and in_array(4,Request::get('types'))) checked @endif type="checkbox" class="custom-control-input" id="type3" name="types[]" value="2">
                                <label class="custom-control-label" for="type3">Teaching for alone</label>
                            </div>
                        </li>

                        <li>
                            <!-- Default unchecked -->
                            <div class="custom-control custom-checkbox">
                                <input @if(is_array(Request::get('types')) and in_array(5,Request::get('types'))) checked @endif type="checkbox" class="custom-control-input" id="type3" name="types[]" value="2">
                                <label class="custom-control-label" for="type3">Teaching for group</label>
                            </div>
                        </li>



                    </ul>
                    <h4 style="color: #ef5258 ;font-size: 1.6rem">Hourly rate</h4>
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
            <div class="col-md-9 text-right mt-xs-3">
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
                                                    <div class="text-center" style="height: 200px">
                                                        <img src="{{ asset($course->image()) }}" class="rounded-circle w-75" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mother2 " style="height: 230px;overflow: hidden">
                                                    <h5 class="text-center font-weight-bold mt-3 text-grey ">
                                                        {{$course->category->title }}
                                                    </h5>

                                                    <h5 class="text-center  mt-2 orange-text">
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
    </div>
    <!-- End teacher list -->

@endsection