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
      Category
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
                    <th>Merk</th>
                    <th>Jenis</th>
              
                    <th>Lihat</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                @foreach($merk as $kamera)
                  <tbody>
                    <tr>


                      <td>{{$kamera->merk}}</td>
                   {{--    <td>{{$kamera->tipe}}</td> --}}
         
                    {{--   <td>{{$kamera->foto}}</td> --}}
                      <td><img src="{{URL::to('/image/'.$kamera->gambar)}}" alt="" width="140px" height="80px"></td>

                       <td><a href="/admin/lihatCamera/{{$kamera->id_kamera}}" class="btn btn-primary"><i class=" fa fa-eye"></i></a></td>
                      <td><a href="/admin/editCamera/{{$kamera->id_kamera}}" class="btn btn-success"><i class="fa fa-edit"></i></a></td>
                      <td><a href="/admin/deleteCamera/{{$kamera->id_kamera}}" class="btn btn-danger"><i class=" fa fa-trash"></i></a></td>
                    </tr>
                  </tbody>
                @endforeach

               
              </table>
            </div>
                 
            
          </div>
        
        </div>
    </div>  

  </section>

</div>
@endsection