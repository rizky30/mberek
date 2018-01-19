@extends('layouts/template')

@section('title', 'Wishlist')

@section('header')

@endsection

@section('content')
<div class="py-5" id="menu" style="background: url({!! asset('assets/images/bg/bg_body.jpg') !!}) no-repeat center center; background-attachment: fixed;">
    <div class="container">
        <br>
        <form role="form" action="storeWishlist"  method="post"  enctype="multipart/form-data" style="padding-left: 5rem; padding-right: 5rem;">
            <div class="panel-header text-center">
                <h2>Form Wishlist</h2>
            </div>
            <div class="panel-prosedur">
                <div class="form-group">
                    <h4 for="nama">Nama :</h4>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" required>
                </div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <h4 for="email">Alamat Email :</h4>
                    <input type="email" class="form-control" id="email" name="email" Enter email" required>
                </div>
                <div class="form-group">
                    <h4 for="telepon">Nomor Telepon :</h4>
                    <input type="tel" class="form-control" id="telepon" name="telepon" placeholder="Nomor Telepon" required>
                </div>
                <div class="form-group">
                    <h4 for="request">Item apa yang mau anda request? :</h4>
                    <input type="text" class="form-control" id="request" name="request" placeholder="Masukkan request anda" required>
                </div>
                <div class="form-group">
                    <h4 for="deskripsi">Deskripsi Item :</h4>
                    <textarea class="form-control" rows="6" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi" required></textarea>
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
        </script>

    </div>
</div>
        

@endsection