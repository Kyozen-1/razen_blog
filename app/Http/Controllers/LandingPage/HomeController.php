<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konten;
use App\Models\MasterKategoriKonten;
use App\Models\PivotKontenTerkait;
use App\Models\PivotSubJudulKonten;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    public function beranda()
    {
        return view('landing-page.beranda.index');
    }

    public function berita()
    {
        $getKontens = Konten::whereHas('kategori_konten', function($q){
            $q->where('tipe_konten', 'berita');
        })->paginate(5);

        $getKontensTransform = $getKontens
            ->getCollection()
            ->map(function($data){
                return [
                    'id' => $data->id,
                    'penulis' => [
                        'id' => $data->penulis_id,
                        'nama' => $data->penulis->nama,
                        'foto' => 'images/razen-blog/foto/'.$data->penulis->foto
                    ],
                    'is_admin' => $data->is_admin,
                    'kategori_konten' => $data->kategori_konten->nama,
                    'judul' => $data->judul,
                    'deskripsi_judul' => $data->deskripsi_judul,
                    'deskripsi_overview' => $data->deskripsi_overview,
                    'gambar_mini' => $data->gambar_mini,
                    'tgl' => $data->tgl,
                    'pivot_konten_terkait' => $data->pivot_konten_terkait,
                    'pivot_sub_judul_konten' => $data->pivot_sub_judul_konten
                ];
            });

        $getKontensTransformAndPaginated = new \Illuminate\Pagination\LengthAwarePaginator(
            $getKontensTransform,
            $getKontens->total(),
            $getKontens->perPage(),
            $getKontens->currentPage(), [
                'path' => \Request::url(),
                'query' => [
                    'page' => $getKontens->currentPage()
                ]
            ]
        );

        $kategori_kontens = MasterKategoriKonten::where('tipe_konten', 'berita')->get();

        return view('landing-page.berita.index', [
            'kontens' => $getKontensTransformAndPaginated,
            'kategori_kontens' => $kategori_kontens
        ]);
    }

    public function all_kategori($tipe_konten)
    {
        $getKontens = Konten::whereHas('kategori_konten', function($q) use ($tipe_konten){
            $q->where('tipe_konten', $tipe_konten);
        })->paginate(5);

        $getKontensTransform = $getKontens
            ->getCollection()
            ->map(function($data){
                return [
                    'id' => $data->id,
                    'penulis' => [
                        'id' => $data->penulis_id,
                        'nama' => $data->penulis->nama,
                        'foto' => 'images/razen-blog/foto/'.$data->penulis->foto
                    ],
                    'is_admin' => $data->is_admin,
                    'kategori_konten' => $data->kategori_konten->nama,
                    'judul' => $data->judul,
                    'deskripsi_judul' => $data->deskripsi_judul,
                    'deskripsi_overview' => $data->deskripsi_overview,
                    'gambar_mini' => $data->gambar_mini,
                    'tgl' => $data->tgl,
                    'pivot_konten_terkait' => $data->pivot_konten_terkait,
                    'pivot_sub_judul_konten' => $data->pivot_sub_judul_konten
                ];
            });

        $getKontensTransformAndPaginated = new \Illuminate\Pagination\LengthAwarePaginator(
            $getKontensTransform,
            $getKontens->total(),
            $getKontens->perPage(),
            $getKontens->currentPage(), [
                'path' => \Request::url(),
                'query' => [
                    'page' => $getKontens->currentPage()
                ]
            ]
        );

        return response()->json(['kontens' => $getKontensTransformAndPaginated]);
    }

    public function filter_kategori($id)
    {
        $getKontens = Konten::where('kategori_konten_id', $id)->paginate(5);

        $getKontensTransform = $getKontens
            ->getCollection()
            ->map(function($data){
                return [
                    'id' => $data->id,
                    'penulis' => [
                        'id' => $data->penulis_id,
                        'nama' => $data->penulis->nama,
                        'foto' => 'images/razen-blog/foto/'.$data->penulis->foto
                    ],
                    'is_admin' => $data->is_admin,
                    'kategori_konten' => $data->kategori_konten->nama,
                    'judul' => $data->judul,
                    'deskripsi_judul' => $data->deskripsi_judul,
                    'deskripsi_overview' => $data->deskripsi_overview,
                    'gambar_mini' => $data->gambar_mini,
                    'tgl' => $data->tgl,
                    'pivot_konten_terkait' => $data->pivot_konten_terkait,
                    'pivot_sub_judul_konten' => $data->pivot_sub_judul_konten
                ];
            });

        $getKontensTransformAndPaginated = new \Illuminate\Pagination\LengthAwarePaginator(
            $getKontensTransform,
            $getKontens->total(),
            $getKontens->perPage(),
            $getKontens->currentPage(), [
                'path' => \Request::url(),
                'query' => [
                    'page' => $getKontens->currentPage()
                ]
            ]
        );

        return response()->json(['kontens' => $getKontensTransformAndPaginated]);
    }

    public function berita_detail($id)
    {
        $konten = Konten::find($id);
        return view('landing-page.berita.detail', [
            'konten' => $konten
        ]);
    }

    public function profesi()
    {
        $getKontens = Konten::whereHas('kategori_konten', function($q){
            $q->where('tipe_konten', 'profesi');
        })->paginate(5);

        $getKontensTransform = $getKontens
            ->getCollection()
            ->map(function($data){
                return [
                    'id' => $data->id,
                    'penulis' => [
                        'id' => $data->penulis_id,
                        'nama' => $data->penulis->nama,
                        'foto' => 'images/razen-blog/foto/'.$data->penulis->foto
                    ],
                    'is_admin' => $data->is_admin,
                    'kategori_konten' => $data->kategori_konten->nama,
                    'judul' => $data->judul,
                    'deskripsi_judul' => $data->deskripsi_judul,
                    'deskripsi_overview' => $data->deskripsi_overview,
                    'gambar_mini' => $data->gambar_mini,
                    'tgl' => $data->tgl,
                    'pivot_konten_terkait' => $data->pivot_konten_terkait,
                    'pivot_sub_judul_konten' => $data->pivot_sub_judul_konten
                ];
            });

        $getKontensTransformAndPaginated = new \Illuminate\Pagination\LengthAwarePaginator(
            $getKontensTransform,
            $getKontens->total(),
            $getKontens->perPage(),
            $getKontens->currentPage(), [
                'path' => \Request::url(),
                'query' => [
                    'page' => $getKontens->currentPage()
                ]
            ]
        );

        $kategori_kontens = MasterKategoriKonten::where('tipe_konten', 'profesi')->get();
        return view('landing-page.profesi.index', [
            'kontens' => $getKontensTransformAndPaginated,
            'kategori_kontens' => $kategori_kontens
        ]);
    }

    public function profesi_detail($id)
    {
        $konten = Konten::find($id);
        return view('landing-page.profesi.detail', [
            'konten' => $konten
        ]);
    }

    public function teknis()
    {
        $getKontens = Konten::whereHas('kategori_konten', function($q){
            $q->where('tipe_konten', 'teknis');
        })->paginate(5);

        $getKontensTransform = $getKontens
            ->getCollection()
            ->map(function($data){
                return [
                    'id' => $data->id,
                    'penulis' => [
                        'id' => $data->penulis_id,
                        'nama' => $data->penulis->nama,
                        'foto' => 'images/razen-blog/foto/'.$data->penulis->foto
                    ],
                    'is_admin' => $data->is_admin,
                    'kategori_konten' => $data->kategori_konten->nama,
                    'judul' => $data->judul,
                    'deskripsi_judul' => $data->deskripsi_judul,
                    'deskripsi_overview' => $data->deskripsi_overview,
                    'gambar_mini' => $data->gambar_mini,
                    'tgl' => $data->tgl,
                    'pivot_konten_terkait' => $data->pivot_konten_terkait,
                    'pivot_sub_judul_konten' => $data->pivot_sub_judul_konten
                ];
            });

        $getKontensTransformAndPaginated = new \Illuminate\Pagination\LengthAwarePaginator(
            $getKontensTransform,
            $getKontens->total(),
            $getKontens->perPage(),
            $getKontens->currentPage(), [
                'path' => \Request::url(),
                'query' => [
                    'page' => $getKontens->currentPage()
                ]
            ]
        );

        $kategori_kontens = MasterKategoriKonten::where('tipe_konten', 'teknis')->get();
        return view('landing-page.teknis.index', [
            'kontens' => $getKontensTransformAndPaginated,
            'kategori_kontens' => $kategori_kontens
        ]);
    }

    public function teknis_detail($id)
    {
        $konten = Konten::find($id);
        return view('landing-page.teknis.detail', [
            'konten' => $konten
        ]);
    }

    public function berita_indonesia()
    {
        $url_api = "https://api-berita-indonesia.vercel.app/";
        $channels = ["antara", "cnbc", "cnn", "jpnn", "kumparan", "merdeka", "okezone", "republika", "sindonews", "suara", "tempo", "tribun"];
        $kategori_berita_indonesias = ["terbaru", "politik", "hukum", "ekonomi", "bola", "olahraga", "humaniora", "lifestyle", "hiburan", "dunia", "tekno", "otomotif", "investment", "news", "market", "entrepreneur", "syariah", "tech", "internasional", "teknologi", "gayahidup", "jakarta", "gaya", "khas", "sehat", "jateng", "celebrity", "sports", "economy", "techno", "daerah", "khazanah", "islam", "leisure", "nasional", "metro", "ekbis", "international", "sains", "edukasi", "kalam", "bisnis", "entertainment", "health", "cantik", "seleb", "travel", "difabel", "creativelab", "inforial", "event", "superskor", "sport", "parapuan"];
        $beritas = [];
        $client = new Client();
        foreach ($channels as $channel) {
            $url = $url_api. $channel . '/terbaru';
            try {
                $response_data = json_decode($client->get($url, ['verify' => false])->getBody());
                if($response_data->success == 'true')
                {
                    $data_berita = $response_data->data->posts;
                    for ($i=0; $i < 3; $i++) {
                        $beritas[] = $data_berita[$i];
                    }
                }
            } catch (\Throwable $th) {

            }
        }
        return view('landing-page.berita-indonesia.index', [
            'beritas' => $beritas,
            'kategori_berita_indonesias' => $kategori_berita_indonesias
        ]);
    }

    public function kosakata()
    {
        return view('landing-page.kosakata.index');
    }

    public function kosakata_detail($id)
    {
        $konten = Konten::find($id);
        return view('landing-page.kosakata.detail', [
            'konten' => $konten
        ]);
    }

    public function get_berita()
    {
        $client = new Client();
        $url = 'https://newsapi.org/v2/top-headlines?country=id&apiKey=2d97d91574f348189a28788470678db4';
        $response = $client->get($url);

        return $response->getBody();
    }

    public function berita_indonesia_filter_kategori($kategori)
    {
        $url_api = "https://api-berita-indonesia.vercel.app/";
        $channels = ["antara", "cnbc", "cnn", "jpnn", "kumparan", "merdeka", "okezone", "republika", "sindonews", "suara", "tempo", "tribun"];
        $beritas = [];
        $client = new Client();
        foreach ($channels as $channel) {
            $url = $url_api. $channel . '/'.$kategori;
            try {
                $response_data = json_decode($client->get($url, ['verify' => false])->getBody());
                if($response_data->success == 'true')
                {
                    $data_berita = $response_data->data->posts;
                    for ($i=0; $i < 3; $i++) {
                        $beritas[] = $data_berita[$i];
                    }
                }
            } catch (\Throwable $th) {

            }
        }

        return response()->json(['kontens' => $beritas]);
    }

    public function berita_indonesia_filter_kategori_reset()
    {
        $url_api = "https://api-berita-indonesia.vercel.app/";
        $channels = ["antara", "cnbc", "cnn", "jpnn", "kumparan", "merdeka", "okezone", "republika", "sindonews", "suara", "tempo", "tribun"];
        $beritas = [];
        $client = new Client();
        foreach ($channels as $channel) {
            $url = $url_api. $channel . '/terbaru';
            try {
                $response_data = json_decode($client->get($url, ['verify' => false])->getBody());
                if($response_data->success == 'true')
                {
                    $data_berita = $response_data->data->posts;
                    for ($i=0; $i < 3; $i++) {
                        $beritas[] = $data_berita[$i];
                    }
                }
            } catch (\Throwable $th) {

            }
        }

        return response()->json(['kontens' => $beritas]);
    }
}
