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
              <h3 class="box-title">Detil Camera</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
       <form action="storeCamera" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <h3 for="brand">Brand Camera : </h3>
                  <br>
                  <label style="font-size: 30px">{{$lensas->merk}}</label>

                  <h3 for="brand">Tipe Camera : </h3>
                  <br>
                  <label style="font-size: 30px">{{$lensas->tipe}}</label>
                 
                 <h3 for="brand">Deskripsi Camera : </h3>
                  <br>
                  <label style="font-size: 30px">{{$lensas->deskripsi}}</label>

                    <h3 for="brand">Fitur Camera : </h3>
                  <br>
                  <label style="font-size: 30px">{{$lensas->fitur}}</label>


                </div>
                <div class="form-group">
                  <h3 for="harga_sewa">Harga Sewa : </h3>
                  <br>
                     <label style="font-size: 30px">{{$lensas->harga_sewa}}</label>
                </div>
                <div class="form-group">
                  <h3 for="foto"> Foto : </h3>

                  <img src="{{URL::to('/image/'.$lensas->gambar)}}" alt="" width="120px" height="120px">
                 

                 
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              
              </div>
            </form>
          </div>
</div>
          @endsection