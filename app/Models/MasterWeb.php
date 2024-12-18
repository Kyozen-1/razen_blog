<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterWeb extends Model
{
    use HasFactory;

    public function pivot_konten_and_web()
    {
        return $this->hasMany('App\Models\PivotKontenAndWeb', 'master_web_id');
    }
}
