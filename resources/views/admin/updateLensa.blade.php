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
              <h3 class="box-title">Update lensa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
       <form action="update/{{$lensas->id_lensa}}" method="post" enctype="multipart/form-data">
              <div class="box-body">
                    {{method_field('patch')}}
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                


                  <div class="form-group">
                <label for="tipe">Tipe</label>
                <select class="form-control select2" style="width: 100%;" name="merk" id="merk">
                    <?php if ($lensas->merk=='canon'): ?>
                  <option  value="canon">{{$lensas->merk}}</option>
                  <option value="nikon">nikon</option>
                  <option value="sony">sony</option>
                 
                   <?php elseif ($lensas->merk=='nikon'): ?>
                  <option  value="nikon">{{$lensas->merk}}</option>
                  <option value="canon">canon</option>
                  <option value="sony">sony</option>

                    <?php elseif ($lensas->merk=='sony'): ?>
                  <option  value="sony">{{$lensas->merk}}</option>
                  <option value="nikon">nikon</option>
                  <option value="canon">canon</option>
                 <?php endif ?>
                </select>
              </div>

          <div class="form-group">
                <label for="tipe">Tipe</label>
                <input type="text" class="form-control" id="tipe" name="tipe" placeholder="masukkan harga sewa" value="{{$lensas->tipe}} ">
              </div>


              <div class="form-group">
                  <label for="deskripsi">Deskripsi</label>
                   <textarea class="form-control" rows="6" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi"  >{{$lensas->deskripsi}}</textarea>
                </div>

                      <div class="form-group">
                  <label for="deskripsi">Fitur</label>
                   <textarea class="form-control" rows="6" id="fitur" name="fitur"  placeholder="Masukkan Fitur" >{{$lensas->fitur}}</textarea>
                </div>



                <div class="form-group">
                  <label for="harga_sewa">Harga Sewa</label>
                  <input type="text" class="form-control" id="harga_sewa" name="harga_sewa" placeholder="masukkan harga sewa" value="{{$lensas->harga_sewa}} ">
                </div>

                    <div class="form-group">
                  <label for="status">status</label>
                  <select class="form-control select2" style="width: 100%;" name="status" id="status">
                     <?php if ($lensas->status=='tersedia'): ?>
                     <option value="tersedia">{{$lensas->status}}</option>
                     <option value="kosong">kosong</option>
                     <option value="sedang_dipesan">sedang_dipesan</option>

                     <?php elseif ($lensas->status=='kosong'): ?>
                     <option value="kosong">{{$lensas->status}}</option>
                     <option value="tersedia">tersedia</option>
                     <option value="sedang_dipesan">sedang_dipesan</option>

                 


                   <?php elseif ($lensas->status=='sedang_dipesan'): ?>
                     <option value="sedang_dipesan">{{$lensas->status}}</option>
                     <option value="tersedia">tersedia</option>
                     <option value="kosong">kosong</option>

                     <?php endif ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="gambar">Masukkan Foto</label>
                  <input type="file" id="gambar" name="gambar">
                  <br>
                  <img src="{{URL::to('/image/'.$lensas->gambar)}}" alt="" width="100px" height="100px">

                 
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