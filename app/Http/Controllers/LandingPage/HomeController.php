<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konten;
use App\Models\MasterKategoriKonten;
use App\Models\PivotKontenTerkait;
use App\Models\PivotSubJudulKonten;

class HomeController extends Controller
{
    public function beranda()
    {
        return view('landing-page.beranda.index');
    }

    public function berita()
    {
        return view('landing-page.berita.index');
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
        return view('landing-page.teknis.index');
    }

    public function kosakata()
    {
        return view('landing-page.kosakata.index');
    }
}
