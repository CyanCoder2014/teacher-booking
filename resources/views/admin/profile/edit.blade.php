@extends('layouts.admin')

@section('content')
    <div class="bg-gray pt-menu pb-5 main-content mt-4">
        <section id="content">

            <div class="page page-dashboard">

                <div class="pageheader flex-center " >

                    <h2><span>User Profile</span></h2>

                    <div class="page-bar">

                        {{--                    <ul class="page-breadcrumb">--}}
                        {{--                        <li>--}}
                        {{--                            <a href="index.html"><i class="fa fa-home"></i> پنل مدیریت </a>--}}
                        {{--                        </li>--}}
                        {{--                        <li>--}}
                        {{--                            <a href="">{{ $class::getName() }}</a>--}}
                        {{--                        </li>--}}
                        {{--                    </ul>--}}


                    </div>

                </div>

                <!-- cards row -->
                <div class="container" >

                    @if(session()->has('message'))
                        <br>
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    <br>
                    <div class="inner" style="min-height: 565px;">
                        <div class="row">


                            <div class="container ">
                                <div class="row ">
                                    <div class="col-lg-12 col-md-12  col-sm-12 col-xs12 ">
                                        <div class="title_sec">

                                        </div>



                                        <div class="panel-group" id="accordion">


                                            {!! $form->make() !!}

                                        </div>

                                    </div>
                                </div>


                            </div>


                        </div>
                    </div>
                </div>



            </div>
        </section>
    </div>

@endsection