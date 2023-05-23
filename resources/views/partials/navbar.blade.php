<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <img src="{{ asset('assets/img/logo_white.png') }}" width="300" height="60" />
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li class="menu-item {{ Request::is('/') ? 'active' : '' }}"><a class="nav-link scrollto"
                        href="{{ url('/') }}">Beranda</a></li>
                <li class="menu-item {{ Request::is('about') ? 'active' : '' }}"><a class="nav-link scrollto"
                        href="{{ url('about') }}">Profil</a></li>
                <li class="menu-item {{ Request::is('foto') ? 'active' : '' }}"><a class="nav-link scrollto "
                        href="{{ 'foto' }}">Foto</a></li>
                <li class="menu-item {{ Request::is('posts') ? 'active' : '' }}"><a class="nav-link scrollto"
                        href="posts">Pengumuman Informasi</a></li>
                <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
                <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li class="dropdown"><a href="#"><span>Pilihan</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="posts">Pengumuman Informasi</a></li>
                                <li><a href="modulpjj">Modul PJJ </a></li>
                                <li><a href="#">PPDB 2023</a></li>
                                <li><a href="#">Digital Library</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('layanan') }}">Semua Layanan</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="{{ url('layanan') }}"><span>Kesiswaan</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li class="dropdown"><a href="#"><span>Ekstrakurikuler</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="{{ url('basket') }}">Basket</a></li>
                                <li><a href="{{ url('futsal') }}">Futsal</a></li>
                                <li><a href="{{ url('marchingband') }}">Marching Band</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('osis') }}">Osis</a></li>
                        <li><a href="{{ url('tatatertib') }}">Tata Tertib</a></li>
                        <li><a href="{{ url('datasiswa') }}">Data Siswa</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="{{ url('layanan') }}"><span>Kurikulum</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li class="dropdown"><a href="#"><span>Jadwal</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="{{ url('jadwalptm') }}">Jadwal PTM</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('informasikurikulum') }}">Informasi Kurikulum</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                @auth
                    <li><a class="nav-link scrollto" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout</a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endauth
                @guest
                    <li><a class="nav-link scrollto" href="{{ route('login') }}">Login</a></li>
                @endguest
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
