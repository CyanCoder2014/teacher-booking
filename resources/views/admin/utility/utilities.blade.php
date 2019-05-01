@extends('layouts.admin')

@section('content')



    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="row">

                <section id="lts_sec "  style="width: 100%;">

                    <div class="container ">
                        <div class="row ">
                            <div class="col-lg-12 col-md-12  col-sm-12 col-xs12 ">
                                <div class="title_sec">

                                </div>
                                @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif


                                <div class="panel panel-primary">

                                    <div class="panel-heading ">
                                     {{ $names[$type] }}
                                        @if($addable)
                                        <a data-toggle="modal"
                                           data-target="#add" style="float: left"
                                           class="btn btn-primary  btn-sm"
                                        href="#"><i class="icon-plus"></i>&nbsp;&nbsp;Add</a>
                                        @endif
                                    </div>
                                    <div class="panel-body">
                                        <div class="panel-group" id="accordion">





                                            <table class="table table-bordered">
                                                <thead>
                                                <th>Title</th>
                                                <th>Action</th>
                                                </thead>
                                                <tbody>
                                                    @foreach($content as $text)
                                                    <tr>
                                                        <td>{{ $text->title }}</td>
                                                        <td>
                                                            <a data-toggle="modal"
                                                               data-target="#edit{{$text->id}}" style="float: left"
                                                               class="btn btn-warning  btn-sm"
                                                               href="#"><i class="ui-icon-gear"></i>&nbsp;&nbsp;edit</a>
                                                            @if($addable)
                                                                <a onclick="return confirm('Are you Sure for Delete');"
                                                                   href="{{ route('utility.destroy',['name' => $type,'id' => $text->id]) }}"
                                                                   style="float:  left;" class="btn btn-danger  btn-sm">
                                                                    delete<i class="icon-trash"></i>
                                                                </a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>






                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>


                    </div>


                </section>
            </div>
        </div>
    </div>

    <!-- modal -->
    <div class="modal fade" id="add" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">  Add</h4>
                </div>
                <div class="modal-body">
                    @if($addable)
                    <form name="_token" method="POST"
                          enctype="multipart/form-data"
                          action="{{ route('utility.store',['name' => $type]) }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="_token"
                               value="{{ csrf_token() }} ">



                        <div class="">
                            <div class="col-sm-12 col-xs-12 form-group">
                                <label>   Main Title</label>
                                <input class="form-control" name="title_a">
                            </div>
                            @foreach($form as $key => $item)
                                <div class="col-md-6  col-sm-12 col-xs-12 form-group">
                                    <label>{{$item['label']}}</label>
                                    @if($item['type']=='textarea')
                                        <textarea class="form-control {{$item['class']}}" name="{{ $key }}"></textarea>
                                    @else
                                    <input class="form-control {{$item['class']}}" name="{{ $key }}" type="{{$item['type']}}" style="{{$item['style']}}">
                                    @endif
                                </div>
                            @endforeach

                            <div class="col-xs-1 form-group">
                                <label>Active</label>
                                <input type="checkbox"  value="true" name="active">
                            </div>


                        </div>
                        <br><br><br><br><br><br><br><br><br>
                        <div class="modal-footer">
                            <button type="submit" name="_token"
                                    value="{{ csrf_token() }}"
                                    class="btn btn-primary">create
                            </button>
                            <button type="button" class="btn btn-default"
                                    data-dismiss="modal">close
                            </button>
                        </div>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->
    @foreach($content as $text)
        <div class="modal fade" id="edit{{$text->id}}" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">  Edit </h4>
                </div>
                <div class="modal-body">
                    <form name="_token" method="post"
                          enctype="multipart/form-data"
                          action="{{ route('utility.update',['name' => $type,'id'=>$text->id]) }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_token"
                               value="{{ csrf_token() }} ">


                        <div class="col-sm-12 col-xs-12 form-group">
                            <label>  title </label>
                            <input class="form-control" name="title_a"
                                   value="{{$text->title}}">
                        </div>

                        @foreach($form as $key => $item)
                            <div class="col-md-6  col-sm-12 col-xs-12 form-group">
                                <label>{{$item['label']}}</label>
                                @if($item['type']=='textarea')
                                    <textarea class="form-control {{$item['class']}}" name="{{ $key }}">@if(isset($text->data[$key])){{$text->data[$key]}}@endif</textarea>
                                @else
                                    <input class="form-control {{$item['class']}}" name="{{ $key }}" type="{{$item['type']}}"
                                           value="@if(isset($text->data[$key])){{$text->data[$key]}}@endif"
                                           @if($item['style']) style="{{$item['style']}}" @endif>
                                @endif
                                @if($item['type']=='file' && isset($text->data[$key]))
                                    <a href="{{asset($text->data[$key])}}"><img style="; height: 150px; border: solid 2px #0080FF" src="{{asset($text->data[$key])}}"></a>
                                @endif
                            </div>
                        @endforeach

                        <div class="col-xs-2 form-group">
                            <label>active</label>
                            <input type="checkbox"  name="active" value="true"
                                   @if($text->active) checked @endif>
                        </div>



                        <button  type="submit" name="_token" value="{{ csrf_token() }}"  style="float: left"
                                 class="btn btn-primary  btn-sm">submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach

@endsection