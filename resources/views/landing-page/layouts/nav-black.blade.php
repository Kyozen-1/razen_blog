@php
    use App\Models\Profil;

    $profil = Profil::first();
@endphp
<a href="/" class="nav_logo-link w-nav-brand" aria-label="home">
    <img src="{{ asset('images/razen-blog/logo/'.$profil->logo) }}" loading="lazy" alt="" class="nav_logo new">
</a>
<nav role="navigation" class="nav_menu_left w-nav-menu">
    <a href="{{ route('beranda') }}" aria-current="page" class="nav-link-text text-black">Beranda</a>
    <a href="{{ route('berita') }}" aria-current="page" class="nav-link-text text-black">Berita</a>
    <a href="{{ route('profesi') }}" class="nav-link-text text-black">Profesi</a>
    <a href="{{ route('teknis') }}" class="nav-link-text text-black">Teknis</a>
    <a href="{{ route('kosakata') }}" class="nav-link-text hidden text-black">Kosakata</a>
</nav>
