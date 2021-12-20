<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/master/master.css') }}" rel="stylesheet">
    @yield('css')
    <title>SMPN 31 BDL</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/main.js') }}"></script>

    @include('master.navbar')

    @yield('content')
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 footer-contact title-3">
                        <h5>Social Media Kami</h5>

                        <div class="social links text-md-left pt-3 pt-md-0 my-2">
                            <li><a href="https://www.facebook.com/spantisa.balam.9">Facebook</a></li>
                            <li><a href="https://www.instagram.com/spantisabalam/">Instagram</a></li>
                            <li><a href="https://www.youtube.com/channel/UCOLea80wiRZmRHVyUEdxwcA">Youtube</a></li>
                        </div>
                        <p>
                            Ayo Follow dan Ikuti informasi seputar kegiatan di SMPN 31
                            Bandar Lampung di
                            social media kami.
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links title-3">
                        <h5>Tentang SMPN 31 Bandar Lampung</h5>
                        <p style="max-width: 340px">SMP Negeri 31 Bandar Lampung merupakan salah
                            satu
                            Lembaga
                            Pendidikan Pertama di Kota Bandar Lampung yang beroperasi pada tanggal 22 Februari 2005
                            dengan luas tanah 11.000 m<sup>2</sup> dan luas bangunan 1.535 m<sup>2</sup>.
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links title-3">
                        <h5>Profil SMPN 31 Bandar Lampung</h5>
                        <ul>
                            <i class="bx bx-chevron-right"></i> <a href="/">Beranda</a><br>
                            <i class="bx bx-chevron-right"></i> <a href="/profil">Profil Sekolah</a><br>
                            <i class="bx bx-chevron-right"></i> <a href="/sejarah">Sejarah</a><br>
                            <i class="bx bx-chevron-right"></i> <a href="/visimisi">Visi & Misi</a><br>
                            <i class="bx bx-chevron-right"></i> <a href="/logo">Logo Sekolah</a><br>
                            <i class="bx bx-chevron-right"></i> <a href="/mars">Mars Sekolah</a>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>2021</span></strong> All Rights Reserved
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
