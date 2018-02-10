@extends('layouts/template')
  
  @section('title', 'Contact')

  @section('header')

  @endsection

  @section('content')
  <div class="py-5" id="menu" style="background: url({!! asset('assets/images/bg/bg_body.jpg') !!}) no-repeat center center; background-attachment: fixed;">
    <div class="container">
        <br>
          <form role="form" action="storeContact"  method="post"  enctype="multipart/form-data" style="padding-left: 5rem; padding-right: 5rem;">
            <div class="panel-header text-center">
              <h2>Stay in touch with us</h2>
            </div>
            <div class="panel-prosedur">
              <div class="form-group">
                @if(Session::has('success'))
                  <div class="row text-center">
                    <div class="col-md-12">
                      <div class="alert alert-success">{{Session::get('success')}}</div>
                    </div>
                  </div>
                @endif
              </div>
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="control-group form-group">
                <div class="controls">
                  <h4>Nama Lengkap :</h4>
                  <input type="text" class="form-control" id="name" name="name" required placeholder="Masukkan Nama">
                  <p class="help-block"></p>
                </div>
              </div>
              <form name="femail" onsubmit="return validasiEmail();">
              <div class="control-group form-group">
                <div class="controls">
                  <h4>Alamat Email :</h4>
                  <input type="email" class="form-control" id="email" name="email" onsubmit="return validateForm();" required placeholder="Masukkan Email">
                </div>
              </div>
            </form>
              <div class="control-group form-group">
                <div class="controls">
                  <h4>Masukan :</h4>
                  <textarea rows="10" cols="100" class="form-control" id="message" name="message" placeholder="Masukkan Pendapat" maxlength="500" style="resize:none" required></textarea>
                </div>
              </div>

              <button type="submit" value="kirim" class="btn btn-primary btn-lg" id="sendMessageButton" style="width: 100px">Kirim</button>
            </div>
          </form>

        <!-- Sweet Alert -->
        <script src="{{ asset('assets/sweetalert2/sweetalert2.min.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('assets/sweetalert2/sweetalert2.min.css') }}">

        <script>
  
          function validateForm()
          {
 // {
 // var x=document.forms["email"]["emailUser"].value;
 // var atpos=x.indexOf("@");
 // var dotpos=x.lastIndexOf(".");
 // if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
 // {

 // alert('Isi Email dengan Benar');

 // }

var nilai = document.forms["femail"]["email"].value;
var at=nilai.indexOf("@");
var dot=nilai.lastIndexOf(".");

if (at<1 || dot<at+2 || dot+2>=nilai.length)
  {

      alert('Isi Email dengan Benar');

      return false;

  }


 }
        </script>

    </div>
  </div>

</div>
  @endsection  