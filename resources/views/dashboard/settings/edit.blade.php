
@extends('dashboard.layouts.dashboard')

@section('content')

        <div class="pcoded-content">
                <div class="pcoded-inner-content">

                        <!-- Main-body start -->
                        <div class="main-body">
                                @include('sweet::alert')
                                <div class="page-wrapper">
                                        <!-- Page header start -->
                                        <div class="page-header">
                                                <div class="page-header-title">
                                                        <h4>Site Settings</h4>
                                                        {{--<span>Lorem ipsum dolor sit <code>amet</code>, consectetur adipisicing elit</span>--}}
                                                </div>
                                                <div class="page-header-breadcrumb">
                                                        <ul class="breadcrumb-title">
                                                                <li class="breadcrumb-item">
                                                                        <a href="{{url('AdminPanel/Dashboard')}}">
                                                                                <i class="icofont icofont-home"></i>
                                                                        </a>
                                                                </li>
                                                                {{--<li class="breadcrumb-item"><a href="{{url('AdminPanel/Categories')}}">All Categories</a>--}}
                                                                {{--</li>--}}
                                                                <li class="breadcrumb-item">Edit Site Settings
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
                       'action'=>['SettingController@update',1],
                       'role'=>'form',
                       'method'=>'PUT',
                       'id'=>'contact_us',
                        'files'=>'true'


                       ])!!}



                                                                                @include('dashboard.settings.form')
                                                                                <button  type=""  value="submit"  class="form-control autonumber btn btn-success" >Save change</button>

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
{{--form vaildation script--}}



<script>







        // function myFun(){
        //         // Get all form inputs valus in variables
        //         var site_name_form = $('#site_name_form').val();
        //         var site_title_form = $('#site_title_form').val();
        //         var residential_content_form = $('#residential_content_form').val();
        //         var section_title_form = $('#section_title_form').val();
        //         var section_content_form = $('#section_content_form').val();
        //         var commercial_content_form = $('#commercial_content_form').val();
        //         var site_keywords_form = $('#site_keywords_form').val();
        //         var site_description_form = $('#site_description_form').val();
        //         var maintence_message_form = $('#maintence_message_form').val();
        //         var maintence_form = $('#maintence_form').val();
        //         var email = $('#email').val();
        //         var phone1_form = $('#phone1_form').val();
        //         var phone2_form = $('#phone2_form').val();
        //         var mobile1_form = $('#mobile1_form').val();
        //         var mobile2_form = $('#mobile2_form').val();
        //         var address_form = $('#address_form').val();
        //         var facebook_form = $('#facebook_form').val();
        //         var twitter_form = $('#twitter_form').val();
        //         var youtube_form = $('#youtube_form').val();
        //         var instgram_form = $('#instgram_form').val();
        //         var googleplus_form = $('#googleplus_form').val();
        //
        //
        //
        //         // remove error that's we show previous
        //         $(".error").remove();
        //
        //         // validation for site_name_form
        //         if (site_name_form.length < 1) {
        //                 $('#site_name_form').after('<p class="error">This Field Is Required</p>');
        //
        //         }
        //         // validation for site_title_form
        //        if (site_title_form.length < 1) {
        //                 $('#site_title_form').after('<p class="error">This Field Is Required</p>');
        //
        //         }
        //         // validation for residential_content_form
        //        if  (residential_content_form.length < 1) {
        //                 $('#residential_content_form').after('<p class="error">This Field Is Required</p>');
        //
        //         }
        //         // validation for section_title_form
        //         if  (section_title_form.length < 1) {
        //                 $('#section_title_form').after('<p class="error">This Field Is Required</p>');
        //
        //         }
        //         // validation for section_content_form
        //          if  (section_content_form.length < 1) {
        //                 $('#section_content_form').after('<p class="error">This Field Is Required</p>');
        //
        //         }
        //
        //
        //         // validation for commercial_content_form
        //         if  (commercial_content_form.length < 1) {
        //                 $('#commercial_content_form').after('<p class="error">This Field Is Required</p>');
        //
        //         }
        //         // validation for site_keywords_form
        //         if  (site_keywords_form.length < 1) {
        //                 $('#site_keywords_form').after('<p class="error">This Field Is Required</p>');
        //
        //         }
        //         // validation for site_description_form
        //          if  (site_description_form.length < 1) {
        //                 $('#site_description_form').after('<p class="error">This Field Is Required</p>');
        //
        //         }
        //         // validation for maintence_message_form
        //         else if  (maintence_message_form.length < 1) {
        //                 $('#maintence_message_form').after('<p class="error">This Field Is Required</p>');
        //         }
        //         // validation for maintence_form
        //          if  (maintence_form.length < 1) {
        //                 $('#maintence_form').after('<p class="error">This Field Is Required</p>');
        //         }
        //         // validation for email
        //         if  (email.length < 1) {
        //                 $('#email').after('<p class="error">This Field Is Required</p>');
        //         }
        //         // validation for phone1_form
        //          if  (phone1_form.length < 1) {
        //                 $('#phone1_form').after('<p class="error">This Field Is Required</p>');
        //         }
        //
        //         // validation for phone2_form
        //         if  (phone2_form.length < 1) {
        //                 $('#phone2_form').after('<p class="error">This Field Is Required</p>');
        //         }
        //         // validation for mobile1_form
        //          if  (mobile1_form.length < 1) {
        //                 $('#mobile1_form').after('<p class="error">This Field Is Required</p>');
        //         }
        //         // validation for mobile2_form
        //          if  (mobile2_form.length < 1) {
        //                 $('#mobile2_form').after('<p class="error">This Field Is Required</p>');
        //         }
        //         // validation for address_form
        //          if  (address_form.length < 1) {
        //                 $('#address_form').after('<p class="error">This Field Is Required</p>');
        //         }
        //         // validation for facebook_form
        //          if  (facebook_form.length < 1) {
        //                 $('#facebook_form').after('<p class="error">This Field Is Required</p>');
        //         }
        //         // validation for twitter_form
        //          if  (twitter_form.length < 1) {
        //                 $('#twitter_form').after('<p class="error">This Field Is Required</p>');
        //         }
        //
        //         // validation for youtube_form
        //          if  (youtube_form.length < 1) {
        //                 $('#youtube_form').after('<p class="error">This Field Is Required</p>');
        //         }
        //
        //         // validation for instgram_form
        //         if  (instgram_form.length < 1) {
        //                 $('#instgram_form').after('<p class="error">This Field Is Required</p>');
        //         }
        //         // validation for googleplus_form
        //         if  (googleplus_form.length < 1) {
        //                 $('#googleplus_form').after('<p class="error">This Field Is Required</p>');
        //         }
        //
        //
        //
        //
        //
        //         else{
        //                 $('#contact_us').submit();
        //         }
        //
        // }


</script>