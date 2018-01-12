@extends('layouts/template')

@section('title', 'Home')

@section('header')

@endsection

@section('content')
    <div>

        <header class="masthead" style="height: 400px; margin-top: 30px; background: url({!! asset('assets/images/bg/bg_header.jpg') !!}) no-repeat center center; background-attachment: fixed;">
            <div class="overlay" style="padding-top: 100px">
                <div class="container" style="text-align: center;">

                    <h1 class="display-1 text-white">Camera</h1>
                    <h2 class="display-7 text-white">Wish List</h2>
                </div>
            </div>
        </header>
        <br>
        <br>
        <div class="container-fluid">
        <form role="form" action="storeWishlist"  method="post"  enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama">
                </div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" Enter email">
                </div>
                <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input type="tel" class="form-control" id="telepon" name="telepon" placeholder="telepon">
                </div>
                <div class="form-group">
                    <label for="request">alat apa yang mau anda request?</label>
                    <input type="text" class="form-control" id="request" name="request" placeholder="Masukkan request anda">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" rows="6" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi" ></textarea>
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary" id="submit" value="submit">Submit</button>
                </div>
                <br><br>
            </div>

        @endsection