@extends('layouts.layout')

@section('content')
    <div class="bg-gray pt-menu pb-5 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('You Need to Verify your email to Access this Section') }}</div>
                        <div class="card-body row">
                            <form action="{{ route('verifyuser') }}" method="post" id="my_form">
                                {{ csrf_field() }}
                                <button class="btn btn-success" type="submit"> <i class="fa fa-check"></i>Verify</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
