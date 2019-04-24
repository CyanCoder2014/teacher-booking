@extends('layouts.layout')

@section('content')
    <div class="container pt-menu">


        <div class="row justify-content-center py-3 mb-5">
            <div class="col-md-12 pb-5 mt-0 ">
                <h3 class="text-center pb-3">Learn</h3>
            </div>
            @foreach($Courserequests as $request)
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top p-5 img-fluid" src="/front/img/image_counter.png" alt="{{ $request->title }}">

                        <div class="card-body">
                            <h4 class="card-title"><a>{{ $request->title }}</a></h4>
                            <p class="card-text">{!! $request->intro  !!}</p>
                            <a href="{{ $request->link() }}" class="btn purple-backcolor waves-effect waves-light">More detail</a>

                        </div>

                    </div>
                </div>
            @endforeach
            {!! $Courserequests->links() !!}
        </div>


    </div>
@endsection