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
    <h1 style="float: left;">
      Aksesoris
      <small>List</small>
    </h1>
   <br>

    <form action="{{ url('queryAksesoris') }}" method="GET">
      <div class="box-tools">
        <div class="input-group input-group-sm" style="width: 200px; float: right">
          <input type="text" name="q" class="form-control pull-right validate" placeholder="Search">
          <div class="input-group-btn">
            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
          </div>
        </div>
      </div>
      <div class="box-tools">
        <a href="/admin/viewAksesoris" class="btn btn-warning" style="float: right; margin-right: 20px">
          Tampilkan Semua
        </a>
      </div>
      <div class="box-tools">
        <div class="dropdown" style="float: right; margin-right: 20px">
          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
            Pilih Status
          </button>
          <div class="dropdown-menu">
            <a  href="/admin/viewAksesoris/tersedia">Tersedia</a>
            <a  href="/admin/viewAksesoris/kosong">Kosong</a>
          </div>
        </div>
      </div>
      <div class="box-tools">
        <div class="dropdown" style="float: right; margin-right: 20px">
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            Pilih Jenis
          </button>
          <div class="dropdown-menu">
            <a  href="/admin/viewAksesoris/tripod">Tripod</a>
            <a  href="/admin/viewAksesoris/lighting">Lighting</a>
            <a  href="/admin/viewAksesoris/microphone">Microphone</a>
            <a  href="/admin/viewAksesoris/battery">Battery</a>
            <a  href="/admin/viewAksesoris/memory">Memory</a>
          </div>
        </div>
      </div>
    </form>
    
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
                    <th>Brand</th>
                    <th>tipe</th>
                    <th>fitur</th>
                    <th>Harga Sewa</th>
                    <th>Status</th>
                    <th>Foto</th>
                    <th>Lihat</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                @foreach($hasil as $kamera)
                  <tbody>
                    <tr>


                      <td>Aks_{{$kamera->id}}</td>
                      <td>{{$kamera->merk}}</td>
                      <td>{{$kamera->tipe}}</td>
                      <td>{{$kamera->fitur}}</td>
                      <td>{{$kamera->harga_sewa}}</td>
                      <td>{{$kamera->status}}</td>
                    {{--   <td>{{$kamera->foto}}</td> --}}
                      <td><img src="{{URL::to('/image/'.$kamera->gambar)}}" alt="" width="140px" height="80px"></td>

                       <td><a href="/admin/lihatCamera/{{$kamera->id}}" class="btn btn-primary"><i class=" fa fa-eye"></i></a></td>
                      <td><a href="/admin/editCamera/{{$kamera->id}}" class="btn btn-success"><i class="fa fa-edit"></i></a></td>
                      <td><a href="/admin/deleteCamera/{{$kamera->id}}" class="btn btn-danger"><i class=" fa fa-trash"></i></a></td>
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

