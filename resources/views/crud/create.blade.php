@extends($class::getLayout())
<?php $fileCount=0 ?>
@section('script')
    <link rel="stylesheet" href="{{asset('assets/js/vendor/touchspin/jquery.bootstrap-touchspin.min.css')}}">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

@endsection
@section('end_script')

@endsection
@section('content')
    <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
    <div class="bg-gray pt-menu pb-5 main-content mt-4">
        <section id="content">

            <div class="page page-dashboard">

                <div class="pageheader flex-center " >

                <h2>Creating<span></span></h2>

                <div class="page-bar">

{{--                    <ul class="page-breadcrumb">--}}
{{--                        <li>--}}
{{--                            <a href="{{ url('/admin') }}"><i class="fa fa-home"></i> پنل مدیریت</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="{{ url('/admin') }}">مدیریت</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="">افزودن{{ $class::getName() }} </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}

                </div>

            </div>

            <div class="container">

                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

            <form id="productForm" class="form-horizontal ng-pristine ng-valid" role="form" method="post" action="{{ $class::route('store') }}"  enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    @foreach($class::getform() as $form)
                        @if(isset($form['addable']) && $form['addable'])
                            @include('crud.widgets.addable.'.$form['type'],['fiels' => $form,'value' => old($form['name']),'class' =>$class ])
                        @else
                            @include('crud.widgets.'.$form['type'],['fiels' => $form,'value' => old($form['name']), 'class' => $class ])
                        @endif
                    @endforeach
                </div>
                <button type="submit" class="btn btn-success mt-4">Submit</button>

            </form>


            </div>

        </div>

    </section>
    </div>
    <!--/ CONTENT -->




    <script type="text/javascript">
        // $(document).ready(function(){

        // });
    </script>
@endsection