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
                  <label style="font-size: 30px">{{$kameras->merk}}</label>

                  <h3 for="brand">Tipe Camera : </h3>
                  <br>
                  <label style="font-size: 30px">{{$kameras->tipe}}</label>
                 
                 <h3 for="brand">Deskripsi Camera : </h3>
                  <br>
                  <label style="font-size: 30px">{{$kameras->deskripsi}}</label>

                    <h3 for="brand">Fitur Camera : </h3>
                  <br>
                  <label style="font-size: 30px">{{$kameras->fitur}}</label>


                </div>
                <div class="form-group">
                  <h3 for="harga_sewa">Harga Sewa : </h3>
                  <br>
                     <label style="font-size: 30px">{{$kameras->harga_sewa}}</label>
                </div>
                <div class="form-group">
                  <h3 for="foto"> Foto : </h3>

                  <img src="{{URL::to('/image/'.$kameras->gambar)}}" alt="" width="800px" height="553px">
                 

                 
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              
              </div>
            </form>
          </div>
</div>
          @endsection