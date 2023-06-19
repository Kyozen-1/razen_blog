@php
    use App\Models\Profil;

    $profil = Profil::first();
@endphp
<a href="/" class="nav_logo-link w-nav-brand" aria-label="home">
    <img src="{{ asset('images/razen-blog/logo/'.$profil->logo) }}" loading="lazy" alt="" class="nav_logo new">
</a>
<nav role="navigation" class="nav_menu_left w-nav-menu">
    <a href="{{ route('beranda') }}" aria-current="page" class="nav-link-text w--current">Beranda</a>
    <a href="{{ route('berita') }}" aria-current="page" class="nav-link-text w--current">Berita</a>
    <a href="{{ route('profesi') }}" class="nav-link-text">Profesi</a>
    <a href="{{ route('teknis') }}" class="nav-link-text">Teknis</a>
    <a href="{{ route('kosakata') }}" class="nav-link-text hidden">Kosakata</a>
</nav>
