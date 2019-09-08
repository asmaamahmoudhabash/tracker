@extends('dashboard.layouts.dashboard')

@section('content')

    <div class="pcoded-content">
        <div class="pcoded-inner-content">

            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-header">
                        <div class="page-header-title">
                            @include('sweet::alert')
                            <h4>News Details</h4>
                            {{--<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>--}}
                        </div>
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">

                                </li>
                                <li class="breadcrumb-item">   <a href="{{url('AdminPanel/Tasks')}}"> All tasks</a>
                                </li>
                                <li class="breadcrumb-item">Task Details
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="page-body">
                        @include('flash::message')
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 style="color: #800e19">Task Title</h5> : {{$task->title}}
                                    </div>
                                    @isset($task->project->name)
                                        <div class="card-header">
                                            <h5 style="color: #ff2055">project</h5> : {{$task->project->name}}
                                        </div>
                                    @endisset



                                        <div class="card-header">
                                            <h5 style="color: #800e19">Status</h5> :
                                            @if($task->status == 0)
                                                UnActive
                                            @else
                                                Active
                                            @endif
                                        </div>


                                        <div class="card-header">
                                            <h5 style="color: #800e19">task Date</h5> : {{date("d-m-Y ",strtotime($task->published_at))}}
                                        </div>



                                    <div class="card-header">
                                        <h5 style="color: #800e19">task Description</h5>
                                        <p>{{$task->body}}</p>
                                    </div>

                                    @if($task->image=='')
                                    @else
                                    <!-- round card start -->
                                        <div class="card-header">
                                            <h5 style="color: #800e19">task Main Imag</h5>
                                            <div class="card-block">
                                                <div class="row users-card">
                                                    <div class="col-lg-6 col-xl-3 col-md-6">
                                                        <div class="card rounded-card user-card">
                                                            <div class="card-block">
                                                                <div class="img-hover">
                                                                    <img class="img-fluid img-circle" src="{{url($task->image)}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    <!-- Round card end -->
                                        @endif



                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            {{--<div id="styleSelector">--}}

            {{--</div>--}}
        </div>
    </div>


@stop