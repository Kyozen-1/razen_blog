<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PivotKontenTerkait extends Model
{
    use HasFactory;

    public function parent()
    {
        return $this->belongsTo('App\Models\Konten', 'parent_id');
    }

    public function child()
    {
        return $this->belongsTo('App\Models\Konten', 'child_id');
    }
}
