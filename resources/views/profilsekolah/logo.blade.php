@extends('master.index')

@section('css')
    <link rel="stylesheet" href="{{ secure_asset('css/profilsekolah/isi-profil.css') }}">
@endsection

@section('content')
    <div class="container-fluid bg-white pb-5">
        <div class="isi">
            <h1 class="mb-4 font-weight-bold">Logo SMPN 31 Bandar Lampung</h1>
            <div class="d-flex flex-row">
                <img src="{{ secure_asset('img/logosekolah.jpg') }}" class="img-fluid logo-sekolah" alt="logo SMPN 31 BDL">
                <p>SMP Negeri 31 Bandar Lampung akhirnya resmi memiliki logo sekolah, ini setelah disahkan dalam rapat warga
                    SMP
                    Negeri 31 Bandar Lampung pada
                    Tanggal 5 Juni 2014. Lambang tersebut akan segera disosialisasikan untuk selanjutnya digunakan secara
                    resmi.
                    Logo berbentuk
                    perisai bersudit 5 (lima) yang melambangkan lima Sila dengan warna dasar biru yang menggambarkan tekat
                    dan kesanggupan memajukan dunia pendidikan, di dalamnya terdapat gambar Payung dan Siger melambangkan
                    khas Lampung, Nyala Api, Pena dan Buku sebagai lambang semangat yang membara untuk kemajuan pendidikan
                    di SM
                    Negeri 31 Bandar Lampung, Pita bertuliskan SAI WAWAI berarti YANG BAGUS.<br><br>
                    Pada tanggal 2 Agustus 2017, logo mengalami perubahan bentuk seperti berikut. Logo berbentuk
                    perisai bersudut 5 (lima) yang melambangkan Lima Sila dengan warna dasar biru yang menggambarkan tekat
                    dan kesanggupan memajukan dunia pendidikan, di dalamnya terdapat gambar Payung dan Siger melambangkan
                    khas Lampung, Nyala Api, Pena dan Buku sebagai lambang semangat yang membara untuk kemajuan pendidikan
                    di SM
                    Negeri 31 Bandar Lampung, Pita bertuliskan SAI WAWAI berarti YANG BAGUS.
                </p>
            </div>
        </div>
    </div>
@endsection
