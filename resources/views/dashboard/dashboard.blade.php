@extends('dashboard.layouts.dashboard')

@section('content')

    {{--content starts here--}}

    <div class="pcoded-content">
        <div class="pcoded-inner-content">

            <div class="main-body">
                <div class="page-wrapper">
                  {{--contentent start here--}}
                  <!-- Page-header start -->
                      <div class="page-header">
                          <div class="page-header-title">
                              <h4>Welcome To Admin Control Panel</h4>
                          </div>
                          <div class="page-header-breadcrumb">
                              <ul class="breadcrumb-title">
                                  <li class="breadcrumb-item">
                                      <a href="{{url('AdminPanel/Dashboard')}}">
                                          <i class="icofont icofont-home"></i>
                                      </a>
                                  </li>
                                  <li class="breadcrumb-item">Dashboard
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <!-- Page-header end -->
                      <!-- Page-body start -->
                      <div class="page-body">
                          <div class="row">
                              <!-- counter-card-1 start-->
                              <div class="col-md-12 col-xl-4">
                                  <div class="card counter-card-1">
                                      <div class="card-block-big">
                                          <div>
                                              <h3>{{count($categories)}}</h3>
                                              <p>Category</p>
                                              <div class="progress ">
                                                  <div class="progress-bar progress-bar-striped progress-xs progress-bar-pink" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                          </div>
                                          <i class="ion-ios-compose-outline"></i>
                                      </div>
                                  </div>
                              </div>
                              <!-- counter-card-1 end-->
                              <!-- counter-card-2 start -->
                              <div class="col-md-6 col-xl-4">
                                  <div class="card counter-card-2">
                                      <div class="card-block-big">
                                          <div>
                                              <h3>{{count($apartments)}}</h3>
                                              <p>Apartments</p>
                                              <div class="progress ">
                                                  <div class="progress-bar progress-bar-striped progress-xs progress-bar-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                          </div>
                                          <i class="ion-social-buffer "></i>
                                      </div>
                                  </div>
                              </div>
                              <!-- counter-card-2 end -->
                              <!-- counter-card-3 start -->
                              <div class="col-md-6 col-xl-4">
                                  <div class="card counter-card-3">
                                      <div class="card-block-big">
                                          <div>
                                              <h3>{{count($news)}}</h3>
                                              <p>News</p>
                                              <div class="progress ">
                                                  <div class="progress-bar progress-bar-striped progress-xs progress-bar-default" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                          </div>
                                          <i class="icofont icofont-upload"></i>
                                      </div>
                                  </div>
                              </div>
                              <!-- counter-card-3 end -->
                              <!-- table card-1 start -->
                              <div class="col-md-12 col-xl-4">
                                  <div class="card table-card">
                                      <div class="row-table">
                                          <div class="col-sm-6 card-block-big br">
                                              <div class="row">
                                                  <div class="col-sm-4">
                                                      <i class="icofont icofont-eye-alt text-success"></i>
                                                  </div>
                                                  <div class="col-sm-8 text-center">
                                                      <h5>{{count($apartments)}}</h5>
                                                      <span>All Apartment</span>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-sm-6 card-block-big">
                                              <div class="row">
                                                  <div class="col-sm-4">
                                                      <i class="icofont icofont-ui-music text-danger"></i>
                                                  </div>
                                                  <div class="col-sm-8 text-center">
                                                      <h5>{{count($interests)}}</h5>
                                                      <span>Request Interest</span>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row-table">
                                          <div class="col-sm-6 card-block-big br">
                                              <div class="row">
                                                  <div class="col-sm-4">
                                                      <i class="icofont icofont-files text-info"></i>
                                                  </div>
                                                  <div class="col-sm-8 text-center">
                                                      <h5>{{count($apartments_active)}}</h5>
                                                      <span>Active Apartment</span>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-sm-6 card-block-big">
                                              <div class="row">
                                                  <div class="col-sm-4">
                                                      <i class="icofont icofont-envelope-open text-warning"></i>
                                                  </div>
                                                  <div class="col-sm-8 text-center">
                                                      <h5>{{count($views)}}</h5>
                                                      <span>Requests View</span>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              {{--<!-- table card-1 end -->--}}
                              {{--<!-- table card-2 start -->--}}
                              <div class="col-md-12 col-xl-4">
                                  <div class="card table-card">
                                      <div class="row-table">
                                          <div class="col-sm-6 card-block-big br">
                                              <div class="row">
                                                  <div class="col-sm-4">
                                                      <div id="barchart" style="height:40px;width:40px;"></div>
                                                  </div>
                                                  <div class="col-sm-8 text-center">
                                                      <h5>{{count($sliders)}}</h5>
                                                      <span>All Slider</span>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-sm-6 card-block-big">
                                              <div class="row ">
                                                  <div class="col-sm-4">
                                                      <i class="icofont icofont-network text-primary"></i>
                                                  </div>
                                                  <div class="col-sm-8 text-center">
                                                      <h5>{{count($sliders_active)}}</h5>
                                                      <span>Active Sliders</span>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row-table">
                                          <div class="col-sm-6 card-block-big br">
                                              <div class="row ">
                                                  <div class="col-sm-4">
                                                      <div id="barchart2" style="height:40px;width:40px;"></div>
                                                  </div>
                                                  <div class="col-sm-8 text-center">
                                                      <h5>{{count($team_active)}}</h5>
                                                      <span>All Team</span>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-sm-6 card-block-big">
                                              <div class="row ">
                                                  <div class="col-sm-4">
                                                      <i class="icofont icofont-network-tower text-primary"></i>
                                                  </div>
                                                  <div class="col-sm-8 text-center">
                                                      <h5>{{count($teams)}}</h5>
                                                      <span>Active Team</span>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              {{--<!-- table card-2 end -->--}}
                              {{--<!-- Widget primary-success card start -->--}}
                              <div class="col-md-12 col-xl-4">
                                  <!-- widget primary card start -->
                                  <div class="card table-card widget-primary-card">
                                      <div class="row-table">
                                          <div class="col-sm-3 card-block-big">
                                              <i class="icofont icofont-eye-alt text-success"></i>
                                          </div>
                                          <div class="col-sm-9">

                                              <h4>{{count($services)}}</h4>
                                              <h6>All Services</h6>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- widget primary card end -->
                                  <!-- widget-success-card start -->
                                  <div class="card table-card widget-success-card">
                                      <div class="row-table">
                                          <div class="col-sm-3 card-block-big">
                                              <i class="icofont icofont-trophy-alt"></i>
                                          </div>
                                          <div class="col-sm-9">
                                              <h4>{{count($services_active)}}</h4>
                                              <h6> Active Services</h6>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- widget-success-card end -->
                              </div>
                              {{--<!-- Widget primary-success card end -->--}}
                              {{--<!-- group widget start -->--}}
                              <div class="col-md-12 col-xl-5">
                                  <div class="card table-card group-widget">
                                      <div class="row-table">
                                          <div class="col-sm-4 bg-primary card-block-big">
                                             All Agents
                                              <p>{{count($agents)}}</p>
                                          </div>
                                          <div class="col-sm-4 bg-dark-primary card-block-big">
                                            Active Agents
                                              <p>{{count($agents_active)}}</p>

                                          </div>
                                          <div class="col-sm-4 bg-darkest-primary card-block-big">
                                             Agents Massge
                                              <p>{{count($agents_msg)}}</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              {{--<!-- group widget end -->--}}
                              {{--<!-- Single-white counter start -->--}}
{{--                              <div class="col-md-6 col-xl-3">--}}
{{--                                  <div class="card group-widget">--}}
{{--                                      <div class="card-block-big text-center">--}}
{{--                                          <h1 class="text-muted">{{count($partners)}}</h1>--}}
{{--                                          <h6 class="text-muted m-t-10"> All Agents</h6>--}}
{{--                                      </div>--}}
{{--                                  </div>--}}
{{--                              </div>--}}
                              {{--<!-- Single-white counter end -->--}}
                              {{--<!-- Single-counter-2 card start -->--}}
                              <div class="col-md-6 col-xl-4">
                                  <div class="card group-widget">
                                      <div class="card-block-big bg-info text-center">
                                          <h1>{{count($galleries)}}</h1>
                                          <h6 class="m-t-10">All Galleries</h6>
                                      </div>
                                  </div>
                              </div>
                              {{--<!-- Single-counter-2 card start -->--}}
                              {{--<!-- Facebook card start -->--}}
{{--                              <div class="col-md-6 col-xl-3">--}}
{{--                                  <div class="card social-widget-card">--}}
{{--                                      <div class="card-block-big bg-facebook">--}}
{{--                                          <h3>1165 +</h3>--}}
{{--                                          <span class="m-t-10">Facebook Users</span>--}}
{{--                                          <i class="icofont icofont-social-facebook"></i>--}}
{{--                                      </div>--}}
{{--                                  </div>--}}
{{--                              </div>--}}
                              {{--<!-- Facebook card end -->--}}
                              {{--<!-- Twitter card start -->--}}
                              {{--<div class="col-md-6 col-xl-3">--}}
                                  {{--<div class="card social-widget-card">--}}
                                      {{--<div class="card-block-big bg-twitter">--}}
                                          {{--<h3>780 +</h3>--}}
                                          {{--<span class="m-t-10">Twitter Users</span>--}}
                                          {{--<i class="icofont icofont-social-twitter"></i>--}}
                                      {{--</div>--}}
                                  {{--</div>--}}
                              {{--</div>--}}
                              {{--<!-- Twitter card end -->--}}
                              {{--<!-- Linked in card start -->--}}
                              {{--<div class="col-md-6 col-xl-3">--}}
                                  {{--<div class="card social-widget-card">--}}
                                      {{--<div class="card-block-big bg-linkein">--}}
                                          {{--<h3>998 +</h3>--}}
                                          {{--<span class="m-t-10">Linked In Users</span>--}}
                                          {{--<i class="icofont icofont-brand-linkedin"></i>--}}
                                      {{--</div>--}}
                                  {{--</div>--}}
                              {{--</div>--}}
                              {{--<!-- Linked in card end -->--}}
                              {{--<!-- Google-plus card start -->--}}
                              {{--<div class="col-md-6 col-xl-3">--}}
                                  {{--<div class="card social-widget-card">--}}
                                      {{--<div class="card-block-big bg-google-plus">--}}
                                          {{--<h3>650 +</h3>--}}
                                          {{--<span class="m-t-10">Google Plus Users</span>--}}
                                          {{--<i class="icofont icofont-social-google-plus"></i>--}}
                                      {{--</div>--}}
                                  {{--</div>--}}
                              {{--</div>--}}
                              {{--<!-- Google-plus card end -->--}}
                              {{--<!-- Documents card start -->--}}
                              {{--<div class="col-md-6 col-xl-3">--}}
                                  {{--<div class="card client-blocks dark-primary-border">--}}
                                      {{--<div class="card-block">--}}
                                          {{--<h5>New Documents</h5>--}}
                                          {{--<ul>--}}
                                              {{--<li>--}}
                                                  {{--<i class="icofont icofont-document-folder"></i>--}}
                                              {{--</li>--}}
                                              {{--<li class="text-right">--}}
                                                  {{--133--}}
                                              {{--</li>--}}
                                          {{--</ul>--}}
                                      {{--</div>--}}
                                  {{--</div>--}}
                              {{--</div>--}}
                              {{--<!-- Documents card end -->--}}
                              {{--<!-- New clients card start -->--}}
{{--                              <div class="col-md-6 col-xl-3">--}}
{{--                                  <div class="card client-blocks warning-border">--}}
{{--                                      <div class="card-block">--}}
{{--                                          <h5>New Clients</h5>--}}
{{--                                          <ul>--}}
{{--                                              <li>--}}
{{--                                                  <i class="icofont icofont-ui-user-group text-warning"></i>--}}
{{--                                              </li>--}}
{{--                                              <li class="text-right text-warning">--}}
{{--                                                  23--}}
{{--                                              </li>--}}
{{--                                          </ul>--}}
{{--                                      </div>--}}
{{--                                  </div>--}}
{{--                              </div>--}}
                              {{--<!-- New clients card end -->--}}
                              {{--<!-- New files card start -->--}}
                              {{--<div class="col-md-6 col-xl-3">--}}
                                  {{--<div class="card client-blocks success-border">--}}
                                      {{--<div class="card-block">--}}
                                          {{--<h5>New Files</h5>--}}
                                          {{--<ul>--}}
                                              {{--<li>--}}
                                                  {{--<i class="icofont icofont-files text-success"></i>--}}
                                              {{--</li>--}}
                                              {{--<li class="text-right text-success">--}}
                                                  {{--240--}}
                                              {{--</li>--}}
                                          {{--</ul>--}}
                                      {{--</div>--}}
                                  {{--</div>--}}
                              {{--</div>--}}
                              {{--<!-- New files card end -->--}}
                              {{--<!-- Open Project card start -->--}}
                              {{--<div class="col-md-6 col-xl-3">--}}
                                  {{--<div class="card client-blocks">--}}
                                      {{--<div class="card-block">--}}
                                          {{--<h5>Open Projects</h5>--}}
                                          {{--<ul>--}}
                                              {{--<li>--}}
                                                  {{--<i class="icofont icofont-ui-folder text-primary"></i>--}}
                                              {{--</li>--}}
                                              {{--<li class="text-right text-primary">--}}
                                                  {{--169--}}
                                              {{--</li>--}}
                                          {{--</ul>--}}
                                      {{--</div>--}}
                                  {{--</div>--}}
                              {{--</div>--}}
                              {{--<!-- Open Project card end -->--}}
                              {{--<!-- Center round user-card start -->--}}
                              {{--<div class="col-md-12 col-xl-4">--}}
                                  {{--<div class="card">--}}
                                      {{--<div class="widget-profile-card-1">--}}
                                          {{--<img class="img-fluid" src="assets/images/slider/slider7.jpg" alt="card-style-1">--}}
                                          {{--<div class="middle-user">--}}
                                              {{--<img class="img-fluid img-thumbnail" src="assets/images/user-card/img-round2.jpg" alt="Profile-user">--}}
                                          {{--</div>--}}
                                      {{--</div>--}}
                                      {{--<div class="card-block text-center">--}}
                                          {{--<h3>Jenny Joe</h3>--}}
                                          {{--<p>Web Designer</p>--}}
                                          {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci a, rem accusantium recusandae beatae.--}}
                                      {{--</div>--}}
                                      {{--<div class="card-footer bg-inverse">--}}
                                          {{--<div class="row text-center">--}}
                                              {{--<div class="col-xs-4 col-sm-4 col-lg-4">--}}
                                                  {{--<h4>400</h4>--}}
                                                  {{--<span>Designs</span>--}}
                                              {{--</div>--}}
                                              {{--<div class="col-xs-4 col-sm-4 col-lg-4">--}}
                                                  {{--<h4>90</h4>--}}
                                                  {{--<span>Projects</span>--}}
                                              {{--</div>--}}
                                              {{--<div class="col-xs-4 col-sm-4 col-lg-4">--}}
                                                  {{--<h4>70</h4>--}}
                                                  {{--<span>Devlopments</span>--}}
                                              {{--</div>--}}
                                          {{--</div>--}}
                                      {{--</div>--}}
                                  {{--</div>--}}
                              {{--</div>--}}
                              {{--<!-- Center round user-card end -->--}}
                              {{--<!-- Morris chart start -->--}}
                              {{--<div class="col-md-12 col-xl-8">--}}
                                  {{--<div class="card">--}}
                                      {{--<div class="card-header">--}}
                                          {{--<button class="btn btn-primary btn-sm">Week</button>--}}
                                          {{--<button class="btn btn-primary btn-sm">Month</button>--}}
                                          {{--<button class="btn btn-primary btn-sm">Year</button>--}}
                                      {{--</div>--}}
                                      {{--<div class="card-block">--}}
                                          {{--<div id="morris-extra-area" style="height:470px;"></div>--}}
                                      {{--</div>--}}
                                  {{--</div>--}}
                              {{--</div>--}}
                              {{--<!-- Morris chart end -->--}}
                              {{--<!-- Code Counter start -->--}}
                              {{--<div class="col-sm-6">--}}
                                  {{--<div class="card bg-primary large-widget-card">--}}
                                      {{--<div class="card-block-big">--}}
                                          {{--<h4>5127 k</h4>--}}
                                          {{--<h6>Line of code</h6>--}}
                                          {{--<i class="icofont icofont-code-alt"></i>--}}
                                      {{--</div>--}}
                                  {{--</div>--}}
                                  {{--<div class="card bg-success large-widget-card">--}}
                                      {{--<div class="card-block-big">--}}
                                          {{--<h4>100 k</h4>--}}
                                          {{--<h6>Happy Users</h6>--}}
                                          {{--<i class="icofont icofont-ui-user-group"></i>--}}
                                      {{--</div>--}}
                                  {{--</div>--}}
                              {{--</div>--}}
                              {{--<!-- Code Counter end -->--}}
                              {{--<!-- Downloads counter start -->--}}
                              {{--<div class="col-sm-6">--}}
                                  {{--<div class="card bg-inverse large-widget-card">--}}
                                      {{--<div class="card-block-big">--}}
                                          {{--<h4>1100 +</h4>--}}
                                          {{--<h6>Downloads</h6>--}}
                                          {{--<i class="icofont icofont-downloaded"></i>--}}
                                      {{--</div>--}}
                                  {{--</div>--}}
                                  {{--<div class="card bg-danger large-widget-card">--}}
                                      {{--<div class="card-block-big">--}}
                                          {{--<h4>4.7</h4>--}}
                                          {{--<h6>Ratings Received</h6>--}}
                                          {{--<i class="icofont icofont-star"></i>--}}
                                      {{--</div>--}}
                                  {{--</div>--}}
                              {{--</div>--}}
                              {{--<!-- Downloads counter end -->--}}
                              {{--<!-- User activities chart start -->--}}
                              {{--<div class="col-md-12 col-xl-4">--}}
                                  {{--<div class="card user-activity-card">--}}
                                      {{--<div class="card-block-big">--}}
                                          {{--<h5>User Activities</h5>--}}
                                          {{--<h3 class="user-number">195</h3>--}}
                                          {{--<h6 class="m-b-15">Social Users</h6>--}}
                                          {{--<div class="progress m-b-30">--}}
                                              {{--<div class="progress-bar progress-bar-striped progress-sm progress-bar-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>--}}
                                          {{--</div>--}}
                                          {{--<div class="row m-b-40">--}}
                                              {{--<div class="col-sm-6">--}}
                                                  {{--<p>Page Visits</p>--}}
                                                  {{--<h6>1265</h6>--}}
                                              {{--</div>--}}
                                              {{--<div class="col-sm-6">--}}
                                                  {{--<p>New Visitors</p>--}}
                                                  {{--<h6>67%</h6>--}}
                                              {{--</div>--}}
                                          {{--</div>--}}
                                          {{--<div class="row">--}}
                                              {{--<div class="col-sm-6">--}}
                                                  {{--<p>Page Visits</p>--}}
                                                  {{--<h6>1265</h6>--}}
                                              {{--</div>--}}
                                              {{--<div class="col-sm-6">--}}
                                                  {{--<p>New Visitors</p>--}}
                                                  {{--<h6>67%</h6>--}}
                                              {{--</div>--}}
                                          {{--</div>--}}
                                          {{--<i class="icofont icofont-link-alt link"></i>--}}
                                      {{--</div>--}}
                                      {{--<div class="card-footer">--}}
                                          {{--<p class="m-b-0">This is standard panel footer</p>--}}
                                      {{--</div>--}}
                                  {{--</div>--}}
                              {{--</div>--}}
                              {{--<!-- User activities chart end -->--}}
                              {{--<!-- Calender card start -->--}}
                              {{--<div class="col-md-12 col-xl-8">--}}
                                  {{--<div class="row">--}}
                                      {{--<div class="col-sm-12">--}}
                                          {{--<div class="card borderless-card">--}}
                                              {{--<div class="row">--}}
                                                  {{--<div class="col-sm-5 weather-card-1  text-center">--}}
                                                      {{--<div class="mob-bg-calender bg-facebook">--}}
                                                          {{--<div class="row">--}}
                                                              {{--<div class="col-sm-12">--}}
                                                                  {{--<h4>Sunday</h4>--}}
                                                                  {{--<h1 class="weather-temp">23</h1>--}}
                                                              {{--</div>--}}
                                                              {{--<div class="col-sm-12">--}}
                                                                  {{--<svg version="1.1" id="cloudDrizzle" class="climacon climacon_cloudDrizzle" viewBox="15 15 70 70">--}}
                                                                      {{--<g class="climacon_iconWrap climacon_iconWrap-cloudDrizzle">--}}
                                                                          {{--<g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">--}}
                                                                              {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" d="M42.001,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2.001-0.895-2.001-2v-3.998C40,54.538,40.896,53.644,42.001,53.644z" />--}}
                                                                              {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M49.999,53.644c1.104,0,2,0.896,2,2v4c0,1.104-0.896,2-2,2s-1.998-0.896-1.998-2v-4C48.001,54.54,48.896,53.644,49.999,53.644z" />--}}
                                                                              {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M57.999,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2-0.895-2-2v-3.998C55.999,54.538,56.894,53.644,57.999,53.644z" />--}}
                                                                          {{--</g>--}}
                                                                          {{--<g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">--}}
                                                                              {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.944v-4.381c2.387-1.386,3.998-3.961,3.998-6.92c0-4.418-3.58-8-7.998-8c-1.603,0-3.084,0.481-4.334,1.291c-1.232-5.316-5.973-9.29-11.664-9.29c-6.628,0-11.999,5.372-11.999,12c0,3.549,1.55,6.729,3.998,8.926v4.914c-4.776-2.769-7.998-7.922-7.998-13.84c0-8.836,7.162-15.999,15.999-15.999c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.336-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12C71.997,58.864,68.655,63.296,63.999,64.944z" />--}}
                                                                          {{--</g>--}}
                                                                      {{--</g>--}}
                                                                  {{--</svg>--}}
                                                                  {{--<span class="weather-temp">8°</span>--}}
                                                                  {{--<h5>New York , NY , USA</h5>--}}
                                                                  {{--<span class="d-block">6:00 AM</span>--}}
                                                              {{--</div>--}}
                                                          {{--</div>--}}
                                                      {{--</div>--}}
                                                  {{--</div>--}}
                                                  {{--<div class="col-sm-7 p-l-0">--}}
                                                      {{--<div class="weather-calender">--}}
                                                          {{--<div class="widget-calender"></div>--}}
                                                      {{--</div>--}}
                                                  {{--</div>--}}
                                              {{--</div>--}}
                                          {{--</div>--}}
                                      {{--</div>--}}
                                  {{--</div>--}}
                              {{--</div>--}}
                              {{--<!-- Calender card end -->--}}
                              {{--<!-- Blur user-card start -->--}}
                              {{--<div class="col-md-12 col-xl-4 m-b-30">--}}
                                  {{--<div class="widget-main-card blur-user-card">--}}
                                      {{--<img src="assets/images/widget/user-blur-bg.png" alt="">--}}
                                      {{--<h3>Linda Fox</h3>--}}
                                      {{--<p>UI Designer at CreativesCastle Studio</p>--}}
                                      {{--<button class="btn btn-info">+ Follow</button>--}}
                                      {{--<div class="blur-footer">--}}
                                          {{--<div class="row text-center">--}}
                                              {{--<div class="col-xs-4 col-sm-4 col-lg-4">--}}
                                                  {{--<h4>134</h4>--}}
                                                  {{--<span>Shots</span>--}}
                                              {{--</div>--}}
                                              {{--<div class="col-xs-4 col-sm-4 col-lg-4">--}}
                                                  {{--<h4>13,227</h4>--}}
                                                  {{--<span>Followers</span>--}}
                                              {{--</div>--}}
                                              {{--<div class="col-xs-4 col-sm-4 col-lg-4">--}}
                                                  {{--<h4>488</h4>--}}
                                                  {{--<span>Following</span>--}}
                                              {{--</div>--}}
                                          {{--</div>--}}
                                      {{--</div>--}}
                                  {{--</div>--}}
                              {{--</div>--}}
                              {{--<!-- Blur user-card end -->--}}
                              {{--<!-- Growth chart start -->--}}
                              {{--<div class="col-md-12 col-xl-8">--}}
                                  {{--<div class="card">--}}
                                      {{--<div class="card-header">--}}
                                          {{--<h5><i class="icofont icofont-growth m-r-5"></i>Daily Growth</h5>--}}
                                      {{--</div>--}}
                                      {{--<div class="card-block" style="height:450px;">--}}
                                          {{--<div class="ct-chart2 ct-perfect-fourth" style="height:400px;"></div>--}}
                                      {{--</div>--}}
                                  {{--</div>--}}
                              {{--</div>--}}
                              {{--<!-- Growth chart end -->--}}
                              {{--<!-- Gallery card start -->--}}
                              {{--<div class="col-md-12 col-xl-4">--}}
                                  {{--<div class="card">--}}
                                      {{--<div class="card-header">Contact Us</div>--}}
                                      {{--<form>--}}
                                          {{--<div class="card-block">--}}
                                              {{--<div class="form-group">--}}
                                                  {{--<input type="text" class="form-control" placeholder="Name">--}}
                                              {{--</div>--}}
                                              {{--<div class="form-group">--}}
                                                  {{--<input type="text" class="form-control" placeholder="Subject">--}}
                                              {{--</div>--}}
                                              {{--<div class="form-group">--}}
                                                  {{--<input type="email" class="form-control" placeholder="E-mail Address">--}}
                                              {{--</div>--}}
                                              {{--<div>--}}
                                                  {{--<textarea rows="5" cols="5" class="form-control" placeholder="Message"></textarea>--}}
                                              {{--</div>--}}
                                          {{--</div>--}}
                                          {{--<div class="card-footer text-right">--}}
                                              {{--<button type "submit" class="btn btn-warning m-r-10">Submit</button>--}}
                                              {{--<button type="reset" class="btn btn-danger">Reset</button>--}}
                                          {{--</div>--}}
                                      {{--</form>--}}
                                  {{--</div>--}}
                              {{--</div>--}}
                              {{--<!-- Gallery card end -->--}}
                              {{--<!-- Weather-card-2 start -->--}}
                              {{--<div class="col-md-12 col-xl-4">--}}
                                  {{--<div class="card borderless-card weather-card-2">--}}
                                      {{--<div class="card-block-big bg-facebook">--}}
                                          {{--<div class="weather-card-location">--}}
                                              {{--<h4>Alaska, USA</h4>--}}
                                              {{--<i class="icofont icofont-search-alt-2"></i>--}}
                                          {{--</div>--}}
                                          {{--<div class="weather-card-temp">--}}
                                              {{--<h1>-8°</h1>--}}
                                          {{--</div>--}}
                                          {{--<div class="weather-cloud">--}}
                                              {{--<svg version="1.1" id="cloudRain" class="climacon climacon_cloudRain" viewBox="15 15 70 70">--}}
                                                  {{--<clipPath id="cloudFillClip">--}}
                                                      {{--<path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>--}}
                                                  {{--</clipPath>--}}
                                                  {{--<g class="climacon_iconWrap climacon_iconWrap-cloudRain">--}}
                                                      {{--<g class="climacon_wrapperComponent climacon_wrapperComponent-rain">--}}
                                                          {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"></path>--}}
                                                          {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"></path>--}}
                                                          {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"></path>--}}
                                                          {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"></path>--}}
                                                          {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"></path>--}}
                                                          {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"></path>--}}
                                                      {{--</g>--}}
                                                      {{--<g class="climacon_wrapperComponent climacon_wrapperComponent_cloud" clip-path="url(#cloudFillClip)">--}}
                                                          {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.943,64.941v-4.381c2.389-1.384,4-3.961,4-6.92c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.48-4.334,1.291c-1.23-5.317-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.998c0,3.549,1.551,6.728,4,8.924v4.916c-4.777-2.768-8-7.922-8-13.84c0-8.835,7.163-15.997,15.998-15.997c6.004,0,11.229,3.311,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.372,11.998,12C71.941,58.863,68.602,63.293,63.943,64.941z"></path>--}}
                                                      {{--</g>--}}
                                                  {{--</g>--}}
                                              {{--</svg>--}}
                                              {{--<span>Heavy Rain</span>--}}
                                          {{--</div>--}}
                                      {{--</div>--}}
                                      {{--<div class="card-footer">--}}
                                          {{--<div class="row text-center">--}}
                                              {{--<div class="col-sm-4">--}}
                                                  {{--<h6>SUN</h6>--}}
                                                  {{--<svg version="1.1" id="cloudSnow" class="climacon climacon_cloudSnow" viewBox="15 15 70 70">--}}
                                                      {{--<g class="climacon_iconWrap climacon_iconWrap-cloudSnow">--}}
                                                          {{--<g class="climacon_wrapperComponent climacon_wrapperComponent-snow" clip-path="url(#snowFillClip)">--}}
                                                              {{--<circle class="climacon_component climacon_component-stroke climacon_component-stroke_snow climacon_component-stroke_snow-left" cx="42.001" cy="59.641" r="2"></circle>--}}
                                                              {{--<circle class="climacon_component climacon_component-stroke climacon_component-stroke_snow climacon_component-stroke_snow-middle" cx="50.001" cy="59.641" r="2"></circle>--}}
                                                              {{--<circle class="climacon_component climacon_component-stroke climacon_component-stroke_snow climacon_component-stroke_snow-right" cx="57.999" cy="59.641" r="2"></circle>--}}
                                                          {{--</g>--}}
                                                          {{--<g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">--}}
                                                              {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.943v-4.381c2.39-1.386,3.999-3.963,3.999-6.922c0-4.417-3.581-7.999-7.999-7.999c-1.601,0-3.083,0.48-4.333,1.291c-1.23-5.317-5.974-9.291-11.665-9.291c-6.627,0-11.998,5.373-11.998,12c0,3.549,1.55,6.729,4,8.924v4.916c-4.777-2.769-8-7.922-8-13.84c0-8.836,7.163-15.999,15.998-15.999c6.004,0,11.229,3.312,13.965,8.204c0.664-0.113,1.337-0.205,2.033-0.205c6.627,0,11.999,5.373,11.999,11.999C71.998,58.863,68.654,63.293,63.999,64.943z"></path>--}}
                                                          {{--</g>--}}
                                                      {{--</g>--}}
                                                  {{--</svg>--}}
                                              {{--</div>--}}
                                              {{--<div class="col-sm-4">--}}
                                                  {{--<h6>MON</h6>--}}
                                                  {{--<svg version="1.1" id="cloudRain" class="climacon climacon_cloudRain" viewBox="15 15 70 70">--}}
                                                      {{--<clipPath id="cloudFillClip">--}}
                                                          {{--<path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>--}}
                                                      {{--</clipPath>--}}
                                                      {{--<g class="climacon_iconWrap climacon_iconWrap-cloudRain">--}}
                                                          {{--<g class="climacon_wrapperComponent climacon_wrapperComponent-rain">--}}
                                                              {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"></path>--}}
                                                              {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"></path>--}}
                                                              {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"></path>--}}
                                                              {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"></path>--}}
                                                              {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"></path>--}}
                                                              {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"></path>--}}
                                                          {{--</g>--}}
                                                          {{--<g class="climacon_wrapperComponent climacon_wrapperComponent_cloud" clip-path="url(#cloudFillClip)">--}}
                                                              {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.943,64.941v-4.381c2.389-1.384,4-3.961,4-6.92c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.48-4.334,1.291c-1.23-5.317-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.998c0,3.549,1.551,6.728,4,8.924v4.916c-4.777-2.768-8-7.922-8-13.84c0-8.835,7.163-15.997,15.998-15.997c6.004,0,11.229,3.311,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.372,11.998,12C71.941,58.863,68.602,63.293,63.943,64.941z"></path>--}}
                                                          {{--</g>--}}
                                                      {{--</g>--}}
                                                  {{--</svg>--}}
                                              {{--</div>--}}
                                              {{--<div class="col-sm-4">--}}
                                                  {{--<h6>TUE</h6>--}}
                                                  {{--<svg version="1.1" id="cloudDrizzleMoon" class="climacon climacon_cloudDrizzleMoon" viewBox="15 15 70 70">--}}
                                                      {{--<clipPath id="moonCloudFillClip">--}}
                                                          {{--<path d="M0,0v100h100V0H0z M60.943,46.641c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C67.922,43.986,64.745,46.641,60.943,46.641z"></path>--}}
                                                      {{--</clipPath>--}}
                                                      {{--<clipPath id="cloudFillClip">--}}
                                                          {{--<path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>--}}
                                                      {{--</clipPath>--}}
                                                      {{--<g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleMoon">--}}
                                                          {{--<g clip-path="url(#cloudFillClip)">--}}
                                                              {{--<g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud" clip-path="url(#moonCloudFillClip)">--}}
                                                                  {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_moon" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>--}}
                                                              {{--</g>--}}
                                                          {{--</g>--}}
                                                          {{--<g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">--}}
                                                              {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" d="M42.001,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2.001-0.895-2.001-2v-3.998C40,54.538,40.896,53.644,42.001,53.644z"></path>--}}
                                                              {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M49.999,53.644c1.104,0,2,0.896,2,2v4c0,1.104-0.896,2-2,2s-1.998-0.896-1.998-2v-4C48.001,54.54,48.896,53.644,49.999,53.644z"></path>--}}
                                                              {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M57.999,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2-0.895-2-2v-3.998C55.999,54.538,56.894,53.644,57.999,53.644z"></path>--}}
                                                          {{--</g>--}}
                                                          {{--<g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip)">--}}
                                                              {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.944v-4.381c2.387-1.386,3.998-3.961,3.998-6.92c0-4.418-3.58-8-7.998-8c-1.603,0-3.084,0.481-4.334,1.291c-1.232-5.316-5.973-9.29-11.664-9.29c-6.628,0-11.999,5.372-11.999,12c0,3.549,1.55,6.729,3.998,8.926v4.914c-4.776-2.769-7.998-7.922-7.998-13.84c0-8.836,7.162-15.999,15.999-15.999c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.336-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12C71.997,58.864,68.655,63.296,63.999,64.944z"></path>--}}
                                                          {{--</g>--}}
                                                      {{--</g>--}}
                                                  {{--</svg>--}}
                                              {{--</div>--}}
                                          {{--</div>--}}
                                      {{--</div>--}}
                                  {{--</div>--}}
                              {{--</div>--}}
                              {{--<!-- Weather-card-2 end -->--}}
                              {{--<div class="col-md-12 col-xl-4">--}}
                                  {{--<div class="row">--}}
                                      {{--<!-- Quick note card start -->--}}
                                      {{--<div class="col-sm-12">--}}
                                          {{--<div class="card borderless-card">--}}
                                              {{--<div class="card-block-big bg-primary quick-note-card">--}}
                                                  {{--<h6>Quick Note</h6>--}}
                                                  {{--<h2>What's on Your Mind .. ?</h2>--}}
                                                  {{--<div class="text-right">--}}
                                                      {{--<button class="btn btn-primary btn-outline-primary">Save</button>--}}
                                                  {{--</div>--}}
                                              {{--</div>--}}
                                          {{--</div>--}}
                                      {{--</div>--}}
                                      {{--<!-- Quick note card end -->--}}
                                      {{--<!-- Designer card start -->--}}
                                      {{--<div class="col-sm-12">--}}
                                          {{--<div class="card social-card-1">--}}
                                              {{--<div class="card-block-big">--}}
                                                  {{--<div class="media">--}}
                                                      {{--<div class="media-left">--}}
                                                          {{--<a href="#!">--}}
                                                              {{--<img class="img-fluid img-thumbnail img-circle img-100" src="assets/images/user-card/img-round1.jpg" alt="Profile-user">--}}
                                                          {{--</a>--}}
                                                      {{--</div>--}}
                                                      {{--<div class="media-body">--}}
                                                          {{--<h4 class="media-heading m-b-15">John Martin</h4>--}}
                                                          {{--<h6 class="f-w-300">Grphics Designer</h6>--}}
                                                      {{--</div>--}}
                                                  {{--</div>--}}
                                              {{--</div>--}}
                                              {{--<div class="card-footer">--}}
                                                  {{--<div class="row text-center">--}}
                                                      {{--<div class="col-sm-4">--}}
                                                          {{--<div class="social-media">--}}
                                                              {{--<i class="icofont icofont-heart-alt"></i>--}}
                                                              {{--<h5 class="counter">2587</h5>--}}
                                                          {{--</div>--}}
                                                      {{--</div>--}}
                                                      {{--<div class="col-sm-4">--}}
                                                          {{--<div class="social-media">--}}
                                                              {{--<i class="icofont icofont-ui-user"></i>--}}
                                                              {{--<h5 class="counter">5987</h5>--}}
                                                          {{--</div>--}}
                                                      {{--</div>--}}
                                                      {{--<div class="col-sm-4">--}}
                                                          {{--<div class="social-media">--}}
                                                              {{--<i class="icofont icofont-eye-alt"></i>--}}
                                                              {{--<h5 class="counter">58,158</h5>--}}
                                                          {{--</div>--}}
                                                      {{--</div>--}}
                                                  {{--</div>--}}
                                              {{--</div>--}}
                                          {{--</div>--}}
                                      {{--</div>--}}
                                      {{--<!-- Designer card end -->--}}
                                  {{--</div>--}}
                              {{--</div>--}}
                              {{--<!-- Roundless user card start -->--}}
                              {{--<div class="col-md-6 col-xl-4">--}}
                                  {{--<div class="card widget-profile-card-2">--}}
                                      {{--<img class="img-fluid" src="assets/images/slider/slider5.jpg" alt="card-style-1">--}}
                                      {{--<div class="card-footer bg-inverse">--}}
                                          {{--<div class="row text-center">--}}
                                              {{--<div class="col-sm-4">--}}
                                                  {{--<a href="#!">--}}
                                                      {{--<i class="icofont icofont-social-twitter f-24"></i>--}}
                                                  {{--</a>--}}
                                              {{--</div>--}}
                                              {{--<div class="col-sm-4">--}}
                                                  {{--<a href="#!">--}}
                                                      {{--<i class="icofont icofont-social-facebook f-24"></i>--}}
                                                  {{--</a>--}}
                                              {{--</div>--}}
                                              {{--<div class="col-sm-4">--}}
                                                  {{--<a href="#!">--}}
                                                      {{--<i class="icofont icofont-brand-linkedin f-24"></i>--}}
                                                  {{--</a>--}}
                                              {{--</div>--}}
                                          {{--</div>--}}
                                      {{--</div>--}}
                                      {{--<div class="card-block text-center">--}}
                                          {{--<h3>Jenny Joe</h3>--}}
                                          {{--<p>Web Designer</p>--}}
                                          {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci a, rem accusantium recusandae beatae.--}}
                                      {{--</div>--}}
                                  {{--</div>--}}
                              {{--</div>--}}
                              {{--<!-- Roundless user card end -->--}}
                              {{--<!-- Top round user-card start -->--}}
                              {{--<div class="col-md-6 col-xl-4">--}}
                                  {{--<div class="card">--}}
                                      {{--<div class="widget-profile-card-3">--}}
                                          {{--<img class="img-fluid img-thumbnail" src="assets/images/user-card/img-round1.jpg" alt="Profile-user">--}}
                                      {{--</div>--}}
                                      {{--<div class="card-block text-center">--}}
                                          {{--<h3>John Doe</h3>--}}
                                          {{--<p>Web Designer</p>--}}
                                          {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci a, rem accusantium recusandae beatae.--}}
                                      {{--</div>--}}
                                      {{--<div class="card-footer bg-inverse">--}}
                                          {{--<div class="row text-center">--}}
                                              {{--<div class="col-sm-4">--}}
                                                  {{--<h4>400</h4>--}}
                                                  {{--<span>Designs</span>--}}
                                              {{--</div>--}}
                                              {{--<div class="col-sm-4">--}}
                                                  {{--<h4>90</h4>--}}
                                                  {{--<span>Projects</span>--}}
                                              {{--</div>--}}
                                              {{--<div class="col-sm-4">--}}
                                                  {{--<h4>70</h4>--}}
                                                  {{--<span>Devlopments</span>--}}
                                              {{--</div>--}}
                                          {{--</div>--}}
                                      {{--</div>--}}
                                  {{--</div>--}}
                              {{--</div>--}}
                              {{--<!-- Top round user-card end -->--}}
                              {{--<!-- Morris site-visit chart start -->--}}
                              {{--<div class="col-md-12 col-xl-4">--}}
                                  {{--<div class="card">--}}
                                      {{--<div class="card-header">--}}
                                          {{--<h5>Total Visitors</h5>--}}
                                      {{--</div>--}}
                                      {{--<div class="card-block">--}}
                                          {{--<div id="morris-site-visit"></div>--}}
                                      {{--</div>--}}
                                  {{--</div>--}}
                              {{--</div>--}}
                              {{--<!-- Morris site-visit chart end -->--}}
                              {{--<!-- Social user card start -->--}}
                              {{--<div class="col-md-6 col-xl-3">--}}
                                  {{--<div class="card borderless-card">--}}
                                      {{--<div class="profile-card">--}}
                                          {{--<img class="img-fluid" src="assets/images/widget/profile-person1.png" alt="">--}}
                                          {{--<div class="card-block">--}}
                                              {{--<h3>John Steve</h3>--}}
                                              {{--<p>UI/UX Designer at CreativesCastle Studio</p>--}}
                                              {{--<button class="btn btn-info">+ Follow</button>--}}
                                          {{--</div>--}}
                                      {{--</div>--}}
                                      {{--<div class="card-footer bg-inverse">--}}
                                          {{--<div class="row text-center">--}}
                                              {{--<div class="col-sm-4">--}}
                                                  {{--<h4>134</h4>--}}
                                                  {{--<span>Shots</span>--}}
                                              {{--</div>--}}
                                              {{--<div class="col-sm-4">--}}
                                                  {{--<h4>13,227</h4>--}}
                                                  {{--<span>Shots</span>--}}
                                              {{--</div>--}}
                                              {{--<div class="col-sm-4">--}}
                                                  {{--<h4>488</h4>--}}
                                                  {{--<span>Shots</span>--}}
                                              {{--</div>--}}
                                          {{--</div>--}}
                                      {{--</div>--}}
                                  {{--</div>--}}
                              {{--</div>--}}
                              {{--<!-- Social user card end -->--}}
                              {{--<!-- Total Income chart start -->--}}
                              {{--<div class="col-md-6 col-xl-9">--}}
                                  {{--<div class="card">--}}
                                      {{--<div class="card-header">--}}
                                          {{--<h5>Today Income</h5>--}}
                                      {{--</div>--}}
                                      {{--<div id="areachart" class="p-t-40"></div>--}}
                                      {{--<div class="card-block">--}}
                                          {{--<div class="row">--}}
                                              {{--<div class="col-sm-4">--}}
                                                  {{--<h6 class="m-b-10">Page Visits</h6>--}}
                                                  {{--<h6>1265</h6>--}}
                                              {{--</div>--}}
                                              {{--<div class="col-sm-4">--}}
                                                  {{--<h6 class="m-b-10">New Visitors</h6>--}}
                                                  {{--<h6>67%</h6>--}}
                                              {{--</div>--}}
                                              {{--<div class="col-sm-4">--}}
                                                  {{--<h6 class="m-b-10">Total Income Rate</h6>--}}
                                                  {{--<h6>4.8</h6>--}}
                                              {{--</div>--}}
                                          {{--</div>--}}
                                      {{--</div>--}}
                                      {{--<div class="card-footer widget-content-footer">--}}
                                          {{--<p class="m-b-0">This is standard panel footer</p>--}}
                                      {{--</div>--}}
                                  {{--</div>--}}
                              {{--</div>--}}
                              {{--<!-- Total Income chart end -->--}}
                              {{--<!-- User detail table start -->--}}
                              {{--<div class="col-md-6 col-xl-9">--}}
                                  {{--<div class="row">--}}
                                      {{--<div class="col-sm-12">--}}
                                          {{--<div class="card table-1-card">--}}
                                              {{--<div class="card-block">--}}
                                                  {{--<div class="table-responsive">--}}
                                                      {{--<table class="table">--}}
                                                          {{--<thead>--}}
                                                          {{--<tr class="text-capitalize">--}}
                                                              {{--<th>Type</th>--}}
                                                              {{--<th>Lead Name</th>--}}
                                                              {{--<th>Views</th>--}}
                                                              {{--<th>Favourites</th>--}}
                                                              {{--<th>Last Visit</th>--}}
                                                              {{--<th>Last Action</th>--}}
                                                              {{--<th>Last Date</th>--}}
                                                          {{--</tr>--}}
                                                          {{--</thead>--}}
                                                          {{--<tbody>--}}
                                                          {{--<tr>--}}
                                                              {{--<td><a href="#!">Buyer</a>--}}
                                                              {{--</td>--}}
                                                              {{--<td>Denish Ann</td>--}}
                                                              {{--<td>153</td>--}}
                                                              {{--<td>100</td>--}}
                                                              {{--<td>20</td>--}}
                                                              {{--<td>9.23 A.M.</td>--}}
                                                              {{--<td>9/27/2015</td>--}}
                                                          {{--</tr>--}}
                                                          {{--<tr>--}}
                                                              {{--<td><a class="text-danger" href="#!">Lanload</a>--}}
                                                              {{--</td>--}}
                                                              {{--<td>John Doe</td>--}}
                                                              {{--<td>121</td>--}}
                                                              {{--<td>100</td>--}}
                                                              {{--<td>20</td>--}}
                                                              {{--<td>6.23 A.M.</td>--}}
                                                              {{--<td>8/27/2015</td>--}}
                                                          {{--</tr>--}}
                                                          {{--<tr>--}}
                                                              {{--<td><a href="#!">Buyer</a>--}}
                                                              {{--</td>--}}
                                                              {{--<td>Henry Joe</td>--}}
                                                              {{--<td>154</td>--}}
                                                              {{--<td>140</td>--}}
                                                              {{--<td>30</td>--}}
                                                              {{--<td>7.54 P.M.</td>--}}
                                                              {{--<td>4/30/2015</td>--}}
                                                          {{--</tr>--}}
                                                          {{--<tr>--}}
                                                              {{--<td><a class="text-danger" href="#!">Lanload</a>--}}
                                                              {{--</td>--}}
                                                              {{--<td>Sara Soudein</td>--}}
                                                              {{--<td>153</td>--}}
                                                              {{--<td>100</td>--}}
                                                              {{--<td>20</td>--}}
                                                              {{--<td>9.23 A.M.</td>--}}
                                                              {{--<td>5/20/2016</td>--}}
                                                          {{--</tr>--}}
                                                          {{--<tr>--}}
                                                              {{--<td><a href="#!">Buyer</a>--}}
                                                              {{--</td>--}}
                                                              {{--<td>Denish Ann</td>--}}
                                                              {{--<td>153</td>--}}
                                                              {{--<td>100</td>--}}
                                                              {{--<td>20</td>--}}
                                                              {{--<td>9.23 A.M.</td>--}}
                                                              {{--<td>3/26/2015</td>--}}
                                                          {{--</tr>--}}
                                                          {{--<tr>--}}
                                                              {{--<td><a class="text-info" href="#!">Lanload</a>--}}
                                                              {{--</td>--}}
                                                              {{--<td>Stefen Joe</td>--}}
                                                              {{--<td>153</td>--}}
                                                              {{--<td>100</td>--}}
                                                              {{--<td>20</td>--}}
                                                              {{--<td>11.45 A.M.</td>--}}
                                                              {{--<td>5/20/2017</td>--}}
                                                          {{--</tr>--}}
                                                          {{--<tr>--}}
                                                              {{--<td><a href="#!">Buyer</a>--}}
                                                              {{--</td>--}}
                                                              {{--<td>Mark Backlus</td>--}}
                                                              {{--<td>153</td>--}}
                                                              {{--<td>100</td>--}}
                                                              {{--<td>20</td>--}}
                                                              {{--<td>12.40 A.M.</td>--}}
                                                              {{--<td>3/27/2017</td>--}}
                                                          {{--</tr>--}}
                                                          {{--</tbody>--}}
                                                      {{--</table>--}}
                                                  {{--</div>--}}
                                              {{--</div>--}}
                                          {{--</div>--}}
                                      {{--</div>--}}
                                      {{--<!-- System clock start -->--}}
                                      {{--<div class="col-sm-12">--}}
                                          {{--<div class="card borderless-card">--}}
                                              {{--<div class="card-block clock-widget">--}}
                                                  {{--<div id="current-time"></div>--}}
                                                  {{--<h5>Sunday 30th April , 2017</h5>--}}
                                                  {{--<i class="icofont icofont-ui-alarm basic-alarm"></i>--}}
                                                  {{--<i class="icofont icofont-ui-alarm bg-alarm"></i>--}}
                                              {{--</div>--}}
                                          {{--</div>--}}
                                      {{--</div>--}}
                                      {{--<!-- System clock end -->--}}
                                  {{--</div>--}}
                              {{--</div>--}}
                              {{--<!-- User detail table end -->--}}
                              {{--<!-- Weather card start -->--}}
                              {{--<div class="col-md-6 col-xl-3">--}}
                                  {{--<div class="card borderless-card">--}}
                                      {{--<div class="weather-bg-card">--}}
                                          {{--<img class="img-fluid" src="assets/images/widget/weather-card-bg.png" alt="">--}}
                                          {{--<div class="card-block-big">--}}
                                              {{--<h5>New York , NY , USA</h5>--}}
                                              {{--<span class="d-block">Sunday , 6:00 AM</span>--}}
                                          {{--</div>--}}
                                          {{--<div class="card-block">--}}
                                              {{--<h1 class="weather-temp">8°</h1>--}}
                                              {{--<h5>Clear Today</h5>--}}
                                          {{--</div>--}}
                                      {{--</div>--}}
                                      {{--<div class="card-footer">--}}
                                          {{--<div class="row text-center">--}}
                                              {{--<div class="col-sm-3">--}}
                                                  {{--<h5>SUN</h5>--}}
                                                  {{--<svg version="1.1" id="cloudSnow" class="climacon climacon_cloudSnow" viewBox="15 15 70 70">--}}
                                                      {{--<g class="climacon_iconWrap climacon_iconWrap-cloudSnow">--}}
                                                          {{--<g class="climacon_wrapperComponent climacon_wrapperComponent-snow" clip-path="url(#snowFillClip)">--}}
                                                              {{--<circle class="climacon_component climacon_component-stroke climacon_component-stroke_snow climacon_component-stroke_snow-left" cx="42.001" cy="59.641" r="2" />--}}
                                                              {{--<circle class="climacon_component climacon_component-stroke climacon_component-stroke_snow climacon_component-stroke_snow-middle" cx="50.001" cy="59.641" r="2" />--}}
                                                              {{--<circle class="climacon_component climacon_component-stroke climacon_component-stroke_snow climacon_component-stroke_snow-right" cx="57.999" cy="59.641" r="2" />--}}
                                                          {{--</g>--}}
                                                          {{--<g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">--}}
                                                              {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.943v-4.381c2.39-1.386,3.999-3.963,3.999-6.922c0-4.417-3.581-7.999-7.999-7.999c-1.601,0-3.083,0.48-4.333,1.291c-1.23-5.317-5.974-9.291-11.665-9.291c-6.627,0-11.998,5.373-11.998,12c0,3.549,1.55,6.729,4,8.924v4.916c-4.777-2.769-8-7.922-8-13.84c0-8.836,7.163-15.999,15.998-15.999c6.004,0,11.229,3.312,13.965,8.204c0.664-0.113,1.337-0.205,2.033-0.205c6.627,0,11.999,5.373,11.999,11.999C71.998,58.863,68.654,63.293,63.999,64.943z" />--}}
                                                          {{--</g>--}}
                                                      {{--</g>--}}
                                                  {{--</svg>--}}
                                                  {{--<span>18° 12°</span>--}}
                                              {{--</div>--}}
                                              {{--<div class="col-sm-3">--}}
                                                  {{--<h5>MON</h5>--}}
                                                  {{--<svg version="1.1" id="cloudDrizzleSunAlt" class="climacon climacon_cloudDrizzleSunAlt" viewBox="15 15 70 70">--}}
                                                      {{--<clipPath id="sunCloudFillClip">--}}
                                                          {{--<path d="M15,15v70h70V15H15z M57.945,49.641c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C65.943,46.059,62.362,49.641,57.945,49.641z" />--}}
                                                      {{--</clipPath>--}}
                                                      {{--<clipPath id="cloudSunFillClip">--}}
                                                          {{--<path d="M15,15v70h20.947V63.481c-4.778-2.767-8-7.922-8-13.84c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,5.262-3.394,9.723-8.107,11.341V85H85V15H15z" />--}}
                                                      {{--</clipPath>--}}
                                                      {{--<g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleSunAlt">--}}
                                                          {{--<g clip-path="url(#cloudSunFillClip)">--}}
                                                              {{--<g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">--}}
                                                                  {{--<g class="climacon_componentWrap climacon_componentWrap_sunSpoke">--}}
                                                                      {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z" />--}}
                                                                      {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z" />--}}
                                                                      {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z" />--}}
                                                                      {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z" />--}}
                                                                      {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z" />--}}
                                                                      {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z" />--}}
                                                                      {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z" />--}}
                                                                      {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z" />--}}
                                                                  {{--</g>--}}
                                                                  {{--<g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody" clip-path="url(#sunCloudFillClip)">--}}
                                                                      {{--<circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999" />--}}
                                                                  {{--</g>--}}
                                                              {{--</g>--}}
                                                          {{--</g>--}}
                                                          {{--<g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">--}}
                                                              {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" id="Drizzle-Left_1_" d="M56.969,57.672l-2.121,2.121c-1.172,1.172-1.172,3.072,0,4.242c1.17,1.172,3.07,1.172,4.24,0c1.172-1.17,1.172-3.07,0-4.242L56.969,57.672z" />--}}
                                                              {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M50.088,57.672l-2.119,2.121c-1.174,1.172-1.174,3.07,0,4.242c1.17,1.172,3.068,1.172,4.24,0s1.172-3.07,0-4.242L50.088,57.672z" />--}}
                                                              {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M43.033,57.672l-2.121,2.121c-1.172,1.172-1.172,3.07,0,4.242s3.07,1.172,4.244,0c1.172-1.172,1.172-3.07,0-4.242L43.033,57.672z" />--}}
                                                          {{--</g>--}}
                                                          {{--<g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip)">--}}
                                                              {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.944v-4.381c2.387-1.386,3.998-3.961,3.998-6.92c0-4.418-3.58-8-7.998-8c-1.603,0-3.084,0.481-4.334,1.291c-1.232-5.316-5.973-9.29-11.664-9.29c-6.628,0-11.999,5.372-11.999,12c0,3.549,1.55,6.729,3.998,8.926v4.914c-4.776-2.769-7.998-7.922-7.998-13.84c0-8.836,7.162-15.999,15.999-15.999c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.336-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12C71.997,58.864,68.655,63.296,63.999,64.944z" />--}}
                                                          {{--</g>--}}
                                                      {{--</g>--}}
                                                  {{--</svg>--}}
                                                  {{--<span>16° 13°</span>--}}
                                              {{--</div>--}}
                                              {{--<div class="col-sm-3">--}}
                                                  {{--<h5>TUE</h5>--}}
                                                  {{--<svg version="1.1" id="cloudRain" class="climacon climacon_cloudRain" viewBox="15 15 70 70">--}}
                                                      {{--<clipPath id="cloudFillClip">--}}
                                                          {{--<path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z" />--}}
                                                      {{--</clipPath>--}}
                                                      {{--<g class="climacon_iconWrap climacon_iconWrap-cloudRain">--}}
                                                          {{--<g class="climacon_wrapperComponent climacon_wrapperComponent-rain">--}}
                                                              {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z" />--}}
                                                              {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z" />--}}
                                                              {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z" />--}}
                                                              {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z" />--}}
                                                              {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z" />--}}
                                                              {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z" />--}}
                                                          {{--</g>--}}
                                                          {{--<g class="climacon_wrapperComponent climacon_wrapperComponent_cloud" clip-path="url(#cloudFillClip)">--}}
                                                              {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.943,64.941v-4.381c2.389-1.384,4-3.961,4-6.92c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.48-4.334,1.291c-1.23-5.317-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.998c0,3.549,1.551,6.728,4,8.924v4.916c-4.777-2.768-8-7.922-8-13.84c0-8.835,7.163-15.997,15.998-15.997c6.004,0,11.229,3.311,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.372,11.998,12C71.941,58.863,68.602,63.293,63.943,64.941z" />--}}
                                                          {{--</g>--}}
                                                      {{--</g>--}}
                                                  {{--</svg>--}}
                                                  {{--<span>11° 7°</span>--}}
                                              {{--</div>--}}
                                              {{--<div class="col-sm-3">--}}
                                                  {{--<h5>WED</h5>--}}
                                                  {{--<svg version="1.1" id="cloudDrizzleMoon" class="climacon climacon_cloudDrizzleMoon" viewBox="15 15 70 70">--}}
                                                      {{--<clipPath id="moonCloudFillClip">--}}
                                                          {{--<path d="M0,0v100h100V0H0z M60.943,46.641c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C67.922,43.986,64.745,46.641,60.943,46.641z" />--}}
                                                      {{--</clipPath>--}}
                                                      {{--<clipPath id="cloudFillClip">--}}
                                                          {{--<path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z" />--}}
                                                      {{--</clipPath>--}}
                                                      {{--<g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleMoon">--}}
                                                          {{--<g clip-path="url(#cloudFillClip)">--}}
                                                              {{--<g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud" clip-path="url(#moonCloudFillClip)">--}}
                                                                  {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_moon" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z" />--}}
                                                              {{--</g>--}}
                                                          {{--</g>--}}
                                                          {{--<g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">--}}
                                                              {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" d="M42.001,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2.001-0.895-2.001-2v-3.998C40,54.538,40.896,53.644,42.001,53.644z" />--}}
                                                              {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M49.999,53.644c1.104,0,2,0.896,2,2v4c0,1.104-0.896,2-2,2s-1.998-0.896-1.998-2v-4C48.001,54.54,48.896,53.644,49.999,53.644z" />--}}
                                                              {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M57.999,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2-0.895-2-2v-3.998C55.999,54.538,56.894,53.644,57.999,53.644z" />--}}
                                                          {{--</g>--}}
                                                          {{--<g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip)">--}}
                                                              {{--<path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.944v-4.381c2.387-1.386,3.998-3.961,3.998-6.92c0-4.418-3.58-8-7.998-8c-1.603,0-3.084,0.481-4.334,1.291c-1.232-5.316-5.973-9.29-11.664-9.29c-6.628,0-11.999,5.372-11.999,12c0,3.549,1.55,6.729,3.998,8.926v4.914c-4.776-2.769-7.998-7.922-7.998-13.84c0-8.836,7.162-15.999,15.999-15.999c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.336-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12C71.997,58.864,68.655,63.296,63.999,64.944z" />--}}
                                                          {{--</g>--}}
                                                      {{--</g>--}}
                                                  {{--</svg>--}}
                                                  {{--<span>21° 24°</span>--}}
                                              {{--</div>--}}
                                          {{--</div>--}}
                                      {{--</div>--}}
                                  {{--</div>--}}
                              {{--</div>--}}
                              {{--<!-- Weather card end -->--}}
                              {{--<!-- Monthly Interest chart start -->--}}
                              {{--<div class="col-md-12 col-xl-6">--}}
                                  {{--<div class="card">--}}
                                      {{--<div class="card-header">--}}
                                          {{--<h5>Monthly Intrest</h5>--}}
                                      {{--</div>--}}
                                      {{--<div class="card-block">--}}
                                          {{--<div id="chart"></div>--}}
                                      {{--</div>--}}
                                      {{--<div class="card-footer">--}}
                                          {{--<p class="m-b-0">Total Monthly Intrest</p>--}}
                                      {{--</div>--}}
                                  {{--</div>--}}
                              {{--</div>--}}
                              {{--<!-- Monthly Interest chart end -->--}}
                              {{--<!-- Horizontal Timeline start -->--}}
                              {{--<div class="col-md-12 col-xl-6">--}}
                                  {{--<div class="card">--}}
                                      {{--<div class="card-block">--}}
                                          {{--<div class="cd-horizontal-timeline">--}}
                                              {{--<div class="timeline">--}}
                                                  {{--<div class="events-wrapper">--}}
                                                      {{--<div class="events">--}}
                                                          {{--<ol>--}}
                                                              {{--<li><a href="#0" data-date="16/01/2014" class="selected">16 Jan</a></li>--}}
                                                              {{--<li><a href="#0" data-date="28/02/2014">28 Feb</a></li>--}}
                                                              {{--<li><a href="#0" data-date="20/04/2014">20 Mar</a></li>--}}
                                                              {{--<li><a href="#0" data-date="20/05/2014">20 May</a></li>--}}
                                                              {{--<li><a href="#0" data-date="09/07/2014">09 Jul</a></li>--}}
                                                              {{--<li><a href="#0" data-date="30/08/2014">30 Aug</a></li>--}}
                                                              {{--<li><a href="#0" data-date="15/09/2014">15 Sep</a></li>--}}
                                                              {{--<li><a href="#0" data-date="01/11/2014">01 Nov</a></li>--}}
                                                              {{--<li><a href="#0" data-date="10/12/2014">10 Dec</a></li>--}}
                                                              {{--<li><a href="#0" data-date="19/01/2015">29 Jan</a></li>--}}
                                                              {{--<li><a href="#0" data-date="03/03/2015">3 Mar</a></li>--}}
                                                          {{--</ol>--}}
                                                          {{--<span class="filling-line" aria-hidden="true"></span>--}}
                                                      {{--</div>--}}
                                                      {{--<!-- .events -->--}}
                                                  {{--</div>--}}
                                                  {{--<!-- .events-wrapper -->--}}
                                                  {{--<ul class="cd-timeline-navigation">--}}
                                                      {{--<li><a href="#0" class="prev inactive">Prev</a></li>--}}
                                                      {{--<li><a href="#0" class="next">Next</a></li>--}}
                                                  {{--</ul>--}}
                                                  {{--<!-- .cd-timeline-navigation -->--}}
                                              {{--</div>--}}
                                              {{--<!-- .timeline -->--}}
                                              {{--<div class="events-content">--}}
                                                  {{--<ol>--}}
                                                      {{--<li class="selected" data-date="16/01/2014">--}}
                                                          {{--<h2>Horizontal Timeline</h2>--}}
                                                          {{--<em>January 16th, 2014</em>--}}
                                                          {{--<p class="m-b-0">--}}
                                                              {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi--}}
                                                              {{--reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.--}}
                                                          {{--</p>--}}
                                                          {{--<div class="m-t-20 d-timeline-btn">--}}
                                                              {{--<button class="btn btn-danger">Read More</button>--}}
                                                              {{--<button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>--}}
                                                          {{--</div>--}}
                                                      {{--</li>--}}
                                                      {{--<li data-date="28/02/2014">--}}
                                                          {{--<h2>Event title here</h2>--}}
                                                          {{--<em>February 28th, 2014</em>--}}
                                                          {{--<p class="m-b-0">--}}
                                                              {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi--}}
                                                              {{--reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.--}}
                                                          {{--</p>--}}
                                                          {{--<div class="m-t-20 d-timeline-btn">--}}
                                                              {{--<button class="btn btn-danger">Read More</button>--}}
                                                              {{--<button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>--}}
                                                          {{--</div>--}}
                                                      {{--</li>--}}
                                                      {{--<li data-date="20/04/2014">--}}
                                                          {{--<h2>Event title here</h2>--}}
                                                          {{--<em>March 20th, 2014</em>--}}
                                                          {{--<p class="m-b-0">--}}
                                                              {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi--}}
                                                              {{--reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.--}}
                                                          {{--</p>--}}
                                                          {{--<div class="m-t-20 d-timeline-btn">--}}
                                                              {{--<button class="btn btn-danger">Read More</button>--}}
                                                              {{--<button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>--}}
                                                          {{--</div>--}}
                                                      {{--</li>--}}
                                                      {{--<li data-date="20/05/2014">--}}
                                                          {{--<h2>Event title here</h2>--}}
                                                          {{--<em>May 20th, 2014</em>--}}
                                                          {{--<p class="m-b-0">--}}
                                                              {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi--}}
                                                              {{--reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.--}}
                                                          {{--</p>--}}
                                                          {{--<div class="m-t-20 d-timeline-btn">--}}
                                                              {{--<button class="btn btn-danger">Read More</button>--}}
                                                              {{--<button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>--}}
                                                          {{--</div>--}}
                                                      {{--</li>--}}
                                                      {{--<li data-date="09/07/2014">--}}
                                                          {{--<h2>Event title here</h2>--}}
                                                          {{--<em>July 9th, 2014</em>--}}
                                                          {{--<p class="m-b-0">--}}
                                                              {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi--}}
                                                              {{--reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.--}}
                                                          {{--</p>--}}
                                                          {{--<div class="m-t-20 d-timeline-btn">--}}
                                                              {{--<button class="btn btn-danger">Read More</button>--}}
                                                              {{--<button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>--}}
                                                          {{--</div>--}}
                                                      {{--</li>--}}
                                                      {{--<li data-date="30/08/2014">--}}
                                                          {{--<h2>Event title here</h2>--}}
                                                          {{--<em>August 30th, 2014</em>--}}
                                                          {{--<p class="m-b-0">--}}
                                                              {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi--}}
                                                              {{--reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.--}}
                                                          {{--</p>--}}
                                                          {{--<div class="m-t-20 d-timeline-btn">--}}
                                                              {{--<button class="btn btn-danger">Read More</button>--}}
                                                              {{--<button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>--}}
                                                          {{--</div>--}}
                                                      {{--</li>--}}
                                                      {{--<li data-date="15/09/2014">--}}
                                                          {{--<h2>Event title here</h2>--}}
                                                          {{--<em>September 15th, 2014</em>--}}
                                                          {{--<p class="m-b-0">--}}
                                                              {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi--}}
                                                              {{--reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.--}}
                                                          {{--</p>--}}
                                                          {{--<div class="m-t-20 d-timeline-btn">--}}
                                                              {{--<button class="btn btn-danger">Read More</button>--}}
                                                              {{--<button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>--}}
                                                          {{--</div>--}}
                                                      {{--</li>--}}
                                                      {{--<li data-date="01/11/2014">--}}
                                                          {{--<h2>Event title here</h2>--}}
                                                          {{--<em>November 1st, 2014</em>--}}
                                                          {{--<p class="m-b-0">--}}
                                                              {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi--}}
                                                              {{--reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.--}}
                                                          {{--</p>--}}
                                                          {{--<div class="m-t-20 d-timeline-btn">--}}
                                                              {{--<button class="btn btn-danger">Read More</button>--}}
                                                              {{--<button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>--}}
                                                          {{--</div>--}}
                                                      {{--</li>--}}
                                                      {{--<li data-date="10/12/2014">--}}
                                                          {{--<h2>Event title here</h2>--}}
                                                          {{--<em>December 10th, 2014</em>--}}
                                                          {{--<p class="m-b-0">--}}
                                                              {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi--}}
                                                              {{--reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.--}}
                                                          {{--</p>--}}
                                                          {{--<div class="m-t-20 d-timeline-btn">--}}
                                                              {{--<button class="btn btn-danger">Read More</button>--}}
                                                              {{--<button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>--}}
                                                          {{--</div>--}}
                                                      {{--</li>--}}
                                                      {{--<li data-date="19/01/2015">--}}
                                                          {{--<h2>Event title here</h2>--}}
                                                          {{--<em>January 19th, 2015</em>--}}
                                                          {{--<p class="m-b-0">--}}
                                                              {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi--}}
                                                              {{--reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.--}}
                                                          {{--</p>--}}
                                                          {{--<div class="m-t-20 d-timeline-btn">--}}
                                                              {{--<button class="btn btn-danger">Read More</button>--}}
                                                              {{--<button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>--}}
                                                          {{--</div>--}}
                                                      {{--</li>--}}
                                                      {{--<li data-date="03/03/2015">--}}
                                                          {{--<h2>Event title here</h2>--}}
                                                          {{--<em>March 3rd, 2015</em>--}}
                                                          {{--<p class="m-b-0">--}}
                                                              {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi--}}
                                                              {{--reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.--}}
                                                          {{--</p>--}}
                                                          {{--<div class="m-t-20 d-timeline-btn">--}}
                                                              {{--<button class="btn btn-danger">Read More</button>--}}
                                                              {{--<button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>--}}
                                                          {{--</div>--}}
                                                      {{--</li>--}}
                                                  {{--</ol>--}}
                                              {{--</div>--}}
                                              {{--<!-- .events-content -->--}}
                                          {{--</div>--}}
                                      {{--</div>--}}
                                  {{--</div>--}}
                              {{--</div>--}}
                              {{--<!-- Horizontal Timeline end -->--}}
                              {{--<!-- Product Selling table start -->--}}
                              {{--<div class="col-md-12 col-xl-8">--}}
                                  {{--<div class="card">--}}
                                      {{--<div class="card-header">--}}
                                          {{--<h5>Product Selling</h5>--}}
                                      {{--</div>--}}
                                      {{--<div class="card-block">--}}
                                          {{--<div class="table-responsive">--}}
                                              {{--<div class="dt-responsive table-responsive">--}}
                                                  {{--<table id="e-product-list" class="table table-bordered w-100" cellspacing="0">--}}
                                                      {{--<thead>--}}
                                                      {{--<tr>--}}
                                                          {{--<th>Image</th>--}}
                                                          {{--<th>Product Name</th>--}}
                                                          {{--<th>Amount</th>--}}
                                                          {{--<th>Stock</th>--}}
                                                          {{--<th>Action</th>--}}
                                                      {{--</tr>--}}
                                                      {{--</thead>--}}
                                                      {{--<tbody>--}}
                                                      {{--<tr>--}}
                                                          {{--<td class="pro-list-img">--}}
                                                              {{--<img src="assets/images/product-list/pro-l1.png" class="img-fluid" alt="tbl">--}}
                                                          {{--</td>--}}
                                                          {{--<td class="pro-name">--}}
                                                              {{--<h6>Frock Designs</h6>--}}
                                                              {{--<span>Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</span>--}}
                                                          {{--</td>--}}
                                                          {{--<td>$456</td>--}}
                                                          {{--<td>--}}
                                                              {{--<label class="label label-danger">Out Of Stock</label>--}}
                                                          {{--</td>--}}
                                                          {{--<td class="action-icon">--}}
                                                              {{--<a href="#!" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>--}}
                                                              {{--<a href="#!" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>--}}
                                                          {{--</td>--}}
                                                      {{--</tr>--}}
                                                      {{--<tr>--}}
                                                          {{--<td class="pro-list-img">--}}
                                                              {{--<img src="assets/images/product-list/pro-l6.png" class="img-fluid" alt="tbl">--}}
                                                          {{--</td>--}}
                                                          {{--<td class="pro-name">--}}
                                                              {{--<h6> Style Tops </h6>--}}
                                                              {{--<span>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</span>--}}
                                                          {{--</td>--}}
                                                          {{--<td>$689</td>--}}
                                                          {{--<td>--}}
                                                              {{--<label class="label label-success">In Stock</label>--}}
                                                          {{--</td>--}}
                                                          {{--<td class="action-icon">--}}
                                                              {{--<a href="#!" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>--}}
                                                              {{--<a href="#!" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>--}}
                                                          {{--</td>--}}
                                                      {{--</tr>--}}
                                                      {{--<tr>--}}
                                                          {{--<td class="pro-list-img">--}}
                                                              {{--<img src="assets/images/product-list/pro-l2.png" class="img-fluid" alt="tbl">--}}
                                                          {{--</td>--}}
                                                          {{--<td class="pro-name">--}}
                                                              {{--<h6> Kurta Women </h6>--}}
                                                              {{--<span>Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</span>--}}
                                                          {{--</td>--}}
                                                          {{--<td>$755</td>--}}
                                                          {{--<td>--}}
                                                              {{--<label class="label label-warning">Low Stock</label>--}}
                                                          {{--</td>--}}
                                                          {{--<td class="action-icon">--}}
                                                              {{--<a href="#!" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>--}}
                                                              {{--<a href="#!" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>--}}
                                                          {{--</td>--}}
                                                      {{--</tr>--}}
                                                      {{--<tr>--}}
                                                          {{--<td class="pro-list-img">--}}
                                                              {{--<img src="assets/images/product-list/pro-l3.png" class="img-fluid" alt="tbl">--}}
                                                          {{--</td>--}}
                                                          {{--<td class="pro-name">--}}
                                                              {{--<h6> T Shirts For Women </h6>--}}
                                                              {{--<span>Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</span>--}}
                                                          {{--</td>--}}
                                                          {{--<td>$989</td>--}}
                                                          {{--<td>--}}
                                                              {{--<label class="label label-success">In Stock</label>--}}
                                                          {{--</td>--}}
                                                          {{--<td class="action-icon">--}}
                                                              {{--<a href="#!" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>--}}
                                                              {{--<a href="#!" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>--}}
                                                          {{--</td>--}}
                                                      {{--</tr>--}}
                                                      {{--<tr>--}}
                                                          {{--<td class="pro-list-img">--}}
                                                              {{--<img src="assets/images/product-list/pro-l4.png" class="img-fluid" alt="tbl">--}}
                                                          {{--</td>--}}
                                                          {{--<td class="pro-name">--}}
                                                              {{--<h6> Black Frock For Women </h6>--}}
                                                              {{--<span>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</span>--}}
                                                          {{--</td>--}}
                                                          {{--<td>$1150</td>--}}
                                                          {{--<td>--}}
                                                              {{--<label class="label label-success">In Stock</label>--}}
                                                          {{--</td>--}}
                                                          {{--<td class="action-icon">--}}
                                                              {{--<a href="#!" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>--}}
                                                              {{--<a href="#!" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>--}}
                                                          {{--</td>--}}
                                                      {{--</tr>--}}
                                                      {{--</tbody>--}}
                                                  {{--</table>--}}
                                              {{--</div>--}}
                                          {{--</div>--}}
                                      {{--</div>--}}
                                  {{--</div>--}}
                              {{--</div>--}}
                              {{--<!-- Product Selling table end -->--}}
                              {{--<!-- User chat box start -->--}}
                              {{--<div class="col-md-12 col-xl-4">--}}
                                  {{--<div class="card widget-chat-box">--}}
                                      {{--<div class="card-header">--}}
                                          {{--<div class="row">--}}
                                              {{--<div class="col-sm-2">--}}
                                                  {{--<i class="icofont icofont-navigation-menu pop-up"></i>--}}
                                              {{--</div>--}}
                                              {{--<div class="col-sm-8 text-center">--}}
                                                  {{--<h5>--}}
                                                      {{--John Henry--}}
                                                  {{--</h5>--}}
                                              {{--</div>--}}
                                              {{--<div class="col-sm-2 text-right">--}}
                                                  {{--<i class="icofont icofont-ui-edit"></i>--}}
                                              {{--</div>--}}
                                          {{--</div>--}}
                                      {{--</div>--}}
                                      {{--<div class="card-block">--}}
                                          {{--<p class="text-center">12:05 A.M.</p>--}}
                                          {{--<div class="media">--}}
                                              {{--<img class="d-flex mr-3 img-circle img-60 img-thumbnail" src="assets/images/user-card/img-round1.jpg" alt="Generic placeholder image">--}}
                                              {{--<div class="media-body send-chat">--}}
                                                  {{--Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at--}}
                                                  {{--<span class="time">3 min ago</span>--}}
                                              {{--</div>--}}
                                          {{--</div>--}}
                                          {{--<div class="media col-sm-8 offset-md-4">--}}
                                              {{--<div class="media-body  receive-chat">--}}
                                                  {{--Cras sit amet nibh libero, in gravida nulla.vel metus scelerisque ante--}}
                                                  {{--<span class="time">--}}
                                        {{--<i class="icofont icofont-check m-r-5"></i>Seen 2 sec ago--}}
                                        {{--</span>--}}
                                              {{--</div>--}}
                                          {{--</div>--}}
                                          {{--<div class="media">--}}
                                              {{--<img class="d-flex mr-3 img-circle img-60 img-thumbnail" src="assets/images/user-card/img-round1.jpg" alt="Generic placeholder image">--}}
                                              {{--<div class="media-body send-chat">--}}
                                                  {{--Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at--}}
                                                  {{--<span class="time">3 min ago</span>--}}
                                              {{--</div>--}}
                                          {{--</div>--}}
                                          {{--<div class="media col-sm-8 offset-md-4">--}}
                                              {{--<div class="media-body receive-chat rc-10">--}}
                                                  {{--Cras sit amet nibh libero, in gravida nulla.Vel metus scelerisque ante--}}
                                              {{--</div>--}}
                                          {{--</div>--}}
                                          {{--<div class="media col-sm-8 offset-md-4">--}}
                                              {{--<div class="media-body  receive-chat">--}}
                                                  {{--Cras sit amet nibh libero, in gravida nulla.Vel metus scelerisque ante--}}
                                                  {{--<span class="time">--}}
                                        {{--<i class="icofont icofont-check m-r-5"></i>Seen 2 sec ago--}}
                                        {{--</span>--}}
                                              {{--</div>--}}
                                          {{--</div>--}}
                                      {{--</div>--}}
                                      {{--<div class="card-footer">--}}
                                          {{--<input type="text" class="form-control" placeholder="Your Message">--}}
                                      {{--</div>--}}
                                  {{--</div>--}}
                              {{--</div>--}}
                              {{--<!-- User chat box end -->--}}
                              {{--<!-- Tabination card start -->--}}
                              {{--<div class="col-md-12 col-xl-7">--}}
                                  {{--<div class="card tab-card">--}}
                                      {{--<ul class="nav nav-tabs md-tabs" role="tablist">--}}
                                          {{--<li class="nav-item">--}}
                                              {{--<a class="nav-link active" data-toggle="tab" href="#home3" role="tab">--}}
                                                  {{--<strong>(15)</strong> messages--}}
                                              {{--</a>--}}
                                              {{--<div class="slide"></div>--}}
                                          {{--</li>--}}
                                          {{--<li class="nav-item">--}}
                                              {{--<a class="nav-link" data-toggle="tab" href="#profile3" role="tab">Inbox</a>--}}
                                              {{--<div class="slide"></div>--}}
                                          {{--</li>--}}
                                          {{--<li class="nav-item">--}}
                                              {{--<a class="nav-link" data-toggle="tab" href="#messages3" role="tab">Outbox</a>--}}
                                              {{--<div class="slide"></div>--}}
                                          {{--</li>--}}
                                          {{--<li class="nav-item">--}}
                                              {{--<a class="nav-link" data-toggle="tab" href="#settings3" role="tab">Deleted</a>--}}
                                              {{--<div class="slide"></div>--}}
                                          {{--</li>--}}
                                      {{--</ul>--}}
                                      {{--<div class="tab-content">--}}
                                          {{--<div class="tab-pane active" id="home3" role="tabpanel">--}}
                                              {{--<div class="card-block">--}}
                                                  {{--<div class="media">--}}
                                                      {{--<div class="media-left media-middle photo-table">--}}
                                                          {{--<a href="#!">--}}
                                                              {{--<img class="img-circle" src="assets/images/avatar-2.png" alt="chat-user">--}}
                                                          {{--</a>--}}
                                                      {{--</div>--}}
                                                      {{--<div class="media-body">--}}
                                                          {{--<h6>Jane Hadly</h6>--}}
                                                          {{--<span class="f-12 f-right">11.34</span>--}}
                                                          {{--<p>Attach your files early</p>--}}
                                                      {{--</div>--}}
                                                  {{--</div>--}}
                                                  {{--<div class="media">--}}
                                                      {{--<div class="media-left media-middle photo-table">--}}
                                                          {{--<a href="#!">--}}
                                                              {{--<img class="img-circle" src="assets/images/avatar-3.png" alt="chat-user">--}}
                                                          {{--</a>--}}
                                                      {{--</div>--}}
                                                      {{--<div class="media-body">--}}
                                                          {{--<h6>Hanry Jane</h6>--}}
                                                          {{--<span class="f-12 f-right">00.35</span>--}}
                                                          {{--<p>Submitted Profile working</p>--}}
                                                      {{--</div>--}}
                                                  {{--</div>--}}
                                                  {{--<div class="media">--}}
                                                      {{--<div class="media-left media-middle photo-table">--}}
                                                          {{--<a href="#!">--}}
                                                              {{--<img class="img-circle" src="assets/images/avatar-4.png" alt="chat-user">--}}
                                                          {{--</a>--}}
                                                      {{--</div>--}}
                                                      {{--<div class="media-body">--}}
                                                          {{--<h6>John Doe</h6>--}}
                                                          {{--<span class="f-12 f-right">10.27</span>--}}
                                                          {{--<p>Resubmit your attachment</p>--}}
                                                      {{--</div>--}}
                                                  {{--</div>--}}
                                                  {{--<div class="media">--}}
                                                      {{--<div class="media-left media-middle photo-table">--}}
                                                          {{--<a href="#!">--}}
                                                              {{--<img class="img-circle" src="assets/images/avatar-5.png" alt="chat-user">--}}
                                                          {{--</a>--}}
                                                      {{--</div>--}}
                                                      {{--<div class="media-body">--}}
                                                          {{--<h6>Peral Doe</h6>--}}
                                                          {{--<span class="f-12 f-right">05.59</span>--}}
                                                          {{--<p>Okay.. Got your mail</p>--}}
                                                      {{--</div>--}}
                                                  {{--</div>--}}
                                                  {{--<div class="media">--}}
                                                      {{--<div class="media-left media-middle photo-table">--}}
                                                          {{--<a href="#!">--}}
                                                              {{--<img class="img-circle" src="assets/images/avatar-2.png" alt="chat-user">--}}
                                                          {{--</a>--}}
                                                      {{--</div>--}}
                                                      {{--<div class="media-body">--}}
                                                          {{--<h6>Liu Chang Yan</h6>--}}
                                                          {{--<span class="f-12 f-right">12.45</span>--}}
                                                          {{--<p>Hey You! It’s me again :-) I attached new</p>--}}
                                                      {{--</div>--}}
                                                  {{--</div>--}}
                                              {{--</div>--}}
                                          {{--</div>--}}
                                          {{--<div class="tab-pane" id="profile3" role="tabpanel">--}}
                                              {{--<div class="email-card p-0">--}}
                                                  {{--<div class="card-block">--}}
                                                      {{--<h6>--}}
                                                          {{--<b>You have some new mails</b>--}}
                                                      {{--</h6>--}}
                                                      {{--<div class="mail-body-content">--}}
                                                          {{--<table class="table table-responsive">--}}
                                                              {{--<tr class="unread">--}}
                                                                  {{--<td>--}}
                                                                      {{--<div class="check-star">--}}
                                                                          {{--<div class="checkbox-fade fade-in-primary checkbox">--}}
                                                                              {{--<label>--}}
                                                                                  {{--<input type="checkbox" value="">--}}
                                                                                  {{--<span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>--}}
                                                                              {{--</label>--}}
                                                                          {{--</div>--}}
                                                                          {{--<i class="icofont icofont-star text-warning"></i>--}}
                                                                      {{--</div>--}}
                                                                  {{--</td>--}}
                                                                  {{--<td><a href="#!" class="email-name">Google Inc</a></td>--}}
                                                                  {{--<td><a href="#!" class="email-name">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></td>--}}
                                                                  {{--<td class="email-attch"><a href="#!"><i class="icofont icofont-clip"></i></a></td>--}}
                                                                  {{--<td class="email-time">08:01 AM</td>--}}
                                                              {{--</tr>--}}
                                                              {{--<tr class="unread">--}}
                                                                  {{--<td>--}}
                                                                      {{--<div class="check-star">--}}
                                                                          {{--<div class="checkbox-fade fade-in-primary checkbox">--}}
                                                                              {{--<label>--}}
                                                                                  {{--<input type="checkbox" value="">--}}
                                                                                  {{--<span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>--}}
                                                                              {{--</label>--}}
                                                                          {{--</div>--}}
                                                                          {{--<i class="icofont icofont-star text-primary"></i>--}}
                                                                      {{--</div>--}}
                                                                  {{--</td>--}}
                                                                  {{--<td><a href="#!" class="email-name">John Doe</a></td>--}}
                                                                  {{--<td><a href="#!" class="email-name">Coming Up Next Week</a></td>--}}
                                                                  {{--<td class="email-attch"><a href="#!"><i class="icofont icofont-clip"></i></a></td>--}}
                                                                  {{--<td class="email-time">13:02 PM</td>--}}
                                                              {{--</tr>--}}
                                                              {{--<tr class="unread">--}}
                                                                  {{--<td>--}}
                                                                      {{--<div class="check-star">--}}
                                                                          {{--<div class="checkbox-fade fade-in-primary checkbox">--}}
                                                                              {{--<label>--}}
                                                                                  {{--<input type="checkbox" value="">--}}
                                                                                  {{--<span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>--}}
                                                                              {{--</label>--}}
                                                                          {{--</div>--}}
                                                                          {{--<i class="icofont icofont-star text-info"></i>--}}
                                                                      {{--</div>--}}
                                                                  {{--</td>--}}
                                                                  {{--<td><a href="#!" class="email-name">Sara Soudein</a></td>--}}
                                                                  {{--<td><a href="#!" class="email-name">SVG new updates comes for you</a></td>--}}
                                                                  {{--<td class="email-attch"><a href="#!"><i class="icofont icofont-clip"></i></a></td>--}}
                                                                  {{--<td class="email-time">00:05 AM</td>--}}
                                                              {{--</tr>--}}
                                                              {{--<tr class="read">--}}
                                                                  {{--<td>--}}
                                                                      {{--<div class="check-star">--}}
                                                                          {{--<div class="checkbox-fade fade-in-primary checkbox">--}}
                                                                              {{--<label>--}}
                                                                                  {{--<input type="checkbox" value="">--}}
                                                                                  {{--<span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>--}}
                                                                              {{--</label>--}}
                                                                          {{--</div>--}}
                                                                          {{--<i class="icofont icofont-star text-primary"></i>--}}
                                                                      {{--</div>--}}
                                                                  {{--</td>--}}
                                                                  {{--<td><a href="#!" class="email-name">Harry John</a></td>--}}
                                                                  {{--<td><a href="#!" class="email-name">New upcoming data available</a></td>--}}
                                                                  {{--<td class="email-attch"><a href="#!"><i class="icofont icofont-clip"></i></a></td>--}}
                                                                  {{--<td class="email-time">11:01 AM</td>--}}
                                                              {{--</tr>--}}
                                                              {{--<tr class="read">--}}
                                                                  {{--<td>--}}
                                                                      {{--<div class="check-star">--}}
                                                                          {{--<div class="checkbox-fade fade-in-primary checkbox">--}}
                                                                              {{--<label>--}}
                                                                                  {{--<input type="checkbox" value="">--}}
                                                                                  {{--<span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>--}}
                                                                              {{--</label>--}}
                                                                          {{--</div>--}}
                                                                          {{--<i class="icofont icofont-star text-inverse"></i>--}}
                                                                      {{--</div>--}}
                                                                  {{--</td>--}}
                                                                  {{--<td><a href="#!" class="email-name">Hanry Joseph</a></td>--}}
                                                                  {{--<td><a href="#!" class="email-name">SCSS current working for new updates</a></td>--}}
                                                                  {{--<td class="email-attch"><a href="#!"><i class="icofont icofont-clip"></i></a></td>--}}
                                                                  {{--<td class="email-time">12:01 PM</td>--}}
                                                              {{--</tr>--}}
                                                              {{--<tr class="read">--}}
                                                                  {{--<td>--}}
                                                                      {{--<div class="check-star">--}}
                                                                          {{--<div class="checkbox-fade fade-in-primary checkbox">--}}
                                                                              {{--<label>--}}
                                                                                  {{--<input type="checkbox" value="">--}}
                                                                                  {{--<span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>--}}
                                                                              {{--</label>--}}
                                                                          {{--</div>--}}
                                                                          {{--<i class="icofont icofont-star text-primary"></i>--}}
                                                                      {{--</div>--}}
                                                                  {{--</td>--}}
                                                                  {{--<td><a href="#!" class="email-name">Liu Koi Yan</a></td>--}}
                                                                  {{--<td><a href="#!" class="email-name">Charts waiting for you</a></td>--}}
                                                                  {{--<td class="email-attch"><a href="#!"><i class="icofont icofont-clip"></i></a></td>--}}
                                                                  {{--<td class="email-time">07:15 AM</td>--}}
                                                              {{--</tr>--}}
                                                          {{--</table>--}}
                                                      {{--</div>--}}
                                                  {{--</div>--}}
                                              {{--</div>--}}
                                          {{--</div>--}}
                                          {{--<div class="tab-pane" id="messages3" role="tabpanel">--}}
                                              {{--<div class="email-card p-0">--}}
                                                  {{--<div class="card-block">--}}
                                                      {{--<h6>--}}
                                                          {{--<b class="text-success">Outbox Messages</b>--}}
                                                      {{--</h6>--}}
                                                      {{--<div class="mail-body-content">--}}
                                                          {{--<table class="table table-responsive">--}}
                                                              {{--<tr class="read">--}}
                                                                  {{--<td>--}}
                                                                      {{--<div class="check-star">--}}
                                                                          {{--<div class="checkbox-fade fade-in-primary checkbox">--}}
                                                                              {{--<label>--}}
                                                                                  {{--<input type="checkbox" value="">--}}
                                                                                  {{--<span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>--}}
                                                                              {{--</label>--}}
                                                                          {{--</div>--}}
                                                                          {{--<i class="icofont icofont-star text-primary"></i>--}}
                                                                      {{--</div>--}}
                                                                  {{--</td>--}}
                                                                  {{--<td><a href="#!" class="email-name">Harry John</a></td>--}}
                                                                  {{--<td><a href="#!" class="email-name">New upcoming data available</a></td>--}}
                                                                  {{--<td class="email-attch"><a href="#!"><i class="icofont icofont-clip"></i></a></td>--}}
                                                                  {{--<td class="email-time">11:01 AM</td>--}}
                                                              {{--</tr>--}}
                                                              {{--<tr class="read">--}}
                                                                  {{--<td>--}}
                                                                      {{--<div class="check-star">--}}
                                                                          {{--<div class="checkbox-fade fade-in-primary checkbox">--}}
                                                                              {{--<label>--}}
                                                                                  {{--<input type="checkbox" value="">--}}
                                                                                  {{--<span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>--}}
                                                                              {{--</label>--}}
                                                                          {{--</div>--}}
                                                                          {{--<i class="icofont icofont-star text-inverse"></i>--}}
                                                                      {{--</div>--}}
                                                                  {{--</td>--}}
                                                                  {{--<td><a href="#!" class="email-name">Hanry Joseph</a></td>--}}
                                                                  {{--<td><a href="#!" class="email-name">SCSS current working for new updates</a></td>--}}
                                                                  {{--<td class="email-attch"><a href="#!"><i class="icofont icofont-clip"></i></a></td>--}}
                                                                  {{--<td class="email-time">12:01 PM</td>--}}
                                                              {{--</tr>--}}
                                                              {{--<tr class="read">--}}
                                                                  {{--<td>--}}
                                                                      {{--<div class="check-star">--}}
                                                                          {{--<div class="checkbox-fade fade-in-primary checkbox">--}}
                                                                              {{--<label>--}}
                                                                                  {{--<input type="checkbox" value="">--}}
                                                                                  {{--<span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>--}}
                                                                              {{--</label>--}}
                                                                          {{--</div>--}}
                                                                          {{--<i class="icofont icofont-star text-primary"></i>--}}
                                                                      {{--</div>--}}
                                                                  {{--</td>--}}
                                                                  {{--<td><a href="#!" class="email-name">Liu Koi Yan</a></td>--}}
                                                                  {{--<td><a href="#!" class="email-name">Charts waiting for you</a></td>--}}
                                                                  {{--<td class="email-attch"><a href="#!"><i class="icofont icofont-clip"></i></a></td>--}}
                                                                  {{--<td class="email-time">07:15 AM</td>--}}
                                                              {{--</tr>--}}
                                                              {{--<tr class="unread">--}}
                                                                  {{--<td>--}}
                                                                      {{--<div class="check-star">--}}
                                                                          {{--<div class="checkbox-fade fade-in-primary checkbox">--}}
                                                                              {{--<label>--}}
                                                                                  {{--<input type="checkbox" value="">--}}
                                                                                  {{--<span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>--}}
                                                                              {{--</label>--}}
                                                                          {{--</div>--}}
                                                                          {{--<i class="icofont icofont-star text-warning"></i>--}}
                                                                      {{--</div>--}}
                                                                  {{--</td>--}}
                                                                  {{--<td><a href="#!" class="email-name">Google Inc</a></td>--}}
                                                                  {{--<td><a href="#!" class="email-name">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></td>--}}
                                                                  {{--<td class="email-attch"><a href="#!"><i class="icofont icofont-clip"></i></a></td>--}}
                                                                  {{--<td class="email-time">08:01 AM</td>--}}
                                                              {{--</tr>--}}
                                                              {{--<tr class="unread">--}}
                                                                  {{--<td>--}}
                                                                      {{--<div class="check-star">--}}
                                                                          {{--<div class="checkbox-fade fade-in-primary checkbox">--}}
                                                                              {{--<label>--}}
                                                                                  {{--<input type="checkbox" value="">--}}
                                                                                  {{--<span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>--}}
                                                                              {{--</label>--}}
                                                                          {{--</div>--}}
                                                                          {{--<i class="icofont icofont-star text-primary"></i>--}}
                                                                      {{--</div>--}}
                                                                  {{--</td>--}}
                                                                  {{--<td><a href="#!" class="email-name">John Doe</a></td>--}}
                                                                  {{--<td><a href="#!" class="email-name">Coming Up Next Week</a></td>--}}
                                                                  {{--<td class="email-attch"><a href="#!"><i class="icofont icofont-clip"></i></a></td>--}}
                                                                  {{--<td class="email-time">13:02 PM</td>--}}
                                                              {{--</tr>--}}
                                                          {{--</table>--}}
                                                      {{--</div>--}}
                                                  {{--</div>--}}
                                              {{--</div>--}}
                                          {{--</div>--}}
                                          {{--<div class="tab-pane" id="settings3" role="tabpanel">--}}
                                              {{--<div class="email-card p-0">--}}
                                                  {{--<div class="card-block">--}}
                                                      {{--<h6 class="text-danger">--}}
                                                          {{--<b>Deleted Messages</b>--}}
                                                      {{--</h6>--}}
                                                      {{--<div class="mail-body-content">--}}
                                                          {{--<table class="table table-responsive">--}}
                                                              {{--<tr class="read">--}}
                                                                  {{--<td>--}}
                                                                      {{--<div class="check-star">--}}
                                                                          {{--<div class="checkbox-fade fade-in-primary checkbox">--}}
                                                                              {{--<label>--}}
                                                                                  {{--<input type="checkbox" value="">--}}
                                                                                  {{--<span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>--}}
                                                                              {{--</label>--}}
                                                                          {{--</div>--}}
                                                                      {{--</div>--}}
                                                                  {{--</td>--}}
                                                                  {{--<td><a href="#!" class="email-name">Harry John</a></td>--}}
                                                                  {{--<td><a href="#!" class="email-name">New upcoming data available</a></td>--}}
                                                                  {{--<td class="email-attch"><a href="#!"><i class="icofont icofont-clip"></i></a></td>--}}
                                                                  {{--<td class="email-time">11:01 AM</td>--}}
                                                              {{--</tr>--}}
                                                              {{--<tr class="read">--}}
                                                                  {{--<td>--}}
                                                                      {{--<div class="check-star">--}}
                                                                          {{--<div class="checkbox-fade fade-in-primary checkbox">--}}
                                                                              {{--<label>--}}
                                                                                  {{--<input type="checkbox" value="">--}}
                                                                                  {{--<span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>--}}
                                                                              {{--</label>--}}
                                                                          {{--</div>--}}
                                                                      {{--</div>--}}
                                                                  {{--</td>--}}
                                                                  {{--<td><a href="#!" class="email-name">Hanry Joseph</a></td>--}}
                                                                  {{--<td><a href="#!" class="email-name">SCSS current working for new updates</a></td>--}}
                                                                  {{--<td class="email-attch"><a href="#!"><i class="icofont icofont-clip"></i></a></td>--}}
                                                                  {{--<td class="email-time">12:01 PM</td>--}}
                                                              {{--</tr>--}}
                                                              {{--<tr class="read">--}}
                                                                  {{--<td>--}}
                                                                      {{--<div class="check-star">--}}
                                                                          {{--<div class="checkbox-fade fade-in-primary checkbox">--}}
                                                                              {{--<label>--}}
                                                                                  {{--<input type="checkbox" value="">--}}
                                                                                  {{--<span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>--}}
                                                                              {{--</label>--}}
                                                                          {{--</div>--}}
                                                                      {{--</div>--}}
                                                                  {{--</td>--}}
                                                                  {{--<td><a href="#!" class="email-name">Liu Koi Yan</a></td>--}}
                                                                  {{--<td><a href="#!" class="email-name">Charts waiting for you</a></td>--}}
                                                                  {{--<td class="email-attch"><a href="#!"><i class="icofont icofont-clip"></i></a></td>--}}
                                                                  {{--<td class="email-time">07:15 AM</td>--}}
                                                              {{--</tr>--}}
                                                              {{--<tr class="unread">--}}
                                                                  {{--<td>--}}
                                                                      {{--<div class="check-star">--}}
                                                                          {{--<div class="checkbox-fade fade-in-primary checkbox">--}}
                                                                              {{--<label>--}}
                                                                                  {{--<input type="checkbox" value="">--}}
                                                                                  {{--<span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>--}}
                                                                              {{--</label>--}}
                                                                          {{--</div>--}}
                                                                      {{--</div>--}}
                                                                  {{--</td>--}}
                                                                  {{--<td><a href="#!" class="email-name">Google Inc</a></td>--}}
                                                                  {{--<td><a href="#!" class="email-name">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></td>--}}
                                                                  {{--<td class="email-attch"><a href="#!"><i class="icofont icofont-clip"></i></a></td>--}}
                                                                  {{--<td class="email-time">08:01 AM</td>--}}
                                                              {{--</tr>--}}
                                                              {{--<tr class="unread">--}}
                                                                  {{--<td>--}}
                                                                      {{--<div class="check-star">--}}
                                                                          {{--<div class="checkbox-fade fade-in-primary checkbox">--}}
                                                                              {{--<label>--}}
                                                                                  {{--<input type="checkbox" value="">--}}
                                                                                  {{--<span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>--}}
                                                                              {{--</label>--}}
                                                                          {{--</div>--}}
                                                                      {{--</div>--}}
                                                                  {{--</td>--}}
                                                                  {{--<td><a href="#!" class="email-name">John Doe</a></td>--}}
                                                                  {{--<td><a href="#!" class="email-name">Coming Up Next Week</a></td>--}}
                                                                  {{--<td class="email-attch"><a href="#!"><i class="icofont icofont-clip"></i></a></td>--}}
                                                                  {{--<td class="email-time">13:02 PM</td>--}}
                                                              {{--</tr>--}}
                                                          {{--</table>--}}
                                                      {{--</div>--}}
                                                  {{--</div>--}}
                                              {{--</div>--}}
                                          {{--</div>--}}
                                      {{--</div>--}}
                                  {{--</div>--}}
                              {{--</div>--}}
                              {{--<!-- Tabination card end -->--}}
                              {{--<!-- Todo card start -->--}}
                              {{--<div class="col-md-12 col-xl-5">--}}
                                  {{--<div class="card">--}}
                                      {{--<div class="card-header">--}}
                                          {{--<h5>Create Your Daily Task</h5>--}}
                                          {{--<label class="label label-success">Today</label>--}}
                                      {{--</div>--}}
                                      {{--<div class="card-block">--}}
                                          {{--<div class="input-group input-group-button">--}}
                                              {{--<input type="text" class="form-control add_task_todo" placeholder="Create your task list" name="task-insert">--}}
                                              {{--<span class="input-group-addon" id="basic-addon1">--}}
                              {{--<button id="add-btn" class="btn btn-primary">Add Task</button>--}}
                              {{--</span>--}}
                                          {{--</div>--}}
                                          {{--<div class="new-task">--}}
                                              {{--<div class="to-do-list">--}}
                                                  {{--<div class="checkbox-fade fade-in-primary">--}}
                                                      {{--<label class="check-task">--}}
                                                          {{--<input type="checkbox" value="">--}}
                                                          {{--<span class="cr">--}}
                                    {{--<i class="cr-icon icofont icofont-ui-check txt-primary"></i>--}}
                                    {{--</span>--}}
                                                          {{--<span>Hey.. Attach your new file</span>--}}
                                                      {{--</label>--}}
                                                  {{--</div>--}}
                                                  {{--<div class="f-right">--}}
                                                      {{--<a href="#!" class="delete_todolist"><i class="icofont icofont-ui-delete" ></i></a>--}}
                                                  {{--</div>--}}
                                              {{--</div>--}}
                                              {{--<div class="to-do-list">--}}
                                                  {{--<div class="checkbox-fade fade-in-primary">--}}
                                                      {{--<label class="check-task">--}}
                                                          {{--<input type="checkbox" value="">--}}
                                                          {{--<span class="cr">--}}
                                    {{--<i class="cr-icon icofont icofont-ui-check txt-primary"></i>--}}
                                    {{--</span>--}}
                                                          {{--<span>New Attachment has error</span>--}}
                                                      {{--</label>--}}
                                                  {{--</div>--}}
                                                  {{--<div class="f-right">--}}
                                                      {{--<a href="#!" class="delete_todolist"><i class="icofont icofont-ui-delete"></i></a>--}}
                                                  {{--</div>--}}
                                              {{--</div>--}}
                                              {{--<div class="to-do-list">--}}
                                                  {{--<div class="checkbox-fade fade-in-primary">--}}
                                                      {{--<label class="check-task">--}}
                                                          {{--<input type="checkbox" value="">--}}
                                                          {{--<span class="cr">--}}
                                    {{--<i class="cr-icon icofont icofont-ui-check txt-primary"></i>--}}
                                    {{--</span>--}}
                                                          {{--<span>Have to submit early</span>--}}
                                                      {{--</label>--}}
                                                  {{--</div>--}}
                                                  {{--<div class="f-right">--}}
                                                      {{--<a href="#!" class="delete_todolist"><i class="icofont icofont-ui-delete"></i></a>--}}
                                                  {{--</div>--}}
                                              {{--</div>--}}
                                              {{--<div class="to-do-list">--}}
                                                  {{--<div class="checkbox-fade fade-in-primary">--}}
                                                      {{--<label class="check-task">--}}
                                                          {{--<input type="checkbox" value="">--}}
                                                          {{--<span class="cr">--}}
                                    {{--<i class="cr-icon icofont icofont-ui-check txt-primary"></i>--}}
                                    {{--</span>--}}
                                                          {{--<span>10 pages has to be completed</span>--}}
                                                      {{--</label>--}}
                                                  {{--</div>--}}
                                                  {{--<div class="f-right">--}}
                                                      {{--<a href="#!" class="delete_todolist"><i class="icofont icofont-ui-delete"></i></a>--}}
                                                  {{--</div>--}}
                                              {{--</div>--}}
                                              {{--<div class="to-do-list">--}}
                                                  {{--<div class="checkbox-fade fade-in-primary">--}}
                                                      {{--<label class="check-task">--}}
                                                          {{--<input type="checkbox" value="">--}}
                                                          {{--<span class="cr">--}}
                                    {{--<i class="cr-icon icofont icofont-ui-check txt-primary"></i>--}}
                                    {{--</span>--}}
                                                          {{--<span>Navigation working</span>--}}
                                                      {{--</label>--}}
                                                  {{--</div>--}}
                                                  {{--<div class="f-right">--}}
                                                      {{--<a href="#!" class="delete_todolist"><i class="icofont icofont-ui-delete"></i></a>--}}
                                                  {{--</div>--}}
                                              {{--</div>--}}
                                              {{--<div class="to-do-list">--}}
                                                  {{--<div class="checkbox-fade fade-in-primary">--}}
                                                      {{--<label class="check-task">--}}
                                                          {{--<input type="checkbox" value="">--}}
                                                          {{--<span class="cr">--}}
                                    {{--<i class="cr-icon icofont icofont-ui-check txt-primary"></i>--}}
                                    {{--</span>--}}
                                                          {{--<span>Files submited successfully</span>--}}
                                                      {{--</label>--}}
                                                  {{--</div>--}}
                                                  {{--<div class="f-right">--}}
                                                      {{--<a href="#!" class="delete_todolist"><i class="icofont icofont-ui-delete"></i></a>--}}
                                                  {{--</div>--}}
                                              {{--</div>--}}
                                          {{--</div>--}}
                                      {{--</div>--}}
                                  {{--</div>--}}
                              {{--</div>--}}
                              <!-- Todo card end -->
                          </div>
                      </div>
                      <!-- Page-body end -->
                    {{--end content--}}
                </div>
            </div>
            {{--<div id="styleSelector">--}}

            {{--</div>--}}
        </div>
    </div>
    {{--content ends here--}}
@stop