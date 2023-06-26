<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PivotPenulisMediaSosial extends Model
{
    use HasFactory;

    public function media_sosial()
    {
        return $this->belongsTo('App\Models\MasterMediaSosial', 'media_sosial_id');
    }

    public function penulis()
    {
        return $this->belongsTo('App\Models\Penulis', 'penulis_id');
    }
}
