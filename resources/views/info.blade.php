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
                                    <nav>
                                        <div class="nav nav-tabs md-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                                               aria-controls="nav-home" aria-selected="true"> <i class="fa fa-info"></i> About us</a>
                                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                                               aria-controls="nav-profile" aria-selected="false">  <i class="fa fa-file"></i>  Term of use</a>
                                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
                                               aria-controls="nav-contact" aria-selected="false"> <i class="fa fa-fax"></i> Contact us</a>
                                        </div>
                                    </nav>
                                    <div class="tab-content pt-5" id="nav-tabContent">


                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">


                                            <h1 class="font-weight-bold mt-3">
                                                About us
                                            </h1>
                                            <p>Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat
                                                veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non
                                                irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim
                                                occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit.
                                                Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit
                                                occaecat anim ullamco ad duis occaecat ex.</p>
                                        </div>
                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                            <h1 class="font-weight-bold mt-3">
                                                Term of use
                                            </h1>
                                            <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna
                                                duis labore cillum sint adipisicing exercitation ipsum. Nostrud ut anim non exercitation velit laboris
                                                fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna consequat voluptate minim amet
                                                aliquip ipsum aute laboris nisi. Labore labore veniam irure irure ipsum pariatur mollit magna in
                                                cupidatat dolore magna irure esse tempor ad mollit. Dolore commodo nulla minim amet ipsum officia
                                                consectetur amet ullamco voluptate nisi commodo ea sit eu.</p>
                                        </div>




                                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

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