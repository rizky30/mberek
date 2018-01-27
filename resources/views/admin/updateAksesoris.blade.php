

 @extends('admin.layouts.app')

@section('main-content')




 <div class="content-wrapper">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Update Camera</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
       <form action="update/{{$aksesoris->id}}" method="post" enctype="multipart/form-data">
              <div class="box-body">
                    {{method_field('patch')}}
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

          <div class="form-group">
                <label for="tipe">Tipe</label>
                <input type="text" class="form-control" rows="6" id="tipe" name="tipe" placeholder="Masukkan Tipe" value="{{$aksesoris->tipe}}">
              </div>


              <div class="form-group">
                  <label for="deskripsi">Deskripsi</label>
                   <textarea class="form-control" rows="6" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi"  >{{$aksesoris->deskripsi}}</textarea>
                </div>

                      <div class="form-group">
                  <label for="deskripsi">Fitur</label>
                   <textarea class="form-control" rows="6" id="fitur" name="fitur"  placeholder="Masukkan Fitur" >{{$aksesoris->fitur}}</textarea>
                </div>



                <div class="form-group">
                  <label for="harga_sewa">Harga Sewa</label>
                  <input type="text" class="form-control" id="harga_sewa" name="harga_sewa" placeholder="masukkan harga sewa" value="{{$aksesoris->harga_sewa}} ">
                </div>

                   <div class="form-group">
                  <label for="status">status</label>
                  <select class="form-control select2" style="width: 100%;" name="status" id="status">
                     <?php if ($aksesoris->status=='tersedia'): ?>
                     <option value="tersedia">{{$aksesoris->status}}</option>
                     <option value="kosong">kosong</option>
                     <option value="sedang_dipesan">sedang_dipesan</option>

                     <?php elseif ($aksesoris->status=='kosong'): ?>
                     <option value="kosong">{{$aksesoris->status}}</option>
                     <option value="tersedia">tersedia</option>
                     <option value="sedang_dipesan">sedang_dipesan</option>

                 


                   <?php elseif ($aksesoris->status=='sedang_dipesan'): ?>
                     <option value="sedang_dipesan">{{$aksesoris->status}}</option>
                     <option value="tersedia">tersedia</option>
                     <option value="kosong">kosong</option>

                     <?php endif ?>
                  </select>
                </div>
              
                <div class="form-group">
                  <label for="gambar">Masukkan Foto</label>
                  <input type="file" id="gambar" name="gambar">
                  <br>
                  <img src="{{URL::to('/image/'.$aksesoris->gambar)}}" alt="" width="100px" height="100px">

                 
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