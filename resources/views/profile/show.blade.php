@extends('layouts.layout')

@section('content')
    <div class="bg-gray pt-menu pb-5 mt-3">
        <div class="container pt-3 ">
            <div class="row ">
                <div class="col-md-8">
                    <div class="bg-white p-3">
                        <!-- <video class="w-100" controls>
                             <source src="movie.mp4" type="video/mp4">
                             <source src="movie.ogg" type="video/ogg">
                             Your browser does not support the video tag.
                         </video>
                         -->
                        <div class="mt-3">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="{{ $userProfile->image() }}" class="w-100">
                                        <div class="text-grey text-center mt-2">{{ $userProfile->user->email }}</div>
                                    </div>
                                    <div class="col-md-9">
                                        <h1 class="d-inline-block">{{ $userProfile->user->name }}</h1>
                                        <div class="float-right">
                                            <button class="btn btn-light p-2 m-0 text-black waves-effect waves-light"><i class="fas fa-heart"></i>
                                            </button>

                                            @if(Auth::check())
                                            <a href="/myCourses" class="btn btn-danger p-2 text-black waves-effect waves-light text-white"><i class="fas fa-calendar"></i> Add Course</a>
                                            <a href="{{ route('profile') }}" class="btn btn-primary p-2 m-0 text-black waves-effect waves-light  text-white"><i class="fas fa-edit"></i> Edit profile</a>
                                            @endif

                                        </div>
                                        <div class="text-grey font-13"> {{ $userProfile->gender() }}</div>
                                        <div class=" font-13 py-3">
                                            <span class="text-info pr-3">{{ $userProfile->tell }}  <i class="fa fa-phone"></i></span>
                                            <span>From {{ $userProfile->city->name }}, {{ $userProfile->state->name }}</span>
                                        </div>
                                        <div class="font-weight-bold">
{{--                                            Teaches Sweden, English--}}
                                        </div>
                                        <div class="container-fluid mt-3">
                                            <div class="row">
{{--                                                <div class="col-md-3 p-1">--}}
{{--                                                    <div class="bg-gray p-3">--}}
{{--                                                        <div class="font-13 text-grey text-center">Rating</div>--}}
{{--                                                        <div class=" text-center">--}}
{{--                                                            <div class="text-orang" style="font-size: 10px">--}}
{{--                                                                <i class="fas fa-star"></i>--}}
{{--                                                                <i class="fas fa-star"></i>--}}
{{--                                                                <i class="fas fa-star"></i>--}}
{{--                                                                <i class="fas fa-star"></i>--}}
{{--                                                                <i class="fas fa-star"></i>--}}
{{--                                                            </div>--}}
{{--                                                            <span class="font-weight-bold">5.0</span>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-md-3 p-1">--}}
{{--                                                    <div class="bg-gray p-3">--}}
{{--                                                        <div class="font-13 text-grey text-center">Rating</div>--}}
{{--                                                        <div class=" text-center">--}}
{{--                                                            <div class="text-orang" style="font-size: 10px">--}}
{{--                                                                <i class="fas fa-star"></i>--}}
{{--                                                                <i class="fas fa-star"></i>--}}
{{--                                                                <i class="fas fa-star"></i>--}}
{{--                                                                <i class="fas fa-star"></i>--}}
{{--                                                                <i class="fas fa-star"></i>--}}
{{--                                                            </div>--}}
{{--                                                            <span class="font-weight-bold">5.0</span>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-md-3 p-1">--}}
{{--                                                    <div class="bg-gray p-3">--}}
{{--                                                        <div class="font-13 text-grey text-center">Rating</div>--}}
{{--                                                        <div class=" text-center">--}}
{{--                                                            <div class="text-orang" style="font-size: 10px">--}}
{{--                                                                <i class="fas fa-star"></i>--}}
{{--                                                                <i class="fas fa-star"></i>--}}
{{--                                                                <i class="fas fa-star"></i>--}}
{{--                                                                <i class="fas fa-star"></i>--}}
{{--                                                                <i class="fas fa-star"></i>--}}
{{--                                                            </div>--}}
{{--                                                            <span class="font-weight-bold">5.0</span>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-md-3 p-1">--}}
{{--                                                    <div class="bg-gray p-3">--}}
{{--                                                        <div class="font-13 text-grey text-center">Rating</div>--}}
{{--                                                        <div class=" text-center">--}}
{{--                                                            <div class="text-orang" style="font-size: 10px">--}}
{{--                                                                <i class="fas fa-star"></i>--}}
{{--                                                                <i class="fas fa-star"></i>--}}
{{--                                                                <i class="fas fa-star"></i>--}}
{{--                                                                <i class="fas fa-star"></i>--}}
{{--                                                                <i class="fas fa-star"></i>--}}
{{--                                                            </div>--}}
{{--                                                            <span class="font-weight-bold">5.0</span>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <hr>
                                        <span class="font-weight-bold">Skills:</span>
                                        <div class="d-inline-block">
{{--                                            <ul class="navbar-nav flex-row">--}}
{{--                                                <li class="nav-item p-2">Sweden</li>--}}
{{--                                                <li class="nav-item p-2">Sweden</li>--}}

{{--                                            </ul>--}}
                                            <p>{!!  $userProfile->skills  !!}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <span class="font-weight-bold">Education:</span>
                                        <div class="d-inline-block">
                                            <ul class="navbar-nav flex-row">
                                                <li class="nav-item p-1 rounded m-2 bg-gray linkTooltip" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Another tooltip">
                                                    {{ $userProfile->education }}
                                                </li>


                                            </ul>
                                        </div>
                                    </div>
{{--                                    <div class="col-md-12">--}}
{{--                                        <span class="font-weight-bold">Teaching Specialities:</span>--}}
{{--                                        <div class="d-inline-block">--}}
{{--                                            <ul class="navbar-nav flex-row">--}}
{{--                                                <li class="nav-item p-1 rounded m-2 border text-grey">Sweden</li>--}}
{{--                                                <li class="nav-item p-1 rounded m-2 border text-grey">Sweden</li>--}}
{{--                                                <li class="nav-item p-1 rounded m-2 border text-grey">Sweden</li>--}}

{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div class="col-md-12">
                                        <span class="font-weight-bold">Birthday: </span>
                                        <span class="text-grey"> {{ $userProfile->birth }} </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="bg-white p-3 mt-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="font-weight-bold">
                                        About Teacher
                                    </div>
                                    <div class="font-13 py-3">
                                      {!! $userProfile->intro !!}
                                    </div>
{{--                                    <a href="#" class="text-info">+ read more</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-3 mt-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="font-weight-bold">
                                        Informal Tutoring
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="container">
                                        @foreach($userProfile->courses as $course)
                                            <div class="row mt-4">
                                            <div class="col-md-6">
                                                <div class="font-13">{{ $course->title }}</div>
                                                <div class="text-grey "><span class="font-13">{{ $course->registered }} registered lesson(s)</span>
                                                    <span class="badge badge-danger">New</span></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="text-right font-13">
                                                    <span class="font-weight-bold">{{ $course->hourly_price }} </span>
                                                    <span class="text-grey">USD per hour</span>
                                                </div>
                                                <div class="text-right">
                                                    <a href="{{ $course->link() }}">
                                                        <button type="button" class="btn btn-light py-1 px-2 m-0 text-black waves-effect waves-light"> more
                                                        </button>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-3 mt-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="font-weight-bold">
                                        Lesson History
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="container">
                                        <div class="row mt-2">
                                            <div class="col-md-4 text-center">
                                                <h1 class="text-grey ">167</h1>
                                                <div class="text-grey "><span class="font-13">73 completed lesson(s)</span></div>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <h1 class="text-grey ">167</h1>
                                                <div class="text-grey "><span class="font-13">73 completed lesson(s)</span></div>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <h1 class="text-grey ">167</h1>
                                                <div class="text-grey "><span class="font-13">73 completed lesson(s)</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="fix-tab">
                        <div class="bg-white p-4">
                            <div class="font-13 text-grey">Hourly rate starts from</div>
                            <h1 class="text-grey">{{ $userProfile->hourly_rate }}$</h1>
                            <a href="tel:{{ $userProfile->tell }}" class="btn btn-danger btn-block waves-effect waves-light">Contact teacher</a>
                            <button class="btn text-black mt-3 btn-light btn-block waves-effect waves-light">Bookmark</button>
{{--                            <div class="font-weight-bold p-3 text-center">79% Satisfaction </div>--}}
                        </div>

                        <!--
                        <div class="bg-white p-4 mt-3">
                            <button type="button" class="btn text-black mt-3 btn-light btn-block">Danger</button>
                            <div class="font-weight-bold p-3 text-center">100% Satisfaction Guarantee</div>
                        </div>
                        <div class="bg-white p-4 mt-3">
                            <div class="font-weight-bold p-2 text-grey font-13 text-center">100% Satisfaction Guarantee</div>
                            <button type="button" class="btn text-black mt-1 btn-light btn-block">Danger</button>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection