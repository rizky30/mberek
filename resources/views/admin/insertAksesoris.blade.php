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
              <h3 class="box-title">Insert Aksesoris</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
       <form action="storeAksesoris" method="post" enctype="multipart/form-data">
              <div class="box-body">
          
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                


                <div class="form-group">
                <label for="merk">jenis</label>
                <select class="form-control select2" style="width: 100%;" name="jenis" id="jenis">
                  <option selected="selected" value="tripod">tripod</option>
                  <option value="lighting">lighting</option>
                  <option value="microphone">microphone</option>
                  <option value="extra_battery">extra_battery</option>
                  <option value="memory">memory</option>
                 
                </select>
              </div>

          <div class="form-group">
                <label for="tipe">Tipe</label>
                <select class="form-control select2" style="width: 100%;" name="tipe" id="tipe">
                  <option selected="selected" value="d3200">d3200</option>
                  <option value="d5200">d5200</option>
                  <option value="d7100">d7100</option>
                  <option value="d600">d600</option>
                  <option value="d800(e)">d800(e)</option>
                  <option value="mirrorless">mirrorless</option>
                </select>
              </div>


              <div class="form-group">
                  <label for="deskripsi">Deskripsi</label>
                   <textarea class="form-control" rows="6" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi" ></textarea>
                </div>

                      <div class="form-group">
                  <label for="deskripsi">Fitur</label>
                   <textarea class="form-control" rows="6" id="fitur" name="fitur"  placeholder="Masukkan Fitur" ></textarea>
                </div>



                <div class="form-group">
                  <label for="harga_sewa">Harga Sewa</label>
                  <input type="text" class="form-control" id="harga_sewa" name="harga_sewa" placeholder="masukkan harga sewa" value="Rp : ">
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