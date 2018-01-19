          @if(Auth::user())
         @else

<?php
    return view('layouts/home');

    ?>

    @endif

 @extends('admin.layouts.app')

@section('main-content')




 <div class="content-wrapper">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Detil Masukkan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="container">
              <form action="storeCamera" method="post" enctype="multipart/form-data">
                <div class="box-body">
                  <div class="form-group">
                    <h3 for="name">Nama Lengkap : </h3>
                    <label style="font-size: 30px">{{$wishlist->nama}}</label>

                    <h3 for="email">Alamat Email : </h3>
                    <label style="font-size: 30px">{{$wishlist->email}}</label>
                   
                    <h3 for="brand">Nomor Telepon : </h3>
                    <label style="font-size: 30px">{{$wishlist->telepon}}</label>

                    <h3 for="brand">Request : </h3>
                    <label style="font-size: 30px">{{$wishlist->request}}</label>

                    <h3 for="brand">Deskripsi : </h3>
                    <label style="font-size: 30px">{{$wishlist->deskripsi}}</label>

                  </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                
                </div>
              </form>
            </div>
          </div>
</div>
          @endsection