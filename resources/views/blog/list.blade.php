@extends('layouts.layout')
@section('content')
    <div class="container pt-menu">


        <div class="row justify-content-center py-3 mb-5">
            <div class="col-md-12 pb-5 mt-0 ">
                <h3 class="text-center pb-3">News</h3>
            </div>


            @foreach($contents as $content)
                <div class="col-md-4">
                <div class="card">
                    <a href="{{ $content->link() }}">
                        <img class="card-img-top p-5 img-fluid" src="{{ asset($content->image) }}" alt="Card image cap">

                        <div class="card-body">
                            <h4 class="card-title"><a>{{ $content->title }}</a></h4>
                            <p class="card-text"></p><p>{{ $content->intro }}</p><p></p>

                        </div>
                    </a>

                </div>
            </div>
            @endforeach

        </div>


    </div>
@endsection