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
                    <label style="font-size: 30px">{{$masukkan->name}}</label>

                    <h3 for="email">Alamat Email : </h3>
                    <label style="font-size: 30px">{{$masukkan->email}}</label>
                   
                    <h3 for="brand">Masukkan : </h3>
                    <label style="font-size: 30px">{{$masukkan->message}}</label>

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