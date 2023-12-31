<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterMediaSosial extends Model
{
    use HasFactory;
    protected $table = 'master_media_sosials';
    protected $guarded = 'id';

    public function pivot_profil_media_sosial()
    {
        return $this->hasMany('App\Models\PivotProfilMediaSosial', 'media_sosial_id');
    }
    public function pivot_penulis_media_sosial()
    {
        return $this->hasMany('App\Models\PivotPenulisMediaSosial', 'media_sosial_id');
    }
}
