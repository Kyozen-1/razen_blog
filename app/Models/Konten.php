<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
    use HasFactory;

    public function penulis()
    {
        return $this->belongsTo('App\Models\Penulis', 'penulis_id');
    }

    public function kategori_konten()
    {
        return $this->belongsTo('App\Models\MasterKategoriKonten', 'kategori_konten_id');
    }

    public function parent_pivot_konten_terkait()
    {
        return $this->hasMany('App\Models\PivotKontenTerkait', 'parent_id');
    }

    public function child_pivot_konten_terkait()
    {
        return $this->hasMany('App\Models\PivotKontenTerkait', 'child_id');
    }

    public function pivot_sub_judul_konten()
    {
        return $this->hasMany('App\Models\PivotSubJudulKonten', 'konten_id');
    }

    public function pivot_konten_and_web()
    {
        return $this->hasMany('App\Models\PivotKontenAndWeb', 'konten_id');
    }
}
