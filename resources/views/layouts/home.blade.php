@extends('layouts/template')
  
  @section('title', 'Home')

  @section('header')
    
  @endsection

  @section('content')
  <div>

      <header class="masthead" style="height: 400px; margin-top: 30px; background: url({!! asset('assets/images/bg/bg_header.jpg') !!}) no-repeat center center; background-attachment: fixed;">
        <div class="overlay" style="padding-top: 100px">
          <div class="container" style="text-align: center;">
            <h2 class="display-7 text-white">Selamat Datang Di</h2>
            <h1 class="display-1 text-white">Sumber Rejeki</h1>
            <h2 class="display-7 text-white">Camera Rent</h2>
          </div>
        </div>
      </header>
      <br>
      <br>

      <div class="container text-center">
        <br>
        <h2>Sumber Rejeki Camera Rent</h2>
        <br>
        <p>Sumber Rejeki Camera Rent adalah penyedia layanan sewa kamera yang berada di Malang. Kami melayani segala kebutuhan anda terkait kamera dan alat lainnya yangg berhubungan dengan fotografi. Selain lengkap, kami juga menyediakan peralatan kamera yang uptodate. </p>
      </div>

      <!-- Product -->
      <!-- <div class="product"> 
        <div class="container">
          <div class="product-top">
            <div class="product-one">

              @foreach($item_kamera as $kamera)
              <div class="col-md-3 product-left">
                <div class="product-main simpleCart_shelfItem">
                  <a class="mask" href="/detil/kamera/{{$kamera->tipe}}"><img class="img-responsive zoom-img" src="{!! asset('assets/images/rincian/eos 5d.jpg') !!}" alt="" /></a>
                  <div class="product-bottom text-center">
                    <h4>{{ $kamera->tipe }}</h4>
                    <p>{{ $kamera->merk }}</p>
                    <h4><span class=" item_price">Rp {{ $kamera->harga_sewa }}</span></h4>
                    <a class="btn btn-primary btn-md" href="/detil/kamera/{{$kamera->tipe}}" role="button">Lihat Rincian  <i class="fa fa-search"></i></a>
                  </div>
                  <div class="srch">
                    <span>
                      <strong>HOT ITEM</strong>
                    </span>
                  </div>
                </div>
              </div>
              @endforeach

              @foreach($item_lensa as $lensa)
              <div class="col-md-3 product-left">
                <div class="product-main simpleCart_shelfItem">
                  <a class="mask" href="/detil/lensa/{{$lensa->tipe}}"><img class="img-responsive zoom-img" src="{!! asset('assets/images/rincian/eos 5d.jpg') !!}" alt="" /></a>
                  <div class="product-bottom text-center">
                    <h3>{{ $lensa->tipe }}</h3>
                    <p>{{ $lensa->merk }}</p>
                    <h4><span class=" item_price">Rp {{ $lensa->harga_sewa }}</span></h4>
                    <a class="btn btn-primary btn-md" href="/detil/lensa/{{$lensa->tipe}}" role="button">Lihat Rincian  <i class="fa fa-search"></i></a>
                  </div>
                  <div class="srch">
                    <span>
                      <strong>HOT ITEM</strong>
                    </span>
                  </div>
                </div>
              </div>
              @endforeach

              <div class="clearfix"></div>

            </div>   
          </div>
          <div class="row" style="padding-top: 30px;">
            <div class="col-md-5 col-lg-3 col-xl-4 mx-auto">
              <a class="btn btn-block btn-primary btn-lg" href="/sewa/kamera" role="button">Tampilkan Lebih Banyak  <i class="fa fa-search"></i></a>
            </div>
          </div>
        </div>
      </div> -->

      <div class="container" style="margin-top: 3rem">
        <div class="about-top grid-1">
          <div class="col-md-4 about-left">
            <a href="/sewa/kamera">
              <figure class="effect-bubba">
                <img class="img-responsive" src="{!! asset('assets/images/rincian/kamera2.jpg') !!}" alt="">
                <figcaption>
                  <h2>Kamera</h2>
                  <p>In sit amet sapien eros Integer dolore magna aliqua</p>
                </figcaption>
              </figure>
            </a>
          </div>
          <div class="col-md-4 about-left">
            <a href="/sewa/lensa">
              <figure class="effect-bubba">
                <img class="img-responsive" src="{!! asset('assets/images/rincian/lensa2.jpg') !!}" alt="">
                <figcaption>
                  <h4>Lensa</h4>
                  <p>In sit amet sapien eros Integer dolore magna aliqua</p>
                </figcaption>
              </figure>
            </a>
          </div>
          <div class="col-md-4 about-left">
            <a href="/sewa/aksesoris">
              <figure class="effect-bubba">
                <img class="img-responsive" src="{!! asset('assets/images/rincian/aksesoris2.jpg') !!}" alt="">
                <figcaption>
                  <h4>Aksesoris</h4>
                  <p>In sit amet sapien eros Integer dolore magna aliqua</p>
                </figcaption>
              </figure>
            </a>  
          </div>
          <div class="clearfix"></div>
        </div>
      </div>


      <div class="container">
        <hr size="12px">
        <br>
        <br>
        <!-- Marketing Icons Section -->
        <div class="row text-center">
            <div class="col-lg-10 mx-auto">
              <h2>Mengapa Kami?</h2>
              <br>
              <div class="row">
                <div class="col-md-4 col-sm-6">
                  <div class="service-item">
                    <span class="fa-stack fa-4x">
                      <i class="fa fa-circle fa-stack-2x" style="color: #FFF176"></i>
                      <i class="fa fa-dollar fa-stack-1x text-primary"></i>
                    </span>
                    <h4>
                      Murah
                    </h4>
                    <p>Kamilah yang pertama dan yang termurah saat ini. Kualitas pelayanan bintang lima sudah bisa anda dapatkan dengan harga kaki lima</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="service-item">
                    <span class="fa-stack fa-4x">
                      <i class="fa fa-circle fa-stack-2x" style="color: #FFF176"></i>
                      <i class="fa fa-check fa-stack-1x text-primary"></i>
                    </span>
                    <h4>
                      Mudah
                    </h4>
                    <p>Hanya bermodal jaringan internet dan gadget, anda sudah bisa memesan produk kami. Mudah sekali bukan?</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="service-item">
                    <span class="fa-stack fa-4x">
                      <i class="fa fa-circle fa-stack-2x" style="color: #FFF176"></i>
                      <i class="fa fa-thumbs-o-up fa-stack-1x text-primary"></i>
                    </span>
                    <h4>
                      Terjamin
                    </h4>
                    <p>Banyak produk kamera yang kami sediakan. Tentunya membuat pengalaman fotografi anda lebih mantab</p>
                  </div>
                </div>
              </div>
            <!-- /.row (nested) -->
            </div>
            <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
      </div>

      <br>
      <br>


    <section class="call-to-action text-center" style="background: url({!! asset('assets/images/bg/building.jpg') !!}) no-repeat center center; position: relative; background-color: #343a40; background-size: cover; padding-top: 7rem; padding-bottom: 7rem; background-attachment: fixed;">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-xl-9 mx-auto text-white">
              <h2 class="mb-4">Tertarik dengan Kami? Daftar sekarang!</h2>
            </div>
            <div class="col-md-5 col-lg-3 col-xl-4 mx-auto">
              <a class="btn btn-block btn-lg btn-primary" href="daftar">Daftar</a>
            </div>
          </div>
        </div>
      </section>

      <footer class="footer text-center">
        <div class="container">
          <div class="row">
            <div class="col-md-4 mb-5 mb-lg-0">
              <h4 class="text-uppercase mb-4">Email</h4>
              <p class="lead mb-0"><a href="mailto:sumber_rejeki.cr@gmail.com" style="font-family: teks"> sumber_rejeki.cr@gmail.com
                </a>
              </p>
            </div>
            <div class="col-md-4 mb-5 mb-lg-0">
              <h4 class="text-uppercase mb-4">Kontak</h4>
              <p class="lead mb-0">(+62) 821-1234-5678
              </p>
            </div>
            <div class="col-md-4">
              <h4 class="text-uppercase mb-4">Waktu Pelayanan</h4>
              <p class="lead mb-0">Senin - Jum'at, 6:00 sampai 17:00
              </p>
            </div>
          </div>
      </div>              
      </footer>

      <section id="contact" class="map" style="height: 25rem">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d987.8034804625202!2d112.65841082914362!3d-7.9768286715120515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6285c5c1b44e3%3A0xf6c889ac7452dc3a!2sSekolah+Menengah+Kejuruan+Telkom+Malang!5e0!3m2!1sid!2sid!4v1511447200540"></iframe>
        <br>
      </section>
  @endsection  