@extends('layouts/template')

@section('title', 'Prosedur')

@section('header')



@section('content')
    <!-- Menu -->
    <div class="py-5" id="menu" style="background: url({!! asset('assets/images/bg/bg_body.jpg') !!}) no-repeat center center; background-attachment: fixed;">
        <div class="container">
            <div class="row p-4 bg-info shadowed animate-in-down">
                <div class="col-12">
                    <h2 class="text-center">- Prosedur Sewa -</h2>
                    <br>
                    <div class="row">
                        <div class="panel-prosedur" >
                            <h4>1. Mulai</h4>
                            <ul class="">
                                <li class="">Proses sewa alat instan, cukup cari ketersediaan alat pada web.</li>
                                <li class="">Langsung ke tahap booking (cek ketersediaan alat & booking ke CP tertera).</li>
                                <li class="">Apabila anda sudah memilih barang yang ditentukan, segera lakukan pembayaran Down Payment(DP) melalui nomor rekening yang akan kami berikan pada tahap selanjutnya. Batas waktu transfer adalah 60 menit setelah anda menghubungi kami, apabali melebihi waktu, status lock pada barang pesanan anda akan kami hilangkan.</li>
                            </ul>
                        </div>
                        <div class="panel-prosedur">
                            <h4>2. Hubungi kami</h4>
                            <ul class="">
                                <li class="">Kirim data diri anda melalui nomor WA dari CP tertera meliputi : Nama Lengkap, NIK, Tempat Tanggal Lahir, Alamat, Nomor yang dapat dihubungi, foto KTP, KK, dan Paspor(Bila punya) dengan <strong style="color: red;">NAMA</strong> dan <strong style="color: red;">ALAMAT</strong> yang sama. Serta dokumen <strong style="color: red;">ASLI</strong> dan bukan fotocopy dokumen tersebut yang anda bawa saat pengambilan barang.</li>
                                <li class="">Data yang diberikan harus di wilayah MALANG. Jika anda tidak memilikinya maka anda dapat menggunakan data saudara ataupun teman anda sebagai jaminan peminjaman jika terjadi sesuatu hal yang tidak diinginkan. Dan setiap pemilik data identitas yang diserahkan tersebut diwajibkan untuk datang saat pengambilan barang untuk dicocokkan dan didokumentasikan/foto.</li>
                                <li class="">Kami berhak untuk tidak menyetujui proses Penyewaan apabila data yang diberikan tidak memenuhi verifikasi yang kami inginkan.</li>
                                <li class="">Pilih metode pengambilan. Anda ingin cash on delivery(COD) atau mengambil langsung ke toko kami. Apabila COD, tentukan kapan dan dimana anda mengambil barang.</li>

                            </ul>
                        </div>
                        <div class="panel-prosedur">
                            <h4>3. Pengambilan</h4>
                            <ul class="">
                                <li class="">Untuk pengambilan peralatan yang disewa, tidak bisa diwakilkan atau dikuasakan kepada pihak manapun.</li>
                                <li class="">Mengisi dan menandatangani form perjanjian bermaterai yang telah kami tentukan dan bersedia untuk di photo.</li>
                                <li class="">Harga dan masa waktu Penyewaan terhitung per HARI.</li>
                                <li class="">Waktu pengambilan peralatan yang disewa adalah pukul 07:00 sampai 21:00 WIB atau dapat menanyakan kepada petugas kami ketersediaan peralatan yang disewa. Bila sebelum pukul 07:00 WIB peralatan yang disewa sudah tersedia, maka peralatan tersebut dapat diambil.</li>
                                <li class="">Anda diharuskan dan berhak untuk mengecek terlebih dahulu peralatan yang akan disewa. Jika peralatan telah keluar dari tempat kami, maka kami anggap peralatan tersebut dalam kondisi BAIK</li>
                                <li class="">Semua peralatan yang kami sewakan tidak diasuransikan, oleh karena itu Penyewa bertanggungjawab penuh atas semua peralatan yang disewa dari pihak kami. Apabila terjadi kehilangan, atau kerusakan pada peralatan yang disewa dimasa waktu Penyewaan, maka biaya ganti rugi akan kami bebankan kepada Penyewa.</li>
                        </div>

                        <div class="panel-prosedur">
                            <h4>4. Pengembalian</h4>
                            <ul class="">
                                <li class="">Ambil alat di store tujuan,maka sesuai 'TOS' alat bisa diambil adalah hari H mulai pukul 06:00 atau diambil pagi hari agar lebih nyaman, menyesuaikan kebutuhan Anda, karena Store buka Senin-Jumat pukul 06,00 - 21.00</li>
                                <li class="">Menandatangani surat perjanjian sewa  di atas materai (hanya untuk awal sewa)</li>
                                <li class="">Lakukan pelunasan / kekurangan pembayaran (jika ada) pada store crew sebagai syarat ambil alat</li>
                                <li class="">Kembalikan alat di akhir tanggal sewa maksimum pukul 21:00, jika ada alasan tertentu sehingga dikategorikan terlambat (melewati pukul 21:00) akan dikenakan denda Rp 20.000/jam nya(*), diharapkan penyewa selalu berkomunikasi dengan petugas bilamana ada masalah</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection