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
              <h3 class="box-title">Insert Lensa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
       <form action="storeLensa" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="merk">Brand Lensa</label>

                <div class="form-group">
                <label for="merk">Brand</label>
                <select class="form-control select2" style="width: 100%;" name="merk" id="merk">
                  <option selected="selected" value="canon">canon</option>
                  <option value="nikon">nikon</option>
                  <option value="sony">sony</option>
                  <option value="gopro">gopro</option>
                  <option>d4</option>
                </select>
              </div>  


                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                 
                </div>

                 <div class="form-group">
                <label for="tipe">Tipe</label>
                <input type="text" class="form-control" id="tipe" name="tipe" placeholder="Masukkan Tipe">
              </div>


              <div class="form-group">
                  <label for="deskripsi">Deskripsi</label>
                   <textarea class="form-control" rows="6" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi" ></textarea>
                </div>

                      <div class="form-group">
                  <label for="deskripsi">Fitur</label>
                   <textarea class="form-control" rows="6" id="fitur" name="fitur"  placeholder="Masukkan Fitur" ></textarea>
                </div>

              {{-- canon nikon sony samsung go pro --}}



                <div class="form-group">
                  <label for="harga_sewa">Harga Sewa</label>
                  <input type="number" class="form-control" id="harga_sewa" name="harga_sewa" placeholder="masukkan harga sewa">
                </div>

                   <div class="form-group">
                <label for="status">status</label>
                <select class="form-control select2" style="width: 100%;" name="status" id="status">
                  <option selected="selected" value="tersedia">tersedia</option>
                  <option value="koso">kosong</option>
                </select>
              </div>


                <div class="form-group">
                  <label for="gambar">Masukkan Foto</label>
                  <input type="file" id="gambar" name="gambar">

                 
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" id="submit" value="submit">Submit</button>
              </div>
            </form>
          </div>
</div>
          @endsection