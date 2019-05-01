@extends('layouts.layout')
@section('content')
    <div class="bg-gray pt-menu pb-5">
        <div class="container pt-3 ">
            <div class="row ">
                <div class="col-md-8">
                    <div class="bg-white p-3 mt-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="font-13 py-3">

                                        <!--Section: Contact v.2-->
                                        <section class="mb-4">

                                            <!--Section heading-->
                                            <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
                                            <!--Section description-->
                                            <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
                                                a matter of hours to help you.</p>

                                            <div class="row">

                                                <!--Grid column-->
                                                <div class="col-md-9 mb-md-0 mb-5">
                                                    <form id="contact-form" name="contact-form" action="" method="POST">
                                                        {{ csrf_field() }}
                                                        <!--Grid row-->
                                                        <div class="row">

                                                            <!--Grid column-->
                                                            <div class="col-md-6">
                                                                <div class="md-form mb-0">
                                                                    <input type="text" id="name" name="name" class="form-control">
                                                                    <label for="name" class="">Your name</label>
                                                                </div>
                                                            </div>
                                                            <!--Grid column-->

                                                            <!--Grid column-->
                                                            <div class="col-md-6">
                                                                <div class="md-form mb-0">
                                                                    <input type="text" id="email" name="email" class="form-control">
                                                                    <label for="email" class="">Your email</label>
                                                                </div>
                                                            </div>
                                                            <!--Grid column-->

                                                        </div>
                                                        <!--Grid row-->

                                                        <!--Grid row-->
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="md-form mb-0">
                                                                    <input type="text" id="subject" name="subject" class="form-control">
                                                                    <label for="subject" class="">Subject</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Grid row-->

                                                        <!--Grid row-->
                                                        <div class="row">

                                                            <!--Grid column-->
                                                            <div class="col-md-12">

                                                                <div class="md-form">
                                                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                                                    <label for="message">Your message</label>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!--Grid row-->

                                                    </form>

                                                    <div class="text-center text-md-left">
                                                        <a class="btn btn-primary waves-effect waves-light" onclick="document.getElementById('contact-form').submit();">Send</a>
                                                    </div>
                                                    <div class="status"></div>
                                                </div>
                                                <!--Grid column-->
                                                <!--Grid column-->
                                                <div class="col-md-3 text-center">
                                                    <ul class="list-unstyled mb-0">
                                                        <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                                            <p>@if(App::getLocale() == 'sw') @utility("contact","address_sw") @else @utility("contact","address_en") @endif</p>
                                                        </li>

                                                        <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                                            <p>@utility("contact","phone")</p>
                                                        </li>

                                                        <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                                                            <p>@utility("contact","email")</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--Grid column-->

                                            </div>

                                        </section>
                                        <!--Section: Contact v.2-->


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div id="fix-tab">

                        <div class="bg-white p-4 mt-3">
                            <div class="font-weight-bold p-2 text-grey font-13 text-center">  Teacher.nu</div>
                            <a href="about.html" class="btn text-black mt-1 btn-light btn-block waves-effect waves-light">About us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection