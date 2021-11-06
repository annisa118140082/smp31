@extends('master.index')

@section('css')
    <link href="{{ asset('css/master/master.css') }}" rel="stylesheet"">
@endsection

@section('content')
                            <div class="             wrap d-flex justify-content-center flex-column">
    <div class=" landing-text d-flex flex-column justify-content-center align-items-center">
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
                    {{-- @foreach ($beritas as $berita)
                        <div class="card">
                            <img class="card-img-top" src="{{ $berita->foto }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $berita->judul }}</h5>
                                <p class="card-text">{{ $berita->isi }}</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">{{ $berita->published_at }}</small>
                            </div>
                        </div>
                    @endforeach --}}
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
                                <ul>
                                    <li>Email : <a href="mailto:smpn31balam@gmail.com">smpn31balam@gmail.com</a> / <a
                                            href="mailto:smpn31bdl@yahoo.co.id">smpn31bdl@yahoo.co.id</a></li>
                                    <li>Alamat : Jl. Drs. Alimudin Umar No. 108, Campang Raya, Sukabumi, Bandar Lampung</li>
                                    <li>Telepon : </li>
                                    <li>Fax :</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </main>
@endsection
