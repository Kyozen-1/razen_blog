<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    use HasFactory;

    public function akun_penulis()
    {
        return $this->hasOne('App\Models\AkunPenulis', 'penulis_id');
    }

    public function pivot_penulis_media_sosial()
    {
        return $this->hasMany('App\Models\PivotPenulisMediaSosial', 'penulis_id');
    }
}
