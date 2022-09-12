<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'title_ar',
        'slug',
        'content',
        'content_ar',
        'is_navbar_page',
        'is_footer_page',
        'status',
    ];
}
