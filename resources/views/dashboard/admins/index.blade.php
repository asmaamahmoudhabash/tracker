@extends('dashboard.layouts.dashboard')

@section('content')


    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header">
                        <div class="page-header-title">
                            <a href="{{url('AdminPanel/Admins/create')}}">  <button class="btn btn-success btn-round">Add Admin</button></a>
                            {{--<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>--}}
                        </div>
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{url('AdminPanel/Dashboard')}}">
                                        <i class="icofont icofont-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item"> <a href="{{url('AdminPanel/Admins/create')}}">Add  Admin </a>
                                </li>
                                <li class="breadcrumb-item">Admins Table
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Page-header end -->
                    <!-- Page-body start -->
                    <div class="page-body">
                    @include('flash::message')
                        <!-- Basic table card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>Admins table</h5>
                                {{--<span>use class <code>table</code> inside table element</span>--}}
                                <div class="card-header-right">
                                    <i class="icofont icofont-rounded-down"></i>
                                    <i class="icofont icofont-refresh"></i>
                                    <i class="icofont icofont-close-circled"></i>
                                </div>
                            </div>
                            <div class="card-block table-border-style">
                                <div class="table-responsive">
                                    @include('sweet::alert')
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            <th>Show All</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                       @foreach($admins as $value)
                                        <tr>
                                            <td>{{$value->name}}</td>
                                            <td>
                                                @if($value->image=='')
                                                    <img class="user-img img-circle" src="{{asset('dashboard/assets/images/avatar-1.png')}} " style="width: 20%">
                                                @else
                                                    <img class="user-img img-circle" src="{{asset($value->image)}}" alt="user-img" style="width: 20%">
                                                @endif
                                            </td>
                                            <td>



                                                @if ($value->status ==0)

                                                    <a href="{{url('AdminPanel/active_admin/'.$value->id)}}">
                                                        <button class="btn btn-default btn-icon"><i class="icofont icofont-space-shuttle"></i></button>
                                                    </a>
                                                @elseif($value->status ==1)
                                                    <a href="{{url('AdminPanel/unactive_admin/'.$value->id)}}">
                                                        <button class="btn btn-primary btn-icon"><i class="icofont icofont-triangle"></i></button>
                                                    </a>
                                                @endif

                                            </td>
                                            <td>
                                                <a href="{{url('AdminPanel/Admins/'.$value->id.'/edit')}}">
                                                <button class="btn btn-success btn-icon"><i class="ion-edit"></i></button>
                                                </a>
                                            </td>
                                          <td>
                                              {{Form::open(array('method'=>'delete','url'=>'AdminPanel/Admins/'.$value->id))}}
                                                  <button    Onclick="return ConfirmDelete();"  class="btn btn-danger btn-icon"><i class="ion-filing"></i></button>
                                              {{Form::close()}}
                                          </td>

                                          <td>
                                              <a href="{{url('AdminPanel/Admins/'.$value->id)}}"> <button class="btn btn-info btn-icon"><i class="icofont icofont-eye-alt"></i></button></a>
                                          </td>

                                        </tr>
                                           @endforeach
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                        <!-- Basic table card end -->

                    </div>
                    <!-- Page-body end -->
                    {{$admins->render()}}
                </div>
            </div>
            <!-- Main-body end -->

            {{--<div id="styleSelector">--}}
               {{----}}
            {{--</div>--}}
        </div>
    </div>


@stop