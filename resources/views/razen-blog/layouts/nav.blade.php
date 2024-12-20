@php
    use App\Models\Profil;

    $profil = Profil::first();
@endphp
<div id="nav" class="nav-container d-flex">
    <div class="nav-content d-flex">
        <!-- Logo Start -->
        <div class="logo position-relative">
            <a href="index.html">
            <!-- Logo can be added directly -->
            <img src="{{ asset('images/razen-blog/logo/642b9aa063e73-230404.png') }}" alt="logo" />

            <!-- Or added via css to provide different ones for different color themes -->
            {{-- <div class="img"></div> --}}
            </a>
        </div>
        <!-- Logo End -->

        <!-- User Menu Start -->
        <div class="user-container d-flex">
            <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="profile" alt="profile" src="{{ asset('acorn/acorn-elearning-portal/img/profile/profile-3.webp') }}" height="1rem"/>
            <div class="name">{{$profil->nama}}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-end user-menu wide">
            <div class="row mb-3 ms-0 me-0">
                <div class="col-12 ps-1 mb-2">
                    <div class="text-extra-small text-primary">Akun</div>
                </div>
                <div class="col-6 ps-1 pe-1">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">Info Pengguna</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mb-1 ms-0 me-0">
                <div class="col-12 p-1 mb-3 pt-3">
                    <div class="separator-light"></div>
                </div>
                <div class="col-6 pe-1 ps-1">
                <ul class="list-unstyled">
                        <li>
                            <a href="{{ route('razen-blog.logout') }}">
                                <i data-acorn-icon="logout" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
        <!-- User Menu End -->

        <!-- Menu Start -->
        <div class="menu-container flex-grow-1">
            <ul id="menu" class="menu">
                <li>
                    @if (request()->routeIs('razen-blog.admin.dashboard.index'))
                        <a href="{{ route('razen-blog.admin.dashboard.index') }}" class="active">
                    @else
                        <a href="{{ route('razen-blog.admin.dashboard.index') }}">
                    @endif
                        <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                        <span class="label">Dashboard</span>
                    </a>
                </li>
                <li>
                    @if (request()->routeIs('razen-blog.admin.profil.index'))
                        <a href="{{ route('razen-blog.admin.profil.index') }}" class="active">
                    @else
                        <a href="{{ route('razen-blog.admin.profil.index') }}">
                    @endif
                        <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                        <span class="label">Profil</span>
                    </a>
                </li>
                <li>
                    @if (request()->routeIs('razen-blog.admin.konten.index'))
                        <a href="{{ route('razen-blog.admin.konten.index') }}" class="active">
                    @else
                        <a href="{{ route('razen-blog.admin.konten.index') }}">
                    @endif
                        <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                        <span class="label">Konten</span>
                    </a>
                </li>
                <li>
                    @if (request()->routeIs('razen-blog.master-data.media-sosial.index') ||
                    request()->routeIs('razen-blog.master-data.kategori-konten.index') ||
                    request()->routeIs('razen-blog.master-data.web.index'))
                    <a href="#master_data" class="active">
                    @else
                    <a href="#master_data">
                    @endif
                        <i data-acorn-icon="notebook-1" class="icon" data-acorn-size="18"></i>
                        <span class="label">Master Data</span>
                    </a>
                    <ul id="master_data">
                        <li>
                            @if (request()->routeIs('razen-blog.master-data.media-sosial.index'))
                                <a href="{{ route('razen-blog.master-data.media-sosial.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-blog.master-data.media-sosial.index') }}">
                            @endif
                                <span class="label">Media Sosial</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-blog.master-data.kategori-konten.index'))
                                <a href="{{ route('razen-blog.master-data.kategori-konten.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-blog.master-data.kategori-konten.index') }}">
                            @endif
                                <span class="label">Kategori Konten</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-blog.master-data.web.index'))
                                <a href="{{ route('razen-blog.master-data.web.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-blog.master-data.web.index') }}">
                            @endif
                                <span class="label">Web</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    @if (request()->routeIs('razen-blog.landing-page.beranda.index') ||
                    request()->routeIs('razen-blog.landing-page.berita.index') ||
                    request()->routeIs('razen-blog.landing-page.profesi.index') ||
                    request()->routeIs('razen-blog.landing-page.teknis.index') ||
                    request()->routeIs('razen-blog.landing-page.kosakata.index') ||
                    request()->routeIs('razen-blog.landing-page.panduan.index') ||
                    request()->routeIs('razen-blog.landing-page.kontrol.index'))
                    <a href="#landing_page" class="active">
                    @else
                    <a href="#landing_page">
                    @endif
                        <i data-acorn-icon="notebook-1" class="icon" data-acorn-size="18"></i>
                        <span class="label">Landing Page</span>
                    </a>
                    <ul id="landing_page">
                        {{-- <li>
                            @if (request()->routeIs('razen-blog.landing-page.kontrol.index'))
                                <a href="{{ route('razen-blog.landing-page.kontrol.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-blog.landing-page.kontrol.index') }}">
                            @endif
                                <span class="label">Kontrol</span>
                            </a>
                        </li> --}}
                        <li>
                            @if (request()->routeIs('razen-blog.landing-page.beranda.index'))
                                <a href="{{ route('razen-blog.landing-page.beranda.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-blog.landing-page.beranda.index') }}">
                            @endif
                                <span class="label">Beranda</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-blog.landing-page.berita.index'))
                                <a href="{{ route('razen-blog.landing-page.berita.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-blog.landing-page.berita.index') }}">
                            @endif
                                <span class="label">Berita</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-blog.landing-page.profesi.index'))
                                <a href="{{ route('razen-blog.landing-page.profesi.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-blog.landing-page.profesi.index') }}">
                            @endif
                                <span class="label">Profesi</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-blog.landing-page.teknis.index'))
                                <a href="{{ route('razen-blog.landing-page.teknis.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-blog.landing-page.teknis.index') }}">
                            @endif
                                <span class="label">Teknis</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-blog.landing-page.kosakata.index'))
                                <a href="{{ route('razen-blog.landing-page.kosakata.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-blog.landing-page.kosakata.index') }}">
                            @endif
                                <span class="label">Kosakata</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-blog.landing-page.panduan.index'))
                                <a href="{{ route('razen-blog.landing-page.panduan.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-blog.landing-page.panduan.index') }}">
                            @endif
                                <span class="label">Panduan</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    @if (request()->routeIs('razen-blog.managemen-akun.penulis.index'))
                    <a href="#managemen_akun" class="active">
                    @else
                    <a href="#managemen_akun">
                    @endif
                        <i data-acorn-icon="notebook-1" class="icon" data-acorn-size="18"></i>
                        <span class="label">Managemen Akun</span>
                    </a>
                    <ul id="managemen_akun">
                        <li>
                            @if (request()->routeIs('razen-blog.managemen-akun.penulis.index'))
                                <a href="{{ route('razen-blog.managemen-akun.penulis.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-blog.managemen-akun.penulis.index') }}">
                            @endif
                                <span class="label">Penulis</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Menu End -->

        <!-- Mobile Buttons Start -->
        <div class="mobile-buttons-container">
            <!-- Scrollspy Mobile Button Start -->
            <a href="#" id="scrollSpyButton" class="spy-button" data-bs-toggle="dropdown">
                <i data-acorn-icon="menu-dropdown"></i>
            </a>
            <!-- Scrollspy Mobile Button End -->

            <!-- Scrollspy Mobile Dropdown Start -->
            <div class="dropdown-menu dropdown-menu-end" id="scrollSpyDropdown"></div>
            <!-- Scrollspy Mobile Dropdown End -->

            <!-- Menu Button Start -->
            <a href="#" id="mobileMenuButton" class="menu-button">
                <i data-acorn-icon="menu"></i>
            </a>
            <!-- Menu Button End -->
        </div>
        <!-- Mobile Buttons End -->
    </div>
    <div class="nav-shadow"></div>
</div>
