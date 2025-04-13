<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="{{ '/' }}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <div class="img">
                <img src="{{ asset('landing/img/ht.png') }}" alt="">
            </div>
            <h1 class="sitename">Psht - Rayon Kedu</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active">Home</a></li>
                <li class="dropdown"><a href="#details"><span>Profil</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Sejarah PSHT</a></li>
                        <li><a href="#">AD/ART</a></li>
                        <li><a href="#">Visi dan Misi</a></li>
                        <li><a href="#">Struktur Organisasi</a></li>
                    </ul>
                </li>
                <li><a href="#team">Pendaftaran</a></li>
                <li class="dropdown"><a href="#gallery"><span>Galeri</span>
                        <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Sarasehan Halal Bi Halal</a></li>
                        <li><a href="#">Sedekah Bumi (Apitan)</a></li>
                        <li><a href="#">Hari Kemerdekaan 17 Agustus</a></li>
                        <li><a href="#">Latihan Bersama</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#features"><span>Keanggotaan</span>
                        <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Daftar Anggota</a></li>
                    </ul>
                </li>
                <li><a href="#contact">Kontak</a></li>
                {{-- <li><a href="{{ url('user/login') }}" class="btn btn-get-started">Login</a></li> --}}
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>
