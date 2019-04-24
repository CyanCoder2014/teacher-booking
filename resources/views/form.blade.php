@extends('layouts.layout')

@section('content')
    <div class="bg-gray pt-menu pb-5">
        <div class="container pt-3 ">
            <div class="row ">
                <div class="col-md-12">
                    <div class="bg-white p-3 mt-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="font-13 py-3">

                                        <!--Section: Contact v.2-->
                                        <section class="mb-4">

                                            <!--Section heading-->
                                            <h2 class="h1-responsive font-weight-bold text-center my-4">{{ $page_title??'' }}</h2>
                                            <!--Section description-->
                                            <p class="text-center w-responsive mx-auto mb-5"></p>

                                            <div class="row">

                                                <!--Grid column-->
                                                <div class="col-md-12 mb-md-0 mb-5">
                                                    {!! $form->make() !!}

                                                    <div class="status"></div>
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

            </div>
        </div>
    </div>
@endsection