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
              <h3 class="box-title">Insert Merk</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
       <form action="storeMerk" method="post" enctype="multipart/form-data">
              <div class="box-body">
          
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                
      <div class="form-group">
                <label for="tipe">Merk</label>
                <input type="text" class="form-control" rows="6" id="merk" name="merk" placeholder="Masukkan merk" ></input>
                </select>
              </div>




        
        
              <!-- /.box-body -->
</div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" id="submit" value="submit">Submit</button>
              </div>
            </form>
          </div>
</div>
          @endsection