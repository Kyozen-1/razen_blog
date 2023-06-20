<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingPageKosakata extends Model
{
    use HasFactory;
    protected $table = 'landing_page_kosakatas';
    protected $guarded = 'id';
}
