@php
    use App\Models\Profil;
    use App\Models\PivotProfilMediaSosial;
    use App\Models\MasterMediaSosial;
    use Carbon\Carbon;

    $profil = Profil::first();

    $cek_pivot = PivotProfilMediaSosial::where('profil_id', $profil->id)->first();
        $pivot_profil_media_sosial = [];
        if($cek_pivot)
        {
            $pivot_profil_media_sosial = [
                'status' => 'ada',
                'pivot' => PivotProfilMediaSosial::where('profil_id', $profil->id)->get()
            ];
        } else {
            $pivot_profil_media_sosial = [
                'status' => 'tidak ada',
                'pivot' => ''
            ];
        }

@endphp
<div class="footer">
    <div class="page-padding">
        <div class="container-large">
            <div class="padding-vertical padding-large is-custom-padding-bottom">
                <div class="footer_component">
                    <div class="margin-bottom margin-large new">
                        <div class="footer2_content">
                            <div class="footer2_content-left">
                                <a href="/" class="footer_logo-link-block w-inline-block">
                                    <img src="{{ asset('images/razen-blog/logo/'.$profil->logo) }}" loading="lazy" alt="" class="foote_logo">
                                </a>
                            </div>
                            <div id="w-node-_5ec2433e-88a4-d583-414b-4737dfaf425f-d15d6b96" class="footer-content-block">
                                <div class="footer2_content-right _5-column mb">
                                    <div class="footer2_links-col">
                                        <div class="text-weight-bold text-style-allcaps">Halaman</div>
                                        <div class="footer2_links-list">
                                            <a id="apply13" href="{{ route('beranda') }}" class="footer2_link-2">Beranda</a>
                                            <a id="apply14" href="{{ route('berita') }}" class="footer2_link-2">Berita</a>
                                            <a id="apply15" href="{{ route('profesi') }}" class="footer2_link-2">Profesi</a>
                                            <a id="apply16" href="{{ route('teknis') }}" class="footer2_link-2">Teknis</a>
                                            <a id="apply16" href="{{ route('kosakata') }}" class="footer2_link-2">Kosakata</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer_bottom-row">
                        <div class="footer_bottom-left-column">
                            <div class="footer_copyright">© {{Carbon::now()->year}} {{$profil->pt}}. <br>All Rights Reserved </div>
                        </div>
                        <div class="footer_bottom-center-column">
                            <div class="footer_email text-align-center mobile-text-right">More Questions? Email us at <br>
                                <a href="mailto:{{$profil->email}}">
                                    <span class="footer_email-span">{{$profil->email}}</span>
                                </a>
                            </div>
                        </div>
                        <div class="footer_bottom-right-column">
                            @if ($pivot_profil_media_sosial['status'] == 'ada')
                                @foreach ($pivot_profil_media_sosial['pivot'] as $item)
                                    <a href="{{$item->tautan}}" target="_blank" class="footer_social-link-block w-inline-block">
                                        <img src="{{ asset('images/razen-blog/ikon/'.$item->media_sosial->kode_ikon) }}" height="30rem" loading="lazy" alt="" class="footer_logo-instagram">
                                    </a>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
