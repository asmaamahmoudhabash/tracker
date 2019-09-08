@extends('dashboard.layouts.dashboard')

@section('content')

    <div class="pcoded-content">
        <div class="pcoded-inner-content">

            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-header">
                        <div class="page-header-title">
                            @include('sweet::alert')
                            <h4>Admin Details</h4>
                            {{--<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>--}}
                        </div>
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{url('AdminPanel/Dashboard')}}">
                                        <i class="icofont icofont-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">   <a href="{{url('AdminPanel/Admins')}}"> All Admins</a>
                                </li>
                                <li class="breadcrumb-item">Admin Details
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
                                         <h5 style="color: #800e19">Admin Name</h5> : {{$details->name}}
                                    </div>
                                    <div class="card-header">
                                         <h5 style="color: #800e19">Admin Email</h5> : {{$details->email}}
                                    </div>
                                    <div class="card-header">
                                         <h5 style="color: #800e19">Admin Address</h5> : {{$details->address}}
                                    </div>

                                        <div class="card-header">
                                             <h5 style="color: #800e19">Status</h5> :
                                            @if($details->status == 0)
                                                UnActive
                                            @else
                                                Active
                                            @endif
                                        </div>




                                    @if($details->image=='')
                                    @else
                                    <!-- round card start -->
                                        <div class="card-header">
                                             <h5 style="color: #800e19">Admin  Imag</h5>
                                            <div class="card-block">
                                                <div class="row users-card">
                                                    <div class="col-lg-6 col-xl-3 col-md-6">
                                                        <div class="card rounded-card user-card">
                                                            <div class="card-block">
                                                                <div class="img-hover">
                                                                    <img class="img-fluid img-circle" src="{{asset($details->image)}}">


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