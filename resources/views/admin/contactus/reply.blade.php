@extends('layouts.admin')

@section('content')
    <div class="bg-gray pt-menu pb-5 main-content mt-4">
    <section id="content">

        <div class="page page-dashboard">

            <div class="pageheader flex-center container " >

                <h2><span>{{ $contactUs->name }} ({{ $contactUs->email }})</span></h2>

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
                        <div class="col-12">
                            <ul>
                                <li><p>subject:</p><h4>{{ $contactUs->subject }}</h4></li>
                                <li><p>message:</p><h5>{{ $contactUs->message }}</h5></li>
                                <li><p>status:</p><h5>{{ $contactUs->laratablesStatus() }}</h5></li>

                            </ul>


                        </div>
                        @if($contactUs->notifications->count() > 0)
                        <h4>Privious Reply's</h4>
                        @endif
                            <div class="col-12">
                                <ul>
                                    @foreach($contactUs->notifications  as $notification)
                                        <li><p>subject:</p><h4>{{ $notification->data['subject'] }}</h4>
                                            <p>message:</p><h5>{{ $notification->data['message'] }}</h5></li>
                                </ul>
                            </div>
                        @endforeach
                            <div class="container " style="margin-top: 25px;">
                                <div class="row ">
                                    <h2>Reply</h2>
                                    <div class="col-lg-12 col-md-12  col-sm-12 col-xs12 ">
                                        <form id="contact-form" name="contact-form" action="" method="POST">
                                        {{ csrf_field() }}
                                        <!--Grid row-->
                                            <!--Grid row-->

                                            <!--Grid row-->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="md-form mb-0">
                                                        <label for="subject" class="">Subject</label>
                                                        <input type="text" id="subject" name="subject" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Grid row-->

                                            <!--Grid row-->
                                            <div class="row">

                                                <!--Grid column-->
                                                <div class="col-md-12">

                                                    <div class="md-form">
                                                        <label for="message">Your message</label>
                                                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--Grid row-->
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </form>

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
@section('script')

@endsection