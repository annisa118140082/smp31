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
    <link href="{{ asset('css/master/master.css') }}" rel="stylesheet">
    @yield('css')
    <title>SMP Negeri 31 BDL</title>
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
    <script src="{{ asset('js/master.js') }}"></script>

    @include('master.navbar');

    @yield('content')
    {{-- <div class="landing-text d-flex flex-column justify-content-center align-items-center">
            <div class="big-text mb-3">
                SMP NEGERI 31 BANDAR LAMPUNG
            </div>
            <div>
                <form class="form-control form-control-lg d-flex flex-row">
                    <input class="form-control mr-sm-2 pr-5" type="search" placeholder="Cari informasi">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
                </form>
            </div>
        </div>

    </div>
    <main>
        <div class="content">
            <article id="berita">
                <div class="title">
                    Berita
                </div>
                <div class="bar"></div>
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to
                                additional content.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to additional content. This card has even longer content than the first to show
                                that equal height action.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </article>

            <article id="ekstrakulikuler">
                <div class="title">
                    Ekstrakulikuler
                </div>
                <div class="bar"></div>
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to
                                additional content.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to additional content. This card has even longer content than the first to show
                                that equal height action.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </article>

            <article id="prestasi">
                <div class="title">
                    Prestasi
                </div>
                <div class="bar"></div>
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to
                                additional content.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to additional content. This card has even longer content than the first to show
                                that equal height action.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </article>

            <article id="datasdm">
                <div class="title">
                    Data SDM
                </div>
                <div class="bar"></div>
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to
                                additional content.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to additional content. This card has even longer content than the first to show
                                that equal height action.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </article>

            <article id="kontak">
                <div class="artikel pb-5">
                    <div class="title">
                        Hubungi Kami
                    </div>
                    <div class="artikel-kontak d-flex flex-row justify-content-between">
                        <div class="mr-2">
                            <div class="title-2">
                                Denah Lokasi
                            </div>
                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe width="500" height="500" id="gmap_canvas"
                                        src="https://maps.google.com/maps?q=smpn%2031%20bandar%20lampung&t=&z=15&ie=UTF8&iwloc=&output=embed"
                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                    </iframe>
                                    <a href="https://getasearch.com/nordvpn-coupon/"></a><br>
                                    <style>
                                        .mapouter {
                                            position: relative;
                                            text-align: right;
                                            height: 500px;
                                            width: 500px;
                                        }

                                    </style>
                                    <a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
                                    <style>
                                        .gmap_canvas {
                                            overflow: hidden;
                                            background: none !important;
                                            height: 500px;
                                            width: 500px;
                                        }

                                    </style>

                                </div>
                            </div>
                        </div>

                        <div class="ml-2">
                            <div class="title-2">
                                Kontak
                            </div>
                            <div>
                                Email :
                                Alamat :
                                Telepon :
                                Fax :
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </main> --}}
    <footer class="footer d-flex flex-row">
        <div class="title-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt mollitia eum eveniet similique laborum.
            Dolores enim eligendi omnis a aliquam minus amet, quasi alias voluptates odio quaerat iste quia debitis.
        </div>
        <div class="title-2">
            Kotak Saran
            <form id="form-submit" action="" method="POST">
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
    </footer>
</body>

</html>
