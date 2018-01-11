@extends('layouts/template')
    
  @section('title', 'Detil Item')

  @section('content')
    <br>
    <br>
    <!-- Page Content -->
    <div class="container">

      <!-- Portfolio Item Row -->
      <div class="row" style="margin-top: 20px">

        <div class="col-md-8 text-center">
         <img class="img-responsive zoom-img" src="{{ URL::to('/image/' . $lensas->gambar) }}"   />
        </div>

        <div class="col-md-4">
          <!-- Berdasar Kondisi -->
          @if($lensas->status=='tersedia')
          <div class="alert alert-success" id="tersedia">
            <strong>Tersedia</strong>
          </div>
          @else
          <div class="alert alert-danger" id="tidak_tersedia">
            <strong>Tidak Tersedia</strong>
          </div>

          @endif
          <h1 class="my-3" style="margin-bottom: 1rem; color: #3E2723">{{$lensas->tipe}}</h1>

          <h1 class="my-3" style="margin-bottom: 1rem; color: #3E2723">Rp {{$lensas->harga_sewa}}</h1>

          <h4 class="my-3">Deskripsi Produk</h4>
          <p>{{ $lensas->deskripsi }}</p>
          <h4 class="my-3">Fitur</h4>
          <p>{{ $lensas->fitur }}</p>

        </div>

      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class="my-4">Related Projects</h3>

      <div class="row">

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
        </div>

      </div>
      <!-- /.row -->

    </div>
  @endsection
