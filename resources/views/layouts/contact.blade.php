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
              <h2>Get in touch with us</h2>
            </div>
            <div class="panel-prosedur">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="control-group form-group">
                <div class="controls">
                  <h4>Nama Lengkap :</h4>
                  <input type="text" class="form-control" id="name" name="name" required data-validation-required-message="Please enter your name.">
                  <p class="help-block"></p>
                </div>
              </div>
              <div class="control-group form-group">
                <div class="controls">
                  <h4>Alamat Email :</h4>
                  <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                </div>
              </div>
              <div class="control-group form-group">
                <div class="controls">
                  <h4>Masukan :</h4>
                  <textarea rows="10" cols="100" class="form-control" id="message" name="message" data-validation-required-message="Please enter your message" maxlength="999" style="resize:none" required></textarea>
                </div>
              </div>

              <button type="submit" class="btn btn-primary btn-lg" id="sendMessageButton" style="width: 100px">Kirim</button>
            </div>
          </form>

        <!-- Sweet Alert -->
        <script src="{{ asset('assets/sweetalert2/sweetalert2.min.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('assets/sweetalert2/sweetalert2.min.css') }}">

        <script>
          // Sweet Alert
        </script>

    </div>
  </div>

</div>
  @endsection  