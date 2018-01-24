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
                       @if(Auth::user()->level=='admin')
                      <th>Delete</th>
                      @endif
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
                      @if(Auth::user()->level=='admin')
                      <td><a href="deleteAdmin/{{$adm->id}}" class="btn btn-danger"><i class=" fa fa-trash"></i></a></td>
                      @endif
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

