<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    public function pivot_profil_media_sosial()
    {
        return $this->hasMany('App\Models\PivotProfilMediaSosial', 'profil_id');
    }
}
