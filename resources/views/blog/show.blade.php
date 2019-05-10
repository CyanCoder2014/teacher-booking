@extends('layouts.layout')
@section('content')
    <div class="bg-gray pt-menu pb-5 ">
        <div class="container pt-3 ">
            <div class="row ">
                <div class="col-md-12 ">





                    <nav>
                        <div class="nav nav-tabs md-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                               aria-controls="nav-home" aria-selected="true">Home</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                               aria-controls="nav-profile" aria-selected="false">Profile</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
                               aria-controls="nav-contact" aria-selected="false">Contact</a>
                        </div>
                    </nav>
                    <div class="tab-content pt-5" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <p>Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat
                                veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non
                                irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim
                                occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit.
                                Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit
                                occaecat anim ullamco ad duis occaecat ex.</p>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna
                                duis labore cillum sint adipisicing exercitation ipsum. Nostrud ut anim non exercitation velit laboris
                                fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna consequat voluptate minim amet
                                aliquip ipsum aute laboris nisi. Labore labore veniam irure irure ipsum pariatur mollit magna in
                                cupidatat dolore magna irure esse tempor ad mollit. Dolore commodo nulla minim amet ipsum officia
                                consectetur amet ullamco voluptate nisi commodo ea sit eu.</p>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <p>Sint sit mollit irure quis est nostrud cillum consequat Lorem esse do quis dolor esse fugiat sunt do. Eu
                                ex commodo veniam Lorem aliquip laborum occaecat qui Lorem esse mollit dolore anim cupidatat. Deserunt
                                officia id Lorem nostrud aute id commodo elit eiusmod enim irure amet eiusmod qui reprehenderit nostrud
                                tempor. Fugiat ipsum excepteur in aliqua non et quis aliquip ad irure in labore cillum elit enim.
                                Consequat aliquip incididunt ipsum et minim laborum laborum laborum et cillum labore. Deserunt
                                adipisicing cillum id nulla minim nostrud labore eiusmod et amet. Laboris consequat consequat commodo non
                                ut non aliquip reprehenderit nulla anim occaecat. Sunt sit ullamco reprehenderit irure ea ullamco Lorem
                                aute nostrud magna.</p>
                        </div>
                    </div>


                    <!-- Classic tabs -->
                    <div class="classic-tabs mx-2">

                        <ul class="nav tabs-orange" id="myClassicTabOrange" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link  waves-light active show" id="profile-tab-classic-orange" data-toggle="tab" href="#profile-classic-orange"
                                   role="tab" aria-controls="profile-classic-orange" aria-selected="true"><i class="fas fa-user fa-2x pb-2"
                                                                                                             aria-hidden="true"></i><br>Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link waves-light" id="follow-tab-classic-orange" data-toggle="tab" href="#follow-classic-orange"
                                   role="tab" aria-controls="follow-classic-orange" aria-selected="false"><i class="fas fa-heart fa-2x pb-2"
                                                                                                             aria-hidden="true"></i><br>Follow</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link waves-light" id="contact-tab-classic-orange" data-toggle="tab" href="#contact-classic-orange"
                                   role="tab" aria-controls="contact-classic-orange" aria-selected="false"><i class="fas fa-envelope fa-2x pb-2"
                                                                                                              aria-hidden="true"></i><br>Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link waves-light" id="awesome-tab-classic-orange" data-toggle="tab" href="#awesome-classic-orange"
                                   role="tab" aria-controls="awesome-classic-orange" aria-selected="false"><i class="fas fa-star fa-2x pb-2"
                                                                                                              aria-hidden="true"></i><br>Be awesome</a>
                            </li>
                        </ul>

                        <div class="tab-content card" id="myClassicTabContentOrange">
                            <div class="tab-pane fade active show" id="profile-classic-orange" role="tabpanel" aria-labelledby="profile-tab-classic-orange">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                                    sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
                                    dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                                    incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            </div>
                            <div class="tab-pane fade" id="follow-classic-orange" role="tabpanel" aria-labelledby="follow-tab-classic-orange">
                                <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
                                    aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse
                                    quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                            </div>
                            <div class="tab-pane fade" id="contact-classic-orange" role="tabpanel" aria-labelledby="contact-tab-classic-orange">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                                    deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
                                    provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                                    Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est
                                    eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas
                                    assumenda est, omnis dolor repellendus. </p>
                            </div>
                            <div class="tab-pane fade" id="awesome-classic-orange" role="tabpanel" aria-labelledby="awesome-tab-classic-orange">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                    eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>

                    </div>
                    <!-- Classic tabs -->



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