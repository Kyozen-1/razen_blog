<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PivotSubJudulKonten extends Model
{
    use HasFactory;

    public function konten()
    {
        return $this->belongsTo('App\Models\Konten', 'konten_id');
    }
}
