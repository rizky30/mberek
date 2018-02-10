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
              <h3 class="box-title">Insert Admin</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
       <form action="storeAdmin" method="post" enctype="multipart/form-data">
              <div class="box-body">
        
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                 <div class="form-group">
                <label for="nama">nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required>
              </div>


                 <div class="form-group">
                <label for="password">password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
              </div>

               <div class="form-group">
                <label for="cpassword">Konfirmasi password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Masukkan password" required>
              </div>


              <div class="form-group">
                <label for="email">email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
              </div>

              <div class="form-group">
                <label for="tel">phone number</label>
                <input type="number" class="form-control" id="tel" name="tel" placeholder="Masukkan Nomor Telepon" required>
              </div>

               <div class="form-group">
                <label for="level">level</label>
                <select class="form-control select2" style="width: 100%;" name="level" id="level">
                  <option selected="selected" value="admin">admin</option>
                  <option value="operator">operator</option>                 
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