@extends('dashboard.layouts.dashboard')

@section('content')

    <div class="pcoded-content">
        <div class="pcoded-inner-content">

            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page header start -->
                    <div class="page-header">
                        <div class="page-header-title">
                            <h4>Add Admin</h4>
                            {{--<span>Lorem ipsum dolor sit <code>amet</code>, consectetur adipisicing elit</span>--}}
                        </div>
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{url('AdminPanel/Dashboard')}}">
                                        <i class="icofont icofont-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{url('AdminPanel/Admins')}}">All Admins</a>
                                </li>
                                <li class="breadcrumb-item">create Admin
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Page header end -->
                    <!-- Page body start -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Basic Form Inputs card start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Form Inputs</h5>
                                        {{--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>--}}
                                        <div class="card-header-right">
                                            <i class="icofont icofont-rounded-down"></i>
                                            <i class="icofont icofont-refresh"></i>
                                            <i class="icofont icofont-close-circled"></i>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        {{--<h4 class="sub-title">Basic Inputs</h4>--}}
                                        <!-- form start here -->
                                        {!! Form::model($model,[
                                                                        'action'=>'AdminController@store',
                                                                        'id'=>'myForm',
                                                                        'role'=>'form',
                                                                        'method'=>'POST',
                                                                        'files'=>'true'
                                                                        ])!!}



                                        @include('dashboard.admins.form')
                                        <button type="submit" class="form-control autonumber btn btn-success" data-a-sign="Name">Save change</button>
                                        {!! Form::close()!!}

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Page body end -->
                </div>
            </div>
            <!-- Main-body end -->
        </div>
    </div>

@endsection