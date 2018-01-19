@extends('layouts/template')
    
  @section('title', 'About')  

  @section('header')

  @endsection

  @section('content')
    <div class="container" style="margin-top: 60px;">

      <!-- Intro Content -->
      <div class="row">
        <div class="col-lg-6">
          <img class="img-fluid rounded mb-4" src="{!! asset('assets/images/logo/logo3.svg') !!}" alt="">
        </div>
        <div class="col-lg-6">
          <h2>Sumber Rejeki Camera Rent</h2>
          <p>Sumber Rejeki Camera Rent adalah penyedia layanan sewa kamera yg berada di malang. kami melayani segala kebutuhan anda terkait kamera dan alat lainnya yg berhubungan dgn fotografi. selain lengkap, kami juga menyediakan peralatan kamera yg uptodate. </p>
          <p>
            Mengapa Kami?
            <ul>
              <li>Kami mengetahui pasti kebutuhan konsumen</li>
              <li>Harga yang kami tawarkan sebanding dengan kualitas dan pelayanan kami</li>

            </ul>
          </p>
        </div>
      </div>
      <!-- /.row -->
    </div>

    <section class="call-to-action text-center" style="background: url({!! asset('assets/images/bg/bg_paralax.jpg') !!}) no-repeat center center; position: relative; background-color: #343a40; background-size: cover; padding-top: 7rem; padding-bottom: 7rem; background-attachment: fixed;">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-xl-9 mx-auto text-white">
              <h2 class="mb-4">Tertarik dengan Kami? Sewa sekarang!</h2>
            </div>
            <div class="col-md-5 col-lg-3 col-xl-4 mx-auto">
              <a class="btn btn-block btn-lg btn-primary" href="/prosedurSewa">Sewa</a>
            </div>
          </div>
        </div>
    </section>

    <div class="container">
      <br>
      <!-- Team Members -->
      <h2>Our Team</h2>

      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card text-center">
            <img class="card-img-top" src="{!! asset('assets/images/team/team_dika02.png') !!}" alt="">
            <div class="card-body">
              <h4 class="card-title">M. Rahardyan Dika Adji</h4>
              <h6 class="card-subtitle mb-2 text-muted">Back End Engineer</h6>
            </div>
            <div class="card-footer">
              <div class="pr2-social centered" id="profile-dika">
                <a href="https://www.instagram.com/dikaadji/"><i class="fa fa-instagram" style="margin-right: 12px; font-size: 20px"></i></a>
                <a href="https://www.facebook.com/rdikaaadji"><i class="fa fa-facebook" style="margin-right: 12px; font-size: 20px"></i></a>
                <a href="https://mail.google.com/"><i class="fa fa-envelope alt" style="margin-right: 12px; font-size: 20px"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card text-center">
            <img class="card-img-top" src="{!! asset('assets/images/team/team_monica.png') !!}" alt="">
            <div class="card-body">
              <h4 class="card-title">Monica Briliane Putri</h4>
              <h6 class="card-subtitle mb-2 text-muted">Marketing Director</h6>
            </div>
            <div class="card-footer">
              <div class="pr2-social centered" id="profile-monica">
                <a href="https://www.instagram.com/monicabrlpt_/"><i class="fa fa-instagram" style="margin-right: 12px; font-size: 20px"></i></a>
                <a href="https://www.facebook.com/monicabrlpt"><i class="fa fa-facebook" style="margin-right: 12px; font-size: 20px"></i></a>
                <a href="https://mail.google.com/"><i class="fa fa-envelope alt" style="margin-right: 12px; font-size: 20px"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card text-center">
            <img class="card-img-top" src="{!! asset('assets/images/team/team_rizky.png') !!}" alt="">
            <div class="card-body">
              <h4 class="card-title">Muhammad Rizky Ajie S.</h4>
              <h6 class="card-subtitle mb-2 text-muted">UI Engineer</h6>
            </div>
            <div class="card-footer">
              <div class="pr2-social centered" id="profile-rizky">
                <a href="https://www.instagram.com/rizky.ajie/"><i class="fa fa-instagram" style="margin-right: 12px; font-size: 20px"></i></a>
                <a href="https://www.facebook.com/rizky.soelistyo"><i class="fa fa-facebook" style="margin-right: 12px; font-size: 20px"></i></a>
                <a href="https://mail.google.com/"><i class="fa fa-envelope alt" style="margin-right: 12px; font-size: 20px"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <br>
        <hr class="small">
      <br>
      <!-- Our Customers -->
      <h2>Produk Kami</h2>
      <!-- <div class="row">
        <div class="col-lg-2 col-sm-5 mb-5">
          <img class="img-fluid" src="{!! asset('assets/images/logo/partner/canon.png') !!}" alt="">
        </div>
        <div class="col-lg-2 col-sm-5 mb-5">
          <img class="img-fluid" src="{!! asset('assets/images/logo/partner/nikon.png') !!}" alt="">
        </div>
        <div class="col-lg-2 col-sm-5 mb-5">
          <img class="img-fluid" src="{!! asset('assets/images/logo/partner/samsung.png') !!}" alt="">
        </div>
        <div class="col-lg-2 col-sm-5 mb-5">
          <img class="img-fluid" src="{!! asset('assets/images/logo/partner/sony.png') !!}" alt="">
        </div>
        <div class="col-lg-2 col-sm-5 mb-5">
          <img class="img-fluid" src="{!! asset('assets/images/logo/partner/gopro.png') !!}" alt="">
        </div>
      </div> -->

      <div class="row" id="our-product">
          <img class="img-fluid" src="{!! asset('assets/images/logo/partner/canon.png') !!}" alt="">
          <img class="img-fluid" src="{!! asset('assets/images/logo/partner/nikon.png') !!}" alt="">
          <img class="img-fluid" src="{!! asset('assets/images/logo/partner/samsung.png') !!}" alt="">
          <img class="img-fluid" src="{!! asset('assets/images/logo/partner/sony.png') !!}" alt="">
          <img class="img-fluid" src="{!! asset('assets/images/logo/partner/gopro.png') !!}" alt="">
      </div>
      <!-- /.row -->
      <style>
        #our-product img{
          float: left;
          width: 18%;
          height: 18%;
          margin: 1%;
        }
      </style>
    </div>
  @endsection  