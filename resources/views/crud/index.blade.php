@extends($class::getLayout())

@section('content')
    <div class="bg-gray pt-menu pb-5 main-content mt-4">
    <section id="content">

        <div class="page page-dashboard">

            <div class="pageheader flex-center " >

                <h2><span>{{ $class::getName() }}</span></h2>

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

                                            <a href="{{ $class::route('create') }}" class="btn btn-primary">Create new</a>
                                        </div>



                                        <div class="panel-group" id="accordion">
                                            @include('crud.datatable',['id' => 'event-table','model' => $class])

                                        </div>

                                    </div>
                                </div>


                            </div>


                    </div>
                </div>
            </div>


            <div class="modal fade large-modal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"></h4>
                        </div>
                        <div class="modal-body">
                            <p></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="c-btn large red-bg" data-dismiss="modal">بستن</button>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>
    </div>

@endsection