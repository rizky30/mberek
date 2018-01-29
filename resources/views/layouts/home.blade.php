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

      <div class="container" style="margin-top: 3rem">
        <div class="about-top grid-1">
          <div class="col-md-4 about-left">
            <a href="/sewa/kamera">
              <figure class="effect-bubba">
                <img class="img-responsive" src="{!! asset('assets/images/rincian/kamera2.jpg') !!}" alt="">
                <figcaption>
                  <h2>Kamera</h2>
                  <p>Cek ketersediaan kamera</p>
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
                  <p>Cek ketersediaan lensa</p>
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
                  <p>Cek ketersediaan aksesoris</p>
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

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="background: url({!! asset('assets/images/bg/building.jpg') !!}) no-repeat center center; position: relative; background-color: #343a40; background-size: cover; padding-top: 2rem; padding-bottom: 2rem; background-attachment: fixed; height: 40rem">
      <ol class="carousel-indicators" style="margin-bottom: 50px">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-caption d-none d-md-block" style="position: unset;">
          <h1 style="font-family: Capinella;font-size: 5rem">Customer Says</h1>
        </div>
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active">
            <div class="carousel-caption d-none d-md-block" style="margin-bottom: 100px">
              <img class="img-circle" src="{!! asset('assets/images/testi/ci.jpg') !!}" alt="" style="height: 200px; width: 200px;">
              <br>
              <br>
              <h3>Chelsea Islan</h3>
              <p style="padding-left: 100px; padding-right: 100px;">" Doing the extra mile. Kata kata tersebut yang pertama kali terlintas pada saat pengalaman pertama kali sewa kamera di Sumber Rejeki Camera Rent. Very like it! "</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item">
            <div class="carousel-caption d-none d-md-block" style="margin-bottom: 100px">
              <img class="img-circle" src="{!! asset('assets/images/testi/gg.jpg') !!}" alt="" style="height: 200px; width: 200px;">
              <br>
              <br>
              <h3>Gita Gutawa</h3>
              <p style="padding-left: 100px; padding-right: 100px;">" Barangnya bagus, pelayanannya baik. Langsung di respon lo, gapake lama deh! Barangnya juga bagus dan terawat dengan baik, Pokoknya recommended banget! "</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item">
            <div class="carousel-caption d-none d-md-block" style="margin-bottom: 100px">
              <img class="img-circle" src="{!! asset('assets/images/testi/bcl.jpg') !!}" alt="" style="height: 200px; width: 200px;">
              <br>
              <br>
              <h3>Bunga Citra Lestari</h3>
              <p style="padding-left: 100px; padding-right: 100px;">" Suka bete banget kalo lagi travelling lupa bawa kamera. Solusi cepatnya ya cuman sewa kamera, suka banget sama Sumber Rejeki Camera Rent. Karena Pelayanannya baik dan barangnya selalu up to date. Good Job! "</p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


    {{--<section class="call-to-action text-center" style="background: url({!! asset('assets/images/bg/building.jpg') !!}) no-repeat center center; position: relative; background-color: #343a40; background-size: cover; padding-top: 7rem; padding-bottom: 7rem; background-attachment: fixed;">--}}
        {{--<div class="overlay"></div>--}}
        {{--<div class="container">--}}
          {{--<div class="row">--}}
            {{--<div class="col-xl-9 mx-auto text-white">--}}
              {{--<h2 class="mb-4">Tertarik dengan Kami? Sewa sekarang!</h2>--}}
            {{--</div>--}}
            {{--<div class="col-md-5 col-lg-3 col-xl-4 mx-auto">--}}
              {{--<a class="btn btn-block btn-lg btn-primary" href="/prosedurSewa">Sewa</a>--}}
            {{--</div>--}}
          {{--</div>--}}
        {{--</div>--}}
      {{--</section>--}}

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
              <p class="lead mb-0">Senin - Jum'at, 6:00 sampai 21:00
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