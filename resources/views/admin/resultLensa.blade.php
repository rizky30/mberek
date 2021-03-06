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
      Camera
      <small>List</small>
    </h1>
    <form action="{{ url('queryLensa') }}" method="GET">
      <div class="box-tools">
        <div class="input-group input-group-sm" style="width: 200px; float: right">
          <input type="text" name="q" class="form-control pull-right validate" placeholder="Search">
          <div class="input-group-btn">
            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
          </div>
        </div>
      </div>

      <div class="box-tools">
        <a href="/admin/viewLensa" class="btn btn-warning" style="float: right; margin-right: 20px">
          Tampilkan Semua
        </a>
      </div>
      <div class="box-tools">
        <div class="dropdown" style="float: right; margin-right: 20px">
          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
            Pilih Status
          </button>
          <div class="dropdown-menu">
            <a  href="/admin/viewLensa/tersedia">Tersedia</a>
            <a  href="/admin/viewLensa/kosong">Kosong</a>
          </div>
        </div>
      </div>
      <div class="box-tools">
        <div class="dropdown" style="float: right; margin-right: 20px">
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            Pilih Brand
          </button>
          <div class="dropdown-menu">
            <a  href="/admin/viewLensa/canon">Canon</a>
            <a  href="/admin/viewLensa/nikon">Nikon</a>
            <a  href="/admin/viewLensa/sony">Sony</a>
          </div>
        </div>
      </div>
    </form>
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


                    {{--
                      <td>{{$kameras->brand}}</td>
                      <td>{{$kameras->harga_sewa}}</td>
                      <td>{{$kameras->foto}}</td>
                    --}}

                      <td>Ls_{{$kamera->id_lensa}}</td>
                      <td>{{$kamera->merk}}</td>
                      <td>{{$kamera->tipe}}</td>
                      <td>{{$kamera->fitur}}</td>
                      <td>{{$kamera->harga_sewa}}</td>
                      <td>{{$kamera->status}}</td>
                    {{--   <td>{{$kamera->foto}}</td> --}}
                      <td><img src="{{URL::to('/image/'.$kamera->gambar)}}" alt="" width="140px" height="80px"></td>

                       <td><a href="/admin/lihatCamera/{{$kamera->id_lensa}}" class="btn btn-primary"><i class=" fa fa-eye"></i></a></td>
                      <td><a href="/admin/editCamera/{{$kamera->id_lensa}}" class="btn btn-success"><i class="fa fa-edit"></i></a></td>
                      <td><a href="/admin/deleteCamera/{{$kamera->id_lensa}}" class="btn btn-danger"><i class=" fa fa-trash"></i></a></td>
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

