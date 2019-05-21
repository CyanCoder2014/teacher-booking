@extends('layouts.layout')

@section('content')
    <div class="bg-gray pt-menu pb-5 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('You Are a ... ??') }}</div>

                        <div class="card-body row">
                            <div class="col-6">
                                <form action="{{ route('verifyuser') }}" method="post" id="my_form">
                                    {{ csrf_field() }}
                                    <a href="javascript:{}" onclick="document.getElementById('my_form').submit();">
                                        <i class="fa fa-graduation-cap"></i>
                                        <span>teacher</span>
                                    </a>
                                </form>
                            </div>
                            <div class="col-6">
                                <a href="{{ url('/') }}">
                                    <i class="fa fa-user"></i>
                                    <span>user</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
