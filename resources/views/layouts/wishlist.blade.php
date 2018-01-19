@extends('layouts/template')

@section('title', 'Wish Form')

@section('header')

@endsection

@section('content')
<div class="py-5" id="menu" style="background: url({!! asset('assets/images/bg/bg_body.jpg') !!}) no-repeat center center; background-attachment: fixed;">
    <div class="container">
        <br>
        <form role="form" action="storeWishlist"  method="post"  enctype="multipart/form-data" style="padding-left: 5rem; padding-right: 5rem;">
            <div class="panel-header text-center">
                <h2>Form Wish</h2>
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
                <div class="form-group">
                    <h4 for="nama">Nama :</h4>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" required>
                    @if($errors->has('nama')) {{$errors->first('nama')}}@endif {{-- untuk validasi require --}}
                </div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <h4 for="email">Alamat Email :</h4>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
                    @if($errors->has('email')) {{$errors->first('email')}}@endif {{-- untuk validasi require --}}
                </div>
                <div class="form-group">
                    <h4 for="telepon">Nomor Telepon :</h4>
                    <input type="number" class="form-control" id="telepon" name="telepon" placeholder="Nomor Telepon" required>
                    @if($errors->has('telepon')) {{$errors->first('telepon')}}@endif {{-- untuk validasi require --}}
                </div>
                <div class="form-group">
                    <h4 for="request">Item apa yang mau anda request? :</h4>
                    <input type="text" class="form-control" id="request" name="request" placeholder="Masukkan request anda" required>
                    @if($errors->has('request')) {{$errors->first('request')}}@endif {{-- untuk validasi require --}}
                </div>
                <div class="form-group">
                    <h4 for="deskripsi">Deskripsi Item :</h4>
                    <textarea class="form-control" rows="6" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi" required></textarea>
                    @if($errors->has('deskripsi')) {{$errors->first('deskripsi')}}@endif {{-- untuk validasi require --}}
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary btn-lg" id="submit" value="submit" style="width: 100px">Submit</button>
                </div>
                <br>
                <br>
            </div>
        </form>

        <!-- Sweet Alert -->
        <script src="{{ asset('assets/sweetalert2/sweetalert2.min.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('assets/sweetalert2/sweetalert2.min.css') }}">

        <script>
            // Sweet Alert
            var has_errors = {{ $errors->count() == 0 ? 'true' : 'false' }};

            if (has_errors) {
                swal({
                  title: 'input berhasil!',
                  type: 'success',
                  html: jQuery("#ERROR_COPY").html(),
                  showCloseButton: true,
                });
            } 
        </script>

    </div>
</div>
        

@endsection