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
    <h1>
      Selamat datang Admin
      <small>List</small>
    </h1>
    <ol class="breadcrumb">
 <li><a href="/admin/home"><i class="fa fa-dashboard"></i> Home</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

{{--     <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Title</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        Start creating your amazing application!
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        Footer
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box --> --}}

     <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Selamat datang Admin</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                 

                 
                  </div>
                </div>
              </div>
            </div>

    
      
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

