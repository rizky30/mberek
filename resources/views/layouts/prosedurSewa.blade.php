@extends('layouts/template')

@section('title', 'About')

@section('header')



@section('content')
<!-- Menu -->
<div class="py-5 text-center" id="menu">
    <div class="container">
        <div class="row p-4 bg-info shadowed animate-in-down">
            <div class="col-12">
                <h2>Prosedur Sewa</h2>

                <div class="row">
                    <div class="col-md-3" >
                        <h5>1. Mulai</h5>
                        <ul class="">
                            <li class="">Proses sewa alat instan, tidak perlu melalui proses verifikasi & survey</li>
                            <li class="">Langsung ke tahap booking (cek ketersediaan alat & booking ke CS, kemudian isi data disini)
                                <br></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>2. Verifikasi</h5>
                        <ul class="">

                            <li class="">Pastikan nomor kamu selalu dalam keadaan aktif dan mudah dihubungi</li>

                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>3. Booking</h5>
                        <ul class="">
                            <li class="">Penyewa cek ketersediaan alat & booking alat ke Customer Service melalui Whats App, Line, Call, SMS, booking online (diprioritaskan WA)</li>
                            <li class="">Penyewa menerima invoice, memastikan apa pesanan sudah benar</li>
                            <li class="">Penyewa mentransfer Down Payment (DP), dengan batas waktu transfer 60 menit (alat akan di-lock), jika melebihi dari batas waktu transfer, penyewa wajib konfirm ulang ketersediaan alat yang sewaktu-waktu dapat berubah.</li>
                            <li class="">Penyewa mendapat Invoice baru dengan keterangan DP sudah diterima / Lunas</li>
                            <li>Bagi penyewa non-member, DP wajib berupa pelunasan harga sewa sekaligus total uang jaminan</li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h5>4. Pick Up</h5>
                        <ul class="">
                            <li class="">Ambil alat di store tujuan,maka sesuai 'TOS' alat bisa diambil adalah hari H mulai pukul 06:00 atau diambil pagi hari agar lebih nyaman, menyesuaikan kebutuhan kamu, karena Store buka Semin-Jumat pukul 06,00 - 21.00</li>
                            <li class="">menandatangani surat perjanjian sewa  di atas materai (hanya untuk awal sewa)</li>
                            <li class="">Lakukan pelunasan / kekurangan pembayaran (jika ada) pada store crew sebagai syarat ambil alat</li>
                            <li class="">Kembalikan alat di akhir tanggal sewa maksimum pukul 21:00</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

    @endsection