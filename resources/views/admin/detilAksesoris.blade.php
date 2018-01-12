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
              <h3 class="box-title">Detil Aksesoris</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="container">
              <form action="storeCamera" method="post" enctype="multipart/form-data">
                <div class="box-body">
                  <div class="form-group">
                    <h3 for="brand">Brand Camera : </h3>
                    
                    <label style="font-size: 30px">{{$aksesoris->jenis}}</label>

                    <h3 for="brand">Tipe Camera : </h3>
                    
                    <label style="font-size: 30px">{{$aksesoris->tipe}}</label>
                   
                   <h3 for="brand">Deskripsi Camera : </h3>
                    
                    <label style="font-size: 30px">{{$aksesoris->deskripsi}}</label>

                      <h3 for="brand">Fitur Camera : </h3>
                    
                    <label style="font-size: 30px">{{$aksesoris->fitur}}</label>


                  </div>
                  <div class="form-group">
                    <h3 for="harga_sewa">Harga Sewa : </h3>
                    
                       <label style="font-size: 30px">{{$aksesoris->harga_sewa}}</label>
                  </div>
                  <div class="form-group">
                    <h3 for="foto"> Foto : </h3>

                    <img src="{{URL::to('/image/'.$aksesoris->gambar)}}" alt="" width="700px" height="400px">
                   

                   
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