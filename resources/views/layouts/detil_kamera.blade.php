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
<img src="{{ URL::to('/image/' . $kameras->gambar) }}" width="500" height="350"  />
        </div>

        <div class="col-md-4">
          <!-- Berdasar Kondisi -->
            @if($kameras->status=='tersedia')

          <div class="alert alert-success" id="tersedia">
            <strong>Tersedia</strong>
          </div>
          @else
          <div class="alert alert-danger" id="tidak_tersedia">
            <strong>Tidak Tersedia</strong>
          </div>

          @endif
          <h1 class="my-3" style="margin-bottom: 1rem; color: #3E2723">{{$kameras->tipe}}</h1>

          <h1 class="my-3" style="margin-bottom: 1rem; color: #3E2723">{{$kameras->harga_sewa}}</h1>

          <h4 class="my-3">Deskripsi Produk</h4>
          <p>{{ $kameras->deskripsi }}</p>
          <h4 class="my-3">Fitur</h4>
          <p>{{ $kameras->fitur }}</p>
          <br>
        </div>

      </div>
      <!-- /.row -->

     

    </div>
  @endsection
