<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingPageBerita extends Model
{
    use HasFactory;

    protected $table = 'landing_page_beritas';
    protected $guarded = 'id';
}
