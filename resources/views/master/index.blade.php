<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="{{ secure_asset('css/master/master.css') }}" rel="stylesheet">
    @yield('css')
    <title>SMPN 31 BDL</title>
</head>

<body>
    {{-- <div class="wrap d-flex justify-content-center flex-column"> --}}
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="{{ secure_asset('js/master.js') }}"></script>

    @include('master.navbar')

    @yield('content')
    <footer class="footer d-flex flex-row">
        <div class="title-3">
            <ul>
                <h5>Social Media Kami</h5>
                <li><a href="https://www.facebook.com/Smpn31BandarLampung/">Facebook</a></li>
                <li><a href="https://www.instagram.com/spantisabalam/">Instagram</a></li>
                <li><a href="https://www.youtube.com/channel/UCOLea80wiRZmRHVyUEdxwcA">Youtube</a></li>
            </ul>
            <p style="max-width: 200px; font-family: roboto;">Ayo Follow dan Ikuti informasi seputar kegiatan di SMPN 31
                Bandar Lampung di
                social media kami.</p>
        </div>
        <div class="title-3">
            <ul>
                <h5 class="mb-2">Tentang SMPN 31 Bandar Lampung</h5>
                <p style="max-width: 340px; font-family: roboto;">SMP Negeri 31 Bandar Lampung merupakan salah satu
                    Lembaga
                    Pendidikan Pertama di Kota Bandar Lampung yang beroperasi pada tanggal 22 Februari 2005
                    dengan luas tanah 11.000 m2 dan luas bangunan 1.535 m2.
                </p>
            </ul>
        </div>
        <div class="title-2">
            Kotak Saran
            <form id="form-submit" action="" method="POST" class="mt-2">
                <div class="form-group">
                    {{-- <label for="formGroupExampleInput">Nama</label> --}}
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama">
                </div>
                <div class="form-group">
                    {{-- <label for="formGroupExampleInput2">Email</label> --}}
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email">
                </div>
                <div class="form-group">
                    {{-- <label for="formGroupExampleInput2">No Telepon</label> --}}
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="No Telepon">
                </div>
                <div class="form-group">
                    {{-- <label for="exampleFormControlTextarea1">Pesan</label> --}}
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                        placeholder="Tulis Pesan"></textarea>
                </div>
                <div>
                    <button type="submit" form="form-submit" class="btn btn-submit">Kirim</button>
                </div>
            </form>
        </div>
        <div>

        </div>
    </footer>
</body>

</html>
