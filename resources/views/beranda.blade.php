@extends('master.index')

@section('css')
    <link href="{{ secure_asset('css/master/master.css') }}" rel="stylesheet">
@endsection

@section('content')
    <section id="hero" class="wrap d-flex justify-content-center flex-column">
        <div class=" landing-text d-flex flex-column justify-content-center align-items-center">
            <div class="big-text mb-3" style="background-color: white">
                SMP NEGERI 31 BANDAR LAMPUNG
            </div>
        </div>
    </section>


    <main>
        <div class="content">

            <article id="ekstrakulikuler" style="background-color: #ffffff">
                <div class=" title">
                    Ekstrakulikuler
                </div>
                {{-- <div class="bar"></div> --}}
                <div class="card-deck">
                    <div class="card col-lg-4 col-md-6 d-flex align-items-stretch" style="background-color: #D3A537">
                        {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                        <div class="card-body">
                            <h5 class="card-title">OSIS</h5>
                        </div>
                    </div>
                    <div class="card col-lg-4 col-md-6 d-flex align-items-stretch"
                        style="background-color: rgb(71, 160, 86)">
                        {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                        <div class="card-body">
                            <h5 class="card-title">PRAMUKA</h5>
                        </div>
                    </div>
                    <div class="card col-lg-4 col-md-6 d-flex align-items-stretch" style="background-color: #c5a0ce">
                        {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                        <div class="card-body">
                            <h5 class="card-title">PASKIBRA</h5>
                        </div>
                    </div>
                </div>
                <div class="card-deck">
                    <div class="card col-lg-4 col-md-6 d-flex align-items-stretch" style="background-color: #178FD6">
                        {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                        <div class="card-body">
                            <h5 class="card-title">SENI TARI</h5>
                        </div>
                    </div>
                    <div class="card col-lg-4 col-md-6 d-flex align-items-stretch" style="background-color: #E0457F">
                        {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                        <div class="card-body">
                            <h5 class="card-title">TAEKWONDO</h5>
                        </div>
                    </div>
                    <div class="card col-lg-4 col-md-6 d-flex align-items-stretch" style="background-color: #91c5e7">
                        {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                        <div class="card-body">
                            <h5 class="card-title">OLAHRAGA</h5>
                        </div>
                    </div>
                </div>
                <div class="card-deck">
                    <div class="card col-lg-4 col-md-6 d-flex align-items-stretch" style="background-color: #E3919D">
                        {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                        <div class="card-body">
                            <h5 class="card-title">PMR</h5>
                        </div>
                    </div>
                    <div class="card col-lg-4 col-md-6 d-flex align-items-stretch" style="background-color: #B6DF82">
                        {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                        <div class="card-body">
                            <h5 class="card-title">ROHIS</h5>
                        </div>
                    </div>
                    <div class="card col-lg-4 col-md-6 d-flex align-items-stretch" style="background-color: #F38062">
                        {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                        <div class="card-body">
                            <h5 class="card-title">PKS</h5>
                            <h5 class="card-title">(Patroli Keamanan Sekolah)</h5>
                        </div>
                    </div>
                </div>
            </article>

            <article id="datasdm" style="background-color: #9edfac">
                <section id="team">

                    <div class="title">
                        Data SDM
                    </div>

                    <div class="row">
                        <div class="card-deck">
                            <div class="card col-lg-3 col-md-6 d-flex align-items-stretch">
                                <img src="{{ secure_asset('img/dataSDM-kepsek.jpeg') }}" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Drs. Mahmud Muin</h5>
                                    <h6 class="card-title-nip">NIP 19621107 198803 1 006</h6>
                                    <p class="card-text mt-5">Kepala Sekolah SMPN 31 Bandar Lampung</p>
                                </div>
                            </div>

                            <div class="card col-lg-3 col-md-6 d-flex align-items-stretch">
                                <img src="{{ secure_asset('img/dataSDM-wakasek-humas.jpg') }}" class="card-img-top"
                                    alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Made Suyasmini, S.Pd</h5>
                                    <p class="card-text mt-5">Wakil Kepala Sekolah bidang Hubungan Masyarakat dan
                                        Kesiswaan SMPN 31
                                        Bandar Lampung</p>
                                </div>
                            </div>

                            <div class="card col-lg-3 col-md-6 d-flex align-items-stretch">
                                <img src="{{ secure_asset('img/dataSDM-wakasek-sapras.jpg') }}" class="card-img-top"
                                    alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Susmiyatin, S.Ag., M.Pd.I</h5>
                                    <p class="card-text mt-5">Wakil Kepala Sekolah bidang Sarana dan Prasarana SMPN
                                        31
                                        Bandar
                                        Lampung</p>
                                </div>
                            </div>

                            <div class="card col-lg-3 col-md-6 d-flex align-items-stretch">
                                <img src="{{ secure_asset('img/dataSDM-wakasek-kurikulum.jpg') }}" class="card-img-top"
                                    alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Rini Pangastuti, S.Pd, MM</h5>
                                    <p class="card-text mt-5">Wakil Kepala Sekolah bidang Kurikulum SMPN 31 Bandar
                                        Lampung</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </article>

            <article id="kontak">

                <section id="contact" class="contact">
                    <div class="container">

                        <div class="section-title title">
                            Hubungi Kami
                        </div>

                        <div class="row">

                            <div class="title-2 col-lg-6">
                                <div class="mb-4" style="font-size: 24px; font-weight: 600;">
                                    Denah Lokasi
                                </div>
                                <div class="row">
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

                            </div>

                            <div class="col-lg-6">
                                <div class="title-2 " style="font-size: 24px; font-weight: 600;">
                                    Kontak
                                </div>
                                <div>
                                    <ul>
                                        <li>Email : <a href="mailto:smpn31balam@gmail.com">smpn31balam@gmail.com</a> / <a
                                                href="mailto:smpn31bdl@yahoo.co.id">smpn31bdl@yahoo.co.id</a></li>
                                        <li>Alamat : Jl. Drs. Alimudin Umar No. 108, Campang Raya, Sukabumi, Bandar Lampung
                                        </li>
                                        <li>Telepon : <a href="tel:+6281541294569">081541294569</a> / <a
                                                href="tel:+6282377001429">082377001429</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>
                </section>
            </article>
        </div>
    </main>
@endsection
