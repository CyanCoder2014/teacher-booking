@extends('layouts.layout')

@section('content')
    <div class="bg-gray pt-menu pb-5 mt-3">
        <div class="container pt-3 ">
            <div class="row ">
                <div class="col-md-12">
                    <div class="bg-white p-3">
                        @if(isset($userProfile->intro_video))
                        <video class="w-100" controls>
                             <source src="{{ asset($userProfile->intro_video) }}" type="video/mp4">
                             Your browser does not support the video tag.
                         </video>
                        @endif
                        <div class="mt-3">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="{{ $userProfile->image() }}" class="w-100">
                                        <div class="text-grey text-center mt-2"></div>


                                        <a href="tel:{{ $userProfile->tell }}" class="btn btn-danger btn-block waves-effect waves-light mt-3">Contact to: {{$userProfile->tell}}</a>
                                        <a href="mailto:{{ $userProfile->user->email}}" class="btn btn-light btn-block  text-black waves-effect waves-light mt-2">{{$userProfile->user->email}}</a>

                                    </div>
                                    <div class="col-md-9">
                                        <h1 class="d-inline-block ">{{ $userProfile->user->name }}</h1>
                                        <div class="float-right">


                                            @if(Auth::id() == $userProfile->id)
                                                <a href="/myCourses" class="btn btn-light btn-sm  text-black waves-effect waves-light  mb-4"><i class="fas fa-calendar"></i> Add Course</a>
                                                <a href="{{ route('profile') }}" class="btn btn-light btn-sm  text-black waves-effect waves-light  mb-4"><i class="fas fa-edit"></i> Edit profile</a>
                                            @endif


                                            <div class="bg-gray p-3">
                                                <div class="font-13 text-grey text-center"></div>
                                                <div class=" text-center">
                                                    <div class="text-orang" style="font-size: 10px">
                                                        @for($i=1;$i< $userProfile->AcceptedComment->avg('rate');$i++)
                                                            <i class="fas fa-star"></i>
                                                        @endfor
                                                        @if(($userProfile->AcceptedComment->avg('rate')/0.5)%2 == 1)
                                                            <i class="fas fa-star-half"></i>
                                                        @endif
                                                    </div>
                                                    <span class="font-weight-bold">{{ $userProfile->AcceptedComment->avg('rate') }}</span>
                                                </div>
                                            </div>

                                                <span class="text-grey font-weight-bold">Hourly rate:
                                                </span>
                                                <span class=" font-weight-bold">
                                                    {{ $userProfile->hourly_rate }}$
                                                </span>

                                        </div>
                                        <div class="text-grey ">Education: {{ $userProfile->education }}$</div>


                                        <div class=" font-13 py-3">
                                            <span class="text-info pr-3">{{ $userProfile->tell }}  <i class="fa fa-phone"></i></span>
                                            <span>From {{ $userProfile->city}}, {{ $userProfile->state->name }}</span>
                                        </div>
                                        <div class="font-weight-bold">

                                            @foreach($userProfile->languages as $language)
                                                @if($language == '1')
                                                    English,

                                                @else
                                                    Sweden

                                                @endif
                                             @endforeach
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <hr>
                                        <span class="font-weight-bold">Category:</span>
                                        <div class="d-inline-block">
{{--                                            <ul class="navbar-nav flex-row">--}}
{{--                                                <li class="nav-item p-2">Sweden</li>--}}
{{--                                                <li class="nav-item p-2">Sweden</li>--}}

{{--                                            </ul>--}}
                                            <p>{!!  $userProfile->category->title  !!}</p>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <span class="font-weight-bold">Subject:</span>
                                        <div class="d-inline-block">

                                            <p>{!!  $userProfile->subject  !!}</p>
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
                                        <hr>

                                        <span class="font-weight-bold">Availability: </span>
                                        <span class="text-grey"> {{ $userProfile->avaliablity }} </span>
                                    </div>



                                    <div class="col-md-12">
                                        <span class="font-weight-bold">Teaching options:</span>
                                        <div class="d-inline-block">
                                            <ul class="navbar-nav flex-row">


                                                @foreach($userProfile->type as $item)
                                                    @if($item == '0')
                                                        <li class="nav-item p-1 rounded m-2 bg-gray linkTooltip" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Another tooltip">
                                                            Online
                                                        </li>
                                                    @elseif($item == '1')
                                                        <li class="nav-item p-1 rounded m-2 bg-gray linkTooltip" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Another tooltip">
                                                            At student place
                                                        </li>
                                                    @elseif($item == '2')
                                                        <li class="nav-item p-1 rounded m-2 bg-gray linkTooltip" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Another tooltip">
                                                            At teacher place
                                                        </li>
                                                    @elseif($item == '3')
                                                        <li class="nav-item p-1 rounded m-2 bg-gray linkTooltip" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Another tooltip">
                                                            Another place
                                                        </li>
                                                    @elseif($item == '4')
                                                        <li class="nav-item p-1 rounded m-2 bg-gray linkTooltip" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Another tooltip">
                                                            Teaching for alone
                                                        </li>
                                                    @elseif($item == '5')
                                                        <li class="nav-item p-1 rounded m-2 bg-gray linkTooltip " style="" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Another tooltip">
                                                            Teaching for group
                                                        </li>

                                                    @endif
                                                @endforeach



                                            </ul>
                                        </div>
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
                                        About {{$userProfile->user->name}}
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
                                        Location
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="container">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227.06111301747853!2d13.263634618843813!3d61.16082719417561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4667d90f946ad8a7%3A0x3034506de8c8a90!2sDalarna+County%2C+Sweden!5e0!3m2!1sen!2sfr!4v1557507883290!5m2!1sen!2sfr"  height="350" frameborder="0" style="border:0;width: 100%" allowfullscreen></iframe>
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
                                        Write a Comment
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="container">
                                        <div class="row mt-2">
                                            @foreach($userProfile->AcceptedComment as $comment)
                                                <div class="col-12 p-1">
                                                    <div class="bg-gray p-3">
                                                        <div class="font-13 text-grey">{{ $comment->name }}</div>
                                                        <div class="">
                                                            <div class="text-orang" style="font-size: 10px">
                                                                @for($i=1;$i< $comment->rate;$i++)
                                                                    <i class="fas fa-star"></i>
                                                                @endfor
                                                                @if(($comment->rate/0.5)%2 == 1)
                                                                    <i class="fas fa-star-half"></i>
                                                                @endif
                                                            </div>
                                                            <span class="font-weight-bold">{{ $comment->comment }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="row mt-2">
                                            {!! $form->make() !!}
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection