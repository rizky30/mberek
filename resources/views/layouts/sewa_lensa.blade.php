@extends('layouts/template')
    
  @section('title', 'Sewa')

  @section('content')  
    <div class="container" style="margin-top: 60px;">

      <!-- <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/home">Home</a>
        </li>
        <li class="breadcrumb-item active">Sewa</li>
      </ol> -->
      
      <!-- Page Heading/Breadcrumbs -->
      <div class="row text-center">
        <div class="col-lg-10 mx-auto">
          <h2>CEK KETERSEDIAAN PRODUK</h2>
          <br>
        </div>

        <form action="{{ url('searchLensa') }}" method="GET" class="col-md-5 col-lg-3 col-xl-4 mx-auto">
          <div class="box-tools">
              <div class="input-group input-group-sm">
                <input type="text" name="q" class="form-control pull-right validate" placeholder="Cari Produk Lensa" style="width: 500px; height: 40px">
                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
              <span style="padding-top: 10px" class="col-md-6">
                <a class="btn btn-block btn-lg btn-success" href="/sewa/lensa/tersedia">Tersedia</a>
              </span>
              <span style="padding-top: 10px" class="col-md-6">
                <a class="btn btn-block btn-lg btn-danger" href="/sewa/lensa/tidak_tersedia">Kosong</a>
              </span>
          </div>
        </form>
      </div>

      <div class="row">
        <div class="product-top" style="margin-bottom: 50px">
            <div class="product-one">
              @foreach($lensas as $lensa)
              <div class="col-md-3 product-left">
                <div class="product-main product-main-alert simpleCart_shelfItem">

                  <!-- Berdasar Kondisi -->
                  @if($lensa->status=='tersedia')
                  <div class="alert alert-success alert-product" id="tersedia">
                    <strong>Tersedia</strong>
                  </div>
                  @else
                  <div class="alert alert-danger alert-product" id="tidak_tersedia">
                    <strong>Tidak Tersedia</strong>
                  </div>
                  @endif

                  <a class="mask" href="/detil/lensa/{{$lensa->id_lensa}}">
                    <img class="img-responsive zoom-img" src="{{ URL::to('/image/' . $lensa->gambar) }}"   />

                  </a>
                  <div class="product-bottom text-center">
                    <h3>{{ $lensa->tipe }}</h3>
                    <p>{{ $lensa->merk }}</p>
                    <h4><span class=" item_price">{{ $lensa->harga_sewa }}</span></h4>
                  </div>
                </div>
              </div>
              @endforeach

              <div class="clearfix"></div>
            </div>   
          </div>

      </div>
    </div>
  @endsection
