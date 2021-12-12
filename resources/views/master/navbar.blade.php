<nav class="navbar navbar-expand-lg navbar-transparant navbar-light position-sticky sticky-top navbar-fixed-top">
    <img src="{{ asset('img/remove-bg-logo.png') }}" class="logo-sekolah-navbar mr-2" alt="logo SMPN 31 BDL">
    {{-- <a class="navbar-brand d-flex" style="flex: 2" href="/">SMPN 31 Bandar Lampung</a> --}}

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav d-flex flex-row justify-content-center" style="flex: 1">
            <li class="nav-item active">
                <a class="nav-link" href="/">Beranda</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarProfile" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Profil</a>
                <div class="dropdown-menu" aria-labelledby="navbarProfile">
                    {{-- <a class="dropdown-item" href="/sambutan">Sambutan</a> --}}
                    <a class="dropdown-item" href="/profil">Profil Sekolah</a>
                    <a class="dropdown-item" href="/sejarah">Sejarah</a>
                    <a class="dropdown-item" href="/visimisi">Visi & Misi</a>
                    <a class="dropdown-item" href="/logo">Logo Sekolah</a>
                    <a class="dropdown-item" href="/mars">Mars Sekolah</a>
                    {{-- <a class="dropdown-item" href="/tatib">Tata Tertib</a>
                    <a class="dropdown-item" href="/struktur">Struktur Organisasi</a>
                    <a class="dropdown-item" href="/fasilitas">Fasilitas</a> --}}
                </div>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="#berita">Berita</a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="#ekstrakulikuler">Ekstrakulikuler</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="#prestasi">Prestasi</a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="#datasdm">Data SDM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#kontak">Kontak</a>
            </li>
        </ul>
    </div>
</nav>
