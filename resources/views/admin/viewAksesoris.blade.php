@extends('admin.layouts.app')

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Aksesoris
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
              <h3 class="box-title">List Aksesoris</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>

    
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                   
                  <th>Jenis</th>
                   <th>Tipe</th>
                   <th>Fitur</th>
                  <th>Harga Sewa</th>
                  <th>Foto</th>
                  <th>Lihat</th>
                  <th>Edit</th>
                  <th>Delete</th>
               
                </tr>
  @foreach($aksesoris as $aks)
                <tr>
               
                
                 {{--  <td>{{$kameras->brand}} </td>
                  <td>{{$kameras->harga_sewa}}</td>
                  <td>{{$kameras->foto}}</td>
 --}}       
            
                  <td>{{$aks->jenis}}</td>
                  <td>{{$aks->tipe}}</td>
                  <td>{{$aks->fitur}}</td>
                  <td>{{$aks->harga_sewa}}</td>
                {{--   <td>{{$kamera->foto}}</td> --}}
                <td><img src="{{URL::to('/image/'.$aks->gambar)}}" alt="" width="50px" height="50px"></td>

                   <td><a href="lihatAksesoris/{{$aks->id}}"><i class=" glyphicon glyphicon-eye-open"></i></a></td>
                  <td><a href="editAksesoris/{{$aks->id}}"><i class="glyphicon glyphicon-edit"></i></a></td>
                  <td><a href="deleteAksesoris/{{$aks->id}}"><i class=" glyphicon glyphicon-trash"></i></a></td>
                  
                       @endforeach 
                </tr>
               
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

