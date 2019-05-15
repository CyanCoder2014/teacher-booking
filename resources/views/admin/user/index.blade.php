@extends('layouts.admin')

@section('content')
    <div class="bg-gray pt-menu pb-5 main-content mt-4">
    <section id="content">

        <div class="page page-dashboard">

            <div class="pageheader flex-center " >

                <h2><span>Requests Management</span></h2>

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

                                        </div>



                                        <div class="panel-group" id="accordion">
                                            <link rel="stylesheet" type="text/css" href="/widgets/DataTables/datatables.min.css"/>


                                            <table class="table table-striped table-hover table-custom" id="table">
                                                <thead>
                                                <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Status</th>
                                                        <th>Verified At</th>
                                                        <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($users as $user)
                                                    <tr>
                                                        <td>{{ $user->id }}</td>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->email }}</td>
                                                        <td>{{ $user->type() }}</td>
                                                        <td>{{ $user->verified_at??'not verified' }}</td>
                                                        <td>
                                                            @if($user->type == 2)
                                                            <a href="{{ route('admin.user.ban',['user' => $user->id]) }}">
                                                                <button type="submit" class="btn btn-warning delete-user"  onclick="return confirm('are you sure?');">Ban</button>
                                                            </a>
                                                            @else
                                                                <a href="{{ route('admin.user.unban',['user' => $user->id]) }}">
                                                                    <button type="submit" class="btn btn-success delete-user"  >unBan</button>
                                                                </a>
                                                            @endif
                                                                <form method="POST" action="{{ route('admin.user.delete',['user' => $user->id]) }}">
                                                                    {{ csrf_field() }}
                                                                    {{ method_field('DELETE') }}
                                                                    <button type="submit" class="btn btn-danger delete-user"  onclick="return confirm('are you sure?');">Delete</button>
                                                                </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>

                                            </table>
                                            {!! $users->links() !!}
                                        </div>

                                    </div>
                                </div>


                            </div>


                    </div>
                </div>
            </div>



        </div>
    </section>
    </div>

@endsection
@section('script')
    <script type="text/javascript" src="/widgets/DataTables/datatables.min.js"></script>
    <script>
        // $('#table').DataTable();
    </script>
@endsection