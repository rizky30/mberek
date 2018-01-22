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
  <div class="content-header">
    <h1 style="float: left">
      Admin
      <small>List</small>
    </h1>
      
  </div>

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

    
            <!-- /.box-header -->
            <div class=" table-responsive">
              <table class="table table-hover">
                <thead style="background-color: #0E2231; color: white;">
                    <tr>
                      <th>Id</th>
                      <th>Nama</th>
                      <th>Foto</th>
                      <th>Delete</th>
                    </tr>
                </thead>
                @foreach($user as $adm)
                <tbody>
                    <tr>


                     {{--  <td>{{$kameras->brand}} </td>
                      <td>{{$kameras->harga_sewa}}</td>
                      <td>{{$kameras->foto}}</td>
     --}}

                      <td>{{$adm->id}}</td>
                      <td>{{$adm->name}}</td>
                    <td><img src="{{URL::to('/image/'.$adm->gambar)}}" alt="" width="140px" height="140px"></td>

                      <td><a href="deleteAdmin/{{$adm->id}}" class="btn btn-danger"><i class=" fa fa-trash"></i></a></td>
                    </tr>
                </tbody>

                @endforeach

               
              </table>
            </div>
                 
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>  

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

