@extends('layouts.layout')
@section('content')
    <div class="bg-gray pt-menu pb-5 ">
        <div class="container pt-3 ">
            <div class="row ">
                <div class="col-md-12 ">


                    <div class="bg-white p-3 mt-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="row">
                                        @if(isset($content->image))
                                            <img src="{{ asset($content->image) }}" style="width: 100%">
                                        @endif

                                    </div>
                                    <h1 class="font-weight-bold mt-3">
                                        {{ $content->title }}
                                    </h1>

                                    <div class=" font-13 py-3">
                                        <span>{{ $content->created_at->format('Y-m-d') }}</span>
                                        <span>,</span>
                                        @if(isset($content->category))
                                            <span class="text-grey font-13">category: <a href="#">{{ $content->category->title }}</a></span>
                                        @endif
                                    </div>
                                    <div class="font-weight-bold">
                                                                                    Introduction
                                    </div>
                                    <div class="font-13 py-3">
                                        {!! $content->text !!}
                                    </div>
                                    <div class="font-13 py-3">
                                        {!! $content->text !!}
                                    </div>
{{--                                    <a href="#" class="text-info">+ read more</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



                <!--
                <div class="col-md-4">
                    <div id="fix-tab" class="">

                        <div class="bg-white p-4 mt-3">
                            <a href="/contactus" class="btn text-black mt-3 btn-light btn-block waves-effect waves-light">Contact us</a>
                            <div class="font-weight-bold p-3 text-center">teacher.nu</div>
                        </div>

                    </div>
                </div>
                -->


            </div>
        </div>
    </div>
@endsection