         @if(Auth::user())
         @else

<?php
    return view('layouts/home');

    ?>

    @endif
@extends('admin.layouts.app')

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
  </section>

  <!-- Main content -->
  <section class="content">

{{--     <!-- Default box -->--}}
    {{--<div class="box">--}}
      {{--<div class="box-header with-border">--}}
        {{--<h3 class="box-title">Title</h3>--}}

        {{--<div class="box-tools pull-right">--}}
          {{--<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">--}}
            {{--<i class="fa fa-minus"></i></button>--}}
          {{--<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">--}}
            {{--<i class="fa fa-times"></i></button>--}}
        {{--</div>--}}
      {{--</div>--}}
      {{--<div class="box-body">--}}
        {{--Start creating your amazing application!--}}
      {{--</div>--}}
      {{--<!-- /.box-body -->--}}
      {{--<div class="box-footer">--}}
        {{--Footer--}}
      {{--</div>--}}
      {{--<!-- /.box-footer-->--}}
    {{--</div>--}}
    {{--<!-- /.box --> --}}

     <div class="row">
        <div class="col-xs-12">
          <div class="container">
              <div class="jumbotron text-center" style="margin-right: 8rem; color: white; background-color: #222d32">
                  <h2>Selamat Datang, {{ Auth::user()->name }}</h2>
                  <p>Awali Harimu dengan Bismillah, selalu berfikir positif dan lakukan yang terbaik.</p>
              </div>
          </div>
        </div>
      </div>
<!-- 
      <div class="container" style="padding-right: 95px">
        <div class="row">
          <div class="col-lg-4 col-md-6">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-camera fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div style="font-size: 40px;">{{$kameras->count()}}</div>
                      <div>Kamera</div>
                    </div>
                  </div>
                </div>
                <a href="#">
                  <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
          </div>

          <div class="col-lg-4 col-md-6">
              <div class="panel panel-green" style="">
                <div class="panel-heading" style="">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-video-camera fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div style="font-size: 40px;">da</div>
                      <div>Lensa</div>
                    </div>
                  </div>
                </div>
                <a href="#">
                  <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
          </div>  

          <div class="col-lg-4 col-md-6">
              <div class="panel panel-yellow" style="">
                <div class="panel-heading" style="">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div style="font-size: 40px;"></div>
                      <div>Aksesoris</div>
                    </div>
                  </div>
                </div>
                <a href="#">
                  <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
          </div>                 
        </div>
      </div> -->
    
      
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

