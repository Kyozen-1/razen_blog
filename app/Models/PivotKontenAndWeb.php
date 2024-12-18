<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PivotKontenAndWeb extends Model
{
    use HasFactory;

    public function konten()
    {
        return $this->belongsTo('App\Models\Konten', 'konten_id');
    }

    public function master_web()
    {
        return $this->belongsTo('App\Models\MasterWeb', 'master_web_id');
    }
}
