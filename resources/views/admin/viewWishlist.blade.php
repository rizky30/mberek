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
                Wish
                <small>List</small>
            </h1>
            <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 200px; float: right">
                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
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
                                        <th>Email</th>
                                        <th>Nomor Telepon</th>
                                        <th>Request</th>
                                        <th>Deskripsi</th>
                                        <th>Lihat</th>
                                        <th>Delete</th>

                                    </tr>
                                </thead>
                                @foreach($wishlist as $wish)
                                    <tbody>
                                        <tr>


                                            {{--
                                              <td>{{$kameras->brand}}</td>
                                              <td>{{$kameras->harga_sewa}}</td>
                                              <td>{{$kameras->foto}}</td>
                                            --}}

                                            <td>{{$wish->id_wishlist}}</td>
                                            <td>{{$wish->nama}}</td>
                                            <td>{{$wish->email}}</td>
                                            <td>{{$wish->telepon}}</td>
                                            <td>{{$wish->request}}</td>
                                            <td>{{$wish->deskripsi}}</td>

                                            {{--   <td>{{$kamera->foto}}</td> --}}


                                            <td><a href="lihatWishlist/{{$wish->id_wishlist}}" class="btn btn-primary"><i class=" fa fa-eye"></i></a></td>
                                            <td><a href="deleteWishlist/{{$wish->id_wishlist}}" class="btn btn-danger"><i class=" fa fa-trash"></i></a></td>
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

